<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home - Nakakeeto Foundation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/assets/img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMK7Er32Y8f8DHiX0VQ2D6MwS/m1xIzF8VfF1A" crossorigin="anonymous">

    <style>
        .bold-heading {
            font-weight: bold;
        }
    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Wakiso, Uganda</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 06.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+256772308110, +256755449503</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary"
                        href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary"
                        href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary"
                        href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href="javascript:void(0);"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>


    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <img class="logo_resize" src="{{ asset('/assets/img/logo.png') }}" alt="Logo">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
                <a href="{{ route('service') }}" class="nav-item nav-link">Our Work</a>
                <a href="{{ route('Partners') }}" class="nav-item nav-link">Partners</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Information</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ route('news') }}" class="dropdown-item">News</a>
                        <a href="{{ route('reports') }}" class="dropdown-item">Reports</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ url('support-us') }}"
                class="btn btn-primary btn-sm rounded-0 py-4 px-lg-5 d-none d-lg-block me-2">
                Support Us <i class="fa fa-donate ms-3"></i>
            </a>
        </div>
    </nav>
    <!-- Navbar End -->
    @include('includes.message')

    @if (Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='/assets/img/carousel-1.jpg'>">
                <img class="img-fluid" src="/assets/img/carousel-1.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Empowering Communities in Uganda
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Transforming maternal and child health,
                                    education, and technology for sustainable development.</p>
                                <a href="{{ route('about') }}" id="welcome_top"
                                    class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">
                                    <i class="fas fa-arrow-right"></i> Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='/assets/img/carousel-2.jpg'>">
                <img class="img-fluid" src="/assets/img/carousel-2.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Championing Health and Education
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Promoting well-being and access to
                                    quality education for all communities.</p>
                                <a href="{{ route('about') }}"
                                    class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">
                                    <i class="fas fa-arrow-right"></i> Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='/assets/img/carousel-3.jpg'>">
                <img class="img-fluid" src="/assets/img/carousel-3.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Join Us in Making a Difference
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Support our mission to empower
                                    vulnerable communities across Uganda.</p>
                                <a href="{{ route('support-us') }}"
                                    class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">
                                    <i class="fas fa-arrow-right"></i> Get Involved
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-1">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h5 class="text-primary">Nakakeeto Foundation</h5>
                <h2>Empowering Uganda’s future.</h2>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/about.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">Nakakeeto Foundation</h6>
                        <p style="text-align: justify">Established in 2023 by Dr. Margaret Nakakeeto, the Nakakeeto
                            Foundation is committed to creating transformative change in Uganda. With a focus on
                            maternal and child health, education, technology, and outreach, we aim to empower
                            communities through sustainable development. Join us as we work to foster a brighter future
                            for Uganda.</p>
                        <a href="{{ route('about') }}" class="btn btn-primary btn-sm rounded-pill py-3 px-5 mt-3">
                            <i class="fas fa-arrow-right"></i> Explore More
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-xxl py-1">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2>Our Mission</h2>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">

                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex flex-column align-items-center mb-4" style="text-align: center;">
                        <div class="btn-lg-square bg-primary rounded-circle mb-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <span>To empower vulnerable communities by providing access to quality education, healthcare,
                            and
                            livelihood opportunities, ensuring a brighter future for all.</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Feature Counter Start  -->

    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-4"> Our impact on the community</h1>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">3453</h1>
                    </div>
                    <h5 class="mb-3">Newborns</h5>
                    <span>We have successfully supported over 3,453 newborns with comprehensive care and
                        resources.</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">4234</h1>
                    </div>
                    <h5 class="mb-3">Mothers</h5>
                    <span>We have provided care and support to 4,234 mothers, ensuring their well-being and that of
                        their children.</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">3123</h1>
                    </div>
                    <h5 class="mb-3">Hospitals</h5>
                    <span>Our programs are partnered with 3,123 hospitals to provide the best care for mothers and
                        newborns.</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">1831</h1>
                    </div>
                    <h5 class="mb-3">Specialists</h5>
                    <span>We work with 1,831 specialists to ensure expert care and guidance in maternal and infant
                        health.</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Counter End  -->


    <!-- Service Start -->
    <div class="container-xxl py-2">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="text-primary">Our Services</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/img/img-600x400-1.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fas fa-heart fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Health and Technology: </h4>
                            <p style="text-align: justify">Using technology to advance healthcare solutions and improve
                                patient outcomes.</p>
                            <a class="small fw-medium" href="{{ route('Conflict-Resolution') }}">Read More<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/img/img-600x400-2.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fas fa-gavel fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Education and Training </h4>
                            <p style="text-align: justify">Supporting educational opportunities for children and adults
                                to empower communities.</p>
                            <a class="small fw-medium" href="{{ route('Social-Justice') }}">Read More<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/img/img-600x400-3.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Outreach Programs</h4>
                            <p style="text-align: justify">Conducting community-based programs to address immediate
                                needs and promote long-term health.</p>
                            <a class="small fw-medium" href="{{ route('Political-Advocacy') }}">Read More<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/img/img-600x400-4.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class='fas fa-users fa-3x'></i>
                            </div>
                            <h4 class="mb-3">Additional Initiatives</h4>
                            <p style="text-align: justify">Providing resources for skills development, community health
                                assessments, and environmental stewardship.</p>
                            <a class="small fw-medium" href="{{ route('Human-Rights-Advocacy') }}">Read More<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="/assets/img/img-600x400-5.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class='fas fa-smog fa-3x'></i>
                        </div>
                        <h5 class="mb-3">Community Development </h5>
                        <p style="text-align: justify">Through infrastructure development, water sanitation projects,
                            and youth programs, we work hand in hand with communities to create an environment where
                            everyone can thrive...</p>
                        <a class="small fw-medium" href="{{route('Natural-Resource-Management')}}">Read More<i
                                class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div> --}}

            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Patterners Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Our Partners</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/4.jpg" alt="Partner 2">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Collaborating on the Virtual Educational Network for Care (vENC) initiative.</p>
                            <h5 class="mb-1">University of Washington</h5>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/1.jpg" alt="Partner 3">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Our work is enhanced by the contributions of philanthropic leaders who are committed to
                                improving global health outcomes and supporting our mission.</p>
                            <h5 class="mb-1">Bulamu Healthcare International</h5>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/3.jpg" alt="Partner 3">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <h5 class="mb-1">UNICEF</h5>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/2.jpg" alt="Partner 3">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <h5 class="mb-1">Save the Children</h5>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/5.jpg" alt="Partner 1">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Partnering with Nakakeeto Foundation to implement NoviGuide, which improves the quality
                                of
                                neonatal care in Uganda.</p>
                            <h5 class="mb-1">Global Strategies</h5>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/6.jpg" alt="Partner 3">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <h5 class="mb-1">New Jerusalem Church of Christ Ministries</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Patterners End -->

    <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/quote.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>

                <div class="col-lg-6 quote-text py-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h2 class="mb-4 text-primary">Watch our video</h2>
                        <p class="mb-4 pb-2" style="text-align: justify;">Learn more about our services by watching
                            the
                            video below. We
                            cover a variety of topics including conflict resolution, social justice, political advocacy,
                            human rights
                            advocacy, and natural resource management.</p>
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/YOUR_VIDEO_ID"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Testimonial End -->

    @include('layouts.Footer')
