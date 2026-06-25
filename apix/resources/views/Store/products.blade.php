@extends('layouts.store')

@section('content')


  <!-- Page Header -->
  <section class="page-hero">
    <div class="container">
      <h1 class="page-hero-title">SHOP</h1>
      <p class="page-hero-subtitle">Premium calisthenics equipment for elite athletes.</p>
    </div>
  </section>

  <!-- Search + Sort Bar -->
  <div class="bg-darkest border-bottom border-apex py-3">
    <div class="container">
      <div class="row align-items-center g-3">
        <div class="col-md-6 col-lg-8">
          <div class="position-relative">
            <i class="fas fa-search position-absolute top-50 translate-middle-y ms-3 text-muted"></i>
            <input type="text" class="apex-form-control ps-5" placeholder="Search products...">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex justify-content-md-end align-items-center gap-3">
          <span class="text-gold" style="font-size: 13px; font-weight: 600; white-space: nowrap;">{{ $products->count() }} products found</span>
          <select class="form-select apex-form-control" style="width: 180px;">
            <option value="featured">Featured</option>
            <option value="price-asc">Price: Low to High</option>
            <option value="price-desc">Price: High to Low</option>
            <option value="newest">Newest Arrivals</option>
            <option value="rating">Top Rated</option>
          </select>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <section class="py-5">
    <div class="container">
      <div class="row g-5">
        
        {{-- <!-- Left Sidebar / Filters -->
        <div class="col-lg-3">
          <div class="filter-sidebar">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h5 class="filter-title mb-0">FILTERS</h5>
              <a href="#" class="text-gold" style="font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:1px;">Clear All</a>
            </div>
            
            <!-- Category Filter -->
            <div class="filter-section">
              <h6 class="filter-title">CATEGORY</h6>
              <div class="category-links">
                <span class="filter-link active" onclick="toggleFilter(this)">All Categories</span>
                <span class="filter-link" onclick="toggleFilter(this)">Pull-Up Bars</span>
                <span class="filter-link" onclick="toggleFilter(this)">Parallettes</span>
                <span class="filter-link" onclick="toggleFilter(this)">Resistance Bands</span>
                <span class="filter-link" onclick="toggleFilter(this)">Gymnastic Rings</span>
                <span class="filter-link" onclick="toggleFilter(this)">Weighted Vests</span>
                <span class="filter-link" onclick="toggleFilter(this)">Accessories</span>
              </div>
            </div>

            <!-- Price Range -->
            <div class="filter-section">
              <h6 class="filter-title">PRICE RANGE</h6>
              <input type="range" class="form-range mb-2" min="0" max="200" value="200" id="priceRange" oninput="updatePriceLabel(this.value)">
              <div class="d-flex justify-content-between text-muted-apex" style="font-size: 12px; font-weight: 600;">
                <span>$0</span>
                <span id="priceVal" class="text-gold">$200</span>
              </div>
            </div>

            <!-- Min Rating -->
            <div class="filter-section">
              <h6 class="filter-title">MIN RATING</h6>
              <div class="d-flex flex-wrap gap-1">
                <button class="rating-btn active" onclick="toggleRating(this)">All</button>
                <button class="rating-btn" onclick="toggleRating(this)">3★ & Up</button>
                <button class="rating-btn" onclick="toggleRating(this)">4★ & Up</button>
                <button class="rating-btn" onclick="toggleRating(this)">4.5★ & Up</button>
              </div>
            </div>

            <!-- Availability -->
            <div class="filter-section border-bottom-0 pb-0 mb-0">
              <h6 class="filter-title">AVAILABILITY</h6>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="inStockCheck" checked>
                <label class="form-check-label text-muted-apex fs-6" for="inStockCheck">
                  In Stock Only
                </label>
              </div>
            </div>
          </div>
        </div> --}}

        <!-- Product Grid -->
        <div class="col-lg-9">
          <div class="row g-4">
            <!-- Product 1 -->
            @foreach ($products as $product)
                
            <div class="col-md-6 col-xl-4">
              <div class="product-card">
                {{-- <span class="product-badge bg-apex-gold text-darkest">Best Seller</span> --}}
                {{-- <button class="product-wishlist-btn"><i class="far fa-heart"></i></button> --}}
                <a href="{{ route('product.show', $product->id) }}" class="product-card-img-wrapper d-block">
                  <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=400&h=400&fit=crop" alt="Pro Wall-Mount Pull-Up Bar">
                </a>
                <div class="product-card-body">
                  <div class="product-category">{{ $product->category->name }}</div>
                  <h4 class="product-name"><a href="{{ route('product.show', $product->id) }}" class="text-white text-decoration-none">{{ $product->name }}</a></h4>
                  <div class="product-rating">
                    <div class="stars">★★★★☆</div>
                    <span class="rating-count">(234)</span>
                  </div>
                  <div class="product-price-wrapper">
                    <span class="product-price">${{ number_format($product->price, 2) }}</span>
                    {{-- <span class="product-price-old">${{ number_format($product->original_price, 2) }}</span> --}}
                  </div>
                  <button class="btn-apex-primary w-100 justify-content-center">ADD TO CART</button>
                </div>
              </div>
            </div>
            @endforeach
         


          </div>
          
          <!-- Pagination -->
          <div class="d-flex justify-content-center mt-5">
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link text-muted-apex bg-secondary-apex border-apex" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link bg-apex-gold border-gold text-darkest" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-white bg-secondary-apex border-apex" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-white bg-secondary-apex border-apex" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link text-white bg-secondary-apex border-apex" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>
  </section>

    
@endsection