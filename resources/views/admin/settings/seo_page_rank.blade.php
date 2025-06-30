@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Page Rank</h2>
<div style="margin: 10px;">
    <table style="width:100%; border-collapse:collapse; font-size:15px;">
        <thead>
            <tr style="background:#eaeaea;">
                <th style="padding:8px; border:1px solid #ccc; text-align:left;"><a href="#" style="color:#222; text-decoration:underline;">Month</a></th>
                <th style="padding:8px; border:1px solid #ccc; text-align:left;"><a href="#" style="color:#222; text-decoration:underline;">Google pagerank</a></th>
                <th style="padding:8px; border:1px solid #ccc; text-align:left;"><a href="#" style="color:#222; text-decoration:underline;">Alexa popularity</a></th>
            </tr>
        </thead>
        <tbody>
            <!-- No data rows -->
        </tbody>
    </table>
    <div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">
        <span style="font-size:15px; color:#444;">Displaying 0 to 0 (of 0 page ranks)</span>
        <span style="font-size:15px;">Page 0 of 0</span>
    </div>
</div>
@endsection 