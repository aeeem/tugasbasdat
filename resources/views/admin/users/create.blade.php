@extends('layouts.admin')


@section('content')
<h1>Buat User</h1>
{!! Form::open(['method' => 'post', 'action'=>'AdminUsersController@store']) !!}
	<div class="form-group">
   {!!  Form::label('nama', 'Nama')!!}
  		{!!  Form::text('name',null ,['class' => 'form-control'])!!}
	</div>
	
	<div class="form-group">
   		{!!  Form::label('role_id', 'Role')!!}	
   		{!!  Form::select('role_id',[''=>'Pilih salah satu'] + $roles ,null ,['class' => 'form-control'])!!}
	</div>
<div class="form-group">
   {!!  Form::label('sedang_aktif', 'Status')!!}
   {!!  Form::select('sedang_aktif',[''=>'pilih salah satu' , '1'=>'Aktif','0'=>'Tidak Aktif'] ,null ,['class' => 'form-control'])!!}
</div>

		<div class="form-group">
   {!!  Form::label('email', 'Email')!!}
   {!!  Form::text('email',null ,['class' => 'form-control'])!!}
</div>

		<div class="form-group">
   {!!  Form::label('password', 'Password')!!}
   {!!  Form::password('password',['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::submit('Buat User',['class' => 'btn btn-primary'])!!}
	</div>
	
{!! Form::close() !!}
		

@include('include.error')

@stop
