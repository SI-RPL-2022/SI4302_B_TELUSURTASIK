<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <title>TelusurTasik</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-style.css">

</head>
    {{-- <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50"> --}}
    <body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
        @include('partials.navbar')
     <!-- PRE LOADER -->
     {{-- <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section> --}}
     
		{{-- <!-- start home -->
		<section id="home" class="text-center">
            <div class="templatemo_headerimage">
              <div class="flexslider">
                <ul class="slides">
                  <li>
                      <img src="images/slider-image1.jpg" alt="Slide 1">
                      <div class="slider-caption">
                          <div class="templatemo_homewrapper">
                            <h1 class="wow fadeInDown" data-wow-delay="2000">Solution Company</h1>
                            <h2 class="wow fadeInDown" data-wow-delay="2000">
                              <span>WE DESIGN &AMP; CODE WEBSITES</span>
                          </h2>
                          <a href="#service" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">Our Work</a>	
                          </div>
                        </div>
                  </li>
                  <li>
                      <img src="images/slider-image2.jpg" alt="Slide 2">
                      <div class="slider-caption">
                          <div class="templatemo_homewrapper">
                            <h1 class="wow fadeInDown" data-wow-delay="2000">Flex Slider, CSS Flexbox</h1>
                            <h2 class="wow fadeInDown" data-wow-delay="2000">
                              <span>work on all modern browsers, Works on IE 10+</span>
                          </h2>
                          <p>see caniuse.com for browser compatibility information</p>
                          <a href="#about" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">See about us</a>	
                          </div>
                        </div>
                  </li>
                </ul>
              </div>
            </div>				
          </section>
          <!-- end home --> --}}
        @yield('content')
    
 @include('partials.footer')

    <script src="js/script.js"></script>
    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>