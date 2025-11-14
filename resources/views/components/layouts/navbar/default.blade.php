<nav class="site-header py-3">
  <div class="container-xxl d-flex align-items-center justify-content-between">
      <a class="brand text-decoration-none d-flex align-items-center" href="{{ url('/') }}">
      <img src="{{ asset('assets/img/illustrations/gsk.jpeg') }}" alt="Association Logo" style="height:44px;object-fit:contain;" onerror="this.style.display='none'">
      <div class="ms-2 d-none d-md-block">
        <strong class="text-dark">The Great Contractors and Suppliers Association Of Kenya</strong>
        <div class="small text-muted">Advancing engineering and contracting excellence</div>
      </div>
    </a>

    <div>
      <ul class="list-unstyled d-flex gap-3 mb-0 align-items-center">
        <li><a href="{{ url('/') }}" class="text-decoration-none text-muted">Home</a></li>
        <li><a href="#" class="text-decoration-none text-muted">Directory</a></li>
        <li><a href="#" class="text-decoration-none text-muted">Forum</a></li>
        <li><a href="#" class="text-decoration-none text-muted">Events</a></li>
        <li><a href="#contact" class="text-decoration-none text-muted">Contact</a></li>
        @if (Auth::check())
          <li><a href="{{ route('dashboard') }}" class="btn btn-sm btn-outline-primary">Dashboard</a></li>
        @else
          <li><a href="{{ route('login') }}" class="btn btn-sm btn-link">Log in</a></li>
          <li><a href="{{ route('register') }}" class="btn btn-sm btn-primary">Join</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
