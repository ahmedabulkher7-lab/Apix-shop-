@extends('layouts.store')

@section('content')
      <!-- Page Header -->
  <section class="page-hero py-5">
    <div class="container text-center">
      <h1 class="page-hero-title mb-2">YOUR CART</h1>
      <p class="page-hero-subtitle">3 items</p>
    </div>
  </section>

  <!-- Cart Content -->
  <section class="py-5">
    <div class="container">
      <div class="row g-5">
        
        <!-- Left Column: Table & Coupon -->
        <div class="col-lg-8">
          <div class="table-responsive">
            <table class="apex-table w-100 mb-4">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="cartBody">
                
                <!-- Item 1 -->
                <tr id="cart-item-1">
                  <td>
                    <div class="d-flex align-items-center gap-3">
                      <a href="product.html">
                        <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=150&h=150&fit=crop" class="cart-table-img" alt="Pro Wall-Mount Pull-Up Bar">
                      </a>
                      <div>
                        <div class="product-category" style="font-size: 10px;">Pull-Up Bars</div>
                        <a href="product.html" class="text-white text-decoration-none fw-bold" style="font-family: var(--font-heading); font-size: 1.1rem; letter-spacing: 1px;">Pro Wall-Mount Pull-Up Bar</a>
                      </div>
                    </div>
                  </td>
                  <td class="text-white fw-bold">$129.99</td>
                  <td>
                    <div class="qty-selector" style="transform: scale(0.85); transform-origin: left;">
                      <button class="qty-btn" onclick="updateCartQty(this, -1, 129.99, 'sub-1')">-</button>
                      <input type="text" class="qty-input" value="1" readonly>
                      <button class="qty-btn" onclick="updateCartQty(this, 1, 129.99, 'sub-1')">+</button>
                    </div>
                  </td>
                  <td class="text-gold fw-bold" id="sub-1">$129.99</td>
                  <td>
                    <button class="btn p-0 text-muted-apex" onmouseover="this.style.color='var(--danger)'" onmouseout="this.style.color='var(--text-muted)'" onclick="removeCartItem('cart-item-1')">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
                

              </tbody>
            </table>
          </div>
          
          <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-apex pb-4">
            <a href="shop.html" class="btn-apex-outline">CONTINUE SHOPPING</a>
            <button class="btn-apex-outline" onclick="recalculateTotal()">UPDATE CART</button>
          </div>

          <!-- Coupon Area -->
          <div class="apex-card border-dashed">
            <h5 class="apex-card-title mb-3 fs-5">COUPON CODE</h5>
            <div class="d-flex gap-2 mb-2">
              <input type="text" id="couponInput" class="apex-form-control text-uppercase" placeholder="ENTER COUPON CODE" style="max-width: 300px;">
              <button class="btn-apex-primary" onclick="applyCoupon()">APPLY</button>
            </div>
            <p class="text-muted-apex mb-0" style="font-size: 12px;">Try using <strong class="text-white">APEX10</strong> for 10% off your entire order.</p>
            <div id="couponMsg" class="mt-2" style="font-size: 12px; font-weight: 600; display: none;"></div>
          </div>
          
        </div>
        
        <!-- Right Column: Order Summary -->
        <div class="col-lg-4">
          <div class="apex-card position-sticky" style="top: 100px;">
            <div class="apex-card-header border-bottom border-apex pb-3 mb-4">
              <h5 class="apex-card-title mb-0 fs-4">ORDER SUMMARY</h5>
            </div>
            
            <div class="d-flex justify-content-between mb-3 text-muted-apex">
              <span>Subtotal</span>
              <span id="summarySubtotal" class="text-white fw-bold">$269.96</span>
            </div>
            
            <div class="d-flex justify-content-between mb-3 text-muted-apex">
              <span>Shipping</span>
              <span class="text-success fw-bold">FREE</span>
            </div>
            
            <div class="d-flex justify-content-between mb-3 text-muted-apex" id="discountRow" style="display: none !important;">
              <span>Discount</span>
              <span id="summaryDiscount" class="text-danger fw-bold">-$0.00</span>
            </div>
            
            <div class="divider my-4"></div>
            
            <div class="d-flex justify-content-between align-items-end mb-4">
              <span class="text-white fw-bold" style="font-size: 1.1rem;">Total</span>
              <span id="summaryTotal" class="text-gold fw-bold" style="font-size: 2rem; line-height: 1;">$269.96</span>
            </div>
            
            <a href="checkout.html" class="btn-apex-primary w-100 justify-content-center btn-lg fs-6 py-3 mb-4">PROCEED TO CHECKOUT</a>
            
            <div class="text-center">
              <p class="text-muted-apex mb-2" style="font-size: 11px; text-transform: uppercase; letter-spacing: 1px; font-weight: 700;">We Accept</p>
              <div class="d-flex justify-content-center gap-2">
                <i class="fab fa-cc-visa" style="font-size: 28px; color: var(--text-muted);"></i>
                <i class="fab fa-cc-mastercard" style="font-size: 28px; color: var(--text-muted);"></i>
                <i class="fab fa-cc-paypal" style="font-size: 28px; color: var(--text-muted);"></i>
                <i class="fab fa-cc-apple-pay" style="font-size: 28px; color: var(--text-muted);"></i>
              </div>
            </div>
            
          </div>
          
          <div class="d-flex justify-content-center align-items-center gap-3 mt-4 text-muted-apex" style="font-size: 12px; font-weight: 600;">
            <span><i class="fas fa-lock me-1"></i> Secure Checkout</span>
            <span><i class="fas fa-shield-alt me-1"></i> 256-bit Encryption</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- You Might Also Like -->
  <section class="section-pad bg-secondary-apex border-top border-apex">
    <div class="container">
      <div class="section-header text-center mb-5">
        <h2 class="section-title fs-2 mb-1">YOU MIGHT ALSO LIKE</h2>
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
            <span class="product-badge bg-apex-gold text-darkest">Best Seller</span>
            <button class="product-wishlist-btn"><i class="far fa-heart"></i></button>
            <a href="product.html" class="product-card-img-wrapper d-block">
              <img src="https://images.unsplash.com/photo-1574680178050-55c6a6a96e0a?w=400&h=400&fit=crop" alt="Freestanding Dip Bars">
            </a>
            <div class="product-card-body">
              <div class="product-category">Dip Bars</div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">Freestanding Dip Bars</a></h4>
              <div class="product-rating">
                <div class="stars">★★★★★</div>
                <span class="rating-count">(143)</span>
              </div>
              <div class="product-price-wrapper">
                <span class="product-price">$199.99</span>
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
              <img src="https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?w=400&h=400&fit=crop" alt="20KG Weighted Vest">
            </a>
            <div class="product-card-body">
              <div class="product-category">Weighted Vests</div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">20KG Weighted Vest</a></h4>
              <div class="product-rating">
                <div class="stars">★★★★☆</div>
                <span class="rating-count">(87)</span>
              </div>
              <div class="product-price-wrapper">
                <span class="product-price">$119.99</span>
              </div>
              <button class="btn-apex-primary w-100 justify-content-center">ADD TO CART</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

