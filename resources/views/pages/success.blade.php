@extends('layouts.success')
@section('title', 'Checkout Success!')

@section('content')
    
<main>
    <div class="div section-success d-flex align-items-center">
      <div class="col text-center">
        <img src="{{ url('frontend/images/suratt.png') }}" alt="">
        <h1>PERHATIAN!</h1>
        <p>
          Mohon segera untuk
          <br>
          Periksa Email anda
        </p>
        <a href="https://mailtrap.io/inboxes/2133410/messages" class="btn btn-home-page mt-3 px-5">
          Gmail
        </a>
      </div>
    </div>
  </main>

@endsection


