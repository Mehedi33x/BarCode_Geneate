@extends('main')
@section('content')
    <div class="container">
        <h2 class="my-4" style="text-align: center">Products</h2>
        <hr>
        <div class="my-4">
            <a href="{{route('prodcut.create')}}" class="btn btn-success">+ Product</a>
        </div>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Barcode</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key=>$data )
                    <tr>
                    <td>1</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->price}}</td>
                    <td>
                        <img src="{{ url('storage/barcodes' , $data->barcode . '.png') }}"" alt="" srcset="">
                    </td>
                </tr>
                @endforeach
                
                
            </tbody>
        </table>
    </div>
@endsection
