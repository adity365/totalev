@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Upload Banner</h2>
<div style="margin: 10px;">
    <table style="width:100%; border-collapse:collapse; font-size:15px;">
        <thead>
            <tr style="background:#eaeaea;">
                <th style="padding:8px; border:1px solid #ccc; text-align:left;">Banner</th>
                <th style="padding:8px; border:1px solid #ccc; text-align:left;">Company</th>
                <th style="padding:8px; border:1px solid #ccc; text-align:left;">Duration</th>
                <th style="padding:8px; border:1px solid #ccc; text-align:left;">Date of Insertion</th>
                <th style="padding:8px; border:1px solid #ccc; text-align:left;">View</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background:#fff;"><td style="padding:8px; border:1px solid #ccc;">aaaaa</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc;">Unlimited</td><td style="padding:8px; border:1px solid #ccc;">22nd Jul, 2009</td><td style="padding:8px; border:1px solid #ccc;"></td></tr>
            <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">allindia right banner</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc;">Unlimited</td><td style="padding:8px; border:1px solid #ccc;">02nd Apr, 2013</td><td style="padding:8px; border:1px solid #ccc;"></td></tr>
            <tr style="background:#fff;"><td style="padding:8px; border:1px solid #ccc;">Header right</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc;">Unlimited</td><td style="padding:8px; border:1px solid #ccc;">22nd Apr, 2013</td><td style="padding:8px; border:1px solid #ccc;"><img src="https://cdn-icons-png.flaticon.com/512/709/709612.png" alt="view" style="width:18px; height:18px;"></td></tr>
        </tbody>
    </table>
    <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
        <span style="font-size:15px; color:#444;">Displaying 1 to 3 (of 3 banners)</span>
        <span style="font-size:15px;">Page 1 of 1</span>
        <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
    </div>
</div>
@endsection 