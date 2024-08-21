@include('layouts.header')
<!-- Page Header Start -->

<!-- <div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
    </div>
</div> -->

<style>
    .carousel-item {
        height: 60vh;
        /* Adjust this value to set the banner height */
    }

    .carousel-item img {
        height: 100%;
        object-fit: cover;
        /* Ensure the image covers the banner area */
    }

    .carousel-caption {
        bottom: 20px;
        /* Adjust as needed */
    }
</style>

<!-- Carousel container -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">

        <!-- First carousel item -->
        <div class="carousel-item active">
            <img src="/assets/img/about.jpg" class="d-block w-100" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            </div>
        </div>

        <!-- Second carousel item -->
        <div class="carousel-item">
            <img src="/assets/img/about2.jpg" class="d-block w-100" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Our Mission</h1>
            </div>
        </div>
    </div>

    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- Page Header End -->

<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-12 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">About Us</h6>
                    <h1 class="mb-4">About Women Defending Democracy</h1>
                    <strong>
                        <p class="text-primary">Our History</p>
                    </strong>
                    <p style="text-align: justify">Women Defending Democracy (WODD) is a voluntary organization
                        comprising Women Democracy Defenders from the Great Lakes region and diaspora. We advocate for
                        inclusive democratic processes, peace, and security.</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Strengthening capacities for women in peace
                        processes</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Inclusion of women-specific issues in
                        conflict prevention</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>promoting inclusive democratic processes,
                        peace, and security</p>
                    <a href="{{route('contact')}}" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Contact Us</a>
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
            <h2>Our Mission and Vision</h2>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="text-align: justify">
                <div class="d-flex flex-column align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle mb-3">
                        <i class="fa fa-users text-white"></i>
                    </div>
                    <h5 class="mb-3 text-center">Our Vision</h5>
                </div>
                <span>Our vision is a transformed society where democracy is inclusive, and women's voices are heard and
                    valued.</span>
            </div>

            <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.7s" style="text-align: justify">
                <div class="d-flex flex-column align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle mb-3">
                        <i class="fa fa-users-cog text-white"></i>
                    </div>
                    <h5 class="mb-3 text-center">Our Mission</h5>
                </div>
                <span>Our mission is to empower women to participate meaningfully in democratic processes through
                    strategic advocacy, capacity strengthening, institutional development, and partnerships in the
                    implementation of commitments made on peace, security, and development.</span>
            </div>

        </div>
    </div>
</div>

<!-- Feature Start -->


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

<!-- Core values End -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-4">Our Core Values</h1>
        </div>
        <div class="row g-4">


            <!-- <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4" style="text-align: justify">
                        <p><strong>Humanitarian Principles and Do No Harm:</strong> We are guided by the humanitarian principles of humanity, impartiality, neutrality, and independence. We are committed to ethical and responsible actions and activities in
                            the service of communities and people.</p>

                        <p><strong>Enabling Environment:</strong> We believe in an enabling environment as common ground for local and international NGOs to operate.</p>

                        <p><strong>Identity and Collective Action:</strong> We will build and nurture the identity and power of collective action of NGOs to achieve common goals. In all our actions, we strive to develop people's capacity and confidence to
                            increase the strength of individuals and communities.</p>

                        <p><strong>Improvement and Quality Services:</strong> We are committed to continued improvement and delivery of high-quality services to our members.</p>

                        <p><strong>Transparency & Accountability:</strong> Through our policies and procedures, and in all our actions, we ensure we are transparent and accountable, answering to our partners, membership, and stakeholders.</p>

                    </div>
                </div>
            </div> -->

            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4" style="text-align: justify">
                        <ol>
                            <li><strong>Humanitarian Principles and Do No Harm:</strong> We are guided by the
                                humanitarian principles of humanity, impartiality, neutrality, and independence. We are
                                committed to ethical and responsible actions and activities in the service of
                                communities and people.</li>

                            <li><strong>Enabling Environment:</strong> We believe in an enabling environment as common
                                ground for local and international NGOs to operate.</li>

                            <li><strong>Identity and Collective Action:</strong> We will build and nurture the identity
                                and power of collective action of NGOs to achieve common goals. In all our actions, we
                                strive to develop people's capacity and confidence to increase the strength of
                                individuals and communities.</li>

                            <li><strong>Improvement and Quality Services:</strong> We are committed to continued
                                improvement and delivery of high-quality services to our members.</li>

                            <li><strong>Transparency & Accountability:</strong> Through our policies and procedures, and
                                in all our actions, we ensure we are transparent and accountable, answering to our
                                partners, membership, and stakeholders.</li>
                        </ol>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Core values End -->



<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-4">Work and Membership</h1>
        </div>
        <div class="row g-4">


            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    {{--
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="/assets/img/team-1.jpg" alt="">
                        <div class="team-social w-25">
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fas fa-regular fa-phone"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div> --}}
                    <div class="p-4" style="text-align: justify">
                        <h5 style="text-align: center">Our Work</h5>
                        <span>We support the implementation of policies and commitments on women’s participation in
                            peace processes through strategic advocacy. We also strengthen capacities for women in
                            mediation, negotiation, conflict resolution, and peace processes to ensure their meaningful
                            participation and promote the inclusion of women-specific issues in conflict prevention,
                            mediation, and peace processes</span>
                    </div>
                </div>
            </div>



            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded overflow-hidden">
                    {{--
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="/assets/img/team-2.jpg" alt="">
                        <div class="team-social w-25">
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fas fa-regular fa-phone"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div> --}}
                    <div class="p-4" style="text-align: justify">
                        <h5 style="text-align: center">Our Membership</h5>
                        <span>Our membership consists of Women Democracy Defenders who express interest, are accredited
                            by the Board of Directors, and upon payment of a pre-determined membership fee. We also
                            recognize associate members and honorary members.</span> <br> <br> <br>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Team End -->


<!-- Team Members Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-4">Experienced Team Members</h1>
        </div>
        <div class="row g-4">


            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="/assets/img/team-3.jpg" alt="">
                        <div class="team-social w-25">
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="/assets/img/team-3.jpg" alt="">
                        <div class="team-social w-25">
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="/assets/img/team-3.jpg" alt="">
                        <div class="team-social w-25">
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="/assets/img/team-3.jpg" alt="">
                        <div class="team-social w-25">
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Team Members End -->

@include('layouts.Footer')