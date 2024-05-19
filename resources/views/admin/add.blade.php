@extends('admin.layout.app')

@section ("title")
    Add Products

@endsection

@section ("miantitle")
Add Products

@endsection

@section ("Content")

<div class="container ">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title text-center">Add Product</h5>
        </div>
        <div class="card-body">
          <form method="post" action="{{route('product.addProduct')}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="productName">Product Name</label>
              <input type="text" name="pname" class="form-control" id="productName" placeholder="Enter product name" required>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="pdesc" id="description" rows="3" placeholder="Enter description"></textarea>
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" class="form-control" name="pprice" id="price" placeholder="Enter price" required>
            </div>
            <div class="form-group">
              <label for="Quantity">Quantity</label>
              <input type="number" class="form-control" name="pqty" id="price" placeholder="Enter Quantity" required>
            </div>
            <div class="form-group">
              <label for="price">Product Image</label>
              <div class="file-drop-area">

                <input type="file"  name="file" >
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Add Product</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

   
  @endsection