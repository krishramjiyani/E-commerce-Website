<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>Update Quantity Shopping Cart Example</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
	<!-- Demo CSS (No need to include it into your project) -->
	<link rel="stylesheet" href="css/demo.css">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
@import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
*{ margin: 0; padding: 0;}
body{
  font-family: 'Roboto', sans-serif;
  font-style: normal;
  font-weight: 300;
  font-smoothing: antialiased;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
  font-size: 15px;
  background: #eee;
}
.intro{
   background: #fff;
   padding: 60px 30px;
   color: #333;
   margin-bottom: 15px;
   line-height: 1.5;
   text-align: center;
}
.intro h1 {
   font-size: 18pt;
   padding-bottom: 15px;

}
.intro p{
   font-size: 14px;
}

.action{
   text-align: center;
   display: block;
   margin-top: 20px;
}

.intro a.btn {
  text-decoration: none;
  color: #666;
   border: 2px solid #666;
   padding: 10px 15px;
   display: inline-block;
   margin-left: 5px;
}
.intro a.btn:hover{
   background: #666;
   color: #fff;
    transition: .3s;
-webkit-transition: .3s;
}
.btn:before{
  font-family: FontAwesome;
  font-weight: normal;
  margin-right: 10px;
}
.github:before{content: "\f09b"}
.down:before{content: "\f019"}
.back:before{content:"\f112"}
.credit{
    background: #fff;
    padding: 12px;
    font-size: 9pt;
    text-align: center;
    color: #333;
    margin-top: 40px;

}
.credit span:before{
   font-family: FontAwesome;
   color: #e41b17;
   content: "\f004";


}
.credit a{
   color: #333;
   text-decoration: none;
}
.credit a:hover{
   color: #1DBF73; 
}
.credit a:hover:after{
    font-family: FontAwesome;
    content: "\f08e";
    font-size: 9pt;
    position: absolute;
    margin: 3px;
}
main{
  background: #fff;
  padding:: 20px;
  
}

article li{
   color: #444;
   font-size: 15px;
   margin-left: 33px;
   line-height: 1.5;
   padding: 5px;
}
article h1,
article h2,
article h3,
article h4,
article p{
   padding: 14px;
   color: #333;
}
article p{
   font-size: 15px;
    line-height: 1.5;
}
 
@media only screen and (min-width: 1280px){
    main{
      max-width: 1166px;
      margin-left: auto;
      margin-right: auto; 
      padding: 24px;
    }


}

.set-overlayer,
.set-glass,
.set-sticky {
	cursor: pointer;
	height: 45px;
	line-height: 45px;
	padding: 0 15px;
	color: #333;
	font-size: 16px;
}
.set-overlayer:after,
.set-glass:after,
.to-active:after,
.set-sticky:after {
	font-family: FontAwesome;
	font-size: 18pt;
	position: relative;
	float: right;
}
.set-overlayer:after,
.set-glass:after,
.set-sticky:after {
	content: "\f204";
	transition: .6s;
}

.to-active:after {
	content: "\f205";
	color: #008080;
	transition: .6s;
}
.set-overlayer,
.set-glass,
.set-sticky,
.source,
.theme-tray {
	margin: 10px;
	background: #f2f2f2;
	border-radius: 5px;
	border: 2px solid #f1f1f1;
	box-sizing: border-box;
}
/* Syntax Highlighter*/

pre.prettyprint {
	padding: 15px !important;
   margin: 10px;
	border: 0 !important;
  background: #f2f2f2;
  overflow: auto;
}

.source {
	white-space: pre;
	overflow: auto;
	max-height: 400px;
}
code{
    border:1px solid #ddd;
    padding: 2px;
    border-radius: 2px;
}


body {
	background: #eee;
	margin: 0;
	padding: 0;
	overflow-x: hidden;
}

.clearfix {
  content: "";
  display: table;
  clear: both;	
}

#site-header, #site-footer {
	background: #fff;
}

#site-header {
	margin: 0 0 30px 0;
}

#site-header h1 {
	font-size: 31px;
	font-weight: 300;
	padding: 40px 0;
	position: relative;
	margin: 0;
}

a {
	color: #000;
	text-decoration: none;

	-webkit-transition: color .2s linear;
	-moz-transition: color .2s linear;
	-ms-transition: color .2s linear;
	-o-transition: color .2s linear;
	transition: color .2s linear;
}

a:hover {
	color: #53b5aa;
}

#site-header h1 span {
	color: #53b5aa;
}

#site-header h1 span.last-span {
	background: #fff;
	padding-right: 150px;
	position: absolute;
	left: 217px;

	-webkit-transition: all .2s linear;
	-moz-transition: all .2s linear;
	-ms-transition: all .2s linear;
	-o-transition: all .2s linear;
	transition: all .2s linear;
}

#site-header h1:hover span.last-span, #site-header h1 span.is-open {
	left: 363px;
}

#site-header h1 em {
	font-size: 16px;
	font-style: normal;
	vertical-align: middle;
}

.container {
	font-family: 'Open Sans', sans-serif;
	margin: 0 auto;
	width: 980px;
}

#cart {
	width: 100%;
}

#cart h1 {
	font-weight: 300;
}

#cart a {
	color: #53b5aa;
	text-decoration: none;

	-webkit-transition: color .2s linear;
	-moz-transition: color .2s linear;
	-ms-transition: color .2s linear;
	-o-transition: color .2s linear;
	transition: color .2s linear;
}

#cart a:hover {
	color: #000;
}

.product.removed {
	margin-left: 980px !important;
	opacity: 0;
}

.product {
	border: 1px solid #eee;
	margin: 20px 0;
	width: 100%;
	height: 195px;
	position: relative;

	-webkit-transition: margin .2s linear, opacity .2s linear;
	-moz-transition: margin .2s linear, opacity .2s linear;
	-ms-transition: margin .2s linear, opacity .2s linear;
	-o-transition: margin .2s linear, opacity .2s linear;
	transition: margin .2s linear, opacity .2s linear;
}

.product img {
	width: 100%;
	height: 100%;
}

.product header, .product .content {
	background-color: #fff;
	border: 1px solid #ccc;
	border-style: none none solid none;
	float: left;
}

.product header {
	background: #000;
	margin: 0 1% 20px 0;
	overflow: hidden;
	padding: 0;
	position: relative;
	width: 24%;
	height: 195px;
}

.product header:hover img {
	opacity: .7;
}

.product header:hover h3 {
	bottom: 73px;
}

.product header h3 {
	background: #53b5aa;
	color: #fff;
	font-size: 22px;
	font-weight: 300;
	line-height: 49px;
	margin: 0;
	padding: 0 30px;
	position: absolute;
	bottom: -50px;
	right: 0;
	left: 0;

	-webkit-transition: bottom .2s linear;
	-moz-transition: bottom .2s linear;
	-ms-transition: bottom .2s linear;
	-o-transition: bottom .2s linear;
	transition: bottom .2s linear;
}

.remove {
	cursor: pointer;
}

.product .content {
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	height: 140px;
	padding: 0 20px;
	width: 75%;
}

.product h1 {
	color: #53b5aa;
	font-size: 25px;
	font-weight: 300;
	margin: 17px 0 20px 0;
}

.product footer.content {
	height: 50px;
	margin: 6px 0 0 0;
	padding: 0;
}

.product footer .price {
	background: #fcfcfc;
	color: #000;
	float: right;
	font-size: 15px;
	font-weight: 300;
	line-height: 49px;
	margin: 0;
	padding: 0 30px;
}

.product footer .full-price {
	background: #53b5aa;
	color: #fff;
	float: right;
	font-size: 22px;
	font-weight: 300;
	line-height: 49px;
	margin: 0;
	padding: 0 30px;

	-webkit-transition: margin .15s linear;
	-moz-transition: margin .15s linear;
	-ms-transition: margin .15s linear;
	-o-transition: margin .15s linear;
	transition: margin .15s linear;
}

.qt, .qt-plus, .qt-minus {
	display: block;
	float: left;
}

.qt {
	font-size: 19px;
	line-height: 50px;
	width: 70px;
	text-align: center;
}

.qt-plus, .qt-minus {
	background: #fcfcfc;
	border: none;
	font-size: 30px;
	font-weight: 300;
	height: 100%;
	padding: 0 20px;
	-webkit-transition: background .2s linear;
	-moz-transition: background .2s linear;
	-ms-transition: background .2s linear;
	-o-transition: background .2s linear;
	transition: background .2s linear;
}

.qt-plus:hover, .qt-minus:hover {
	background: #53b5aa;
	color: #fff;
	cursor: pointer;
}

.qt-plus {
	line-height: 50px;
}

.qt-minus {
	line-height: 47px;
}

#site-footer {
	margin: 30px 0 0 0;
}

#site-footer {
	padding: 40px;
}

#site-footer h1 {
	background: #fcfcfc;
	border: 1px solid #ccc;
	border-style: none none solid none;
	font-size: 24px;
	font-weight: 300;
	margin: 0 0 7px 0;
	padding: 14px 40px;
	text-align: center;
}

#site-footer h2 {
	font-size: 24px;
	font-weight: 300;
	margin: 10px 0 0 0;
}

#site-footer h3 {
	font-size: 19px;
	font-weight: 300;
	margin: 15px 0;
}

.left {
	float: left;
}

.right {
	float: right;
}

.btn {
	background: #53b5aa;
	border: 1px solid #999;
	border-style: none none solid none;
	cursor: pointer;
	display: block;
	color: #fff;
	font-size: 20px;
	font-weight: 300;
	padding: 16px 0;
	width: 290px;
	text-align: center;

	-webkit-transition: all .2s linear;
	-moz-transition: all .2s linear;
	-ms-transition: all .2s linear;
	-o-transition: all .2s linear;
	transition: all .2s linear;
}

.btn:hover {
	color: #fff;
	background: #429188;
}

.type {
	background: #fcfcfc;
	font-size: 13px;
	padding: 10px 16px;
	left: 100%;
}

.type, .color {
	border: 1px solid #ccc;
	border-style: none none solid none;
	position: absolute;
}

.color {
	width: 40px;
	height: 40px;
	right: -40px;
}

.red {
	background: #cb5a5e;
}

.yellow {
	background: #f1c40f;
}

.blue {
	background: #3598dc;
}

.minused {
	margin: 0 50px 0 0 !important;
}

.added {
	margin: 0 -50px 0 0 !important;
}
    </style>
  </head>
  <body>
 
      
 <main>
     <!-- Start DEMO HTML (Use the following code into your project)-->
<header id="site-header">
		<div class="container">
			<h1>Shopping cart </h1>
		</div>
	</header>

	<div class="container">
<form action="{{route('addToCart')}}" method="post">
@csrf

<section id="cart"> 
			<article class="product">
				<header>
					<a class="remove">
						<img src="{{asset('file/'.$product->image)}}" alt="{{$product->name}}">

						<h3>Remove product</h3>
					</a>
				</header>

				<div class="content">

					<h1>{{$product->name}}</h1>

{{$product->description}}
					
				</div>

				<footer class="content">
					<!-- <span class="qt-minus">-</span>
					<span class="qt">1</span>
					<span class="qt-plus">+</span> -->

					<input type="number" name="qty" id='qty'/>
					<input type="number" name="p_id" hidden value="{{$product->p_id}}"/>
					<input type="number" name="u_id" hidden  value="{{auth()->user()->u_id}}"/>
					<h2 class="full-price">
          {{$product->price}}
					</h2>

					<!-- <h2 class="price">
						{{$product->price}}
					</h2> -->
				</footer>
			</article>

			
		

		</section>

	</div>

	<footer id="site-footer">
		<div class="container clearfix">

		

			<div class="right" style=" margin-left: 80px;">
				<!-- <h1 class="total">Total: <span>{{$product->price}}</span></h1> -->
				<a class="btn">Checkout</a>
			</div>

			
			<div class="right">
				<!-- <h1 class="total">Total: <span>{{$product->price}}</span></h1> -->
				<button type="submit" class="btn">Add to Cart</button>
			</div>

		</div>
	</footer>
	</form>
		
     <!-- END EDMO HTML (Happy Coding!)-->
 </main>
 
      
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  >


var check = false;

function changeVal(el) {
  var qt = parseFloat(el.parent().children(".qt").html());
  var price = parseFloat(el.parent().children(".price").html());
  var eq = Math.round(price * qt * 100) / 100;
  
  el.parent().children(".full-price").html( eq );
  
  changeTotal();			
}

function changeTotal() {
  
  var price = 0;
  
  $(".full-price").each(function(index){
    price += parseFloat($(".full-price").eq(index).html());
  });
  
  price = Math.round(price * 100) / 100;
 
  var fullPrice = Math.round((price ) *100) / 100;
  
  if(price == 0) {
    fullPrice = 0;
  }
  
  $(".subtotal span").html(price);
  
  $(".total span").html(fullPrice);
}

$(document).ready(function(){
  
  $(".remove").click(function(){
    var el = $(this);
    el.parent().parent().addClass("removed");
    window.setTimeout(
      function(){
        el.parent().parent().slideUp('fast', function() { 
          el.parent().parent().remove(); 
          if($(".product").length == 0) {
            // if(check) {
            //   $("#cart").html("<h1>Thanks for your Purchase !!!...</h1>");
            //   $(".total span").addClass("removed");
            // } else {
            //   $("#cart").html("<h1></h1>");
            // }
          }
          // changeTotal(); 
        });
      }, 200);
  });
  
  $(".qt-plus").click(function(){
    $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
    
    $(this).parent().children(".full-price").addClass("added");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
  });
  
  $(".qt-minus").click(function(){
    
    child = $(this).parent().children(".qt");
    
    if(parseInt(child.html()) > 1) {
      child.html(parseInt(child.html()) - 1);
    }
    
    $(this).parent().children(".full-price").addClass("minused");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
  });
  
  window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);
  
  // $(".btn").click(function(){
  //   check = true;
  //   $(".remove").click();
  // });
});
    </script> 
      
  </body>
</html>