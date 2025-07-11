@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Forum Category Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-12" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Name(French)</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- No forum categories to display -->
            </tbody>
        </table>
        <div style="font-size:14px; color:#444; margin-top:8px;">Displaying 0 to 0 (of 0 categories)</div>
        <div style="text-align:right; margin-top:8px;">
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New</button>
        </div>
        <div style="font-size:14px; color:#444; margin-top:8px; text-align:right;">Page 0 of 0</div>
    </div>
</div>
@endsection 