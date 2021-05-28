@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PRODUCTS</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('dashboard') }}"> Dashboard</a>
                <!-- <a class="btn btn-success" href="{{ route('dashboard') }}"> List of All Features</a> -->
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style="margin-top: 25px;">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Produt</th>
            <th>Active Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($featuresList as $featureList)
        <tr>
            <td>{{ $featureList->id }}</td>
            <td>{{ $featureList->featureName }}</td>
            <td>{{ $featureList->featureDescription }}</td>
            <td>{{ $featureList->productId }}</td>
            <td>{{ $featureList->isActive }}</td>
             
            <td>
                <form action="{{ route('product/features.destroy',$featureList->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('product/features.show',$featureList->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('product/features.edit',$featureList->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $featuresList->links() !!}
      
@endsection