<?php

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth.card_layout')] class extends Component {
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }
};
?>
@section('title', 'Login Page')

@section('page-style')
@vite([
    'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection

<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/img/illustrations/gsk.jpeg') }}" alt="GSK" class="rounded-circle" style="width:72px;height:72px;object-fit:cover;" onerror="this.style.display='none'">
                    </div>

                    <h4 class="text-center mb-1">{{ __('Welcome to :app', ['app' => config('app.name')]) }}</h4>
                    <p class="text-center text-muted mb-4">{{ __('Please sign in to your account and start the adventure') }}</p>

                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-info mb-3">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form wire:submit="login">
                        <div class="mb-3">
                            <label for="email" class="form-label text-uppercase small text-muted">{{ __('Email') }}</label>
                            <input
                                wire:model="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                id="email"
                                required
                                autofocus
                                autocomplete="email"
                                placeholder="{{ __('Enter your email or username') }}"
                            >
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <label for="password" class="form-label text-uppercase small text-muted">{{ __('Password') }}</label>
                            <div class="input-group input-group-merge">
                                <input
                                    wire:model="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password"
                                    required
                                    autocomplete="current-password"
                                    placeholder="{{ __('Enter your password') }}"
                                >
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="form-check">
                                <input wire:model="remember" type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" wire:navigate class="small">{{ __('Forgot Password?') }}</a>
                            @endif
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('Sign in') }}</button>
                        </div>
                    </form>

                    @if (Route::has('register'))
                        <p class="text-center small text-muted mb-0">
                            <span>{{ __('New on our platform?') }}</span>
                            <a href="{{ route('register') }}" wire:navigate>{{ __('Create an account') }}</a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
