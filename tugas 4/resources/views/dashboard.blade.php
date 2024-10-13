@extends('layouts.app')

@section('title', 'Zalora Dashboard ')

@section('contents')
  <div class="container mb-5">
    <div class="container-fluid mb-4">
        <div class="card shadow-sm p-4">
            <h3 class="mb-3">Welcome, {{ auth()->user()->nama }}! </h3>
            <p class="lead">Eksklusif untuk Anda: Produk-produk pilihan dengan promo istimewa! 🎁 Temukan apa yang cocok untuk Anda</p>
        </div>
      </div>
    <div class="container-fluid pt-5">
      <div class="row px-xl-5 pb-3">
          <div class="col-lg-4 col-md-6 pb-1">
              <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                  <p class="text-right">15 Products</p>
                  <a href="" class="cat-img position-relative overflow-hidden mb-3">
                      <img class="img-fluid" src="img/cat-1.jpg" alt="">
                  </a>
                  <h5 class="font-weight-semi-bold m-0">Men's dresses</h5>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
              <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                  <p class="text-right">15 Products</p>
                  <a href="" class="cat-img position-relative overflow-hidden mb-3">
                      <img class="img-fluid" src="img/cat-2.jpg" alt="">
                  </a>
                  <h5 class="font-weight-semi-bold m-0">Women's dresses</h5>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
              <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                  <p class="text-right">15 Products</p>
                  <a href="" class="cat-img position-relative overflow-hidden mb-3">
                      <img class="img-fluid" src="img/cat-3.jpg" alt="">
                  </a>
                  <h5 class="font-weight-semi-bold m-0">Baby's dresses</h5>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
              <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                  <p class="text-right">15 Products</p>
                  <a href="" class="cat-img position-relative overflow-hidden mb-3">
                      <img class="img-fluid" src="img/cat-4.jpg" alt="">
                  </a>
                  <h5 class="font-weight-semi-bold m-0">Accerssories</h5>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
              <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                  <p class="text-right">15 Products</p>
                  <a href="" class="cat-img position-relative overflow-hidden mb-3">
                      <img class="img-fluid" src="img/cat-5.jpg" alt="">
                  </a>
                  <h5 class="font-weight-semi-bold m-0">Bags</h5>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 pb-1">
              <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                  <p class="text-right">15 Products</p>
                  <a href="" class="cat-img position-relative overflow-hidden mb-3">
                      <img class="img-fluid" src="img/cat-6.jpg" alt="">
                  </a>
                  <h5 class="font-weight-semi-bold m-0">Shoes</h5>
              </div>
          </div>
      </div>
  </div>
  <!-- Categories End -->

  <!-- Products Start -->
  <div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="img/product-6.jpg" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="img/product-7.jpg" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="img/product-8.jpg" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">
                        <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->
</div>

<h2 id="dashboard-title" class="text-center my-5">User Feedback and Reviews</h2>
    <div class="row justify-content-center">
        <!-- First Review -->
        <div class="col-lg-8 mb-4 review-item d-flex align-items-center card-container">
            <div class="user-img">
                <img src="{{ asset('img/icon.png') }}" class="img-fluid rounded-circle hover-zoom" alt="User 1">
            </div>
            <div class="user-review ml-3">
                <h5 class="mb-1">Reviewer 1</h5>
                <div class="stars mb-1">
                    @for($i = 1; $i <= 4; $i++)
                        <span class="fa fa-star checked"></span>
                    @endfor
                    <span class="fa fa-star"></span> <!-- 4 stars rating -->
                </div>
                <p class="text-muted">"Very comfortable, great quality!"</p>
            </div>
        </div>

        <!-- Second Review -->
        <div class="col-lg-8 mb-4 review-item d-flex align-items-center card-container">
            <div class="user-img">
                <img src="{{ asset('img/icon.png') }}" class="img-fluid rounded-circle hover-zoom" alt="User 2">
            </div>
            <div class="user-review ml-3">
                <h5 class="mb-1">Reviewer 2</h5>
                <div class="stars mb-1">
                    @for($i = 1; $i <= 5; $i++)
                        <span class="fa fa-star checked"></span>
                    @endfor
                </div>
                <p class="text-muted">"Amazing design and perfect size!"</p>
            </div>
        </div>

        <!-- Third Review -->
        <div class="col-lg-8 mb-4 review-item d-flex align-items-center card-container">
            <div class="user-img">
                <img src="{{ asset('img/icon.png') }}" class="img-fluid rounded-circle hover-zoom" alt="User 3">
            </div>
            <div class="user-review ml-3">
                <h5 class="mb-1">Reviewer 3</h5>
                <div class="stars mb-1">
                    @for($i = 1; $i <= 3; $i++)
                        <span class="fa fa-star checked"></span>
                    @endfor
                    @for($i = 4; $i <= 5; $i++)
                        <span class="fa fa-star"></span>
                    @endfor
                </div>
                <p class="text-muted">"Good, but could be softer."</p>
            </div>
        </div>

        <!-- Fourth Review -->
        <div class="col-lg-8 mb-4 review-item d-flex align-items-center card-container">
            <div class="user-img">
                <img src="{{ asset('img/icon.png') }}" class="img-fluid rounded-circle hover-zoom" alt="User 4">
            </div>
            <div class="user-review ml-3">
                <h5 class="mb-1">Reviewer 4</h5>
                <div class="stars mb-1">
                    @for($i = 1; $i <= 5; $i++)
                        <span class="fa fa-star checked"></span>
                    @endfor
                </div>
                <p class="text-muted">"Perfect for my living room!"</p>
            </div>
        </div>
    </div>

  <!-- Content Row -->
{{-- 
  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Promo Of The Month 💥</h6>
          
        </div>
        <!-- Card Body -->
        <div class="card-body">
          
          <div class="mt-4 text-center">
            <img src="{{ asset('img/shop.png') }}" class="img-fluid" alt="Login Image">
          </div>
        </div>
      </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Company Owner 🚀</h6>
          
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="mt-4 text-center">
            <img src="{{ asset('img/furstin.png') }}" class="img-fluid" alt="Login Image">
          </div>
          
        </div>
      </div>
    </div>
  </div> --}}

  
    
@endsection