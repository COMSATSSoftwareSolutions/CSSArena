@extends('layouts.adminapp')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::previous() }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input class="form-control" name="price" value="{{ $product->price }}" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Model No:</strong>
                <input class="form-control" name="model_no" value="{{ $product->model_no }}" placeholder="Model no">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" value="{{ $product->description }}" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Featured:</strong><span> &nbsp;&nbsp;&nbsp;&nbsp;</span>
                <input type="checkbox" class="" style="" name="description" value="{{ $product->isFeatured }}" placeholder="Description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select class="form-control" name="categoryId">


                    @foreach ($data as $dataa)
                    <option value="{{ $dataa->id }}">{{ $dataa->category_name }}</option>

                    @endforeach
                </select>
                <!-- <input type="number" class="form-control" name="categoryId" placeholder="Category Id"> -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User:</strong>
                <select class="form-control" name="userId">

                    @foreach ($userdata as $userdataa)
                    <option value="{{ $userdataa->id }}">{{ $userdataa->name }}</option>

                    @endforeach
                </select>
                <!-- <input type="number" class="form-control" name="userId" placeholder="User Id"> -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <select class="form-control" name="isActive">
                    <option value="1">Active</option>
                    <option value="0">InActive</option>

                </select>
                <!-- <input type="number" class="form-control" name="userId" placeholder="User Id"> -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

    </form>
@endsection
