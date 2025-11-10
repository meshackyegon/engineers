@section('title', __('Dashboard'))
<x-layouts.app :title="__('Dashboard')">
  <div class="row g-4">
    <!-- Member Profile -->
    <div class="col-lg-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Hello, {{ optional(auth()->user())->name ?? 'Member' }}</h5>
          <p class="text-muted small mb-3">Member profile</p>

          <ul class="list-unstyled mb-3">
            <li><strong>Email:</strong> {{ optional(auth()->user())->email ?? '-' }}</li>
            <li><strong>Phone:</strong> {{ optional(auth()->user())->phone ?? '-' }}</li>
            <li><strong>Category:</strong> {{ optional(auth()->user())->category ?? '—' }}</li>
            <li><strong>County:</strong> {{ optional(auth()->user())->county ?? '—' }}</li>
          </ul>

          <div>
            @php
              $user = optional(auth()->user());
              $paid = $user && $user->membership_paid ? true : false;
            @endphp
            <span class="badge bg-{{ $paid ? 'success' : 'warning' }}">{{ $paid ? 'Membership Active' : 'Membership Pending' }}</span>
            @if($user && $user->membership_expires_at)
              <small class="text-muted d-block mt-2">Expires: {{ $user->membership_expires_at->format('M j, Y') }}</small>
            @endif
          </div>

          <div class="mt-4 d-flex gap-2">
            <a href="{{ Route::has('settings.profile') ? route('settings.profile') : '#' }}" class="btn btn-outline-primary btn-sm">Edit Profile</a>
            <a href="{{ Route::has('payments.index') ? route('payments.index') : '#' }}" class="btn btn-primary btn-sm">Pay / Renew</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Latest Discussions (placeholder) -->
    <div class="col-lg-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Latest Discussions</h5>
          <p class="text-muted small">Recent posts from the community</p>

          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <a href="#">Licensing reform: proposed changes and impact</a>
              <div class="small text-muted">by A. Mwangi · 2 days ago</div>
            </li>
            <li class="list-group-item">
              <a href="#">Site safety standards: who enforces them?</a>
              <div class="small text-muted">by J. Otieno · 5 days ago</div>
            </li>
            <li class="list-group-item text-center">
              <a href="#" class="small">View all discussions</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Announcements -->
    <div class="col-lg-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Announcements</h5>
          <p class="text-muted small">From the admin</p>

          <div class="mb-3">
            <div class="d-flex justify-content-between">
              <div>
                <strong>AGM: Nov 30, 2025</strong>
                <div class="small text-muted">Register to attend the Annual General Meeting.</div>
              </div>
              <div><small class="text-muted">Nov 5</small></div>
            </div>
          </div>

          <div class="mb-3">
            <div class="d-flex justify-content-between">
              <div>
                <strong>New ethics guidance</strong>
                <div class="small text-muted">Updated guidance for professional conduct.</div>
              </div>
              <div><small class="text-muted">Oct 20</small></div>
            </div>
          </div>

          <a href="#" class="small">View all announcements</a>
        </div>
      </div>
    </div>

    <!-- Upcoming events / meetings -->
    <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Upcoming Events</h5>
          <p class="text-muted small">Events and meetings you may be interested in</p>

          <div class="row">
            <div class="col-md-4">
              <div class="p-3 border rounded mb-3">
                <h6 class="mb-1">AGM 2025</h6>
                <div class="small text-muted">Nov 30 · Nairobi</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="p-3 border rounded mb-3">
                <h6 class="mb-1">Safety Workshop</h6>
                <div class="small text-muted">Dec 12 · Mombasa</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="p-3 border rounded mb-3">
                <h6 class="mb-1">Online Policy Roundtable</h6>
                <div class="small text-muted">Jan 15 · Online</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts.app>
