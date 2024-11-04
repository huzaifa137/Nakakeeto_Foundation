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
                        <h4 class="mb-3">Health and Technology:  </h4>
                        <p style="text-align: justify">Using technology to advance healthcare solutions and improve patient outcomes.</p>
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
                        <h4 class="mb-3">Education and Training </h4>
                        <p style="text-align: justify">Supporting educational opportunities for children and adults to empower communities.</p>
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
                        <h4 class="mb-3">Outreach Programs</h4>
                        <p style="text-align: justify">Conducting community-based programs to address immediate needs and promote long-term health.</p>
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
                        <h4 class="mb-3">Additional Initiatives</h4>
                        <p style="text-align: justify">Providing resources for skills development, community health assessments, and environmental stewardship.</p>
                        <a class="small fw-medium" href="{{route('Human-Rights-Advocacy')}}">Read More<i
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





@include('layouts.Footer')