@extends('admin.dashboard')

@section('content')
<div style="display: flex; justify-content: flex-end; align-items: center; margin: 0 10px 8px 10px;">
    <label for="searchJobs" style="font-size: 13px; margin-right: 4px;">Search Jobs</label>
    <select id="searchJobs" style="font-size:13px;">
        <option>All</option>
    </select>
</div>
<div class="row" style="margin: 10px;">
    <div class="col-md-9">
        <h2 style="color: #666; font-size: 1.4rem; margin-bottom: 10px;">List of active jobs</h2>
        <div style="text-align: right; margin-bottom: 2px; color: #888; font-size: 13px;">
            Active Jobs | Expired Jobs | Deleted Jobs | Other Jobs
        </div>
        <table style="width:100%; border-collapse:collapse; font-size:14px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Company</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Title</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Inserted</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Status</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Featured</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Viewed</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Clicked</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Application</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;">
                    <td style="padding:4px; border:1px solid #ccc;"><a href="#" style="color:#222; font-weight:bold;">MAA TARINI COURIER SERVICES</a></td>
                    <td style="padding:4px; border:1px solid #ccc;">Reqd, Filed boy for Courier company</td>
                    <td style="padding:4px; border:1px solid #ccc;">24th Jun, 2025</td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="display:inline-block;width:12px;height:12px;background:#f8d7da;border-radius:50%;margin-right:2px;"></span><span style="display:inline-block;width:12px;height:12px;background:#28a745;border-radius:50%;"></span></td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="display:inline-block;width:12px;height:12px;background:#f8d7da;border-radius:50%;margin-right:2px;"></span><span style="display:inline-block;width:12px;height:12px;background:#28a745;border-radius:50%;"></span></td>
                    <td style="padding:4px; border:1px solid #ccc;">6</td>
                    <td style="padding:4px; border:1px solid #ccc;">3</td>
                    <td style="padding:4px; border:1px solid #ccc;">0</td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="font-size:16px; color:#444;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:4px; border:1px solid #ccc;"><a href="#" style="color:#222; font-weight:bold;">ILLUMINATION INDIA</a></td>
                    <td style="padding:4px; border:1px solid #ccc;">Need Marketing Executive For Led Light Manufacturing Company</td>
                    <td style="padding:4px; border:1px solid #ccc;">12th May, 2025</td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="display:inline-block;width:12px;height:12px;background:#f8d7da;border-radius:50%;margin-right:2px;"></span><span style="display:inline-block;width:12px;height:12px;background:#28a745;border-radius:50%;"></span></td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="display:inline-block;width:12px;height:12px;background:#f8d7da;border-radius:50%;margin-right:2px;"></span><span style="display:inline-block;width:12px;height:12px;background:#28a745;border-radius:50%;"></span></td>
                    <td style="padding:4px; border:1px solid #ccc;">63</td>
                    <td style="padding:4px; border:1px solid #ccc;">37</td>
                    <td style="padding:4px; border:1px solid #ccc;">0</td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="font-size:16px; color:#444;">&#9432;</span></td>
                </tr>
            </tbody>
        </table>
        <div style="margin-top:4px; color:#222; font-size:13px;">Displaying 1 to 2 (of 2 jobs)</div>
    </div>
    <div class="col-md-3">
        <div style="border:1px solid #ccc; background:#fff; margin-top:20px;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Reqd, Filed boy for Courier company</div>
            <div style="padding:6px 10px;">
                <div style="margin-bottom:6px; color:#444; font-size:14px;">Please make any necessary changes.</div>
                <div style="margin-bottom:6px;">
                    <button style="padding:2px 10px; font-size:14px; margin-right:6px;">Edit</button>
                    <button style="padding:2px 10px; font-size:14px;">Delete</button>
                </div>
                <div style="color:#b00; font-size:13px; margin-top:6px;">
                    <span style="font-size:15px; vertical-align:middle; color:#b00;">&#9632;</span> Add Resume In Recruiter Panel
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 