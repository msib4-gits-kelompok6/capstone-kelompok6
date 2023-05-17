@extends('layouts.app')

@section('title', 'Detail Bengkel')

@section('content')

    <div class="detail-bengkel">
        <div class="container my-4">
            <div class="row gx-lg-5 d-flex align-items-center">
                <div class="col-lg-6 mb-5">
                    <img src="{{ asset('css/bengkels.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h1>Mutiara Jaya AC</h1>
                    <div class="desc-bengkel-lokasi d-flex align-items-center">
                        <img src="{{ asset('css/icon-location.png') }}" alt="">
                        <h5>Tangerang</h5>
                    </div>
                    <p>MUTIARA JAYA AC (NEW PAM) adalah bengkel Umum Daihatsu, Datsun, Honda, Lainnya, Mazda, Mercedes Benz,
                        Mitsubishi, Nissan, Suzuki, Toyota, dan Wuling yang berada di Tangerang, yang bisa anda hubungi atau
                        datangi untuk melakukan service kendaraan Daihatsu, Datsun, Honda, Lainnya, Mazda, Mercedes Benz,
                        Mitsubishi, Nissan, Suzuki, Toyota, dan Wuling. Andapun dapat melakukan "booking service" secara
                        gratis di bengkel MUTIARA JAYA AC (NEW PAM) dengan cara mengklik button hubungi sekarang, lalu
                        hubungi no kontak tersebut untuk menjadwalkan kedatangan Anda agar Anda terbebas dari antrian di
                        bengkel.</p>
                </div>
            </div>

            <div class="row my-5 informasi-tambahan">
                <div class="detail-bengkel-informasi-tambahan d-flex align-items-center">
                    <img src="{{ asset('css/icon-informasi.png') }}" alt="">
                    <h5>Informasi Tambahan</h5>
                </div>
                <div class="col-lg-3 my-3">
                    <h6>Daftar Service</h6>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama Service</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tambal ban</td>
                                <td>Rp10.000</td>
                            </tr>
                            <tr>
                                <td>Ganti Oli</td>
                                <td>Rp15.000</td>
                            </tr>
                            <tr>
                                <td>Ganti Aki</td>
                                <td>Rp50.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-lg-9 my-3">
                    <h6>Jadwal Operasional</h6>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Hari</th>
                                <th scope="col">Jam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Senin</td>
                                <td>08.00 - 17.00</td>
                            </tr>
                            <tr>
                                <td>Selasa</td>
                                <td>08.00 - 17.00</td>
                            </tr>
                            <tr>
                                <td>Rabu</td>
                                <td>08.00 - 17.00</td>
                            </tr>
                            <tr>
                                <td>Kamis</td>
                                <td>08.00 - 17.00</td>
                            </tr>
                            <tr>
                                <td>Jumat</td>
                                <td>08.00 - 17.00</td>
                            </tr>
                            <tr>
                                <td>Sabtu</td>
                                <td>08.00 - 17.00</td>
                            </tr>
                            <tr>
                                <td>Minggu</td>
                                <td>08.00 - 17.00</td>
                            </tr>
                            <tr>
                                <td>Libur Nasional</td>
                                <td>Tutup</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row gx-lg-5 d-flex align-items-center justify-content-center option p-3">
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="nama-bengkel">
                        <h5>Mutiara Jaya AC</h5>
                        <a href="#">Lihat di Peta >>></a>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="hubungi ">
                        <a href="#" class="btn btn-lg btn-outline-primary hubungi-bengkel">Hubungi Bengkel</a>
                        <a href="#" class="btn btn-lg btn-primary pesan-bengkel">Pesan Bengkel</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
