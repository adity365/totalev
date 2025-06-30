@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px; display:inline-block;">List of Banners</h2>
<span style="font-size:16px; margin-left:18px; color:#666;">
    <a href="#" style="color:#444; text-decoration:none;">Active Banners</a> |
    <a href="#" style="color:#444; text-decoration:none;">Expired Banners</a> |
    <a href="#" style="color:#444; text-decoration:none;">Deleted Banners</a> |
    <a href="#" style="color:#444; text-decoration:none;">Other Banners</a>
</span>
<div class="row" style="margin: 10px;">
    <div class="col-md-12" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Banner</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">AdViews</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">AdClicks</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">*CTR</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#eaf4fb; font-weight:bold;"><td colspan="4">Header</td></tr>
                <tr style="background:#fff;"><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Header right</td><td style="padding:8px; border:1px solid #ccc;">2131184</td><td style="padding:8px; border:1px solid #ccc;">14639</td><td style="padding:8px; border:1px solid #ccc;">0.69</td></tr>
                <tr style="background:#eaf4fb; font-weight:bold;"><td colspan="4">Right Banner</td></tr>
                <tr style="background:#fff;"><td style="padding:8px; border:1px solid #ccc;">allindia right banner</td><td style="padding:8px; border:1px solid #ccc;">1930694</td><td style="padding:8px; border:1px solid #ccc;">0</td><td style="padding:8px; border:1px solid #ccc;">0</td></tr>
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:15px; color:#444;">Displaying 1 to 2 (of 2 banners)</span>
            <span style="font-size:15px;">Page 1 of 1</span>
        </div>
        <div style="font-size:14px; color:#444; margin-top:8px;">*CTR=(AdClicks/AdViews)*100</div>
    </div>
</div>
@endsection 