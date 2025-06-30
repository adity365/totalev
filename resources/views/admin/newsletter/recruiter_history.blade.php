@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Recruiter Newsletter History</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-12" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Title</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Send Date</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Send To</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">View</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" style="padding:8px; border:1px solid #ccc;">No newsletter available</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection 