@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Country Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Country</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Country(French)</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Continent</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Afghanistan</td><td style="padding:8px; border:1px solid #ccc;">Afghanistan</td><td style="padding:8px; border:1px solid #ccc;">South-Central Asia</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Albania</td><td style="padding:8px; border:1px solid #ccc;">Albania</td><td style="padding:8px; border:1px solid #ccc;">Europe</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Algeria</td><td style="padding:8px; border:1px solid #ccc;">Algeria</td><td style="padding:8px; border:1px solid #ccc;">Africa</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">American Samoa</td><td style="padding:8px; border:1px solid #ccc;">American Samoa</td><td style="padding:8px; border:1px solid #ccc;">Oceania</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Andorra</td><td style="padding:8px; border:1px solid #ccc;">Andorra</td><td style="padding:8px; border:1px solid #ccc;">Europe</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Angola</td><td style="padding:8px; border:1px solid #ccc;">Angola</td><td style="padding:8px; border:1px solid #ccc;">Africa</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Anguilla</td><td style="padding:8px; border:1px solid #ccc;">Anguilla</td><td style="padding:8px; border:1px solid #ccc;">Caribbean and Central America</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Antarctica</td><td style="padding:8px; border:1px solid #ccc;">Antarctica</td><td style="padding:8px; border:1px solid #ccc;">Antarctica</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Antigua and Barbuda</td><td style="padding:8px; border:1px solid #ccc;">Antigua and Barbuda</td><td style="padding:8px; border:1px solid #ccc;">Caribbean and Central America</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Argentina</td><td style="padding:8px; border:1px solid #ccc;">Argentina</td><td style="padding:8px; border:1px solid #ccc;">South america</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Armenia</td><td style="padding:8px; border:1px solid #ccc;">Armenia</td><td style="padding:8px; border:1px solid #ccc;">Western Asia and Middle East</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Aruba</td><td style="padding:8px; border:1px solid #ccc;">Aruba</td><td style="padding:8px; border:1px solid #ccc;">Caribbean and Central America</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Australia</td><td style="padding:8px; border:1px solid #ccc;">Australia/New Zealand</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Austria</td><td style="padding:8px; border:1px solid #ccc;">Austria</td><td style="padding:8px; border:1px solid #ccc;">Europe</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Azerbaijan</td><td style="padding:8px; border:1px solid #ccc;">Azerbaijan</td><td style="padding:8px; border:1px solid #ccc;">Western Asia and Middle East</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Bahamas</td><td style="padding:8px; border:1px solid #ccc;">Bahamas</td><td style="padding:8px; border:1px solid #ccc;">Caribbean and Central America</td><td style="padding:8px; border:1px solid #ccc; text-align:center; background:#e9f0fa;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Bahrain</td><td style="padding:8px; border:1px solid #ccc;">Bahrain</td><td style="padding:8px; border:1px solid #ccc;">Western Asia and Middle East</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Bangladesh</td><td style="padding:8px; border:1px solid #ccc;">Bangladesh</td><td style="padding:8px; border:1px solid #ccc;">South-Central Asia</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr style="background:#f9f9e9;"><td style="padding:8px; border:1px solid #ccc;">Barbados</td><td style="padding:8px; border:1px solid #ccc;">Barbados</td><td style="padding:8px; border:1px solid #ccc;">Caribbean and Central America</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
                <tr><td style="padding:8px; border:1px solid #ccc;">Belarus</td><td style="padding:8px; border:1px solid #ccc;">Belarus</td><td style="padding:8px; border:1px solid #ccc;">Europe</td><td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td></tr>
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:15px; color:#444;">Displaying 1 to 20 (of 245 countries)</span>
            <div style="display:flex; align-items:center; gap:8px;">
                <span style="font-size:15px;">&lt;&lt;Prev</span>
                <span style="font-size:15px;">Page</span>
                <select style="font-size:15px; padding:2px 6px;">
                    <option>1</option>
                </select>
                <span style="font-size:15px;">of 13</span>
                <span style="font-size:15px;">Next&gt;&gt;</span>
            </div>
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Country</div>
            <div style="padding:6px 10px;">
                <div style="font-weight:bold;">Afghanistan</div>
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