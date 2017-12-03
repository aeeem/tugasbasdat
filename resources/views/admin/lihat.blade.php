@extends('layouts.admin')

@section('content')

@if($laporan)


<h1>{{$laporan->nama_laporan}} #id {{$laporan->id}}</h1>
<div class="col-sm-9">
	
	<p>{{$laporan->deskripsi}}</p>
</div>


@endif
@stop