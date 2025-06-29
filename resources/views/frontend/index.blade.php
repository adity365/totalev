@extends('frontend.layouts.main')

@section('main-container')
        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{url('frontend/img/slide2.jpg')}}" style="height:450px" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Advertise a job and hire the people you need</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">2400 Peoples are daily search in this portal, 100 user added job portal!</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Post A Job</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">CV Registration</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{url('frontend/img/carousel-21.jpg')}}" style="height:450px" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <!-- <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best Startup Job That Fit You</h1> -->
                                    <h1 class="display-3 text-white animated slideInDown mb-4">We Help To Get The Best Job</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">2400 Peoples are daily search in this portal, 100 user added job portal!</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Post A Job</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">CV Registration</a>
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
                    <button class="nav-link active" id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular" type="button" role="tab">Popular Searches</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="sector-tab" data-bs-toggle="tab" data-bs-target="#sector" type="button" role="tab">Jobs by Industries</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="location-tab" data-bs-toggle="tab" data-bs-target="#location" type="button" role="tab">Jobs by Location</button>
                </li>
            </ul>

            <div class="tab-content mt-3" id="jobTabsContent">
                <!-- Popular Searches -->
                <div class="tab-pane fade show active" id="popular" role="tabpanel">
                    <a href="#">Software Developer Jobs |</a>
                    <a href="#">Marketing Manager Jobs  | </a>
                    <a href="#">Customer Service Jobs  | </a>
                    <a href="#">Project Manager Jobs  | </a>
                </div>

                <!-- Jobs by Sector -->
                <div class="tab-pane fade" id="sector" role="tabpanel">
                    <a href="#">IT & Tech Jobs  | </a>
                    <a href="#">Healthcare Jobs  | </a>
                    <a href="#">Finance Jobs  | </a>
                    <a href="#">Construction Jobs  | </a>
                </div>

                <!-- Jobs by Location -->
                <div class="tab-pane fade" id="location" role="tabpanel">
                    <a href="#">Jobs in London  | </a>
                    <a href="#">Jobs in Manchester  | </a>
                    <a href="#">Jobs in Birmingham  | </a>
                    <a href="#">Jobs in Glasgow  | </a>
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
                    <h5><a href="">Req. Office Boy  </a>
                        <button class="btn btn-primary btn-sm apply-btn">Apply Now</button>
                    </h5>
                    <!-- <p><strong>Category:</strong> Driver, Office Boy, Ground Staff, Field Boy, Plumbers</p> -->
                    <!-- <p><strong>Company :</strong> Digital IT Solutions (P) Ltd.</p> -->
                    <!-- <div class="apply-btn-container">
                        <p><img src="{{url('frontend/img/vacantree-logo.jpeg')}}" alt="Apply Now Background" class="apply-btn-bg1"></p>
                    </div> -->
                    <div class="company-info">
                        <img src="{{url('frontend/img/vacantree-logo.jpeg')}}" alt="Vacant Tree Logo" class="company-logo">
                        <span class="company-name">Vacant Tree</span>
                    </div>
                        <!-- <p> <strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p> -->
                        <div class="job-info1">
                            <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p>
                            <p><strong>Exp. :</strong> 1 - 3 Years</p>
                        </div>
                        <div class="job-info1">
                            <p><strong><i class="fas fa-rupee-sign"></i></strong> <span class="bg2"> 100,000 - 120,000 </span> </p>
                            <p><strong><i class="fas fa-clock clock-icon"></i></strong> <span class="bg2"> Full-time </span> </p>
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
                        <p><strong class="text-primary">New</strong> <strong>1day ago </strong> <strong>/ 15 days left</strong></p>
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
                    <h5><a href="">Req. Driver  </a>
                        <button class="btn btn-primary btn-sm apply-btn">Apply Now</button>
                    </h5>
                    <!-- <p><strong>Category:</strong> Driver, Office Boy, Ground Staff, Field Boy, Plumbers</p> -->
                    <!-- <p><strong>Company :</strong> Digital IT Solutions (P) Ltd.</p> -->
                    <div class="company-info">
                        <img src="{{url('frontend/img/vacantree-logo.jpeg')}}" alt="Vacant Tree Logo" class="company-logo">
                        <span class="company-name">Vacant Tree</span>
                    </div>
                        <!-- <p> <strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p> -->
                        <div class="job-info1">
                            <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p>
                            <p><strong>Exp. :</strong> 1 - 3 Years</p>
                        </div>
                        <div class="job-info1">
                            <p><strong><i class="fas fa-rupee-sign"></i></strong> <span class="bg2"> 100,000 - 120,000 </span> </p>
                            <p><strong><i class="fas fa-clock clock-icon"></i></strong> <span class="bg2"> Full-time </span> </p>
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
                        <p><strong class="text-primary">New</strong> <strong>1day ago </strong> <strong>/ 15 days left</strong></p>
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
                    <h5><a href="">Req. Security Guard  </a>
                        <button class="btn btn-primary btn-sm apply-btn">Apply Now</button>
                    </h5>
                    <!-- <p><strong>Category:</strong> Driver, Office Boy, Ground Staff, Field Boy, Plumbers</p> -->
                    <!-- <p><strong>Company :</strong> Digital IT Solutions (P) Ltd.</p> -->
                    <div class="company-info">
                        <img src="{{url('frontend/img/vacantree-logo.jpeg')}}" alt="Vacant Tree Logo" class="company-logo">
                        <span class="company-name">Vacant Tree</span>
                    </div>
                        <!-- <p> <strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p> -->
                        <div class="job-info1">
                            <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p>
                            <p><strong>Exp. :</strong> 1 - 3 Years</p>
                        </div>
                        <div class="job-info1">
                            <p><strong><i class="fas fa-rupee-sign"></i></strong> <span class="bg2"> 100,000 - 120,000 </span> </p>
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
                        <p><strong class="text-primary">New</strong> <strong>1day ago </strong> <strong>/ 15 days left</strong></p>
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
                    <img src="{{url('frontend/img/banner/banner1.png')}}" alt="Banner Image" class="img-fluid">
                </a>
            </div>
        </div>
    </div>

    <!--======================== End Recruiters ========================-->

    <!--======================== Start Resume Box ========================-->

    <div class="container mt-5">
        <div class="row">
            <!-- Job Block 1 -->
            <!-- <div class="col-md-4 col-sm-6 mb-3">
                <div class="job-box1 job-box2 d-flex justify-content-between align-items-center">
                    <div class="job-details">
                        <h5>Kunal Gupta
                            <button class="btn btn-primary btn-sm apply-btn">Hire Now</button>
                        </h5>
                        <p><strong>Category:</strong> Driver, Office Boy, Ground Staff, Field Boy, Plumbers</p>
                        <p><strong>Salary:</strong> ₹100,000 - ₹120,000</p>
                        <p><strong>Skill:</strong> 16-Aug-2024</p>
                        <p><strong>Verified:</strong> kunal@gmail.com</p>
                        <p><strong>Before Apply:</strong> 19-Mar-2025</p>
                        <p class="job-location"><strong>Location:</strong> Nehru Place, South Delhi, Delhi, India, Pin - 110019</p>
                    </div>
                    <img src="{{url('frontend/img/resume.jpg')}}" class="job-image" alt="Office Boy">
                    <div class="icon-container">
                        <i class="fas fa-bookmark"></i>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
            </div> -->

            <div class="col-md-4 col-sm-6 mb-3">
                <div class="job-box1">
                    <h5><a href="#">Lalit Kumar -  Male, 30  </a>
                        <div class="apply-btn-container">
                            <button class="btn btn-primary btn-sm apply-btn bg1">Hire Now</button>
                            <img src="{{url('frontend/img/resume.jpg')}}" alt="Apply Now Background" class="apply-btn-bg">
                        </div>
                    </h5>
                    <div class="job-info1">
                        <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p>
                        <!-- <p><strong>Exp. :</strong> 1 - 3 Years</p> -->
                    </div>
                    <!-- <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong>Nehru Place, Delhi</p> -->
                    <p><strong>Category :</strong> Remote Monitoring</p>

                    <p><strong>Education :</strong> B-Tech</p>
                    <div class="job-info1">
                        <p><strong>Exp. :</strong> <span class="bg2">1 - 3 Years</span></p>
                        <p><strong><i class="fas fa-rupee-sign"></i></strong> <span class="bg2">100,000</span></p>
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
                    <p><strong>Verified :</strong> Lalit@gmail.com</p>

                    <div class="icon-container">
                        <i class="fas fa-bookmark"></i>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
            </div>

            <!-- Job Block 2 -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="job-box1">
                    <h5><a href="#">Mohd Yahya Yahya-  Male, 30  </a>
                        <div class="apply-btn-container">
                            <button class="btn btn-primary btn-sm apply-btn bg1">Hire Now</button>
                            <img src="{{url('frontend/img/resume.jpg')}}" alt="Apply Now Background" class="apply-btn-bg">
                        </div>
                    </h5>
                    <div class="job-info1">
                        <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p>
                        <!-- <p><strong>Exp. :</strong> 1 - 3 Years</p> -->
                    </div>
                    <!-- <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong>Nehru Place, Delhi</p> -->
                    <p><strong>Category :</strong> Remote Monitoring</p>
                    <p><strong>Education :</strong> B-Tech</p>
                    <div class="job-info1">
                        <p><strong>Exp. :</strong> <span class="bg2">1 - 3 Years</span></p>
                        <p><strong><i class="fas fa-rupee-sign"></i></strong> <span class="bg2">100,000</span></p>
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
                    <p><strong>Verified :</strong> mohdyahya@gmail.com</p>

                    <div class="icon-container">
                        <i class="fas fa-bookmark"></i>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
            </div>


            <!-- Job Block 2 -->
            <!-- <div class="col-md-4 col-sm-6 mb-3">
                <div class="job-box1 job-box2 d-flex justify-content-between align-items-center">
                    <div class="job-details">
                        <h5>Mohd Yahya Yahya

                            <button class="btn btn-primary btn-sm apply-btn">Hire Now</button>
                        </h5>
                        <p><strong>Category:</strong> Driver, Logistics, Transport</p>
                        <p><strong>Company:</strong> Fast Movers Pvt. Ltd.</p>
                        <p><strong>Salary:</strong> ₹150,000 - ₹180,000</p>
                        <p><strong>Date Posted:</strong> 20-Feb-2024</p>
                        <p><strong>Job Type:</strong> Full-time</p>
                        <p><strong>Before Apply:</strong> 15-Apr-2025</p>
                        <p class="job-location"><strong>Location:</strong> Connaught Place, Delhi, India, Pin - 110001</p>
                    </div>
                    <img src="{{url('frontend/img/resume.jpg')}}" class="job-image" alt="Driver">
                    <div class="icon-container">
                        <i class="fas fa-bookmark"></i>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
            </div> -->

            <!-- Job Block 3 -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="job-box1">
                    <h5><a href="">Sumit Yadav-  Male, 30  </a>
                        <div class="apply-btn-container">
                            <button class="btn btn-primary btn-sm apply-btn bg1">Hire Now</button>
                            <img src="{{url('frontend/img/resume.jpg')}}" alt="Apply Now Background" class="apply-btn-bg">
                        </div>
                    </h5>
                    <div class="job-info1">
                        <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong> Nehru Place, Delhi</p>
                        <!-- <p><strong>Exp. :</strong> 1 - 3 Years</p> -->
                    </div>
                    <!-- <p><strong><i class="fas fa-map-marker-alt location-icon"></i></strong>Nehru Place, Delhi</p> -->
                    <p><strong>Category :</strong> Remote Monitoring</p>
                    <p><strong>Education :</strong> B-Tech</p>
                    <div class="job-info1">
                        <p><strong>Exp. :</strong> <span class="bg2">1 - 3 Years</span></p>
                        <p><strong><i class="fas fa-rupee-sign"></i></strong> <span class="bg2">100,000</span></p>
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
                    <!-- <p><strong>Skills :</strong> N/A</p>
                    <p><strong>Education :</strong> B-Tech</p> -->
                    <p><strong>Verified :</strong> sumit@gmail.com</p>

                    <div class="icon-container">
                        <i class="fas fa-bookmark"></i>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
            </div>


            <!-- <div class="col-md-4 col-sm-6 mb-3">
                <div class="job-box1 job-box2 d-flex justify-content-between align-items-center">
                    <div class="job-details">
                        <h5>Sumit Yadav
                            <button class="btn btn-primary btn-sm apply-btn">Hire Now</button>
                        </h5>
                        <p><strong>Category:</strong> Security, Guard, Protection</p>
                        <p><strong>Company:</strong> Safe Guard Services</p>
                        <p><strong>Salary:</strong> ₹120,000 - ₹150,000</p>
                        <p><strong>Date Posted:</strong> 25-Jan-2024</p>
                        <p><strong>Job Type:</strong> Full-time</p>
                        <p><strong>Before Apply:</strong> 10-May-2025</p>
                        <p class="job-location"><strong>Location:</strong> Gurgaon, Haryana, India, Pin - 122001</p>
                    </div>
                    <img src="{{url('frontend/img/resume.jpg')}}" class="job-image" alt="Security Guard">
                    <div class="icon-container">
                        <i class="fas fa-bookmark"></i>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
            </div> -->

        </div>
        <div class="d-flex justify-content-end mb-5">
            <button class="btn btn-success more-jobs-btn">More Resumes</button>
        </div>
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
                <input class="form-check-input" type="radio" name="category" id="consultants" value="consultants" checked>
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
                    <img src="{{url('frontend/img/interview.jpg')}}" alt="Interview Questions">
                    <h3>Common interview questions</h3>
                    <p class="pd-txt">We reveal the most common competency-based interview questions you might be challenged with.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="{{url('frontend/img/interview.jpg')}}" alt="UK Salary & Benefits 2025">
                    <h3>Create Your Resume Quickly & Very Easy</h3>
                    <p class="pd-txt">The Ultimate Guide to Career Growth and Opportunities in 2025.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <img src="{{url('frontend/img/interview.jpg')}}" alt="Personal Statement">
                    <h3>Write a personal statement for a job</h3>
                    <p class="pd-txt">A good personal statement can make you stand out - but it can be a challenge to write. This guide shows you how.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="card">
            <img src="{{url('frontend/img/interview.jpg')}}" alt="Interview Questions">
            <h3>Common interview questions</h3>
            <p class="pd-txt">We reveal the most common competency-based interview questions you might be challenged with.</p>
            <a href="#">Read More</a>
        </div>
        <div class="card">
            <img src="{{url('frontend/img/interview.jpg')}}" alt="UK Salary & Benefits 2025">
            <h3>UK Salary & Benefits 2025</h3>
            <p class="pd-txt">The Ultimate Guide to Career Growth and Opportunities in 2025.</p>
            <a href="#">Read More</a>
        </div>
        <div class="card">
            <img src="{{url('frontend/img/interview.jpg')}}" alt="Personal Statement">
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
                    <img src="{{url('frontend/img/banner/banner6.png')}}" alt="Banner Image" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-1 wow fadeInUp" data-wow-delay="0.1s">Jobs Category List</h1>
                <p class="mb-5 text-center wow fadeInUp" data-wow-delay="0.1s">To choose your trending job dream & to make future bright.</p>
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
                                <img class="img-fluid w-100" src="{{url('frontend/img/about-1.jpg')}}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="{{url('frontend/img/about-2.jpg')}}" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="{{url('frontend/img/about-3.jpg')}}" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="{{url('frontend/img/about-4.jpg')}}">
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
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mt-n1 mb-0">Featured</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <h6 class="mt-n1 mb-0">Full Time</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <h6 class="mt-n1 mb-0">Part Time</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="{{url('frontend/img/vacantree-logo.jpeg')}}" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-2">Vacant Tree</h5>
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Nehru Place, Delhi</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="fas fa-rupee-sign text-primary me-2"></i>123 - 456</span> </br>
                                            <span class="me-3"><i class="fas fa-briefcase text-primary me-2"></i>Experience: 1 - 3 Years</span>
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
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
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
                                        <small class="text-truncate"><strong class="text-primary">New</strong> <strong>1day ago </strong><strong> /15 days left </strong></small>
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
                                        <img class="flex-shrink-0 img-fluid border rounded" src="{{url('frontend/img/vacantree-logo.jpeg')}}" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-2">Vacant Tree</h5>
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Nehru Place, Delhi</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="fas fa-rupee-sign text-primary me-2"></i>123 - 456</span> </br>
                                            <span class="me-3"><i class="fas fa-briefcase text-primary me-2"></i>Experience: 1 - 3 Years</span>
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
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
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
                                        <small class="text-truncate"><strong class="text-primary">New</strong> <strong>1day ago </strong><strong> /15 days left </strong></small>
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
                                    <img class="flex-shrink-0 img-fluid border rounded" src="{{url('frontend/img/vacantree-logo.jpeg')}}" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-2">Vacant Tree</h5>
                                        <h5 class="mb-3">Product Designer</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Nehru Place, Delhi</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                        <span class="text-truncate me-0"><i class="fas fa-rupee-sign text-primary me-2"></i>123 - 456</span> </br>
                                        <span class="me-3"><i class="fas fa-briefcase text-primary me-2"></i>Experience: 1 - 3 Years</span>
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
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
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
                                    <small class="text-truncate"><strong class="text-primary">New</strong> <strong>1day ago </strong> <strong> /15 days left </strong> </small>
                                    <!-- <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Posted: 01 Jan, 2045</small>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Before Apply: 19-Mar-2025</small> -->
                                </div>
                            </div>

                        </div>
                    </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="{{url('frontend/img/com-logo-4.jpg')}}" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Creative Director</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Nehru Place, Delhi</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="fas fa-rupee-sign text-primary me-2"></i>123 - 456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="{{url('frontend/img/com-logo-5.jpg')}}" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Wordpress Developer</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Nehru Place, Delhi</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="fas fa-rupee-sign text-primary me-2"></i>123 - 456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
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
                                <img src="{{url('frontend/img/home4-counter-1.svg')}}" alt="">
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
                                <img src="{{url('frontend/img/home4-counter-2.svg')}}" alt="">
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
                                <img src="{{url('frontend/img/home4-counter-3.svg')}}" alt="">
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
                                <img src="{{url('frontend/img/home4-counter-4.svg')}}" alt="">
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
                            <img class="img-fluid flex-shrink-0 rounded" src="{{url('frontend/img/testimonial-1.jpg')}}" style="width: 50px; height: 50px;">
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
                            <img class="img-fluid flex-shrink-0 rounded" src="{{url('frontend/img/testimonial-2.jpg')}}" style="width: 50px; height: 50px;">
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
                            <img class="img-fluid flex-shrink-0 rounded" src="{{url('frontend/img/testimonial-3.jpg')}}" style="width: 50px; height: 50px;">
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
                            <img class="img-fluid flex-shrink-0 rounded" src="{{url('frontend/img/testimonial-4.jpg')}}" style="width: 50px; height: 50px;">
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
                                        <img src="{{url('frontend/img/trusted-company-01.png')}}" alt="">
                                    </div>
                                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-02.png')}}" alt="">
                                    </div>
                                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-03.png')}}" alt="">
                                    </div>
                                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-04.png')}}" alt="">
                                    </div>
                                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-05.png')}}" alt="">
                                    </div>
                                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-06.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-01.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-02.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-03.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-04.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-05.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-06.png')}}" alt="">
                                    </div>
                                </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-01.png')}}" alt="">
                                    </div>
                                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-02.png')}}" alt="">
                                    </div>
                                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-03.png')}}" alt="">
                                    </div>
                                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-04.png')}}" alt="">
                                    </div>
                                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-05.png')}}" alt="">
                                    </div>
                                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 200px; margin-right: 24px;">
                                    <div class="company-logo">
                                        <img src="{{url('frontend/img/trusted-company-06.png')}}" alt="">
                                    </div>
                                </div></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                </div>
            </div>
        </div> -->


        {{-- Model-JobSeeker Registration Form --}}

        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register
                    </button>
                </div>
            </div> --}}

            <!-- Bootstrap Modal -->
            <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerModalLabel">Job Seeker Registration</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            {{-- <form method="POST" action="{{ route('register') }}"> --}}
                                @csrf

                                <!-- Full Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <!-- Mobile No. and Password -->
                                {{-- <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Mobile No.</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            <span class="input-group-text">
                                                <i class="fa fa-eye toggle-password" onclick="togglePassword('password')"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Mobile No.</label>
                                        <div class="input-group">
                                            <span class="input-group-text">+91</span>
                                            <input type="text" class="form-control" id="mobile" name="mobile" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            <span class="input-group-text">
                                                <i class="fa fa-eye toggle-password" onclick="togglePassword('password')"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Remember Me & Forgot Password -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember">
                                            <label class="form-check-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <a href="#" class="text-decoration-none">Forgot Password?</a>
                                    </div>
                                </div>

                                <!-- Email & Password -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password2" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password2" name="password2" required>
                                            <span class="input-group-text">
                                                <i class="fa fa-eye toggle-password" onclick="togglePassword('password2')"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Remember Me & Forgot Password -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember2">
                                            <label class="form-check-label" for="remember2">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <a href="#" class="text-decoration-none">Forgot Password?</a>
                                    </div>
                                </div>

                                <!-- City Dropdown -->
                                <div class="mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <select class="form-select" id="city" name="city">
                                        <option selected>Select City</option>
                                        <option value="agra">Agra</option>
                                        <option value="ahmedabad"> Ahmedabad</option>
                                        <option value="alwar">Alwar</option>
                                        <option value="amla"> Amla</option>
                                    </select>
                                </div>

                                <!-- Area & Pincode -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="area" class="form-label">Area</label>
                                        {{-- <input type="text" class="form-control" id="area" name="area"> --}}
                                        <select class="form-select" id="city" name="city">
                                            <option selected>Select Area</option>
                                            <option value="dayal-bagh">Dayal Bagh</option>
                                            <option value="prahlad-nagar"> Prahlad Nagar</option>
                                            <option value="alwarct">Alwar City</option>
                                            <option value="betul-district"> Betul district</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="text" class="form-control" id="pincode" name="pincode">
                                    </div>
                                </div>

                                <!-- Street Address -->
                                <div class="mb-3">
                                    <label for="street_address" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="street_address" name="street_address">
                                </div>

                                <!-- Recaptcha Code -->
                                {{-- <div class="mb-3 text-center">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div> --}}

                                <!-- Submit Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">Register</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
