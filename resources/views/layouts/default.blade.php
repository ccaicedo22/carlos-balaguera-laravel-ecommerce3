<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
  @if(session()->has('status') == true)
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
   
    <strong class="mr-auto">Atencion</strong>
    <small>now</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    {{session()->get('status')}}
  </div>
</div>
  @endif

    <div class="page-holder">
    <header class="header bg-white">
        @include('includes.header')
    </header>
    <main>
        @yield('content')
    </main>

     <!-- JavaScript files-->
     <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
     <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('vendor/lightbox2/js/lightbox.min.js')}}"></script>
     <script src="{{asset('vendor/nouislider/nouislider.min.js')}}"></script>
     <script src="{{asset('vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
     <script src="{{asset('vendor/owl.carousel2/owl.carousel.min.js')}}"></script>
     <script src="{{asset('vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
     <script src="{{asset('js/front.js')}}"></script>
     <script>
       // ------------------------------------------------------- //
       //   Inject SVG Sprite - 
       //   see more here 
       //   https://css-tricks.com/ajaxing-svg-sprite/
       // ------------------------------------------------------ //
       function injectSvgSprite(path) {
       
           var ajax = new XMLHttpRequest();
           ajax.open("GET", path, true);
           ajax.send();
           ajax.onload = function(e) {
           var div = document.createElement("div");
           div.className = 'd-none';
           div.innerHTML = ajax.responseText;
           document.body.insertBefore(div, document.body.childNodes[0]);
           }
       }
       // this is set to BootstrapTemple website as you cannot 
       // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
       // while using file:// protocol
       // pls don't forget to change to your domain :)
       injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
       $('.toast').toast({delay: 200,autohide: false})
       $('.toast').toast('show')
     </script>
     <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <footer class="bg-dark text-white">
        @include('includes.footer')
    </footer>
</div>
</body>

</html>