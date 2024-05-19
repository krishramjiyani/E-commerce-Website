@extends('admin.layout.app')

@section ("title")
    Edit Product

@endsection

@section ("miantitle")
Edit Product
@endsection

@section ("Content")

<div class="container ">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title text-center">Edit Product</h5>
        </div>
        <div class="card-body">
          <form method="post" action="{{route('product.updated')}}" enctype="multipart/form-data">
          @csrf
          @include('sweetalert::alert')
        <input type="hidden" name="id" value="{{$product->p_id}}">
            <div class="form-group">
              <label for="productName">Product Name</label>
              <input type="text" name="pname" class="form-control" id="productName" placeholder="Enter product name" required value="{{$product->name}}">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="pdesc" id="description" rows="3" placeholder="Enter description" >{{$product->description}}</textarea>
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" class="form-control" name="pprice" id="price" placeholder="Enter price" required value="{{$product->price}}">
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" class="form-control" name="pqty" id="price" placeholder="Enter Quantity" required value="{{$product->qty}}">
            </div>
            <div class="form-group">
              <label for="price">Product Image</label>
              <div class="file-drop-area">

                <input type="file"  name="file" >
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Edit Product</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

  @endsection