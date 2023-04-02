@extends('layout')
@section('content')
<section id="home">
    <div class="landing d-flex justify-content-center align-items-center">
      <div class="text-center">
        <h1 class="text-black">Welcome to My E-commerce Website</h1>
        <p class=" fs-6 text-white-50 mb-5 ">Shop our latest collection of products</p>
        <a href="{{route('home.shope')}}" class="btn rounded-pill main-btn bg-info ">Shop Now</a>
      </div>
    </div>
    <div class="start mt-3 mb-3 text-center d-block btn bg-info ">some exemple of our product</div>
    <section id="shope">
       <div class="products mt-5 mb-5">
          <div class="container">
              <div class="row">
              <div class="col-md-4 col-lg-3">
              <div class="card">
                  <img src="images/images (2).jpg" class="card-img-top w-60 h-30 shop" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">type one of product</h5>
                    <p class="card-text">Description of the product type</p>
                    <a href="#" class="btn btn-info text-black">discover more</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-3">
                <div class="card">
                  <img src="images/images (1).jpg" class="card-img-top  w-60 h-30 shop" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">type tow of product</h5>
                    <p class="card-text">Description of the product type</p>
                    <a href="#" class="btn btn-info text-black">discover more</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-3">
                <div class="card">
                  <img src="images/images (3).jpg" class="card-img-top  w-60 h-30 shop" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">type three of product</h5>
                    <p class="card-text">Description of the product type</p>
                    <a href="#" class="btn btn-info text-black">discover more</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-3">
                  <div class="card" >
                    <img src="images/images (4).jpg" class="card-img-top  w-60 h-30 shop" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">type four of product</h5>
                      <p class="card-text">Description of the product type</p>
                      <a href="#" class="btn btn-info text-black">discover more</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
       </div>
      </section>
@endsection