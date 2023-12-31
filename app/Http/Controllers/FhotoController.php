<?php

namespace App\Http\Controllers;

use App\Models\Fhoto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FhotoController extends Controller
{
    public function index()
    {
        return view('upload.index');
    }
    public function list()
    {
        $fotos = Fhoto::latest()->get();
        return view('upload.list', compact('fotos'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image'
        ]);
        $foto = $request->file('foto');
        $foto->storeAs('/public/img', $foto->hashName());
        // dd($foto);
        Fhoto::create([
            'name' => Str::random(6),
            'foto' => $foto->hashName(),
        ]);
        return redirect()->route('list');
    }
}
