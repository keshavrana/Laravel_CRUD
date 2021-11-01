<?php

namespace App\Http\Controllers;
use App\Models\Data;
use DB;

use Illuminate\Http\Request;

class User extends Controller
{
   public function register(){
        $data = Data::all();
        return view('index',['members'=>$data]);
    }
    public function register1(Request $request){
        //echo "<pre>";print_r($request->all());
        //die("Testing chal rahi hai");
        $test = new Data;
        $test->name = $request->name;
        $test->email = $request->email;
        $test->password = $request->password;
        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('file'), $fileName);
        $test->file = $fileName;
        $test->gender = $request->gender;
        $test1 = $test->save();
        if($test1){
            return back()->with('success', 'Data inserted Successfully');
        }
    }
    public function delete($id){
        $data=Data::find($id);
        $data->delete();
        return back()->with('success1', 'Data Deleted Successfully');
    }
    public function update($id){
        $data = Data::find($id);
        return view('update',['data'=>$data]);

    }
function update1(Request $request){
    $data = Data::find($request->id);
    $data->name = $request->name;
    $data->email = $request->email;
    $data->password = $request->password;
    $data->save();
    return redirect('index');

}
public function login(){
    return view('login');
}
public function login1(Request $request){
    $name = $request->name;
    $password = $request->password;
    $sql = DB::table('crud')->where(['name'=>$name,'password'=>$password])->get();
    $data = count($sql);
    if($data == 0){
        return back()->with('error', 'Please Enter Valid Crendential');
    }
    else{
        return redirect('index');
    }
}

public function ajax(){
    return view('ajaxform');
}
public function ajaxinsert(Request $request){
    $data = new Data;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->password = $request->password;
    $data->save();
    return ["message"=>"Data is inserted successfully"];

}

}
