@extends('layouts.admin')


@section('content')
<h1>Edit User</h1>

<div class="col-sm9">
	

{!! Form::model($user, ['method' => 'patch', 'action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
	<div class="form-group">
   {!!  Form::label('nama', 'Nama')!!}
  		{!!  Form::text('name',null ,['class' => 'form-control'])!!}
	</div>
	
	<div class="form-group">
   		{!!  Form::label('role_id', 'Role')!!}
   		{!!  Form::select('role_id',$role ,null ,['class' => 'form-control'])!!}
	</div>
<div class="form-group">
   {!!  Form::label('sedang_aktif', 'Status')!!}
   {!!  Form::select('sedang_aktif',array(1=>'Aktif',0=>'Tidak Aktif') ,null ,['class' => 'form-control'])!!}
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
	{!! Form::submit('Update',['class' => 'btn btn-primary'])!!}
	</div>
{!! Form::close() !!}
		
</div>

@include('include.error')

@stop
