@extends('admin.app')

@section('title', 'Detail')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail User</h3>

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
            @foreach ($users as $user)
                <h1>{{ $user->name }}</h1>
                <p>{{ $user->phone_number }}</p>
                <p>{{ $user->kendaraan->name }}</p>
            @endforeach
        </div>
        <!-- /.card-body -->
    </div>
@endsection
