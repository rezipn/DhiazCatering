@extends('layouts.checkout')
@section('title', 'Checkout')

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
                <li class="breadcrumb-item">Details</li>
                <li class="breadcrumb-item active">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              @forelse ($item->details as $detail)
              <h1>Pemesan</h1>
              <p>Pesanan untuk {{ $detail->username }}</p>
              {{-- {{ $item->travel_package->title }}, {{ $item->travel_package->location }} --}}
              <div class="attendee">
                <div class="text-justify">
                  <table class="table table-responsive-sm text-center">
                    <tr>
                      <td>Keterangan {{ $item->travel_package->title }}</td>
                      {{-- <td>Nama</td>
                      <td>Nomor WA</td>
                      <td>Alamat</td>
                      <td></td>
                      <td></td> --}}
                    </tr>
                  </table>
                  <tbody>
                    {{-- @forelse ($item->details as $detail) --}}
                    <tr>
                      {{-- <td><img src="https://ui-avatars.com/api/?name={{ $detail->username }}" height="60" class="rounded-circle" ></td> --}}
                      
                      <p>
                        {!! $item->travel_package->about !!}
                      </p>
            
                      {{-- <td class="align-middle">
                        {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                      </td> --}}
                      {{-- <td class="align-middle">
                        <a href="{{ route('checkout-remove', $detail->id) }}"> 
                        <img src="{{ url('frontend/images/x.png') }}" width="30px" height="30px"  alt="">
                        </a>
                      </td> --}}
                    </tr>
                    @empty
                        <tr>
                          <td colspan="6" class="text-center">
                            Tidak Ada Pemesan
                          </td>
                        </tr>
                    @endforelse
                  </tbody>
                  
                </div>
              </div>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <td>Tanggal Booking</td>
                  
                    <td class="align-middle">
                      {!! $item->user->booking !!}
                    </td>
                  
                  
                </table>
              </div>
              <div class="member mt-0">
                
                  @csrf
                  {{-- <label for="tambahan" class="sr-only">tambahan</label>
                  <input 
                         type="text" 
                         name="tambahan" 
                         class="form-control mb-2 mr-sm-2" 
                         style="width: 540px"
                         id="tambahan" 
                         required
                         placeholder="Tambahan"> --}}
                  
                  {{-- <label for="nationality" class="sr-only">Nationality</label>
                         <input 
                                type="text" 
                                name="nationality" 
                                class="form-control mb-2 mr-sm-2"
                                style="width: 50px" 
                                id="nationality" 
                                required
                                placeholder="Nationality"> --}}
                         
                  {{-- <label for="is_visa" class="sr-only">Visa</label>
                  <select 
                  name="is_visa" 
                  id="is_visa" 
                  required
                  class="custom-select mb-2 mr-sm-2">

                    <option value="" selected>VISA</option>
                    <option value="1">30 Days</option>
                    <option value="0">N/A</option>
                  </select> --}}

                  {{-- <label for="tambahan" class="sr-only"
                  >Masukan Tanggal Booking</label
                  >
                  <div class="input-group mb-2 mr-sm-2">
                    <input 
                    type="text" 
                    class="form-control datepicker" 
                    style="width: 340px"
                    name="tambahan" 
                    id="tambahan" 
                    placeholder="Masukan Tanggal Booking">
                  </div> --}}
                  {{-- <div class="form-group row">
                    <label for="booking" class="col-md-4 col-form-label text-md-end">{{ __('Booking') }}</label>

                    <div class="col-md-6">
                        <input id="booking" type="text" class="form-control datepicker @error('booking') is-invalid @enderror" name="booking" value="{{ old('booking') }}" required autocomplete="booking" autofocus>

                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <a class='btn btn-secondary btn-sm' href='{{ url('/users/'.$item->booking) }}'>Edit</a>

                {{-- type="submit" class="btn btn-outline-warning" --}}


                </form>
                <h3 class="mt-2 mb-0">
                  Note
                </h3>
                <p class="disclaimer mb-0">Langkah Selanjutnya silahkan tekan tombol Proses Pembayaran dan dapat dikonfirmasikan melalui Whatsapp</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2 class="text-center">Dhiaz Permata Catering</h2>
              <table class="trip-informations">
                <tr>
                  <td class="text-center">
                    Dhiaz Permata Katering melayani paket catering wedding / acara rumahan dengan cita rasa yang berkelas. Chef profesional yang telah berpengalaman mampu menghasilkan hidangan yang lezat dan khas untuk setiap tamu undangan
                </td>
                </tr>
                  {{-- <th width="50%">Members</th>
                  <td width="50%" class="text-right">
                    {{ $item->details->count() }} Person
                  </td>
                </tr>
                
                  
                  <td width="50%" class="text-center">
                    Photography & Videography 
                  </td> --}}
{{--                 
                <tr>
                  <th width="50%">Trip Price</th>
                  <td width="50%" class="text-right">
                    $ {{ $item->travel_package->price }},00 / Person
                  </td>
                </tr>
                <tr>
                  <th width="50%">Sub Total</th>
                  <td width="50%" class="text-right">
                    $ {{ $item->transaction_total }},00
                  </td>
                </tr>
                <tr>
                  <th width="50%">Total (+Unique)</th>
                  <td width="50%" class="text-right text-total">
                    <span class="text-blue">$ {{ $item->transaction_total }},</span>
                    <span class="text-orange">{{ mt_rand(0,99) }}</span>
                  </td>
                </tr>--}}
              </table> 
              <hr/>
              <h2 class="text-center">Instruksi Pembayaran</h2>
              <p class="payment-instructions text-center">
                Harap selesaikan pembayaran Anda sebelum konfirmasi pemesanan
              </p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/images/bri.png') }}" alt="" class="bank-image">
                <div class="div description">
                  <h3>Agung Nugroho</h3>
                  <p>
                    087718147346
                    <br>
                    Bank Rakyat Indonesia
                  </p>
                </div>
                <div class="clearfix"></div>
                </div>
                
              </div>
            </div>
            <div class="join-container">
              <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
                Konfirmasi Pembayaran
              </a>
            </div>
            <div class="text-center mt-3">
              <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted">Cancel Pesan</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection


@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/combined/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/combined/js/gijgo.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.datepicker').datepicker({
          format: 'yyyy-mm-dd',
          uiLibrary: 'bootstrap4',
          icons: {
            rightIcon: '<img src="{{ url('frontend/images/calendar.png ') }}"width="20" height="20"  />'
          }
        });
      });
    </script>
@endpush