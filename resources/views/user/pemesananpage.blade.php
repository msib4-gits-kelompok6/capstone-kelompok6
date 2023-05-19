@extends('layouts.app')

@section('title', 'Pesan Bengkel')

@section('content')

    <form class="mb-xl-5 pesan">
        <div class="pesan-bengkel">
            <div class="container my-3">

                <h1 class="text-center font-weight-bold">Pesan Bengkel</h1>
                <div class="mb-3">
                    <h4 class="font-weight-bold mb-3">Data Customer </h4>
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail">
                </div>
                <div class="mb-3">
                    <label for="typeNumber" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="typeNumber">
                </div>
                <br>
                <h4 class="font-weight-bold mb-3 ">Data Kendaraan </h4>
                <div class="row row row-cols-1 row-cols-md-2 g-4 pesan">
                    <div class="col mb-3">
                        <label for="ExampleBrand" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="brand">
                    </div>
                    <div class="col mb-3">
                        <label for="ExampleModel" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model">
                    </div>
                    <div class="col mb-3">
                        <label for="ExampleCateggoryBrand" class="form-label">Category</label>
                        <input type="text" class="form-control" id="categoryBrand">
                    </div>
                    <div class="col mb-3">
                        <label for="ExampleCategoryModel" class="form-label">Nomer Kendaraan</label>
                        <input type="text" class="form-control" id="categoryModel">
                    </div>
                </div>
                <br>
                <h4 class="font-weight-bold mb-3 ">Waktu Service </h4>
                <div class="row row row-cols-2 row-cols-md-2 g-4 pesan">
                    <div class="col mb-3">
                        <label for="ExampleDate" class="form-label">Tanggal Service</label>
                        <input type="date" class="form-control" id="tanggal">
                    </div>
                    <div class="col mb-3">
                        <label for="ExampleTime" class="form-label">Jam Service</label>
                        <input type="time" class="form-control" id="waktu">
                    </div>
                </div>
                <br>
                <h4 class="font-weight-bold mb-3 ">Detail Service</h4>
                <div class="col-auto mb-3">
                    <h5 class="mb-3">Tipe Service</h5>
                    <select class="form-select" id="autoSizingSelect">
                        <option selected>Silahkan</option>
                        <option value="1">Kerumah</option>
                        <option value="2">Take a way</option>
                        <option value="3">cash or duel</option>
                    </select>
                </div>
                <h5 class="mb-3">Pilih Service</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Kerumah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Jemput paksa
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Darurat ke lokasi
                    </label>
                </div>

                <br>
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded harga">Total <span>Rp.100.000</span></div>
                <div class="col-lg-12 d-flex justify-content-end">
                    <a type="submit" class="btn btn-lg btn-primary btn-pesan">Selanjutnya</a>
                </div>
            </div>

        </div>
        </div>
    </form>

@endsection
