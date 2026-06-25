@extends('layouts.store')

@section('content')
      <!-- Page Header -->
  <section class="page-hero py-5">
    <div class="container text-center">
      <h1 class="page-hero-title mb-2">WISHLIST</h1>
      <p class="page-hero-subtitle">4 saved items</p>
    </div>
  </section>

  <!-- Wishlist Grid -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4" id="wishlistGrid">
        
        <!-- Item 1 -->
        <div class="col-lg-3 col-md-4 col-sm-6 wishlist-item">
          <div class="product-card h-100 d-flex flex-column">
            <button class="product-wishlist-btn bg-card text-danger border-danger" onclick="removeFromWishlist(this)" title="Remove" style="z-index: 10;">
              <i class="fas fa-trash-alt"></i>
            </button>
            <a href="product.html" class="product-card-img-wrapper d-block">
              <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=400&h=400&fit=crop" alt="Pro Wall-Mount Pull-Up Bar">
            </a>
            <div class="product-card-body flex-grow-1 d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <div class="product-category m-0">Pull-Up Bars</div>
                <span class="text-muted-apex" style="font-size: 10px;">Added Jun 12</span>
              </div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">Pro Wall-Mount Pull-Up Bar</a></h4>
              <div class="product-price-wrapper mt-auto mb-3 pt-2 border-top border-apex">
                <span class="product-price">$129.99</span>
              </div>
              <button class="btn-apex-primary w-100 justify-content-center mt-auto" onclick="addToCart(this, 'Pro Wall-Mount Pull-Up Bar')">ADD TO CART</button>
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="col-lg-3 col-md-4 col-sm-6 wishlist-item">
          <div class="product-card h-100 d-flex flex-column">
            <button class="product-wishlist-btn bg-card text-danger border-danger" onclick="removeFromWishlist(this)" title="Remove" style="z-index: 10;">
              <i class="fas fa-trash-alt"></i>
            </button>
            <a href="product.html" class="product-card-img-wrapper d-block">
              <img src="https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?w=400&h=400&fit=crop" alt="20KG Weighted Vest">
            </a>
            <div class="product-card-body flex-grow-1 d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <div class="product-category m-0">Weighted Vests</div>
                <span class="text-muted-apex" style="font-size: 10px;">Added Jun 18</span>
              </div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">20KG Weighted Vest</a></h4>
              <div class="product-price-wrapper mt-auto mb-3 pt-2 border-top border-apex">
                <span class="product-price">$119.99</span>
              </div>
              <button class="btn-apex-primary w-100 justify-content-center mt-auto" onclick="addToCart(this, '20KG Weighted Vest')">ADD TO CART</button>
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="col-lg-3 col-md-4 col-sm-6 wishlist-item">
          <div class="product-card h-100 d-flex flex-column">
            <button class="product-wishlist-btn bg-card text-danger border-danger" onclick="removeFromWishlist(this)" title="Remove" style="z-index: 10;">
              <i class="fas fa-trash-alt"></i>
            </button>
            <a href="product.html" class="product-card-img-wrapper d-block">
              <img src="https://images.unsplash.com/photo-1574680178050-55c6a6a96e0a?w=400&h=400&fit=crop" alt="Freestanding Dip Bars">
            </a>
            <div class="product-card-body flex-grow-1 d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <div class="product-category m-0">Dip Bars</div>
                <span class="text-muted-apex" style="font-size: 10px;">Added Jun 20</span>
              </div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">Freestanding Dip Bars</a></h4>
              <div class="product-price-wrapper mt-auto mb-3 pt-2 border-top border-apex">
                <span class="product-price">$199.99</span>
              </div>
              <button class="btn-apex-primary w-100 justify-content-center mt-auto" onclick="addToCart(this, 'Freestanding Dip Bars')">ADD TO CART</button>
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="col-lg-3 col-md-4 col-sm-6 wishlist-item">
          <div class="product-card h-100 d-flex flex-column">
            <button class="product-wishlist-btn bg-card text-danger border-danger" onclick="removeFromWishlist(this)" title="Remove" style="z-index: 10;">
              <i class="fas fa-trash-alt"></i>
            </button>
            <a href="product.html" class="product-card-img-wrapper d-block">
              <img src="https://images.unsplash.com/photo-1616803689943-5601631c7fec?w=400&h=400&fit=crop" alt="Gymnastic Rings Pro">
            </a>
            <div class="product-card-body flex-grow-1 d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <div class="product-category m-0">Gymnastic Rings</div>
                <span class="text-muted-apex" style="font-size: 10px;">Added Jun 21</span>
              </div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">Gymnastic Rings Pro</a></h4>
              <div class="product-price-wrapper mt-auto mb-3 pt-2 border-top border-apex">
                <span class="product-price">$54.99</span>
              </div>
              <button class="btn-apex-primary w-100 justify-content-center mt-auto" onclick="addToCart(this, 'Gymnastic Rings Pro')">ADD TO CART</button>
            </div>
          </div>
        </div>

      </div>
      
      <div class="text-center mt-5 pt-3">
        <a href="shop.html" class="btn-apex-outline">CONTINUE SHOPPING</a>
      </div>
    </div>
  </section>

  <!-- You May Also Like -->
  <section class="section-pad bg-secondary-apex border-top border-apex">
    <div class="container">
      <div class="section-header text-center mb-5">
        <h2 class="section-title fs-2 mb-1">RECOMMENDED FOR YOU</h2>
        <div class="section-divider mb-0"></div>
      </div>
      <div class="row g-4">
        <!-- Product -->
        <div class="col-lg-3 col-md-6">
          <div class="product-card">
            <span class="product-badge badge-sale">SALE</span>
            <button class="product-wishlist-btn"><i class="far fa-heart"></i></button>
            <a href="product.html" class="product-card-img-wrapper d-block">
              <img src="https://images.unsplash.com/photo-1598289431512-b97b0917affc?w=400&h=400&fit=crop" alt="Elite Resistance Bands Set">
            </a>
            <div class="product-card-body">
              <div class="product-category">Resistance Bands</div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">Elite Resistance Bands Set</a></h4>
              <div class="product-rating">
                <div class="stars">★★★★☆</div>
                <span class="rating-count">(312)</span>
              </div>
              <div class="product-price-wrapper">
                <span class="product-price">$39.99</span>
                <span class="product-price-old">$54.99</span>
              </div>
              <button class="btn-apex-primary w-100 justify-content-center">ADD TO CART</button>
            </div>
          </div>
        </div>
        <!-- Product -->
        <div class="col-lg-3 col-md-6">
          <div class="product-card">
            <button class="product-wishlist-btn"><i class="far fa-heart"></i></button>
            <a href="product.html" class="product-card-img-wrapper d-block">
              <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=400&fit=crop" alt="Steel Parallettes Low">
            </a>
            <div class="product-card-body">
              <div class="product-category">Parallettes</div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">Steel Parallettes Low</a></h4>
              <div class="product-rating">
                <div class="stars">★★★★☆</div>
                <span class="rating-count">(98)</span>
              </div>
              <div class="product-price-wrapper">
                <span class="product-price">$64.99</span>
              </div>
              <button class="btn-apex-primary w-100 justify-content-center">ADD TO CART</button>
            </div>
          </div>
        </div>
        <!-- Product -->
        <div class="col-lg-3 col-md-6">
          <div class="product-card">
            <button class="product-wishlist-btn"><i class="far fa-heart"></i></button>
            <a href="product.html" class="product-card-img-wrapper d-block">
              <img src="https://images.unsplash.com/photo-1601422407692-ec4eeec1d9b3?w=400&h=400&fit=crop" alt="Extra Thick Training Mat">
            </a>
            <div class="product-card-body">
              <div class="product-category">Training Mats</div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">Extra Thick Training Mat</a></h4>
              <div class="product-rating">
                <div class="stars">★★★★☆</div>
                <span class="rating-count">(167)</span>
              </div>
              <div class="product-price-wrapper">
                <span class="product-price">$79.99</span>
              </div>
              <button class="btn-apex-primary w-100 justify-content-center">ADD TO CART</button>
            </div>
          </div>
        </div>
        <!-- Product -->
        <div class="col-lg-3 col-md-6">
          <div class="product-card">
            <span class="product-badge badge-new">NEW</span>
            <button class="product-wishlist-btn"><i class="far fa-heart"></i></button>
            <a href="product.html" class="product-card-img-wrapper d-block">
              <img src="https://images.unsplash.com/photo-1599058917212-d750089bc07e?w=400&h=400&fit=crop" alt="Speed Jump Rope Pro">
            </a>
            <div class="product-card-body">
              <div class="product-category">Jump Ropes</div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">Speed Jump Rope Pro</a></h4>
              <div class="product-rating">
                <div class="stars">★★★★☆</div>
                <span class="rating-count">(256)</span>
              </div>
              <div class="product-price-wrapper">
                <span class="product-price">$29.99</span>
              </div>
              <button class="btn-apex-primary w-100 justify-content-center">ADD TO CART</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection