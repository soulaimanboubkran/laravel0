<?php
namespace App\Http\Controllers;

use App\Models\Api1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Correctly import the Validator class

class ApiController extends Controller
{
    public function index(){
        $Api1 = Api1::all();
        $data = [
            'persons' => $Api1,
        ];
        return response()->json($data, 200);
    } 

    public function upload(Request $request){ // Note that it should be $request, not $requist
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "email" => "required|email"
        ]);

        if ($validator->fails()) {
            $data = [
                "status"=>422,
                "message"=>$validator->messages()
            ];
            return response()->json($data,422);
        }else{
             
            $person =new Api1;

            $person->name=$request->name;
            $person->email=$request->email;
            $person->phone=$request->phone;

            $person->save();

            $data=[
                "status"=>200,
                "message"=>"Data has been uploaded successfully"
            ];
            return response()->json($data,200);
        }
        
    }

    public function edit(Request $request, $id){
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "email" => "required|email"
        ]);

        if ($validator->fails()) {
            $data = [
                "status"=>422,
                "message"=>$validator->messages()
            ];
            return response()->json($data,422);
        }else{
           $person = Api1::find($id);
            $person->name=$request->name;
            $person->email=$request->email;
            $person->phone=$request->phone;

            $person->save();

            $data=[
                "status"=>200,
                "message"=>"Data has been updated successfully"
            ];
            return response()->json($data,200);
        }
    }

    public function delete($id){
        $person = Api1::find($id);
        $person->delete();

        $data=[
            "status"=>200,
            "message"=>"Data has been deleted successfully"
        ];
        return response()->json($data,200);
    }
}
