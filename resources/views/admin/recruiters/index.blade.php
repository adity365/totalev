@extends('admin.dashboard')

@section('content')
<div style="display: flex; justify-content: flex-end; align-items: center; margin: 0 10px 8px 10px;">
    <label for="searchCompany" style="font-size: 13px; margin-right: 4px;">Search company</label>
    <select id="searchCompany" style="font-size:13px;">
        <option>All</option>
    </select>
</div>
<div class="row" style="margin: 10px;">
    <div class="col-md-9">
        <h2 style="color: #666; font-size: 1.4rem; margin-bottom: 10px;">List of Companies</h2>
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
                <tr style="background:#f9f9e9;">
                    <td style="padding:4px; border:1px solid #ccc;"><input type="checkbox"></td>
                    <td style="padding:4px; border:1px solid #ccc;">Aryan Barapatre</td>
                    <td style="padding:4px; border:1px solid #ccc;">bettlemedia@gmail.com</td>
                    <td style="padding:4px; border:1px solid #ccc;">Bettle Media</td>
                    <td style="padding:4px; border:1px solid #ccc;">8830318024</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;">
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative; margin-right:2px;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#f99; position:absolute; top:3px; left:3px;"></span>
                        </span>
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#090; position:absolute; top:3px; left:3px;"></span>
                        </span>
                    </td>
                    <td style="padding:4px; border:1px solid #ccc;">29th Jun, 2025</td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="display:inline-block;width:12px;height:12px;background:#28a745;border-radius:50%;"></span></td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="font-size:16px; color:#444;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:4px; border:1px solid #ccc;"><input type="checkbox"></td>
                    <td style="padding:4px; border:1px solid #ccc;">AMAR SINGH</td>
                    <td style="padding:4px; border:1px solid #ccc;">arihant.infocom@gmail.com</td>
                    <td style="padding:4px; border:1px solid #ccc;">MAA TARINI COURIER SERVICES</td>
                    <td style="padding:4px; border:1px solid #ccc;">9871144458</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;">
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative; margin-right:2px;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#f99; position:absolute; top:3px; left:3px;"></span>
                        </span>
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#090; position:absolute; top:3px; left:3px;"></span>
                        </span>
                    </td>
                    <td style="padding:4px; border:1px solid #ccc;">27th Jun, 2025</td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="display:inline-block;width:12px;height:12px;background:#f8d7da;border-radius:50%;"></span></td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="font-size:16px; color:#444;">&#9432;</span></td>
                </tr>
                <!-- Add more dummy rows as needed -->
            </tbody>
        </table>
    </div>
    <div class="col-md-3">
        <div style="border:1px solid #ccc; background:#fff; margin-top:20px;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Aryan Barapatre</div>
            <div style="padding:6px 10px;">
                <div style="font-weight:bold;">Company Name:</div>
                <div style="margin-bottom:6px; color:#444; font-size:14px;">Bettle Media</div>
                <div style="margin-bottom:6px; color:#444; font-size:14px;">Please make any necessary changes.</div>
                <ul style="list-style-type:none; padding-left:0; font-size:13px; margin-bottom:8px;">
                    <li><span style="color:#b00;">&#9632;</span> List of Jobs</li>
                    <li><span style="color:#b00;">&#9632;</span> Orders Placed</li>
                    <li><span style="color:#b00;">&#9632;</span> company account (Job)</li>
                    <li><span style="color:#b00;">&#9632;</span> company account (Resume)</li>
                    <li><span style="color:#b00;">&#9632;</span> Edit company</li>
                    <li><span style="color:#b00;">&#9632;</span> Control Panel</li>
                    <li><span style="color:#b00;">&#9632;</span> Delete company</li>
                </ul>
                <div style="font-weight:bold;">Company ID : 383</div>
                <div style="color:#444; font-size:13px;">Please choose an action</div>
            </div>
        </div>
    </div>
</div>
@endsection 