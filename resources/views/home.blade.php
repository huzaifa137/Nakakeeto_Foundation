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
            <a href="{{route('contact')}}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block me-2">CONTACT
                US<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    @include('includes.message')

    @if (Session::get('fail'))
    <div class="alert alert-danger">
        {{Session::get('fail')}}
    </div>
    @endif



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
                        <h2 style="text-align: justify" class="mb-4">2+ Years’ Experience of a diverse network of
                            advocates and activists</h2>
                        <p style="text-align: justify">Welcome to Women Defending Democracy, a diverse network of
                            advocates and activists from the Great Lakes region and diaspora. We are committed to
                            supporting inclusive democratic processes and preventing violent conflicts resulting from
                            flawed democracies.</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Strengthening capacities for women in
                            peace processes </p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Inclusion of women-specific issues in
                            conflict prevention</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>promoting inclusive democratic processes,
                            peace, and security</p>
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
                    <h5 class="mb-3">Our Vision</h5>
                    <span>Our vision is a transformed society where democracy is inclusive, and women's voices are heard
                        and valued.</span>
                </div>


                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.7s" style="text-align: justify">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Our Mission</h5>
                    <span>Our mission is to empower women to participate meaningfully in democratic processes through
                        strategic advocacy, capacity strengthening, institutional development, and partnerships in the
                        implementation of commitments made on peace, security, and development.</span>
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
                        {{-- <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                            diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                            erat amet</p> --}}
                        <p class="mb-2 pb-2" style="text-align: justify"><i
                                class="fa fa-check-circle text-primary me-3"></i>To support the implementation of
                            policies and commitments on women’s participation in peace processes through strategic
                            advocacy.</p>
                        <p class="mb-2 pb-2" style="text-align: justify"><i
                                class="fa fa-check-circle text-primary me-3"></i>To strengthen capacities for women in
                            Track 1,2, and 3 mediation to ensure the meaningful participation of women at all levels in
                            peace processes and promote the inclusion of women-specific issues in conflict prevention,
                            mediation, and peace processes.</p>
                        <p class="mb-2 pb-2" style="text-align: justify"><i
                                class="fa fa-check-circle text-primary me-3"></i>To support institutional development,
                            including resource mobilization, human resources, governance systems, maintaining a robust
                            monitoring, evaluation, accountability learning system, and ensuring sustainability.</p>
                        <p class="mb-2 pb-2" style="text-align: justify"><i
                                class="fa fa-check-circle text-primary me-3"></i>To establish partnerships with
                            like-minded national, regional, and international institutions, networks and academia,
                            private sector, and media on advocacy, research, and knowledge exchange.</p>
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
                    <h5 class="mb-3">Happy Customers</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">4234</h1>
                    </div>
                    <h5 class="mb-3">Project Done</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">3123</h1>
                    </div>
                    <h5 class="mb-3">Awards Win</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">1831</h1>
                    </div>
                    <h5 class="mb-3">Expert Workers</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Counter End  -->


    <!-- Service Start -->
    <div class="container-xxl py-2">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="text-primary">Our Services</h4>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/img/img-600x400-1.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fas fa-heart fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Conflict Resolution</h4>
                            <p style="text-align: justify">Conflict resolution is the process of resolving disputes or
                                disagreements between...</p>
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
                            <h4 class="mb-3">Social Justice</h4>
                            <p style="text-align: justify">Social justice refers to the fair and equitable distribution
                                of resources, opportunities...</p>
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
                            <h4 class="mb-3">Political Advocacy</h4>
                            <p style="text-align: justify">Political advocacy involves promoting a particular political
                                agenda or cause through...</p>
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
                            <h4 class="mb-3">Human Rights Advocacy</h4>
                            <p style="text-align: justify">Human rights advocacy involves promoting and defending the
                                rights of individuals...</p>
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
                            <h5 class="mb-3">Natural Resource Management</h5>
                            <p style="text-align: justify">Natural resource management involves the sustainable use and
                                conservation of natural...</p>
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
                <h1 class="mb-4">Our Patterners </h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-1.jpg">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                                Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                                justo sea clita.</p>
                            <h5 class="mb-1">Client Name</h5>
                            <span class="fst-italic">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-2.jpg">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                                Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                                justo sea clita.</p>
                            <h5 class="mb-1">Client Name</h5>
                            <span class="fst-italic">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-3.jpg">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-handshake" style="color: #FFF;"></i>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                                Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                                justo sea clita.</p>
                            <h5 class="mb-1">Client Name</h5>
                            <span class="fst-italic">Profession</span>
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
                        <h6 class="text-primary">Talk to us anytime</h6>
                        <h1 class="mb-4">Send us a message </h1>
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
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-1.jpg">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-2.jpg">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="/assets/img/testimonial-3.jpg">
                        <div class="btn-square rounded-circle" style="background-color:purple;">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    @include('layouts.Footer')