<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class RecruiterController extends Controller
{
    public function index(Request $request)
    {
        // Dummy data for now
        $companies = [
            [
                'id' => 1,
                'first_name' => 'Aryan',
                'last_name' => 'Barapatre',
                'email' => 'bettlemedia@gmail.com',
                'company' => 'Bettle Media',
                'mobile' => '8830318024',
                'status' => 'active',
                'inserted_at' => '29th Jun, 2025',
                'newsletter' => true,
            ],
            [
                'id' => 2,
                'first_name' => 'AMAR',
                'last_name' => 'SINGH',
                'email' => 'arihant.infocom@gmail.com',
                'company' => 'MAA TARINI COURIER SERVICES',
                'mobile' => '9871144458',
                'status' => 'inactive',
                'inserted_at' => '27th Jun, 2025',
                'newsletter' => false,
            ],
            // ... add more dummy companies as needed
        ];

        $selectedCompany = $companies[0]; // Default selected for now

        return view('admin.recruiters.index', compact('companies', 'selectedCompany'));
    }
} 