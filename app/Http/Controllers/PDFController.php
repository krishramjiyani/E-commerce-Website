<?php

namespace App\Http\Controllers;
use App\Models\orders;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function downloadInvoice($o_id)
    {
        
        $orders = orders::find($o_id);
      //  return $orders;
        $data = [
            'title' => 'Welcome to E-commerce Store',
            'date' => date('m/d/Y'),
            'orders' => $orders,
            'o_id'=>$o_id,
            'fullname'=>$orders->fullname,
            'address'=>$orders->address,
            'state'=>$orders->state,
            'zip'=>$orders->zip,
            'qty'=>$orders->qty,
            't_price'=>$orders->t_price,
           
        
        ];
// return $data;
        $pdf = PDF::loadView('client.pdfdownload', $data);
        return $pdf->download('users-lists.pdf');
     }
}
