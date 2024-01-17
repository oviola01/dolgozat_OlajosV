<?php

namespace App\Http\Controllers;

use App\Models\Bottom;
use Illuminate\Http\Request;

class BottomController extends Controller
{
    public function index(){
        $bottoms = response()->json(Bottom::all());
        return $bottoms;
    }

    public function show($id){
        $bottom = response()->json(Bottom::find($id));
        return $bottom;
    }

    public function store(Request $request){
        $bottom = new Bottom();
        $bottom->name = $request->name;
        $bottom->description = $request->description;
        $bottom->save();
    }

    public function update(Request $request, $id){
        $bottom = Bottom::find($id);
        $bottom->name = $request->name;
        $bottom->description = $request->description;
        $bottom->save();
    }
    
    public function destroy($id)
    {
        Bottom::find($id)->delete();
    }
}
