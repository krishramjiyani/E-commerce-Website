<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"/>
<link href="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <!-- <link href="form-validation.css" rel="stylesheet"> -->
  
</head>
<body>
    <form mthrod="POST" action="{{route( 'finalorders' )}}">
         @csrf   
<div class="container ">
    <input type="text" name="p_id" value="{{$orderdetails['p_id']}}" hidden>
    <input type="text" name="u_id"  value="{{$orderdetails['u_id']}} "hidden>
    <input type="text" name="qty" value="{{ $orderdetails['qty'] }}" hidden>
    <input type="text" name="price" value="{{ $orderdetails['price'] }} "hidden>



      <div class="row">
        <div class="col-md-4 order-md-2 mb-4 ">
         
        
        </div>
        <div class="col-md-8 order-md-1 mt-5">
          <h4 class="mb-3 text-5 fs-2">Billing address</h4>
       
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Fullname</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="fullname">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
             
            </div>

           
            

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" name="address">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

           

            <div class="row">
              
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required="" name="state">
                  <option value="">Choose...</option>
                  <option>Gujarat</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="" name="zip">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit">Cash on Delivery</label>
              </div>
              
            
            <hr class="mb-4">
           <button class="btn btn-primary btn-lg btn-block mb-5" type="submit" >Continue to checkout</button>
         
        </div>
      </div>

      
    </div>
</form>
</body>
</html>

