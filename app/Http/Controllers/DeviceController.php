<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

class DeviceController extends Controller
{
    // find data by id from database
     function hello($id=null){
     return $id?Device::find($id):Device::all();
    }
    // add data from post method Api
    function add(Request $req){
        $device=new Device;
        $device->name=$req->name;
        $device->class=$req->class;
        $device->email=$req->email;
        $result=$device->save();
        if($result){
            return ["result"=>"Data Has been add sucessfully"];
        }
       else{
        return ["result"=>"operation failed"];
       }
    }
    // put data or update data
    function update(Request $req){
        $device=Device::find($req->id);
        $device->name=$req->name;
        $device->email=$req->email;
        $device->class=$req->class;
        $result= $device->save();
        if($result){
            return ["result"=>"data update sucessfully"];
        }
        else{
            return ["return"=>"operation fail"];
        }
    }
    function delete($id){
        $device=Device::find($id);
       $result= $device->delete();
if($result){
    return ['result'=>'record has been deleted sucessfully'];
}
else{
    return ['result'=>'operation fail'];
}
        
    }
    //search data from database with api get method:
    function search($name){
        return Device::where("name",$name)->get();
    }
    // Validation with api post method:
    function testData(Request $req){
        $reluse=array(
        "class"=>"required",
        "password"=>"required| max:5",
        "confirm password"=>"required |max:5"
        );
        $Validator= Validator::make($req->all(),$reluse);
        if($Validator->fails()){
            return  $Validator->errors();
        }
        else{
            return ["result"=>'validate has been sucessfully'];
        }
       
    }
}
