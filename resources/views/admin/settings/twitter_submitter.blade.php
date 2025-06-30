@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Twitter Submitter</h2>
<div style="margin: 10px;">
    <div style="background:#f9f9e9; border:1px solid #ccc; padding:16px; margin-bottom:18px;">
        <b>Twitter submitter tool is currently <span style='color:#b00;'>DISABLED</span>.</b>
        <ul style="margin-top:8px;">
            <li>Application Type should be set on <b>Browser</b></li>
            <li>Default Access type should be set to <b>Read &amp; Write</b> (this is NOT the default)</li>
            <li>Callback URL : <a href="https://vacantree.com/" target="_blank">https://vacantree.com/</a></li>
        </ul>
    </div>
    <form>
        <div style="margin-bottom:12px;">
            <label>Twitter Submitter Status : </label>
            <select><option>Disabled</option><option>Enabled</option></select>
        </div>
        <div style="margin-bottom:12px;">
            <label>Twitter Access Token : </label>
            <input type="text" style="width:350px;">
        </div>
        <div style="margin-bottom:12px;">
            <label>Twitter Consumer Key : </label>
            <input type="text" value="a" style="width:350px;">
            <div style="font-size:13px; color:#444;">Enter your twitter CONSUMER KEY.<br>Don't you have such a key? <a href="#">Request one here!</a>.</div>
        </div>
        <div style="margin-bottom:12px;">
            <label>Twitter Consumer Secret : </label>
            <input type="text" value="b" style="width:350px;">
        </div>
        <div style="margin-bottom:12px;">
            <label>Twitter Access Token : </label>
            <input type="text" value="c" style="width:350px;">
            <div style="font-size:13px; color:#444;">After create application. On the right hand side of your application page, click on 'My Access Token'.</div>
        </div>
        <div style="margin-bottom:12px;">
            <label>Twitter Access Token Secret: </label>
            <input type="text" value="d" style="width:350px;">
            <a href="#" style="margin-left:8px; font-size:13px;">Test Authentication</a>
        </div>
        <div style="margin-bottom:12px;">
            <label>Bit.ly Status : </label>
            <select><option>Disabled</option><option>Enabled</option></select>
        </div>
        <div style="margin-bottom:12px;">
            <label>Bit.ly ID : </label>
            <input type="text" style="width:350px;">
            <div style="font-size:13px; color:#444;">Enter your Bit.ly User ID.<br>Don't you have such a key? <a href="#">Request one here!</a>.</div>
        </div>
        <div style="margin-bottom:12px;">
            <label>Bit.ly Api Key : </label>
            <input type="text" style="width:350px;">
        </div>
        <div style="text-align:left; margin-top:12px;">
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 28px;">Update</button>
        </div>
    </form>
</div>
@endsection 