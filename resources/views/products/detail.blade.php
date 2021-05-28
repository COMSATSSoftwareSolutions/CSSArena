@extends('layouts.adminapp')

@section('content')
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Css Arena</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::previous() }}"> Back</a>
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Add Features</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-12">
        <table class="table table-bordered table-responsive-sm">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>price</th>
                <th>model_no</th>
                <th>description</th>
                <th>categoryId</th>
                <th>userId</th>
                <th>isActive</th>
            </tr>

            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->model_no }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->categoryId }}</td>
                <td>{{ $product->userId }}</td>
                <td>{{ $product->isActive }}</td>
            </tr>

        </table>
    </div>
    <div class="col-12">
        <div>
            <h2>Product Features</h2>
        </div>
        <table class="table table-bordered table-responsive-sm">
            <tr>
                <th>featureName</th>
                <th>featureDescription</th>
                <th>isActive</th>
                <th>key_feature</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
            @foreach ($product_features as $item)
                <tr>
                    <td>{{ $item->featureName }}</td>
                    <td>{{ $product->featureDescription }}</td>
                    <td>{{ $product->isActive }}</td>
                    <td>{{ $product->key_feature }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                </tr>
            @endforeach


        </table>
    </div>



@endsection
