@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Online Services Management</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Name</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Email Address</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Mobile</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Location</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Makan Singh</td>
                    <td style="padding:8px; border:1px solid #ccc;">Singhmakan 149@gmail.co</td>
                    <td style="padding:8px; border:1px solid #ccc;">9910656558</td>
                    <td style="padding:8px; border:1px solid #ccc;">Delhi</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Makan Singh</td>
                    <td style="padding:8px; border:1px solid #ccc;">Singhmakan 149@gmail.co</td>
                    <td style="padding:8px; border:1px solid #ccc;">9910656558</td>
                    <td style="padding:8px; border:1px solid #ccc;">Delhi</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Makan Singh</td>
                    <td style="padding:8px; border:1px solid #ccc;">Singhmakan 149@gmail.co</td>
                    <td style="padding:8px; border:1px solid #ccc;">9910656558</td>
                    <td style="padding:8px; border:1px solid #ccc;">Delhi</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Harsh singh</td>
                    <td style="padding:8px; border:1px solid #ccc;">hs8184538@gmail.com</td>
                    <td style="padding:8px; border:1px solid #ccc;">8882683841</td>
                    <td style="padding:8px; border:1px solid #ccc;">Budh vihar new delhi</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Pramod kumar</td>
                    <td style="padding:8px; border:1px solid #ccc;">241401kumarpramod@gmail.com</td>
                    <td style="padding:8px; border:1px solid #ccc;">8400404501</td>
                    <td style="padding:8px; border:1px solid #ccc;">Delhi</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Pramod kumar</td>
                    <td style="padding:8px; border:1px solid #ccc;">241401kumarpramod@gmail.com</td>
                    <td style="padding:8px; border:1px solid #ccc;">8400404501</td>
                    <td style="padding:8px; border:1px solid #ccc;">Delhi</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Tarique Anwar</td>
                    <td style="padding:8px; border:1px solid #ccc;">tariqueanwar521998@gmail.com</td>
                    <td style="padding:8px; border:1px solid #ccc;">9162702874</td>
                    <td style="padding:8px; border:1px solid #ccc;">Kanti nagar delhi</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Anil Agarwal</td>
                    <td style="padding:8px; border:1px solid #ccc;">daxtonindia@gmail.com</td>
                    <td style="padding:8px; border:1px solid #ccc;">9312262045</td>
                    <td style="padding:8px; border:1px solid #ccc;">delhi</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
            </tbody>
        </table>
        <div style="font-size:15px; color:#444; margin-top:8px;">Displaying 1 to 8 (of 8 online services)</div>
        <div style="font-size:15px; color:#444; margin-top:8px;">Page 1 of 1</div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">Online Service</div>
            <div style="padding:6px 10px;">
                <div style="margin-bottom:6px; color:#444; font-size:15px;">Makan Singh</div>
                <div class="d-flex mb-2" style="margin:8px 0;">
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                </div>
                <div style="font-size:15px; color:#444; margin-bottom:4px;">Message:</div>
                <div style="font-size:15px; color:#444;">Peon and office boy 8</div>
            </div>
        </div>
    </div>
</div>
@endsection 