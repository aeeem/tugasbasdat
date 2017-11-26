<?php

namespace Kepolisian\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Kepolisian\Kantorpolisi;
use Kepolisian\Http\Requests\KantorPolisiCreateRequest;
use Alert;
class KantorPolisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polisis=Kantorpolisi::all();
        return view('admin.kantor.index',compact('polisis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kantor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KantorPolisiCreateRequest $request)
    {
        Kantorpolisi::create($request->all());
        return redirect('admin/kantor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kantor=Kantorpolisi::findOrFail($id);
        return view('admin.kantor.edit',compact('kantor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kantor=Kantorpolisi::findOrFail($id);
        $kantor->update($request->all());
        return redirect('admin/kantor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kantorpolisi::destroy($id);
        Alert::success('sucess');
        return back();
    }
}
