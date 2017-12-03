@extends('layouts.homepage')


@section('content')
<div class=" col-md-offset-3 col-md-6">
	
{!! Form::open(['method' => 'post', 'action'=>'UserLaporanController@store']) !!}
		<div class="form-group">
   {!!  Form::label('nama', 'Nama Laporan')!!}
   {!!  Form::text('nama_laporan',null ,['class' => 'form-control'])!!}
</div>
<div class="form-group">
		<div class="form-group">
   {!!  Form::label('nama', 'Jenis Laporan')!!}
   {!!  Form::text('jenis_laporan',null ,['class' => 'form-control'])!!}
</div>
</div>
<div class="form-group">
    <div class="form-group">
   {!!  Form::label('nama', 'Deskripsi')!!}
   {!!  Form::textarea('deskripsi',null ,['class' => 'form-control'])!!}
</div>

</div>

<div class="form-group">


<div class="form-group">
              
                {{ Form::button('<i class="glyphicon glyphicon-floppy-disk"></i>', ['type' => 'submit', 'class' => 'btn btn-warning btn-large'] )  }}
                {!!Form::button('<i class="glyphicon glyphicon-repeat"></i>', ['type'=>'reset','class'=>'btn btn-warning btn large']) !!}
             </div>
	{!! Form::close() !!}
 
</div>

        @include('include.error')


@stop