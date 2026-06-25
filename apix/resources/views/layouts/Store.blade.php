<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APEX Fitness | Train Without Limits</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- APEX CSS -->
  <link rel="stylesheet" href="{{ asset('css/apex.css') }}">
  <style>
    .reveal {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease;
    }
    .reveal.active {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body>

  <!-- Announcement Bar -->
  <!-- <div class="announcement-bar">
    🚚 FREE SHIPPING on orders over $75 &nbsp;|&nbsp; Use code <strong>APEX10</strong> for 10% off &nbsp;|&nbsp; <a href="shop.html">Shop Now →</a>
  </div> -->

  <!-- Navbar -->
  <nav class="apex-navbar navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.html">APEX</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#apexNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="apexNav">
        <ul class="navbar-nav mx-auto gap-1">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ route('products') }}">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
          {{-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li> --}}
        </ul>
        <div class="d-flex align-items-center gap-1">
          <button class="navbar-icon-btn" onclick="toggleSearch()"><i class="fas fa-search"></i></button>
          <a href="wishlist.html" class="navbar-icon-btn position-relative"><i class="fas fa-heart"></i><span class="badge">2</span></a>
          <a href="cart.html" class="navbar-icon-btn position-relative"><i class="fas fa-shopping-cart"></i><span class="badge">3</span></a>
          {{-- @if (Route::has('login')) --}}
                
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                             class="navbar-icon-btn position-relative"
                        >
                            <i class="fas fa-user"></i>
                        </a>
                        @endauth
                    {{-- @else --}}
                    @guest
                                   <a
                            href="{{ route('login') }}"
                            class="navbar-icon-btn position-relative"
                        >
                            <i class="fas fa-right-to-bracket"></i>
                        </a>
                                  {{-- <a
                                href="{{ route('register') }}"
                            class="navbar-icon-btn position-relative"
                        >
                            <i class="fas fa-right-to-bracket"></i> 
                            </a> --}}
                    @endguest
           

                   
                
          
            {{-- @endif --}}
        </div>
      </div>
    </div>
  </nav>

  @yield("content")


  
  <!-- Footer -->
  <footer class="apex-footer">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <span class="footer-brand">APEX</span>
          <p class="footer-desc">Premium calisthenics equipment engineered for athletes who push beyond boundaries. Built to last, designed to perform.</p>
          <div class="footer-social">
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
            <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6">
          <h6 class="footer-heading">Shop</h6>
          <ul class="footer-links">
            <li><a href="shop.html">All Products</a></li>
            <li><a href="shop.html">Pull-Up Bars</a></li>
            <li><a href="shop.html">Parallettes</a></li>
            <li><a href="shop.html">Rings</a></li>
            <li><a href="shop.html">Bands</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 col-6">
          <h6 class="footer-heading">Account</h6>
          <ul class="footer-links">
            <li><a href="account.html">My Account</a></li>
            <li><a href="orders.html">Orders</a></li>
            <li><a href="wishlist.html">Wishlist</a></li>
            <li><a href="cart.html">Cart</a></li>
            <li><a href="login.html">Login</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 col-6">
          <h6 class="footer-heading">Info</h6>
          <ul class="footer-links">
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Returns</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 col-6">
          <h6 class="footer-heading">Contact</h6>
          <ul class="footer-links">
            <li><a href="mailto:hello@apexfitness.com">hello@apexfitness.com</a></li>
            <li><a href="tel:+18005550100">+1 (800) 555-0100</a></li>
            <li>Mon–Fri, 9am–6pm EST</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom mt-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <p class="footer-bottom-text mb-0">© 2026 APEX Fitness. All rights reserved.</p>
          </div>
          <div class="col-md-6 text-md-end mt-2 mt-md-0">
            <span class="footer-bottom-text">
              <i class="fab fa-cc-visa me-2" style="font-size:22px;color:#A0A0A0;"></i>
              <i class="fab fa-cc-mastercard me-2" style="font-size:22px;color:#A0A0A0;"></i>
              <i class="fab fa-cc-paypal me-2" style="font-size:22px;color:#A0A0A0;"></i>
              <i class="fab fa-cc-apple-pay" style="font-size:22px;color:#A0A0A0;"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Search Overlay -->
  <div class="search-overlay" id="searchOverlay">
    <div class="search-overlay-box">
      <input type="text" class="search-overlay-input" placeholder="SEARCH PRODUCTS..." autofocus>
      <div class="mt-3 text-center">
        <button onclick="toggleSearch()" style="background:none;border:none;color:var(--text-muted);cursor:pointer;font-weight:600;letter-spacing:1px;text-transform:uppercase;">
          <i class="fas fa-times me-2"></i> Close
        </button>
      </div>
    </div>
  </div>

  <script>
    function toggleSearch() {
      document.getElementById('searchOverlay').classList.toggle('active');
    }

    // Scroll reveal animation
    document.addEventListener("DOMContentLoaded", function() {
      const reveals = document.querySelectorAll(".reveal");

      const revealOnScroll = function() {
        for (let i = 0; i < reveals.length; i++) {
          const windowHeight = window.innerHeight;
          const elementTop = reveals[i].getBoundingClientRect().top;
          const elementVisible = 100;

          if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
          }
        }
      };

      window.addEventListener("scroll", revealOnScroll);
      revealOnScroll(); // trigger once on load
    });
  </script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

