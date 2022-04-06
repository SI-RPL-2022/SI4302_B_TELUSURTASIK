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