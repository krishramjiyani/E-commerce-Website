@extends('admin.layout.app')


@section ("title")
    Admin Home

@endsection

@section ("maintitle")
    category

@endsection

@section ("Content")

<div class="card">
              <div class="card-header">
                <h3 class="card-title">All Products Details</h3>
                <div class="card-tools">
                  <a class="btn btn-success" href="{{route('product.add')}}">Add Product</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr No.</th>
                    <th>image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th colspan="2" style="text-align: center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <?php $i=1; ?>
                    @foreach($products as $products)
                    <tr align="center">
                        <td >{{$i++}}</td>
                       
                        <td> <img src="{{asset('file/'.$products->image)}}" style="height: 160px;width: 200px; display: block;
  margin-left: auto;
  margin-right: auto;"></td>  
                        <td align="center"> {{$products->name}}</td>  

                        <td> {{$products->description}}</td>
                        <td> {{$products->price}}</td>
                        <td> {{$products->qty}}</td>
                        <td > @if($products->isActive == 1)
                            <span class="btn btn-success">    active</span>
                          @else
                          <span class="btn btn-warning">   not active</span>
                          @endif
                        </td>


                        <td style="text-align: center"> 
                          <a class="btn btn-warning"  href="{{route('product.edit',[$products->p_id])}}"> 
                            </i>EDIT</a>
                        <a class="btn btn-danger"  href="{{route('product.delete',[$products->p_id])}}"> 
                          DELETE
                        </a> <br>
                        <a class="btn btn-dark mt-5"  href="{{route('setActive',[$products->p_id])}}"> 
                        @if($products->isActive==1)
                          
                            Set InActive
                          
                          @else
                            Set Active
                          
                          @endif
                        </a> 
                        </td>
                          
                      </tr>
                    @endforeach
                  </tbody>  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           
@endsection


