@section('title', __('Membership Payment'))
<x-layouts.app :title="__('Membership Payment')">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm">
        <div class="card-body">
          <h4 class="card-title">Pay Membership (M-Pesa)</h4>
          <p class="text-muted">Amount: <strong>KES 1,000</strong></p>

          @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
          @endif

          <form method="POST" action="{{ route('payments.mpesa') }}">
            @csrf
            <div class="mb-3">
              <label class="form-label">Phone number (M-Pesa)</label>
              <input type="text" name="phone" class="form-control" placeholder="2547XXXXXXXX" value="{{ optional(auth()->user())->phone }}" required>
            </div>
            <button class="btn btn-primary">Pay with M-Pesa (Simulate)</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layouts.app>
