@include('layouts.header')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Membership Start -->

<div class="custom-border form-container" style="margin: 0 auto; max-width: 800px;">
    <h1 class="mb-4 text-primary text-center">Join Membership</h1>
    <p class="mb-4 text-justify">
        We provide a 24/7 quick response. In case of any query, support, membership, consultation, or any other issue,
        send us a message and we shall respond to you as soon as possible.
    </p>

    <form method="post" action="{{ route('send-message2') }}">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                        required>
                    <label for="name">Your Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email"
                        required>
                    <label for="email">Your Email</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject"
                        required>
                    <label for="subject">Subject</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <select name="membership" id="membership" class="form-control" required>
                        <option value="">-- Select Membership --</option>
                        <option value="Volunteer">1. Volunteer</option>
                        <option value="Partner">2. Partner</option>
                    </select>
                    <label for="membership">Select Membership</label>
                </div>
            </div>
            <!-- Include Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

            <div class="col-12">
                <button class="btn btn-primary btn-sm rounded-pill py-3 px-5 d-block mx-auto" type="submit">
                    <i class="fa fa-paper-plane"></i> Send Message
                </button>
            </div>

        </div>
    </form>
</div>



<!-- Member ship End -->

<!-- Contact Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-4 pe-lg-4"
                    style="background-color: #ffffff; border-radius: 8px; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);">
                    <h1 class="mb-4 text-primary text-center">Contact Us</h1>
                    <p class="mb-4" style="text-align: justify;">We provide a 24/7 quick response. In case of any
                        query, support, membership, consultation, or any other issue, send us a message, and we shall
                        respond to you as soon as possible.</p>
                    <form method="post" action="{{ route('send-message2') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="subject"
                                        placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px"
                                        required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">
                                    <i class="fa fa-paper-plane"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423788.18345721766!2d32.362596671470014!3d0.3475964163324696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177db3a4aef3b5b7%3A0x1f8d47411a7b0b6a!2sKampala%2C%20Uganda!5e0!3m2!1sen!2sbd!4v1630872906954!5m2!1sen!2sbd"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact End -->

@include('layouts.Footer')
