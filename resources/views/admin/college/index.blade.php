@extends('admin.dashboard')

@section('content')
<div style="display: flex; justify-content: flex-end; align-items: center; margin: 0 10px 8px 10px;"></div>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <h2 style="color: #666; font-size: 1.4rem; margin-bottom: 10px;">College / Institute Management</h2>
        <fieldset style="border:1px solid #aaa; padding:10px 10px 0 10px; margin-bottom:10px; font-size:14px;">
            <legend style="font-size:15px; color:#222; padding:0 8px;">Filter Colleges</legend>
            <form class="row align-items-end" style="margin-bottom:0;">
                <div class="col-md-4 mb-2">
                    <label for="college_name" style="font-weight:bold;">College Name :</label>
                    <input type="text" class="form-control form-control-sm" id="college_name" name="college_name" style="font-size:13px;">
                </div>
                <div class="col-md-4 mb-2">
                    <label for="university" style="font-weight:bold;">University :</label>
                    <select class="form-control form-control-sm" id="university" name="university" style="font-size:13px;">
                        <option>Select University</option>
                    </select>
                </div>
                <div class="col-md-2 mb-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-light border" style="font-weight:bold; font-size:15px; padding:2px 18px;">Search</button>
                </div>
            </form>
        </fieldset>
        <table style="width:100%; border-collapse:collapse; font-size:14px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">College</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">University</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Address</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Phone</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Email</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Referral Email</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Status</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Inserted</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;">
                    <td style="padding:4px; border:1px solid #ccc;">Govt. College Neemuch</td>
                    <td style="padding:4px; border:1px solid #ccc;">Vikram University</td>
                    <td style="padding:4px; border:1px solid #ccc;">India, Madhya Pradesh, neemuch, 458441</td>
                    <td style="padding:4px; border:1px solid #ccc;">9425992740</td>
                    <td style="padding:4px; border:1px solid #ccc;">pg_nmh@rediffmail.com</td>
                    <td style="padding:4px; border:1px solid #ccc;">pawan@yopmail.com</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;">
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative; margin-right:2px;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#f99; position:absolute; top:3px; left:3px;"></span>
                        </span>
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#090; position:absolute; top:3px; left:3px;"></span>
                        </span>
                    </td>
                    <td style="padding:4px; border:1px solid #ccc;">14th Oct, 2014</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;">
                        <button class="btn btn-light border me-2" style="font-weight:bold; font-size:15px; padding:2px 18px;">Edit</button>
                        <button class="btn btn-light border" style="font-weight:bold; font-size:15px; padding:2px 18px;">Delete</button>
                    </td>
                </tr>
                <!-- Add more dummy rows as needed -->
            </tbody>
        </table>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Edit/Delete College / Institute</div>
            <div style="padding:6px 10px;">
                <div style="font-weight:bold;">Govt. College Neemuch</div>
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