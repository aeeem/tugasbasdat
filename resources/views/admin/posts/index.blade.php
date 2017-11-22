@extends('layouts.admin')
@section('content')
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
{!! Form::open(['method' => 'post', 'action'=>'AdminPostController@index']) !!}

      <tr>
      <td>{{ $post->id }}</td>
      <td>{{ $post->title }}</td>
      <td>{{$post->user->name}}</td>
      <td>{{ $post->created_at->diffForHumans()}}</td>
      <td>{{ $post->updated_at->diffForHumans()}}</td>
     {{--  <td>{{ Form::button('', ['route("/admin/post/edit",$post->id)}}','type' => 'submit', 'class' => 'btn btn-danger glyphicon glyphicon-remove'])}}</td> --}}
     <td>{{-- <a class="{{Route('post.edit',$post->id)}}" class="btn btn-info btn-lg glyphicon glyphicon-pencil"></a> --}}<a href="{{Route('post.edit',$post->id)}}" class="btn btn-info"> <span class="glyphicon glyphicon-pencil"></span></a></td>  
     
     
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
@stop


