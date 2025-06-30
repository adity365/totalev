@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Site Map Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Priority</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Status</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $pages = ['Home','About Us','Advertise','Contact Us','Privacy Statements','RSS','Terms & Conditions','Site Map','Job Categories','Article Categories','Articles','Active jobs']; @endphp
                @foreach($pages as $i => $page)
                <tr @if($i%2==0) style="background:#f9f9e9;" @endif>
                    <td style="padding:8px; border:1px solid #ccc; @if($i==0)color:#3366cc;@endif">{{ $page }}</td>
                    <td style="padding:8px; border:1px solid #ccc;">{{ $i+1 }}</td>
                    <td style="padding:8px; border:1px solid #ccc;">
                        <span style="display:inline-block; width:10px; height:10px; border-radius:50%; background:#fbb; margin-right:2px;"></span>
                        <span style="display:inline-block; width:10px; height:10px; border-radius:50%; background:#0c0;"></span>
                    </td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">
                        <span style="font-size:18px; color:#444; cursor:pointer;">@if($i==0)&#9654;@else&#9432;@endif</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:15px; color:#444;">Displaying 1 to 12 (of 12 site map page)</span>
            <span style="font-size:15px;">Page 1 of 1</span>
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
        </div>
        <div style="margin-top:24px; border-top:2px solid #ccc; padding-top:12px;">
            <b>Generate Site Map :</b> <span style="font-size:13px;">(for submission)</span><br>
            <label>Your sitemap file name</label>
            <input type="text" value="vacanttree" style="width:180px; margin-left:8px;">
            <select style="font-size:15px; padding:2px 6px; margin-left:2px;"><option>xml</option></select>
            <button class="btn btn-light border" style="font-weight:bold; font-size:15px; padding:2px 18px; margin-left:8px;">submit</button>
            <div style="color:#b00; font-size:13px; margin-top:4px;">file name accept only the characters "a-z", "0-9", "_" and "-"</div>
        </div>
        <div style="margin-top:12px; font-size:15px;">
            <b>Status :</b>
        </div>
        <div style="margin-top:12px; border-top:2px solid #ccc; padding-top:12px;">
            <b>Sitemap submission</b><br>
            <div style="margin-top:8px;">
                <input type="checkbox"> Google <span style="font-size:13px; color:#444;">Notify Google about updates of your site map. No registration required, but you can join the <a href="#">Google Webmaster Tools</a> to check crawling statistics</span><br>
                <input type="checkbox"> MSN <span style="font-size:13px; color:#444;">Notify MSN Live Search about updates of your site map. No registration required, but you can join the <a href="#">MSN Live Webmaster Tools</a> to check</span><br>
                <input type="checkbox"> Ask.com <span style="font-size:13px; color:#444;">Notify Ask.com about updates of your site map. No registration required.</span><br>
                <input type="checkbox"> Yahoo! <span style="font-size:13px; color:#444;">Notify YAHOO about updates of your site map.</span><br>
                <label style="margin-left:24px; font-size:13px;">Your Application ID:</label> <input type="text" style="width:180px;"> <span style="color:#b00;">*</span><br>
                <span style="margin-left:24px; font-size:13px; color:#444;">Don't you have such a key? <a href="#">Request one here!</a> (Web Services by Yahoo!)</span><br>
                <input type="checkbox"> Bing <span style="font-size:13px; color:#444;">Notify Bing.com about updates of your site map. No registration required.</span><br>
            </div>
            <div style="margin-top:12px;">
                <button class="btn btn-light border" style="font-size:15px; padding:2px 18px;">resubmit the sitemap</button>
            </div>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Site Map Page</div>
            <div style="padding:6px 10px;">
                <div style="font-weight:bold;">Home</div>
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