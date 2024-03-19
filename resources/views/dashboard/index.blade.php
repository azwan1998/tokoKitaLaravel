@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-light mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Jumlah User</h5>
                    <p class="card-text">{{$totalUser}}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-light mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Jumlah User Active</h5>
                    <p class="card-text">{{$totalUserActive}}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-light mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Jumlah Product</h5>
                    <p class="card-text">{{$totalProduct}}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-light mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Jumlah Active</h5>
                    <p class="card-text">{{$totalProductActive}}</p>
                </div>
            </div>
        </div>
        <!-- ... -->
    </div>

    <h4>Produk Terbaru</h4>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Tanggal Dibuat</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($newProduct as $new)
                <tr>
                    <td>{{ $new->name }}</td>
                    <td>{{ $new->created_at }}</td>
                    <td>{{ $new->price }} $</td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection