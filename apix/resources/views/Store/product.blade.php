@extends("layouts.Store")

@section('content')
      <!-- Breadcrumb -->
  <div class="container">
    <nav aria-label="breadcrumb" class="apex-breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="shop.html">Shop</a></li>
        <li class="breadcrumb-item"><a href="shop.html">Pull-Up Bars</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pro Wall-Mount Pull-Up Bar</li>
      </ol>
    </nav>
  </div>

  <!-- Main Product Section -->
  <section class="py-5">
    <div class="container">
      <div class="row g-5">
        <!-- Gallery -->
        <div class="col-lg-6">
          <div class="bg-secondary-apex rounded border border-apex mb-3 overflow-hidden position-relative" style="aspect-ratio: 1/1;">
            <span class="product-badge bg-apex-gold text-darkest">Best Seller</span>
            <img id="mainProductImg" src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=800&h=800&fit=crop" class="w-100 h-100" style="object-fit: cover;" alt="Pro Wall-Mount Pull-Up Bar">
          </div>
          <div class="d-flex gap-3">
            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=200&h=200&fit=crop" class="product-thumb active" onclick="changeImage(this)" alt="Thumb 1">
            <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=200&h=200&fit=crop" class="product-thumb" onclick="changeImage(this)" alt="Thumb 2">
            <img src="https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?w=200&h=200&fit=crop" class="product-thumb" onclick="changeImage(this)" alt="Thumb 3">
            <img src="https://images.unsplash.com/photo-1599058917212-d750089bc07e?w=200&h=200&fit=crop" class="product-thumb" onclick="changeImage(this)" alt="Thumb 4">
          </div>
        </div>
        
        <!-- Details -->
        <div class="col-lg-6">
          <div class="product-category mb-2">{{$product->category->name }}</div>
          <h1 class="page-hero-title text-start mb-3" style="font-size: 3rem;">{{$product->name }}</h1>
          
          <div class="d-flex align-items-center gap-3 mb-4">
            <div class="stars" style="font-size: 16px;">★★★★☆</div>
            <span class="text-muted-apex" style="font-size: 14px;">(234 reviews)</span>
            <span class="badge bg-success text-white" style="font-weight: 600; letter-spacing: 1px;">In Stock</span>
          </div>
          
          <div class="divider"></div>
          
          <div class="d-flex align-items-end gap-3 mb-4">
           <span class="product-price" style="font-size: 2.5rem; line-height: 1;">${{ $product->price }}</span>
            {{--  <span class="product-price-old fs-5 mb-1">$159.99</span>
            <span class="badge bg-danger mb-2" style="font-weight: 700;">19% OFF</span> --}}
          </div>
          
          <div class="divider"></div>
          
          <p class="text-muted-apex fs-6 line-height-lg mb-4">{{$product->description }}</p>
          
          <div class="d-flex align-items-center gap-3 mb-4">
            <span class="text-uppercase text-muted-apex" style="font-size: 12px; font-weight: 700; letter-spacing: 1px;">Quantity:</span>
            <div class="qty-selector">
              <button class="qty-btn" onclick="updateQty(-1)">-</button>
              <input type="text" id="qtyInput" class="qty-input" value="1" readonly>
              <button class="qty-btn" onclick="updateQty(1)">+</button>
            </div>
          </div>
          
          <div class="d-flex flex-column gap-3 mb-4">
            <button class="btn-apex-primary btn-apex-lg w-100 justify-content-center">ADD TO CART</button>
            <a href="checkout.html" class="btn-apex-outline btn-apex-lg w-100 justify-content-center text-center">BUY IT NOW</a>
          </div>
          
          <div class="mb-4">
            <a href="#" class="text-muted-apex text-decoration-none d-inline-flex align-items-center gap-2" style="font-size: 13px; font-weight: 600; transition: color 0.3s;" onmouseover="this.style.color='var(--apex-gold)'" onmouseout="this.style.color='var(--text-muted)'">
              <i class="far fa-heart"></i> ADD TO WISHLIST
            </a>
          </div>
          
          <div class="divider"></div>
          
          <div class="text-muted-apex" style="font-size: 13px; line-height: 2;">
            {{-- <div><strong>SKU:</strong> APX-PUB-001</div> --}}
            <div><strong>Category:</strong> <a href="shop.html" class="text-gold">{{$product->category->name }}</a></div>
            {{-- <div><strong>Tags:</strong> <a href="#" class="text-gold">pull-up</a>, <a href="#" class="text-gold">calisthenics</a>, <a href="#" class="text-gold">wall-mount</a></div> --}}
          </div>

          <!-- Trust Badges -->
          <div class="d-flex flex-wrap gap-4 mt-4 pt-3 border-top border-apex">
            <div class="d-flex align-items-center gap-2">
              <i class="fas fa-truck text-gold fs-5"></i>
              <span style="font-size: 12px; font-weight: 600; color: var(--text-primary);">Free Shipping</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="fas fa-undo text-gold fs-5"></i>
              <span style="font-size: 12px; font-weight: 600; color: var(--text-primary);">Easy Returns</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="fas fa-shield-alt text-gold fs-5"></i>
              <span style="font-size: 12px; font-weight: 600; color: var(--text-primary);">2-Year Warranty</span>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <!-- Product Tabs -->
  <section class="py-5 bg-main border-top border-apex">
    <div class="container">
      <ul class="nav apex-tabs justify-content-center" id="productTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc" type="button" role="tab">Description</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button" role="tab">Specifications</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab">Reviews (234)</button>
        </li>
      </ul>
      
      <div class="tab-content pt-4 pb-5" id="productTabContent">
        <!-- Description -->
        <div class="tab-pane fade show active text-muted-apex" id="desc" role="tabpanel">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h4 class="text-white mb-3" style="font-family: var(--font-heading); letter-spacing: 1px;">BUILT FOR THE STRONGEST</h4>
              <p class="mb-4 line-height-lg">The APEX Pro Wall-Mount Pull-Up Bar is the ultimate addition to your home or garage gym. Engineered from heavy-duty 11-gauge steel, it provides a completely rigid foundation for your calisthenics training. Whether you're working on strict pull-ups, muscle-ups, or attaching rings for varied workouts, this bar will not budge.</p>
              
              <h5 class="text-white mb-3" style="font-family: var(--font-heading); letter-spacing: 1px;">VERSATILE GRIP POSITIONS</h5>
              <p class="mb-4 line-height-lg">Featuring multiple knurled grip segments, you can seamlessly transition between wide, neutral, and narrow grips to target different muscle groups. The premium black powder coat finish provides an excellent texture that holds chalk well without tearing your hands during high-rep sets.</p>
              
              <h5 class="text-white mb-3" style="font-family: var(--font-heading); letter-spacing: 1px;">SECURE INSTALLATION</h5>
              <p class="mb-0 line-height-lg">Designed to mount perfectly on standard 16" or 24" wood studs, or directly into concrete. All heavy-duty mounting hardware is included. Once installed, it protrudes 30 inches from the wall, giving you plenty of clearance for kipping movements or attaching suspension trainers.</p>
            </div>
          </div>
        </div>
        
        <!-- Specs -->
        <div class="tab-pane fade" id="specs" role="tabpanel">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <table class="apex-table bg-card border border-apex rounded">
                <tbody>
                  <tr>
                    <td class="text-muted-apex w-25">Material</td>
                    <td class="text-white">11-Gauge Military-Grade Steel</td>
                  </tr>
                  <tr>
                    <td class="text-muted-apex">Weight Capacity</td>
                    <td class="text-white">400 lbs (181 kg)</td>
                  </tr>
                  <tr>
                    <td class="text-muted-apex">Dimensions</td>
                    <td class="text-white">50" W x 30" D x 20" H</td>
                  </tr>
                  <tr>
                    <td class="text-muted-apex">Bar Diameter</td>
                    <td class="text-white">1.25 inches (32mm)</td>
                  </tr>
                  <tr>
                    <td class="text-muted-apex">Product Weight</td>
                    <td class="text-white">35 lbs (16 kg)</td>
                  </tr>
                  <tr>
                    <td class="text-muted-apex">Grip Type</td>
                    <td class="text-white">Medium knurling, Powder-coated</td>
                  </tr>
                  <tr>
                    <td class="text-muted-apex">Installation</td>
                    <td class="text-white">Wood studs or concrete (Hardware included)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
        <!-- Reviews -->
        <div class="tab-pane fade" id="reviews" role="tabpanel">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="d-flex justify-content-between align-items-center border-bottom border-apex pb-4 mb-4">
                <div>
                  <h4 class="text-white m-0" style="font-family: var(--font-heading); letter-spacing: 1px;">CUSTOMER REVIEWS</h4>
                  <div class="d-flex align-items-center gap-2 mt-2">
                    <div class="stars fs-5">★★★★☆</div>
                    <span class="text-white fw-bold">4.8 out of 5</span>
                    <span class="text-muted-apex">Based on 234 reviews</span>
                  </div>
                </div>
                <button class="btn-apex-outline">Write a Review</button>
              </div>
              
              <!-- Review 1 -->
              <div class="mb-4 border-bottom border-apex pb-4">
                <div class="d-flex justify-content-between mb-2">
                  <div class="stars fs-6">★★★★★</div>
                  <span class="text-muted-apex" style="font-size: 12px;">June 20, 2026</span>
                </div>
                <h6 class="text-white mb-2 fw-bold">Solid as a rock</h6>
                <p class="text-muted-apex mb-2">Installed this in my garage last week. The quality is exceptional. I weigh 210lbs and do weighted pull-ups with an extra 45lbs, and the bar doesn't flex at all. The grip is perfect, not too aggressive but won't slip.</p>
                <span class="text-gold" style="font-size: 12px; font-weight: 700;">Alex M. <span class="text-muted-apex fw-normal ms-1">✓ Verified Buyer</span></span>
              </div>
              
              <!-- Review 2 -->
              <div class="mb-4 border-bottom border-apex pb-4">
                <div class="d-flex justify-content-between mb-2">
                  <div class="stars fs-6">★★★★★</div>
                  <span class="text-muted-apex" style="font-size: 12px;">June 15, 2026</span>
                </div>
                <h6 class="text-white mb-2 fw-bold">Best investment for home gym</h6>
                <p class="text-muted-apex mb-2">I was hesitating between this and a cheaper brand. So glad I went with APEX. The multi-grip options let me hit different back angles, and the 30-inch clearance is perfect for kipping and front levers.</p>
                <span class="text-gold" style="font-size: 12px; font-weight: 700;">Sarah K. <span class="text-muted-apex fw-normal ms-1">✓ Verified Buyer</span></span>
              </div>

              <!-- Review 3 -->
              <div class="mb-2">
                <div class="d-flex justify-content-between mb-2">
                  <div class="stars fs-6">★★★★☆</div>
                  <span class="text-muted-apex" style="font-size: 12px;">June 5, 2026</span>
                </div>
                <h6 class="text-white mb-2 fw-bold">Great bar, tough install</h6>
                <p class="text-muted-apex mb-2">The bar itself is a 5/5. Dropped a star because installing it alone was challenging due to the weight. Definitely get a friend to help hold it up while you drive the lag bolts in. Once it's up, it's perfect.</p>
                <span class="text-gold" style="font-size: 12px; font-weight: 700;">Marcus T. <span class="text-muted-apex fw-normal ms-1">✓ Verified Buyer</span></span>
              </div>
              
              <div class="text-center mt-4">
                <button class="btn text-muted-apex" style="font-size: 13px; font-weight: 600; text-decoration: underline;">Load More Reviews</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Products -->
  <section class="section-pad bg-secondary-apex border-top border-apex">
    <div class="container">
      <div class="section-header text-start mb-4">
        <h2 class="section-title fs-2 mb-1">YOU MIGHT ALSO LIKE</h2>
        <div class="section-divider ms-0 mb-0 w-25"></div>
      </div>
      <div class="row g-4">
        <!-- Product -->
        <div class="col-lg-3 col-md-6">
          <div class="product-card">
            <span class="product-badge badge-top">Top Rated</span>
            <button class="product-wishlist-btn"><i class="far fa-heart"></i></button>
            <a href="product.html" class="product-card-img-wrapper d-block">
              <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=400&fit=crop" alt="Wooden Parallettes Pro">
            </a>
            <div class="product-card-body">
              <div class="product-category">Parallettes</div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">Wooden Parallettes Pro</a></h4>
              <div class="product-rating">
                <div class="stars">★★★★★</div>
                <span class="rating-count">(156)</span>
              </div>
              <div class="product-price-wrapper">
                <span class="product-price">$89.99</span>
              </div>
              <button class="btn-apex-primary w-100 justify-content-center">ADD TO CART</button>
            </div>
          </div>
        </div>
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
              <img src="https://images.unsplash.com/photo-1616803689943-5601631c7fec?w=400&h=400&fit=crop" alt="Gymnastic Rings Pro">
            </a>
            <div class="product-card-body">
              <div class="product-category">Gymnastic Rings</div>
              <h4 class="product-name"><a href="product.html" class="text-white text-decoration-none">Gymnastic Rings Pro</a></h4>
              <div class="product-rating">
                <div class="stars">★★★★★</div>
                <span class="rating-count">(201)</span>
              </div>
              <div class="product-price-wrapper">
                <span class="product-price">$54.99</span>
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