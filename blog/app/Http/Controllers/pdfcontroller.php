<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class pdfcontroller extends Controller
{
    public function pdf(){
    	$pdf = PDF::loadView('home');
return $pdf->download('home.pdf');

    }
}
