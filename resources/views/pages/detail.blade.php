@extends('layouts.app')
@section('title', 'Dhiaz Permata Catering')

@section('content')
    
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">Paket Catering</li>
                <li class="breadcrumb-item active">Details</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1>{{ $item->title }}</h1>
            <p>
              Ukuran Ruangan {{ $item->location }}
            </p>
            @if($item->galleries->count() > 0)
                  <div class="gallery">
                      <div class="xzoom-container">
                          <img
                              src="{{ Storage::url($item->galleries->first()->image) }}"
                              class="xzoom"
                              id="xzoom-default"
                              xoriginal="{{ Storage::url($item->galleries->first()->image) }}"
                          />
                      </div>
                      <div class="xzoom-thumbs">
                          @foreach($item->galleries as $gallery)
                              <a href="{{ Storage::url($gallery->image) }}">
                                  <img
                                      src="{{ Storage::url($gallery->image) }}"
                                      class="xzoom-gallery"
                                      width="128"
                                      xpreview="{{ Storage::url($gallery->image) }}"
                                  />
                              </a>
                          @endforeach
                      </div>
                  </div>
            @endif
              <h2>Keterangan Catering</h2>
              <p align="justify">
                {!! $item->about !!}
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <img src="{{ url('frontend/images/water.png') }}" alt="" class="features-image" width="50px" height="50px" />
                  <div class="description">
                    <h3>Serviceability </h3>
                    <p>Terpercaya</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img src="{{ url('frontend/images/clean.png') }}" alt="" class="features-image" width="50px" height="50px" />
                    <div class="description">
                      <h3>All item</h3>
                      <p>100% Bersih</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img src="{{ url('frontend/images/clean1.png') }}" alt="" class="features-image" width="50px" height="50px" />
                    <div class="description">
                      <h3>Kualitas</h3>
                      <p>Terjamin</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Rekap Pemesan</h2>
              <div class="members my-2">
                <img src="{{ url('frontend/images/zz1.jpg') }}"class="member-image mr-1 rounded-circle">
                <img src="{{ url('frontend/images/zz2.jpg') }}"class="member-image mr-1 rounded-circle">
                <img src="{{ url('frontend/images/zz3.jpg') }}"class="member-image mr-1 rounded-circle">
                <img src="{{ url('frontend/images/zz4.jpg') }}"class="member-image mr-1 rounded-circle">
                <img src="{{ url('frontend/images/zz5.jpg') }}"class="member-image mr-1 rounded-circle">
              </div>
              <hr>
              <h2>Informasi Catering</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Harga / Porsi</th>
                  <td width="0%" class="text-right" >
                    {{ $item->keterangan }}
                  </td>
                </tr>
                  <th width="50%">Jam Acara</th>
                  <td width="50%" class="text-right">
                    {{ $item->duration }}
                  </td>
                </tr>
                  <th width="50%">Minimal Order</th>
                  <td width="50%" class="text-right">
                    {{ $item->type }}
                  </td>
                </tr>
                  <th width="50%">Harga Paketan</th>
                  <td width="50%" class="text-right">
                    Rp.{{ $item->price }}.000 
                  </td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              @auth
                <form action="{{ route('checkout_process', $item->id) }}" method="post">
                  @csrf
                  <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                    Pesan
                  </button>
                </form>
              @endauth
              @guest
                <a href="{{ url('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                  Login untuk pesan
                </a>   
              @endguest
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