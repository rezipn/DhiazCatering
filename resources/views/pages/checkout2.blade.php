@extends('layouts.checkout2')
@section('title', 'Checkout2')

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
                <li class="breadcrumb-item">Details</li>
                <li class="breadcrumb-item active">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Who is going?</h1>
              <p>Trip to ubud, Bali, Indonesia</p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td>Picture</td>
                      <td>Name</td>
                      <td>Nasioanlity</td>
                      <td>Visa</td>
                      <td>Passport</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="{{ url('frontend/images/header2.jpg') }}" class="rounded-circle" width="60" height="60"></td>
                      <td class="align-middle">
                        Rezi Palifta
                      </td>
                      <td class="align-middle">
                        CN
                      </td>
                      <td class="align-middle">
                        N/A
                      </td>
                      <td class="align-middle">
                        Active
                      </td>
                      <td class="align-middle">
                        <a href=""> 
                        <img src="{{ url('frontend/images/x.png') }}" width="25" height="25" alt="">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="{{ url('frontend/images/header2.jpg') }}" class="rounded-circle" width="60" height="60"></td>
                      <td class="align-middle">
                        Rezi Palifta
                      </td>
                      <td class="align-middle">
                        CN
                      </td>
                      <td class="align-middle">
                        N/A
                      </td>
                      <td class="align-middle">
                        Active
                      </td>
                      <td class="align-middle">
                        <a href=""> 
                        <img src="{{ url('frontend/images/x.png') }}" width="25" height="25" alt="">
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2>Add Member</h2>
                <form action="#" class="form-inline">
                  <label for="inputUsername" class="sr-only">Name</label>
                  <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username"">
                  <label for="inputVisa" class="sr-only">Visa</label>
                  <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                    <option value="VISA" selected>VISA</option>
                    <option value="30 Days">30 Days</option>
                    <option value="N/A">N/A</option>
                  </select>

                  <label for="doePassport" class="sr-only">DOE Passport</label>
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control datepicker" id="doePassport" placeholder="doePassport">
                  </div> 

                  <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>
                </form>
                <h3 class="mt-2 mb-0">
                  Note
                </h3>
                <p class="disclaimer mb-0">You are only able  to invite members that has registered in Rez.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Checkout Informations</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Members</th>
                  <td width="50%" class="text-right">
                    2 Person
                  </td>
                </tr>
                <tr>
                  <th width="50%">Additional VISA</th>
                  <td width="50%" class="text-right">
                    $ 160,000
                  </td>
                </tr>
                <tr>
                  <th width="50%">Trip Price</th>
                  <td width="50%" class="text-right">
                    $ 80,00 / Person
                  </td>
                </tr>
                <tr>
                  <th width="50%">Sub Total</th>
                  <td width="50%" class="text-right">
                    $ 280,00
                  </td>
                </tr>
                <tr>
                  <th width="50%">Total (+Unique)</th>
                  <td width="50%" class="text-right text-total">
                    <span class="text-blue">$ 279,</span>
                    <span class="text-orange">33</span>
                  </td>
                </tr>
              </table>
              <hr/>
              <h2>Payment Instruction</h2>
              <p class="payment-instructions">
                Please complete your payment before to continue the wonderful trip
              </p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/images/credit-card.png') }}" alt="" class="bank-image">
                <div class="div description">
                  <h3>PT Rez ID</h3>
                  <p>
                    087718147346
                    <br>
                    Bank Central Asia
                  </p>
                </div>
                <div class="clearfix"></div>
                </div>
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/images/credit-card.png') }}" alt="" class="bank-image" width="30px" height="30px">
                <div class="div description">
                  <h3>PT Rez ID</h3>
                  <p>
                    087718147346
                    <br>
                    Bank Central Asia
                  </p>
                </div>
                <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="join-container">
              <a href="{{ url('/checkout/success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                I Have Made Payment
              </a>
            </div>
            <div class="text-center mt-3">
              <a href="{{ url('/') }}" class="text-muted">Cancel Booking</a>
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
          uiLibrary: 'bootstrap4',
          icons: {
            rightIcon: '<img src="{{ url('frontend/images/calendar.png ') }}"width="20" height="20"  />'
          }
        });
      });
    </script>
@endpush