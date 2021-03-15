@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <br>
    <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-2">
                  <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#slider_main" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full ">
                     <h4>More Featured in</h4>
                     <h3>Graha Pratama</h3>
                     <p>Menemukan Propert Idaman Anda Adalah Kebanggan Kami.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
    <div class="section layout_padding">
         <div class="container">
            </div>
            <div class="row">
               <div class="col-md-6">
                  <img src="images/blog1.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>The biggest and most awesome camera  of  year</h4>
                     <h5>November 01 2019 5 READ</h5>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="images/blog2.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>What 3 years of android taught me the hard way</h4>
                     <h5>MAY 19 2019  5 READ</h5>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="about.html">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
@endsection

@section('js')
    <script>
        console.log('Helo')
    </script>
@endsection