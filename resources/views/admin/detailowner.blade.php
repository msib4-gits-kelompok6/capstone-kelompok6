@extends('admin.app')

@section('title', 'Detail Owner')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Owner</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @foreach ($pemilik_bengkels as $owner)
                <div class="data-owner mb-5">
                    <h1 class="fw-bold">Data Owner</h1>
                    <p>Nama : {{ $owner->name }}</p>
                    <p>Email : {{ $owner->email }}</p>
                    <p>Phone Number : {{ $owner->phone_number }}</p>
                </div>
                <div class="data-bengkel mb-5">
                    <h1 class="fw-bold">Data Bengkel Owner</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama Pemilik</th>
                                <th scope="col">Nama Bengkel</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Description</th>
                                <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bengkels as $bengkel)
                                <tr>
                                    @if ($owner->id == $bengkel->pemilik_id)
                                        <td>{{ $owner->name }}</td>
                                        <td>{{ $bengkel->name }}</td>
                                        <td><img src="{{ asset('images/' . $bengkel->image) }}" alt=""
                                                class="img-fluid"></td>
                                        <td>{{ $bengkel->description }}</td>
                                        <td>{{ $bengkel->alamat }}</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="data-bengkel mb-5">
                    <h1 class="fw-bold">Data Transaksi Bengkel</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Booking ID</th>
                                <th scope="col">User</th>
                                <th scope="col">Waktu Booking</th>
                                <th scope="col">Nama Layanan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bengkels as $bengkel)
                                @foreach ($transaksi as $item)
                                    @php
                                        $total_price = 0;
                                    @endphp
                                    @if ($bengkel->id == $item->booking->bengkel_id)
                                        @php
                                            $total_price += $item->layanan->price * $item->qty;
                                        @endphp
                                        <tr>
                                            <td>{{ $item->booking->id }}</td>
                                            <td>{{ $item->booking->user->name }}</td>
                                            <td>{{ $item->booking->waktu_booking }}</td>
                                            <td>{{ $item->layanan->name }}</td>
                                            <td>{{ $item->layanan->price }}</td>
                                            <td>{{ $total_price }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
        <!-- /.card-body -->
        <div class="mb-5 p-3">
            <div class="mb-1">
                {{ $transaksi->links() }}
            </div>
        </div>
    </div>
@endsection
