@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 1.4rem; margin-bottom: 10px;">General reports</h2>
<div style="background:#fff; border:1px solid #ddd; border-radius:4px; padding:20px; max-width:1200px; margin:0 0 0 10px;">
    <div style="font-weight:bold; background:#f5f5f5; border:1px solid #ccc; padding:8px 12px; border-radius:4px 4px 0 0; border-bottom:none;">Global Reports
        <span style="float:right; font-weight:normal;">
            Statistics for :
            <select style="font-size:14px;">
                <option>2025</option>
            </select>
            <button class="btn btn-light border btn-sm" style="font-size:14px; margin-left:4px;">Go</button>
        </span>
    </div>
    <table style="width:100%; border-collapse:collapse; font-size:14px; border:1px solid #ccc;">
        <tr><td style="width:25%;">Total no of jobseekers :</td><td>421</td><td style="width:25%;">Total no of jobs :</td><td>21</td></tr>
        <tr><td>Total no of featured jobseekers :</td><td>1</td><td>Total no of active jobs :</td><td>2</td></tr>
        <tr><td>Total no of recruiters :</td><td>51</td><td>Total no of expired jobs :</td><td>18</td></tr>
        <tr><td>Total no of active recruiters :</td><td>3</td><td>Total no of deleted jobs :</td><td>0</td></tr>
        <tr><td>Total no of featured recruiters :</td><td>0</td><td>Total no of featured jobs :</td><td>0</td></tr>
        <tr><td>Sales :</td><td>Rs 14,749.00/-</td><td>Total no of other jobs :</td><td>1</td></tr>
    </table>
    <div style="margin-top:18px; font-size:15px;">
        <b>Report for the year : <span style="color:#222;">2025</span></b>
    </div>
    <table style="width:100%; border-collapse:collapse; font-size:14px; margin-top:8px; border:1px solid #ccc;">
        <thead>
            <tr style="background:#f5f5f5;">
                <th style="padding:6px; border:1px solid #ccc;">Month</th>
                <th style="padding:6px; border:1px solid #ccc;">Jobseekers</th>
                <th style="padding:6px; border:1px solid #ccc;">Featured Jobseekers</th>
                <th style="padding:6px; border:1px solid #ccc;">Jobs</th>
                <th style="padding:6px; border:1px solid #ccc;">Recruiters</th>
                <th style="padding:6px; border:1px solid #ccc;">Featured Recruiters</th>
                <th style="padding:6px; border:1px solid #ccc;">Sales</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background:#f9f9f9;"><td>Jun</td><td>421</td><td>1</td><td>21</td><td>51</td><td>0</td><td>Rs 14,749.00/-</td></tr>
            <tr style="background:#e9ecf7;"><td>May</td><td>410</td><td>1</td><td>19</td><td>48</td><td>0</td><td>Rs 13,499.00/-</td></tr>
            <tr style="background:#f9f9f9;"><td>Apr</td><td>384</td><td>1</td><td>18</td><td>46</td><td>0</td><td>Rs 12,249.00/-</td></tr>
            <tr style="background:#f9f9f9;"><td>Mar</td><td>370</td><td>1</td><td>18</td><td>45</td><td>0</td><td>Rs 12,249.00/-</td></tr>
            <tr style="background:#f9f9f9;"><td>Feb</td><td>308</td><td>1</td><td>16</td><td>43</td><td>0</td><td>Rs 10,999.00/-</td></tr>
            <tr style="background:#f9f9f9;"><td>Jan</td><td>287</td><td>1</td><td>14</td><td>43</td><td>0</td><td>Rs 8,499.00/-</td></tr>
        </tbody>
    </table>
</div>
@endsection 