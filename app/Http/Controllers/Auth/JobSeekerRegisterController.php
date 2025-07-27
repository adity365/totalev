<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use App\Models\JobSeeker;
use Illuminate\Support\Facades\DB;

class JobSeekerRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.jobseeker-register');
    }

    public function register(Request $request)
    {
        // Debug: Log the request data
        \Log::info('JobSeeker Registration Request:', $request->all());

        $sessionData = Session::get('jobseeker.temp_data');
        $otp = Session::get('otp_email');
        $otp_mobile = Session::get('otp_mobile');
        $otpEmail = Session::get('otp_email_for');
        $emailOtpInput = $request->input('email_otp');
        $mobileOtpInput = $request->input('mobile_otp');

        \Log::info('OTP:', ['otp' => $otp, 'otpEmail' => $otpEmail, 'emailOtpInput' => $emailOtpInput]);
        if (!$otp || !$otpEmail || !$otp_mobile) {
            return response()->json([
                'success' => false,
                'errors' => ['email_otp' => 'OTP session expired. Please request a new OTP.']
            ], 422);
        }

        if ($otp !== $emailOtpInput) {
            return response()->json([
                'success' => false,
                'errors' => ['email_otp' => 'Invalid OTP entered.']
            ], 422);
        }

        if ($otp_mobile !== $mobileOtpInput) {
            return response()->json([
                'success' => false,
                'errors' => ['email_otp' => 'Invalid OTP entered.']
            ], 422);
        }

        if ($otpEmail !== $sessionData['email']) {
            return response()->json([
                'success' => false,
                'errors' => ['email_otp' => 'OTP does not match with this email.']
            ], 422);
        }

        if (!$sessionData) {
            return response()->json([
                'success' => false,
                'errors' => ['error' => 'Session expired or invalid. Please register again.']
            ], 422);
        }

        $finalData = array_merge($sessionData, $request->all());
        
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:job_seekers,email,',
            'password' => 'required|string|min:6|confirmed',
            'mobile' => 'required|string|max:15|unique:job_seekers,phone,',
            'city' => 'required|string|max:255',
            'area' => 'nullable|string|max:255',
            'pincode' => 'nullable|string|max:10',
            'street' => 'nullable|string|max:500',
            'referer_email' => 'nullable|string|max:255',
            'privacy' => 'nullable|string|max:50',
            'newsletter' => 'nullable',
            'whatsapp' => 'nullable',
            'gender' => 'nullable|string|max:20',
            'dob' => 'nullable|string|max:20',
            'work_status' => 'nullable|string|max:50',
            'experience_years' => 'nullable|string|max:20',
            'education' => 'nullable|string|max:100',
            'job_type' => 'nullable|string|max:50',
            'job_category' => 'nullable|string|max:100',
            'job_subcategory' => 'nullable|string|max:100',
            'job_sub_subcategory' => 'nullable|string|max:100',
            'job_roles' => 'nullable|string|max:255',
            'job_skills' => 'nullable|string|max:255',
            'cv_path' => 'nullable|string|max:255',
            'profile_photo_path' => 'nullable|string|max:255',
        ];
        $messages = [
            'mobile.unique' => 'This phone number is already registered.',
            'email.unique' => 'This email address is already registered.',
            'password.confirmed' => 'Password confirmation does not match.',
        ];

        $validated = validator($finalData, $rules, $messages)->validate();

        try {
            // Handle file uploads
            // $cvPath = null;
            // $profilePhotoPath = null;
            // if ($request->hasFile('cv')) {
            //     $cvPath = $request->file('cv')->store('jobseekers/cv', 'public');
            // }
            // if ($request->hasFile('profile_photo')) {
            //     $profilePhotoPath = $request->file('profile_photo')->store('jobseekers/profile_photos', 'public');
            // }

            $cvPath = $request->hasFile('cv') ? $request->file('cv')->store('jobseekers/cv', 'public') : null;
            $profilePhotoPath = $request->hasFile('profile_photo') ? $request->file('profile_photo')->store('jobseekers/profile_photos', 'public') : null;

            // Handle checkbox defaults as integers
            $newsletter = isset($finalData['newsletter']) ? 1 : 0;
            $whatsapp = isset($finalData['whatsapp']) ? 1 : 0;

            // Create or update the jobseeker
            $jobseeker = JobSeeker::updateOrCreate(
                [
                    'name' => $finalData['name'],
                    'email' => $finalData['email'],
                    'password' => Hash::make($finalData['password']),
                    'phone' => $finalData['mobile'],
                    'city' => $finalData['city'],
                    'area' => $finalData['area'] ?? null,
                    'pincode' => $finalData['pincode'] ?? null,
                    'street' => $finalData['street'] ?? null,
                    'referer_email' => $finalData['referer_email'] ?? null,
                    'privacy' => $finalData['privacy'] ?? null,
                    'newsletter' => $newsletter,
                    'whatsapp' => $whatsapp,
                    'gender' => $finalData['gender'] ?? null,
                    'dob' => $finalData['dob'] ?? null,
                    'work_status' => $finalData['work_status'] ?? null,
                    'experience_years' => $finalData['experience_years'] ?? null,
                    'education' => $finalData['education'] ?? null,
                    'job_type' => $finalData['job_type'] ?? null,
                    'job_category' => $finalData['job_category'] ?? null,
                    'job_subcategory' => $finalData['job_subcategory'] ?? null,
                    'job_sub_subcategory' => $finalData['job_sub_subcategory'] ?? null,
                    'job_roles' => $finalData['job_roles'] ?? null,
                    'job_skills' => $finalData['job_skills'] ?? null,
                    'cv_path' => $cvPath,
                    'profile_photo_path' => $profilePhotoPath,
                ]
            );

            
            \Log::info('JobSeeker created/updated successfully:', ['id' => $jobseeker->id]);
            // Auto-login the user after registration
            Auth::guard('jobseeker')->login($jobseeker);

            Session::forget(['jobseeker.temp_data', 'otp_email', 'otp_email_for']);

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['success' => true, 'next' => 'personal_details']);
            }

        } catch (\Exception $e) {
            \Log::error('JobSeeker registration error:', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
            $errorMessage = 'Registration failed. ' . $e->getMessage();
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['success' => false, 'errors' => ['error' => $errorMessage]], 500);
            }
            return back()->withErrors(['error' => $errorMessage])->withInput();
        }
    }

    public function sendOTP(Request $request)
    {
        \Log::info('OTP request received:', $request->all());
        
        try {
            $request->merge([
                'newsletter' => $request->has('newsletter') ? 1 : 0,
                'whatsapp' => $request->has('whatsapp') ? 1 : 0,
            ]);

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:job_seekers,email',
                'password' => 'required|string|min:6|confirmed',
                'mobile' => 'required|string|max:15|unique:job_seekers,phone',
                'city' => 'required|string|max:255',
                'area' => 'nullable|string|max:255',
                'pincode' => 'nullable|string|max:10',
                'street' => 'nullable|string|max:500',
                'referer_email' => 'nullable|string|max:255',
                'privacy' => 'nullable|string|max:50',
                'newsletter' => 'nullable|boolean',
                'whatsapp' => 'nullable|boolean',
            ], [
                'mobile.unique' => 'This phone number is already registered.',
                'email.unique' => 'This email address is already registered.',
                'password.confirmed' => 'Password confirmation does not match.',
            ]);

            $registrationData = $request->only([
                'name', 'email', 'password', 'password_confirmation',
                'mobile', 'city', 'area', 'pincode', 'street',
                'referer_email', 'privacy', 'newsletter', 'whatsapp',
            ]);
            
            Session::put('jobseeker.temp_data', $registrationData);
            
            // Generate 6-digit OTP
            $otp = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $otp_mobile = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            
            Session::put('otp_email', $otp);
            Session::put('otp_mobile', $otp_mobile);
            Session::put('otp_email_for', $request->email);

            \Log::info('Generated OTP:', ['otp' => $otp]);
            // Send OTP via email
            try {
                \Mail::raw("Your OTP for Jobseeker Registration is:\n\n Email OTP: {$otp}\n\n Mobile OTP: {$otp_mobile}", function($message) use ($request) {
                    $message->to($request->email)
                            ->subject('Registration OTP - VacantTree');
                });
                
                \Log::info('OTP email sent successfully to:', ['email' => $request->email]);
            } catch (\Exception $e) {
                \Log::error('Email sending failed:', ['error' => $e->getMessage()]);
                // Continue even if email fails, OTP is logged
            }

            return response()->json([
                'success' => true,
                'message' => 'OTP sent to your email! (Check logs for OTP: ' . $otp . ')'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('OTP validation error:', ['errors' => $e->errors()]);
            return response()->json([
                'success' => false,
                'message' => 'Validation failed: ' . implode(', ', Arr::flatten($e->errors()))
            ], 422);
        } catch (\Exception $e) {
            \Log::error('OTP sending error:', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to send OTP. Please try again. Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function resendOtp(Request $request)
    {
        \Log::info('Resend OTP request received:', $request->all());

        try {
            $request->validate([
                'email' => 'required|email',
            ]);

            $sessionData = Session::get('jobseeker.temp_data');
            $otpEmail = Session::get('otp_email_for');

            if (!$sessionData || $otpEmail !== $request->email) {
                return response()->json([
                    'success' => false,
                    'message' => 'Session expired or email mismatch. Please restart registration.'
                ], 422);
            }

            $otp = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $otp_mobile = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            Session::put('otp_email', $otp); // Replace previous OTP
            Session::put('otp_mobile', $otp_mobile); // Replace previous OTP

            \Log::info('Resent OTP:', ['otp' => $otp]);

            \Mail::raw("Your OTP for Jobseeker Registration is:\n\n Email OTP: {$otp}\n\n Mobile OTP: {$otp_mobile}", function($message) use ($request) {
                $message->to($request->email)
                        ->subject('Resent OTP - VacantTree');
            });

            \Log::info('OTP resent email sent to:', ['email' => $request->email]);

            return response()->json([
                'success' => true,
                'message' => 'OTP resent successfully to your email.'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed: ' . implode(', ', Arr::flatten($e->errors()))
            ], 422);
        } catch (\Exception $e) {
            \Log::error('Resend OTP error:', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to resend OTP. Please try again. Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updatePersonalDetails(Request $request)
    {
        $user = auth('jobseeker')->user();
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Not authenticated.'], 401);
        }
        $validated = $request->validate([
            'gender' => 'required|string',
            'dob' => 'required|string',
            'work_status' => 'required|string',
            'experience_years' => 'nullable|string',
            'education' => 'required|string',
        ]);
        $user->update($validated);
        return response()->json(['success' => true]);
    }

    public function updateJobDetails(Request $request)
    {
        $user = auth('jobseeker')->user();
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Not authenticated.'], 401);
        }
        $validated = $request->validate([
            'job_category' => 'nullable|string',
            'job_subcategory' => 'nullable|string',
            'job_sub_subcategory' => 'nullable|string',
            'job_roles' => 'nullable|array',
            'job_roles.*' => 'nullable|string|max:255',
            'job_skills' => 'nullable|array',
            'job_skills.*' => 'nullable|string|max:255',
            'job_type' => 'nullable|string',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // 2MB max
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // 2MB max
        ]);

        $cvPath = $request->hasFile('cv') ? $request->file('cv')->store('jobseekers/cv', 'public') : null;
        $photoPath = $request->hasFile('profile_photo') ? $request->file('profile_photo')->store('jobseekers/profile_photos', 'public') : null;

        $user->update([
            'job_category' => $validated['job_category'],
            'job_subcategory' => $validated['job_subcategory'],
            'job_sub_subcategory' => $validated['job_sub_subcategory'],
            'job_roles' => $validated['job_roles'] ?? [],
            'job_skills' => $validated['job_skills'] ?? [],
            'job_type' => json_encode($validated['job_type'] ?? []), // Save as JSON array
            'cv_path' => $cvPath,
            'profile_photo_path' => $photoPath,
        ]);

        return response()->json(['success' => true, 'redirect' => route('jobseeker.dashboard')]);
    }

    // Fetch all cities for registration form
    public function getCities()
    {
        $cities = DB::table('cities')->select('city_id', 'city_name')->get();
        return response()->json($cities);
    }

    // Fetch areas for a given city_id
    public function getAreas()
    {
        $areas = DB::table('areas')->select('area_id', 'area_name')->get();
        return response()->json($areas);
    }

    // AJAX search for cities by name
    public function searchCities(Request $request)
    {
        $q = $request->input('q', '');
        $cities = DB::table('cities')
            ->where('city_name', 'like', $q . '%')
            ->select('city_id', 'city_name')
            ->get();
        return response()->json($cities);
    }

    // AJAX search for areas by name (no city_id filter)
    public function searchAreas(Request $request)
    {
        $q = $request->input('q', '');
        $areas = DB::table('areas')
            ->where('area_name', 'like', $q . '%')
            ->select('area_id', 'area_name', 'city_id', 'state_id', 'country_id')
            ->get();
        return response()->json($areas);
    }

    // Get area details for autofill
    public function getAreaDetails($area_id)
    {
        $area = DB::table('areas')->where('area_id', $area_id)->first();
        return response()->json($area);
    }
} 