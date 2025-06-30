@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">SEO Setting</h2>
<div style="margin: 10px;">
    <form>
        <div style="margin-bottom:18px;">
            <label style="font-size:16px;">Default Site Title :</label>
            <input type="text" value="vacanttree.com" style="width:60%; margin-left:10px;">
        </div>
        <div style="margin-bottom:18px;">
            <label style="font-size:16px; vertical-align:top;">Default Meta Keywords :</label>
            <textarea style="width:60%; height:50px; margin-left:10px;"></textarea>
            <div style="font-size:13px; color:#444; margin-left:170px;">A comma separated list of your most important keywords for your site that will be written as META keywords on your homepage. Don't stuff everything in here.</div>
        </div>
        <div style="margin-bottom:18px;">
            <label style="font-size:16px; vertical-align:top;">Default Meta Description :</label>
            <textarea style="width:60%; height:50px; margin-left:10px;"></textarea>
            <div style="font-size:13px; color:#444; margin-left:170px;">The META description for your homepage. Independent of any other options, the default is no META description at all if this is not set.</div>
        </div>
        <div style="text-align:left; margin-top:12px;">
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 28px;">Update</button>
        </div>
    </form>
</div>
@endsection 