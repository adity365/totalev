@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">IP address Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-12" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">IP address from</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">IP address to</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3" style="padding:8px; border:1px solid #ccc;">
                        Displaying 0 to 0 (of 0 IP Address Entries)
                        <span style="float:right;">
                            <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">New</button>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection 