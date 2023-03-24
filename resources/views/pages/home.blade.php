@extends('layouts.app')

@section('title')
    Rez Wedding Organizer
@endsection

@section('content')
         <!-- Header -->
    <header class="text-center">
        <h1>
          Explore the Beautiful World
          <br />
          As Easy One Click
        </h1>
        <p class="mt-3">
          You will see Beautiful
          <br />
          moment you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4"> Get Started </a>
      </header>
      <!-- Akhir header -->
  
      <!-- Statistik -->
  
      <main>
        <div class="container">
          <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
              <h2>20k</h2>
              <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
              <h2>12k</h2>
              <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
              <h2>3k</h2>
              <p>Hotel</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
              <h2>72k</h2>
              <p>Partners</p>
            </div>
          </section>
        </div>
  
        <!-- Popular -->
  
        <section class="section-popular" id="popular">
          <div class="container">
            <div class="row">
              <div class="col text-center section-popular-heading">
                <h2>Wisata Popular</h2>
                <p>
                  Something that you never try
                  <br />
                  Before in this world
                </p>
              </div>
            </div>
          </div>
        </section>
  
        <!-- End Popular -->
  
        <section class="section-popular-content" id="popularContent">
          <div class="container">
            <div class="section-popular-travel row justify-content-center">
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/header2.jpg');">
                  <div class="travel-country">INDONESIA</div>
                  <div class="travel-location">DERATAN, BALI</div>
                  <div class="travel-button mt-auto">
                    <a href="{{ url('detail') }}" class="btn btn-travel-details px-4"> View Details </a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/header2.jpg');">
                  <div class="travel-country">INDONESIA</div>
                  <div class="travel-location">DERATAN, BALI</div>
                  <div class="travel-button mt-auto">
                    <a href="{{ url('detail2') }}" class="btn btn-travel-details px-4"> View Details </a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/header2.jpg');">
                  <div class="travel-country">INDONESIA</div>
                  <div class="travel-location">DERATAN, BALI</div>
                  <div class="travel-button mt-auto">
                    <a href="{{ url('detail3') }}" class="btn btn-travel-details px-4"> View Details </a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/header2.jpg');">
                  <div class="travel-country">INDONESIA</div>
                  <div class="travel-location">DERATAN, BALI</div>
                  <div class="travel-button mt-auto">
                    <a href="{{ url('detail4') }}" class="btn btn-travel-details px-4"> View Details </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  
        <!-- Akhir Statistik -->
  
        <section class="section-networks" id="networks">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2>Our Networks</h2>
                <p>
                  Companies are trusted us
                  <br>
                  more than just a trip
                </p>
              </div>
              <div class="col-md-8 text-center">
                <img src="frontend/images/8.png" alt="" class="img-partner" width="600px" height="130px">
              </div>
            </div>
          </div>
        </section>
  
        <section class="section-testimonial-heading" id="testimonialHeading">
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <h2>They Are Loving Us</h2>
                <p>Moments were giving them
                  <br>
                  the best experience
                </p>
              </div>
            </div>
          </div>
        </section> 
  
        <!-- Awal Content -->
  
        <section class="section section-testimonial-content" id="testimonialContent">
          <div class="container">
            <div class="section-popular-travel row justify-content-center">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <img src="frontend/images/header2.jpg" alt="user" class="mb-4 rounded-circle" width="100px" height="100px">
                    <h3 class="mb-4">Angga Risky</h3>
                    <p class="testimonial">
                      "Lorem ipsum, dolor sit amet cons alias dolor, eveniet consequuntur blanditiis, harum perferendis distinctio eos quam quos aliquam, quas incidunt!"
                    </p>
                  </div>
                  <hr>
                  <p class="trip-to mt-2">
                    Trip to Ubud
                  </p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <img src="frontend/images/header2.jpg" alt="user" class="mb-4 rounded-circle" width="100px" height="100px">
                    <h3 class="mb-4">Angga Risky</h3>
                    <p class="testimonial">
                      "Lorem ipsum, dolor sit amet pora italor, eveniet consequuntur blanditiis, harum perferendis distinctio eos quam quos aliquam, quas incidunt!"
                    </p>
                  </div>
                  <hr>
                  <p class="trip-to mt-2">
                    Trip to Ubud
                  </p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                  <div class="testimonial-content">
                    <img src="frontend/images/header2.jpg" alt="user" class="mb-4 rounded-circle" width="100px" height="100px">
                    <h3 class="mb-4">Angga Risky</h3>
                    <p class="testimonial">
                      "Lorem ipsum, dolor sit amet consectetur alias dolor, eveniet consequuntur blanditiis, harum perferendis distinctio eos quam quos aliquam, quas incidunt!"
                    </p>
                  </div>
                  <hr>
                  <p class="trip-to mt-2">
                    Trip to Ubud
                  </p>
                </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-12 text-center">
                <a href="" class=" btn btn-need-help px-4 mt-4 mx-1">
                  I Need Help
                </a>
                <a href="" class=" btn btn-get-started px-4 mt-4 mx-1">
                  Get Started
                </a>
              </div>
            </div>
          </div>
        </section>
  
      </main>
  
@endsection