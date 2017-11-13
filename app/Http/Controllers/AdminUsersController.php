<?php

namespace Kepolisian\Http\Controllers;
use Kepolisian\User;
use Kepolisian\Role;
use Illuminate\Http\Request;
use Kepolisian\Http\Requests\UserCreateRequest;
use Kepolisian\Http\Requests\UserEditRequest;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        // $role=$users->roles;
       return view('admin.users.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::pluck('name','id')->all();
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
      if (trim($request->password) == ''){
            $input=$request->except('password');
        }
        else {
            $input=$request->all();
            $input['password']=bcrypt($request->password);
        }
        $create=$user->create($input);

        return redirect('admin/users');
        // return $request->all();
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
        $user=User::findOrFail($id);
        $role=Role::pluck('name','id')->all();
        return view("admin.users.edit",compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        if (trim($request->password) == ''){
            $input=$request->except('password');
        }
        else {
            $input=$request->all();
            $input['password']=bcrypt($request->password);
        }
        $user=User::findOrFail($id);
        $updatenow=$user->update($input);
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
