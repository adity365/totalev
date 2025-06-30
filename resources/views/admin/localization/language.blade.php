@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Languages</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Language</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Code</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9f9;">
                    <td style="padding:8px; border:1px solid #ccc;">dutch</td>
                    <td style="padding:8px; border:1px solid #ccc;">nl</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">chinese</td>
                    <td style="padding:8px; border:1px solid #ccc;">zh</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr style="font-weight:bold;">
                    <td style="padding:8px; border:1px solid #ccc;">English (Default)</td>
                    <td style="padding:8px; border:1px solid #ccc;">en</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Deutsch</td>
                    <td style="padding:8px; border:1px solid #ccc;">de</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Español</td>
                    <td style="padding:8px; border:1px solid #ccc;">es</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">french</td>
                    <td style="padding:8px; border:1px solid #ccc;">fr</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;"><span style="font-size:18px; color:#444; cursor:pointer;">&#9432;</span></td>
                </tr>
            </tbody>
        </table>
        <div style="font-size:14px; color:#444; margin-top:8px;">Displaying 1 to 6 (of 6 languages)</div>
        <div style="text-align:left; margin-top:8px;">
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 18px;">New Language</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">dutch</div>
            <div style="padding:6px 10px;">
                <div class="d-flex mb-2" style="margin:8px 0; gap:8px;">
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Edit</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                </div>
                <div style="font-size:15px; color:#444;">Name : dutch<br>Code : nl<br><br><img src="https://flagcdn.com/nl.svg" width="32" alt="nl flag"><br><br>Directory :<br>/home/masaalda/public_html/my_admin/language/dutch<br><br>Sort Order :</div>
            </div>
        </div>
    </div>
</div>
@endsection 