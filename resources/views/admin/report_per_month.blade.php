<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report per month - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; }
        .card { border:1px solid #ccc; box-shadow:none; }
        .card-header { font-weight:bold; border-bottom:1px solid #ccc; padding: 8px 16px; }
        .table { font-size: 15px; }
    </style>
</head>
<body>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-light d-flex align-items-center justify-content-between">
                    <span>Report per month : <b>2025</b></span>
                    <form class="d-flex align-items-center" style="gap: 6px;">
                        <label for="yearSelect" class="mb-0 me-1">Statistics for :</label>
                        <select id="yearSelect" class="form-select form-select-sm" style="width: 80px;">
                            <option>2025</option>
                            <option>2024</option>
                            <option>2023</option>
                        </select>
                        <button type="submit" class="btn btn-sm btn-light border">Go</button>
                    </form>
                </div>
                <div class="card-body p-0">
                    <table class="table mb-0">
                        <thead>
                            <tr style="background:#f8f8f8;">
                                <th style="width: 70px;">Month</th>
                                <th>Jobseekers</th>
                                <th>Jobs</th>
                                <th>Companies</th>
                                <th>Consultants</th>
                                <th>Sales</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Dec</td><td>421</td><td>21</td><td>51</td><td>0</td><td>Rs 14,749.00/-</td></tr>
                            <tr><td>Nov</td><td>421</td><td>21</td><td>51</td><td>0</td><td>Rs 14,749.00/-</td></tr>
                            <tr><td>Oct</td><td>421</td><td>21</td><td>51</td><td>0</td><td>Rs 14,749.00/-</td></tr>
                            <tr><td>Sep</td><td>421</td><td>21</td><td>51</td><td>0</td><td>Rs 14,749.00/-</td></tr>
                            <tr><td>Aug</td><td>421</td><td>21</td><td>51</td><td>0</td><td>Rs 14,749.00/-</td></tr>
                            <tr><td>Jul</td><td>421</td><td>21</td><td>51</td><td>0</td><td>Rs 14,749.00/-</td></tr>
                            <tr><td>Jun</td><td>421</td><td>21</td><td>51</td><td>0</td><td>Rs 14,749.00/-</td></tr>
                            <tr><td>May</td><td>410</td><td>19</td><td>48</td><td>0</td><td>Rs 13,499.00/-</td></tr>
                            <tr><td>Apr</td><td>384</td><td>18</td><td>46</td><td>0</td><td>Rs 12,249.00/-</td></tr>
                            <tr><td>Mar</td><td>370</td><td>18</td><td>45</td><td>0</td><td>Rs 12,249.00/-</td></tr>
                            <tr><td>Feb</td><td>308</td><td>16</td><td>43</td><td>0</td><td>Rs 10,999.00/-</td></tr>
                            <tr><td>Jan</td><td>287</td><td>14</td><td>43</td><td>0</td><td>Rs 8,499.00/-</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> 