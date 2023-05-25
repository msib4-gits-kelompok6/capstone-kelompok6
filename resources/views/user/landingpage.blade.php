@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    {{-- hero --}}
    <div class="hero d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <h3 class="text-white fw-semibold mb-2">Holaaa</h3>
                    <h1 class="text-white fw-bold mb-4">Selamat Datang di Bengkelin</h1>
                    <p class="text-white mb-5 text-opacity-75">
                        Lorem ipsum dolor sit amet consectetur. Ut mus ut sed maecenas nibh. Leo pulvinar turpis mauris
                        massa tortor. <br>
                        Eu sed cursus sapien diam. Dui venenatis libero fringilla mauris purus aliquam vel sed arcu.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg rounded-1 mt-3">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- keunggulan --}}
    <div class="keunggulan">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class=" text-center">
                        <h3 class="title">Keunggulan Aplikasi Kami</h3>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col col-lg-4 col-md-6 col-sm-12 ">
                    <div class="keunggulan-list text-center">
                        <img src="{{ asset('css/icon-connected.png') }}" alt="">
                        <h3>Connected</h3>
                        <p>Lorem ipsum dolor sit amet consectetur. Aenean maecenas egestas dictum rhoncus.Curabitur tellus
                            diam ullamcorper ipsum nullam.</p>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-12 ">
                    <div class="keunggulan-list text-center">
                        <img src="{{ asset('css/icon-transparan.png') }}" alt="">
                        <h3>Harga Transparan</h3>
                        <p>Lorem ipsum dolor sit amet consectetur. Aenean maecenas egestas dictum rhoncus.Curabitur tellus
                            diam ullamcorper ipsum nullam.</p>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-6 col-sm-12 ">
                    <div class="keunggulan-list text-center">
                        <img src="{{ asset('css/icon-terpercaya.png') }}" alt="">
                        <h3>Mitra Terpercaya</h3>
                        <p>Lorem ipsum dolor sit amet consectetur. Aenean maecenas egestas dictum rhoncus.Curabitur tellus
                            diam ullamcorper ipsum nullam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="layanan">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class=" text-center">
                        <h3 class="title">Layanan yang Kami Tawarkan</h3>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center motor">
                <div class="col col-lg-5 col-md-6 col-sm-12">
                    <img src="{{ asset('css/service-motor.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col col-lg-5 col-md-6 col-sm-12 my-3">
                    <h3>Service Motor</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Nec urna pharetra blandit ut ornare nisl massa. Euismod dui
                        morbi mauris proin dictum id. Sit ornare lorem faucibus sed magna nisl.</p>
                    <a href="#" class="btn btn-lg">Lihat Layanan</a>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center mobil">
                <div class="col col-lg-5 col-md-6 col-sm-12 ">
                    <img src="{{ asset('css/service-mobil.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col col-lg-5 col-md-6 col-sm-12 my-3">
                    <h3>Service Mobil</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Nec urna pharetra blandit ut ornare nisl massa. Euismod dui
                        morbi mauris proin dictum id. Sit ornare lorem faucibus sed magna nisl.</p>
                    <a href="#" class="btn btn-lg">Lihat Layanan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
