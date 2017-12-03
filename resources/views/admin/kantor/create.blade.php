@extends('layouts.admin')


@section('content')
<h1>Buat User</h1>
<div class="col-md-7">
  
{!! Form::open(['method' => 'post', 'action'=>'KantorPolisiController@store']) !!}


  <div class="form-group">
   {!!  Form::label('nama', 'Nama Kantor')!!}
   {!!  Form::text('nama',null ,['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
   {!!  Form::label('kota', 'Kota')!!}
        {!!  Form::text('kota',null ,['class' => 'form-control'])!!}
    </div>
    
    <div class="form-group">
        {!!  Form::label('provinsi', 'Provinsi')!!}  
        {!!  Form::text('provinsi',null ,['class' => 'form-control'])!!}
    </div>

        <div class="form-group">
   {!!  Form::label('alamat', 'Alamat')!!}
   {!!  Form::textarea('alamat',null ,['class' => 'form-control'])!!}
</div>

        <div class="form-group">
   {!!  Form::label('sektor', 'Sektor')!!}
   {!!  Form::text('sektor',null,['class' => 'form-control'])!!}
</div>
    <div class="form-group">
              
                {{ Form::button('<i class="glyphicon glyphicon-save"></i>', ['type' => 'submit', 'class' => 'btn btn-warning btn-large'] )  }}
               
             </div>

    
{!! Form::close() !!}
        
</div>

@include('include.error')

@stop
