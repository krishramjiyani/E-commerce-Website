<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    <title>Register</title>
    
</head>
<body>
    <style>
                        @media (min-width: 1025px) {
                .h-custom {
                height: 100vh !important;
                }
                }
                .card-registration .select-input.form-control[readonly]:not([disabled]) {
                font-size: 1rem;
                line-height: 2.15;
                padding-left: .75em;
                padding-right: .75em;
                }
                .card-registration .select-arrow {
                top: 13px;
                }

                .gradient-custom-2 {
                /* fallback for old browsers */
                background: black;

                /* Chrome 10-25, Safari 5.1-6 */
                background: grey;

                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                background: grey;
                }

                .bg-indigo {
                background-color: black;
                }
                @media (min-width: 992px) {
                .card-registration-2 .bg-indigo {
                border-top-right-radius: 15px;
                border-bottom-right-radius: 15px;
                }
                }
                @media (max-width: 991px) {
                .card-registration-2 .bg-indigo {
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;
                }
                }
        </style>
<form method="POST" action="{{route('authenticate')}}">
@include('sweetalert::alert')
@csrf
<section class="h-auto gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>


                  <div class="row">
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <label class="form-label" for="form3Examplev4">Name</label>
                      <input type="text" id="form3Examplev4" name="name" class="form-control form-control-lg" value="{{old('name')}}"/>

                    </div>
                    <span class="mb-3">
                    @if ($errors->has('name'))
                        <span style="color:red">{{$errors->first('name')}}</span>
                              @endif
                        </span>
                  </div>

                    <!-- <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="form3Examplev3" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev3">Last name</label>
                      </div>

                    </div> -->
                  </div>

                  

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <label class="form-label" for="form3Examplev4">Email</label>
                      <input type="email" value="{{old('email')}}" id="form3Examplev4" name="email" class="form-control form-control-lg" />
                    </div>
                    <span class="mb-3">
                    @if ($errors->has('email'))
                        <span style="color:red">{{$errors->first('email')}}</span>
                              @endif
                        </span>
                  </div>

                  
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <label class="form-label" for="form3Examplev4">Mobile Number</label>
                      <input type="number" value="{{old('mo_no')}}" id="form3Examplev4" name="mo_no" class="form-control form-control-lg" />
                    </div>
                    <span class="mb-3">
                    @if ($errors->has('mo_no'))
                        <span style="color:red">{{$errors->first('mo_no')}}</span>
                              @endif
                        </span>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <label class="form-label" for="form3Examplev4">Password</label>
                      <input type="password" value="{{old('password')}}" id="form3Examplev4" name="password" class="form-control form-control-lg" />
                    </div>
                    <span class="mb-3">
                    @if ($errors->has('password'))
                        <span style="color:red">{{$errors->first('password')}}</span>
                              @endif
                        </span>
                  </div>

                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <label class="form-check-label" for="femaleGender">Female</label>
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="f" />
                  </div>
                 

                  <div class="form-check form-check-inline mb-0 me-4">
                    <label class="form-check-label" for="maleGender">Male</label>
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="m" />
                  </div>
                  
                </div>
                <span class="mb-3">
                  @if ($errors->has('gender'))
                      <span style="color:red">{{$errors->first('gender')}}</span>
                            @endif
                      </span>

                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <label class="form-label" for="form3Examplea2">Address</label>
                      <input type="text" id="form3Examplea2" value="{{old('address')}}" name="address" class="form-control form-control-lg" />
                    </div>
                    <span class="mb-3">
                    @if ($errors->has('address'))
                        <span style="color:red">{{$errors->first('address')}}</span>
                              @endif
                        </span>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <label class="form-label" for="form3Examplea3">City</label>
                      <input type="text" id="form3Examplea3" value="{{old('city')}}" name="city" class="form-control form-control-lg" />
                    </div>
                    <span class="mb-3">
                    @if ($errors->has('city'))
                        <span style="color:red">{{$errors->first('city')}}</span>
                              @endif
                        </span>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                        <input type="number" id="form3Examplea4" value="{{old('pincode')}}" name="pincode" class="form-control form-control-lg" />
                      </div>
                      <span class="mb-3">
                    @if ($errors->has('pincode'))
                        <span style="color:red">{{$errors->first('pincode')}}</span>
                              @endif
                        </span>
                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <label class="form-label" for="form3Examplea5">State</label>
                        <input type="text" id="form3Examplea5" value="{{old('state')}}" name="state" class="form-control form-control-lg" />
                      </div>
                      <span class="mb-3">
                    @if ($errors->has('state'))
                        <span style="color:red">{{$errors->first('state')}}</span>
                              @endif
                        </span>

                    </div>
                  </div>

                  <button type="submit" class="btn btn-light btn-lg"
                    data-mdb-ripple-color="dark">Register</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</body>
</html>