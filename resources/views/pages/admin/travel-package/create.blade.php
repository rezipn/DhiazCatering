@extends('layouts.admin')

@section('content')
<!-- include libraries(jQuery, bootstrap) -->
{{-- 
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Paket Catering</h1>
        </div>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('travel-package.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Tipe</label>
                        <input type="text" class="form-control" name="title" placeholder="Tipe" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Lokasi</label>
                        <input type="text" class="form-control" name="location" placeholder="Lokasi" value="{{ old('location') }}">
                    </div>
                    <div class="form-group">
                        <label for="about" class="control-label">Keterangan Catering</label>
                        <textarea name="about" id="deskripsi" rows="5" class="d-blockcols="30" rows="10"">{{ old('about') }}</textarea>
                    </div>
                    {{-- <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <form action="#">
                                    <div class="mb-3">
                                        <label for="" class="control-label">Deskripsi</label>
                                        <textarea name="" class="form-control" id="deskripsi" cols="30" rows="10"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="keterangan">Harga / Porsi</label>
                        <textarea name="keterangan" id="" rows="1" placeholder="Harga / Porsi" class="d-block w-100 form-control">{{ old('keterangan') }}</textarea>
                    </div>
                    {{-- <div class="form-group">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{ old('featured_event') }}">
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" class="form-control" name="language" placeholder="Language" value="{{ old('language') }}">
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="food">Foods</label>
                        <input type="text" class="form-control" name="food" placeholder="Food" value="{{ old('food') }}">
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="departure_date">Departure Date</label>
                        <input type="date" class="form-control" name="departure_date" placeholder="Departure Date" value="{{ old('departure_date') }}">
                    </div> --}}
                    <div class="form-group">
                        <label for="duration">Jam Acara</label>
                        <input type="text" class="form-control" name="duration" placeholder="Jam Acara" value="{{ old('duration') }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Minimal Order</label>
                        <input type="text" class="form-control" name="type" placeholder="Minimal Order" value="{{ old('type') }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Harga Paketan</label>
                        <input type="text" class="form-control" name="price" placeholder="Harga" value="{{ old('price') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->     
@endsection