@extends('frontend.layouts.main')

@section('main-container')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Job Seeker Dashboard</h4>
                    <div>
                        <a href="{{ route('jobseeker.profile.edit') }}" class="btn btn-primary me-2">Edit Profile</a>
                        <form method="POST" action="{{ route('logout.jobseeker') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <h5>Welcome, {{ Auth::guard('jobseeker')->user()->name }}!</h5>
                    <p>You are successfully logged in as a job seeker.</p>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(Auth::guard('jobseeker')->user()->profile && Auth::guard('jobseeker')->user()->profile->profile_completed)
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h6>Profile Information</h6>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Job Category:</strong></td>
                                        <td>{{ Auth::guard('jobseeker')->user()->profile->job_category }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Subcategory:</strong></td>
                                        <td>{{ Auth::guard('jobseeker')->user()->profile->job_subcategory }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Experience Level:</strong></td>
                                        <td>{{ Auth::guard('jobseeker')->user()->profile->experience_level }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Education Level:</strong></td>
                                        <td>{{ Auth::guard('jobseeker')->user()->profile->education_level }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h6>Skills</h6>
                                <div class="mb-3">
                                    @if(Auth::guard('jobseeker')->user()->profile->skills)
                                        @foreach(Auth::guard('jobseeker')->user()->profile->skills as $skill)
                                            <span class="badge bg-primary me-1 mb-1">{{ $skill }}</span>
                                        @endforeach
                                    @endif
                                </div>
                                <h6>Description</h6>
                                <p class="text-muted">{{ Auth::guard('jobseeker')->user()->profile->description }}</p>
                            </div>
                        </div>
                    @else
                        <div class="alert alert-warning">
                            <h6>Profile Incomplete</h6>
                            <p>Please complete your profile to get better job matches.</p>
                            <a href="{{ route('jobseeker.profile.complete') }}" class="btn btn-warning">Complete Profile</a>
                        </div>
                    @endif
                    
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="card bg-primary text-white">
                                <div class="card-body text-center">
                                    <h5>Applied Jobs</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-success text-white">
                                <div class="card-body text-center">
                                    <h5>Saved Jobs</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-info text-white">
                                <div class="card-body text-center">
                                    <h5>Profile Views</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 