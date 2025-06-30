@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Currencies</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Currency</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Code</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Value</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9f9;">
                    <td style="padding:8px; border:1px solid #ccc;">Euro</td>
                    <td style="padding:8px; border:1px solid #ccc;">EUR</td>
                    <td style="padding:8px; border:1px solid #ccc;">0.72447199</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Pound</td>
                    <td style="padding:8px; border:1px solid #ccc;">GBP</td>
                    <td style="padding:8px; border:1px solid #ccc;">0.62819999</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr style="font-weight:bold;">
                    <td style="padding:8px; border:1px solid #ccc;">Rupees (Default)</td>
                    <td style="padding:8px; border:1px solid #ccc;">INR</td>
                    <td style="padding:8px; border:1px solid #ccc;">1.00000000</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">ZAR</td>
                    <td style="padding:8px; border:1px solid #ccc;">ZAR</td>
                    <td style="padding:8px; border:1px solid #ccc;">6.87849998</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
            </tbody>
        </table>
        <div style="display:flex; justify-content:left; gap:10px; margin-top:8px;">
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">Update Currencies</button>
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New Currency</button>
        </div>
        <div style="font-size:14px; color:#444; margin-top:8px;">Displaying 1 to 4 (of 4 currencies)</div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Euro</div>
            <div style="padding:6px 10px;">
                <div class="d-flex mb-2" style="margin:8px 0; gap:8px;">
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                </div>
                <div style="font-size:15px; color:#444;">Title : Euro<br>Code : EUR<br><br>Symbol left : <br>Symbol right : EUR<br><br>Decimal point : .<br>Thousands point : ,<br>Decimal places : 2<br><br>Last updated : 12th Oct, 2010<br>Value : 0.72447199<br><br>Example output :<br>Rs 30.00/- = 21.73EUR</div>
            </div>
        </div>
    </div>
</div>
@endsection 