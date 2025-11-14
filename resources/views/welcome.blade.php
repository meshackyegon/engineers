<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="layout-menu-fixed" data-base-url="{{url('/')}}" data-framework="laravel">
  @section('title', __('Home'))
  <head>
    @include('partials.head')
    <style>
      /* Small inline touches for the homepage hero */
      .hero {
        background: linear-gradient(180deg,#f8fbff 0%, #e9f2fb 100%);
        color: #0b3d91;
      }
      .feature-icon {
        width:64px;height:64px;background:#eaf4ff;color:#0b3d91;border-radius:12px;display:inline-flex;align-items:center;justify-content:center;font-size:28px;
      }
      .card-announce { border-left:4px solid #0b5ed7 }
    </style>
  </head>
  <body>
    <header class="py-3 bg-white shadow-sm">
      <div class="container-xxl d-flex align-items-center justify-content-between">
          <a class="d-flex align-items-center text-decoration-none" href="{{ url('/') }}">
          <img src="{{ asset('assets/img/illustrations/gsk.jpeg') }}" alt="Association Logo" style="height:40px;object-fit:contain;" onerror="this.style.display='none'">
          <div class="ms-2">
            <h1 class="h5 mb-0 text-primary">The Great Contractors and Suppliers Association Of Kenya</h1>
            <small class="text-muted">Advancing engineering and contracting excellence</small>
          </div>
        </a>

        <nav>
          @if (Route::has('login'))
            @auth
              <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary">Dashboard</a>
            @else
              <a href="{{ route('login') }}" class="btn btn-link me-2">Log in</a>
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-primary">Join now</a>
              @endif
            @endauth
          @endif
        </nav>
      </div>
    </header>

    <main class="hero py-6">
      <div class="container-xxl">
        <div class="row align-items-center gy-4">
          <div class="col-lg-6">
            <h2 class="display-4 fw-bold">A professional community for engineers</h2>
            <p class="lead text-muted">We unite engineers across disciplines to influence policy, improve professional standards, share knowledge, and support careers. Get verified, listed, and join conversations that matter.</p>

            <div class="d-flex gap-2 mt-4">
              <a class="btn btn-primary btn-lg" href="{{ Route::has('register') ? route('register') : '#' }}">Become a Member</a>
              <a class="btn btn-outline-secondary btn-lg" href="{{ Route::has('login') ? route('login') : '#' }}">Member Login</a>
            </div>

            <div class="row g-2 mt-4">
              <div class="col-auto">
                <div class="d-flex align-items-center">
                  <i class="bx bx-check text-primary me-2" style="font-size:20px"></i>
                  <small class="text-muted">Verified membership</small>
                </div>
              </div>
              <div class="col-auto">
                <div class="d-flex align-items-center">
                  <i class="bx bx-calendar-event text-primary me-2" style="font-size:20px"></i>
                  <small class="text-muted">Events & workshops</small>
                </div>
              </div>
              <div class="col-auto">
                <div class="d-flex align-items-center">
                  <i class="bx bx-user-voice text-primary me-2" style="font-size:20px"></i>
                  <small class="text-muted">Raise issues to admin</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 text-center">
            <img src="{{ asset('assets/img/illustrations/engineer-illustration.png') }}" alt="Engineers" class="img-fluid" style="max-height:480px;">
          </div>
        </div>
      </div>
    </main>

    <!-- How it works -->
    <section class="py-5">
      <div class="container-xxl">
        <h3 class="mb-4">How it works</h3>
        <p class="text-muted">Join in three simple steps and become part of a professional network.</p>

        <div class="row g-4 mt-3">
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-4">
              <div class="mb-3 feature-icon mx-auto"><i class="bx bx-user-plus"></i></div>
              <h5>Create an account</h5>
              <p class="text-muted small">Register with your professional details and verify your email.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-4">
              <div class="mb-3 feature-icon mx-auto"><i class="bx bx-credit-card"></i></div>
              <h5>Pay membership</h5>
              <p class="text-muted small">Complete secure payment via your preferred provider (M-Pesa, PayPal, Stripe).</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-4">
              <div class="mb-3 feature-icon mx-auto"><i class="bx bx-conversation"></i></div>
              <h5>Engage & contribute</h5>
              <p class="text-muted small">Post in the forum, raise issues, join events and be listed in the directory.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Benefits & Pricing -->
    <section class="py-5 bg-light">
      <div class="container-xxl">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h3 class="mb-3">Membership benefits</h3>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="bx bx-check text-primary me-2"></i>Listing in the public engineer directory</li>
              <li class="mb-2"><i class="bx bx-check text-primary me-2"></i>Access to member-only forums and resources</li>
              <li class="mb-2"><i class="bx bx-check text-primary me-2"></i>Discounted event tickets and CPD workshops</li>
              <li class="mb-2"><i class="bx bx-check text-primary me-2"></i>Direct channel to raise formal issues with the admin</li>
            </ul>
          </div>

          <div class="col-lg-5">
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h4 class="mb-3">Membership Pricing</h4>
                <div class="h2 fw-bold mb-2">KES 1,000 <small class="text-muted fs-6">/ year</small></div>
                <p class="text-muted small">One-time annual fee. Renewals receive reminders before expiry.</p>
                <a href="{{ auth()->check() ? (Route::has('payments.index') ? route('payments.index') : '#') : route('login') }}" class="btn btn-primary">Pay Membership</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="py-5">
      <div class="container-xxl">
        <h3 class="mb-4">Frequently Asked Questions</h3>
        <div class="accordion" id="faq">
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="true" aria-controls="collapseFaq1">
                Who can join?
              </button>
            </h2>
            <div id="collapseFaq1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faq">
              <div class="accordion-body text-muted">Professional engineers, technologists, and students in engineering disciplines are welcome. Admin may verify professional details for listing.</div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="faq2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                How do I pay?
              </button>
            </h2>
            <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faq">
              <div class="accordion-body text-muted">We support common providers (M-Pesa, PayPal, Stripe). The payments page will guide you through the available options.</div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="faq3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                What if I have a complaint?
              </button>
            </h2>
            <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faq">
              <div class="accordion-body text-muted">Use the "Raise an Issue" form in your dashboard to submit complaints or observations. Admin will categorize and follow up.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Resources & Contact -->
    <section class="py-5 bg-light">
      <div class="container-xxl">
        <div class="row g-4">
          <div class="col-lg-6">
            <h4>Resources</h4>
            <p class="text-muted small">Guides, policies, and useful links for engineers.</p>
            <ul>
              <li><a href="#">Professional Code of Conduct</a></li>
              <li><a href="#">Licensing & registration guide</a></li>
              <li><a href="#">Event calendar</a></li>
            </ul>
          </div>

          <div class="col-lg-6">
            <h4>Contact Us</h4>
            <p class="text-muted small">Questions? Reach out and we'll respond within 2 business days.</p>
            <form method="POST" action="{{ Route::has('contact.send') ? route('contact.send') : '#' }}">
              @csrf
              <div class="mb-3">
                <label class="form-label">Your name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea name="message" class="form-control" rows="4" required></textarea>
              </div>
              <div class="d-flex">
                <button class="btn btn-primary">Send message</button>
                <a class="btn btn-link ms-3" href="mailto:info@example.com">Or email us directly</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container-xxl">
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body text-center position-relative">
                <div class="feature-icon mb-3 mx-auto"><i class="bx bx-group"></i></div>
                <h5 class="card-title">
                  <a class="stretched-link text-decoration-none text-dark" href="{{ Route::has('forum.index') ? route('forum.index') : '#' }}">Community Forum</a>
                </h5>
                <p class="text-muted small">Post, comment and engage with fellow engineers on topics that matter.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body text-center position-relative">
                <div class="feature-icon mb-3 mx-auto"><i class="bx bx-briefcase"></i></div>
                <h5 class="card-title">
                  <a class="stretched-link text-decoration-none text-dark" href="{{ Route::has('directory.index') ? route('directory.index') : '#' }}">Engineer Directory</a>
                </h5>
                <p class="text-muted small">Find members by specialty, county, or experience.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body text-center position-relative">
                <div class="feature-icon mb-3 mx-auto"><i class="bx bx-file-find"></i></div>
                <h5 class="card-title">
                  <a class="stretched-link text-decoration-none text-dark" href="{{ auth()->check() ? (Route::has('issues.create') ? route('issues.create') : '#') : route('login') }}">Raise an Issue</a>
                </h5>
                <p class="text-muted small">Report policy, ethics, or infrastructure concerns to the admin.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body text-center position-relative">
                <div class="feature-icon mb-3 mx-auto"><i class="bx bx-credit-card"></i></div>
                <h5 class="card-title">
                  <a class="stretched-link text-decoration-none text-dark" href="{{ auth()->check() ? (Route::has('payments.index') ? route('payments.index') : '#') : route('login') }}">Membership & Payments</a>
                </h5>
                <p class="text-muted small">Secure payments (Stripe/PayPal/M-Pesa) and renewal reminders.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-light">
      <div class="container-xxl">
        <div class="row">
          <div class="col-lg-8">
            <h3 class="mb-4">Latest Announcements</h3>

            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action card-announce mb-3 shadow-sm">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Annual General Meeting announced</h5>
                  <small class="text-muted">Nov 5, 2025</small>
                </div>
                <p class="mb-1 text-muted">Register for the AGM and join the policy roundtable. Members can submit motions before Nov 25.</p>
              </a>

              <a href="#" class="list-group-item list-group-item-action card-announce mb-3 shadow-sm">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Membership fee update</h5>
                  <small class="text-muted">Oct 20, 2025</small>
                </div>
                <p class="mb-1 text-muted">We've updated the membership categories and early-bird pricing for new members.</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Quick Links</h5>
                <ul class="list-unstyled mb-0">
                  <li><a href="{{ route('register') }}">Join as a member</a></li>
                  <li><a href="{{ route('login') }}">Member login</a></li>
                  <li><a href="#">News & Articles</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="py-4 bg-white border-top">
      <div class="container-xxl d-flex justify-content-between align-items-center">
        <div>
          <small class="text-muted">© {{ date('Y') }} The Great Contractors and Suppliers Association Of Kenya. All rights reserved.</small>
        </div>
        <div>
          <a href="#" class="text-muted me-3"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="text-muted me-3"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="text-muted"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer>

    @include('partials.scripts')
  </body>
</html>
