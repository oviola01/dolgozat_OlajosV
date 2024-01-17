<?php

namespace App\Http\Controllers;

use App\Models\Outfit;
use Illuminate\Http\Request;

class OutfitController extends Controller
{
    public function index()
    {
        $users = response()->json(Outfit::all());
        return $users;
    }

    public function show ($user_id, $upper_id, $bottom_id)
    {
        $outfit = Outfit::where('user_id', $user_id)
        ->where('upper_id', $upper_id)
        ->where('bottom_id', $bottom_id)
        ->get();
        return $outfit[0];
    }

    public function store(Request $request)
    {
        $outfit = new Outfit();
        $outfit->user_id = $request->user_id;
        $outfit->upper_id = $request->upper_id;
        $outfit->bottom_id = $request->bottom_id;
        $outfit->status = $request->status;
        $outfit->additional_id = $request->additional_id;
        $outfit->save();
    }

    public function destroy($user_id, $upper_id, $bottom_id)
    {
        Outfit::where('user_id', $user_id)
        ->where('upper_id', $upper_id)
        ->where('bottom_id', $bottom_id)
        ->delete();
    }
}
