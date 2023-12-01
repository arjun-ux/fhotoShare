<?php

namespace App\Http\Controllers;

use App\Models\Fhoto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function hasilFoto(Request $request)
    {
        $cari = $request->name;
        $fotos = Fhoto::where('name', 'like', '%' .$cari. '%')->get();

        // dd($fotos);
        return view('hasil', compact('fotos'));
    }
}
