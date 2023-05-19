@extends('layouts.app')

@section('title', 'Detail Bengkel')

@section('content')
    <div class="profileuser">
        <div class="container">
            <div class="row px-5 gx-lg-5 d-flex justify-content-center align-items-center nama-user">
                <div class="col-lg-3">
                    <img src="{{ asset('css/bengkels.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4">
                    <h5>Welcome,</h5>
                    <h1>Fardi Khalik Ramadhan</h1>
                </div>
            </div>
        </div>
        <div class="row px-5 gx-lg-5 d-flex justify-content-center align-items-center data-user">
            <div class="col-lg-8 ">
                <form action="#">
                    <div class="form">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form">
                        <label for="name" class="form-label">Email</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form">
                        <label for="name" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form">
                        <label for="name" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Laki-laki</option>
                            <option value="1">Perempuan</option>
                        </select>
                    </div>
                    <div class="form">
                        <label for="name" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="action-user d-flex justify-content-end align-items-center">
                        <button class="btn btn-lg btn-warning text-white fw-bold mx-3">Edit Profile</button>
                        <button class="btn btn-lg btn-danger text-white fw-bold">Logout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection