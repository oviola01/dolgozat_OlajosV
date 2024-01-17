<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    public function index(){
        $additionals = response()->json(Additional::all());
        return $additionals;
    }

    public function show($id){
        $additional = response()->json(Additional::find($id));
        return $additional;
    }

    public function store(Request $request){
        $additional = new Additional();
        $additional->name = $request->name;
        $additional->description = $request->description;
        $additional->save();
    }

    public function update(Request $request, $id){
        $additional = Additional::find($id);
        $additional->name = $request->name;
        $additional->description = $request->description;
        $additional->save();
    }
    
    public function destroy($id)
    {
        Additional::find($id)->delete();
    }
}
