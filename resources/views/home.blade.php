@extends('layouts.master_home')

  

@section('home_content')
<section >


<div id="vantajs" ></div>

</section>

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About us</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2> {{ $abouts->title }}</h2>
            <h3>{{ $abouts->short_dis }}</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
            {{ $abouts->long_dis }}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</strong></h2>
          <p>Laborum repudiandae omnis voluptatum consequatur mollitia ea est voluptas ut</p>
        </div>

        
        <div class="container">
        <div class="card">
            <div class="circle">
              <h2>01</h2>
            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua.
                <a href="#">Read More</a>
             </div>
          </div>
          <div class="card">
            <div class="circle">
              <h2>02</h2>
            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua.
                <a href="#">Read More</a>
             </div>
          </div>
          <div class="card">
            <div class="circle">
              <h2>03</h2>
            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua.
                <a href="#">Read More</a>
             </div>
          </div>
        </div>
          

          

      

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
             
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

         @foreach($images as $img)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ $img->image  }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{ $img->image  }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> </a>
            </div>
          </div>
          @endforeach

          
 

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Brands</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

        @foreach($brands as $brand)
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ $brand->brand_image  }}" class="img-fluid" alt="">
            </div>
          </div>
          @endforeach

          

        </div>

      </div>
    </section><!-- End Our Clients Section -->

    @endsection