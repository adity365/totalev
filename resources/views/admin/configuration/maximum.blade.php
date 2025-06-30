@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Maximum Values</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Title</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Value</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9f9;">
                    <td style="padding:8px; border:1px solid #ccc;">List of jobs</td>
                    <td style="padding:8px; border:1px solid #ccc;">20</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Screeners</td>
                    <td style="padding:8px; border:1px solid #ccc;">2</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">List of articles</td>
                    <td style="padding:8px; border:1px solid #ccc;">10</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Search Results</td>
                    <td style="padding:8px; border:1px solid #ccc;">20</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">List of applications</td>
                    <td style="padding:8px; border:1px solid #ccc;">20</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">List of cover letters</td>
                    <td style="padding:8px; border:1px solid #ccc;">20</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Number of resumes</td>
                    <td style="padding:8px; border:1px solid #ccc;">10</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Number of cover letters</td>
                    <td style="padding:8px; border:1px solid #ccc;">10</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Number of latest jobs</td>
                    <td style="padding:8px; border:1px solid #ccc;">9</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
            </tbody>
        </table>
        <div style="text-align:right; margin-top:8px;">
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">List of jobs</div>
            <div style="padding:6px 10px;">
                <div style="margin-bottom:6px; color:#444; font-size:15px;">Maximum no of jobs shown in one page</div>
                <div class="d-flex mb-2" style="margin:8px 0;">
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Edit</button>
                </div>
                <div style="font-size:15px; color:#444;">Date Added:Thu Feb 17, 2005<br>Date updated:Fri Jan 22, 2010</div>
            </div>
        </div>
    </div>
</div>
@endsection 