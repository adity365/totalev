@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Job Category Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Accountancy jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Admin jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Advertising/PR/MR Age...jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Aerospace, Airline jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Agriculture, Fishing, Forestry jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Back Office,Graduate, jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Banking, Insurance, Finance, jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Call Centre,Telecaller,ITES,Customer services jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">CCTV Installation,Monitoring,& Maintenance job</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Construction jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Driver, Office boy, Ground staff, Field boy,Plumbers, jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Education jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Electrical Electronics, jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Engineering, Manufacturing, Utilities, jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Export , Import , jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Fashion Event Beautician,Salon,Spa jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Hospital,Health Care,Nursing, jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Hotels, Restaurant & Hospitality, jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Human Resource & Admin, jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">IT Hardware industry, jobs</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:15px; color:#444;">Displaying 1 to 20 (of 1143 job categories)</span>
            <div style="display:flex; align-items:center; gap:8px;">
                <span style="font-size:15px;">&lt;&lt;Prev</span>
                <span style="font-size:15px;">Page</span>
                <select style="font-size:15px; padding:2px 6px;">
                    <option>1</option>
                </select>
                <span style="font-size:15px;">of 58</span>
                <span style="font-size:15px;">Next&gt;&gt;</span>
            </div>
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Job category</div>
            <div style="padding:6px 10px;">
                <div style="font-weight:bold;">Accountancy jobs</div>
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