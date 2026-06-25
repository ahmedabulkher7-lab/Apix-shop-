@extends("layouts.Store")

@section('content')
      <!-- Page Header -->
  <section class="page-hero py-5" style="background-image: linear-gradient(rgba(43, 43, 43, 0.9), rgba(43, 43, 43, 0.9)), url('https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=1600&h=600&fit=crop'); background-size: cover; background-position: center;">
    <div class="container text-center py-5">
      <h1 class="page-hero-title text-white mb-3" style="font-size: 4rem;">OUR STORY</h1>
      <p class="page-hero-subtitle text-gold fs-4" style="letter-spacing: 2px;">FORGED IN IRON, BUILT FOR THE DEDICATED.</p>
    </div>
  </section>

  <!-- The Story Section -->
  <section class="py-5">
    <div class="container py-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <div class="pe-lg-4">
            <span class="text-gold fw-bold" style="font-size: 14px; letter-spacing: 2px; text-transform: uppercase;">Since 2018</span>
            <h2 class="section-title text-start mt-2 mb-4">NO COMPROMISES. JUST RESULTS.</h2>
            <div class="section-divider ms-0 mb-4" style="width: 60px;"></div>
            
            <p class="text-muted-apex mb-4 line-height-lg" style="font-size: 1.1rem;">APEX Fitness was born in a small, unheated garage in 2018. As competitive calisthenics athletes, we were tired of equipment that wobbled, bent, or broke under intense pressure. We didn't want flimsy doorway pull-up bars—we wanted professional, industrial-grade steel.</p>
            
            <p class="text-muted-apex mb-4 line-height-lg" style="font-size: 1.1rem;">When we couldn't find gear that met our standards, we decided to build it ourselves. We learned to weld, engineered prototypes, and tested them mercilessly. Our first product, the Pro Wall-Mount Pull-Up Bar, became a local sensation among our training partners.</p>
            
            <p class="text-white mb-0 fw-bold" style="font-size: 1.1rem; border-left: 3px solid var(--apex-gold); padding-left: 15px;">Today, APEX equips thousands of home gyms and professional facilities worldwide. Our philosophy remains identical to day one: build it once, build it right, and guarantee it for life.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="position-relative">
            <div class="position-absolute border border-apex" style="top: 20px; right: -20px; bottom: -20px; left: 20px; z-index: 0;"></div>
            <img src="https://images.unsplash.com/photo-1540497077202-7c8a3999166f?w=800&h=1000&fit=crop" class="img-fluid position-relative z-1 shadow-lg" alt="Garage Gym Setup">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission Section -->
  <section class="py-5 bg-darkest border-top border-bottom border-apex">
    <div class="container py-4">
      <div class="section-header text-center mb-5">
        <h2 class="section-title fs-1 mb-1">OUR CORE PILLARS</h2>
        <div class="section-divider mb-0"></div>
      </div>
      
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="mission-card">
            <i class="fas fa-hammer mission-icon"></i>
            <h4 class="text-white mb-3" style="font-family: var(--font-heading); font-size: 1.8rem; letter-spacing: 1px;">CRAFTSMANSHIP</h4>
            <p class="text-muted-apex mb-0 line-height-lg">We use military-grade steel, premium woods, and superior powder coating. Every weld is inspected, and every dimension is precise. We don't cut corners because your safety depends on it.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="mission-card">
            <i class="fas fa-chart-line mission-icon"></i>
            <h4 class="text-white mb-3" style="font-family: var(--font-heading); font-size: 1.8rem; letter-spacing: 1px;">PERFORMANCE</h4>
            <p class="text-muted-apex mb-0 line-height-lg">Our equipment is designed to get out of your way. We obsess over grip diameters, knurling textures, and joint stability so you can focus 100% on your workout, not on the gear.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
          <div class="mission-card">
            <i class="fas fa-users mission-icon"></i>
            <h4 class="text-white mb-3" style="font-family: var(--font-heading); font-size: 1.8rem; letter-spacing: 1px;">COMMUNITY</h4>
            <p class="text-muted-apex mb-0 line-height-lg">We are athletes designing for athletes. We actively listen to feedback from our community to constantly iterate and improve our product lineup. Your input drives our innovation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="py-5 bg-main">
    <div class="container py-4">
      <div class="section-header text-center mb-5">
        <h2 class="section-title fs-1 mb-1">THE FOUNDERS</h2>
        <div class="section-divider mb-0"></div>
        <p class="text-muted-apex mt-3">The team behind the metal.</p>
      </div>
      
      <div class="row g-4 justify-content-center">
        <!-- Team 1 -->
        <div class="col-lg-4 col-md-6">
          <div class="team-member h-100">
            <div class="team-img-wrapper">
              <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?w=500&h=500&fit=crop" alt="Marcus Johnson">
            </div>
            <div class="team-info">
              <h4 class="text-white mb-1" style="font-family: var(--font-heading); font-size: 1.8rem; letter-spacing: 1px;">MARCUS JOHNSON</h4>
              <p class="text-gold mb-3" style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Co-Founder & CEO</p>
              <p class="text-muted-apex mb-0" style="font-size: 14px;">Former competitive gymnast turned industrial designer. Marcus oversees product engineering and brand vision.</p>
            </div>
          </div>
        </div>
        <!-- Team 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="team-member h-100">
            <div class="team-img-wrapper">
              <img src="https://images.unsplash.com/photo-1583465885175-d69804565ce7?w=500&h=500&fit=crop" alt="David Chen">
            </div>
            <div class="team-info">
              <h4 class="text-white mb-1" style="font-family: var(--font-heading); font-size: 1.8rem; letter-spacing: 1px;">DAVID CHEN</h4>
              <p class="text-gold mb-3" style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Head of Manufacturing</p>
              <p class="text-muted-apex mb-0" style="font-size: 14px;">Master welder and structural expert. David ensures that every piece of APEX equipment can survive a nuclear blast.</p>
            </div>
          </div>
        </div>
        <!-- Team 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="team-member h-100">
            <div class="team-img-wrapper">
              <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=500&h=500&fit=crop" alt="Sarah Williams">
            </div>
            <div class="team-info">
              <h4 class="text-white mb-1" style="font-family: var(--font-heading); font-size: 1.8rem; letter-spacing: 1px;">SARAH WILLIAMS</h4>
              <p class="text-gold mb-3" style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Community Director</p>
              <p class="text-muted-apex mb-0" style="font-size: 14px;">Professional calisthenics athlete. Sarah leads our product testing division and manages the APEX athlete community.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-5" style="background: var(--apex-gold);">
    <div class="container text-center py-4">
      <h2 class="mb-3" style="font-family: var(--font-heading); font-size: 3.5rem; color: var(--bg-darkest); letter-spacing: 2px;">JOIN THE APEX ATHLETES</h2>
      <p class="mb-4" style="color: var(--bg-main); font-size: 1.1rem; font-weight: 600;">Upgrade your training with equipment built for professionals.</p>
      <a href="shop.html" class="btn btn-dark" style="background: var(--bg-darkest); border: none; border-radius: 0; padding: 15px 40px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase;">EXPLORE GEAR</a>
    </div>
  </section>

@endsection