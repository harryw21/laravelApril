<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index()
    {
     $data['users']=array(
         array('name'=>'nuris','email'=>'nuris.akbar@gmail.com','password'=>'password'),
         array('name'=>'Jaja','email'=>'jaja@gmail.com','password'=>'password'),
     );
     return view('user.index',$data);
    }

    public function create()
    {
    
        return view('user.create');
    }   
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
                $request->validate([
                'name'=> 'required|min:10',
                'email'=> 'required|min:5',
                'password'=> 'required|min:7'
            ]);
     
             //return all data from form
          return $request->all();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
