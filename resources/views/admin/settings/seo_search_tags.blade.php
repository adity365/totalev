@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Search Tag Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <div style="display:flex; justify-content:flex-end; align-items:center; margin-bottom:8px;">
            <label style="margin-right:6px; font-size:15px;">Status</label>
            <select style="font-size:15px; padding:2px 6px; width:70px;">
                <option>All</option>
                <option>Active</option>
                <option>Inactive</option>
            </select>
        </div>
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Point</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Status</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $tags = [
                    'Webdevelopment','Helper','laravel','Computer operator','Computer','CCTV installation','laptop hardware','Data entry,back office','9 year experiemce','Hotels','COMPUTER HARDWARE&NETWORKING','Desktop support Engineer','system Administrator','ITI electrician and Data entry','CHIP LEVEL','Driver','Computer operator','Grocery store','Accountant , Gst Return Filling, create Invoice, journal entry','it hardware'
                ]; @endphp
                @foreach($tags as $i => $tag)
                <tr @if($i%2==0) style="background:#f9f9e9;" @endif>
                    <td style="padding:8px; border:1px solid #ccc; @if($i==0)color:#3366cc;@endif">{{ $tag }}</td>
                    <td style="padding:8px; border:1px solid #ccc;">{{ $tag == 'it hardware' ? 2 : 1 }}</td>
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
            <span style="font-size:15px; color:#444;">Displaying 1 to 20 (of 128 search tags)</span>
            <div style="display:flex; align-items:center; gap:8px;">
                <span style="font-size:15px;">&lt;&lt;Prev</span>
                <span style="font-size:15px;">Page</span>
                <select style="font-size:15px; padding:2px 6px;">
                    <option>1</option>
                </select>
                <span style="font-size:15px;">of 7</span>
                <span style="font-size:15px;">Next&gt;&gt;</span>
            </div>
            <div>
                <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px; margin-right:8px;">Reset Point</button>
                <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
            </div>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Search Tag</div>
            <div style="padding:6px 10px;">
                <div style="font-weight:bold;">Webdevelopment</div>
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