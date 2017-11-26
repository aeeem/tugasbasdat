@extends('layouts.admin')
@section('content')
<h1>polisi</h1>
 <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Kota</th>
        <th>Provinsi</th>
        <th>Dibuat</th>
        <th>Status</th>
        <th>Diupdate</th>
         <th>Role</th>
      </tr>
    </thead>
    <tbody>
     @if ($polisis)
@foreach ($polisis as $polisi){{--perulangan untuk setiap polisi [array] di masukan ke dalam user secara --}}
{!! Form::open(['method' => 'post', 'action'=>'KantorPolisiController@index']) !!}

      <tr>
      <td>{{ $polisi ->id }}</td>
       <td>{{ $polisi ->nama }}</td>
      <td>{{ $polisi ->kota}}</td>
      <td>{{ $polisi ->provinsi}}</td>
      <td>{{ $polisi ->sektor}}</td>
      <td>{{ $polisi->alamat}}</td>
           <td><a href="{{Route('kantor.edit',$polisi->id)}}" class="btn-link2"> <span class="glyphicon glyphicon-edit"></span></a></td>
{!! Form::close() !!}

      {!! Form::open(['method' => 'delete','id' => 'hapus','onsubmit' => 'return ConfirmDelete()','class' => 'delete', 'action'=>['KantorPolisiController@destroy',$polisi->id]]) !!} 

     <td>{!!Form::button('<i class="glyphicon glyphicon-remove"></i>', ['onsubmit' => 'return ConfirmDelete()','id'=>'delete','data-file'=>'delete'.$polisi->id,'class'=>'btn-link','type'=>'submit']) !!}</td> 

    
       {!! Form::close() !!}
     
  {!! Form::close() !!}
   @endforeach


   @endif
   {{--    @foreach($roles as $role) 
      <td> {{$role->name}}</td>
      @endforeach --}}

  {{-- @if ($roles) --}}


    
            
      </tr>
     
      {{-- @endif --}}
    </tbody>
  </table>



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
@stop