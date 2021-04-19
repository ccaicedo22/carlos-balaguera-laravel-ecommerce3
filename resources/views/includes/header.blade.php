<div class="container px-0 px-lg-3">
    <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.html"><span class="font-weight-bold text-uppercase text-dark">MY TIENDITA</span></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <!-- Link--><a class="nav-link active" href="{{route('producto.index')}}">Home</a>
          </li>
         
            <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.html">Homepage</a><a class="dropdown-item border-0 transition-link" href="shop.html">Category</a><a class="dropdown-item border-0 transition-link" href="detail.html">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.html">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.html">Checkout</a></div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">               
          <li class="nav-item">
            <a class="nav-link" href="{{route('carrito.index')}}">
             <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>
             Cart
             <small class="text-gray">( 
              @if (session()->has('carrito.productos'))
                  {{count(session()->get('carrito.productos'))}}
              @else 
                0
              @endif 
              )</small>
            </a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#"> <i class="far fa-heart mr-1"></i><small class="text-gray"> (0)</small></a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('logout')}}"> <i class="fas fa-user-alt mr-1 text-gray"></i></a> 
           <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form></li>
          <li class="nav-item"><a class="nav-link" href="{{route('login')}}"> <i class="fas fa-user-alt mr-1 text-gray"></i>Login</a></li>
        </ul>
      </div>
    </nav>
  </div>