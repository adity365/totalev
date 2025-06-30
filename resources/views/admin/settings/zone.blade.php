@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Zones</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Country</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Zones</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Zones(French)</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Code</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Ashmore and Cartier Islands</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Ashmore and Cartier Islands</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Australian Antarctic Territory</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Australian Antarctic Territory</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Australian Capital Territory</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Australian Capital Territory</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Christmas Island</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Christmas Island</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Cocos (Keeling) Islands</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Cocos (Keeling) Islands</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Coral Sea Islands Territory</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Coral Sea Islands Territory</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Heard Island and McDonald Islands</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Heard Island and McDonald Islands</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Jervis Bay Territory</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Jervis Bay Territory</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">New South Wales</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">New South Wales</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Norfolk Island</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Norfolk Island</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Northern Territory</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Northern Territory</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Queensland</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Queensland</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">South Australia</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">South Australia</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Tasmania</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Tasmania</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Victoria</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Victoria</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Western Australia</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Western Australia</td><td style="padding:8px; border:1px solid #ccc;"></td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Canada</td><td style="padding:8px; border:1px solid #ccc;">Alberta</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Alberta</td><td style="padding:8px; border:1px solid #ccc;">AB</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Canada</td><td style="padding:8px; border:1px solid #ccc;">British Columbia</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">British Columbia</td><td style="padding:8px; border:1px solid #ccc;">BC</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Canada</td><td style="padding:8px; border:1px solid #ccc;">Manitoba</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Manitoba</td><td style="padding:8px; border:1px solid #ccc;">MB</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Canada</td><td style="padding:8px; border:1px solid #ccc;">New Brunswick</td><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">New Brunswick</td><td style="padding:8px; border:1px solid #ccc;">NB</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:15px; color:#444;">Displaying 1 to 20 (of 136 zones)</span>
            <div style="display:flex; align-items:center; gap:8px;">
                <span style="font-size:15px;">&lt;&lt;Prev</span>
                <span style="font-size:15px;">Page</span>
                <select style="font-size:15px; padding:2px 6px;">
                    <option>1</option>
                </select>
                <span style="font-size:15px;">of 7</span>
                <span style="font-size:15px;">Next&gt;&gt;</span>
            </div>
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Ashmore and Cartier Islands</div>
            <div style="padding:6px 10px;">
                <div class="d-flex mb-2" style="margin:8px 0;">
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                </div>
                <div style="font-size:15px; color:#444; margin-bottom:6px;">Zones Name:<br> Ashmore and Cartier Islands ()</div>
                <div style="font-size:15px; color:#444;">Country Name: Australia</div>
            </div>
        </div>
    </div>
</div>
@endsection 