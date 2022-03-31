@extends('partials.navbar')
@extends('partials.footer')
   
@section('home')
active
@endsection

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
  
     <!-- HOME -->
        <section id="home">
          <div class="row">
                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Distance Learning Education Center</h1>
                                             <h3>Our online courses are designed to fit in your industry supporting all-round with latest technologies.</h3>
                                             <a href="/about" class="section-btn btn btn-default smoothScroll">Discover more</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Start your journey with our practical courses</h1>
                                             <h3>Our online courses are built in partnership with technology leaders and are designed to meet industry demands.</h3>
                                             <a href="/help" class="section-btn btn btn-default smoothScroll">Take a course</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Efficient Learning Methods</h1>
                                             <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero. Visit <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo</a> page.</h3>
                                             <a href="#wisata" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
             <div class="row">
                    <div class="col-md-6 col-sm-12">
                       <div class="about-info">
                            <h2 style="align-center">Mengapa harus memilih TelusurTasik ?</h2>
                            <figure>
                                 <span><i class="fa fa-users"></i></span>
                                 <figcaption>
                                      <h3>Banyak Pilihan Wisata</h3>
                                      <p>Tersedia wisata dengan rating dan lokasi yang Anda inginkan</p>
                                 </figcaption>
                            </figure>

                            <figure>
                                 <span><i class="fa fa-certificate"></i></span>
                                 <figcaption>
                                      <h3>Bermacam-macam Kategori </h3>
                                      <p>Tersedia berbagai pilihan kategori untuk wisata yang Anda Inginkan</p>
                                 </figcaption>
                            </figure>

                            <figure>
                                <span><i class="fa fa-bar-chart-o"></i></span>
                                <figcaption>
                                    <h3>Terupdate dan Terpercaya</h3>
                                    <p>Website sudah terekomendasi dan selalu update</p>
                                </figcaption>
                            </figure>
                       </div>
                    </div>
            </div>
        </div>
    </section>

         <!-- Courses -->
         <section id="courses">
            <div class="container">
                 <div class="row">
  
                      <div class="col-md-12 col-sm-12">
                           <div class="section-title">
                                <h2>Popular Destination <small>Choose place you want to go</small></h2>
                           </div>
  
                           <div class="owl-carousel owl-theme owl-courses">
                                <div class="col-md-4 col-sm-4">
                                     <div class="item">
                                          <div class="courses-thumb">
                                               <div class="courses-top">
                                                    <div class="courses-image">
                                                         <img src="images/wisata1.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    {{-- <div class="courses-date">
                                                         <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                                         <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                                    </div> --}}
                                               </div>
  
                                               <div class="courses-detail">
                                                    <h3><a href="#">Curug Deng-deng</a></h3>
                                                    <p></p>
                                               </div>
  
                                               <div class="courses-info">
                                                    <div class="courses-author">
                                                         <span>star</span>
                                                    </div>
                                                    {{-- <div class="courses-price">
                                                         <a href="#"><span>USD 25</span></a>
                                                    </div> --}}
                                               </div>
                                          </div>
                                     </div>
                                </div>
  
                                <div class="col-md-4 col-sm-4">
                                     <div class="item">
                                          <div class="courses-thumb">
                                               <div class="courses-top">
                                                    <div class="courses-image">
                                                         <img src="images/wisata2.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    {{-- <div class="courses-date">
                                                         <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>
                                                         <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                                    </div> --}}
                                               </div>
  
                                               <div class="courses-detail">
                                                    <h3><a href="#">Pantai Karang Tawulan</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                               </div>
  
                                               <div class="courses-info">
                                                    <div class="courses-author">
                                                         <span>Star</span>
                                                    </div>
                                                    {{-- <div class="courses-price">
                                                         <a href="#"><span>USD 80</span></a>
                                                    </div> --}}
                                               </div>
                                          </div>
                                     </div>
                                </div>
  
                                <div class="col-md-4 col-sm-4">
                                     <div class="item">
                                          <div class="courses-thumb">
                                               <div class="courses-top">
                                                    <div class="courses-image">
                                                         <img src="images/wisata3.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    {{-- <div class="courses-date">
                                                         <span><i class="fa fa-calendar"></i> 15 / 8 / 2018</span>
                                                         <span><i class="fa fa-clock-o"></i> 6 Hours</span>
                                                    </div> --}}
                                               </div>
  
                                               <div class="courses-detail">
                                                    <h3><a href="#">Curug </a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                               </div>
  
                                               <div class="courses-info">
                                                    <div class="courses-author">
                                                         <span>Star</span>
                                                    </div>
                                                    {{-- <div class="courses-price free">
                                                         <a href="#"><span>Free</span></a>
                                                    </div> --}}
                                               </div>
                                          </div>
                                     </div>
                                </div>
  
                                <div class="col-md-4 col-sm-4">
                                     <div class="item">
                                          <div class="courses-thumb">
                                               <div class="courses-top">
                                                    <div class="courses-image">
                                                         <img src="images/wisata4.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    {{-- <div class="courses-date">
                                                         <span><i class="fa fa-calendar"></i> 10 / 8 / 2018</span>
                                                         <span><i class="fa fa-clock-o"></i> 8 Hours</span>
                                                    </div> --}}
                                               </div>
  
                                               <div class="courses-detail">
                                                    <h3><a href="#">Tonjong Canyon</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                               </div>
  
                                               <div class="courses-info">
                                                    <div class="courses-author">
                                                         <span>Star</span>
                                                    </div>
                                                    {{-- <div class="courses-price">
                                                         <a href="#"><span>USD 45</span></a>
                                                    </div> --}}
                                               </div>
                                          </div>
                                     </div>
                                </div>
  
                                <div class="col-md-4 col-sm-4">
                                     <div class="item">
                                          <div class="courses-thumb">
                                               <div class="courses-top">
                                                    <div class="courses-image">
                                                         <img src="images/wisata5.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    {{-- <div class="courses-date">
                                                         <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                                         <span><i class="fa fa-clock-o"></i> 10 Hours</span>
                                                    </div> --}}
                                               </div>
  
                                               <div class="courses-detail">
                                                    <h3><a href="#">Viewdeck Galunggung</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                               </div>
  
                                               <div class="courses-info">
                                                    <div class="courses-author">
                                                         <span>StarS</span>
                                                    </div>
                                                    {{-- <div class="courses-price free">
                                                         <a href="#"><span>Free</span></a>
                                                    </div> --}}
                                               </div>
                                          </div>
                                     </div>
                                </div>
  
                           </div>
  
                 </div>
            </div>
       </section>
  

    <!-- TESTIMONIAL -->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                            <h2>User Reviews</h2>
                    </div>
                    <div class="owl-carousel owl-theme owl-client">
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="images/tst-image1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Jackson</h4>
                                        <span>Shopify Developer</span>
                                    </div>
                                    <p>You really do help young creative minds to get quality education and professional job search assistance. I’d recommend it to everyone!</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="images/tst-image2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Camila</h4>
                                        <span>Marketing Manager</span>
                                    </div>
                                    <p>Trying something new is exciting! Thanks for the amazing law course and the great teacher who was able to make it interesting.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="images/tst-image3.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Barbie</h4>
                                        <span>Art Director</span>
                                    </div>
                                    <p>Donec erat libero, blandit vitae arcu eu, lacinia placerat justo. Sed sollicitudin quis felis vitae hendrerit.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="images/tst-image4.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Andrio</h4>
                                        <span>Web Developer</span>
                                    </div>
                                    <p>Nam eget mi eu ante faucibus viverra nec sed magna. Vivamus viverra sapien ex, elementum varius ex sagittis vel.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                    </div>
            </div>
        </div>
    </section> 


    <script src="js/script.js"></script>
    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>