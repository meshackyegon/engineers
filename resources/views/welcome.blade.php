<x-layouts.public>

<!-- ============ HERO SECTION ============ -->
<section class="hero-section" style="background: linear-gradient(135deg, rgba(11, 94, 215, 0.9) 0%, rgba(11, 94, 215, 0.8) 100%), url('https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=600&fit=crop') center/cover; color: white; padding: 120px 0; text-align: center; position: relative;">
  <div class="container-xxl">
    <h1 style="font-size: 48px; font-weight: 700; margin-bottom: 20px; line-height: 1.2;">
      {{ config('app.name') }}
    </h1>
    <p style="font-size: 20px; margin-bottom: 30px; opacity: 0.95;">
      Advancing engineering and contracting excellence in Kenya
    </p>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
      @if (Auth::check())
        <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg px-5" style="font-weight: 600;">Go to Dashboard</a>
      @else
        <a href="{{ route('register') }}" class="btn btn-light btn-lg px-5" style="font-weight: 600;">Become a Member</a>
        <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-5" style="font-weight: 600; border-width: 2px;">Sign In</a>
      @endif
    </div>
  </div>
</section>

<!-- ============ ABOUT SECTION ============ -->
<section style="padding: 80px 0; background: #f9f9f9;">
  <div class="container-xxl">
    <div class="row align-items-center gap-5">
      <div class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=500&fit=crop" alt="Professional Network" class="img-fluid rounded" style="box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
      </div>
      <div class="col-lg-5">
        <h2 style="font-size: 36px; font-weight: 700; margin-bottom: 20px; color: #0b5ed7;">Who We Are</h2>
        <p style="font-size: 15px; color: #555; line-height: 1.8; margin-bottom: 15px;">
          The Great Contractors and Suppliers Association Of Kenya is a professional organization dedicated to uniting engineers, contractors, and suppliers across the nation.
        </p>
        <p style="font-size: 15px; color: #555; line-height: 1.8; margin-bottom: 25px;">
          Our mission is to promote excellence, foster innovation, and create opportunities for professional growth within the construction and engineering industry.
        </p>
        <a href="{{ route('about.who') }}" class="btn btn-primary btn-lg" style="font-weight: 600;">Learn More About Us</a>
      </div>
    </div>
  </div>
</section>

<!-- ============ QUICK STATS ============ -->
<section style="padding: 60px 0; background: white;">
  <div class="container-xxl">
    <div class="row text-center">
      @foreach ([
        ['number' => '5000+', 'label' => 'Active Members'],
        ['number' => '1200+', 'label' => 'Job Postings'],
        ['number' => '150+', 'label' => 'Companies'],
        ['number' => '25+', 'label' => 'Branches Nationwide']
      ] as $stat)
        <div class="col-md-3 col-sm-6 mb-4">
          <div style="padding: 30px; background: #f8f9fa; border-radius: 8px;">
            <div style="font-size: 36px; font-weight: 700; color: #0b5ed7; margin-bottom: 10px;">{{ $stat['number'] }}</div>
            <div style="font-size: 14px; color: #666; font-weight: 500;">{{ $stat['label'] }}</div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ============ MEMBERSHIP BENEFITS ============ -->
<section style="padding: 80px 0; background: #f9f9f9;">
  <div class="container-xxl">
    <h2 style="text-align: center; font-size: 36px; font-weight: 700; margin-bottom: 50px; color: #1a1a1a;">Membership Benefits</h2>
    
    <div class="row g-4">
      @foreach ([
        ['icon' => '👤', 'title' => 'Professional Directory', 'desc' => 'Get listed in our professional directory and increase visibility'],
        ['icon' => '💼', 'title' => 'Exclusive Job Board', 'desc' => 'Access premium job opportunities and recruitment services'],
        ['icon' => '🎓', 'title' => 'Training & Development', 'desc' => 'Participate in professional development programs and certifications'],
        ['icon' => '🤝', 'title' => 'Networking Events', 'desc' => 'Attend exclusive networking events and industry conferences'],
        ['icon' => '📚', 'title' => 'Resources & Publications', 'desc' => 'Access industry reports, guidelines, and technical resources'],
        ['icon' => '💡', 'title' => 'Industry Insights', 'desc' => 'Stay updated with latest industry news and market trends']
      ] as $benefit)
        <div class="col-md-6 col-lg-4">
          <div style="padding: 30px; background: white; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease;" class="benefit-card">
            <div style="font-size: 40px; margin-bottom: 15px;">{{ $benefit['icon'] }}</div>
            <h5 style="font-weight: 700; margin-bottom: 10px; color: #1a1a1a; font-size: 16px;">{{ $benefit['title'] }}</h5>
            <p style="color: #666; font-size: 14px; line-height: 1.6;">{{ $benefit['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ============ MEMBERSHIP PLANS ============ -->
<section style="padding: 80px 0; background: white;">
  <div class="container-xxl">
    <h2 style="text-align: center; font-size: 36px; font-weight: 700; margin-bottom: 50px; color: #1a1a1a;">Choose Your Membership Plan</h2>
    
    <div class="row g-4 justify-content-center">
      @foreach ([
        ['name' => 'Individual', 'price' => '1,500', 'desc' => 'For individual professionals', 'features' => ['Professional directory listing', 'Access to job board', 'Networking event invitations', 'Monthly newsletter', 'Resource library access']],
        ['name' => 'Corporate', 'price' => '5,000', 'desc' => 'For companies & organizations', 'features' => ['Company directory listing', 'Unlimited job postings', 'Employee networking benefits', 'Quarterly business reports', 'Priority support', 'Event sponsorship opportunities'], 'featured' => true],
        ['name' => 'Enterprise', 'price' => '10,000', 'desc' => 'For large organizations', 'features' => ['Everything in Corporate', 'Dedicated account manager', 'Custom training programs', 'API access', 'Bulk member accounts', 'Premium branding options']]
      ] as $plan)
        <div class="col-md-6 col-lg-4">
          <div style="padding: 40px 30px; background: {{ $plan['featured'] ?? false ? '#0b5ed7' : 'white' }}; border: {{ $plan['featured'] ?? false ? 'none' : '1px solid #e0e0e0' }}; border-radius: 12px; box-shadow: {{ $plan['featured'] ?? false ? '0 8px 20px rgba(11, 94, 215, 0.15)' : '0 2px 8px rgba(0,0,0,0.08)' }}; text-align: center; position: relative;">
            @if ($plan['featured'] ?? false)
              <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: #ffb703; color: #1a1a1a; padding: 5px 20px; border-radius: 20px; font-weight: 700; font-size: 12px;">MOST POPULAR</div>
            @endif
            
            <h5 style="font-weight: 700; margin-bottom: 10px; color: {{ $plan['featured'] ?? false ? 'white' : '#1a1a1a' }}; font-size: 18px;">{{ $plan['name'] }}</h5>
            <p style="font-size: 13px; color: {{ $plan['featured'] ?? false ? 'rgba(255,255,255,0.9)' : '#666' }}; margin-bottom: 20px;">{{ $plan['desc'] }}</p>
            
            <div style="margin-bottom: 25px;">
              <span style="font-size: 36px; font-weight: 700; color: {{ $plan['featured'] ?? false ? 'white' : '#0b5ed7' }};">KSh {{ $plan['price'] }}</span>
              <span style="font-size: 13px; color: {{ $plan['featured'] ?? false ? 'rgba(255,255,255,0.8)' : '#666' }};">/month</span>
            </div>
            
            <ul style="list-style: none; padding: 0; margin-bottom: 30px; text-align: left;">
              @foreach ($plan['features'] as $feature)
                <li style="padding: 8px 0; font-size: 13px; color: {{ $plan['featured'] ?? false ? 'rgba(255,255,255,0.9)' : '#555' }}; border-bottom: 1px solid {{ $plan['featured'] ?? false ? 'rgba(255,255,255,0.1)' : '#f0f0f0' }};">
                  <span style="color: {{ $plan['featured'] ?? false ? '#ffb703' : '#0b5ed7' }};">✓</span> {{ $feature }}
                </li>
              @endforeach
            </ul>
            
            <a href="{{ route('register') }}" class="btn {{ $plan['featured'] ?? false ? 'btn-light' : 'btn-primary' }} btn-lg w-100" style="font-weight: 600;">Choose Plan</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ============ WHY JOIN US ============ -->
<section style="padding: 80px 0; background: #f9f9f9;">
  <div class="container-xxl">
    <h2 style="text-align: center; font-size: 36px; font-weight: 700; margin-bottom: 50px; color: #1a1a1a;">Why Join Us?</h2>
    
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div style="text-align: center; padding: 25px;">
          <div style="font-size: 48px; margin-bottom: 15px;">🌍</div>
          <h5 style="font-weight: 700; margin-bottom: 10px;">Nationwide Presence</h5>
          <p style="color: #666; font-size: 14px; line-height: 1.6;">Connect with professionals across 25+ branches in Kenya</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div style="text-align: center; padding: 25px;">
          <div style="font-size: 48px; margin-bottom: 15px;">📈</div>
          <h5 style="font-weight: 700; margin-bottom: 10px;">Career Growth</h5>
          <p style="color: #666; font-size: 14px; line-height: 1.6;">Access exclusive opportunities and advance your career</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div style="text-align: center; padding: 25px;">
          <div style="font-size: 48px; margin-bottom: 15px;">🔒</div>
          <h5 style="font-weight: 700; margin-bottom: 10px;">Verified Network</h5>
          <p style="color: #666; font-size: 14px; line-height: 1.6;">Connect with verified and trusted professionals</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div style="text-align: center; padding: 25px;">
          <div style="font-size: 48px; margin-bottom: 15px;">🎯</div>
          <h5 style="font-weight: 700; margin-bottom: 10px;">Industry Standards</h5>
          <p style="color: #666; font-size: 14px; line-height: 1.6;">Uphold professional excellence and best practices</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ FEATURED CONTENT ============ -->
<section style="padding: 80px 0; background: white;">
  <div class="container-xxl">
    <div class="row mb-5">
      <div class="col-12">
        <h2 style="font-size: 36px; font-weight: 700; margin-bottom: 10px; color: #1a1a1a;">Featured News & Events</h2>
        <p style="color: #666; font-size: 15px;">Stay updated with the latest industry developments</p>
      </div>
    </div>
    
    <div class="row g-4">
      @foreach ([
        ['date' => 'Nov 20, 2025', 'title' => 'Engineering Excellence Conference 2025', 'type' => 'Event', 'icon' => '📅'],
        ['date' => 'Nov 18, 2025', 'title' => 'New Industry Standards Released', 'type' => 'News', 'icon' => '📰'],
        ['date' => 'Nov 15, 2025', 'title' => 'Webinar: Digital Transformation in Construction', 'type' => 'Webinar', 'icon' => '🎥'],
      ] as $item)
        <div class="col-md-6 col-lg-4">
          <div style="padding: 20px; background: #f9f9f9; border-radius: 8px; border-left: 4px solid #0b5ed7;">
            <div style="font-size: 12px; color: #0b5ed7; font-weight: 700; margin-bottom: 8px; text-transform: uppercase;">{{ $item['type'] }} • {{ $item['date'] }}</div>
            <h5 style="font-weight: 700; margin-bottom: 15px; color: #1a1a1a; line-height: 1.5;">{{ $item['title'] }}</h5>
            <a href="#" style="color: #0b5ed7; text-decoration: none; font-weight: 600; font-size: 14px;">Read More →</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ============ CTA SECTION ============ -->
<section style="padding: 80px 0; background: linear-gradient(135deg, #0b5ed7 0%, #0a4ca8 100%); color: white; text-align: center;">
  <div class="container-xxl">
    <h2 style="font-size: 36px; font-weight: 700; margin-bottom: 15px;">Ready to Join Our Community?</h2>
    <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.95;">Become part of Kenya's leading engineering and contracting network</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
      @if (!Auth::check())
        <a href="{{ route('register') }}" class="btn btn-light btn-lg px-5" style="font-weight: 600;">Get Started</a>
        <a href="{{ route('membership.become') }}" class="btn btn-outline-light btn-lg px-5" style="font-weight: 600; border-width: 2px;">Learn More</a>
      @endif
    </div>
  </div>
</section>

<!-- ============ STYLE ADDITIONS ============ -->
<style>
  .benefit-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.12) !important;
  }
  @media (max-width: 768px) {
    .hero-section h1 {
      font-size: 32px !important;
    }
    .hero-section p {
      font-size: 16px !important;
    }
  }
</style>

<x-footer />

</x-layouts.public>
