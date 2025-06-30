@extends('admin.dashboard')

@section('content')
<div style="display: flex; justify-content: flex-end; align-items: center; margin: 0 10px 8px 10px;">
    <label for="searchConsultant" style="font-size: 13px; margin-right: 4px;">Search Consultant</label>
    <select id="searchConsultant" style="font-size:13px;">
        <option>All</option>
    </select>
</div>
<div class="row" style="margin: 10px;">
    <div class="col-md-12">
        <h2 style="color: #666; font-size: 1.4rem; margin-bottom: 10px;">List of Consultants</h2>
        <fieldset style="border:1px solid #aaa; padding:10px 10px 0 10px; margin-bottom:10px; font-size:14px;">
            <legend style="font-size:15px; color:#222; padding:0 8px;">Filter Companies</legend>
            <form class="row align-items-end" style="margin-bottom:0;">
                <div class="col-md-3 mb-2">
                    <label for="first_name" style="font-weight:bold;">First Name :</label>
                    <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" style="font-size:13px;">
                </div>
                <div class="col-md-3 mb-2">
                    <label for="email" style="font-weight:bold;">Email :</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email" style="font-size:13px;">
                </div>
                <div class="col-md-3 mb-2">
                    <label for="mobile" style="font-weight:bold;">Mobile :</label>
                    <input type="text" class="form-control form-control-sm" id="mobile" name="mobile" style="font-size:13px;">
                </div>
                <div class="col-md-3 mb-2">
                    <label for="last_name" style="font-weight:bold;">Last Name :</label>
                    <input type="text" class="form-control form-control-sm" id="last_name" name="last_name" style="font-size:13px;">
                </div>
                <div class="col-md-3 mb-2">
                    <label for="company" style="font-weight:bold;">Company :</label>
                    <input type="text" class="form-control form-control-sm" id="company" name="company" style="font-size:13px;">
                </div>
                <div class="col-md-3 mb-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-light border" style="font-weight:bold; font-size:15px; padding:2px 18px;">Search</button>
                </div>
            </form>
        </fieldset>
        <table style="width:100%; border-collapse:collapse; font-size:14px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:4px; border:1px solid #ccc;"></th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Email Address</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Company</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Mobile</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Status</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Inserted</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Newsletter</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="9" style="text-align:left; padding:8px; color:#444;">Displaying 0 to 0 (of 0 recruiters)</td>
                </tr>
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:13px; color:#444;">Page 0 of 0</span>
            <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">New</button>
        </div>
    </div>
</div>
@endsection 