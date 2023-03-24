@extends('layouts.app3')
@section('title', 'Rez Wedding Organizer')

@section('content')
    
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">Paket Travel</li>
                <li class="breadcrumb-item active">Details</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Nusa Peninda</h1>
              <p>Republik INDONESIA Raya</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="frontend/images/header2.jpg" width="650px" height="350px" class="xzoom" id="xzoom-default" xoriginal="frontend/images/header2.jpg">
                </div>
                <div class="xzoom-thumbs">
                  <a href="frontend/images/header2.jpg">
                    <img src="frontend/images/header2.jpg" class="xzoom-gallery" width="128px" height="80px" xpreview="frontend/images/header2.jpg">
                  </a>
                  <a href="frontend/images/header2.jpg">
                    <img src="frontend/images/header2.jpg" class="xzoom-gallery" width="128px" height="80px" xpreview="frontend/images/header2.jpg">
                  </a>
                  <a href="frontend/images/header2.jpg">
                    <img src="frontend/images/header2.jpg" class="xzoom-gallery" width="128px" height="80px" xpreview="frontend/images/header2.jpg">
                  </a>
                  <a href="frontend/images/header2.jpg">
                    <img src="frontend/images/header2.jpg" class="xzoom-gallery" width="128px" height="80px" xpreview="frontend/images/header2.jpg">
                  </a>
                  <a href="frontend/images/header2.jpg">
                    <img src="frontend/images/header2.jpg" class="xzoom-gallery" width="128px" height="80px" xpreview="frontend/images/header2.jpg">
                  </a>
                </div>
              </div>
              <h2>Tentang Wisata</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt inventore cumque magnam similique necessitatibus, soluta illum, corrupti totam magni, laudantium nulla. Fuga nostrum magnam repellat repellendus laborum,
                nemo eius dolore!
              </p>
              <p>nsdajkonadsk pkasjmdpajmcxpasnjo cixac aoxicjnaospixjiaopsdjnm adipisicing</p>
              <div class="features row">
                <div class="col-md-4 border-left">
                  <img src="frontend/images/header2.jpg" alt="" class="features-image" width="50px" height="50px" />
                  <div class="description">
                    <h3>Featured </h3>
                    <p>Tari Kecak</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img src="frontend/images/header2.jpg" alt="" class="features-image" width="50px" height="50px" />
                    <div class="description">
                      <h3>Bahasa</h3>
                      <p>Indo</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img src="frontend/images/header2.jpg" alt="" class="features-image" width="50px" height="50px" />
                    <div class="description">
                      <h3>Food</h3>
                      <p>Lokal Food</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members are going</h2>
              <div class="members my-2">
                <img src="frontend/images/header2.jpg"class="member-image mr-1 rounded-circle">
                <img src="frontend/images/header2.jpg"class="member-image mr-1 rounded-circle">
                <img src="frontend/images/header2.jpg"class="member-image mr-1 rounded-circle">
                <img src="frontend/images/header2.jpg"class="member-image mr-1 rounded-circle">
                <img src="frontend/images/header2.jpg"class="member-image mr-1 rounded-circle">
              </div>
              <hr>
              <h2>Trip Informations</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Date of Departure</th>
                  <td width="50%" class="text-right">
                    22 Aug, 2023
                  </td>
                </tr>
                  <th width="50%">Durations</th>
                  <td width="50%" class="text-right">
                    4D 3 N
                  </td>
                </tr>
                  <th width="50%">Type</th>
                  <td width="50%" class="text-right">
                    Open Trip
                  </td>
                </tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">
                    $80,00 / Person
                  </td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a href="{{ url('checkout3') }}" class="btn btn-block btn-join-now mt-3 py-2">
                Join Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/dist/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/dist/xzoom.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomWidth: 500,
      title: false,
      tint: '#333',
      XOffset: 15
    });
  });
</script>
@endpush