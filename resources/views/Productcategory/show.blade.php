@extends('layouts.adminapp')
 
@section('content')
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Css Arena</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('cat_Index') }}"> Back</a>
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
            <th>Created_at</th>
            <th>Updated_at</th>
        </tr>
        
        <tr>
            <td>{{ $productcategory->id }}</td>
            <td>{{ $productcategory->category_name }}</td>
            <td>{{ $productcategory->category_icon }}</td>
            <td>{{ $productcategory->isActive }}</td>
            <td>{{ $productcategory->Created_at }}</td>
            <td>{{ $productcategory->Updated_at }}</td>
        </tr>
        
    </table>
    <div class="pull-right">
    <form action="{{ route('Prodcat_destroy', $productcategory->id) }}" method="POST">

   <a class="btn btn-primary" href="{{ route('Prodcat_edit', $productcategory->id) }}">Edit</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
            </div>
    
      
@endsection