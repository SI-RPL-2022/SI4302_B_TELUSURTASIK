@extends('master')
@section('home')
active
@endsection

@section('content')
     <!-- HOME -->
     <section id="home">
          <div class="row">
                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Beragam Wisata yang Menarik</h1>
                                             {{-- <h3></h3> --}}
                                             <a href="/wisata" class="section-btn btn btn-default smoothScroll">Explore Destination</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Tentang Kami</h1>
                                             {{-- <h3>Our online courses are built in partnership with technology leaders and are designed to meet industry demands.</h3> --}}
                                             <a href="/about" class="section-btn btn btn-default smoothScroll">See it</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Membutuhkan Bantuan?</h1>
                                             {{-- <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero. Visit <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo</a> page.</h3> --}}
                                             <a href="/help" class="section-btn btn btn-default smoothScroll">Let's chat us</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>

     <!-- ABOUT -->
     <section id="about">
          <div class="container ">
               <div class="about-info">
                    <h2 class="text-center">Mengapa harus memilih TelusurTasik ?</h2>
               </div>
               <div class="row">
                    <div class="col-md-4 col-sm-4">
                         <div class="media">
                              <div class="media-object media-left wow fadeIn" data-wow-delay="0.1s">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body wow fadeIn">
                                   <h3 class="media-heading">Banyak Pilihan Wisata</h3>
                                   <p>Tersedia wisata dengan rating dan lokasi yang Anda inginkan</p>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                         <div class="media">
                              <div class="media-object media-left wow fadeIn" data-wow-delay="0.3s">
                                   <i class="fa fa-cog"></i>
                              </div>
                              <div class="media-body wow fadeIn">
                                   <h3 class="media-heading">Berbagai Macam Kategori</h3>
                                   <p>Tersedia berbagai pilihan kategori untuk wisata yang Anda Inginkan</p>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                         <div class="media">
                              <div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
                                   <i class="fa fa fa-check-circle"></i>
                              </div>
                              <div class="media-body wow fadeIn" data-wow-delay="0.3s">
                                   <h3 class="media-heading">Terupdate dan Terpercaya</h3>
                                   <p>Menjadi website yang paling direkomendasikan dan selalu teruptudate</p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>


     {{-- <!--Categories-->
     <section id="categories">
          <div class="container-sm text-center">
               <h2>Categories</h2>
               <div class="row mb-7">
                    <div class="row justify-content-center">
                         <div class="col-md-4 col-sm-4 text-center">
                              <img class="rounded-circle" src="images/images.jpg" alt="Generic placeholder image" width="90" height="90">
                              <h4 style="align-items: center">Pantai</h4>
                              <a href="/help"><button type="button" class="btn btn-light">Lihat</button></a>
                         </div>
                         <div class="col-md-4 col-sm-4 text-center">
                              <img class="rounded-circle" src="images/image2.jpg" style="align-items: center" alt="Generic placeholder image" width="90" height="90">
                              <h4 style="align-items: center">Curug</h4>
                              <a href="/help"><button type="button" class="btn btn-light">Lihat</button></a>
                         </div>
                         <div class="col-sm-2 text-center">
                              <img class="rounded-circle" src="images/wisata2.jpg" alt="Generic placeholder image" width="90" height="90">
                              <h4 style="align-items: center">Gunung</h4>
                              <a href="/help"><button type="button" class="btn btn-light">Lihat</button></a>
                         </div>
                    </div>
               </div>
          </div>
     </section> --}}
          
     <!-- arrival section -->
     <section class="arrival_section" id="arrival_section">
          <div class="container">
               <div class="box" style="height: fit-content;">
                    {{-- <div class="arrival_bg_box">
                         <img src="{{asset('images/wisata3.jpg')}}" alt="">
                    </div> --}}
                    <div class="row">
                         <div class="col-md-6 ml-auto">
                         <div class="">
                              <div class="heading_container">
                              <h2>
                                   #Categories
                              </h2>
                              </div>
                                   <p style="margin-top: 20px;margin-bottom: 30px;">
                                   Kami memiliki berbagai macam wisata yang telah disusun menjadi beberapa kategori
                                   untuk memundahkan Anda dalam pencarian wisata yang sesuai dengan suasana hati Anda.
                                   </p>
                         </div>
                              <div class="btn-box">
                              <a href="/wisata" class="btn1">
                                   Check Categories
                              </a>
                              </div>
                         </div>
                    </div>
                    </div>
               </div>
          </div>
       </section>
       <!-- end arrival section -->

     <!-- Wisata -->
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
                                                            <img src="images/wisata1.jpg" class="img-responsive" style="width:500px;height:250px;" alt="">
                                                       </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Curug Deng-deng</a></h3>
                                                  <p><i class="fa fa-map-marker" aria-hidden="true"></i>Cipatujah</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <span>star</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>Check Details</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/wisata2.jpg" class="img-responsive" style="width:500px;height:250px;" alt="">
                                                  </div>
                                             </div>
                                             <div class="courses-detail">
                                                  <h3><a href="#">Pantai Karang Tawulan</a></h3>
                                                  <p><i class="fa fa-map-marker" aria-hidden="true"></i>Cimanuk,kec Cikalong</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <span>star</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>Check Details</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/wisata3.jpg" class="img-responsive" style="width:500px;height:250px;" alt="">
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Curug Panetean </a></h3>
                                                  <p><i class="fa fa-map-marker" aria-hidden="true">Pangilaran,kec Pancatengah</i></p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <span>star</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>Check Details</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/wisata4.jpg" class="img-responsive" style="width:500px;height:250px;" alt="">
                                                  </div>
                                             </div>
                                             <div class="courses-detail">
                                                  <h3><a href="#">Tonjong Canyon</a></h3>
                                                  <p><i class="fa fa-map-marker" aria-hidden="true"></i>Tanjungsari,Cipatujah</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <span>star</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>Check Details</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/wisata5.jpg" class="img-responsive" style="width:500px;height:250px;" alt="">
                                                  </div>
                                             </div>
                                             <div class="courses-detail">
                                                  <h3><a href="#">Viewdeck Galunggung</a></h3>
                                                  <p><i class="fa fa-map-marker" aria-hidden="true"></i>Galunggung</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <span>star</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="#"><span>Check Details</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="btn-box">
                              <a href="/wisata">
                              View All Destination
                              </a>
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
                                        <img src="images/6.png" class="img-responsive" alt="">
                                   </div>
                                   <div class="tst-author">
                                        <h4>Jackson</h4>
                                   </div>
                                   <p>Banyak pilihan wisata,menyenangkan</p>
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
                                        <img src="images/2.png" class="img-responsive" alt="">
                                   </div>
                                   <div class="tst-author">
                                        <h4>Camila</h4>
                                   </div>
                                   <p>Mudah dicari dan dimengerti</p>
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
                                        <img src="images/3.png" class="img-responsive" alt="">
                                   </div>
                                   <div class="tst-author">
                                        <h4>Brian</h4>
                                   </div>
                                   <p>Amazing!</p>
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
                                        <img src="images/4.png" class="img-responsive" alt="">
                                   </div>
                                   <div class="tst-author">
                                        <h4>Andrio</h4>
                                   </div>
                                   <p>Mudah dicari sesuai kategori yang saya inginkan :)</p>
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
@endsection