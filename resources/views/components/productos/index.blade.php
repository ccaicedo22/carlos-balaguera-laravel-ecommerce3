@extends('layouts.default')
@section('content')
<div class="container">
    <!-- CATEGORIES SECTION-->
    {{-- <section class="pt-5">
      <header class="text-center">
        <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
        <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
      </header>
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0"><a class="category-item" href="shop.html"><img class="img-fluid" src="img/cat-img-1.jpg" alt=""><strong class="category-item-title">Clothes</strong></a></div>
        <div class="col-md-4 mb-4 mb-md-0"><a class="category-item mb-4" href="shop.html"><img class="img-fluid" src="img/cat-img-2.jpg" alt=""><strong class="category-item-title">Shoes</strong></a><a class="category-item" href="shop.html"><img class="img-fluid" src="img/cat-img-3.jpg" alt=""><strong class="category-item-title">Watches</strong></a></div>
        <div class="col-md-4"><a class="category-item" href="shop.html"><img class="img-fluid" src="img/cat-img-4.jpg" alt=""><strong class="category-item-title">Electronics</strong></a></div>
      </div>
    </section> --}}
    <!-- TRENDING PRODUCTS-->
    <section class="py-5">
      <header>
        <p class="small text-muted small text-uppercase mb-1"></p>
        <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
      </header>
      <div class="row">
        <!-- PRODUCT-->

        @foreach ($productos as $producto)
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="position-relative mb-3">
                <div class="badge text-white badge-"></div><a class="d-block" href="{{ route('producto.show', ['producto'=> $producto->id ] )  }}"><img class="img-fluid w-100" src="
                   @if ($producto->imagen != null && count($producto->imagen) > 0 )
                    {{$producto->imagen [0]->url}}
                    @else
                      https://via.placeholder.com/300
                    @endif
                    
                    " alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('producto.show', ['producto'=> $producto->id ] )}}">Add to cart</a></li>
                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">{{$producto->nombre}}</a></h6>
              <p class="small text-muted">${{$producto->precio}}</p>
            </div>
          </div>
        @endforeach
       
      </div>
    </section>
    <!-- SERVICES sacar a otro include-->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-4 mb-3 mb-lg-0">
            <div class="d-inline-block">
              <div class="media align-items-end">
                <svg class="svg-icon svg-icon-big svg-icon-light">
                  <use xlink:href="#delivery-time-1"> </use>
                </svg>
                <div class="media-body text-left ml-3">
                  <h6 class="text-uppercase mb-1">Free shipping</h6>
                  <p class="text-small mb-0 text-muted">Free shipping worlwide</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-3 mb-lg-0">
            <div class="d-inline-block">
              <div class="media align-items-end">
                <svg class="svg-icon svg-icon-big svg-icon-light">
                  <use xlink:href="#helpline-24h-1"> </use>
                </svg>
                <div class="media-body text-left ml-3">
                  <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                  <p class="text-small mb-0 text-muted">Free shipping worlwide</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-inline-block">
              <div class="media align-items-end">
                <svg class="svg-icon svg-icon-big svg-icon-light">
                  <use xlink:href="#label-tag-1"> </use>
                </svg>
                <div class="media-body text-left ml-3">
                  <h6 class="text-uppercase mb-1">Festival offer</h6>
                  <p class="text-small mb-0 text-muted">Free shipping worlwide</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- NEWSLETTER sacar a otro include-->
    <section class="py-5">
      <div class="container p-0">
        <div class="row">
          <div class="col-lg-6 mb-3 mb-lg-0">
            <h5 class="text-uppercase">Let's be friends!</h5>
            <p class="text-small text-muted mb-0">Nisi nisi tempor consequat laboris nisi.</p>
          </div>
          <div class="col-lg-6">
            <form action="#">
              <div class="input-group flex-column flex-sm-row mb-3">
                <input class="form-control form-control-lg py-3" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-dark btn-block" id="button-addon2" type="submit">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection