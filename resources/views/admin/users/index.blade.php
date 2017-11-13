@extends('layouts.admin')
@section('content')
<h1>users</h1>
 <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Dibuat</th>
        <th>Status</th>
        <th>Diupdate</th>
         <th>Role</th>
      </tr>
    </thead>
    <tbody>
    	@if ($users)
@foreach ($users as $user){{--perulangan untuk setiap users [array] di masukan ke dalam user secara --}}
{{-- expr --}}


      <tr>
      <td>{{ $user ->id }}</td>
      <td><a href="{{Route('users.edit',$user->id)}}">{{ $user ->name }}</a></td>
      <td>{{ $user ->email }}</td>
	    <td>{{ $user ->created_at->diffForHumans()}}</td>
      <td>{{ $user ->sedang_aktif == 1 ? "Aktif" : "Tidak aktif"}}</td>
      <td>{{ $user ->updated_at->diffForHumans() }}</td>
      <td>{{$user ->role->name}}</td>
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