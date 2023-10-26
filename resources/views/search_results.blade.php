<!DOCTYPE html>
<html lang="en">

  <head>

    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Damodar Cine Lounge</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo" style="width: 200px; height: 80px; overflow: hidden; display: block;">
                        <img src="assets/images/logo.jpg" alt="klassy cafe html template" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                        </a>

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                        <li><a href="{{ url('/') }}" class="active">Home</a></li>
                        <li><a href="{{ url('/') }}">About</a></li>
                        <li><a href="{{ url('/') }}">Menu</a></li>
                        <li><a href="{{ url('/') }}">Contact Us</a></li>
                        <li><a href="{{url('/helppage')}}">Help</a></li>
                            
                            <li class="scroll-to-section" style="background-color: red"><a href="#menu"> 
                             @auth

                            <a href="{{url('/showcart',Auth::user()->id)}}">

                            Cart{{$count}}

</a>

                            @endauth

                            @guest

                            Cart[0]

                            @endguest

                            </a></li>


                            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <li>
                        <x-app-layout>
  
                        </x-app-layout>
                    </li>

                    @else
                       <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif

                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


<div class="menu-item-carousel">

    <div class="col-lg-12">
        <div class="owl-menu-item owl-carousel">

        @foreach($menuItems as $menuItem)

        <form action="{{url('/addcart', $menuItem->id)}}" method="post">
            @csrf

            <div class="item">
                <div style="background-image: url('/menuimage/{{$menuItem->image}}');" class='card'>
                    <div class="price"><h6>{{$menuItem->price}}</h6></div>
                    <div class='info'>
                        <h1 class='title'>{{$menuItem->item}}</h1>
                        <p class='description'>{{$menuItem->description}}</p>
                        <div class="main-text-button">
                            <!-- You can add any additional buttons or text here -->
                        </div>
                    </div>
                </div>

                <input type="number" name="quantity" min="1" value="1" style="width:80px;">
                <input type="submit" value="Add to cart">
            </div>

        </form>

        @endforeach

        </div>
    </div>
</div>


        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>
</body>
</html>