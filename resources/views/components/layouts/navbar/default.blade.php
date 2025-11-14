<nav class="navbar navbar-expand-lg bg-white sticky-top" style="box-shadow: 0 1px 3px rgba(0,0,0,0.08); border-bottom: 1px solid #f0f0f0;">
  <div class="container-xxl">
    <!-- Logo / Brand -->
    <a class="navbar-brand d-flex align-items-center text-decoration-none" href="{{ url('/') }}" style="gap:12px;min-width:240px;">
      <img src="{{ asset('assets/img/illustrations/gsk.jpeg') }}" alt="GCSAK Logo" style="height:50px;object-fit:contain;" onerror="this.style.display='none'">
      <div class="d-none d-md-block" style="font-size:13px;line-height:1.3;">
        <strong class="text-dark d-block" style="font-size:11px;letter-spacing:0.3px;">The Great Contractors and</strong>
        <strong class="text-dark d-block" style="font-size:11px;letter-spacing:0.3px;">Suppliers Association Of Kenya</strong>
        <small class="text-muted d-block" style="font-size:10px;">Advancing engineering &amp; contracting</small>
      </div>
    </a>

    <!-- Mobile toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav items -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link px-3 text-dark fw-600" href="{{ url('/') }}" style="font-size:13px;">HOME</a>
        </li>

        <!-- About Us Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3 text-dark fw-600" href="#" data-bs-toggle="dropdown" style="font-size:13px;">ABOUT US</a>
          <ul class="dropdown-menu" style="min-width:200px;">
            <li><a class="dropdown-item py-2" href="{{ route('about.who') }}">WHO WE ARE</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('about.branches') }}">BRANCHES</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('about.leadership') }}">LEADERSHIP & GOVERNANCE</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('about.council') }}">COUNCIL MEMBERS</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('about.secretariat') }}">SECRETARIAT</a></li>
          </ul>
        </li>

        <!-- Membership Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3 text-dark fw-600" href="#" data-bs-toggle="dropdown" style="font-size:13px;">MEMBERSHIP</a>
          <ul class="dropdown-menu" style="min-width:200px;">
            <li><a class="dropdown-item py-2" href="{{ route('membership.become') }}">BECOME A MEMBER</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('membership.certified') }}">CERTIFIED MEMBERS</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('membership.portal') }}">MEMBERS PORTAL</a></li>
          </ul>
        </li>

        <!-- Media & Events Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3 text-dark fw-600" href="#" data-bs-toggle="dropdown" style="font-size:13px;">MEDIA & EVENTS</a>
          <ul class="dropdown-menu" style="min-width:200px;">
            <li><a class="dropdown-item py-2" href="{{ route('media.news') }}">NEWS</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('media.events') }}">EVENTS</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('media.memos') }}">MEMOS</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('media.gallery') }}">GALLERY</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('media.press') }}">PRESS RELEASES</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('media.journals') }}">JOURNALS</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('media.videos') }}">VIDEO CENTRE</a></li>
          </ul>
        </li>

        <!-- Connect Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3 text-dark fw-600" href="#" data-bs-toggle="dropdown" style="font-size:13px;">CONNECT</a>
          <ul class="dropdown-menu" style="min-width:200px;">
            <li><a class="dropdown-item py-2" href="{{ route('connect.jobs') }}">JOBS</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('connect.postjob') }}">POST A JOB</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('connect.employer') }}">EMPLOYER DASHBOARD</a></li>
          </ul>
        </li>

        <!-- Resources Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3 text-dark fw-600" href="#" data-bs-toggle="dropdown" style="font-size:13px;">RESOURCES</a>
          <ul class="dropdown-menu" style="min-width:200px;">
            <li><a class="dropdown-item py-2" href="{{ route('resources.enquiries') }}">ENQUIRIES</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('resources.downloads') }}">DOWNLOADS</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('resources.partners') }}">PARTNERS & AFFILIATES</a></li>
            <li><a class="dropdown-item py-2" href="{{ route('resources.contact') }}">CONTACT US</a></li>
          </ul>
        </li>

        @if (Auth::check())
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link btn btn-sm btn-outline-primary ms-3">Dashboard</a>
          </li>
        @else
          <li class="nav-item ms-2">
            <a href="{{ route('login') }}" class="nav-link text-dark fw-600" style="font-size:13px;">LOG IN</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link btn btn-sm btn-primary ms-2">JOIN NOW</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>

<style>
  .navbar { padding: 0.7rem 0 !important; }
  .navbar-brand { font-size: 12px; }
  .nav-link { color: #333 !important; font-size: 13px; text-transform: uppercase; font-weight: 500; letter-spacing: 0.3px; transition: color 0.2s ease; }
  .nav-link:hover { color: #0b5ed7 !important; }
  .dropdown-menu { border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 4px; }
  .dropdown-item { font-size: 12px; color: #555; text-transform: none; letter-spacing: normal; }
  .dropdown-item:hover { background: #f0f4ff; color: #0b5ed7; }
  .fw-600 { font-weight: 600; }
</style>