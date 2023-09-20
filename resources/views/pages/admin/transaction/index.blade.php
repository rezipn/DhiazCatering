@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi Catering</h1>
            {{-- <a href="/export-pdf" class="btn btn-danger">Export PDF</a>
            <form action="{{ route('transaction.export') }}" method="post" target="__blank">
                @csrf
                <button>ssss</button>
            </form> --}}
            {{-- <a href="/export" class="btn btn-danger"> <i class="fa fa-print"></i> Cetak Data</a> --}}
        </div>
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Paket</th>
                                <th>Pemesan</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Tanggal Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->travel_package->title }}</td>
                                <td>{{ $item->user->name }}</td>
                                
                                <td>Rp.{{ $item->transaction_total }}.000</td>
                                <td>{{ $item->transaction_status }}</td>
                                <td>{{ $item->user->booking }}</td>
                                <td>
                                    <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('transaction.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

<!-- /.container-fluid -->     
@endsection