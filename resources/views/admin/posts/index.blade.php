@extends('layouts.admin')
@section('content')

 <link href="{{asset('css/libs.css')}}" rel="stylesheet">
<h1>users</h1>
 <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Judul</th>
         <th>Pemilik</th>
        <th>Dibuat</th>
        <th>Diupdate</th>
      </tr>
    </thead>
    <tbody>
    	@if ($post)
@foreach ($post as $post){{--perulangan untuk setiap users [array] di masukan ke dalam user secara --}}
{!! Form::open(['method' => 'POST', 'action'=>'AdminPostController@index']) !!}

      <tr>
      <td>{{ $post->id }}</td>
      <td>{{ $post->title }}</td>
      <td>{{$post->user->name}}</td>
      <td>{{ $post->created_at->diffForHumans()}}</td>
      <td>{{ $post->updated_at->diffForHumans()}}</td>
     <td><a href="{{Route('post.edit',$post->id)}}" class="btn-link2"> <span class="glyphicon glyphicon-edit"></span></a></td>
{!! Form::close() !!}
      {!! Form::open(['method' => 'delete','id' => 'hapus','class' => 'delete', 'action'=>['AdminPostController@destroy',$post->id]]) !!} 
     <td>{!!Form::button('<i class="glyphicon glyphicon-remove"></i>', ['id'=>'delete','data-file'=>'delete'.$post->id,'class'=>'btn-link','type'=>'submit']) !!}</td> 

    
       {!! Form::close() !!}
     

   @endforeach


   @endif
 {{-- @include('sweet::alert') --}}
  
@stop


