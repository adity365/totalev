@extends('admin.dashboard')

@section('content')
<h2 style="color: #666; font-size: 2rem; margin-bottom: 10px;">Cron Setup help</h2>
<div style="margin: 10px;">
    <div style="background:#f7f7ef; border:1px solid #e0e0d0; padding:16px;">
        <b>Cron command : Every Day</b>
        <br><br>
        <b>Generate RSS of All Jobs :</b> To generate RSS of jobs Everyday<br>
        <code>0 * 0 * * /usr/bin/curl https://vacanttree.com/cron_job/all_jobs.php<br>0 * 0 * * wget -q -o /dev/null https://vacanttree.com/cron_job/all_jobs.php</code>
        <br><br>
        <b>Daily Report :</b> Generate Daily Report and send to admin<br>
        <code>0 * 0 * * /usr/bin/curl https://vacanttree.com/cron_job/daily_report.php<br>0 * 0 * * wget -q -o /dev/null https://vacanttree.com/cron_job/daily_report.php</code>
        <br><br>
        <b>Get Alert Before Job Expire :</b> Recruiter Get Alert Before Job Expire<br>
        <code>0 * 0 * * /usr/bin/curl https://vacanttree.com/cron_job/expired_job_alert.php<br>0 * 0 * * wget -q -o /dev/null https://vacanttree.com/cron_job/expired_job_alert.php</code>
        <br><br>
        <b>plan expire Alert :</b> Recruiter Get Alert Before expiry of the plan<br>
        <code>0 * 0 * * /usr/bin/curl https://vacanttree.com/cron_job/expired_recruiter_account_alert.php<br>0 * 0 * * wget -q -o /dev/null https://vacanttree.com/cron_job/expired_recruiter_account_alert.php</code>
        <br><br>
        <b>Rss for Forum :</b> Generate RSS of all Forums<br>
        <code>0 * 0 * * /usr/bin/curl https://vacanttree.com/cron_job/forum.php<br>0 * 0 * * wget -q -o /dev/null https://vacanttree.com/cron_job/forum.php</code>
        <br><br>
        <b>Generate RSS for Forum Topics :</b> Generate RSS of new Forums Topics<br>
        <code>0 * 0 * * /usr/bin/curl https://vacanttree.com/cron_job/topics.php<br>0 * 0 * * wget -q -o /dev/null https://vacanttree.com/cron_job/topics.php</code>
        <br><br>
        <b>Generate RSS of Forum replies :</b> Generate RSS of new Forums Topics Replies<br>
        <code>0 * 0 * * /usr/bin/curl https://vacanttree.com/cron_job/reply.php<br>0 * 0 * * wget -q -o /dev/null https://vacanttree.com/cron_job/reply.php</code>
        <br><br>
        <b>Job Alert For Jobseeker :</b> Send Mathing job alert to Jobseeker<br>
        <code>0 * 0 * * /usr/bin/curl https://vacanttree.com/cron_job/job_alert.php<br>0 * 0 * * wget -q -o /dev/null https://vacanttree.com/cron_job/job_alert.php</code>
        <br><br>
        <b>Resume Alert For Recruiters :</b> Send Mathing resume to recruiter Criteria<br>
        <code>0 * 0 * * /usr/bin/curl https://vacanttree.com/cron_job/resume_alert.php<br>0 * 0 * * wget -q -o /dev/null https://vacanttree.com/cron_job/resume_alert.php</code>
        <br><br>
        <b>For Database Backup :</b> Takes Database Backup<br>
        <code>0 * 0 * * /usr/bin/curl https://vacanttree.com/cron_job/database_backup.php<br>0 * 0 * * wget -q -o /dev/null https://vacanttree.com/cron_job/database_backup.php</code>
        <br><br>
        <b>Delete Old Database :</b> Delete Old databse backup file<br>
        <code>0 * 0 * * /usr/bin/curl https://vacanttree.com/cron_job/prune_database_backup.php<br>0 * 0 * * wget -q -o /dev/null https://vacanttree.com/cron_job/prune_database_backup.php</code>
        <br><br>
        <b>RSS of Jobs By Category :</b> Generate RSS of Jobs By Category<br>
        <code>0 0 * * * /usr/bin/curl https://vacanttree.com/cron_job/create_xml_file.php<br>0 0 * * * wget -q -o /dev/null https://vacanttree.com/cron_job/create_xml_file.php</code>
    </div>
</div>
<div style="background:#f7f7ef; border:1px solid #e0e0d0; padding:8px; margin-top:16px;"><b>Cron command : Every month</b></div>
<br>
<b>Page Rank :</b> Sets page rank of the SIte<br>
<code>0 0 1 * * /usr/bin/curl https://vacanttree.com/cron_job/set_page_rank.php<br>0 0 1 * * wget -q -o /dev/null https://vacanttree.com/cron_job/set_page_rank.php</code>
@endsection 