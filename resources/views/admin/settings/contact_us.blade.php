@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Add/Edit/Delete Contact Us Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Type</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Office</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Mobile</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Phone</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Email</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Status</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;">
                    <td style="padding:8px; border:1px solid #ccc;">Head Office</td>
                    <td style="padding:8px; border:1px solid #ccc; color:#3366cc;">Anil Agarwal</td>
                    <td style="padding:8px; border:1px solid #ccc;">vacanttree.com</td>
                    <td style="padding:8px; border:1px solid #ccc;">9354761848</td>
                    <td style="padding:8px; border:1px solid #ccc;">011-40104748</td>
                    <td style="padding:8px; border:1px solid #ccc;">vtsales@vacanttree.com</td>
                    <td style="padding:8px; border:1px solid #ccc;">
                        <span style="display:inline-block; width:14px; height:14px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative; margin-right:2px; vertical-align:middle;">
                            <span style="display:block; width:8px; height:8px; border-radius:50%; background:#f99; position:absolute; top:3px; left:3px;"></span>
                        </span>
                        <span style="display:inline-block; width:14px; height:14px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative; vertical-align:middle;">
                            <span style="display:block; width:8px; height:8px; border-radius:50%; background:#090; position:absolute; top:3px; left:3px;"></span>
                        </span>
                    </td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:15px; color:#444;">Displaying 1 to 1 (of 1 branches/agents)</span>
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">contact us</div>
            <div style="padding:6px 10px;">
                <div style="font-weight:bold;">Anil Agarwal</div>
                <div class="d-flex mb-2" style="margin:8px 0;">
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                </div>
                <div style="margin-bottom:6px; color:#444; font-size:15px;">Please choose a action</div>
                <div style="font-size:15px; color:#444; margin-top:8px;">
                    <div style="font-weight:bold;">Address</div>
                    <div>509, Deepali Building,92 Nehru , New Delhi - 110019</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 