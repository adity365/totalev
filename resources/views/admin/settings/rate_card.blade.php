@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Plan type Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Description</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Time period</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Fee (Rs)</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Post Jobs & Search Resumes 2</td><td style="padding:8px; border:1px solid #ccc;">(60 Days Resume Access + 3 Job Posting) within 15 day's from activation/ purchase</td><td style="padding:8px; border:1px solid #ccc;">2 Months</td><td style="padding:8px; border:1px solid #ccc;">Rs 3,000.00/-</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">search resume 4</td><td style="padding:8px; border:1px solid #ccc;">(12 Month Database Access )</td><td style="padding:8px; border:1px solid #ccc;">12 Months</td><td style="padding:8px; border:1px solid #ccc;">Rs 18,000.00/-</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Post Jobs & Search Resumes 4</td><td style="padding:8px; border:1px solid #ccc;">(12 month Resume Access + Unlimited Job Posting) within 10 month from activation/ purchase )</td><td style="padding:8px; border:1px solid #ccc;">12 Months</td><td style="padding:8px; border:1px solid #ccc;">Rs 10,200.00/-</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Post Jobs & Search Resumes 3</td><td style="padding:8px; border:1px solid #ccc;">(6 Month Resume Access + 10 Job Posting) within 120 day's from activation/ purchase</td><td style="padding:8px; border:1px solid #ccc;">6 Months</td><td style="padding:8px; border:1px solid #ccc;">Rs 6,000.00/-</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">search resume 3</td><td style="padding:8px; border:1px solid #ccc;">(6 Month Database Access )</td><td style="padding:8px; border:1px solid #ccc;">6 Months</td><td style="padding:8px; border:1px solid #ccc;">Rs 11,250.00/-</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">search resume 2</td><td style="padding:8px; border:1px solid #ccc;">(3 Month Database Access )</td><td style="padding:8px; border:1px solid #ccc;">3 Months</td><td style="padding:8px; border:1px solid #ccc;">Rs 6,750.00/-</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">search resume 1</td><td style="padding:8px; border:1px solid #ccc;">(1Month Database Access )</td><td style="padding:8px; border:1px solid #ccc;">1 Month</td><td style="padding:8px; border:1px solid #ccc;">Rs 2,500.00/-</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Job Posting 1</td><td style="padding:8px; border:1px solid #ccc;">(1Job) within 2 month from activation/ purchase</td><td style="padding:8px; border:1px solid #ccc;">2 Months</td><td style="padding:8px; border:1px solid #ccc;">Rs 999.00/-</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Post Jobs & Search Resumes 1</td><td style="padding:8px; border:1px solid #ccc;">(60 Days Resume Access + 1 Job Posting +1 Posting Free) within 7 day's from activation/ purchase</td><td style="padding:8px; border:1px solid #ccc;">2 Months</td><td style="padding:8px; border:1px solid #ccc;">Rs 1,250.00/-</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Job Posting 2</td><td style="padding:8px; border:1px solid #ccc;">(5Jobs ) within 4 month from activation/ purchase</td><td style="padding:8px; border:1px solid #ccc;">6 Months</td><td style="padding:8px; border:1px solid #ccc;">Rs 4,000.00/-</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Job Posting 3</td><td style="padding:8px; border:1px solid #ccc;">(Unlimited Jobs ) within 10 month from activation/ purchase</td><td style="padding:8px; border:1px solid #ccc;">12 Months</td><td style="padding:8px; border:1px solid #ccc;">Rs 9,999.00/-</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:15px; color:#444;">Displaying 1 to 11 (of 11 plan type)</span>
            <span style="font-size:15px;">Page 1 of 1</span>
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Plan type</div>
            <div style="padding:6px 10px;">
                <div style="font-weight:bold;">Post Jobs & Search Resumes 2</div>
                <div class="d-flex mb-2" style="margin:8px 0;">
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                </div>
                <div style="margin-bottom:6px; color:#444; font-size:15px;">Please choose an action</div>
                <div style="margin-bottom:2px; color:#444; font-size:15px;">Time period<br>2 Months</div>
                <div style="margin-bottom:2px; color:#444; font-size:15px;">Fee<br>Rs 3,000.00/-</div>
                <div style="margin-bottom:2px; color:#444; font-size:15px;">Post Jobs<br>3</div>
                <div style="margin-bottom:2px; color:#444; font-size:15px;">No Of Search<br>Unlimited</div>
            </div>
        </div>
    </div>
</div>
@endsection 