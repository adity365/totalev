@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Response From Employers</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-12" style="padding-right:0;">
        <div style="margin-bottom:8px; font-size:15px;">
            View in Inbox :
            <a href="#" style="color:#222; text-decoration:underline;">All</a> |
            <a href="#" style="color:#222; text-decoration:underline;">Unread</a> |
            <a href="#" style="color:#222; text-decoration:underline;">Marked</a>
            <span style="float:right;"><a href="#" style="color:red; text-decoration:underline;">View in Trash</a></span>
        </div>
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Sender</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Email-Address</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Subject</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" style="padding:8px; border:1px solid #ccc;">vacanttree.com has not found any mail.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection 