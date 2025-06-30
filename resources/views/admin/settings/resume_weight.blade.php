@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Resume Weight</h2>
<div style="margin: 10px;">
    <form>
        <table style="width:100%; border-collapse:collapse; font-size:15px;">
            <thead>
                <tr style="background:#eaeaea;">
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Fields</th>
                    <th style="padding:8px; border:1px solid #ccc; text-align:left;">Weights (%)</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background:#f9f9e9;">
                    <td style="padding:8px; border:1px solid #ccc;">Location</td>
                    <td style="padding:8px; border:1px solid #ccc;"><input type="text" value="50" style="width:40px; text-align:center;"></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Industry</td>
                    <td style="padding:8px; border:1px solid #ccc;"><input type="text" value="20" style="width:40px; text-align:center;"></td>
                </tr>
                <tr style="background:#f9f9e9;">
                    <td style="padding:8px; border:1px solid #ccc;">Experience</td>
                    <td style="padding:8px; border:1px solid #ccc;"><input type="text" value="20" style="width:40px; text-align:center;"></td>
                </tr>
                <tr>
                    <td style="padding:8px; border:1px solid #ccc;">Job Type</td>
                    <td style="padding:8px; border:1px solid #ccc;"><input type="text" value="10" style="width:40px; text-align:center;"></td>
                </tr>
                <tr>
                    <td colspan="2" style="padding:8px; border:1px solid #ccc; background:#fff; text-align:right;">
                        <span style="color:#b00; font-weight:bold;">Total :</span>
                        <input type="text" value="100" style="width:40px; text-align:center; color:#b00; font-weight:bold;">
                    </td>
                </tr>
            </tbody>
        </table>
        <div style="text-align:center; margin-top:12px;">
            <button class="btn btn-light border" style="font-weight:bold; font-size:18px; padding:2px 28px;">Save</button>
        </div>
    </form>
</div>
@endsection 