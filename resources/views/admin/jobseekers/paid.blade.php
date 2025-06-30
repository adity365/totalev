@extends('admin.dashboard')

@section('content')
<div style="display: flex; justify-content: flex-end; align-items: center; margin: 0 10px 8px 10px;">
    <label for="searchJobseeker" style="font-size: 13px; margin-right: 4px;">Search Jobseeker</label>
    <select id="searchJobseeker" style="font-size:13px;">
        <option>All</option>
    </select>
</div>
<div class="row" style="margin: 10px;">
    <div class="col-md-9">
        <h2 style="color: #666; font-size: 1.4rem; margin-bottom: 10px;">List of Jobseekers</h2>
        <fieldset style="border:1px solid #aaa; padding:10px 10px 0 10px; margin-bottom:10px; font-size:14px;">
            <legend style="font-size:15px; color:#222; padding:0 8px;">Filter Jobseekers</legend>
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
                    <label for="last_name" style="font-weight:bold;">Last Name :</label>
                    <input type="text" class="form-control form-control-sm" id="last_name" name="last_name" style="font-size:13px;">
                </div>
                <div class="col-md-3 mb-2">
                    <label for="mobile" style="font-weight:bold;">Mobile :</label>
                    <input type="text" class="form-control form-control-sm" id="mobile" name="mobile" style="font-size:13px;">
                </div>
            </form>
        </fieldset>
        <table style="width:100%; border-collapse:collapse; font-size:14px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:4px; border:1px solid #ccc;"></th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Email Address</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Mobile</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Inserted</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Status</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Paid</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9f2;">
                    <td style="text-align:center;"><input type="checkbox"></td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;">PRITY BHARTI</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;">bhartipriy77@gmail.com</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;"></td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;">14th Jan, 2025</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;">
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative; margin-right:2px;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#f99; position:absolute; top:3px; left:3px;"></span>
                        </span>
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#090; position:absolute; top:3px; left:3px;"></span>
                        </span>
                    </td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;"><span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative;"><span style="display:block; width:10px; height:10px; border-radius:50%; background:#090; position:absolute; top:3px; left:3px;"></span></span></td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;"><span style="color:#3366cc; font-size:18px; cursor:pointer;">&#9654;</span></td>
                </tr>
            </tbody>
        </table>
        <div style="margin: 4px 0 0 8px; font-size:13px;">
            <span style="color:#3366cc; cursor:pointer;">Check All</span> / <span style="color:#3366cc; cursor:pointer;">Uncheck All</span> With <span style="font-weight:bold;">Selected</span> <span style="color:#3366cc; cursor:pointer;">Delete</span>
        </div>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:13px; color:#444;">Displaying 1 to 1 (of 1 jobseekers)</span>
            <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">New</button>
        </div>
    </div>
    <div class="col-md-3">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">PRITY BHARTI</div>
            <div style="padding:6px 10px;">
                <div style="margin-bottom:6px; color:#444; font-size:14px;">Please make any necessary changes.</div>
                <div class="d-flex mb-2">
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:15px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:15px; padding:2px 18px;">Delete</button>
                </div>
                <div style="font-weight:bold;">Please choose an action</div>
                <div style="font-size:13px; color:#444; margin-top:8px;">
                    <div>Last IP address<br>49.36.189.208</div>
                    <div style="margin-top:6px;">Last updated on<br>0000-00-00 00:00:00</div>
                    <div style="margin-top:6px;">Last login on<br>2025-01-14 10:25:29</div>
                    <div style="margin-top:6px;">No of logon<br>1</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 