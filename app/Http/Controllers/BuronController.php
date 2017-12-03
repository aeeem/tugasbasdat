<?php

namespace Kepolisian\Http\Controllers;

use Kepolisian\Buron;
use Illuminate\Http\Request;
use Kepolisian\Http\Requests\BuronCreateRequest;
use Kepolisian\Foto;

class BuronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('buron.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buron.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $input=$request->all();
     if($file=$request->file('foto_id')){
        $name=time().$file->getClientOriginalName();
        $file->move('foto',$name);
        $photo=Foto::create(['path'=>$name]);
        $input['foto_id']=$photo->id;
        Buron::create($input);
        return redirect('/buron');
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Kepolisian\Buron  $buron
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Kepolisian\Buron  $buron
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('buron.view');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Kepolisian\Buron  $buron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Kepolisian\Buron  $buron
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buron $buron)
    {
        //
    }
}
