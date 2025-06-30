@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 1.4rem; margin-bottom: 10px;">User Category Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:14px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;">
                    <td style="padding:4px; border:1px solid #ccc;">Jobseeker</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;"><span style="font-size:16px; color:#444;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:4px; border:1px solid #ccc;">Recruiter - Company</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;"><span style="font-size:16px; color:#444;">&#9432;</span></td>
                </tr>
                <tr style="background:#f9f9e9;">
                    <td style="padding:4px; border:1px solid #ccc;">Recruiter - Consultants</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;"><span style="font-size:16px; color:#444;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:4px; border:1px solid #ccc;">Others</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;"><span style="font-size:16px; color:#444;">&#9432;</span></td>
                </tr>
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:13px; color:#444;">Displaying 1 to 4 (of 4 user categories)</span>
            <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">New</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">User Category</div>
            <div style="padding:6px 10px;">
                <div style="font-weight:bold;">Jobseeker</div>
                <div style="margin-bottom:6px; color:#444; font-size:14px;">Please choose an action</div>
                <div class="d-flex mb-2">
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:15px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:15px; padding:2px 18px;">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 