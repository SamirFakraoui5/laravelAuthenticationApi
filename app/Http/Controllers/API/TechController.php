<?php

namespace App\Http\Controllers\API;

use App\Models\Technicien;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechController extends Controller
{
      /**
     * Create a new ArticleController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    { 
        return Technicien::all();
       // return response()->json(["Technicien"=>$technicien]);
    }

    public function show(Technicien $technicien)
    {
        return response()->json($technicien);
    }

    public function store(Request $request)
    {
        $technicien = Technicien::create($request->all());

        return response()->json($technicien, 201);
    }

    public function update(Request $request, Technicien $technicien)
    {
        $technicien->update($request->all());

        return response()->json($technicien, 200);
    }

    public function delete(Technicien $technicien)
    {
        $technicien->delete();

        return response()->json(["Technicien deleted successfully"], 204);
    }
}
