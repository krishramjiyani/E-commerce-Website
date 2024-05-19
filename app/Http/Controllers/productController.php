<?php

namespace App\Http\Controllers;
use App\Models\orders;

use App\Models\cart;
use Illuminate\Http\Request;
use App\Models\products;
use RealRashid\SweetAlert\Facades\Alert;
use Shuchkin\SimpleXLSX;
use App\Http\Controllers\OrderController;
use App\Models\Users;
use Illuminate\Support\Facades\Session;
// use SimpleXLSX\ ;

// use SimpleXLSX;
use Illuminate\Support\Facades\File;
class productController extends Controller
{
   public function add()
   {
     return view('admin.add');
   }
   public function addProduct(Request $request)
   {
    $request->validate([
      'pname'=>'required',
      'pprice'=>'required|numeric',
      'file'=>'required',
      'pdesc'=>'required',
      'pqty'=>'required|numeric'

    ]);
    $filename=time().'.'.$request->file->extension();
    $request->file->move(public_path('file'),$filename);
    $file_path=public_path('file').'/'.$filename;

    $product=new products();
    $product->name=$request->pname;
    $product->price=$request->pprice;
    $product->description=$request->pdesc;
    $product->qty= $request->pqty;
    $product->image=$filename;
    $product->save();
    Alert::success('Product Inserted successfully');
     return redirect()->back();

   }

   public function edit($p_id)
   {
      $product=products::where('p_id', $p_id)->get();

      return view('admin.edit')->with('product',$product[0]);
  
   }
   public function updated(Request $request)
   {
    $request->validate([
      'pname'=>'required',
      'pprice'=>'required|numeric',
      'file'=>'required',
      'pdesc'=>'required',
      'pqty'=>'required|numeric'

    ]);
    $filename=time().'.'.$request->file->extension();
    $request->file->move(public_path('file'),$filename);
    $file_path=public_path('file').'/'.$filename;

      $product=products::where('p_id', $request->id)->first();
   
      $product->name=$request->pname;
      $product->price=$request->pprice;
      $product->description=$request->pdesc;
      $product->qty= $request->pqty;
      $product->image=$filename;
      $product->save();
      Alert::success('Product Updated successfully');
      return redirect()->back();
    
   }

   public function delete($p_id)
   {
     $delete1=products::find($p_id)->delete();
     Alert::success('Product Deleted successfully');
     return redirect()->back();
   }

   public function setActive($p_id,Request $request)
   {
   $product=products::where('p_id', $p_id)->first();
          if($product->isActive==1)
          {
            $product->isActive=0;
            $product->save();
            Alert::success('Product Updated successfully');
            return redirect()->back();
          }
          if($product->isActive==0)
          {
            $product->isActive=1;

            $product->save();
            Alert::success('Product Updated successfully');
            return redirect()->back();
           }
      // return $product->isActive;
   }

   public function cart($p_id)
   {
    $product=products::find($p_id);
    // return $product;
     return view('client.cart')->with('product',$product);
    // return view('client.test');
   }

   public function bulkupload()
   {
    return view('admin.bulkupload');
   }

   public function bulkuploadasset(Request $request)
   {
          $request->validate([
            'file' => 'required',
        ]);

        $filName = time().'.'.$request->file->extension();
        $request->file->move(public_path('file'),$filName);
        $file_path=public_path('file')."/".$filName;
        if($xlsx=SimpleXLSX::parse($file_path)){
          foreach($xlsx->rows() as $row){
              $products = new products();
              $products->name = $row[0];
              $products->price = $row[1];
              

              $products->description = $row[2];
              $products->qty = $row[3];
              $products->image = $row[4];
              $products->save();
          }
      } else {
          return SimpleXLSX::parseError();
      }
      if(File::exists($file_path)){
          //File::delete($image_path)
          unlink($file_path);
      }
      return redirect()->route('adminHome');
   }


   public function addToCart(Request $request)
   {
      // return $request;
      $request->validate([
        'u_id'=>'required',
        'p_id'=>'required',
        'qty'=>'required'
      ]);

      // $cart= new cart();
      // $cart->u_id=$request->u_id;
      // $cart->p_id=$request->p_id;
      // $cart->qty=$request->qty;

      
      $cart=new cart();
      $cart->u_id=$request->u_id;
      $cart->p_id=$request->p_id;
      $cart->qty=$request->qty;
      $cart->save();
      
      return redirect()->route('home');
   }


   public function cartlist()
   {
    $u_id=auth()->user()->u_id;
    // $cart=cart::where('u_id', $u_id)->get();
  
  
  
  $users = cart::join('Users', 'cart.u_id', '=', 'Users.u_id')
  ->join('products', 'cart.p_id', '=', 'products.p_id')
  ->get(["cart.c_id", 
  "cart.qty", 
  "products.name",
  "products.description",
  "cart.u_id",
  "cart.p_id",
  "products.price","products.image" ]);
  
  
  

    return view('client.cartlist')->with('items',$users);
  
}

public function adminoders()
{
  $order=new orders();
  $data=$order::all();

  
  
  return view('admin.adminorders')->with('order',$data);
  // return $data;
}

}