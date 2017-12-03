<?php

namespace Kepolisian\Http\Controllers;

use Illuminate\Http\Request;
use Kepolisian\laporan;
use Kepolisian\Http\Requests\AdminTerimaRequest;


class AdminTerimaLaporan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//index
    {
        $laporan = laporan::all();
        return view('admin.terimalaporan',compact('laporan'));
    }

  
    public function update(AdminTerimaRequest $request, $id)//update
    {
        $laporan=laporan::find($id);
        $laporan->update($request->all());
        return back();
    }

 
    public function show($id){
        $laporan=laporan::find($id);
        return view('admin.lihat',compact('laporan'));

    }
    public function destroy($id)//hapus
    {
        //
    }
}
