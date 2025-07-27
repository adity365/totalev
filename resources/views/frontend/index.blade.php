@extends('frontend.layouts.main')

@section('main-container')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ url('frontend/img/slide2.jpg') }}" style="height:450px" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(43, 57, 64, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Advertise a job and hire the
                                    people you need</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">2400 Peoples are daily search in this portal,
                                    100 user added job portal!</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Post A
                                    Job</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">CV
                                    Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ url('frontend/img/carousel-21.jpg') }}" style="height:450px" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(43, 57, 64, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <!-- <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best Startup Job That Fit You</h1> -->
                                <h1 class="display-3 text-white animated slideInDown mb-4">We Help To Get The Best Job</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">2400 Peoples are daily search in this portal,
                                    100 user added job portal!</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Post A
                                    Job</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">CV
                                    Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <input type="text" class="form-control border-0" placeholder="Job title, skill or company" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control border-0" placeholder="City or pincode" />
                            <!-- <select class="form-select border-0">
                                                            <option selected>City or pincode</option>
                                                            <option value="1">Category 1</option>
                                                            <option value="2">Category 2</option>
                                                            <option value="3">Category 3</option>
                                                        </select> -->
                        </div>
                        <!-- <div class="col-md-6">
                                                        <select class="form-select border-0">
                                                            <option selected>Location</option>
                                                            <option value="1">Location 1</option>
                                                            <option value="2">Location 2</option>
                                                            <option value="3">Location 3</option>
                                                        </select>
                                                    </div> -->
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-dark border-0 w-100">Search</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-2 d-flex flex-wrap justify-content-start">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Fulltime">
                        <label class="form-check-label text-white" for="Fulltime">Weekend Job</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Fulltime">
                        <label class="form-check-label text-white" for="Fulltime">Full Time</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Partime">
                        <label class="form-check-label text-white" for="Partime">Part Time</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Remmtejob">
                        <label class="form-check-label text-white" for="Remmtejob">Remote Job</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Freelancejob">
                        <label class="form-check-label text-white" for="Freelancejob">Freelance Jobs</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Internship">
                        <label class="form-check-label text-white" for="Internship">Internship</label>
                    </div>
                    <!-- <span class="mx-2">
                                                    <input type="checkbox" />
                                                </span>
                                                <label class="text-white">Part Time</label> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->

    <div class="container">
        <div class="row justify-content-center text-center mt-5">
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="job-box">
                    <h4>All Job</h4>
                    <button class="btn btn-primary job-btn">View All</button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="job-box">
                    <h4>IT Job</h4>
                    <button class="btn btn-danger job-btn">View All</button>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="job-box">
                    <h4>Non-IT Job</h4>
                    <button class="btn btn-success job-btn">View All</button>
                </div>
            </div>
        </div>
    </div>

    <!--======================== tabs ========================-->

    <div class="container mt-5">
        <ul class="nav nav-tabs" id="jobTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular"
                    type="button" role="tab">Popular Searches</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="sector-tab" data-bs-toggle="tab" data-bs-target="#sector" type="button"
                    role="tab">Jobs by Industries</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="location-tab" data-bs-toggle="tab" data-bs-target="#location"
                    type="button" role="tab">Jobs by Location</button>
            </li>
        </ul>

        <div class="tab-content mt-3" id="jobTabsContent">
            <!-- Popular Searches -->
            <div class="tab-pane fade show active" id="popular" role="tabpanel">
                <a href="#">Software Developer Jobs |</a>
                <a href="#">Marketing Manager Jobs | </a>
                <a href="#">Customer Service Jobs | </a>
                <a href="#">Project Manager Jobs | </a>
            </div>

            <!-- Jobs by Sector -->
            <div class="tab-pane fade" id="sector" role="tabpanel">
                <a href="#">IT & Tech Jobs | </a>
                <a href="#">Healthcare Jobs | </a>
                <a href="#">Finance Jobs | </a>
                <a href="#">Construction Jobs | </a>
            </div>

            <!-- Jobs by Location -->
            <div class="tab-pane fade" id="location" role="tabpanel">
                <a href="#">Jobs in London | </a>
                <a href="#">Jobs in Manchester | </a>
                <a href="#">Jobs in Birmingham | </a>
                <a href="#">Jobs in Glasgow | </a>
            </div>
        </div>
    </div>
    <!--======================== End tabs ========================-->

    <!--======================== Recruiters ========================-->

    <div class="container mt-5">
        <div class="row">
            <!-- Job Block 1 -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="job-box1">
                    <h5><a href="">Req. Office Boy </a>
                        <button class="btn btn-primary btn-sm apply-btn">Apply Now</button>
                    </h5>
                    <!-- <p><strong>Category:</strong> Driver, Office Boy, Ground Staff, Field Boy, Plumbers</p> -->
                    <!-- <p><strong>Company :</strong> Digital IT Solutions (P) Ltd.</p> -->
                    <!-- <div class="apply-btn-container">
                                                <p><img src="{{ url('frontend/img/vacantree-logo.jpeg') }}" alt="Apply Now Background" class="apply-btn-bg1"></p>
                                            </div> -->
                    <div class="company-info">
                        <img src="{{ url('frontend/img/vacantree-logo.jpeg') }}" alt="Vacant Tree Logo"
                            class="company-logo">
                        <span class="company-name">Vacant Tree</span>
                    </div>
                    <!-- <p> <strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p> -->
                    <div class="job-info1">
                        <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p>
                        <p><strong>Exp. :</strong> 1 - 3 Years</p>
                    </div>
                    <div class="job-info1">
                        <p><strong><i class="fas fa-rupee-sign"></i></strong> <span class="bg2"> 100,000 - 120,000
                            </span> </p>
                        <p><strong><i class="fas fa-clock clock-icon"></i></strong> <span class="bg2"> Full-time
                            </span> </p>
                    </div>
                    <!-- <div class="job-info1">
                                                <p><strong>Date Posted :</strong> 16-Aug-2024</p>
                                                <p><strong>Before Apply :</strong> 19-Mar-2025</p>
                                            </div> -->
                    <p class="mt-1 d-flex align-items-center"><strong>Skill :</strong>
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                        <span class="skills-container"> Designer </span>
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                    </p>
                    <p class="mt-1 d-flex align-items-center">
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                        <span class="skills-container"> Designer </span>
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                        <span class="plus-icon">+</span>
                    </p>
                    <div class="job-info1">
                        <p><strong class="text-primary">New</strong> <strong>1day ago </strong> <strong>/ 15 days
                                left</strong></p>
                    </div>
                    <div class="icon-container">
                        <i class="fas fa-bookmark"></i>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
            </div>

            <!-- Job Block 2 -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="job-box1">
                    <h5><a href="">Req. Driver </a>
                        <button class="btn btn-primary btn-sm apply-btn">Apply Now</button>
                    </h5>
                    <!-- <p><strong>Category:</strong> Driver, Office Boy, Ground Staff, Field Boy, Plumbers</p> -->
                    <!-- <p><strong>Company :</strong> Digital IT Solutions (P) Ltd.</p> -->
                    <div class="company-info">
                        <img src="{{ url('frontend/img/vacantree-logo.jpeg') }}" alt="Vacant Tree Logo"
                            class="company-logo">
                        <span class="company-name">Vacant Tree</span>
                    </div>
                    <!-- <p> <strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p> -->
                    <div class="job-info1">
                        <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p>
                        <p><strong>Exp. :</strong> 1 - 3 Years</p>
                    </div>
                    <div class="job-info1">
                        <p><strong><i class="fas fa-rupee-sign"></i></strong> <span class="bg2"> 100,000 - 120,000
                            </span> </p>
                        <p><strong><i class="fas fa-clock clock-icon"></i></strong> <span class="bg2"> Full-time
                            </span> </p>
                    </div>
                    <p class="mt-1 d-flex align-items-center"><strong>Skill :</strong>
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                        <span class="skills-container"> Designer </span>
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                    </p>
                    <p class="mt-1 d-flex align-items-center">
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                        <span class="skills-container"> Designer </span>
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                        <span class="plus-icon">+</span>
                    </p>
                    <div class="job-info1">
                        <p><strong class="text-primary">New</strong> <strong>1day ago </strong> <strong>/ 15 days
                                left</strong></p>
                        <!-- <p><strong>Before Apply  :</strong> 19-Mar-2025</p> -->
                    </div>
                    <div class="icon-container">
                        <i class="fas fa-bookmark"></i>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4 col-sm-6 mb-3">
                                        <div class="job-box1">
                                            <h5>Req. Driver
                                                <button class="btn btn-primary btn-sm apply-btn">Apply Now</button>
                                            </h5>
                                            <p><strong>Company:</strong> Fast Movers Pvt. Ltd.</p>
                                            <p><strong>Salary:</strong> ₹150,000 - ₹180,000</p>
                                            <p><strong>Job Type:</strong> Full-time</p>
                                            <p><strong>Date Posted:</strong> 20-Feb-2024</p>
                                            <p><strong>Before Apply:</strong> 15-Apr-2025</p>
                                            <p class="job-location"><strong>Location:</strong> Connaught Place, Delhi, India, Pin - 110001</p>
                                            <div class="icon-container">
                                                <i class="fas fa-bookmark"></i>
                                                <i class="fas fa-share-alt"></i>
                                            </div>
                                        </div>
                                    </div> -->

            <!-- Job Block 3 -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="job-box1">
                    <h5><a href="">Req. Security Guard </a>
                        <button class="btn btn-primary btn-sm apply-btn">Apply Now</button>
                    </h5>
                    <!-- <p><strong>Category:</strong> Driver, Office Boy, Ground Staff, Field Boy, Plumbers</p> -->
                    <!-- <p><strong>Company :</strong> Digital IT Solutions (P) Ltd.</p> -->
                    <div class="company-info">
                        <img src="{{ url('frontend/img/vacantree-logo.jpeg') }}" alt="Vacant Tree Logo"
                            class="company-logo">
                        <span class="company-name">Vacant Tree</span>
                    </div>
                    <!-- <p> <strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p> -->
                    <div class="job-info1">
                        <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p>
                        <p><strong>Exp. :</strong> 1 - 3 Years</p>
                    </div>
                    <div class="job-info1">
                        <p><strong><i class="fas fa-rupee-sign"></i></strong> <span class="bg2"> 100,000 - 120,000
                            </span> </p>
                        <p><strong><i class="fas fa-clock clock-icon"></i>
                                <!-- <i class="fas fa-briefcase job-type-icon"></i> -->
                            </strong> <span class="bg2"> Full-time </span> </p>
                    </div>
                    <p class="mt-1 d-flex align-items-center"><strong>Skill :</strong>
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                        <span class="skills-container"> Designer </span>
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                    </p>
                    <p class="mt-1 d-flex align-items-center">
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                        <span class="skills-container"> Designer </span>
                        <span class="skills-container"> Excel </span>
                        <span class="skills-container"> Computer </span>
                        <span class="plus-icon">+</span>
                    </p>
                    <div class="job-info1">
                        <p><strong class="text-primary">New</strong> <strong>1day ago </strong> <strong>/ 15 days
                                left</strong></p>
                        <!-- <p><strong>Before Apply  :</strong> 19-Mar-2025</p> -->
                    </div>
                    <!-- <p class="job-location"><strong>Job Description :</strong> Nehru Place, India, Pin - 110019</p> -->
                    <div class="icon-container">
                        <i class="fas fa-bookmark"></i>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4 col-sm-6 mb-3">
                                        <div class="job-box1">
                                            <h5>Req. Security Guard
                                                <button class="btn btn-primary btn-sm apply-btn">Apply Now</button>
                                            </h5>
                                            <p><strong>Company:</strong> Safe Guard Services</p>
                                            <p><strong>Salary:</strong> ₹120,000 - ₹150,000</p>
                                            <p><strong>Job Type:</strong> Full-time</p>
                                            <p><strong>Date Posted:</strong> 25-Jan-2024</p>
                                            <p><strong>Before Apply:</strong> 10-May-2025</p>
                                            <p class="job-location"><strong>Location:</strong> Gurgaon, Haryana, India, Pin - 122001</p>
                                            <div class="icon-container">
                                                <i class="fas fa-bookmark"></i>
                                                <i class="fas fa-share-alt"></i>
                                            </div>
                                        </div>
                                    </div> -->
        </div>
        <div class="d-flex justify-content-end mb-5">
            <button class="btn btn-success more-jobs-btn">More Jobs</button>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 col-md-10 col-sm-12 mb-3 text-center">
                <a href="#">
                    <img src="{{ url('frontend/img/banner/banner1.png') }}" alt="Banner Image" class="img-fluid">
                </a>
            </div>
        </div>
    </div>

    <!--======================== End Recruiters ========================-->

    <!--======================== Start Resume Box ========================-->

    <div class="container mt-5">
        <div class="row" id="jobseeker-list">
            @include('frontend.jobseeker_block._jobseeker_block', ['jobseekers' => $jobseekers])
        </div>

        @if($jobseekers->hasMorePages())
        <div class="d-flex justify-content-end mb-5">
            <button class="btn btn-success more-jobs-btn" id="load-more"
                data-next-page="{{ $jobseekers->currentPage() + 1 }}">More Resumes</button>
        </div>
        @endif
    </div>

    

    <!--======================== End Resume Box ========================-->

    <div class="container mt-4">
        <!-- Radio Buttons -->
        <div class="d-flex justify-content-center align-items-center mb-3 flex-wrap bg-light p-3">
            <!-- <div class="form-check form-check-inline"> -->
            <!-- <input class="form-check-input" type="radio" name="category" id="companies" value="companies"> -->
            <!-- <label class="form-check-label" for="companies">  -->
            <!-- <strong>Government Jobs</strong> -->
            <!-- </label> -->
            <!-- </div> -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="category" id="universities" value="universities">
                <label class="form-check-label" for="universities">Universities A-Z</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="category" id="universities" value="universities">
                <label class="form-check-label" for="universities">Colleges A-Z</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="category" id="consultants" value="consultants"
                    checked>
                <label class="form-check-label" for="consultants">ITI, Diploma & Polytechnic</label>
            </div>
            <!-- Search Lens Icon -->
            <div class="search-icon-container ms-3 mt-2 mt-md-0">
                <i class="fas fa-search search-icon"></i>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mb-5">
        <button class="btn btn-success more-jobs-btn">Government Job</button>
    </div>

    <!--======================== Start Government Job ========================-->
    <div class="container mt-4">
        <div class="row">
            <!-- Result Box -->
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="info-box">
                    <h4 class="box-title">💼 Latest Jobs</h4>
                    <ul class="box-list">
                        <li><a href="#">SSC GD Constable Recruitment</a></li>
                        <li><a href="#">Indian Army Agniveer Vacancy</a></li>
                        <li><a href="#">UP Police Constable Bharti</a></li>
                        <li><a href="#">Railway Apprentice Jobs</a></li>
                        <li><a href="#">View More ➜</a></li>
                    </ul>
                </div>
            </div>

            <!-- Admit Card Box -->
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="info-box">
                    <h4 class="box-title">🎫 Admit Card</h4>
                    <ul class="box-list">
                        <li><a href="#">UPSC Civil Services Admit Card</a></li>
                        <li><a href="#">Railway NTPC Exam Admit Card</a></li>
                        <li><a href="#">SSC CGL Admit Card</a></li>
                        <li><a href="#">IBPS PO Prelims Admit Card</a></li>
                        <li><a href="#">View More ➜</a></li>
                    </ul>
                </div>
            </div>

            <!-- Latest Jobs Box -->
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="info-box">
                    <h4 class="box-title">📜 Result</h4>
                    <ul class="box-list">
                        <li><a href="#">UP Board 12th Result 2024</a></li>
                        <li><a href="#">CBSE 10th Exam Result</a></li>
                        <li><a href="#">Railway Group D Result</a></li>
                        <li><a href="#">SSC CHSL Tier-1 Result</a></li>
                        <li><a href="#">View More ➜</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--======================== End Government Job ========================-->



    <div class="container cont1">
        <div class="row mt-5">
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="{{ url('frontend/img/interview.jpg') }}" alt="Interview Questions">
                    <h3>Common interview questions</h3>
                    <p class="pd-txt">We reveal the most common competency-based interview questions you might be
                        challenged with.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="{{ url('frontend/img/interview.jpg') }}" alt="UK Salary & Benefits 2025">
                    <h3>Create Your Resume Quickly & Very Easy</h3>
                    <p class="pd-txt">The Ultimate Guide to Career Growth and Opportunities in 2025.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="{{ url('frontend/img/interview.jpg') }}" alt="Personal Statement">
                    <h3>Write a personal statement for a job</h3>
                    <p class="pd-txt">A good personal statement can make you stand out - but it can be a challenge to
                        write. This guide shows you how.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
                                <div class="card">
                                    <img src="{{ url('frontend/img/interview.jpg') }}" alt="Interview Questions">
                                    <h3>Common interview questions</h3>
                                    <p class="pd-txt">We reveal the most common competency-based interview questions you might be challenged with.</p>
                                    <a href="#">Read More</a>
                                </div>
                                <div class="card">
                                    <img src="{{ url('frontend/img/interview.jpg') }}" alt="UK Salary & Benefits 2025">
                                    <h3>UK Salary & Benefits 2025</h3>
                                    <p class="pd-txt">The Ultimate Guide to Career Growth and Opportunities in 2025.</p>
                                    <a href="#">Read More</a>
                                </div>
                                <div class="card">
                                    <img src="{{ url('frontend/img/interview.jpg') }}" alt="Personal Statement">
                                    <h3>Write a personal statement for a job</h3>
                                    <p class="pd-txt">A good personal statement can make you stand out - but it can be a challenge to write. This guide shows you how.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div> -->

    <!--banner-->
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 col-md-10 col-sm-12 mb-3 text-center">
                <a href="#">
                    <img src="{{ url('frontend/img/banner/banner6.png') }}" alt="Banner Image" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-1 wow fadeInUp" data-wow-delay="0.1s">Jobs Category List</h1>
            <p class="mb-5 text-center wow fadeInUp" data-wow-delay="0.1s">To choose your trending job dream & to make
                future bright.</p>
            <div class="row g-4">
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                        <!-- <div class="d-flex">  -->
                        <!-- <div> -->
                        <h6 class="mb-3">Marketing & Sales</h6>
                        <p class="mb-1">123 Vacancy</p>
                        <!-- <p class="mb-0">View All<i class="bi bi-arrow-right"></i></p> -->
                        <!-- <a class="cat-item rounded p-1" href="">View All<i class="bi bi-arrow-right"></i></a> -->
                        <!-- </div> -->
                        <!-- <a class="cat-item rounded p-4" href="">View All<i class="bi bi-arrow-right"></i></a> -->
                        <!-- <div>
                                                        <a href="#" class="">View All <i class="bi bi-arrow-right"></i></a></div> -->
                        <!-- </div> -->
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                        <h6 class="mb-3">Technology</h6>
                        <p class="mb-0">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h6 class="mb-3">Architecture</h6>
                        <p class="mb-0">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                        <h6 class="mb-3">Development</h6>
                        <p class="mb-0">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                        <h6 class="mb-3">Transportation</h6>
                        <p class="mb-0">123 Vacancy</p>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item rounded p-4" href="">
                        <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                        <h6 class="mb-3">Non Profit Org.</h6>
                        <p class="mb-0">123 Vacancy</p>
                    </a>
                </div>
                <!-- <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                                <a class="cat-item rounded p-4" href="">
                                                    <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                                                    <h6 class="mb-3">Medical & Nurse</h6>
                                                    <p class="mb-0">123 Vacancy</p>
                                                </a>
                                            </div>
                                            <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                                                <a class="cat-item rounded p-4" href="">
                                                    <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                                                    <h6 class="mb-3">Designing Part</h6>
                                                    <p class="mb-0">123 Vacancy</p>
                                                </a>
                                            </div> -->
                <!-- <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                                                <a class="cat-item rounded p-4" href="">
                                                    <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                                                    <h6 class="mb-3">Finance & Account</h6>
                                                    <p class="mb-0">123 Vacancy</p>
                                                </a>
                                            </div> -->
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-primary">View All Jobs</button>
        </div>
    </div>
    <!-- Category End -->


    <!-- About Start -->
    <!-- <div class="container-xxl py-5">
                                    <div class="container">
                                        <div class="row g-5 align-items-center">
                                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                                <div class="row g-0 about-bg rounded overflow-hidden">
                                                    <div class="col-6 text-start">
                                                        <img class="img-fluid w-100" src="{{ url('frontend/img/about-1.jpg') }}">
                                                    </div>
                                                    <div class="col-6 text-start">
                                                        <img class="img-fluid" src="{{ url('frontend/img/about-2.jpg') }}" style="width: 85%; margin-top: 15%;">
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <img class="img-fluid" src="{{ url('frontend/img/about-3.jpg') }}" style="width: 85%;">
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <img class="img-fluid w-100" src="{{ url('frontend/img/about-4.jpg') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                                <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                                                <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                                                <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
    <!-- About End -->


    <!-- Jobs Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Featured Job List</h1>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                            href="#tab-1">
                            <h6 class="mt-n1 mb-0">Featured</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <h6 class="mt-n1 mb-0">Full Time</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                            href="#tab-3">
                            <h6 class="mt-n1 mb-0">Part Time</h6>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded"
                                        src="{{ url('frontend/img/vacantree-logo.jpeg') }}" alt=""
                                        style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-2">Vacant Tree</h5>
                                        <h5 class="mb-3">Software Engineer</h5>
                                        <span class="text-truncate me-3"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Nehru Place,
                                            Delhi</span>
                                        <span class="text-truncate me-3"><i
                                                class="far fa-clock text-primary me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i
                                                class="fas fa-rupee-sign text-primary me-2"></i>123 - 456</span> </br>
                                        <span class="me-3"><i class="fas fa-briefcase text-primary me-2"></i>Experience:
                                            1 - 3 Years</span>
                                        <span class="mt-1 d-flex align-items-center"><strong>Skill:</strong>
                                            <span class="skills-container"> Excel </span>
                                            <span class="skills-container"> Computer </span>
                                            <span class="skills-container"> Designer </span>
                                            <span class="skills-container"> Excel </span>
                                        </span>
                                        <span class="mt-1 d-flex align-items-center">
                                            <span class="skills-container"> Computer </span>
                                            <span class="skills-container"> Excel </span>
                                            <span class="skills-container"> Computer </span>
                                            <span class="plus-icon">+</span>
                                        </span>
                                        {{-- <span class="text-truncate"><i class="fas fa-tools text-primary me-2"></i>Skill: N/A</span> --}}
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href="">
                                            <!-- <i class="far fa-heart text-primary"></i> -->
                                            <i class="fas fa-bookmark text-primary"></i>
                                        </a>
                                        <a class="btn btn-light btn-square me-3" href="">
                                            <i class="fas fa-share-alt text-primary"></i>
                                        </a>
                                        <a class="btn btn-primary" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><strong class="text-primary">New</strong> <strong>1day
                                            ago </strong><strong> /15 days left </strong></small>
                                    <!-- <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Posted: 01 Jan, 2025</small>
                                                                <small class="text-truncate">Before Apply: 19-Mar-2025</small> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded"
                                        src="{{ url('frontend/img/vacantree-logo.jpeg') }}" alt=""
                                        style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-2">Vacant Tree</h5>
                                        <h5 class="mb-3">Marketing Manager</h5>
                                        <span class="text-truncate me-3"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>Nehru Place,
                                            Delhi</span>
                                        <span class="text-truncate me-3"><i
                                                class="far fa-clock text-primary me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i
                                                class="fas fa-rupee-sign text-primary me-2"></i>123 - 456</span> </br>
                                        <span class="me-3"><i class="fas fa-briefcase text-primary me-2"></i>Experience:
                                            1 - 3 Years</span>
                                        <span class="mt-1 d-flex align-items-center"><strong>Skill:</strong>
                                            <span class="skills-container"> Excel </span>
                                            <span class="skills-container"> Computer </span>
                                            <span class="skills-container"> Designer </span>
                                            <span class="skills-container"> Excel </span>
                                        </span>
                                        <span class="mt-1 d-flex align-items-center">
                                            <span class="skills-container"> Computer </span>
                                            <span class="skills-container"> Excel </span>
                                            <span class="skills-container"> Computer </span>
                                            <span class="plus-icon">+</span>
                                        </span>
                                        {{-- <span class="text-truncate"><i class="fas fa-tools text-primary me-2"></i>Skill: N/A</span> --}}
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3" href="">
                                            <!-- <i class="far fa-heart text-primary"></i> -->
                                            <i class="fas fa-bookmark text-primary"></i>
                                        </a>
                                        <a class="btn btn-light btn-square me-3" href="">
                                            <i class="fas fa-share-alt text-primary"></i>
                                        </a>
                                        <a class="btn btn-primary" href="">Apply Now</a>
                                    </div>
                                    <small class="text-truncate"><strong class="text-primary">New</strong> <strong>1day
                                            ago </strong><strong> /15 days left </strong></small>
                                    <!-- <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Posted: 01 Jan, 2045</small>
                                                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Before Apply: 19-Mar-2025</small> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded"
                                    src="{{ url('frontend/img/vacantree-logo.jpeg') }}" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-2">Vacant Tree</h5>
                                    <h5 class="mb-3">Product Designer</h5>
                                    <span class="text-truncate me-3"><i
                                            class="fa fa-map-marker-alt text-primary me-2"></i>Nehru Place, Delhi</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                        Time</span>
                                    <span class="text-truncate me-0"><i
                                            class="fas fa-rupee-sign text-primary me-2"></i>123 - 456</span> </br>
                                    <span class="me-3"><i class="fas fa-briefcase text-primary me-2"></i>Experience: 1 -
                                        3 Years</span>
                                    <span class="mt-1 d-flex align-items-center"><strong>Skill:</strong>
                                        <span class="skills-container"> Excel </span>
                                        <span class="skills-container"> Computer </span>
                                        <span class="skills-container"> Designer </span>
                                        <span class="skills-container"> Excel </span>
                                    </span>
                                    <span class="mt-1 d-flex align-items-center">
                                        <span class="skills-container"> Computer </span>
                                        <span class="skills-container"> Excel </span>
                                        <span class="skills-container"> Computer </span>
                                        <span class="plus-icon">+</span>
                                    </span>
                                    {{-- <span class="text-truncate"><i class="fas fa-tools text-primary me-2"></i>Skill: N/A</span> --}}
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href="">
                                        <!-- <i class="far fa-heart text-primary"></i> -->
                                        <i class="fas fa-bookmark text-primary"></i>
                                    </a>
                                    <a class="btn btn-light btn-square me-3" href="">
                                        <i class="fas fa-share-alt text-primary"></i>
                                    </a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><strong class="text-primary">New</strong> <strong>1day ago
                                    </strong> <strong> /15 days left </strong> </small>
                                <!-- <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Posted: 01 Jan, 2045</small>
                                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Before Apply: 19-Mar-2025</small> -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="job-item p-4 mb-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid border rounded"
                                src="{{ url('frontend/img/com-logo-4.jpg') }}" alt=""
                                style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h5 class="mb-3">Creative Director</h5>
                                <span class="text-truncate me-3"><i
                                        class="fa fa-map-marker-alt text-primary me-2"></i>Nehru Place, Delhi</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                    Time</span>
                                <span class="text-truncate me-0"><i class="fas fa-rupee-sign text-primary me-2"></i>123 -
                                    456</span>
                            </div>
                        </div>
                        <div
                            class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                            <div class="d-flex mb-3">
                                <a class="btn btn-light btn-square me-3" href=""><i
                                        class="far fa-heart text-primary"></i></a>
                                <a class="btn btn-primary" href="">Apply Now</a>
                            </div>
                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line:
                                01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <div class="job-item p-4 mb-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid border rounded"
                                src="{{ url('frontend/img/com-logo-5.jpg') }}" alt=""
                                style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h5 class="mb-3">Wordpress Developer</h5>
                                <span class="text-truncate me-3"><i
                                        class="fa fa-map-marker-alt text-primary me-2"></i>Nehru Place, Delhi</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                    Time</span>
                                <span class="text-truncate me-0"><i class="fas fa-rupee-sign text-primary me-2"></i>123 -
                                    456</span>
                            </div>
                        </div>
                        <div
                            class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                            <div class="d-flex mb-3">
                                <a class="btn btn-light btn-square me-3" href=""><i
                                        class="far fa-heart text-primary"></i></a>
                                <a class="btn btn-primary" href="">Apply Now</a>
                            </div>
                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line:
                                01 Jan, 2045</small>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
            </div>

            <!-- Jobs End -->

            <!-- <div class="counter-area home4-counter-area mb-120 my-5">
                                    <div class="container">
                                        <div class="row g-lg-4 gy-5 justify-content-center">
                                            <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                                                <div class="counter-single">
                                                    <div class="counter-icon">
                                                        <img src="{{ url('frontend/img/home4-counter-1.svg') }}" alt="">
                                                    </div>
                                                    <div class="coundown">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h3 class="odometer">800</h3>
                                                            <span>K+</span>
                                                        </div>
                                                        <p>Total Recruiters</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                                                <div class="counter-single">
                                                    <div class="counter-icon">
                                                        <img src="{{ url('frontend/img/home4-counter-2.svg') }}" alt="">
                                                    </div>
                                                    <div class="coundown">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h3 class="odometer">600</h3>
                                                            <span>K+</span>
                                                        </div>
                                                        <p>Daily User Visited</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                                                <div class="counter-single">
                                                    <div class="counter-icon">
                                                        <img src="{{ url('frontend/img/home4-counter-3.svg') }}" alt="">
                                                    </div>
                                                    <div class="coundown">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h3 class="odometer">10</h3>
                                                            <span>K+</span>
                                                        </div>
                                                        <p>Daily Job Posted</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 d-flex justify-content-center">
                                                <div class="counter-single">
                                                    <div class="counter-icon">
                                                        <img src="{{ url('frontend/img/home4-counter-4.svg') }}" alt="">
                                                    </div>
                                                    <div class="coundown">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h3 class="odometer">700</h3>
                                                            <span>K+</span>
                                                        </div>
                                                        <p>Total Applied</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->


            <!-- Testimonial Start -->
            <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="container">
                                        <h1 class="text-center mb-5">Our Clients Say!!!</h1>
                                        <div class="owl-carousel testimonial-carousel">
                                            <div class="testimonial-item bg-light rounded p-4">
                                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                                                <div class="d-flex align-items-center">
                                                    <img class="img-fluid flex-shrink-0 rounded" src="{{ url('frontend/img/testimonial-1.jpg') }}" style="width: 50px; height: 50px;">
                                                    <div class="ps-3">
                                                        <h5 class="mb-1">Client Name</h5>
                                                        <small>Profession</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-item bg-light rounded p-4">
                                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                                                <div class="d-flex align-items-center">
                                                    <img class="img-fluid flex-shrink-0 rounded" src="{{ url('frontend/img/testimonial-2.jpg') }}" style="width: 50px; height: 50px;">
                                                    <div class="ps-3">
                                                        <h5 class="mb-1">Client Name</h5>
                                                        <small>Profession</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-item bg-light rounded p-4">
                                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                                                <div class="d-flex align-items-center">
                                                    <img class="img-fluid flex-shrink-0 rounded" src="{{ url('frontend/img/testimonial-3.jpg') }}" style="width: 50px; height: 50px;">
                                                    <div class="ps-3">
                                                        <h5 class="mb-1">Client Name</h5>
                                                        <small>Profession</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-item bg-light rounded p-4">
                                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                                                <div class="d-flex align-items-center">
                                                    <img class="img-fluid flex-shrink-0 rounded" src="{{ url('frontend/img/testimonial-4.jpg') }}" style="width: 50px; height: 50px;">
                                                    <div class="ps-3">
                                                        <h5 class="mb-1">Client Name</h5>
                                                        <small>Profession</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

            <!-- Testimonial End -->

            <!-- <div class="home1-trusted-company two mb-120">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title">
                                                    <h5>Our Trusted Company</h5>
                                                </div>
                                                <div class="swiper trusted-company-slider swiper-initialized swiper-horizontal swiper-pointer-events">
                                                    <div class="swiper-wrapper" id="swiper-wrapper-c1a3f4ceaa1f66e8" aria-live="off" style="transition-duration: 1500ms; transform: translate3d(-1568px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-01.png') }}" alt="">
                                                            </div>
                                                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-02.png') }}" alt="">
                                                            </div>
                                                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-03.png') }}" alt="">
                                                            </div>
                                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-04.png') }}" alt="">
                                                            </div>
                                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-05.png') }}" alt="">
                                                            </div>
                                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-06.png') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-01.png') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-02.png') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-03.png') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-04.png') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-05.png') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-06.png') }}" alt="">
                                                            </div>
                                                        </div>
                                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-01.png') }}" alt="">
                                                            </div>
                                                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-02.png') }}" alt="">
                                                            </div>
                                                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-03.png') }}" alt="">
                                                            </div>
                                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-04.png') }}" alt="">
                                                            </div>
                                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-05.png') }}" alt="">
                                                            </div>
                                                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 200px; margin-right: 24px;">
                                                            <div class="company-logo">
                                                                <img src="{{ url('frontend/img/trusted-company-06.png') }}" alt="">
                                                            </div>
                                                        </div></div>
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->


            {{-- Model-JobSeeker Registration Form --}}
            <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerModalLabel">Job Seeker Registration</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            {{-- <form method="POST" action="{{ route('register') }}"> --}}
                            <form id="registrationForm">
                                @csrf

                                <!-- Full Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Full Name" required>
                                    <div class="invalid-feedback" id="error-name"></div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Mobile No.</label>
                                        <div class="input-group">
                                            <span class="input-group-text">+91</span>
                                            <input type="text" class="form-control" id="mobile" name="mobile"
                                                placeholder="Enter Mobile No." required>
                                        </div>
                                        <div class="invalid-feedback" id="error-mobile"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" placeholder="Enter Password"
                                                id="password" name="password" required>
                                            <span class="input-group-text">
                                                <i class="fa fa-eye toggle-password" style="cursor:pointer;"
                                                    onclick="togglePassword('password')"></i>
                                            </span>
                                        </div>
                                        <div class="invalid-feedback" id="error-password"></div>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-md-6 text-end">
                                        {{-- <a href="#" class="text-decoration-none">Forgot Password?</a> --}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember" checked>
                                            <label class="form-check-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>

                                </div>

                                <!-- Email & Password -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter Email" required>
                                        <div class="invalid-feedback" id="error-email"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                placeholder="Enter Password" name="password_confirmation" required>
                                            <span class="input-group-text">
                                                <i class="fa fa-eye toggle-password" style="cursor:pointer;"
                                                    onclick="togglePassword('password_confirmation')"></i>
                                            </span>
                                        </div>
                                        <div class="invalid-feedback" id="error-password_confirmation"></div>
                                    </div>
                                </div>

                                <!-- Remember Me & Forgot Password -->
                                <div class="row mb-1">
                                    <div class="col-md-6 text-end">
                                        {{-- <a href="#" class="text-decoration-none">Forgot Password?</a> --}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember2" checked>
                                            <label class="form-check-label" for="remember2">Remember Me</label>
                                        </div>
                                    </div>

                                </div>

                                <!-- City Dropdown -->
                                <div class="mb-3">
                                    <label for="city_search" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city_search" name="city_search" placeholder="Type to search city...">
                                    <input type="hidden" id="city" name="city">
                                    <div id="cityDropdown" class="dropdown-menu w-100" style="display:none; max-height:200px; overflow-y:auto;"></div>
                                    <div class="invalid-feedback" id="error-city"></div>
                                </div>

                                <!-- Area & Pincode -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="area_search" class="form-label">Area</label>
                                        <input type="text" class="form-control" id="area_search" name="area_search" placeholder="Type to search area...">
                                        <input type="hidden" id="area" name="area">
                                        <div id="areaDropdown" class="dropdown-menu w-100" style="display:none; max-height:200px; overflow-y:auto;"></div>
                                        <div class="invalid-feedback" id="error-area"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="text" class="form-control" id="pincode" name="pincode"
                                            placeholder="Enter Pincode">
                                        <div class="invalid-feedback" id="error-pincode"></div>
                                    </div>
                                </div>

                                <!-- Street Address -->
                                <div class="mb-3">
                                    <label for="street_address" class="form-label">Street Address</label>
                                    <textarea class="form-control" id="street_address" name="street" rows="3"
                                        placeholder="Enter Street Address"></textarea>
                                    <div class="invalid-feedback" id="error-street_address"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="referer-email" class="form-label">Referer Email/ Mobile No.</label>
                                    <input type="email" class="form-control" id="street_address"
                                        name="referer_email" placeholder="Enter Referer Email/ Mobile No.">
                                    <span style="font-size: 13px;">(If anybody refered you for this jobportal, Please
                                        write his/her Mobile No/ Email address) </span>
                                    <div class="invalid-feedback" id="error-referer-email"></div>
                                </div>

                                <!-- Recaptcha Code -->

                                <div class="mb-3">
                                    {{-- <img src="securityimages.php" class="img-fluid" alt="Security Code Image"> --}}
                                    <span class="p-2" style="background-color: #d3c6c63d"> 786547</span>
                                </div>
                                <div class="mb-3 d-flex align-items-center">
                                    <input type="text" name="TR_security_code" class="form-control me-2 wicode"
                                        placeholder="Enter Security Code">
                                    <div>
                                        <span class="inputRequirement text-danger">*</span>
                                        <span class="small text-danger"> (Type the code shown above)</span>
                                    </div>
                                    <div class="invalid-feedback" id="error-TR_security_code"></div>
                                </div>

                                {{-- <div class="mb-3 text-center">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div> --}}

                                {{-- <div class="mb-3">
                                    <label for="code" class="form-label"></label>
                                    <input type="email" class="form-control" id="street_address" name="referer-email">
                                </div> --}}

                                {{-- <div class="container mt-4"> --}}
                                {{-- <div class="card p-4 shadow"> --}}
                                <h5 class="mb-3 px-3 py-1 bg">Your Privacy Information</h5>

                                <!-- Privacy Section -->
                                <div class="mb-3">
                                    <label class="form-label">Privacy:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="privacy" id="privacy1"
                                            value="hide">
                                        <label class="form-check-label" for="privacy1">
                                            Hide my contact information from all employers.
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="privacy" id="privacy2"
                                            value="applied_only">
                                        <label class="form-check-label" for="privacy2">
                                            Show my contact information to the employers to whom I have applied.
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="privacy" id="privacy3"
                                            value="all" checked>
                                        <label class="form-check-label" for="privacy3">
                                            Show my contact information to all employers.
                                        </label>
                                    </div>
                                </div>

                                <!-- Newsletter Subscription -->
                                <div class="mb-3">
                                    <label class="form-label">Newsletter:</label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="newsletter">
                                            Subscribe
                                        </label>
                                        <input class="form-check-input" type="checkbox" name="newsletter"
                                            id="newsletter" checked>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check align-items-center">
                                        <input class="form-check-input me-2" type="checkbox" name="whatsapp"
                                            id="whatsapp" checked>
                                        <label class="form-check-label d-flex align-items-center" for="whatsapp">
                                            {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="me-2" width="20" height="20"> --}}
                                            Send me important updates & promotions via SMS, email, and
                                            <img src="{{ url('frontend/img/whatsapp.png') }}" border="0"
                                                alt="Whatsapp Logo" title="Whatsapp Logo" class="me-2"
                                                width="25px" height="20px">WhatsApp
                                        </label>

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <strong>Note :</strong> When you click on the following button, it means that you have
                                    agreed to our <strong>Terms & Conditions</strong> and <strong>Privacy Policy</strong>
                                </div>

                                <div id="formErrors" class="alert alert-danger d-none"></div>

                                <div class="d-grid">
                                    <button type="submit" data-bs-toggle="otpModalLabel" data-bs-target="#otpModal"
                                        class="btn btn-success">Continue</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =================== End Job Seeker ================ --}}

            {{-- <div class="container"> --}}

            {{-- ============ Second Model ============ --}}
            <!-- OTP Verification Modal -->
            <div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content slide-in-left">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                                    
                        <form id="otpVerifyForm">
                            <div class="modal-body">
                                <div class="text-center mb-4 heading">
                                    <h5 class="fw-bold">Welcome back.</h5>
                                    <h5 class="fw-bold">Enter the OTP sent to your Email ID</h5>
                                </div>
                                <p id="otpEmailDisplay" class="text-center" style="font-size: 1.25rem"></p>
                                <div class="mb-3 d-flex align-items-center justify-content-center">
                                    <label class="form-label fw-bold me-3">Email OTP:</label>
                                    <div class="d-flex gap-2">
                                        <input type="text" name="email_otp[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="email_otp[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="email_otp[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="email_otp[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="email_otp[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="email_otp[]" class="otp-input form-control text-center" maxlength="1">
                                    </div>
                                </div>

                                <div class="mb-3 d-flex align-items-center justify-content-center">
                                    <label class="form-label fw-bold me-3">Mobile OTP:</label>
                                    <div class="d-flex gap-2">
                                        <input type="text" name="mobile_otp[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="mobile_otp[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="mobile_otp[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="mobile_otp[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="mobile_otp[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="mobile_otp[]" class="otp-input form-control text-center" maxlength="1">
                                    </div>
                                </div>

                                <div id="formErrors1" class="alert alert-danger d-none"></div>

                                <div class="d-flex justify-content-end">
                                    <p class="small"><a id="resendOtpBtn" href="#">Resend OTP</a></p>
                                </div>
                                
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">Verify & Continue</button>
                                </div>
                                
                                <div class="text-center mt-3">
                                    <p class="small">Want to change your login mode?
                                        <a href="#"><strong>Use another method</strong></a>
                                    </p>
                                </div>
                            </div>
                        </form>
                        

                    </div>
                </div>
            </div>
            {{-- ============ Second Model ============ --}}


            {{-- ============ Third Model ============ --}}
            <div class="modal fade" id="personalDetailsModal" tabindex="-1"
                aria-labelledby="personalDetailsModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="personalDetailsModalLabel">Personal Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form id="personalDetailsForm">
                                @csrf

                                <!-- Gender -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label fw-bold me-3">Gender :</label>
                                    <div class="d-flex gap-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="male" value="male" required>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="female" value="female" required>
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Date of Birth with Calendar Picker -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label fw-bold me-3" style="min-width: 100px;">Date of
                                        Birth:</label>
                                    <input type="date" id="dob" name="dob" class="form-control"
                                        placeholder="Select your birth date" required style="max-width: 250px;">
                                </div>

                                <fieldset class="mb-3 border p-3 rounded">
                                    <legend class="form-label fw-bold">Work Status:</legend>
                                    <div class="d-flex flex-column flex-md-row gap-4 align-items-start">
                                        <div>
                                            <input class="form-check-input" type="radio" name="experience_level"
                                                id="fresher" value="fresher" required>
                                            <label class="form-check-label" for="fresher">Fresher</label>
                                            <div class="form-check text-dark p-2 rounded mt-1"
                                                style="background:#d3c6c63d; text-align: center;">
                                                <label class="form-check-label" for="fresher">I'm Fresher</label>
                                            </div>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="radio" name="experience_level"
                                                id="experienced" value="experienced"
                                                onchange="toggleExperienceFields()" required>
                                            <label class="form-check-label" for="experienced">Experience</label>
                                            <div class="d-flex align-items-center gap-2 mt-1"  id="experienceDropdownWrapper">
                                                <select class="form-select" id="experienceDropdown"
                                                    style="width: 200px;">
                                                    <option selected disabled>I have work experience</option>
                                                    <option value="1-2">1-2 years</option>
                                                    <option value="2-4">2-4 years</option>
                                                    <option value="4-6">4-6 years</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <input type="hidden" name="experience_years" id="finalExperienceYears">

                                <fieldset class="mb-3 border p-3 rounded">
                                    <!-- IT/Non-IT Job Fields -->
                                    <div class="mt-3 d-flex gap-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="work_status"
                                            id="itjob" value="itjob" required>
                                            <label class="form-check-label" for="itjob">IT Job</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="work_status"
                                            id="nonitjob" value="nonitjob" required>
                                            <label class="form-check-label" for="nonitjob">Non-IT Job</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- Education Details -->
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Education Details:</label>
                                    <select class="form-select" name="education" required>
                                        <option selected disabled>Select</option>
                                        <option value="highschool">High School</option>
                                        <option value="bachelor">Bachelor's Degree</option>
                                        <option value="master">Master's Degree</option>
                                    </select>
                                </div>

                                <div id="formErrors2" class="alert alert-danger d-none"></div>

                                <!-- Submit Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ============ End Third Model ============ --}}


            {{-- ============ Fourth Model ============ --}}
            <div class="modal fade" id="fourthModal" tabindex="-1" aria-labelledby="fourthModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content slide-in-left">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="fourthModalLabel">Job Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                            <form id="jobDetailsForm" enctype="multipart/form-data">
                                @csrf
                            <!-- Category -->
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Category:</label>
                                    <select class="form-select" name="job_category">
                                        <option selected>Software Job</option>
                                        <option>Marketing</option>
                                        <option>Finance</option>
                                    </select>
                                </div>

                                <!-- Sub-category -->
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Sub-category:</label>
                                    <select class="form-select" name="job_subcategory">
                                        <option selected>Software Development</option>
                                        <option>UI/UX Design</option>
                                        <option>Data Science</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Field-category:</label>
                                    <select class="form-select" name="job_sub_subcategory">
                                        <option selected>Frontend Developer</option>
                                        <option>Backend Developer</option>
                                        <option>Dev Ops</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Specific Role:</label>
                                    <div id="roles-container" class="d-flex flex-column gap-2">
                                        <div class="d-flex flex-wrap gap-2">
                                            <input type="text" class="form-control w-50" name="job_roles[]" placeholder="Add skill">
                                            <button type="button" class="btn btn-primary add-role">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Skills:</label>
                                    <div id="skills-container" class="d-flex flex-column gap-2">
                                        <div class="d-flex flex-wrap gap-2">
                                            <input type="text" class="form-control w-50" name="job_skills[]" placeholder="Add skill">
                                            <button type="button" class="btn btn-primary add-skill">+</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Job Type (Checkboxes) -->
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Job Type:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="job_type" id="partTime"
                                            value="Part Time">
                                        <label class="form-check-label" for="partTime">Part Time</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="job_type" id="fullTime"
                                            value="Full Time">
                                        <label class="form-check-label" for="fullTime">Full Time</label>
                                    </div>
                                </div>

                                <!-- Upload Resume -->
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Upload Resume:</label>
                                    <input type="file" name="cv" class="form-control">
                                </div>

                                <!-- Upload Photo -->
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Upload Your Photo:</label>
                                    <input type="file" name="profile_photo" class="form-control">
                                </div>

                                <div id="formErrors3" class="alert alert-danger d-none"></div>

                                <!-- Continue Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ============ End Fourth Model ============ --}}

            {{-- </div> --}}



            {{-- Model-For Recruiters Registration Form --}}
            <div class="modal fade" id="recruiterModal" tabindex="-1" aria-labelledby="recruiterModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="recruiterModalLabel">Recruiter Registration </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            {{-- <form method="POST" action="{{ route('register') }}"> --}}
                            <form id="recruiterForm">
                                @csrf

                                <!-- Full Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Full Name" required>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Mobile No.</label>
                                        <div class="input-group">
                                            <span class="input-group-text">+91</span>
                                            <input type="text" class="form-control" id="mobile" name="mobile"
                                                placeholder="Enter Mobile No." required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" placeholder="Enter Password"
                                                id="password1" name="password" required>
                                            <span class="input-group-text">
                                                <i class="fa fa-eye toggle-password" style="cursor:pointer;"
                                                    onclick="togglePassword('password1')"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-md-6 text-end">
                                        {{-- <a href="#" class="text-decoration-none">Forgot Password?</a> --}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember" checked>
                                            <label class="form-check-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>

                                </div>

                                <!-- Email & Password -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email1" name="email"
                                            placeholder="Enter Email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password_confirmation1"
                                                placeholder="Enter Password" name="password_confirmation" required>
                                            <span class="input-group-text">
                                                <i class="fa fa-eye toggle-password" style="cursor:pointer;"
                                                    onclick="togglePassword('password_confirmation1')"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Remember Me & Forgot Password -->
                                <div class="row mb-1">
                                    <div class="col-md-6 text-end">
                                        {{-- <a href="#" class="text-decoration-none">Forgot Password?</a> --}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember2" checked>
                                            <label class="form-check-label" for="remember2">Remember Me</label>
                                        </div>
                                    </div>

                                </div>

                                <!-- City Dropdown -->
                                <div class="mb-3">
                                    <label for="city_search" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city_search1" name="city_search" placeholder="Type to search city...">
                                    <input type="hidden" id="city1" name="city">
                                    <div id="cityDropdown1" class="dropdown-menu w-100" style="display:none; max-height:200px; overflow-y:auto;"></div>
                                    <div class="invalid-feedback" id="error-city"></div>
                                </div>

                                <!-- Area & Pincode -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="area_search" class="form-label">Area</label>
                                        <input type="text" class="form-control" id="area_search1" name="area_search" placeholder="Type to search area...">
                                        <input type="hidden" id="area1" name="area">
                                        <div id="areaDropdown1" class="dropdown-menu w-100" style="display:none; max-height:200px; overflow-y:auto;"></div>
                                        <div class="invalid-feedback" id="error-area"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="text" class="form-control" id="pincode1" name="pincode"
                                            placeholder="Enter Pincode">
                                        <div class="invalid-feedback" id="error-pincode1"></div>
                                    </div>
                                </div>

                                <!-- Street Address -->
                                <div class="mb-3">
                                    <label for="street_address" class="form-label">Street Address</label>
                                    <textarea class="form-control" id="street_address" name="street" rows="3"
                                        placeholder="Enter Street Address"></textarea>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label me-3">Company Type :</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="company_type"
                                                id="company" value="Company" required checked>
                                            <label class="form-check-label" for="Company">Company</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label me-3"></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="company_type"
                                                id="Consultants" value="Consultants" required>
                                            <label class="form-check-label" for="Consultants">Consultants</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}

                                <div class="mb-3">
                                    <div class="col-md-12">
                                        <label for="CompName" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="CompName" name="company_name"
                                            placeholder="Enter Your Company Name" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="referer-email" class="form-label">Referer Email/ Mobile No.</label>
                                    <input type="email" class="form-control" id="street_address"
                                        name="referer_email" placeholder="Enter Referer Email/ Mobile No.">
                                    <span style="font-size: 13px;">(If anybody refered you for this jobportal, Please
                                        write his/her Mobile No/ Email address) </span>
                                </div>

                                <!-- Recaptcha Code -->

                                <div class="mb-3">
                                    {{-- <img src="securityimages.php" class="img-fluid" alt="Security Code Image"> --}}
                                    <span class="p-2" style="background-color: #d3c6c63d"> 786547</span>
                                </div>
                                <div class="mb-3 d-flex align-items-center">
                                    <input type="text" name="TR_security_code" class="form-control me-2 wicode"
                                        placeholder="Enter Security Code">
                                    <div>
                                        <span class="inputRequirement text-danger">*</span>
                                        <span class="small text-danger"> (Type the code shown above)</span>
                                    </div>
                                </div>

                                {{-- <div class="mb-3 text-center">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div> --}}

                                {{-- <div class="mb-3">
                                    <label for="code" class="form-label"></label>
                                    <input type="email" class="form-control" id="street_address" name="referer-email">
                                </div> --}}

                                {{-- <div class="container mt-4"> --}}
                                {{-- <div class="card p-4 shadow"> --}}
                                <h5 class="mb-3 px-3 py-1 bg">Your Privacy Information</h5>

                                <!-- Privacy Section -->

                                <!-- Newsletter Subscription -->
                                <div class="mb-3">
                                    <label class="form-label">Newsletter:</label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="newsletter">
                                            Subscribe
                                        </label>
                                        <input class="form-check-input" type="checkbox" name="newsletter"
                                            id="newsletter" checked>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check align-items-center">
                                        <input class="form-check-input me-2" type="checkbox" name="whatsapp"
                                            id="whatsapp" checked>
                                        <label class="form-check-label d-flex align-items-center" for="whatsapp">
                                            {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="me-2" width="20" height="20"> --}}
                                            Send me important updates & promotions via SMS, email, and
                                            <img src="{{ url('frontend/img/whatsapp.png') }}" border="0"
                                                alt="Whatsapp Logo" title="Whatsapp Logo" class="me-2"
                                                width="25px" height="20px">WhatsApp
                                        </label>

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <strong>Note :</strong> When you click on the following button, it means that you have
                                    agreed to our <strong>Terms & Conditions</strong> and <strong>Privacy Policy</strong>
                                </div>

                                <div id="formErrors4" class="alert alert-danger d-none"></div>

                                <div class="d-grid">
                                    <button type="submit" data-bs-toggle="otpModalLabel" data-bs-target="#otpModal"
                                        class="btn btn-success">Continue</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- =================== End For Recruiters Registration Form ================ --}}

            {{-- ============ Second Model For Recruiters ============ --}}
            <!-- OTP Verification Modal -->
            <div class="modal fade" id="otpModal1" tabindex="-1" aria-labelledby="otpModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content slide-in-left">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <form id="otpVerifyForm1">
                            @csrf
                            <div class="modal-body">
                                <div class="text-center mb-4 heading">
                                    <h5 class="fw-bold">Welcome back.</h5>
                                    <h5 class="fw-bold">Enter the OTP sent to your Email ID</h5>
                                </div>
                                <p id="otpEmailDisplay1" class="text-center" style="font-size: 1.25rem"></p>
                                <div class="mb-3 d-flex align-items-center justify-content-center">
                                    <label class="form-label fw-bold me-3">Email OTP:</label>
                                    <div class="d-flex gap-2">
                                        <input type="text" name="email_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="email_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="email_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="email_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="email_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="email_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                    </div>
                                </div>

                                <div class="mb-3 d-flex align-items-center justify-content-center">
                                    <label class="form-label fw-bold me-3">Mobile OTP:</label>
                                    <div class="d-flex gap-2">
                                        <input type="text" name="mobile_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="mobile_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="mobile_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="mobile_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="mobile_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                        <input type="text" name="mobile_otp1[]" class="otp-input form-control text-center" maxlength="1">
                                    </div>
                                </div>

                                <div id="formErrors5" class="alert alert-danger d-none"></div>

                                <div class="d-flex justify-content-end">
                                    <p class="small"><a id="resendOtpBtn1" href="#">Resend OTP</a></p>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">Verify & Continue</button>
                                </div>

                                <div class="text-center mt-3">
                                    <p class="small">Want to change your login mode?
                                        <a href="#"><strong>Use another method</strong></a>
                                    </p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            {{-- ============ Second Model For Recruiters ============ --}}

            {{-- ============ Third Model For Recruiters ============ --}}

            <div class="modal fade" id="companyDetailsModal" tabindex="-1"
                aria-labelledby="companyDetailsModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Company Information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body" style="max-height: 80vh; overflow-y: auto;">
                            <form id="companyDetailsForm">
                                @csrf

                                <!-- Position -->
                                <div class="mb-3 row">
                                    <label for="position" class="col-sm-3 col-form-label">Your Position:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="position" name="position"
                                            placeholder="Enter Your Position" required>
                                    </div>
                                </div>

                                <!-- Company Name -->
                                <div class="mb-3 row">
                                    <label for="companyname" class="col-sm-3 col-form-label">Company Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="companyname"
                                            name="companyname" placeholder="Enter Your Company Name" required>
                                    </div>
                                </div>

                                <!-- Industry Selection -->
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Industry:</label>
                                    <div class="col-sm-9">
                                        <div class="checkbox-container">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="advertising"
                                                    name="industry[]" value="Advertising">
                                                <label class="form-check-label" for="advertising">Advertising</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="agriculture"
                                                    name="industry[]" value="Agriculture/Dairy Based">
                                                <label class="form-check-label" for="agriculture">Agriculture/Dairy
                                                    Based</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="automobile"
                                                    name="industry[]" value="Automobile">
                                                <label class="form-check-label" for="automobile">Automobile</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="banking"
                                                    name="industry[]" value="Banking/Finance">
                                                <label class="form-check-label" for="banking">Banking/Finance</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="it"
                                                    name="industry[]" value="IT/Software">
                                                <label class="form-check-label" for="it">IT/Software</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="healthcare"
                                                    name="industry[]" value="Healthcare">
                                                <label class="form-check-label" for="healthcare">Healthcare</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="education"
                                                    name="industry[]" value="Education">
                                                <label class="form-check-label" for="education">Education</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="manufacturing"
                                                    name="industry[]" value="Manufacturing">
                                                <label class="form-check-label"
                                                    for="manufacturing">Manufacturing</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Company Profile -->
                                <div class="mb-3 row">
                                    <label for="company_profile" class="col-sm-3 col-form-label">Company
                                        Profile:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="company_profile" name="company_profile" rows="3"
                                            placeholder="Enter Company Profile"></textarea>
                                    </div>
                                </div>

                                <!-- GST Number -->
                                <div class="mb-3 row">
                                    <label for="gst" class="col-sm-3 col-form-label">GST No:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="gst" name="gst_no"
                                            placeholder="Enter Your GST No." required>
                                    </div>
                                </div>

                                <!-- Logo Upload -->
                                <div class="mb-3 row">
                                    <label for="logo" class="col-sm-3 col-form-label">Logo:</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="logo" name="logo">
                                    </div>
                                </div>

                                <!-- Website URL -->
                                <div class="mb-3 row">
                                    <label for="url" class="col-sm-3 col-form-label"> URL:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="website" value="http://"
                                            size="50">
                                        <small class="text-muted">(For example: http://www.example.com)</small>
                                    </div>
                                </div>

                                <!-- Privacy Information Section -->
                                <h5 class="mb-3 px-3 py-2 bg-light border rounded">Your Privacy Information</h5>

                                <!-- Newsletter Subscription -->
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Newsletter:</label>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <input class="form-check-input me-2" type="checkbox" name="newsletter"
                                            id="newsletter" checked>
                                        <label class="form-check-label" for="newsletter">Subscribe</label>
                                    </div>
                                </div>

                                <!-- WhatsApp Subscription -->
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label"> </label>
                                    <div class="col-sm-9 d-flex align-items-center">
                                        <input class="form-check-input me-2" type="checkbox" name="whatsapp"
                                            id="whatsapp" checked>
                                        <label class="form-check-label d-flex align-items-center" for="whatsapp">
                                            Send me important updates & promotions via SMS, email, and
                                            <img src="{{ url('frontend/img/whatsapp.png') }}" alt="WhatsApp Logo"
                                                title="WhatsApp Logo" class="ms-2 me-1" width="25px"
                                                height="20px"> WhatsApp
                                        </label>
                                    </div>
                                </div>

                                {{-- <div class="mb-3">
                                    <div class="form-check align-items-center">
                                        <input class="form-check-input me-2" type="checkbox" name="whatsapp"
                                            id="whatsapp" checked>
                                        <label class="form-check-label d-flex align-items-center" for="whatsapp">
                                            Send me important updates & promotions via SMS, email, and
                                            <img src="{{ url('frontend/img/whatsapp.png') }}" border="0"
                                                alt="Whatsapp Logo" title="Whatsapp Logo" class="me-2"
                                                width="25px" height="20px">WhatsApp
                                        </label>

                                    </div>
                                </div> --}}

                                <!-- Terms & Conditions Notice -->
                                <div class="mb-3">
                                    <strong>Note:</strong> By clicking the button below, you agree to our
                                    <strong><a href="#">Terms & Conditions</a></strong> and
                                    <strong><a href="#">Privacy Policy</a></strong>.
                                </div>

                                <div id="formErrors6" class="alert alert-danger d-none"></div>

                                <!-- Continue Button -->
                                <div class="d-grid">
                                    <button type="submit" data-bs-toggle="otpModalLabel" data-bs-target="#otpModal"
                                        class="btn btn-success">Continue</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ============ End Third Model For Recruiters ============ --}}
        @endsection

        @push('styles')
        <style>
        @keyframes slideInRight {
          from {
            transform: translateX(100%);
            opacity: 0;
          }
          to {
            transform: translateX(0);
            opacity: 1;
          }
        }
        .slide-in-right {
          animation: slideInRight 0.5s forwards;
        }

        a.disabled {
            pointer-events: none;
            opacity: 0.6;
        }
                </style>
        @endpush

        @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function() {
            // Set up CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val() || $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#registrationForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                const $submitBtn = $('#registrationForm button[type="submit"]'); // Adjust selector if needed
                $submitBtn.prop('disabled', true).text('Please wait...'); // Optional loading message

                var formData = $(this).serialize();

                $.ajax({
                    url: '/register/jobseeker/send-otp',
                    method: 'POST',
                    data: formData,
                    success: function(response) {

                        $submitBtn.prop('disabled', false).text('Continue');

                        // Hide the registration modal
                        $('#registerModal').modal('hide');

                        // Add the slide-in-right animation
                        $('#otpModal .modal-content').addClass('slide-in-right');

                        // Show the OTP modal
                        $('#otpModal').modal('show');

                        $('#otpEmailDisplay').text($('input[name="email"]').val());
                    },
                    error: function(xhr) {
                        $submitBtn.prop('disabled', false).text('Continue');

                        // Clear previous errors
                        $('.invalid-feedback').text('');
                        $('.form-control, .form-select').removeClass('is-invalid');

                        const errorBox = $('#formErrors');
                        errorBox.html('').removeClass('d-none').addClass('alert alert-danger');

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            Object.keys(errors).forEach(function(key) {
                                let msg = Array.isArray(errors[key]) ? errors[key].join(' ') : errors[key];
                                let input = $('[name="' + key + '"]');
                                input.addClass('is-invalid');
                                $('#error-' + key).text(msg);

                                errorBox.append(`<div>${msg}</div>`);
                            });
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorBox.html(`<div>${xhr.responseJSON.message}</div>`);
                        } else {
                            errorBox.html('<div>Something went wrong. Please try again.</div>');
                        }
                        console.log('Validation error:', xhr.status, xhr.responseText);
                    }

                });
            });

            $('#resendOtpBtn').on('click', function (e) {
                
                e.preventDefault();

                const $link = $(this);

                if ($link.hasClass('disabled')) return;

                const email = $('#email').val();

                if (!email) {
                    alert("Please enter your email first.");
                    return;
                }

                $link.addClass('disabled').text('Sending OTP...');

                $.ajax({
                    url: '/register/jobseeker/resend-otp',
                    method: 'POST',
                    data: {
                        email: email,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        $link.removeClass('disabled').text('Resend OTP');
                        alert(response.message || 'OTP resent successfully!');
                    },
                    error: function (xhr) {
                        $link.removeClass('disabled').text('Resend OTP');

                        const errorBox = $('#formErrors');
                        errorBox.html('').removeClass('d-none').addClass('alert alert-danger');

                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorBox.html(`<div>${xhr.responseJSON.message}</div>`);
                        } else {
                            errorBox.html('<div>Something went wrong while resending the OTP.</div>');
                        }
                    }
                });
            });

            $('#otpVerifyForm').on('submit', function(e) {
                e.preventDefault();

                const emailOtp = $('[name="email_otp[]"]').map(function() {
                    return $(this).val();
                }).get().join('');

                const mobileOtp = $('[name="mobile_otp[]"]').map(function() {
                    return $(this).val();
                }).get().join('');

                $.ajax({
                    url: '/register/jobseeker', // ✅ now hit actual register
                    method: 'POST',
                    data: {
                        email_otp: emailOtp,
                        mobile_otp: mobileOtp,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success && response.next === 'personal_details') {
                            $('#otpModal').modal('hide');
                            $('#personalDetailsModal .modal-content').addClass('slide-in-right');
                            $('#personalDetailsModal').modal('show');
                        } else if (response.redirect) {
                            window.location.href = response.redirect;
                        }
                    },
                    error: function(xhr) {
                        $('.invalid-feedback').text('');
                        $('.form-control, .form-select').removeClass('is-invalid');

                        const errorBox = $('#formErrors1');
                        errorBox.html('').removeClass('d-none').addClass('alert alert-danger');

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            Object.keys(errors).forEach(function(key) {
                                let msg = Array.isArray(errors[key]) ? errors[key].join(' ') : errors[key];
                                let input = $('[name="' + key + '"]');
                                input.addClass('is-invalid');
                                $('#error-' + key).text(msg);

                                errorBox.append(`<div>${msg}</div>`);
                            });
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorBox.html(`<div>${xhr.responseJSON.message}</div>`);
                        } else {
                            errorBox.html('<div>Something went wrong. Please try again.</div>');
                        }
                        console.log('Validation error:', xhr.status, xhr.responseText);
                    }
                });
            });

            $('#personalDetailsForm').on('submit', function(e) {
                e.preventDefault();
                const formData = $(this).serialize();

                $.ajax({
                    url: '/jobseeker/update-personal-details',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            $('#personalDetailsModal').modal('hide');
                            $('#fourthModal .modal-content').addClass('slide-in-right');
                            $('#fourthModal').modal('show');
                        }
                    },
                    error: function(xhr) {
                        $('.invalid-feedback').text('');
                        $('.form-control, .form-select').removeClass('is-invalid');

                        const errorBox = $('#formErrors2');
                        errorBox.html('').removeClass('d-none').addClass('alert alert-danger');

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            Object.keys(errors).forEach(function(key) {
                                let msg = Array.isArray(errors[key]) ? errors[key].join(' ') : errors[key];
                                let input = $('[name="' + key + '"]');
                                input.addClass('is-invalid');
                                $('#error-' + key).text(msg);

                                errorBox.append(`<div>${msg}</div>`);
                            });
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorBox.html(`<div>${xhr.responseJSON.message}</div>`);
                        } else {
                            errorBox.html('<div>Something went wrong. Please try again.</div>');
                        }
                        console.log('Validation error:', xhr.status, xhr.responseText);
                    }
                });
            });

            $('#jobDetailsForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this); // to handle file uploads too

                $.ajax({
                    url: '/jobseeker/update-job-details',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success && response.redirect) {
                            window.location.href = response.redirect;
                        }
                    },
                    error: function(xhr) {
                        $('.invalid-feedback').text('');
                        $('.form-control, .form-select').removeClass('is-invalid');

                        const errorBox = $('#formErrors3');
                        errorBox.html('').removeClass('d-none').addClass('alert alert-danger');

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            Object.keys(errors).forEach(function(key) {
                                let msg = Array.isArray(errors[key]) ? errors[key].join(' ') : errors[key];
                                let input = $('[name="' + key + '"]');
                                input.addClass('is-invalid');
                                $('#error-' + key).text(msg);

                                errorBox.append(`<div>${msg}</div>`);
                            });
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorBox.html(`<div>${xhr.responseJSON.message}</div>`);
                        } else {
                            errorBox.html('<div>Something went wrong. Please try again.</div>');
                        }
                        console.log('Validation error:', xhr.status, xhr.responseText);
                    }
                });
            });
            
            //Company Registration

            $('#recruiterForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                const $submitBtn = $('#recruiterForm button[type="submit"]'); // Adjust selector if needed
                $submitBtn.prop('disabled', true).text('Please wait...');

                var formData = $(this).serialize();

                $.ajax({
                    url: '/register/company/send-otp',
                    method: 'POST',
                    data: formData,
                    success: function(response) {

                        $submitBtn.prop('disabled', false).text('Continue');
                        // Hide the registration modal
                        $('#recruiterModal').modal('hide');

                        // Add the slide-in-right animation
                        $('#otpModal1 .modal-content').addClass('slide-in-right');

                        // Show the OTP modal
                        $('#otpModal1').modal('show');

                        $('#otpEmailDisplay1').text($('#email1').val());
                    },
                    error: function(xhr) {

                        $submitBtn.prop('disabled', false).text('Continue');
                        // Clear previous errors
                        $('.invalid-feedback').text('');
                        $('.form-control, .form-select').removeClass('is-invalid');

                        const errorBox = $('#formErrors4');
                        errorBox.html('').removeClass('d-none').addClass('alert alert-danger');

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            Object.keys(errors).forEach(function(key) {
                                let msg = Array.isArray(errors[key]) ? errors[key].join(' ') : errors[key];
                                let input = $('[name="' + key + '"]');
                                input.addClass('is-invalid');
                                $('#error-' + key).text(msg);

                                errorBox.append(`<div>${msg}</div>`);
                            });
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorBox.html(`<div>${xhr.responseJSON.message}</div>`);
                        } else {
                            errorBox.html('<div>Something went wrong. Please try again.</div>');
                        }
                        console.log('Validation error:', xhr.status, xhr.responseText);
                    }


                });
            });

            $('#resendOtpBtn1').on('click', function (e) {
                
                e.preventDefault();

                const $link = $(this);
                if ($link.hasClass('disabled')) return;

                const email = $('#email1').val();

                if (!email) {
                    alert("Please enter your email first.");
                    return;
                }

                $link.addClass('disabled').text('Sending OTP...');

                $.ajax({
                    url: '/register/company/resend-otp',
                    method: 'POST',
                    data: {
                        email: email,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        $link.removeClass('disabled').text('Resend OTP');
                        alert(response.message || 'OTP resent successfully!');
                    },
                    error: function (xhr) {
                        $link.removeClass('disabled').text('Resend OTP');

                        const errorBox = $('#formErrors');
                        errorBox.html('').removeClass('d-none').addClass('alert alert-danger');

                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorBox.html(`<div>${xhr.responseJSON.message}</div>`);
                        } else {
                            errorBox.html('<div>Something went wrong while resending the OTP.</div>');
                        }
                    }
                });
            });

            $('#otpVerifyForm1').on('submit', function(e) {
                e.preventDefault();

                const emailOtp = $('[name="email_otp1[]"]').map(function() {
                    return $(this).val();
                }).get().join('');

                const mobileOtp = $('[name="mobile_otp1[]"]').map(function() {
                    return $(this).val();
                }).get().join('');

                $.ajax({
                    url: '/register/company', // ✅ now hit actual register
                    method: 'POST',
                    data: {
                        email_otp: emailOtp,
                        mobile_otp: mobileOtp,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success && response.next === 'company_details') {
                            $('#otpModal1').modal('hide');
                            $('#companyDetailsModal .modal-content').addClass('slide-in-right');
                            $('#companyDetailsModal').modal('show');
                        } else if (response.redirect) {
                            window.location.href = response.redirect;
                        }
                    },
                    error: function(xhr) {
                        $('.invalid-feedback').text('');
                        $('.form-control, .form-select').removeClass('is-invalid');

                        const errorBox = $('#formErrors5');
                        errorBox.html('').removeClass('d-none').addClass('alert alert-danger');

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            Object.keys(errors).forEach(function(key) {
                                let msg = Array.isArray(errors[key]) ? errors[key].join(' ') : errors[key];
                                let input = $('[name="' + key + '"]');
                                input.addClass('is-invalid');
                                $('#error-' + key).text(msg);

                                errorBox.append(`<div>${msg}</div>`);
                            });
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorBox.html(`<div>${xhr.responseJSON.message}</div>`);
                        } else {
                            errorBox.html('<div>Something went wrong. Please try again.</div>');
                        }
                        console.log('Validation error:', xhr.status, xhr.responseText);
                    }
                });
            });

            $('#companyDetailsForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this); // to handle file uploads too

                $.ajax({
                    url: '/company/update-company-details',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success && response.redirect) {
                            window.location.href = response.redirect;
                        }
                    },
                    error: function(xhr) {
                        $('.invalid-feedback').text('');
                        $('.form-control, .form-select').removeClass('is-invalid');

                        const errorBox = $('#formErrors6');
                        errorBox.html('').removeClass('d-none').addClass('alert alert-danger');

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            Object.keys(errors).forEach(function(key) {
                                let msg = Array.isArray(errors[key]) ? errors[key].join(' ') : errors[key];
                                let input = $('[name="' + key + '"]');
                                input.addClass('is-invalid');
                                $('#error-' + key).text(msg);

                                errorBox.append(`<div>${msg}</div>`);
                            });
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorBox.html(`<div>${xhr.responseJSON.message}</div>`);
                        } else {
                            errorBox.html('<div>Something went wrong. Please try again.</div>');
                        }
                        console.log('Validation error:', xhr.status, xhr.responseText);
                    }
                });
            });

            // Optional: Remove animation class when modal is hidden, so it can be re-applied next time
            $('#otpModal').on('hidden.bs.modal', function () {
                $('#otpModal .modal-content').removeClass('slide-in-right');
            });

            // Fetch cities on page load
            $.get('/register/cities', function(data) {
                var citySelect = $('#city');
                citySelect.empty();
                citySelect.append('<option selected>Select City</option>');
                data.forEach(function(city) {
                    citySelect.append('<option value="' + city.city_id + '">' + city.city_name + '</option>');
                });
            });

            // City search functionality
            $('#city_search').on('input', function() {
                var query = $(this).val();
                if (query.length > 0) {
                    $.get('/register/cities/search', {q: query}, function(data) {
                        var dropdown = $('#cityDropdown');
                        dropdown.empty();
                        if (data.length > 0) {
                            data.forEach(function(city) {
                                dropdown.append('<a class="dropdown-item city-item" data-id="' + city.city_id + '" href="#">' + city.city_name + '</a>');
                            });
                            dropdown.show();
                        } else {
                            dropdown.hide();
                        }
                    });
                } else {
                    $('#cityDropdown').hide();
                }
            });
            // Select city from dropdown
            $(document).on('click', '.city-item', function(e) {
                e.preventDefault();
                var cityId = $(this).data('id');
                var cityName = $(this).text();
                $('#city_search').val(cityName);
                $('#city').val(cityId);
                $('#cityDropdown').hide();
                // Clear area fields
            });

            // On blur, if user typed full city name manually and didn't select from dropdown
            $('#city_search').on('blur', function () {
                const cityText = $(this).val().trim();
                if (cityText !== '') {
                    // Check if hidden city is already set
                    const currentCityId = $('#city').val();
                    if (!currentCityId) {
                        // Try to match typed text with city from list (optional, for stricter match)
                        $.get('/register/cities/search', { q: cityText }, function (data) {
                            if (data.length > 0) {
                                // Use first match
                                $('#city').val(data[0].city_id);
                            } else {
                                // No match found – optionally clear or set null
                                $('#city').val('');
                            }
                        });
                    }
                }
            });

            // Hide city dropdown on click outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('#city_search, #cityDropdown').length) {
                    $('#cityDropdown').hide();
                }
            });
            // Area search functionality
            $('#area_search').on('input', function() {
                var query = $(this).val();
                if (query.length > 0) {
                    $.get('/register/areas/search', {q: query}, function(data) {
                        var dropdown = $('#areaDropdown');
                        dropdown.empty();
                        if (data.length > 0) {
                            data.forEach(function(area) {
                                dropdown.append('<a class="dropdown-item area-item" data-id="' + area.area_id + '" href="#">' + area.area_name + '</a>');
                            });
                            dropdown.show();
                        } else {
                            dropdown.hide();
                        }
                    });
                } else {
                    $('#areaDropdown').hide();
                }
            });
            // Select area from dropdown
            $(document).on('click', '.area-item', function(e) {
                e.preventDefault();
                var areaId = $(this).data('id');
                var areaName = $(this).text();
                $('#area_search').val(areaName);
                $('#area').val(areaId);
                $('#areaDropdown').hide();
                
                // Fetch area details for autofill
                $.get('/register/area-details/' + areaId, function(data) {
                    if (data) {
                        // Combine IDs for pincode
                        var pincode = data.country_id + '' + data.state_id + '' + data.city_id + '' + data.area_id;
                        $('#pincode').val(pincode);
                    } else {
                        $('#pincode').val('');
                    }
                });
            });

            $('#area_search').on('blur', function () {
                const areaText = $(this).val().trim();
                const currentAreaId = $('#area').val();
                if (areaText !== '' && !currentAreaId) {
                    $.get('/register/areas/search', { q: areaText }, function (data) {
                        if (data.length > 0) {
                            $('#area').val(data[0].area_id);
                            // Optional: also autofill pincode again
                            $.get('/register/area-details/' + data[0].area_id, function(details) {
                                if (details) {
                                    let pincode = details.country_id + '' + details.state_id + '' + details.city_id + '' + details.area_id;
                                    $('#pincode').val(pincode);
                                }
                            });
                        } else {
                            $('#area').val('');
                        }
                    });
                }
            });

            // Hide area dropdown on click outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('#area_search, #areaDropdown').length) {
                    $('#areaDropdown').hide();
                }
            });

            //Company Area Search

            // Fetch cities on page load
            $.get('/register/cities', function(data) {
                var citySelect = $('#city1');
                citySelect.empty();
                citySelect.append('<option selected>Select City</option>');
                data.forEach(function(city) {
                    citySelect.append('<option value="' + city.city_id + '">' + city.city_name + '</option>');
                });
            });

            // City search functionality
            $('#city_search1').on('input', function() {
                var query = $(this).val();
                if (query.length > 0) {
                    $.get('/register/cities/search', {q: query}, function(data) {
                        var dropdown = $('#cityDropdown1');
                        dropdown.empty();
                        if (data.length > 0) {
                            data.forEach(function(city) {
                                dropdown.append('<a class="dropdown-item city-item1" data-id="' + city.city_id + '" href="#">' + city.city_name + '</a>');
                            });
                            dropdown.show();
                        } else {
                            dropdown.hide();
                        }
                    });
                } else {
                    $('#cityDropdown1').hide();
                }
            });
            // Select city from dropdown
            $(document).on('click', '.city-item1', function(e) {
                e.preventDefault();
                var cityId = $(this).data('id');
                var cityName = $(this).text();
                $('#city_search1').val(cityName);
                $('#city1').val(cityId);
                $('#cityDropdown1').hide();
                // Clear area fields
            });

            // On blur, if user typed full city name manually and didn't select from dropdown
            $('#city_search1').on('blur', function () {
                const cityText = $(this).val().trim();
                if (cityText !== '') {
                    // Check if hidden city is already set
                    const currentCityId = $('#city1').val();
                    if (!currentCityId) {
                        // Try to match typed text with city from list (optional, for stricter match)
                        $.get('/register/cities/search', { q: cityText }, function (data) {
                            if (data.length > 0) {
                                // Use first match
                                $('#city1').val(data[0].city_id);
                            } else {
                                // No match found – optionally clear or set null
                                $('#city1').val('');
                            }
                        });
                    }
                }
            });

            // Hide city dropdown on click outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('#city_search1, #cityDropdown1').length) {
                    $('#cityDropdown1').hide();
                }
            });
            // Area search functionality
            $('#area_search1').on('input', function() {
                var query = $(this).val();
                if (query.length > 0) {
                    $.get('/register/areas/search', {q: query}, function(data) {
                        var dropdown = $('#areaDropdown1');
                        dropdown.empty();
                        if (data.length > 0) {
                            data.forEach(function(area) {
                                dropdown.append('<a class="dropdown-item area-item1" data-id="' + area.area_id + '" href="#">' + area.area_name + '</a>');
                            });
                            dropdown.show();
                        } else {
                            dropdown.hide();
                        }
                    });
                } else {
                    $('#areaDropdown1').hide();
                }
            });
            // Select area from dropdown
            $(document).on('click', '.area-item1', function(e) {
                e.preventDefault();
                var areaId = $(this).data('id');
                var areaName = $(this).text();
                $('#area_search1').val(areaName);
                $('#area1').val(areaId);
                $('#areaDropdown1').hide();
                
                // Fetch area details for autofill
                $.get('/register/area-details/' + areaId, function(data) {
                    if (data) {
                        // Combine IDs for pincode
                        var pincode = data.country_id + '' + data.state_id + '' + data.city_id + '' + data.area_id;
                        $('#pincode1').val(pincode);
                    } else {
                        $('#pincode1').val('');
                    }
                });
            });

            $('#area_search1').on('blur', function () {
                const areaText = $(this).val().trim();
                const currentAreaId = $('#area1').val();
                if (areaText !== '' && !currentAreaId) {
                    $.get('/register/areas/search', { q: areaText }, function (data) {
                        if (data.length > 0) {
                            $('#area1').val(data[0].area_id);
                            // Optional: also autofill pincode again
                            $.get('/register/area-details/' + data[0].area_id, function(details) {
                                if (details) {
                                    let pincode = details.country_id + '' + details.state_id + '' + details.city_id + '' + details.area_id;
                                    $('#pincode1').val(pincode);
                                }
                            });
                        } else {
                            $('#area1').val('');
                        }
                    });
                }
            });

            // Hide area dropdown on click outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('#area_search1, #areaDropdown1').length) {
                    $('#areaDropdown1').hide();
                }
            });

            $(document).on('input', '.otp-input', function() {
                if (this.value.length === this.maxLength) {
                    $(this).next('.otp-input').focus();
                }
            });

            $(document).on('keydown', '.otp-input', function(e) {
                if (e.key === "Backspace" && this.value.length === 0) {
                    $(this).prev('.otp-input').focus();
                }
            });

            $('input[name="experience_level"]').on('change', function () {
                const value = $(this).val();
                if (value === 'fresher') {
                    $('#experienceYearsWrapper').addClass('d-none');
                    $('#finalExperienceYears').val('fresher');
                } else {
                    $('#experienceYearsWrapper').removeClass('d-none');
                    // Set default if already selected
                    const selected = $('#experienceDropdown').val();
                    if (selected) {
                        $('#finalExperienceYears').val(selected);
                    }
                }
            });

            $('#experienceDropdown').on('change', function () {
                $('#finalExperienceYears').val($(this).val());
            });

            // Add new job role field
            $(document).on('click', '.add-role', function () {
                $('#roles-container').append(`
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control" name="job_roles[]" placeholder="Add Role">
                        <button type="button" class="btn btn-danger remove-role">-</button>
                    </div>
                `);
            });

            // Remove a job role field
            $(document).on('click', '.remove-role', function () {
                $(this).closest('.d-flex').remove();
            });

            // Add new skill field
            $(document).on('click', '.add-skill', function () {
                $('#skills-container').append(`
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control" name="job_skills[]" placeholder="Add Skill">
                        <button type="button" class="btn btn-danger remove-skill">-</button>
                    </div>
                `);
            });

            // Remove a skill field
            $(document).on('click', '.remove-skill', function () {
                $(this).closest('.d-flex').remove();
            });
            
        });

        $(document).on('click', '#load-more', function () {
            var nextPage = $(this).data('next-page');
            var btn = $(this);
            btn.prop('disabled', true).text('Loading...');

            $.get("{{ route('jobseekers.index') }}" + "?page=" + nextPage, function (data) {
                if (data.trim() !== '') {
                    $('#jobseeker-list').append(data);
                    btn.data("next-page", nextPage + 1).prop("disabled", false).text("More Resumes");

                    // Optionally remove button if no more data
                    if (!data.includes('job-box1')) {
                        btn.remove();
                    }
                } else {
                    btn.remove();
                }
            });
        });

        </script>
        <script>
        // Password visibility toggle
        function togglePassword(id) {
            var input = document.getElementById(id);
            var icon = event.target;
            var inputGroup = icon.closest('.input-group');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
            // Add animation to the input group
            inputGroup.classList.remove('slide-in-right');
            void inputGroup.offsetWidth; // trigger reflow
            inputGroup.classList.add('slide-in-right');
            // Remove animation class after animation ends
            inputGroup.addEventListener('animationend', function handler() {
                inputGroup.classList.remove('slide-in-right');
                inputGroup.removeEventListener('animationend', handler);
            });
        }
        </script>
        @endpush
