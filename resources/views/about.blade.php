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

    .bold-heading {
        font-weight: bold;
        /* text-align: justify; */
    }
</style>

<!-- Carousel container -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">

        <!-- First carousel item -->
        <div class="carousel-item active">
            <img src="/assets/img/about.jpg" class="d-block w-100" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-3 text-primary mb-3 animated slideInDown">About <span class="text-primary">Us</span>
                </h1>
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
                    <h1 class="mb-4">About Nakakeeto Foundation </h1>
                    <p>Nakakeeto Foundation is a dedicated non-profit organization committed to supporting pregnant
                        women, new mothers, and their newborn babies. Founded with a vision of nurturing life and
                        empowering families, our mission is to ensure that every mother and child receives the care,
                        resources, and support they need to thrive during one of the most critical stages of life.</p>

                    <strong>
                        <p class="text-primary">Our Mission</p>
                    </strong>
                    <p>At Nakakeeto Foundation, our mission is to improve maternal and infant health by providing
                        comprehensive healthcare services, emotional support, and educational resources. We aim to
                        empower mothers with the knowledge and tools they need to make informed decisions about their
                        health and their children's well-being. Through our programs, we strive to create a world where
                        every pregnancy is healthy, every mother is supported, and every newborn has a promising start.
                    </p>

                    <strong>
                        <p class="text-primary">Our History</p>
                    </strong>
                    <p style="text-align: justify">Founded in [Year], the Nakakeeto Foundation began with a simple yet
                        powerful goal: to address the gaps in maternal and infant care and support. Our founders, driven
                        by a passion for improving lives and a deep understanding of the challenges faced by families,
                        established the foundation to provide holistic care and support. Over the years, we have grown
                        into a respected organization, expanding our services and impact to reach more communities and
                        families in need.</p>

                    <strong>
                        <p class="text-primary">What We Do</p>
                    </strong>

                    <p><span class="bold-heading">1. Healthcare Services:</span> We partner with healthcare providers to
                        offer essential prenatal and postnatal care, including medical check-ups, screenings, and
                        emergency support. Our goal is to ensure that every mother and baby receives the medical
                        attention they need for a healthy start.</p>

                    <p><span class="bold-heading">2. Emotional and Psychological Support:</span> We offer counseling
                        services and support groups to help mothers navigate the emotional challenges of pregnancy and
                        postpartum life. Our services provide a safe space for mothers to share their experiences and
                        receive professional support.</p>

                    <p><span class="bold-heading">3. Educational Programs:</span> We conduct workshops and seminars on
                        various topics, including childbirth education, breastfeeding, newborn care, and parenting
                        skills. Our educational initiatives are designed to equip mothers with the knowledge and
                        confidence to care for themselves and their children.</p>

                    <p><span class="bold-heading">4. Nutritional Assistance:</span> We provide nutritional support
                        through food packages, supplements, and expert advice to ensure that mothers and their babies
                        receive the necessary nutrients for optimal health.</p>

                    <p><span class="bold-heading">5. Advocacy and Awareness:</span> We engage in advocacy efforts to
                        promote policies that improve maternal and infant health. Our awareness campaigns aim to educate
                        the public and raise support for critical issues affecting mothers and babies.</p>
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
                <span>To create a world where every pregnant woman, mother, and newborn baby receives the support, care,
                    and resources they need to thrive, ensuring a healthy start to life for every child and fostering
                    empowered, informed, and supported mothers.</span>
            </div>

            <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.7s" style="text-align: justify">
                <div class="d-flex flex-column align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle mb-3">
                        <i class="fa fa-users-cog text-white"></i>
                    </div>
                    <h5 class="mb-3 text-center">Our Mission</h5>
                </div>
                <span>To empower vulnerable communities by providing access to quality education, healthcare, and
                    livelihood opportunities, ensuring a brighter future for all.</span>
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

<!-- Core values End -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-4">Our Core Values</h1>
        </div>
        <div class="row g-4">

            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4" style="text-align: justify">
                        <p><span class="bold-heading">1.Compassion:</span> We believe in the power of kindness and
                            empathy. Our work is driven by a deep commitment to understanding and addressing the needs
                            of the communities we serve.</p>

                        <p><span class="bold-heading">2.Integrity:</span> We uphold honesty, transparency, and
                            accountability in all our actions. Trust is the foundation of our relationships with donors,
                            partners, and beneficiaries.</p>

                        <p><span class="bold-heading">3.Sustainability:</span> We are dedicated to creating long-term
                            solutions that promote self-sufficiency and positive change. We work towards sustainable
                            development that benefits future generations.</p>

                        <p><span class="bold-heading">4.Respect for Diversity:</span> We value diversity and believe in
                            inclusivity. We respect the unique backgrounds, cultures, and experiences of every
                            individual and aim to create an environment where everyone feels valued.</p>

                        <p><span class="bold-heading">5.Empowerment:</span> Our goal is to empower individuals and
                            communities, providing them with the tools, knowledge, and resources they need to thrive
                            independently.</p>

                        <p><span class="bold-heading">6.Collaboration:</span> We believe in the power of partnerships and
                            community involvement. By working together with individuals, organizations, and governments,
                            we can achieve greater impact.</p>
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
                        <p>Nakakeeto Foundation is always looking for passionate individuals and organizations to join
                            us in our mission to uplift communities. Whether you are a skilled professional, educator,
                            healthcare provider, or simply someone with a desire to make a difference, we have a place
                            for you.</p>

                        <p>We offer various opportunities for collaboration, from volunteer positions to full-time roles
                            in program management, fundraising, advocacy, and more. Join us in transforming lives and
                            contributing to lasting change.</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4" style="text-align: justify">
                        <h5 style="text-align: center">Our Membership</h5>
                        <p>Becoming a member of Nakakeeto Foundation means joining a network of like-minded individuals
                            and organizations committed to making a positive impact. Our members have the opportunity to
                            contribute to decision-making processes, participate in specialized training sessions, and
                            engage in meaningful community work.</p> <br> <br> <br>
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


<!-- Get involved Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-4">Get Involved</h1>
        </div>
        <div class="row g-4">

            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4" style="text-align: justify">
                        <p><span class="bold-heading">1.Donate:</span> <br> Your generous contributions help us continue
                            our mission to support those in need. Donate now to make a difference in the lives of
                            children, women, and families.</p>

                        <p><span class="bold-heading">2.Volunteer:</span> <br> Join us in making an impact by volunteering
                            your time and expertise. Whether you want to mentor, teach, or help with our healthcare
                            programs, your support is valuable.</p>

                        <p><span class="bold-heading">3.Partnerships:</span> <br> We welcome partnerships with
                            individuals, corporations, and other NGOs. Let’s work together to drive sustainable change.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Get involved End -->

@include('layouts.Footer')