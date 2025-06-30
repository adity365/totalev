@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Indeed Feed Import Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-12" style="padding-right:0;">
        <div style="float:right; margin-bottom:8px;">
            <label for="status" style="font-size:15px; color:#444;">status :</label>
            <select id="status" name="status" style="font-size:15px; margin-left:4px;">
                <option>All</option>
                <option>Active</option>
                <option>Inactive</option>
            </select>
        </div>
        <table style="width:100%; border-collapse:collapse; font-size:15px; clear:both;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Campaign Name</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Publisher ID</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Last Active</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Import Jobs(last)</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Fetch</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Status</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" style="padding:8px; border:1px solid #ccc;">
                        Displaying 0 to 0 (of 0 feed importers)
                        <span style="float:right;">
                            <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">New</button>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div style="font-size:15px; color:#444; margin-top:8px;">Page 0 of 0</div>
    </div>
</div>
@endsection 