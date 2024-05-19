@extends('admin.layout.app')


@section ("title")
All orders

@endsection

@section ("maintitle")
    All orders

@endsection

@section ("Content")

<div class="card">
              <div class="card-header">
                <h3 class="card-title">All orders</h3>
                <div class="card-tools">
                  <a class="btn btn-success" href="{{route('adminoders')}}">Add Product</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr No.</th>
                  
                    <th>O_id</th>
                    <th>P_id</th>
                    <th>U_id</th>
                    <th>Fullname</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Status</th>

                    <th>Date</th>
                    <th colspan="2" style="text-align: center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <?php $i=1; ?>
                    @foreach($order as $order)
                    <tr align="center">
                        <td >{{$i++}}</td>
                     
                       
                        <td> {{$order->o_id}}</td>
                        <td> {{$order->p_id}}</td>
                        <td> {{$order->u_id}}</td>
                        <td> {{$order->fullname}}</td>
                        <td> {{$order->address}}</td>
                        <td> {{$order->state}}</td>
                      
                        <td> {{$order->zip}}</td>
                        <td> {{$order->qty}}</td>
                        <td> {{$order->t_price}}</td>
                        <td> @if($order->status == 1)
                            <span class="btn btn-success">
                           success</span>
                          @elseif( $order->status==0 )
                          <span class="btn btn-warning"> pending</span>
                          @else
                          <span class="btn btn-danger">
                          
                          rejected</span>
                          @endif</td>
                        <td> {{$order->date}}</td>


                       
                        <td > 
                            <span class="btn btn-success"> 
                            <a class="btn btn-dark mt-5"  href="{{route('updateStatus',[$order->o_id])}}">
                            Accept
                                </a></span>
                         
                          <span class="btn btn-warning">
                          <a class="btn btn-dark mt-5"  href="{{route('updateStatus',[$order->o_id])}}">
                             Decline
                          </a></span>
                          </td>

                      </tr>
                      
                    @endforeach
                  </tbody>  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           
@endsection


