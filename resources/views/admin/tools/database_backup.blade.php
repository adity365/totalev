@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Database backup manager</h2>
<div class="row" style="margin: 10px;">
    <div class="col-md-9" style="padding-right:0;">
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Title</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Date</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Size</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9f9;">
                    <td style="padding:8px; border:1px solid #ccc;">
                        <i class="fas fa-database" style="color:#3366cc;"></i>
                        db_allindia_newallindia-20130410012412.sql
                    </td>
                    <td style="padding:8px; border:1px solid #ccc;">
                        13/06/24<br>12:32:17
                    </td>
                    <td style="padding:8px; border:1px solid #ccc;">249,594,450 bytes</td>
                    <td style="padding:8px; border:1px solid #ccc; text-align:center;">
                        <span style="font-size:18px; color:#444; cursor:pointer;">&#9654;</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div style="margin-top:8px;">
            <span style="font-size:15px; color:#444;">Backup directory: <span style="color:#3366cc;">/home/masaalda/public_html/my_admin/backup/</span></span>
        </div>
        <div style="margin-top:8px;">
            <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Backup</button>
            <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Restore</button>
        </div>
    </div>
    <div class="col-md-3" style="padding-left:0;">
        <div style="border:1px solid #ccc; background:#fff; margin-top:0;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">13th Jun, 2024</div>
            <div style="padding:6px 10px;">
                <div style="margin-bottom:6px; color:#444; font-size:15px;">Date : 13th Jun, 2024<br>Size : 249,594,450 bytes<br>Compression : None</div>
                <div class="d-flex mb-2" style="margin:8px 0;">
                    <button class="btn btn-light border me-2" style="font-weight:bold; font-size:16px; padding:2px 18px;">Restore</button>
                    <button class="btn btn-light border" style="font-weight:bold; font-size:16px; padding:2px 18px;">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 