@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Paket Catering {{ $item->title }}</h1>
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
                <form action="{{ route('travel-package.update', $item->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Ukuran Gedung</label>
                        <input type="text" class="form-control" name="location" placeholder="Location" value="{{ $item->location }}">
                    </div>
                    <div class="form-group">
                        <label for="about" class="control-label">Keterangan Catering</label>
                        <textarea name="about" id="deskripsi" rows="5" class="d-blockcols="30" rows="10"">{{ $item->about }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Harga / Porsi</label>
                        <textarea name="keterangan" id="" rows="1" class="d-block w-100 form-control">{{ $item->keterangan }}</textarea>
                    </div>
                    {{-- <div class="form-group">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{ $item->featured_event }}">
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" class="form-control" name="language" placeholder="Language" value="{{ $item->language }}">
                    </div>
                    <div class="form-group">
                        <label for="food">Foods</label>
                        <input type="text" class="form-control" name="food" placeholder="Food" value="{{ $item->food }}">
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="departure_date">Departure Date</label>
                        <input type="date" class="form-control" name="departure_date" placeholder="Departure Date" value="{{ $item->departure_date }}">
                    </div> --}}
                    <div class="form-group">
                        <label for="duration">Jam Acara</label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{ $item->duration }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Minimal Order</label>
                        <input type="text" class="form-control" name="type" placeholder="Type" value="{{ $item->type }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="number" class="form-control" name="price" placeholder="Price" value="{{ $item->price }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>
    </div>

<!-- /.container-fluid -->     
@endsection