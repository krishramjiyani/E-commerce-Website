<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\cart;
use App\Models\orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders(Request $request)
     {

        return view('client.orders')->with('orderdetails',$request);
   
    }

    public function finalorders(Request $request)  {

        $order=new orders();
       
    
                $order->p_id= $request->p_id;
                $order->u_id= $request->u_id;
                $order->fullname=$request->fullname;
                $order->address= $request->address;
                $order->state= $request->state;
                $order->zip= $request->zip;
                $order->qty= $request->qty;
                $order->t_price= $request->price;
                $order->status= 0;
                $order->date= date('Y-m-d H:i:s'); 
    
                $order->save();
               Alert::success('Order Placed', 'Order Placed');
               $delete1= Cart::where('u_id', auth()->user()->u_id)->delete();

                return redirect()->route('home');
    }

    public function updateStatus($o_id){
        

        $order=orders::where('o_id', $o_id)->first();
        //   return $order;
          if($order->status==0)
          {
            $order->status=1;

            $order->save();
            // Alert::success('Product Updated successfully');
            return redirect()->back();
           }else{
            {
                $order->status=2;
                $order->save();
                // Alert::success('Product Updated successfully');
                return redirect()->back();
              }
           }
    }



    public function downloadInvoice($o_id)
    {
      $oreder=orders::find($o_id);
      return $oreder;
      
      
    }
}

