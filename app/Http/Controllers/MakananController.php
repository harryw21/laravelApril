<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakananController extends Controller
{
  public function index(){
    $data['todos'] = array('Pastel','Kue','minuman');
    return view ('makanan',$data);
}
}