@extends('layouts.adminapp')

@section('content')
<div class="row" style="margin-top: 50px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Css Arena</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                <a class="btn btn-success" href="{{route('prod_cat_create')}}"> Create New Product-Category</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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

    <div><h2>Add Product Features</h2></div>
{{-- action="{{ route('addfeature', $product->id) }}" --}}
    <div class="form-group">
         <form id="add_item" method="POST">

            <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
            </div>


            <div class="alert alert-success print-success-msg" style="display:none">
            <ul></ul>
            </div>

            <?php $c = 1; ?>
            <div class="table-responsive col-md-2-offset col-md-8">
                <table class="table table-bordered" id="dynamic_field">
                    <tr>
                        {{-- <td class="custom-tbl"><input id="val_id" type="text" name="fr_item[]" placeholder="Feature id" class="form-control name_list input-sm" value="{{$c}}"/></td> --}}
                        <td class="custom-tbl"><input type="text" name="featureName[]" placeholder="Feature Name" class="form-control name_list" /></td>
                        <td class="custom-tbl"><input type="text" name="featureDescription[]" placeholder="feature Description" class="form-control name_list" /></td>

                        <td><button type="button" name="add" id="add" class="btn btn-success"><b>+</b></span></button></td>
                    </tr>
                </table>
                <button type="button" id="save_features" name="submit" class="btn btn-info">Submit</button>
            </div>


         </form>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){

      var id = "<?php echo $product->id; ?>";
    $url = '/../product/feature/addfeature/' + id;
      var i=1;


      $('#add').click(function(){
           i++;
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="featureName[]" placeholder="Feature Name" class="form-control name_list" /></td><td><input type="text" name="featureDescription[]" placeholder="feature Description" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
      });


      $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
      });


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      var name = $('#name').val();
      $("#save_features").click(function () {
        $.ajax({
            url: "{{ route('add-feature', $product->id) }}",
            method: "POST",
            data: $("#add_item").serialize(),
            dataType: "json",

        }).done(function(){
            i=1;
            $('.dynamic-added').remove();
            $('#add_item')[0].reset();
            $(".print-success-msg").find("ul").html('');
            $(".print-success-msg").css('display','block');
            $(".print-error-msg").css('display','none');
            $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
        })
        setTimeout(function() {
        $('.print-success-msg').fadeOut('fast');
        }, 5000);

    });

    });
</script>

@endsection
