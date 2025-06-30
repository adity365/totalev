@extends('admin.dashboard')

@section('content')
<div style="display: flex; justify-content: flex-end; align-items: center; margin: 0 10px 8px 10px;">
    <label for="searchDashboard" style="font-size: 13px; margin-right: 4px;">Search Dashboard</label>
    <select id="searchDashboard" style="font-size:13px;">
        <option>All</option>
    </select>
</div>
<!-- Header -->
<div class="d-flex justify-content-between align-items-center p-4 bg-white shadow-sm">
    <h2 class="mb-0">Dashboard</h2>
    <div class="d-flex align-items-center">
        <span class="me-3">Welcome, Admin User</span>
        <form method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>
</div>
<!-- Dashboard Content -->
<div class="p-4">
    <!-- Stats Cards Row -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card card-stats bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="card-title">150</h3>
                            <p class="card-text">Total Users</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card card-stats bg-success text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="card-title">89</h3>
                            <p class="card-text">Active Jobs</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-briefcase fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card card-stats bg-warning text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="card-title">45</h3>
                            <p class="card-text">Companies</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-building fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card card-stats bg-info text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="card-title">1,234</h3>
                            <p class="card-text">Applications</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-file-alt fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="border:1px solid #ccc; box-shadow:none;">
                <div class="card-header bg-light" style="font-weight:bold; border-bottom:1px solid #ccc; padding: 8px 16px;">
                    Global Reports
                </div>
                <div class="card-body p-0">
                    <table class="table mb-0" style="border:0; font-size: 15px;">
                        <tbody>
                            <tr><td>Total no of jobseekers :</td><td class="text-end">421</td></tr>
                            <tr><td>Total no of featured jobseekers :</td><td class="text-end">1</td></tr>
                            <tr><td>Total no of companies :</td><td class="text-end">51</td></tr>
                            <tr><td>Total no of active companies :</td><td class="text-end">3</td></tr>
                            <tr><td>Total no of consultants :</td><td class="text-end">0</td></tr>
                            <tr><td>Total no of active consultants :</td><td class="text-end">0</td></tr>
                            <tr><td>Total no of jobs :</td><td class="text-end">21</td></tr>
                            <tr><td>Total no of active jobs :</td><td class="text-end">2</td></tr>
                            <tr><td>Total no of expired jobs :</td><td class="text-end">18</td></tr>
                            <tr><td>Total no of deleted jobs :</td><td class="text-end">0</td></tr>
                            <tr><td>Total no of orders :</td><td class="text-end">13</td></tr>
                            <tr><td>Sales :</td><td class="text-end">Rs 14,749.00/-</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mt-3" style="border:1px solid #ccc; box-shadow:none;">
                <div class="card-header bg-light d-flex align-items-center justify-content-between" style="font-weight:bold; border-bottom:1px solid #ccc; padding: 8px 16px;">
                    <span>Report per month : <b>2025</b></span>
                    <form class="d-flex align-items-center" style="gap: 6px;">
                        <label for="monthSelect" class="mb-0 me-1">Statistics for :</label>
                        <select id="monthSelect" class="form-select form-select-sm" style="width: 80px;">
                            <option>2025</option>
                            <option>2024</option>
                            <option>2023</option>
                        </select>
                        <button type="submit" class="btn btn-sm btn-light border">Go</button>
                    </form>
                </div>
                <div class="card-body p-0">
                    <table class="table mb-0" style="border:0; font-size: 15px;">
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
        <div class="col-md-6">
            <div class="card" style="border:1px solid #ccc; box-shadow:none;">
                <div class="card-header bg-light d-flex align-items-center justify-content-between" style="font-weight:bold; border-bottom:1px solid #ccc; padding: 8px 16px;">
                    <span>Report for the year : <b>2025</b></span>
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
                    <table class="table mb-0" style="border:0; font-size: 15px;">
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
            <div class="card mt-3" style="border:1px solid #ccc; box-shadow:none;">
                <div class="card-header bg-light" style="font-weight:bold; border-bottom:1px solid #ccc; padding: 8px 16px;">
                    Orders
                </div>
                <div class="card-body p-0">
                    <table class="table mb-0" style="border:0; font-size: 15px;">
                        <tbody>
                            <tr>
                                <td>SANTOSH ROUT</td>
                                <td>Rs 1,250.00/-</td>
                                <td>20th Jun, 2025</td>
                                <td><button class="btn btn-sm btn-primary">Confirm</button></td>
                            </tr>
                            <tr>
                                <td>Vinod Jindal</td>
                                <td>Rs 1,250.00/-</td>
                                <td>12th May, 2025</td>
                                <td><button class="btn btn-sm btn-primary">Confirm</button></td>
                            </tr>
                            <tr>
                                <td>Sukhvinder Singh</td>
                                <td>Rs 1,250.00/-</td>
                                <td>12th Mar, 2025</td>
                                <td><button class="btn btn-sm btn-primary">Confirm</button></td>
                            </tr>
                            <tr>
                                <td>SUNIL MITTAL</td>
                                <td>Rs 1,250.00/-</td>
                                <td>19th Feb, 2025</td>
                                <td><button class="btn btn-sm btn-primary">Confirm</button></td>
                            </tr>
                            <tr>
                                <td>Rajesh Verma</td>
                                <td>Rs 1,250.00/-</td>
                                <td>14th Oct, 2024</td>
                                <td><button class="btn btn-sm btn-primary">Confirm</button></td>
                            </tr>
                            <tr>
                                <td>Anu Sehgal</td>
                                <td>Rs 1,250.00/-</td>
                                <td>07th Oct, 2024</td>
                                <td><button class="btn btn-sm btn-primary">Confirm</button></td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-end">..more</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 