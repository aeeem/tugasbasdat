@extends('layouts.admin')


@section('content')

{!! Form::open(['method' => 'post', 'action'=>'BuronController@store','files'=>true]) !!}

<div class="col-md-6">
	
<div class="form-group">
   {!!  Form::label('nama', 'Nama')!!}
   {!!  Form::text('nama',null ,['class' => 'form-control'])!!}
</div>

<div class="form-group">
   {!!  Form::label('deskripsi', 'Deskripsi')!!}
   {!!  Form::textarea('deskripsi',null ,['class' => 'form-control'])!!}
</div>


<div class="form-group">
   {!!  Form::label('foto_id', 'Foto')!!}
   {!!  Form::file('foto_id',null ,['class' => 'form-control'])!!}
</div>




<div class="form-group">
	{!! Form::submit('save',['class' => 'btn btn-primary'])!!}
	</div>
</div>
	{!! Form::close() !!}

   {!! Form::close() !!}



@stop
