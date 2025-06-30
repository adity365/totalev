@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px; display:inline-block;">Banner Edition</h2>
<span style="font-size:16px; margin-left:18px; color:#666;">
    <a href="#" style="color:#444; text-decoration:none;">Active Banners</a> |
    <a href="#" style="color:#444; text-decoration:none;">Expired Banners</a> |
    <a href="#" style="color:#444; text-decoration:none;">Deleted Banners</a> |
    <a href="#" style="color:#444; text-decoration:none;">Other Banners</a>
</span>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Banner</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Company</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Duration</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Date of Insertion</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#eaf4fb; font-weight:bold;"><td colspan="5">Header</td></tr>
                <tr style="background:#fff;"><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Header right</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc;">Unlimited</td><td style="padding:8px; border:1px solid #ccc;">22nd Apr, 2013</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td></tr>
                <tr style="background:#eaf4fb; font-weight:bold;"><td colspan="5">Right Banner</td></tr>
                <tr style="background:#fff;"><td style="padding:8px; border:1px solid #ccc;">allindia right banner</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc;">Unlimited</td><td style="padding:8px; border:1px solid #ccc;">02nd Apr, 2013</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:15px; color:#444;">Displaying 1 to 2 (of 2 banners)</span>
            <span style="font-size:15px;">Page 1 of 1</span>
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Header right</div>
            <div style="padding:6px 10px;">
                <div style="margin-bottom:6px; color:#444; font-size:15px;">Please make any necessary changes</div>
                <div class="d-flex mb-2" style="margin:8px 0;">
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 