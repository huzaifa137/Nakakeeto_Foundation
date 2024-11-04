<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6">
                <h5 class="text-white mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>P.O. Box 24960, Kampala, Uganda</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+256772308110, +256755449503</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@NakakeetoFoundation.org</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href="javascript:void(0);"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link" href="{{route('home')}}">Home</a>
                <a class="btn btn-link" href="{{route('about')}}">About Us</a>
                <a class="btn btn-link" href="{{route('service')}}">Our Services</a>
                <a class="btn btn-link" href="{{route('contact')}}">Contact Us</a>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p>Join our Newsletter to get weekly updates</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <form action="{{route('subscribe')}}" method="POST">
                        @csrf
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email" name="subscription_email" required>
                    <span class="text-danger">@error('subscription_email'){{$message}}@enderror</span>
                    <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a>NakakeetoFoundation.</a> All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://www.mentorhubtechnologies.com/" target="_blank">MentorHub Technologies</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#welcome_top" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/lib/wow/wow.min.js"></script>
<script src="/assets/lib/easing/easing.min.js"></script>
<script src="/assets/lib/waypoints/waypoints.min.js"></script>
<script src="/assets/lib/counterup/counterup.min.js"></script>
<script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
<script src="/assets/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="/assets/js/main.js"></script>
</body>

</html>