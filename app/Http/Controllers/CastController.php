<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CastController extends Controller
{
    public function create(){
        return view('cast.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama'=>'required|unique:cast',
            'umur'=>'required',
            'biodata'=>'required'
            ]);
        $query = DB::table('cast')->insert([
            'nama'=>$request['nama'],
            'umur'=>$request['umur'],
            'biodata'=>$request['biodata'],
            ]);
        return redirect('/cast');
    }
    public function index(){
        $casts = DB::table('cast')->get();
        return view('cast.index',compact('casts'));
    }

    public function show($id){
        $casts =DB::table('cast')->where('id',$id)->first();
        return view('cast.show', compact('casts'));
    }
    public function edit($id){
        $casts =DB::table('cast')->where('id',$id)->first();
        return view('cast.edit', compact('casts'));
    }
    public function update($id, Request $request){
        $request->validate([
            'nama'=>'required|unique:cast',
            'umur'=>'required',
            'biodata'=>'required'
        ]);
        $query = DB::table('cast')
        ->where('id',$id) 
        ->update([
            'nama'=>$request['nama'],
            'umur'=>$request['umur'],
            'biodata'=>$request['biodata'],
            ]);
        return redirect('/cast');
    }
    public function destroy($id){
        $query = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast')->with('success', 'Caster Berhasil Dihapus');
    }

}
