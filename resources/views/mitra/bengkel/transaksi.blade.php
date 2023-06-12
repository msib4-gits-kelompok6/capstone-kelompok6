@extends('mitra.layouts.app')

@section('title', 'Bengkel | Transaksi')

@section('content')
    <div class="card p-3">
        <div class="row m-4">
            <div class="col">
                <h2 class="m-3">Daftar Transaksi</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table" id="table-bengkel">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>Waktu</th>
                            <th>Tipe Booking</th>
                            <th>Status</th>
                            <th>Kendaraan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->waktu_booking }}</td>
                                <td>{{ $item->tipe_booking }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->kendaraan->model }}</td>
                                <td>
                                    <a href="transaksi/{{ $item->id }}/edit" class="btn btn-sm btn-info">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-5">
            {{ $transaksi->links() }}

        </div>
    </div>

@endsection
