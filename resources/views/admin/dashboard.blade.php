<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - TotalEV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            background: #2c3e50;
            overflow-y: auto;
        }
        .sidebar .nav-link, .sidebar .sidebar-section {
            color: #ecf0f1;
            padding: 12px 20px;
            border-bottom: 1px solid #34495e;
            font-size: 15px;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background: #3498db;
            color: #fff;
        }
        .sidebar .sidebar-section {
            background: #232b36;
            font-weight: bold;
            border-bottom: 2px solid #34495e;
            font-size: 16px;
        }
        .sidebar .nav-sub {
            padding-left: 35px;
            font-size: 14px;
        }
        .sidebar .divider {
            border-bottom: 2px solid #34495e;
            margin: 8px 0;
        }
        .sidebar .sidebar-title {
            text-align: center;
            color: #fff;
            font-size: 20px;
            margin: 20px 0 10px 0;
            font-weight: bold;
        }
        .main-content {
            background: #f8f9fa;
            min-height: 100vh;
        }
        .card-stats {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0 sidebar">
                <div class="sidebar-title">
                    <i class="fas fa-briefcase"></i> VacantTree Admin
                </div>
                <nav class="nav flex-column">
                    <div class="sidebar-section"><i class="fas fa-chart-bar me-2"></i> Dashboard</div>
                    <div class="divider"></div>

                    <!-- Recruiters -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#recruitersSub" role="button" aria-expanded="false" aria-controls="recruitersSub">
                        <span><i class="fas fa-user-tie me-2"></i> Recruiters</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="recruitersSub">
                        <a class="nav-link nav-sub" href="#">Companies</a>
                        <a class="nav-link nav-sub" href="#">Consultants</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Jobseekers -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#jobseekersSub" role="button" aria-expanded="false" aria-controls="jobseekersSub">
                        <span><i class="fas fa-users me-2"></i> Jobseekers</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="jobseekersSub">
                        <a class="nav-link nav-sub" href="#">Jobseeker</a>
                        <a class="nav-link nav-sub" href="#">Paid Jobseeker</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Jobs -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#jobsSub" role="button" aria-expanded="false" aria-controls="jobsSub">
                        <span><i class="fas fa-briefcase me-2"></i> Jobs</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="jobsSub">
                        <a class="nav-link nav-sub" href="#">Jobsite Jobs</a>
                        <a class="nav-link nav-sub" href="#">Indeed Jobs</a>
                    </div>
                    <div class="divider"></div>

                    <!-- ITI/Diploma and Polytechnic -->
                    <div class="sidebar-section"><i class="fas fa-school me-2"></i> ITI/Diploma and Polytechnic</div>
                    <a class="nav-link nav-sub" href="#">ITI/Diploma and Polytechnic</a>
                    <div class="divider"></div>

                    <!-- Government Job -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#govJobSub" role="button" aria-expanded="false" aria-controls="govJobSub">
                        <span><i class="fas fa-landmark me-2"></i> Government Job</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="govJobSub">
                        <a class="nav-link nav-sub" href="#">Latest Job</a>
                        <a class="nav-link nav-sub" href="#">Admit Card</a>
                        <a class="nav-link nav-sub" href="#">Result</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Orders -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#ordersSub" role="button" aria-expanded="false" aria-controls="ordersSub">
                        <span><i class="fas fa-box-open me-2"></i> Orders</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="ordersSub">
                        <a class="nav-link nav-sub" href="#">Jobseeker Orders</a>
                        <a class="nav-link nav-sub" href="#">Recruiter Orders</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Search -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#searchSub" role="button" aria-expanded="false" aria-controls="searchSub">
                        <span><i class="fas fa-search me-2"></i> Search</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="searchSub">
                        <a class="nav-link nav-sub" href="#">Jobseeker</a>
                        <a class="nav-link nav-sub" href="#">Rate Resume</a>
                        <a class="nav-link nav-sub" href="#">Recruiter</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Reports -->
                    <div class="sidebar-section"><i class="fas fa-chart-line me-2"></i> Reports</div>
                    <div class="divider"></div>

                    <!-- Themes -->
                    <div class="sidebar-section"><i class="fas fa-palette me-2"></i> Themes</div>
                    <div class="divider"></div>

                    <!-- Settings -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#settingsSub" role="button" aria-expanded="false" aria-controls="settingsSub">
                        <span><i class="fas fa-cogs me-2"></i> Settings</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="settingsSub">
                        <a class="nav-link nav-sub" href="#">User Category</a>
                        <a class="nav-link nav-sub" href="#">Contact Us</a>
                        <a class="nav-link nav-sub" href="#">Continent</a>
                        <a class="nav-link nav-sub" href="#">Country</a>
                        <a class="nav-link nav-sub" href="#">Zone</a>
                        <a class="nav-link nav-sub" href="#">ZIP Code</a>
                        <a class="nav-link nav-sub" href="#">Job Type</a>
                        <a class="nav-link nav-sub" href="#">Job Category</a>
                        <a class="nav-link nav-sub" href="#">Jobseeker Language</a>
                        <a class="nav-link nav-sub" href="#">Language Proficiency</a>
                        <a class="nav-link nav-sub" href="#">Career Level</a>
                        <a class="nav-link nav-sub" href="#">Experience</a>
                        <a class="nav-link nav-sub" href="#">Education Level</a>
                        <a class="nav-link nav-sub" href="#">Religion</a>
                        <a class="nav-link nav-sub" href="#">Resume Weight</a>
                        <a class="nav-link nav-sub" href="#">X (Twitter) Submitter</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Rate Card -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#rateCardSub" role="button" aria-expanded="false" aria-controls="rateCardSub">
                        <span><i class="fas fa-credit-card me-2"></i> Rate Card</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="rateCardSub">
                        <a class="nav-link nav-sub" href="#">Rate Card</a>
                        <a class="nav-link nav-sub" href="#">Jobseeker Plan Type</a>
                        <a class="nav-link nav-sub" href="#">Payment</a>
                    </div>
                    <div class="divider"></div>

                    <!-- SEO -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#seoSub" role="button" aria-expanded="false" aria-controls="seoSub">
                        <span><i class="fas fa-search-dollar me-2"></i> SEO</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="seoSub">
                        <a class="nav-link nav-sub" href="#">SEO</a>
                        <a class="nav-link nav-sub" href="#">Title / Metatags</a>
                        <a class="nav-link nav-sub" href="#">Search Tags</a>
                        <a class="nav-link nav-sub" href="#">Sitemap</a>
                        <a class="nav-link nav-sub" href="#">Google Analytics</a>
                        <a class="nav-link nav-sub" href="#">Site Page Rank</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Banner -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#bannerSub" role="button" aria-expanded="false" aria-controls="bannerSub">
                        <span><i class="fas fa-image me-2"></i> Banner</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="bannerSub">
                        <a class="nav-link nav-sub" href="#">Upload Banner</a>
                        <a class="nav-link nav-sub" href="#">Edit Banner</a>
                        <a class="nav-link nav-sub" href="#">Statistics</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Tools -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#toolsSub" role="button" aria-expanded="false" aria-controls="toolsSub">
                        <span><i class="fas fa-tools me-2"></i> Tools</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="toolsSub">
                        <a class="nav-link nav-sub" href="#">Database Backup</a>
                        <a class="nav-link nav-sub" href="#">Site Backup</a>
                        <a class="nav-link nav-sub" href="#">Send Email</a>
                        <a class="nav-link nav-sub" href="#">File Manager</a>
                        <a class="nav-link nav-sub" href="#">Who's Online</a>
                        <a class="nav-link nav-sub" href="#">Block IP Address</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Email Templates -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#emailTemplatesSub" role="button" aria-expanded="false" aria-controls="emailTemplatesSub">
                        <span><i class="fas fa-envelope-open-text me-2"></i> Email Templates</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="emailTemplatesSub">
                        <a class="nav-link nav-sub" href="#">Job Alert</a>
                        <a class="nav-link nav-sub" href="#">Recruiter Account Expiry</a>
                        <a class="nav-link nav-sub" href="#">Resume Alert</a>
                        <a class="nav-link nav-sub" href="#">Jobseeker Registration</a>
                        <a class="nav-link nav-sub" href="#">Jobseeker Account Expiry</a>
                        <a class="nav-link nav-sub" href="#">Recruiter Registration</a>
                        <a class="nav-link nav-sub" href="#">Application Sent</a>
                        <a class="nav-link nav-sub" href="#">Expired Job</a>
                        <a class="nav-link nav-sub" href="#">Recruiter Order Invoice</a>
                        <a class="nav-link nav-sub" href="#">Recruiter Order Status Update Invoice</a>
                        <a class="nav-link nav-sub" href="#">Job Post Invoice</a>
                        <a class="nav-link nav-sub" href="#">Jobseeker Order Status Update Invoice</a>
                        <a class="nav-link nav-sub" href="#">Jobseeker Order Invoice</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Import Jobs -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#importJobsSub" role="button" aria-expanded="false" aria-controls="importJobsSub">
                        <span><i class="fas fa-file-import me-2"></i> Import Jobs</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="importJobsSub">
                        <a class="nav-link nav-sub" href="#">Indeed</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Newsletter -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#newsletterSub" role="button" aria-expanded="false" aria-controls="newsletterSub">
                        <span><i class="fas fa-newspaper me-2"></i> Newsletter</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="newsletterSub">
                        <a class="nav-link nav-sub" href="#">Newsletter Manager</a>
                        <a class="nav-link nav-sub" href="#">Jobseeker Newsletter</a>
                        <a class="nav-link nav-sub" href="#">Recruiter Newsletter</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Messages -->
                    <div class="sidebar-section"><i class="fas fa-comments me-2"></i> Messages</div>
                    <div class="divider"></div>

                    <!-- Start Business -->
                    <div class="sidebar-section"><i class="fas fa-rocket me-2"></i> Start Business</div>
                    <div class="divider"></div>

                    <!-- Online Services -->
                    <div class="sidebar-section"><i class="fas fa-globe me-2"></i> Online Services</div>
                    <div class="divider"></div>

                    <!-- Configuration -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#configurationSub" role="button" aria-expanded="false" aria-controls="configurationSub">
                        <span><i class="fas fa-cog me-2"></i> Configuration</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="configurationSub">
                        <a class="nav-link nav-sub" href="#">Site Configuration</a>
                        <a class="nav-link nav-sub" href="#">Minimum Values</a>
                        <a class="nav-link nav-sub" href="#">Maximum Values</a>
                        <a class="nav-link nav-sub" href="#">Images</a>
                        <a class="nav-link nav-sub" href="#">Backup Manager</a>
                        <a class="nav-link nav-sub" href="#">Email Options</a>
                        <a class="nav-link nav-sub" href="#">GZIP Compression</a>
                        <a class="nav-link nav-sub" href="#">Logging</a>
                        <a class="nav-link nav-sub" href="#">Module Options</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Administrator -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#administratorSub" role="button" aria-expanded="false" aria-controls="administratorSub">
                        <span><i class="fas fa-user-tie me-2"></i> Administrator</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="administratorSub">
                        <a class="nav-link nav-sub" href="#">Member Groups</a>
                        <a class="nav-link nav-sub" href="#">File Access</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Localization -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#localizationSub" role="button" aria-expanded="false" aria-controls="localizationSub">
                        <span><i class="fas fa-language me-2"></i> Localization</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="localizationSub">
                        <a class="nav-link nav-sub" href="#">Currency</a>
                        <a class="nav-link nav-sub" href="#">Language</a>
                        <a class="nav-link nav-sub" href="#">Order Status</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Article Manager -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#articleManagerSub" role="button" aria-expanded="false" aria-controls="articleManagerSub">
                        <span><i class="fas fa-book me-2"></i> Article Manager</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="articleManagerSub">
                        <a class="nav-link nav-sub" href="#">Article</a>
                        <a class="nav-link nav-sub" href="#">Article Categories</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Forum -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#forumSub" role="button" aria-expanded="false" aria-controls="forumSub">
                        <span><i class="fas fa-comments me-2"></i> Forum</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="forumSub">
                        <a class="nav-link nav-sub" href="#">Forums</a>
                        <a class="nav-link nav-sub" href="#">Forum Categories</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Cron -->
                    <div class="sidebar-section"><i class="fas fa-clock me-2"></i> Cron</div>
                    <div class="divider"></div>

                    <!-- Print -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#printSub" role="button" aria-expanded="false" aria-controls="printSub">
                        <span><i class="fas fa-print me-2"></i> Print</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="printSub">
                        <a class="nav-link nav-sub" href="#">Jobseeker</a>
                        <a class="nav-link nav-sub" href="#">Recruiter</a>
                    </div>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center p-4 bg-white shadow-sm">
                    <h2 class="mb-0">Dashboard</h2>
                    <div class="d-flex align-items-center">
                        <span class="me-3">Welcome, {{ Auth::user()->name }}</span>
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
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 