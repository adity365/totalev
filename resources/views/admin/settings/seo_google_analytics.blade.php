@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Google Analytics</h2>
<div style="margin: 10px;">
    <div style="background:#f9f9e9; border:1px solid #ccc; padding:16px; margin-bottom:18px;">
        Google Analytics integration is currently <b style='color:#080;'>ENABLED</b>.
    </div>
    <form>
        <div style="margin-bottom:18px;">
            <label style="font-size:16px;">Google Analytics Status :</label>
            <select style="margin-left:10px;">
                <option>Enabled</option>
                <option>Disabled</option>
            </select>
        </div>
        <div style="margin-bottom:18px;">
            <label style="font-size:16px;">Google Analytics UA ID :</label>
            <input type="text" value="UA-36993459-1" style="width:300px; margin-left:10px;">
            <div style="font-size:13px; color:#444; margin-left:170px;">Enter your Google Analytics' UID in this box. The UID is needed for Google Analytics to log your website stats. Your UID can be found by looking in the JavaScript Google Analytics gives you to put on your page. Look for your UID in between <b>_uacct = "UA-11111-1";</b> in the JavaScript. In this example you would put <b>UA-11111-1</b> in the UID box.</div>
        </div>
        <div style="text-align:left; margin-top:12px;">
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 28px;">Update</button>
        </div>
    </form>
</div>
@endsection 