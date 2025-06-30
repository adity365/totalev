@extends('admin.dashboard')

@section('content')
<div style="display: flex; justify-content: flex-end; align-items: center; margin: 0 10px 8px 10px;">
    <label for="searchOrders" style="font-size: 13px; margin-right: 4px;">Search Orders</label>
    <select id="searchOrders" style="font-size:13px;">
        <option>All</option>
    </select>
</div>
<div class="row" style="margin: 10px;">
    <div class="col-md-9">
        <h2 style="color: #666; font-size: 1.4rem; margin-bottom: 10px;">Orders</h2>
        <div style="text-align: right; margin-bottom: 2px; color: #888; font-size: 13px;">
            <label for="orderIdInput">Order ID:</label>
            <input id="orderIdInput" type="text" style="margin-right: 8px;">
            <label for="statusSelect">Status:</label>
            <select id="statusSelect" style="font-size:13px;">
                <option>All Orders</option>
            </select>
        </div>
        <table style="width:100%; border-collapse:collapse; font-size:14px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Recruiters</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Order Total</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Date Purchased</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Status</th>
                    <th style="padding:4px; border:1px solid #ccc; text-align:left;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;">
                    <td style="padding:4px; border:1px solid #ccc; white-space:nowrap; font-size:13px;"><span style="color:#888; margin-right:6px;">&#128196;</span><a href="#" style="color:#222; font-weight:bold;">SANTOSH ROUT</a></td>
                    <td style="padding:4px; border:1px solid #ccc;">Rs 1,250.00/-</td>
                    <td style="padding:4px; border:1px solid #ccc;">20th Jun, 2025</td>
                    <td style="padding:4px; border:1px solid #ccc;">Confirm</td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="font-size:16px; color:#444;">&#9654;</span></td>
                </tr>
                <tr>
                    <td style="padding:4px; border:1px solid #ccc; white-space:nowrap; font-size:13px;"><span style="color:#888; margin-right:6px;">&#128196;</span><a href="#" style="color:#222; font-weight:bold;">Vinod Jindal</a></td>
                    <td style="padding:4px; border:1px solid #ccc;">Rs 1,250.00/-</td>
                    <td style="padding:4px; border:1px solid #ccc;">12th May, 2025</td>
                    <td style="padding:4px; border:1px solid #ccc;">Confirm</td>
                    <td style="padding:4px; border:1px solid #ccc;"><span style="font-size:16px; color:#444;">&#9432;</span></td>
                </tr>
                <!-- Add more dummy rows as needed -->
            </tbody>
        </table>
        <div style="margin-top:4px; color:#222; font-size:13px;">Displaying 1 to 2 (of 13 orders)</div>
    </div>
    <div class="col-md-3">
        <div style="border:1px solid #ccc; background:#fff; margin-top:20px;">
            <div style="background:#f2f2f2; font-weight:bold; padding:6px 10px; border-bottom:1px solid #ccc; font-size:15px;">[116] 20th Jun, 2025</div>
            <div style="padding:6px 10px;">
                <div style="margin-bottom:6px;">
                    <button style="padding:2px 10px; font-size:14px; margin-right:6px;">Edit</button>
                    <button style="padding:2px 10px; font-size:14px;">Delete</button>
                </div>
                <div style="color:#444; font-size:13px; margin-top:6px;">Date Created: 20th Jun, 2025</div>
                <div style="color:#444; font-size:13px; margin-top:4px;">Payment Method: Online</div>
            </div>
        </div>
    </div>
</div>
@endsection 