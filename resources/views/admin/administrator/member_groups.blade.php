@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 1.4rem; margin-bottom: 10px;">Admin members</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:14px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Login name</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">E-mail address</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Mobile</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Groups level</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Status</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Log number</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;">
                    <td style="padding:4px; border:1px solid #ccc;">admin</td>
                    <td style="padding:4px; border:1px solid #ccc;">aptexdelhi@gmail.com</td>
                    <td style="padding:4px; border:1px solid #ccc;">9312262045</td>
                    <td style="padding:4px; border:1px solid #ccc;">Allindia</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;">
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative; margin-right:2px;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#f99; position:absolute; top:3px; left:3px;"></span>
                        </span>
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#090; position:absolute; top:3px; left:3px;"></span>
                        </span>
                    </td>
                    <td style="padding:4px; border:1px solid #ccc;">1035</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;"><span style="font-size:16px; color:#444;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:4px; border:1px solid #ccc;">ishika</td>
                    <td style="padding:4px; border:1px solid #ccc;">ishika@vacanttree.com</td>
                    <td style="padding:4px; border:1px solid #ccc;">9312262045</td>
                    <td style="padding:4px; border:1px solid #ccc;">Agent</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;">
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative; margin-right:2px;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#f99; position:absolute; top:3px; left:3px;"></span>
                        </span>
                        <span style="display:inline-block; width:16px; height:16px; border-radius:50%; background:#fff; border:1px solid #aaa; position:relative;">
                            <span style="display:block; width:10px; height:10px; border-radius:50%; background:#090; position:absolute; top:3px; left:3px;"></span>
                        </span>
                    </td>
                    <td style="padding:4px; border:1px solid #ccc;">852</td>
                    <td style="padding:4px; border:1px solid #ccc; text-align:left;"><span style="font-size:16px; color:#444;">&#9432;</span></td>
                </tr>
                <!-- Add more dummy rows as needed -->
            </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
            <span style="font-size:13px; color:#444;">Displaying 1 to 9 (of 9 members)</span>
            <div>
                <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Groups</button>
                <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">New Member</button>
            </div>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">admin</div>
            <div style="padding:6px 10px;">
                <div class="d-flex mb-2">
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:15px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:15px; padding:2px 18px;">Delete</button>
                </div>
                <div style="font-size:13px; color:#444; margin-bottom:6px;">
                    <div><b>Login Name :</b> admin</div>
                    <div><b>Name :</b> Anil agarwal</div>
                    <div><b>E-mail address :</b> aptexdelhi@gmail.com</div>
                    <div><b>Group level :</b> Allindia</div>
                    <div><b>Account created :</b> 2004-12-28 16:53:23</div>
                    <div><b>Account modified :</b> 2025-02-17 11:25:24</div>
                    <div><b>Last access :</b> 2025-04-19 16:34:24</div>
                    <div><b>Log number :</b> 1035</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 