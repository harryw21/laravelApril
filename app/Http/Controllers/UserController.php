<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
   
    public function index()
    {
     $data['users'] = DB::table('users')->get();
     //dd($data);
     return view('user.index',$data);
    }

    public function create()
    {
    
        return view('user.create');
    }   
    

  
    public function store(Request $request)
    {
        DB::table('users')->insert([
                'name'  => $request->name,
                'email'  => $request->email,
                'password'  => Hash::make($request->password)]);
                return redirect ('user');

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
        $data['user']=DB::table('users')->where('id',$id)->first();
        return view('user.edit',$data);
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
        //return ($request-name);
       
        $password = $request->password;
       if(!empty($password)){
           //update password
           
        DB::table('users')->where('id',$id)->update([
            'name'  => $request->name,
            'email' => $request->email,
            'password'=> hash::make($request->password)]);
       }else{
           //jangan update password
           DB::table('users')->where('id',$id)->update([
            'name'  => $request->name,
            'email' => $request->email]);
            }    
        return redirect('user');
        
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $query = DB::table('users')->where('id',$id);
       //membaca datanya terlebih dahulu dan disimpan dalam variable user
       $user = $query->get()->first();
       //proses hapus
    $query->delete();
    return redirect('/user')->with('status','user dengan name'.$user->name.'has deleted');
      }
}
