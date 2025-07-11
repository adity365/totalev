@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Education level Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Name(French)</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Any</td><td style="padding:8px; border:1px solid #ccc;">Any</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Diploma</td><td style="padding:8px; border:1px solid #ccc;">Diploma</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Some High school Coursework</td><td style="padding:8px; border:1px solid #ccc;">Some High school Coursework</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">High School or Equivalent</td><td style="padding:8px; border:1px solid #ccc;">High School or Equivalent</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Certification</td><td style="padding:8px; border:1px solid #ccc;">Certification</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Vocational</td><td style="padding:8px; border:1px solid #ccc;">Vocational</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Some College Coursework completed</td><td style="padding:8px; border:1px solid #ccc;">Some College Coursework completed</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Associates Degree</td><td style="padding:8px; border:1px solid #ccc;">Associates Degree</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Bachelors Degree</td><td style="padding:8px; border:1px solid #ccc;">Bachelors Degree</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Masters Degree</td><td style="padding:8px; border:1px solid #ccc;">Masters Degree</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Doctorate</td><td style="padding:8px; border:1px solid #ccc;">Doctorate</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Professional</td><td style="padding:8px; border:1px solid #ccc;">Professional</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:15px; color:#444;">Displaying 1 to 12 (of 12 education level)</span>
            <span style="font-size:15px;">Page 1 of 1</span>
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Education level</div>
            <div style="padding:6px 10px;">
                <div style="font-weight:bold;">Any</div>
                <div class="d-flex mb-2" style="margin:8px 0;">
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                </div>
                <div style="margin-bottom:6px; color:#444; font-size:15px;">Please choose an action</div>
            </div>
        </div>
    </div>
</div>
@endsection 