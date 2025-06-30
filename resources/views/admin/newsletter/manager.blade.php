@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Newsletter Manager</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Newsletters</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Size</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Module</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Mail Status</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Sent</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Status</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;"><a href="#">vacanttree.com - Post Jobs & Search Resumes</a></td>
                    <td style="padding:8px; border:1px solid #ccc;">264 bytes</td>
                    <td style="padding:8px; border:1px solid #ccc;">All Recruiters( 1 - 10 )</td>
                    <td style="padding:8px; border:1px solid #ccc;">In Queue</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">&#10003;</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">&#128274;</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;"><a href="#">Urgent: Update your Profile</a></td>
                    <td style="padding:8px; border:1px solid #ccc;">2,697 bytes</td>
                    <td style="padding:8px; border:1px solid #ccc;">All Jobseekers( 1 - 50 )</td>
                    <td style="padding:8px; border:1px solid #ccc;">Completed</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">&#10003;</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">&#128274;</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;"><a href="#">Unlimited post job and data base</a></td>
                    <td style="padding:8px; border:1px solid #ccc;">2,178 bytes</td>
                    <td style="padding:8px; border:1px solid #ccc;">All Companies( 451 - 600 )</td>
                    <td style="padding:8px; border:1px solid #ccc;">Completed</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">&#10003;</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">&#128274;</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;"><a href="#">test university</a></td>
                    <td style="padding:8px; border:1px solid #ccc;">651 bytes</td>
                    <td style="padding:8px; border:1px solid #ccc;">All Universities( 1 - 50 )</td>
                    <td style="padding:8px; border:1px solid #ccc;">Completed</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">&#10003;</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">&#128274;</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;"><a href="#">All India Job Bank . com - Post Jobs & Search Resumes</a></td>
                    <td style="padding:8px; border:1px solid #ccc;">7,554 bytes</td>
                    <td style="padding:8px; border:1px solid #ccc;">All Recruiters( 0 - 0 )</td>
                    <td style="padding:8px; border:1px solid #ccc;">In Queue</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">&#10007;</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">&#128274;</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <!-- Add more rows as needed for demonstration -->
            </tbody>
        </table>
        <div style="font-size:15px; color:#444; margin-top:8px;">Displaying 1 to 11 (of 11 newsletters)</div>
        <div style="text-align:right; margin-top:8px;">
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New Newsletter</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">vacanttree.com - Post Jobs & Search Resumes</div>
            <div style="padding:6px 10px;">
                <div style="margin-bottom:6px; color:#444; font-size:15px;">vacanttree.com - Post Jobs & Search Resumes</div>
                <div class="d-flex mb-2" style="margin:8px 0; flex-wrap:wrap; gap:6px;">
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Preview</button>
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Send</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Unlock</button>
                </div>
                <div style="font-size:14px; color:#444;">Date Added :Sat Dec 12, 2015<br>Date Sent: Wed May 25, 2016</div>
            </div>
        </div>
    </div>
</div>
@endsection 