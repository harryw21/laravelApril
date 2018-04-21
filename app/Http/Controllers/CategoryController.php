<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(){
    $data['todos'] = array('User Name','Category','Password');
    return view ('category.index',$data);
  }

public function create(){
    return view('category.create');
}
    public function store(Request $request){

        $request->validate([
            'category'=> 'required|min:10',
                    ]);
 
 
       
      return $request->all();
      
     
}

}