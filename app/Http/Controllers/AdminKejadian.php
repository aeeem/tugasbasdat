<?php

namespace Kepolisian\Http\Controllers;

use Illuminate\Http\Request;
use Kepolisian\Kejadian;
use Kepolisian\Http\Requests\AdminKejadianCreateRequest;
use Kepolisian\Http\Requests\AdminKejadianEditRequest;
use Alert;

class AdminKejadian extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kejadians=Kejadian::all();
        return view('admin.kejadian.kejadian')->withkejadians($kejadians);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminKejadianCreateRequest $request)
    {
        $input=$request->all();
        Kejadian::create($input);
        return back();
    }


  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kejadians=Kejadian::all()->except($id);
        $kejadianss=Kejadian::find($id);
        return view('admin.kejadian.edit',compact('kejadianss','kejadians'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminKejadianCreateRequest $request, $id)
    {
        $input=$request->all();
        $kejadian = Kejadian::find($id);
        $kejadian->update($input);
        return redirect('/admin/kejadian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kejadian::destroy($id);
        Alert::success("data berhasil dihapus");
         return redirect('/admin/kejadian');
    }
}
