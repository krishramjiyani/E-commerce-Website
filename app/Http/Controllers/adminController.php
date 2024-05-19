<?php

namespace App\Http\Controllers;
use App\Models\products;
use App\Models\Users;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
class adminController extends Controller
{
    public function adminHome()
    {
        $product=products::all();
        // return $product;
        // return view('admin.index',['products'=>$product]);

        return view('admin.index')->with('products',$product);
    }
}
