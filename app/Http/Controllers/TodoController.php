<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
       // return Todo::all();
    
        $data['todos'] = Todo::all();
            return view ('todo.index',$data);
  }

public function create(){
    return view('todo.create');
}
    public function store(Request $request){

        $request->validate([
            'title'=> 'required|max:20',
            'description'=> 'required|max:100'
        ]);
 
 $todo = new Todo();
 //$todo->title       =$request->title;
 //$todo->description =$request->description;
 //$todo->save();
 $todo->create($request->all());  
 //return all data from form
      return redirect('/todo')->with('message','Data Todo '.$todo->title.' Telah DiSimpan');
      
      //return value from specific element
    //return @request->title;
}

public function edit($id){
 $data['todo'] = Todo::find($id);
 return view('todo.edit',$data);
}
public function update($id, Request $request){
    $todo = Todo::find($id);
    $todo->title       =$request->title;
    $todo->description =$request->description;
    if($todo->isDirty())
    $todo->update();
    return redirect('/todo')->with('message','Data Todo '.$todo->title.' Telah DiUpdate');
   
}
public function destroy($id){
$todo = Todo::find($id);
$todo->delete();
return redirect('/todo')->with('message','Data Todo '.$todo->title.' Telah Dihapus');
}

}