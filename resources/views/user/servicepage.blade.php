@extends('layouts.app')

@section('title', 'Service')

@section('content')
    {{-- hero --}}
    <div class="hero d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-white fw-bold mb-4">Layanan Kami</h1>
                    <p class="text-white mb-5 text-opacity-75">
                        Berikut adalah layanan yang bisa kami berikan untuk Anda
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- service --}}
    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class=" text-center">
                        <h3 class="title">Mau Service Apa Hari Ini?</h3>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col col-lg-4">
                    <form action="">
                        <input type="text" class="form-control" aria-describedby="emailHelp"
                            placeholder="Cari berdasarkan kota">
                    </form>
                </div>
                <div class="d-flex justify-content-between align-items-center col col-lg-2 ">
                    <a href="#" class="btn btn-md btn-secondary icon-mobil"><img
                            src="{{ asset('css/icon-mobil.png') }}" alt="">
                        Mobil</a>
                    <a href="#" class="btn btn-md btn-secondary icon-motor"><img
                            src="{{ asset('css/icon-motor.png') }}" alt="">
                        Motor</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 bengkel">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('css/service-mobil.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mutiara Jaya AC</h5>
                            <div class=" d-flex align-items-center location">
                                <img src="{{ asset('css/icon-location.png') }}">
                                <p>Tangerang</p>
                            </div>
                            <a href="#" class="btn btn-primary">Lihat Bengkel</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('css/service-mobil.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mutiara Jaya AC</h5>
                            <div class=" d-flex align-items-center location">
                                <img src="{{ asset('css/icon-location.png') }}">
                                <p>Tangerang</p>
                            </div>
                            <a href="#" class="btn btn-primary">Lihat Bengkel</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('css/service-mobil.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mutiara Jaya AC</h5>
                            <div class=" d-flex align-items-center location">
                                <img src="{{ asset('css/icon-location.png') }}">
                                <p>Tangerang</p>
                            </div>
                            <a href="#" class="btn btn-primary">Lihat Bengkel</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('css/service-mobil.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mutiara Jaya AC</h5>
                            <div class=" d-flex align-items-center location">
                                <img src="{{ asset('css/icon-location.png') }}">
                                <p>Tangerang</p>
                            </div>
                            <a href="#" class="btn btn-primary">Lihat Bengkel</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('css/service-mobil.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mutiara Jaya AC</h5>
                            <div class=" d-flex align-items-center location">
                                <img src="{{ asset('css/icon-location.png') }}">
                                <p>Tangerang</p>
                            </div>
                            <a href="#" class="btn btn-primary">Lihat Bengkel</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('css/service-mobil.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mutiara Jaya AC</h5>
                            <div class=" d-flex align-items-center location">
                                <img src="{{ asset('css/icon-location.png') }}">
                                <p>Tangerang</p>
                            </div>
                            <a href="#" class="btn btn-primary">Lihat Bengkel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
