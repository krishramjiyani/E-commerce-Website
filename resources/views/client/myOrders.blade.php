<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container mt-5 px-2">
    
   
    <div class="table-responsive">
    <table class="table table-responsive table-borderless">
        
      <thead>
        <tr class="bg-light">
          
          <th scope="col" width="5%">Sr.No</th>
          <th scope="col" width="5%">Order Id</th>
          <th scope="col" width="20%">Fullname</th>
          <th scope="col" width="10%">Address</th>
          <th scope="col" width="20%">State</th>
          <th scope="col" width="20%">Pincode</th>
          <th scope="col" width="20%">Quantity</th>
          <th scope="col" class="text-end" width="20%"><span>Total Price</span></th>
          <th scope="col" width="20%">Status</th>
          <th scope="col" width="20%">Date</th>
          <th scope="col" width="20%">Action</th>


        </tr>
      </thead>
  <tbody>
    
  <?php $i=1; ?>
     @foreach($order as $order)
                   
    <tr align="center" class=" p-2 ">

      <td>{{$i++}}</td>
      <td>{{$order->o_id}}</td>
      <td>{{$order->fullname}}</td>
      <td>{{$order->address}}</td>
      <td>{{$order->state}}</td>
      <td> {{$order->zip}}</td>
      <td> {{$order->qty}}</td>
        <td> {{$order->t_price}}</td>
        @if($order->status==0)
        

            <td class="btn btn-warning"> Pending</td>
        
        @elseif( $order->status == 1 )

            <td class="btn btn-success"> Accepted</td>
        @else
             <td class="btn btn-danger">Rejected</td>
        @endif
        <td> {{$order->date}}</td>
      <td><a href=
      "{{route('downloadInvoice',[$order->o_id])}}" 
      ><button class="btn btn-primary">download invoice</button></a></td>

    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{route('home')}}"><button class="btn btn-success">Back to home</button></a>
  </div>
    
</div>
</body>
</html>