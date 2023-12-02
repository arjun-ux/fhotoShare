<?php

namespace App\Http\Controllers;

use App\Models\Fhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function downloadFoto($id)
    {
        $path = Fhoto::where("id", $id)->first();

        // dd($path);
        // return Storage::download('storage/img/'.$path->foto);
        return response()->download('storage/img/'.$path->foto);
    }

}
