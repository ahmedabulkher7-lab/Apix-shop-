@extends("layouts.Store")
@section("content")
      <!-- Hero Section -->
  <section class="hero-section text-center">
    <div class="container position-relative z-1">
      <h1 class="hero-title animate-fadeInUp">TRAIN WITHOUT<br><span class="highlight">LIMITS</span></h1>
      <p class="hero-description mx-auto animate-fadeInUp animate-delay-1">Premium calisthenics equipment engineered for athletes who push beyond boundaries.</p>
      <div class="d-flex justify-content-center gap-3 animate-fadeInUp animate-delay-2">
        <a href="shop.html" class="btn-apex-primary btn-apex-lg">Shop Now</a>
        <a href="shop.html" class="btn-apex-outline btn-apex-lg">Explore Collection</a>
      </div>
    </div>
  </section>

  <!-- Featured Categories -->
  <section class="section-pad bg-main">
    <div class="container reveal">
      <div class="section-header">
        <span class="section-tag">Explore</span>
        <h2 class="section-title">SHOP BY CATEGORY</h2>
        <div class="section-divider"></div>
      </div>
      <div class="row g-4">
         @foreach ($categories as $category)
          
         <div class="col-lg-3 col-md-6">
           <a href="shop.html" class="category-card d-block text-decoration-none">
             <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=500&h=650&fit=crop" alt="Pull-Up Bars">
             <div class="category-card-overlay">
               <h3 class="category-card-title text-white">{{$category->name }}</h3>
               <span class="category-card-count">{{$category->products->count() }} PRODUCTS</span>
             </div>
           </a>
         </div>
      @endforeach

      </div>
    </div>
  </section>

  <!-- Best Sellers -->
  <section class="section-pad bg-secondary-apex border-apex border-top border-bottom">
    <div class="container reveal">
      <div class="section-header">
        <span class="section-tag">Top Picks</span>
        <h2 class="section-title">BEST SELLERS</h2>
        <div class="section-divider"></div>
      </div>
      <div class="row g-4">
        @foreach ($products as $product)
        <div class="col-lg-3 col-md-6">
          <div class="product-card">
            <span class="product-badge bg-apex-gold text-darkest">Best Seller</span>
            <button class="product-wishlist-btn"><i class="far fa-heart"></i></button>
            <a href="{{ route("product.show", $product->id) }}" class="product-card-img-wrapper d-block">
              <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=400&h=400&fit=crop" alt="Pro Wall-Mount Pull-Up Bar">
            </a>
            <div class="product-card-body">
              <div class="product-category">{{$product->category->name }}</div>
              <h4 class="product-name"><a href="{{ route("product.show", $product->id) }}" class="text-white text-decoration-none">{{$product->name }}</a></h4>
              <div class="product-rating">
                <div class="stars">★★★★☆</div>
                <span class="rating-count">(234)</span>
              </div>
              <div class="product-price-wrapper">
                <span class="product-price">${{ number_format($product->price, 2) }}</span>
                {{-- <span class="product-price-old">$159.99</span> --}}
              </div>
              <button class="btn-apex-primary w-100 justify-content-center">ADD TO CART</button>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="text-center mt-5">
        <a href="shop.html" class="btn-apex-outline">View All Products</a>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="section-pad bg-main">
    <div class="container reveal">
      <div class="section-header">
        <span class="section-tag">Quality</span>
        <h2 class="section-title">WHY CHOOSE APEX</h2>
        <div class="section-divider"></div>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="feature-card h-100">
            <div class="feature-icon"><i class="fas fa-dumbbell"></i></div>
            <h4 class="feature-title">Military-Grade Steel</h4>
            <p class="feature-desc mb-0">Constructed with high-gauge steel designed to withstand extreme loads and lifetimes of intense use.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-card h-100">
            <div class="feature-icon"><i class="fas fa-tools"></i></div>
            <h4 class="feature-title">Engineered Precision</h4>
            <p class="feature-desc mb-0">Every angle, grip, and weld is meticulously engineered by professional athletes and industrial designers.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-card h-100">
            <div class="feature-icon"><i class="fas fa-truck-fast"></i></div>
            <h4 class="feature-title">Free Shipping $75+</h4>
            <p class="feature-desc mb-0">Get fast, free shipping on all orders over $75 across the continental United States.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-card h-100">
            <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
            <h4 class="feature-title">Lifetime Warranty</h4>
            <p class="feature-desc mb-0">We stand behind our craftsmanship. Our core metal products are backed by a limited lifetime warranty.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Built For The Dedicated -->
  <section class="section-pad bg-secondary-apex border-apex border-top border-bottom overflow-hidden">
    <div class="container reveal">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <h2 class="section-title text-start mb-2">BUILT FOR THE DEDICATED</h2>
          <div class="section-divider ms-0 mb-4"></div>
          <p class="text-muted-apex fs-5 mb-4 line-height-lg">APEX was born from a simple belief: the best athletes deserve the best equipment. Every product we create is tested by professional calisthenics athletes, built with premium materials, and designed to last a lifetime.</p>
          <p class="text-muted-apex mb-4">We don't do shortcuts. We do strength. Our mission is to provide you with the tools you need to break past your limits and achieve peak physical performance, whether you're training in a professional gym or your own garage.</p>
          <a href="about.html" class="btn-apex-outline mt-2">LEARN MORE</a>
        </div>
        <div class="col-lg-6">
          <img src="https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?w=800&h=600&fit=crop" class="img-fluid rounded border border-apex shadow-lg" alt="Athlete training">
        </div>
      </div>
    </div>
  </section>

  <!-- Customer Testimonials -->
  <section class="section-pad bg-main">
    <div class="container reveal">
      <div class="section-header">
        <span class="section-tag">Community</span>
        <h2 class="section-title">WHAT ATHLETES SAY</h2>
        <div class="section-divider"></div>
      </div>
      <div class="row g-4">
        <div class="col-lg-4">
          <div class="testimonial-card h-100">
            <div class="stars mb-3">★★★★★</div>
            <p class="testimonial-text">"Best pull-up bar I've ever used. Rock solid construction and the grip positions are perfect. Installed it in my garage gym and it holds up to weighted muscle-ups without a flinch."</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">A</div>
              <div>
                <h5 class="testimonial-name">ALEX M.</h5>
                <span class="testimonial-role">Verified Buyer</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-card h-100">
            <div class="stars mb-3">★★★★★</div>
            <p class="testimonial-text">"The wooden parallettes are beautiful and incredibly sturdy. Worth every penny. The grip thickness is perfect for handstand practice and L-sits. They don't slide at all on my wooden floors."</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">S</div>
              <div>
                <h5 class="testimonial-name">SARAH K.</h5>
                <span class="testimonial-role">Verified Buyer</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-card h-100">
            <div class="stars mb-3">★★★★★</div>
            <p class="testimonial-text">"Fast shipping, premium quality. APEX is my go-to for all calisthenics gear now. The dip bars are completely stable even with a 45lb plate attached to my belt. Incredible craftsmanship."</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar">M</div>
              <div>
                <h5 class="testimonial-name">MARCUS T.</h5>
                <span class="testimonial-role">Verified Buyer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Statistics Banner -->
  <section class="py-5" style="background-color: var(--bg-darkest);">
    <div class="container reveal">
      <div class="row g-4 justify-content-center">
        <div class="col-md-3 col-6">
          <div class="stat-card">
            <div class="stat-number">50K+</div>
            <div class="stat-label">Happy Athletes</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="stat-card">
            <div class="stat-number">12+</div>
            <div class="stat-label">Premium Products</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="stat-card">
            <div class="stat-number">4.9★</div>
            <div class="stat-label">Average Rating</div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="stat-card">
            <div class="stat-number">100%</div>
            <div class="stat-label">Satisfaction</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="newsletter-section text-center">
    <div class="container reveal">
      <h2 class="section-title mb-2">GET THE LATEST DEALS</h2>
      <p class="text-muted-apex mb-4 pb-2">Subscribe to our newsletter for exclusive offers, training tips, and early access to new products.</p>
      <form class="newsletter-form">
        <input type="email" class="apex-form-control" placeholder="Enter your email address" required>
        <button type="submit" class="btn-apex-primary">SUBSCRIBE</button>
      </form>
    </div>
  </section>
@endsection