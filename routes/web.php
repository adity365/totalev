<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class . '@index')->name('home');

Route::get('/terms', HomeController::class . '@terms')->name('terms');

Route::get('/privacy-policy', HomeController::class . '@privacyPolicy')->name('privacyPolicy');

// Admin Routes
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login']);
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/report-per-month', [DashboardController::class, 'reportPerMonth'])->name('admin.reportPerMonth');
    Route::get('/admin/recruiters', [App\Http\Controllers\Admin\RecruiterController::class, 'index'])->name('admin.recruiters.index');
    Route::get('/admin/jobs/active', [App\Http\Controllers\Admin\JobController::class, 'index'])->name('admin.jobs.active');
    Route::get('/admin/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/admin/jobseekers', [App\Http\Controllers\Admin\JobseekerController::class, 'index'])->name('admin.jobseekers.index');
    Route::get('/admin/jobseekers/paid', [App\Http\Controllers\Admin\JobseekerController::class, 'paid'])->name('admin.jobseekers.paid');
    Route::get('/admin/jobseekers/print', function() {
        return view('admin.jobseekers.print');
    })->name('admin.jobseekers.print');
    Route::get('/admin/consultants', [App\Http\Controllers\Admin\ConsultantController::class, 'index'])->name('admin.consultants.index');
    Route::get('/admin/university', [App\Http\Controllers\Admin\UniversityController::class, 'index'])->name('admin.university.index');
    Route::get('/admin/college', [App\Http\Controllers\Admin\CollegeController::class, 'index'])->name('admin.college.index');
    Route::get('/admin/search/jobseeker', [App\Http\Controllers\Admin\SearchJobseekerController::class, 'index'])->name('admin.search.jobseeker');
    Route::get('/admin/search/rate-resume', [App\Http\Controllers\Admin\SearchRateResumeController::class, 'index'])->name('admin.search.rate_resume');
    Route::get('/admin/search/recruiter', [App\Http\Controllers\Admin\SearchRecruiterController::class, 'index'])->name('admin.search.recruiter');
    Route::get('/admin/reports', [App\Http\Controllers\Admin\ReportController::class, 'index'])->name('admin.reports.index');
    Route::get('/admin/settings/user-category', [App\Http\Controllers\Admin\UserCategoryController::class, 'index'])->name('admin.settings.user_category');
    Route::get('/admin/administrator/member-groups', [App\Http\Controllers\Admin\MemberGroupsController::class, 'index'])->name('admin.administrator.member_groups');
    Route::get('/admin/administrator/file-access', [App\Http\Controllers\Admin\FileAccessController::class, 'index'])->name('admin.administrator.file_access');
    Route::get('/admin/recruiters/print', function() {
        return view('admin.recruiters.print');
    })->name('admin.recruiters.print');
    Route::get('/admin/settings/contact-us', function() {
        return view('admin.settings.contact_us');
    })->name('admin.settings.contact_us');
    Route::get('/admin/settings/continent', function() {
        return view('admin.settings.continent');
    })->name('admin.settings.continent');
    Route::get('/admin/settings/country', function() {
        return view('admin.settings.country');
    })->name('admin.settings.country');
    Route::get('/admin/settings/zone', function() {
        return view('admin.settings.zone');
    })->name('admin.settings.zone');
    Route::get('/admin/settings/job-type', function() {
        return view('admin.settings.job_type');
    })->name('admin.settings.job_type');
    Route::get('/admin/settings/job-category', function() {
        return view('admin.settings.job_category');
    })->name('admin.settings.job_category');
    Route::get('/admin/settings/jobseeker-language', function() {
        return view('admin.settings.jobseeker_language');
    })->name('admin.settings.jobseeker_language');
    Route::get('/admin/settings/language-proficiency', function() {
        return view('admin.settings.language_proficiency');
    })->name('admin.settings.language_proficiency');
    Route::get('/admin/settings/career-level', function() {
        return view('admin.settings.language_proficiency');
    })->name('admin.settings.career_level');
    Route::get('/admin/settings/experience', function() {
        return view('admin.settings.experience');
    })->name('admin.settings.experience');
    Route::get('/admin/settings/education-level', function() {
        return view('admin.settings.education_level');
    })->name('admin.settings.education_level');
    Route::get('/admin/settings/religion', function() {
        return view('admin.settings.religion');
    })->name('admin.settings.religion');
    Route::get('/admin/settings/resume-weight', function() {
        return view('admin.settings.resume_weight');
    })->name('admin.settings.resume_weight');
    Route::get('/admin/settings/twitter-submitter', function() {
        return view('admin.settings.twitter_submitter');
    })->name('admin.settings.twitter_submitter');
    Route::get('/admin/rate-card', function() {
        return view('admin.settings.rate_card');
    })->name('admin.rate_card');
    Route::get('/admin/rate-card/jobseeker-plan-type', function() {
        return view('admin.settings.jobseeker_plan_type');
    })->name('admin.jobseeker_plan_type');
    Route::get('/admin/seo', function() {
        return view('admin.settings.seo');
    })->name('admin.seo');
    Route::get('/admin/seo/title-metatags', function() {
        return view('admin.settings.seo_title_metatags');
    })->name('admin.seo_title_metatags');
    Route::get('/admin/seo/search-tags', function() {
        return view('admin.settings.seo_search_tags');
    })->name('admin.seo_search_tags');
    Route::get('/admin/seo/sitemap', function() {
        return view('admin.settings.seo_sitemap');
    })->name('admin.seo_sitemap');
    Route::get('/admin/seo/google-analytics', function() {
        return view('admin.settings.seo_google_analytics');
    })->name('admin.seo_google_analytics');
    Route::get('/admin/seo/page-rank', function() {
        return view('admin.settings.seo_page_rank');
    })->name('admin.seo_page_rank');
    Route::get('/admin/banner/upload', function() {
        return view('admin.settings.banner_upload');
    })->name('admin.banner_upload');
    Route::get('/admin/banner/edit', function() {
        return view('admin.settings.banner_edit');
    })->name('admin.banner_edit');
    Route::get('/admin/banner/statistics', function() {
        return view('admin.settings.banner_statistics');
    })->name('admin.banner_statistics');
    Route::get('/admin/tools/database-backup', function() {
        return view('admin.tools.database_backup');
    })->name('admin.database_backup');
    Route::get('/admin/tools/site-backup', function() {
        return view('admin.tools.site_backup');
    })->name('admin.site_backup');
    Route::get('/admin/tools/send-email', function() {
        return view('admin.tools.send_email');
    })->name('admin.send_email');
    Route::get('/admin/tools/block-ip', function() {
        return view('admin.tools.block_ip');
    })->name('admin.block_ip');
    Route::get('/admin/email-templates/job-alert', function() {
        return view('admin.email_templates.job_alert');
    })->name('admin.job_alert');
    Route::get('/admin/email-templates/resume-alert', function() {
        return view('admin.email_templates.resume_alert');
    })->name('admin.resume_alert');
    Route::get('/admin/email-templates/recruiter-account-alert', function() {
        return view('admin.email_templates.recruiter_account_alert');
    })->name('admin.recruiter_account_alert');
    Route::get('/admin/email-templates/jobseeker-registration', function() {
        return view('admin.email_templates.jobseeker_registration');
    })->name('admin.jobseeker_registration');
    Route::get('/admin/email-templates/jobseeker-account-alert', function() {
        return view('admin.email_templates.jobseeker_account_alert');
    })->name('admin.jobseeker_account_alert');
    Route::get('/admin/email-templates/recruiter-registration', function() {
        return view('admin.email_templates.recruiter_registration');
    })->name('admin.recruiter_registration');
    Route::get('/admin/email-templates/application-send-template', function() {
        return view('admin.email_templates.application_send_template');
    })->name('admin.application_send_template');
    Route::get('/admin/email-templates/expired-job-alert', function() {
        return view('admin.email_templates.expired_job_alert');
    })->name('admin.expired_job_alert');
    Route::get('/admin/email-templates/recruiter-order-template', function() {
        return view('admin.email_templates.recruiter_order_template');
    })->name('admin.recruiter_order_template');
    Route::get('/admin/email-templates/recruiter-order-update-template', function() {
        return view('admin.email_templates.recruiter_order_update_template');
    })->name('admin.recruiter_order_update_template');
    Route::get('/admin/email-templates/job-post-invoice-template', function() {
        return view('admin.email_templates.job_post_invoice_template');
    })->name('admin.job_post_invoice_template');
    Route::get('/admin/email-templates/jobseeker-order-template', function() {
        return view('admin.email_templates.jobseeker_order_template');
    })->name('admin.jobseeker_order_template');
    Route::get('/admin/email-templates/jobseeker-order-status-update', function() {
        return view('admin.email_templates.jobseeker_order_status_update');
    })->name('admin.jobseeker_order_status_update');
    Route::get('/admin/import-jobs/indeed', function() {
        return view('admin.import_jobs.indeed_feed_import');
    })->name('admin.indeed_feed_import');
    Route::get('/admin/newsletter/manager', function() {
        return view('admin.newsletter.manager');
    })->name('admin.newsletter_manager');
    Route::get('/admin/newsletter/jobseeker', function() {
        return view('admin.newsletter.jobseeker_history');
    })->name('admin.jobseeker_newsletter');
    Route::get('/admin/newsletter/recruiter', function() {
        return view('admin.newsletter.recruiter_history');
    })->name('admin.recruiter_newsletter');
    Route::get('/admin/messages/employer-responses', function() {
        return view('admin.messages.response_from_employers');
    })->name('admin.response_from_employers');
    Route::get('/admin/start-business', function() {
        return view('admin.start_business.management');
    })->name('admin.start_business');
    Route::get('/admin/online-services', function() {
        return view('admin.online_services.management');
    })->name('admin.online_services');
    Route::get('/admin/configuration/site', function() {
        return view('admin.configuration.site');
    })->name('admin.site_configuration');
    Route::get('/admin/configuration/minimum', function() {
        return view('admin.configuration.minimum');
    })->name('admin.minimum_values');
    Route::get('/admin/configuration/maximum', function() {
        return view('admin.configuration.maximum');
    })->name('admin.maximum_values');
    Route::get('/admin/configuration/images', function() {
        return view('admin.configuration.images');
    })->name('admin.images');
    Route::get('/admin/configuration/backup-manager', function() {
        return view('admin.configuration.backup_manager');
    })->name('admin.backup_manager');
    Route::get('/admin/configuration/email-options', function() {
        return view('admin.configuration.email_options');
    })->name('admin.email_options');
    Route::get('/admin/configuration/gzip-compression', function() {
        return view('admin.configuration.gzip_compression');
    })->name('admin.gzip_compression');
    Route::get('/admin/configuration/logging', function() {
        return view('admin.configuration.logging');
    })->name('admin.logging');
    Route::get('/admin/configuration/module-options', function() {
        return view('admin.configuration.module_options');
    })->name('admin.module_options');
    Route::get('/admin/localization/currency', function() {
        return view('admin.localization.currency');
    })->name('admin.currency');
    Route::get('/admin/localization/language', function() {
        return view('admin.localization.language');
    })->name('admin.language');
    Route::get('/admin/localization/order-status', function() {
        return view('admin.localization.order_status');
    })->name('admin.order_status');
    Route::get('/admin/article-manager/article', function() {
        return view('admin.article_manager.article');
    })->name('admin.article');
    Route::get('/admin/article-manager/article-categories', function() {
        return view('admin.article_manager.article_categories');
    })->name('admin.article_categories');
    Route::get('/admin/forum-manager/forums', function() {
        return view('admin.forum_manager.forums');
    })->name('admin.forum');
    Route::get('/admin/forum-manager/forum-categories', function() {
        return view('admin.forum_manager.forum_categories');
    })->name('admin.forum_categories');
    Route::get('/admin/cron', function() {
        return view('admin.cron.setup_help');
    })->name('admin.cron');
});
