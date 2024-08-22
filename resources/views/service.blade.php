@include('layouts.header')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
    </div>
</div>
<!-- Page Header End -->

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
                        <p style="text-align: justify">Our healthcare programs focus on offering medical assistance to
                            underserved communities, including health camps, vaccinations, maternal care, and mental
                            health support....</p>
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
                        <p style="text-align: justify">We provide scholarships, school supplies, and mentorship programs
                            to children and young adults, helping them access quality education and unlock their full
                            potential....</p>
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
                        <p style="text-align: justify">We offer training and support to women in various skill-based
                            industries, fostering economic independence and leadership within their communities....</p>
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
                        <p style="text-align: justify">Nakakeeto Foundation promotes sustainable farming, small business
                            development, and entrepreneurship, creating employment opportunities for families and
                            individuals....</p>
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
                        <p style="text-align: justify">Through infrastructure development, water sanitation projects,
                            and youth programs, we work hand in hand with communities to create an environment where
                            everyone can thrive...</p>
                        <a class="small fw-medium" href="{{route('Natural-Resource-Management')}}">Read More<i
                                class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->


<!-- Quote Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-12 quote-text py-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h1 class="mb-4">Send us a message </h1>
                    <p class="mb-4 pb-2" style="text-align: justify;">we provide a 24/7 quick response, in case of any
                        query, support, membership, consultation or any other issue, send us a message we shall respond
                        to you as soon as possible</p>
                    <form action="{{route('send-message')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" name="name" class="form-control border-0" placeholder="Your Name"
                                    style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control border-0" placeholder="Your Email"
                                    style="height: 55px;" required>
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


@include('layouts.Footer')