@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Orders Status</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9f9; font-weight:bold;">
                    <td style="padding:8px; border:1px solid #ccc;">Pending (Default)</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Confirm</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
            </tbody>
        </table>
        <div style="font-size:14px; color:#444; margin-top:8px;">Displaying 1 to 2 (of 2 order status)</div>
        <div style="text-align:left; margin-top:8px;">
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">Insert</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Pending</div>
            <div style="padding:6px 10px;">
                <div class="d-flex mb-2" style="margin:8px 0; gap:8px;">
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                </div>
                <div style="font-size:15px; color:#444;">
                    <img src="https://flagcdn.com/at.svg" width="20" alt="at flag">
                    <img src="https://flagcdn.com/gb.svg" width="20" alt="gb flag"> Pending<br>
                    <img src="https://flagcdn.com/gb.svg" width="20" alt="gb flag"> Deutsch<br>
                    <img src="https://flagcdn.com/es.svg" width="20" alt="es flag"> Español<br>
                    <img src="https://flagcdn.com/fr.svg" width="20" alt="fr flag">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
 