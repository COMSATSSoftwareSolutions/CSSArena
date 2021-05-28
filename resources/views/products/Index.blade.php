@extends('layouts.adminapp')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PRODUCTS</h2>
            </div>
            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('products.create') }}">Create New Product</a>
            </div>
        </div>
    </div>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" style="margin-top: 25px;">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Model #</th>
                <th>Description</th>
                <th>Category</th>
                {{-- <th>Produt Distributor</th> --}}
                <th>Active Status</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td style="width:20px;"><img style="width:100px" src="{{ asset('images/product-imgs/' . $product->product_img) }}" /></td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->model_no }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->categoryId }}</td>
                    {{-- <td>{{ $product->userId }}</td> --}}
                    <td>{{ $product->isActive }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('product-view', $product->id) }}">Features</a>

                            {{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Add Features</a> --}}

                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $products->links() !!}

@endsection
