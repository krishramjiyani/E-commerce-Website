@extends('admin.layout.app')


@section ("title")
All Users

@endsection

@section ("maintitle")
    All Users

@endsection

@section ("Content")

<div class="card">
              <div class="card-header">
                <h3 class="card-title">All Users</h3>
                <div class="card-tools">
                  <a class="btn btn-success" href="{{route('allusers')}}">Add Product</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr No.</th>
                  
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile_no</th>
                    <th>City</th>
                    <th>State</th>
                    <th>pincode</th>
                    <th colspan="2" style="text-align: center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <?php $i=1; ?>
                    @foreach($user as $user)
                    @if($user->type=="user")
                    <tr align="center">
                        <td >{{$i++}}</td>
                     
                        <td align="center"> {{$user->name}}</td>  

                        <td> {{$user->email}}</td>
                        <td> {{$user->mo_no}}</td>
                        <td> {{$user->city}}</td>
                        <td> {{$user->state}}</td>
                        <td> {{$user->pincode}}</td>
                       
                        <td > @if($user->isActive == 1)
                            <span class="btn btn-success">    active</span>
                          @else
                          <span class="btn btn-warning">   not active</span>
                          @endif
                        </td>

                      </tr>
                      @endif
                    @endforeach
                  </tbody>  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           
@endsection


