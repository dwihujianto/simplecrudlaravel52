<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PendudukRequest;
use App\Http\Controllers\Controller;

use App\Models\Penduduk;
use App\Models\Kota;

class PendudukController extends Controller
{

    public function index()
    {
    	$search = \Request::get('q');
    	
    	$penduduks = Penduduk::with('kota')->whereHas('kota',function($q) use($search){
    		$q->where('kota','like','%'.$search.'%');
    	})->get();

    	return view('penduduk.index')
    			->with('penduduks',$penduduks);
    }

    public function show($id)
    {
        $penduduk = Penduduk::findOrFail($id);

        return view('penduduk.show')->with('penduduk',$penduduk);
    }

    public function create()
    {
        return view('penduduk.create')
                ->with('kotas',Kota::lists('kota','id'));
    }

    public function store(PendudukRequest $request)
    {
        $penduduk = new Penduduk();
        
        $penduduk->nama             = $request->input('_name');
        $penduduk->jenis_kelamin    = $request->input('_gender');
        $penduduk->alamat           = $request->input('_address');
        $penduduk->id_kota          = $request->input('_city');

        $penduduk->save();

        return redirect()->route('penduduk.index');
    }

    public function edit($id)
    {
        $penduduk = Penduduk::findOrFail($id);

        return view('penduduk.edit')
                ->with('penduduk',$penduduk)
                ->with('kotas',Kota::lists('kota','id'));       
    }   

    public function update(PendudukRequest $request,$id)
    {
        $penduduk = Penduduk::findOrFail($id);

        $penduduk->nama             = $request->input('_name');
        $penduduk->jenis_kelamin    = $request->input('_gender');
        $penduduk->alamat           = $request->input('_address');
        $penduduk->id_kota          = $request->input('_city');

        $penduduk->update();

        return redirect()->route('penduduk.index');
    }

    public function destroy($id)
    {
        Penduduk::destroy($id);

        return redirect()->route('penduduk.index');
    }
}
