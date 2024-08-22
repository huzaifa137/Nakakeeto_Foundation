<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home - Women Defending Democracy</title>
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
                    <small>2228 Cherry Leaf Lane Silver Spring MD 20906</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 06.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>(888) W0DD-958</small>
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
        <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary"> <img class="logo_resize" src="/assets/img/Logo.png" alt=""> </h2>
        </a>
        <button type="button" class="navbar-toggler me-4 pt-4" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block me-2">
                DONATE <i class="fa fa-donate ms-3"></i>
            </a>
        </div>
    </nav>
    <!-- Navbar End -->
    @include('includes.message')

    @if (Session::get('fail'))
    <div class="alert alert-danger">
        {{Session::get('fail')}}
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
                                <h1 class="display-2 text-white animated slideInDown">Pioneers For Women Rights And
                                    Advocay</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Supporting the implementation of policies
                                    and commitments on women’s participation in peace processes through strategic
                                    advocacy.</p>
                                <a href="{{route('about')}}" id="welcome_top"
                                    class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
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
                                <h1 class="display-2 text-white animated slideInDown">Women's Voices Are Heard And
                                    Valued</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Transforming the society where democracy
                                    is inclusive, and women's voices are heard and valued.</p>
                                <a href="{{route('about')}}"
                                    class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
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
                                <h1 class="display-2 text-white animated slideInDown">Peace, Security And Development
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Our mission is focused on promoting
                                    inclusive democratic processes, peace, and security</p>
                                <a href="{{route('about')}}"
                                    class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
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
                <h5 class="text-primary">Welcome to Women Defending Democracy</h5>
                <h2>We advocate for inclusive democratic processes, peace and security</h2>
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
                        <h6 class="text-primary">About Us</h6>
                        <h2 class="mb-4">Over 2 Years of Experience with a Dedicated Network of Healthcare Professionals and Supporters</h2>
                        <p style="text-align: justify">Nakakeeto Foundation is a dedicated non-profit organization committed to supporting pregnant women, new mothers, and their newborn babies. Founded with a vision of nurturing life and empowering families, our mission is to ensure that every mother and child receives the care, resources, and support they need to thrive during one of the most critical stages of life.</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Providing comprehensive healthcare and support services to ensure the well-being of pregnant women and newborns.</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Delivering targeted educational programs to empower mothers with essential knowledge about prenatal, postnatal, and infant care.</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Advocating for improved maternal and infant health policies and raising awareness about critical issues affecting mothers and babies.</p>                        
                        <a href="{{route('about')}}" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explore
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-1">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 style="color:purple;">Our Mission and Vision</h2>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="text-align: justify">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users text-white"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Our Motto</h5>
                    <span>Nurturing Life, Empowering Mothers</span>
                </div>


                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.7s" style="text-align: justify">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Our Vision</h5>
                    <span>To create a world where every pregnant woman, mother, and newborn baby receives the support,
                        care, and resources they need to thrive, ensuring a healthy start to life for every child and
                        fostering empowered, informed, and supported mothers.</span>
                </div>


            </div>
        </div>
    </div>
    <!-- Feature Start -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-1  wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h1 class="mb-4">Our Objectives</h1>
                        <p><span class="bold-heading">Health and Wellness:</span> Provide comprehensive healthcare
                            services and education to pregnant women and new mothers, including prenatal and postnatal
                            care.</p>

                        <p><span class="bold-heading">Support Systems:</span> Offer emotional and psychological support
                            through counseling, support groups, and community outreach programs.</p>

                        <p><span class="bold-heading">Education and Training:</span> Deliver educational resources and
                            workshops on maternal health, infant care, and parenting skills.</p>

                        <p><span class="bold-heading">Nutritional Assistance:</span> Supply essential nutritional
                            support and advice to pregnant women and new mothers to ensure proper nourishment for both
                            mothers and babies.</p>

                        <p><span class="bold-heading">Safe Environments:</span> Promote and facilitate the creation of
                            safe, supportive environments for mothers and their newborns.</p>

                        <p><span class="bold-heading">Advocacy:</span> Advocate for policies and practices that improve
                            maternal and infant health at local, national, and international levels.</p>

                        <a href="{{route('contact')}}" class="btn btn-primary rounded-pill py-3 px-5 mt-3 mb-3">Learn
                            from us</a>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/feature.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


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
                            <h4 class="mb-3">Healthcare Outreach </h4>
                            <p style="text-align: justify">Our healthcare programs focus on offering medical assistance to underserved communities, including health camps, vaccinations, maternal care, and mental health support....</p>
                            <a class="small fw-medium" href="{{route('Conflict-Resolution')}}">Read More<i
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
                            <h4 class="mb-3">Educational Initiatives </h4>
                            <p style="text-align: justify">We provide scholarships, school supplies, and mentorship programs to children and young adults, helping them access quality education and unlock their full potential....</p>
                            <a class="small fw-medium" href="{{route('Social-Justice')}}">Read More<i
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
                            <h4 class="mb-3">Women’s Empowerment</h4>
                            <p style="text-align: justify">We offer training and support to women in various skill-based industries, fostering economic independence and leadership within their communities....</p>
                            <a class="small fw-medium" href="{{route('Political-Advocacy')}}">Read More<i
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
                            <h4 class="mb-3">Livelihood Projects</h4>
                            <p style="text-align: justify">Nakakeeto Foundation promotes sustainable farming, small business development, and entrepreneurship, creating employment opportunities for families and individuals....</p>
                            <a class="small fw-medium" href="{{route('Human-Rights-Advocacy')}}">Read More<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/img/img-600x400-5.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class='fas fa-smog fa-3x'></i>
                            </div>
                            <h5 class="mb-3">Community Development </h5>
                            <p style="text-align: justify">Through infrastructure development, water sanitation projects, and youth programs, we work hand in hand with communities to create an environment where everyone can thrive...</p>
                            <a class="small fw-medium" href="{{route('Natural-Resource-Management')}}">Read More<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

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
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-1.jpg"
                            alt="Partner 1">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>The Nakakeeto Foundation collaborates with leading healthcare organizations to improve
                                maternal and infant health. Our partnerships ensure that we provide comprehensive
                                support and resources to those in need.</p>
                            <h5 class="mb-1">Dr. Emily Johnson</h5>
                            <span class="fst-italic">Director of Health Services, Health Alliance</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-2.jpg"
                            alt="Partner 2">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Our foundation is grateful for the support from various community organizations that help
                                us reach more families and provide essential services and education.</p>
                            <h5 class="mb-1">Carlos Martinez</h5>
                            <span class="fst-italic">Executive Director, Community Outreach Network</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-3.jpg"
                            alt="Partner 3">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Our work is enhanced by the contributions of philanthropic leaders who are committed to
                                improving global health outcomes and supporting our mission.</p>
                            <h5 class="mb-1">Lisa Thompson</h5>
                            <span class="fst-italic">Founder, Global Health Initiative</span>
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
                        <h2 class="mb-4 text-primary">Send us a message </h2>
                        <p class="mb-4 pb-2" style="text-align: justify;">we provide a 24/7 quick response, in case of
                            any query, support, membership, consultation or any other issue, send us a message we shall
                            respond to you as soon as possible</p>
                        <form action="{{route('send-message')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" class="form-control border-0" placeholder="Your Name"
                                        style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control border-0"
                                        placeholder="Your Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="phonenumber" class="form-control border-0"
                                        placeholder="Your Mobile" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" name="service" required>
                                        <option selected>Select A Service</option>
                                        <option name="service" value="1">conflict resolution</option>
                                        <option name="service" value="2">social justice</option>
                                        <option name="service" value="3">political Advocacy</option>
                                        <option name="service" value="4">Human rights Advocacy</option>
                                        <option name="service" value="5">Natural Resource Management</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" name="message" placeholder="Special Note"
                                        required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="text-primary">Testimonials</h4>
                <h1 class="mb-4">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-1.jpg"
                            alt="Testimonial 1">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>"The Nakakeeto Foundation's support has been transformative for our community. Their
                            comprehensive maternal and infant care programs have made a significant difference in the
                            lives of many families."</p>
                        <h5 class="mb-1">Dr. Jane Smith</h5>
                        <span class="fst-italic">Pediatrician, Local Clinic</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-2.jpg"
                            alt="Testimonial 2">
                            <div class="btn-square rounded-circle" style="background-color:purple;">
                                <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>"Nakakeeto Foundation's outreach programs have been a beacon of hope. Their dedication to
                            improving maternal health and providing essential resources is truly commendable."</p>
                        <h5 class="mb-1">Sarah Johnson</h5>
                        <span class="fst-italic">Community Outreach Coordinator</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-3.jpg"
                            alt="Testimonial 3">
                            <div class="btn-square rounded-circle" style="background-color:purple;">
                                <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>"Working with the Nakakeeto Foundation has been an incredible experience. Their commitment to
                            improving health outcomes and their compassionate approach have greatly impacted our work."
                        </p>
                        <h5 class="mb-1">Michael Brown</h5>
                        <span class="fst-italic">Executive Director, Health Partnership Group</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->

    @include('layouts.Footer')