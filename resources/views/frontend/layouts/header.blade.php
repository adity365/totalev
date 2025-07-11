<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VacantTree - Job Site</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <a href="https://wa.me/9354761848" target="_blank" class="whatsapp-container">
        <div class="whatsapp-icon">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        </div>
        <span class="whatsapp-text">Help & Support</span>
    </a>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <!-- <h1 class="m-0 text-primary">JobEntry</h1> -->
                <img src="{{url('frontend/img/vacantree-logo.jpeg')}}" width="33%" alt="logo">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <!-- <a href="index.html" class="nav-item nav-link active">Home</a> -->
                    <a href="about.html" class="nav-item nav-link"><i class="fas fa-users nav-icon"></i>For recruiters</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-heart nav-icon"></i>My jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.html" class="dropdown-item">My Vacant Tree</a>
                            <a href="job-detail.html" class="dropdown-item">Saved jobs</a>
                            <a href="job-detail.html" class="dropdown-item">Applied jobs</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link"  data-bs-toggle="modal" data-bs-target="#registerModal"><i class="far fa-file-alt nav-icon"></i>CV Registration</a>
                    @auth('jobseeker')
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle nav-icon"></i>{{ Auth::guard('jobseeker')->user()->name }}
                            </a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('jobseeker.dashboard') }}" class="dropdown-item">Dashboard</a>
                                <a href="{{ route('jobseeker.profile.edit') }}" class="dropdown-item">Edit Profile</a>
                                <hr class="dropdown-divider">
                                <form method="POST" action="{{ route('logout.jobseeker') }}" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-sign-in-alt nav-icon"></i>Sign In</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <!-- Button to Open Modal -->
                                <a href="{{ route('login.jobseeker') }}" class="dropdown-item">Job Seeker Sign in</a>
                                <a href="#" class="dropdown-item bordr" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
                                <a href="{{ route('login.company') }}" class="dropdown-item">Recruiter Sign in</a>
                            </div>
                        </div>
                    @endauth

                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.html" class="dropdown-item">Job Category</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404</a>
                        </div>
                    </div> -->

                </div>
                <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
