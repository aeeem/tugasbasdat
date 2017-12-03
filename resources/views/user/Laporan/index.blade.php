@extends('layouts.homepage')
@section('content')
    <link href="{{asset('css/extras.css')}}" rel="stylesheet">
 <link href="{{asset('css/libs.css')}}" rel="stylesheet">
 <div class=" row col-md-9 col-md-6-offset" style="margin-left:200px">
<h1>Laporan</h1>
<div class="col-md-offset-11"><a href="{{route('laporan.create')}}"><button class="btn-primary">Buat Laporan</button></a></div>
 <table class="table">
    <thead>
      <tr>
        <th>Judul</th>
         <th>Jenis Laporan</th>
        <th>Dibuat</th>
        <th>Diupdate</th>
      </tr>
    </thead>
    <tbody>
    	@if ($laporan)
@foreach ($laporan as $laporans){{--perulangan untuk setiap users [array] di masukan ke dalam user secara --}}
{!! Form::open(['method' => 'POST', 'action'=>'UserLaporanController@index']) !!}

      <tr>
      
      <td>{{ $laporans->nama_laporan}}</a></td>
      <td>{{$laporans->kejadian->nama_kejadian}}</td>
      <td>{{ $laporans->created_at->diffForHumans()}}</td>
      <td>{{ $laporans->updated_at->diffForHumans()}}</td>
      @if($laporans->diterima == 'belum')

     <td><a href="{{Route('laporan.edit',$laporans->id)}}" class="btn-link2"> <span class="glyphicon glyphicon-edit"></span></a></td>
     @else
     <td><a href="/tugasbasdat/public/cobain/{{$laporans->id}}">downloads</a></td>
     @endif
{!! Form::close() !!}

      {!! Form::open(['method' => 'delete','id' => 'hapus','onsubmit' => 'return ConfirmDelete()','class' => 'delete', 'action'=>['UserLaporanController@destroy',$laporans->id]]) !!} 

     <td>{!!Form::button('<i class="glyphicon glyphicon-remove"></i>', ['onsubmit' => 'return ConfirmDelete()','id'=>'delete','data-file'=>'delete'.$laporans->id,'class'=>'btn-link','type'=>'submit']) !!}</td> 
       {!! Form::close() !!}
     

   @endforeach


   @endif
 <script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libs.js')}}"></script>
<script src="{{asset('js/extras.js')}}"></script>
   <script>

  function ConfirmDelete()
  {
  var x = confirm("yakin ingin di hapus?");
  if (x)
    return true;
  else
    return false;
  }

</script>
</tr></tbody></table></div>
@stop


