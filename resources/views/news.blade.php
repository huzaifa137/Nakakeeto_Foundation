<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nakakeeto Foundation</title>
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
                    <small style="color: #a8a1a1";>P.O. Box 24960, Kampala, Uganda</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small style="color: #a8a1a1";>Mon - Fri : 09.00 AM - 06.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small style="color: #a8a1a1";>+256772308110, +256755449503</small>
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
            <h2 class="m-0 text-primary"> <img class="logo_resize" src="/assets/img/Logo.png" alt=""> </h2>
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
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">News</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <style>
        .collapsible {
            background-color: purple;
            color: white;
            cursor: pointer;
            padding: 10px;
            width: 100%;
            border: 2px solid white;
            text-align: left;
            outline: none;
            font-size: 15px;
            border-radius: 5px;
        }

        .collapsible:hover {
            background-color: purple;
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: rgb(192, 181, 192);
        }

        .image-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .image {
            width: 30%;
            height: auto;
            border-radius: 5px;
        }


        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }

        h1,
        h2,
        h3 {
            color: #2c3e50;
        }

        .quote {
            font-style: italic;
            color: #555;
            margin: 10px 0;
            padding-left: 10px;
            border-left: 2px solid #2c3e50;
        }

        ul {
            margin: 10px 0;
        }
    </style>

    <!-- Patterners Start -->

    <div class="container-xxl py-5">
        <div class="container">

            <h1 style="text-align: center;">News</h1>
            <button class="collapsible">1.NoviGuide</button>
            <div class="content">
                <h1>Revolutionizing Neonatal Care in Uganda: The Journey of NoviGuide with Nakakeeto Foundation</h1>

                <p>In Uganda, where healthcare systems face immense challenges, neonatal care remains a vital yet
                    underserved area. Through a partnership between the Nakakeeto Foundation and Global Strategies, a
                    U.S.-based non-profit dedicated to health innovations, a transformative digital tool called
                    NoviGuide
                    has been introduced. This collaboration represents a pioneering effort to integrate digital health
                    solutions into Uganda’s neonatal care, empowering healthcare workers with real-time, guided support
                    as
                    they care for the country’s smallest and most vulnerable patients.</p>

                <h2>What is NoviGuide?</h2>
                <p>NoviGuide, developed by Global Strategies, is a clinical decision support tool tailored specifically
                    for
                    neonatal care. Available as a tablet-based application, NoviGuide provides step-by-step clinical
                    guidance that aligns with evidence-based neonatal protocols. It offers automated calculations for
                    medications, fluids, and feeds, and instructional videos to support both healthcare providers and
                    mothers. Through this innovative tool, providers can adhere to best practices confidently, even in
                    facilities with limited resources.</p>

                <div class="quote">
                    <p>“NoviGuide bridges a critical gap in neonatal healthcare. By offering consistent, expert
                        guidance, it
                        has transformed how newborn care is delivered, especially in remote facilities where experienced
                        neonatal staff may not always be available.” – Dr. Margaret Nakakeeto</p>
                </div>

                <h2>The Partnership: Nakakeeto Foundation and Global Strategies</h2>
                <p>Nakakeeto Foundation and Global Strategies joined forces with a shared vision: to improve neonatal
                    outcomes in Uganda through advanced digital solutions. The foundation, working closely with the
                    Ugandan
                    Ministry of Health, has been essential in implementing NoviGuide across the country, ensuring that
                    healthcare providers at all levels can utilize this tool to enhance their work. This collaboration
                    has
                    brought NoviGuide to 34 health facilities across the West Nile, Rwenzori, and Eastern regions,
                    including
                    key sites like Arua Regional Referral Hospital, Moyo General Hospital, Yumbe Regional Referral
                    Hospital,
                    and Koboko General Hospital.</p>

                <p>Together, these organizations have made an invaluable contribution to neonatal health in Uganda by
                    providing more than 10,000 guided assessments, ensuring accurate, consistent care for newborns.</p>

                <div class="image-container">
                    <img src="/assets/img/NEWS/NoviGuide/4.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/News/NoviGuide/7.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/News/NoviGuide/8.jpg" alt="Image 1" class="image">
                </div>

                <br>

                <h2>Achievements: Impact and Success Stories</h2>
                <p>Since its launch, NoviGuide has had a profound impact on neonatal care in Uganda, with achievements
                    such
                    as:</p>
                <ul>
                    <li><strong>Expanding Reach to Underserved Areas:</strong> By implementing NoviGuide across 34
                        facilities, we have made high-quality neonatal care more accessible, even in rural and
                        hard-to-reach
                        locations.</li>
                    <li><strong>Building Capacity and Confidence:</strong> Through training sessions facilitated by the
                        Nakakeeto Foundation and Global Strategies, healthcare workers have learned to confidently use
                        NoviGuide, empowering them to provide accurate care.</li>
                    <li><strong>Enhanced Neonatal Outcomes:</strong> With standardized guidance, providers can now
                        deliver
                        timely, evidence-based care that reduces the risks associated with neonatal health
                        complications.
                        This has led to significant improvements in neonatal outcomes across participating facilities.
                    </li>
                </ul>

                <div class="quote">
                    <p>“With NoviGuide, I am more confident in caring for critically ill newborns. The step-by-step
                        guidance
                        is invaluable, especially in emergencies.” – A nurse at Arua Regional Referral Hospital</p>
                </div>

                <h2>Looking Ahead: NoviGuide’s Future in Uganda</h2>
                <p>Building on the successes of NoviGuide, the Nakakeeto Foundation is committed to expanding this
                    tool’s
                    reach even further. In 2025, the foundation plans to bring NoviGuide to additional districts,
                    enhancing
                    neonatal care for an even broader population. Key objectives for the future include:</p>
                <ul>
                    <li><strong>Expanding Community Engagement:</strong> Educating communities on neonatal health and
                        the
                        benefits of early, quality care.</li>
                    <li><strong>Ongoing Training and Mentorship:</strong> Providing continuous training to ensure every
                        healthcare provider is confident in using NoviGuide.</li>
                    <li><strong>Strengthening Research Efforts:</strong> Collaborating on studies that measure
                        NoviGuide’s
                        impact, identifying areas for improvement, and expanding its scope to include pediatric care.
                    </li>
                </ul>

                <div class="quote">
                    <p>“Every visit to our facilities is a reminder of why NoviGuide is so vital. It’s not just a tool;
                        it’s
                        an assurance that our healthcare providers can give these newborns the best chance at life.” –
                        Henry
                        Waligo, Project Manager of NoviGuide Uganda</p>
                </div>

                <h2>Voices from the Field</h2>
                <p>Feedback from healthcare workers underscores NoviGuide’s significance:</p>
                <ul>
                    <li>A midwife from Nebbi General Hospital shared, “Before NoviGuide, managing medications for
                        newborns
                        was challenging. The app calculates exact dosages, reducing our stress and increasing our
                        accuracy.”
                    </li>
                    <li>In Koboko General Hospital, a nurse observed, “NoviGuide has transformed our care process. We’re
                        now
                        able to provide quick, precise care, even during busy times.”</li>
                </ul>

                <h2>Conclusion: Transforming Lives, One Newborn at a Time</h2>
                <p>The partnership between the Nakakeeto Foundation and Global Strategies has brought forth a
                    much-needed
                    resource in Uganda’s neonatal care landscape. NoviGuide is more than an app; it’s a lifeline that
                    has
                    transformed care practices, empowered healthcare workers, and provided countless newborns with a
                    fighting chance. As we continue to expand, the future looks promising for newborn health in Uganda
                    and,
                    one day, perhaps across Africa.</p>


                <div class="image-container">
                    <img src="/assets/img/NEWS/NoviGuide/Cover Photo.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/News/NoviGuide/IMG_20240120_095139_123.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/News/NoviGuide/1.jpg" alt="Image 1" class="image">
                </div>

                <div class="image-container">
                    <img src="/assets/img/NEWS/NoviGuide/2.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/News/NoviGuide/3.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/NEWS/NoviGuide/4.jpg" alt="Image 1" class="image">
                </div>

                <br>

            </div>

            <button class="collapsible">2.vENC</button>
            <div class="content">
                <h1>vENC Project Empowers Newborn Care in West Nile Region, Uganda</h1>

                <p>The Nakakeeto Foundation has taken an impactful step towards advancing neonatal healthcare in Uganda
                    with
                    the introduction of the Virtual Essential Newborn Care (vENC) training program, implemented
                    initially in
                    the West Nile region. This pioneering initiative aims to enhance the skills of healthcare providers
                    in
                    essential newborn care through an innovative virtual reality (VR) approach. The project, developed
                    by
                    the University of Washington, brings cutting-edge training solutions to rural and urban healthcare
                    facilities in Uganda, with promising results. With the support of local health professionals,
                    Nakakeeto
                    Foundation representatives, and project coordinator Waligo Henry, the initial training sessions laid
                    the
                    groundwork for long-term improvements in newborn care.</p>

                <h2>Dr. Rachel Umoren's Visit</h2>
                <p>In June 2024, after months of training healthcare workers at Moyo General Hospital, Yumbe Regional
                    Referral Hospital, and Koboko General Hospital, the Nakakeeto Foundation proudly welcomed Dr. Rachel
                    Umoren, a distinguished neonatal healthcare expert from the University of Washington and one of the
                    primary architects of the vENC program. Dr. Umoren visited the West Nile region to observe firsthand
                    how
                    the vENC tool has been implemented in Uganda and to assess its impact on healthcare delivery in some
                    of
                    the region's most essential healthcare facilities.</p>

                <p>During the visit, Dr. Umoren was joined by Prof. Chinyere Ezeaka, a renowned pediatrician from
                    Nigeria,
                    Waligo Henry, and Dr. Margaret Nakakeeto, President of the Nakakeeto Foundation. The team embarked
                    on a
                    comprehensive journey through the West Nile, traveling hundreds of kilometers to meet healthcare
                    teams,
                    observe clinical interactions, and listen to feedback from vENC users. Their journey included visits
                    to
                    Moyo General Hospital, Yumbe Regional Referral Hospital, and Koboko General Hospital, where
                    healthcare
                    providers shared their experiences of using the vENC tool in everyday practice.</p>

                <h2>Transformative Impact of vENC Training in West Nile</h2>
                <p>The vENC training provides healthcare workers, especially midwives and nurses, with essential skills
                    in
                    managing newborn care emergencies. Through virtual simulations, healthcare providers experience
                    real-life scenarios and practice critical procedures like neonatal resuscitation, infection
                    prevention,
                    and mother-infant bonding.</p>

                <p>Early feedback from the three sites indicates significant improvements in newborn care practices.
                    Staff
                    members report greater confidence in performing life-saving procedures, improved resuscitation
                    rates,
                    and enhanced patient communication. The tool has also encouraged the integration of best practices,
                    such
                    as skin-to-skin contact for newborns and continuous hand hygiene, further helping to reduce neonatal
                    mortality rates.</p>

                <h2>Dr. Rachel Umoren’s Visit Highlights vENC’s Successes and Next Steps</h2>
                <p>Dr. Umoren’s visit underscored the effectiveness of the vENC tool in strengthening essential newborn
                    care
                    skills among Ugandan healthcare providers. Her engagement with the local teams allowed for in-depth
                    discussions around the program’s benefits and challenges. Dr. Umoren observed the program’s positive
                    impact on reducing stress among midwives, increasing attention to neonatal emergencies, and
                    standardizing care practices.</p>

                <p>The Nakakeeto Foundation has expressed its commitment to expanding the program to additional
                    facilities
                    throughout the West Nile and beyond. Plans for the next phase of the project include addressing
                    technical challenges identified by staff, including device compatibility, and exploring options for
                    a
                    reset feature in the vENC app, allowing users to practice skills continuously after completing all
                    levels.</p>

                <h2>Empowering Ugandan Healthcare Workers for a Healthier Tomorrow</h2>
                <div class="quote">
                    <p>“The vENC program has empowered our healthcare teams with skills that go beyond conventional
                        training. We’re incredibly proud of our teams in Moyo, Yumbe, and Koboko for their dedication,
                        and
                        we look forward to expanding this program to further improve healthcare outcomes for mothers and
                        newborns across Uganda.” – Dr. Margaret Nakakeeto</p>
                </div>

                <div class="image-container">
                    <img src="/assets/img/NEWS/vENC/2.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/News/vENC/3.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/News/vENC/4.jpg" alt="Image 1" class="image">
                </div>

                <div class="image-container">
                    <img src="/assets/img/NEWS/vENC/5.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/News/vENC/6.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/NEWS/vENC/7.jpg" alt="Image 1" class="image">
                </div>

                <div class="image-container">
                    <img src="/assets/img/NEWS/vENC/8.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/News/vENC/9.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/NEWS/vENC/10.jpg" alt="Image 1" class="image">
                </div>

                <br>
            </div>

            <button class="collapsible">3.Prof Yvonnes visit</button>
            <div class="content">
                <h1>Enhancing Neonatal Healthcare in Uganda’s West Nile Region</h1>

                <p>In a groundbreaking visit, Professor Yvonne Vaucher, a neonatology expert from the University of
                    California, San Diego, partnered with Dr. Margaret Nakakeeto and the Nakakeeto Foundation to improve
                    neonatal healthcare across Uganda’s West Nile region. Between March 25 and March 29, 2024, Prof.
                    Vaucher
                    delivered lectures and hands-on training in six hospitals, imparting specialized knowledge on
                    high-risk
                    infant neurodevelopment and follow-up care to over 100 healthcare providers.</p>

                <p>The journey spanned Nebbi, Arua, Koboko, Yumbe, Moyo, and Adjumani General Hospitals, where Prof.
                    Vaucher
                    provided critical insights into improving neonatal care practices, ensuring long-term health
                    outcomes
                    for high-risk infants. At each location, she conducted rigorous inspections of NICUs and Kangaroo
                    Mother
                    Care rooms, offering feedback and practical solutions.</p>

                <p>Her sessions not only addressed immediate neonatal care but also introduced sustainable follow-up
                    practices crucial for identifying developmental challenges early. During these sessions, Prof.
                    Vaucher
                    emphasized the importance of teamwork among healthcare providers, fostering collaboration across
                    departments and encouraging active learning through interactive demonstrations and case discussions.
                </p>

                <p>The visit's impact was amplified by the support of Health Volunteers Overseas (HVO), which provided
                    training materials and resources, furthering the region's healthcare capacity. The Nakakeeto
                    Foundation's ongoing commitment to healthcare in underserved regions aligns with HVO's mission,
                    fostering a long-term approach to neonatal health in Uganda.</p>

                <div class="image-container">
                    <img src="/assets/img/NEWS/ProfYvonnesvisit/IMG_1877.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/News/ProfYvonnesvisit/IMG_1310.jpg" alt="Image 1" class="image">
                    <img src="/assets/img/News/ProfYvonnesvisit/IMG_1531.jpg" alt="Image 1" class="image">
                </div>


                <div class="image-container">
                    <img src="/assets/img/NEWS/ProfYvonnesvisit/IMG_1714.jpg" alt="Image 1" class="image">
                </div>

                <br>
            </div>

            <script>
                const collapsibles = document.querySelectorAll(".collapsible");
                collapsibles.forEach(button => {
                    button.addEventListener("click", function() {
                        this.classList.toggle("active");
                        const content = this.nextElementSibling;
                        if (content.style.display === "block") {
                            content.style.display = "none";
                        } else {
                            content.style.display = "block";
                        }
                    });
                });
            </script>
        </div>
    </div>
    </div>


    <!-- Patterners End -->

    @include('layouts.Footer')
