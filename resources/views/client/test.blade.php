<div class="container-fluid">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="cart_container">
                     <div class="cart_title">Shopping Cart</div>
                     <div class="cart_items">
                         <ul class="cart_list">
                            @foreach($items as $items)
                            <li class="cart_item clearfix">
                                 <div class="cart_item_image"><img src="{{asset('file/'.$items['image'])}}" alt=""></div>
                                 <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                     <div class="cart_item_name cart_info_col">
                                         <div class="cart_item_title">Name</div>
                                         <div class="cart_item_text">{{$items['name']}}</div>

                                     </div>
                                     <div class="cart_item_color cart_info_col">
                                         <div class="cart_item_title">Description</div>
                                         <div class="cart_item_text">{{$items['description']}}</div>
                                     </div>
                                     <div class="cart_item_quantity cart_info_col">
                                         <div class="cart_item_title">Quantity</div>
                                         <div class="cart_item_text">{{$items['qty']}}</div>
                                     </div>
                                     <div class="cart_item_price cart_info_col">
                                         <div class="cart_item_title">Price</div>
                                         <div class="cart_item_text">₹{{$items['price']}}</div>
                                     </div>
                                     <div class="cart_item_total cart_info_col">
                                         <div class="cart_item_title">Total</div>
                                         <div class="cart_item_text">₹{{$items['price']}}</div>
                                     </div>
                                 </div>
                             </li>
                             @php
                                            $total=$items['price'] * $items['qty']; 
                                            $grand_total= $grand_total+$total;  
                             @endphp
                            @endforeach
                         </ul>
                     </div>
                     <div class="order_total">
                         <div class="order_total_content text-md-right">
                             <div class="order_total_title">Order Total:</div>
                            
                             <div class="order_total_amount">{{$grand_total}}</div>
                         </div>
                     </div>
                     <div class="cart_buttons">
                         <a href="{{route('home')}}"><button type="submit" class="button cart_button_clear">Continue Shopping</button></a> 
                     <a href="{{route('orders',['p_id'=>$items['p_id'],'u_id'=>$items['u_id'],'qty'=>$items['qty'],'price'=>$grand_total])}}"><button type="submit" class="button cart_button_clear">Order Now</button></a> </div>
                 </div>
             </div>
         </div>
     </div>


     <tr>
                <td>{{ $orders->o_id }}</td>
                <td>{{ $orders->fullname }}</td>
                <td>{{ $orders->address }}</td>
                <td>{{ $orders->state }}</td>

                <td>{{ $orders->zip }}</td>

                <td>{{ $orders->qty }}</td>
                <td>{{ $orders->t_price }}</td>
                <td>{{ $orders->date }}</td>

                <td>{{ $orders->created_at->format('d-m-Y') }}</td>
            </tr>