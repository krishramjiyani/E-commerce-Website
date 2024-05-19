<?php

namespace App\Http\Controllers;
use App\Models\products;
use App\Models\Users;
use App\Models\orders;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function logauth(Request $request)
    {
        // return $request;
        $request->validate([
            'email' => 'required',
            'password'=>'required|min:6'
        ]);
      //  $email=$request->email;
        $value=Auth::attempt( ['email'=>$request->email, 'password'=>$request->password] ); 
        $user=Users::where('email', $request->email)->first();
   
       
        if($value){
            Alert::success('Login', 'Login Success');
            if($user->type=="admin")
            {
                return redirect()->route('adminHome');

            }
            else
            {

                return redirect()->route('home');
            }
        }else
        {
            Alert::error('Login', 'Login Unsuccessfull');

            return redirect()->route('login');;
        }
        
    }
    public function home()
    {

        $product=products::all();
        // return $product;
        return view('client.index')->with('products',$product);
    }

   
    public function adminReg()
    {
        return view('admin.adminReg');

    }
    public function login()
    {
        return view('client.login');
    }
    public function register()
    {
        return view('client.register');
    }
    public function adminAuthenticate(Request $request)
    {
        //return $request;
        $user=new Users();
        $request->validate([
            'name'=>'required', 
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            
          
        ]);

        $user->name= $request->name;
        $user->email= $request->email;
        $user->password=Hash::make($request->password);
        $user->type= "admin";
        
        $user->save();
        Alert::success('Registration', 'Registration Success');
        return redirect()->route('login');
    }

    public function authenticate(Request $request)
    {
        //return view('client.login');
         $user=new Users();
        $request->validate([
            'name'=>'required', 
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'mo_no'=>'required',
            'city'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'pincode'=>'required|min:6',
            'state'=>'required'
          
        ]);

        $user->name= $request->name;
        $user->email= $request->email;
        $user->password=Hash::make($request->password);
        $user->mo_no= $request->mo_no;
        $user->city= $request->city;
        $user->address= $request->address;
        $user->gender= $request->gender;
        $user->pincode= $request->pincode;
        $user->state= $request->state;
        $user->save();
        Alert::success('Registration', 'Registration Success');
        return redirect()->route('login');
    }

   public function logout(){
    Session::flush();
    Auth::logout();
    return redirect('login');
   }

   public function allusers(){
    $user=new Users();
    $data=$user::all();
    
    return view('admin.allusers')->with('user',$data);
   }
  
   public function myOrders(){

    
    $u_id=auth()->user()->u_id;
  $data=orders::where('u_id', $u_id)->get();

    return view('client.myOrders')->with('order',$data);
   }

}
