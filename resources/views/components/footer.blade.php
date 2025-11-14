<footer class="bg-dark text-white py-5 mt-5">
  <div class="container-xxl">
    <div class="row g-4 mb-4">
      <!-- About Column -->
      <div class="col-md-3">
        <h6 class="fw-bold mb-3">About GCSAK</h6>
        <p class="small text-muted">
          The Great Contractors and Suppliers Association Of Kenya unites professionals in the engineering and construction industry.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-3">
        <h6 class="fw-bold mb-3">Quick Links</h6>
        <ul class="list-unstyled small">
          <li class="mb-2"><a href="{{ route('about.who') }}" class="text-muted text-decoration-none">About Us</a></li>
          <li class="mb-2"><a href="{{ route('membership.become') }}" class="text-muted text-decoration-none">Membership</a></li>
          <li class="mb-2"><a href="{{ route('media.events') }}" class="text-muted text-decoration-none">Events</a></li>
          <li class="mb-2"><a href="{{ route('connect.jobs') }}" class="text-muted text-decoration-none">Jobs</a></li>
        </ul>
      </div>

      <!-- Resources -->
      <div class="col-md-3">
        <h6 class="fw-bold mb-3">Resources</h6>
        <ul class="list-unstyled small">
          <li class="mb-2"><a href="{{ route('resources.downloads') }}" class="text-muted text-decoration-none">Downloads</a></li>
          <li class="mb-2"><a href="{{ route('media.news') }}" class="text-muted text-decoration-none">News</a></li>
          <li class="mb-2"><a href="{{ route('resources.enquiries') }}" class="text-muted text-decoration-none">Enquiries</a></li>
          <li class="mb-2"><a href="{{ route('resources.contact') }}" class="text-muted text-decoration-none">Contact</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-md-3">
        <h6 class="fw-bold mb-3">Contact Us</h6>
        <ul class="list-unstyled small text-muted">
          <li class="mb-2"><i class="bx bx-phone"></i> +254 700 000 000</li>
          <li class="mb-2"><i class="bx bx-envelope"></i> info@gcsak.or.ke</li>
          <li class="mb-2"><i class="bx bx-map"></i> Nairobi, Kenya</li>
        </ul>
      </div>
    </div>

    <!-- Divider -->
    <hr class="border-secondary my-4">

    <!-- Bottom Section -->
    <div class="row align-items-center">
      <div class="col-md-6">
        <small class="text-muted">© {{ date('Y') }} The Great Contractors and Suppliers Association Of Kenya. All rights reserved.</small>
      </div>
      <div class="col-md-6 text-md-end">
        <a href="#" class="text-muted me-3 text-decoration-none"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="text-muted me-3 text-decoration-none"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="text-muted me-3 text-decoration-none"><i class="bx bxl-linkedin"></i></a>
        <a href="#" class="text-muted text-decoration-none"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </div>
</footer>
