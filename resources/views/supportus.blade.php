@include('layouts.header')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Support Us</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Membership Start -->

<div class="border form-container" style="margin: 0 auto; max-width: 800px;">
    <h1 class="mb-4 text-primary text-center">Support Us</h1>
    <p class="mb-4 text-center">Help us make a difference! Choose from giving options:</p>
    
    <form method="post" action="{{ route('send-message2') }}">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    <label for="name">Your Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                    <label for="email">Your Email</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Reason for Donation" required>
                    <label for="subject">Reason for Donation</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <select name="amount" class="form-control" required>
                        <option value="">-- Select Amount --</option>
                        <option value="$10">$10</option>
                        <option value="$20">$20</option>
                        <option value="$50">$50</option>
                        <option value="$100">$100</option>
                        <option value="$300">$300</option>
                    </select>
                    <label for="amount">Select Amount</label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary rounded-pill py-3 px-5 d-block mx-auto" type="submit">
                    <i class="fas fa-donate"></i> Donate
                </button>
            </div>
        </div>
    </form>

    <p class="mt-4 text-center"><b class="text-primary">Giving Email:</b> giving@nakakeetofoundation.org</p>

</div>

<!-- Member ship End -->

@include('layouts.Footer')
