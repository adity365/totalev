@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Start Business Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Email Address</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Mobile</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Location</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Nikhil beniwal</td>
                    <td style="padding:8px; border:1px solid #ccc;">nikhilbeniwal847@gmail.Com</td>
                    <td style="padding:8px; border:1px solid #ccc;">9818774153</td>
                    <td style="padding:8px; border:1px solid #ccc;">Delhi</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">anil</td>
                    <td style="padding:8px; border:1px solid #ccc;">aptexdelhi@gmail.com</td>
                    <td style="padding:8px; border:1px solid #ccc;">9312262045</td>
                    <td style="padding:8px; border:1px solid #ccc;">new delhi</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
            </tbody>
        </table>
        <div style="font-size:15px; color:#444; margin-top:8px;">Displaying 1 to 2 (of 2 start business)</div>
        <div style="font-size:15px; color:#444; margin-top:8px;">Page 1 of 1</div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Start Business</div>
            <div style="padding:6px 10px;">
                <div style="margin-bottom:6px; color:#444; font-size:15px;">Nikhil beniwal</div>
                <div class="d-flex mb-2" style="margin:8px 0;">
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                </div>
                <div style="font-size:15px; color:#444; margin-bottom:4px;">Message:</div>
                <div style="font-size:15px; color:#444;">I want to good job today</div>
            </div>
        </div>
    </div>
</div>
@endsection 