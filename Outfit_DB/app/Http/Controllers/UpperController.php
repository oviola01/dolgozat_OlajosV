<?php

namespace App\Http\Controllers;

use App\Models\Upper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpperController extends Controller
{
    public function index(){
        $uppers = response()->json(Upper::all());
        return $uppers;
    }

    public function show($id){
        $upper = response()->json(Upper::find($id));
        return $upper;
    }

    public function store(Request $request){
        $upper = new Upper();
        $upper->name = $request->name;
        $upper->description = $request->description;
        $upper->save();
    }

    public function update(Request $request, $id){
        $upper = Upper::find($id);
        $upper->name = $request->name;
        $upper->description = $request->description;
        $upper->save();
    }
    
    public function destroy($id)
    {
        Upper::find($id)->delete();
    }
}
