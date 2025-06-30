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
                    <div class="sidebar-section">
                        <a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-reset d-flex align-items-center">
                            <i class="fas fa-chart-bar me-2"></i> Dashboard
                        </a>
                    </div>
                    <div class="divider"></div>

                    <!-- Recruiters -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between">
                        <a href="{{ route('admin.recruiters.index') }}" class="text-decoration-none text-reset flex-grow-1 d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i> Recruiters
                        </a>
                        <span data-bs-toggle="collapse" href="#recruitersSub" role="button" aria-expanded="false" aria-controls="recruitersSub">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </div>
                    <div class="collapse" id="recruitersSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.recruiters.index') }}">Companies</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.consultants.index') }}">Consultants</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Jobseekers -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between">
                        <a href="{{ route('admin.jobseekers.index') }}" class="text-decoration-none text-reset flex-grow-1 d-flex align-items-center">
                            <i class="fas fa-users me-2"></i> Jobseekers
                        </a>
                        <span data-bs-toggle="collapse" href="#jobseekersSub" role="button" aria-expanded="false" aria-controls="jobseekersSub" style="cursor:pointer;">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </div>
                    <div class="collapse" id="jobseekersSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.jobseekers.index') }}">Jobseeker</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.jobseekers.paid') }}">Paid Jobseeker</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.jobseekers.print') }}">Print</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Jobs -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between">
                        <a href="{{ route('admin.jobs.active') }}" class="text-decoration-none text-reset flex-grow-1 d-flex align-items-center">
                            <i class="fas fa-briefcase me-2"></i> Jobs
                        </a>
                        <span data-bs-toggle="collapse" href="#jobsSub" role="button" aria-expanded="false" aria-controls="jobsSub" style="cursor:pointer;">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </div>
                    <div class="collapse" id="jobsSub">
                        <a class="nav-link nav-sub" href="#">Jobsite Jobs</a>
                        <a class="nav-link nav-sub" href="#">Indeed Jobs</a>
                    </div>
                    <div class="divider"></div>

                    <!-- University -->
                    <div class="sidebar-section">
                        <a href="{{ route('admin.university.index') }}" class="text-decoration-none text-reset d-flex align-items-center">
                            <i class="fas fa-university me-2"></i> University
                        </a>
                    </div>
                    <div class="divider"></div>

                    <!-- College -->
                    <div class="sidebar-section">
                        <a href="{{ route('admin.college.index') }}" class="text-decoration-none text-reset d-flex align-items-center">
                            <i class="fas fa-graduation-cap me-2"></i> College
                        </a>
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
                    <div class="sidebar-section d-flex align-items-center justify-content-between">
                        <a href="{{ route('admin.orders.index') }}" class="text-decoration-none text-reset flex-grow-1 d-flex align-items-center">
                            <i class="fas fa-box-open me-2"></i> Orders
                        </a>
                        <span data-bs-toggle="collapse" href="#ordersSub" role="button" aria-expanded="false" aria-controls="ordersSub" style="cursor:pointer;">
                            <i class="fas fa-chevron-down"></i>
                        </span>
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
                        <a class="nav-link nav-sub" href="{{ route('admin.search.jobseeker') }}">Jobseeker</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.search.rate_resume') }}">Search & Rate Resume</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.search.recruiter') }}">Recruiter</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Reports -->
                    <div class="sidebar-section">
                        <a href="{{ route('admin.reports.index') }}" class="text-decoration-none text-reset d-flex align-items-center">
                            <i class="fas fa-chart-line me-2"></i> Reports
                        </a>
                    </div>
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
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.user_category') }}">User Category</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.contact_us') }}">Contact Us</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.continent') }}">Continent</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.country') }}">Country</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.zone') }}">Zone</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.job_type') }}">Job Type</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.job_category') }}">Job Category</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.jobseeker_language') }}">Jobseeker Language</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.language_proficiency') }}">Language Proficiency</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.resume_weight') }}">Resume Weight</a>
                        <a class="nav-link nav-sub" href="#">ZIP Code</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.career_level') }}">Career Level</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.experience') }}">Experience</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.education_level') }}">Education Level</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.religion') }}">Religion</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.settings.twitter_submitter') }}">X (Twitter) Submitter</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Rate Card -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#rateCardSub" role="button" aria-expanded="false" aria-controls="rateCardSub">
                        <span><i class="fas fa-credit-card me-2"></i> Rate Card</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="rateCardSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.rate_card') }}">Rate Card</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.jobseeker_plan_type') }}">Jobseeker Plan Type</a>
                        <a class="nav-link nav-sub" href="#">Payment</a>
                    </div>
                    <div class="divider"></div>

                    <!-- SEO -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#seoSub" role="button" aria-expanded="false" aria-controls="seoSub">
                        <span><i class="fas fa-search-dollar me-2"></i> SEO</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="seoSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.seo') }}">SEO</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.seo_title_metatags') }}">Title / Metatags</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.seo_search_tags') }}">Search Tags</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.seo_sitemap') }}">Sitemap</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.seo_google_analytics') }}">Google Analytics</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.seo_page_rank') }}">Site Page Rank</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Banner -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#bannerSub" role="button" aria-expanded="false" aria-controls="bannerSub">
                        <span><i class="fas fa-image me-2"></i> Banner</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="bannerSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.banner_upload') }}">Upload Banner</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.banner_edit') }}">Edit Banner</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.banner_statistics') }}">Statistics</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Tools -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#toolsSub" role="button" aria-expanded="false" aria-controls="toolsSub">
                        <span><i class="fas fa-tools me-2"></i> Tools</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="toolsSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.database_backup') }}">Database Backup</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.site_backup') }}">Site Backup</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.send_email') }}">Send Email</a>
                        <a class="nav-link nav-sub" href="#">File Manager</a>
                        <a class="nav-link nav-sub" href="#">Who's Online</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.block_ip') }}">Block IP Address</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Email Templates -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#emailTemplatesSub" role="button" aria-expanded="false" aria-controls="emailTemplatesSub">
                        <span><i class="fas fa-envelope-open-text me-2"></i> Email Templates</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="emailTemplatesSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.job_alert') }}">Job Alert</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.recruiter_account_alert') }}">Recruiter Account Expiry</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.resume_alert') }}">Resume Alert</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.jobseeker_registration') }}">Jobseeker Registration</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.jobseeker_account_alert') }}">Jobseeker Account Expiry</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.recruiter_registration') }}">Recruiter Registration</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.application_send_template') }}">Application Sent</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.expired_job_alert') }}">Expired Job</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.recruiter_order_template') }}">Recruiter Order Invoice</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.recruiter_order_update_template') }}">Recruiter Order Status Update Invoice</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.job_post_invoice_template') }}">Job Post Invoice</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.jobseeker_order_status_update') }}">Jobseeker Order Status Update Invoice</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.jobseeker_order_template') }}">Jobseeker Order Invoice</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Import Jobs -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#importJobsSub" role="button" aria-expanded="false" aria-controls="importJobsSub">
                        <span><i class="fas fa-file-import me-2"></i> Import Jobs</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="importJobsSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.indeed_feed_import') }}">Indeed</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Newsletter -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#newsletterSub" role="button" aria-expanded="false" aria-controls="newsletterSub">
                        <span><i class="fas fa-newspaper me-2"></i> Newsletter</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="newsletterSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.newsletter_manager') }}">Newsletter Manager</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.jobseeker_newsletter') }}">Jobseeker Newsletter</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.recruiter_newsletter') }}">Recruiter Newsletter</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Messages -->
                    <div class="sidebar-section"><a href="{{ route('admin.response_from_employers') }}" class="text-decoration-none text-reset"><i class="fas fa-comments me-2"></i> Messages</a></div>
                    <div class="divider"></div>

                    <!-- Start Business -->
                    <div class="sidebar-section"><a href="{{ route('admin.start_business') }}" class="text-decoration-none text-reset"><i class="fas fa-rocket me-2"></i> Start Business</a></div>
                    <div class="divider"></div>

                    <!-- Online Services -->
                    <div class="sidebar-section"><a href="{{ route('admin.online_services') }}" class="text-decoration-none text-reset"><i class="fas fa-globe me-2"></i> Online Services</a></div>
                    <div class="divider"></div>

                    <!-- Configuration -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#configurationSub" role="button" aria-expanded="false" aria-controls="configurationSub">
                        <span><i class="fas fa-cog me-2"></i> Configuration</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="configurationSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.site_configuration') }}">Site Configuration</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.minimum_values') }}">Minimum Values</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.maximum_values') }}">Maximum Values</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.images') }}">Images</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.backup_manager') }}">Backup Manager</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.email_options') }}">E-Mail Options</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.gzip_compression') }}">GZIP Compression</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.logging') }}">Logging</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.module_options') }}">Module Options</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Administrator -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#administratorSub" role="button" aria-expanded="false" aria-controls="administratorSub">
                        <span><i class="fas fa-user-tie me-2"></i> Administrator</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="administratorSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.administrator.member_groups') }}">Member Groups</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.administrator.file_access') }}">File Access</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Localization -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#localizationSub" role="button" aria-expanded="false" aria-controls="localizationSub">
                        <span><i class="fas fa-language me-2"></i> Localization</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="localizationSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.currency') }}">Currency</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.language') }}">Language</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.order_status') }}">Order Status</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Article Manager -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#articleManagerSub" role="button" aria-expanded="false" aria-controls="articleManagerSub">
                        <span><i class="fas fa-book me-2"></i> Article Manager</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="articleManagerSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.article') }}">Article</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.article_categories') }}">Article Categories</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Forum -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#forumSub" role="button" aria-expanded="false" aria-controls="forumSub">
                        <span><i class="fas fa-comments me-2"></i> Forum</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="forumSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.forum') }}">Forums</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.forum_categories') }}">Forum Categories</a>
                    </div>
                    <div class="divider"></div>

                    <!-- Cron -->
                    <div class="sidebar-section"><a href="{{ route('admin.cron') }}" class="text-decoration-none text-reset"><i class="fas fa-clock me-2"></i> Cron</a></div>
                    <div class="divider"></div>

                    <!-- Print -->
                    <div class="sidebar-section d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#printSub" role="button" aria-expanded="false" aria-controls="printSub">
                        <span><i class="fas fa-print me-2"></i> Print</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="collapse" id="printSub">
                        <a class="nav-link nav-sub" href="{{ route('admin.jobseekers.print') }}">Jobseeker</a>
                        <a class="nav-link nav-sub" href="{{ route('admin.recruiters.print') }}">Recruiter</a>
                    </div>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 