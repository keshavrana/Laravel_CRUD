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
        //print_r($request->input());
        //die();
        $test = new Data;
        $test->name = $request->name;
        $test->email = $request->email;
        $test->password = $request->password;
        $test1 = $test->save();
        if($test1){
            return redirect('index');
        }
    }
    public function delete($id){
        $data=Data::find($id);
        $data->delete();
        return redirect('index');
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


}
