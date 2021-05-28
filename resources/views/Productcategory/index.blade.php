@extends('layouts.adminapp')

@section('content')
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Css Arena</h2>
            </div>
            <div class="pull-right">

                <a class="btn btn-success" href="{{route('prod_cat_create')}}"> Create New Product-Category</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>icon</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($productcategories as $productcategory)
        <tr>
            <td>{{ $productcategory->id }}</td>
            <td>{{ $productcategory->category_name }}</td>
            <td><img src="{{ asset('images/product-icons/' . $productcategory->category_icon) }}" /></td>

            <td>{{ $productcategory->isActive }}</td>
            <td>
                <form action="{{ route('Prodcat_destroy', $productcategory->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('Prodcat_show', $productcategory->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('Prodcat_edit', $productcategory->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button> <hr />
                    <a class="btn btn-info" href="{{ route('showbycat', $productcategory->id) }}">View Products</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>



@endsection
