@extends('layouts.default')
@section('content')
    <!--  Modal -->
    <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="row align-items-stretch">
                        <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center"
                                style="background: url(img/product-5.jpg)" href="img/product-5.jpg"
                                data-lightbox="productoview" title="Red digital smartwatch"></a><a class="d-none"
                                href="img/product-5-alt-1.jpg" title="Red digital smartwatch"
                                data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg"
                                title="Red digital smartwatch" data-lightbox="productoview"></a></div>
                        <div class="col-lg-6">
                            <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                            <div class="p-5 my-md-4">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                </ul>
                                <h2 class="h4">{{ $producto->nombre }}</h2>
                                <p class="text-muted">${{ $producto->precio }}</p>
                                <p class="text-small mb-4">{{ $producto->descripcion }}</p>
                                <div class="row align-items-stretch mb-4">
                                    <div class="col-sm-7 pr-sm-0">
                                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                                            <span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                            <div class="quantity">
                                                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                                <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 pl-sm-0"><a
                                            class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0"
                                            href="{{ route('carrito.create', ['producto' => $producto->id]) }}">Add to cart</a>
                                    </div>
                                </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to
                                    wish list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <!-- PRODUCT SLIDER-->
                    <div class="row m-sm-0">
                        <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0">
                            <div class="owl-thumbs d-flex flex-row flex-sm-column" data-slider-id="1">
                @for ($a=0; $a < count($producto->imagen); $a++)
                        <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img class="w-100" src="{{$producto->imagen[$a]->url}}" alt="..."></div>
                        @endfor  

                                
                            </div>
                        </div>
                        <div class="col-sm-10 order-1 order-sm-2">
                            <div class="owl-carousel product-slider" data-slider-id="1">

                                 @for ($u=0; $u < count($producto->imagen); $u++)
                        <a class="d-block" href="{{$producto->imagen[0]->url}}" data-lightbox="product" title="Product item 1"><img class="img-fluid" src="{{$producto->imagen[$u]->url}}" alt="..."></a>
                        @endfor    


                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT DETAILS-->
                <div class="col-lg-6">
                    <ul class="list-inline mb-2">
                        @for ($i = 0; $i < $producto->puntuacion; $i++)
                            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                        @endfor
                    </ul>
                    <h1>{{ $producto->nombre }}</h1>
                    <p class="text-muted lead">{{ $producto->precio }}</p>
                    <p class="text-small mb-4">{{ $producto->descripcion }}</p>
                    <div class="row align-items-stretch mb-4" >
                        <form method="POST" class="row align-items-stretch mb-4" action="{{ route('carrito.store') }}">
                            @csrf
                        <div class="col-sm-5 pr-sm-0">
                            <div
                                class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white">
                                <span class="small text-uppercase text-gray mr-4 no-select">quantity</span>
                                <div class="quantity">
                                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                    <input name='amount' class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                    <input name='productoId' class="form-control border-0 shadow-0 p-0" type="hidden" value="{{$producto->id}}">
                                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 pl-sm-0">
                            <input style="height: fit-content;" value="Add to cart" type="submit" class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" />
                        </div>
                        </form>    
                    </div>
                    
                    <a class="btn btn-link text-dark p-0 mb-4" href="#"><i class="far fa-heart mr-2"></i>Add to wish
                        list</a><br>
                    <ul class="list-unstyled small d-inline-block">
                        <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">SKU:</strong><span
                                class="ml-2 text-muted">039</span></li>
                        <li class="px-3 py-2 mb-1 bg-white text-muted"><strong
                                class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ml-2"
                                href="#">Demo Productos</a></li>
                        <li class="px-3 py-2 mb-1 bg-white text-muted"><strong
                                class="text-uppercase text-dark">Tags:</strong><a class="reset-anchor ml-2"
                                href="#">Innovation</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
