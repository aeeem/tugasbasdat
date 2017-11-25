    @extends('layouts.admin')
@section('content')
 <link href="{{asset('css/libs.css')}}" rel="stylesheet">



<div class="col-sm-6">

	{!! Form::open(['method' => 'post', 'action'=>'TagController@store']) !!}
			<div class="form-group">
	   {!!  Form::label('nama', 'Nama')!!}
	   {!!  Form::text('nama',null ,['class' => 'form-control'])!!}
	</div>
	<div class="form-group">
		{!! Form::submit('Buat Tags',['class' => 'btn btn-primary'])!!}
		</div>
		{!! Form::close() !!}



	
</div>



<div class="col-sm-4">
	@if ($tags)
<table class="table">
	<thead style="color: white;background-color: black">
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<td>Edit</td>
			<td>Hapus</td>				
		</tr>
	</thead>
	<tbody>
		
@foreach ($tags as $tag)
<tr>
	<td>{{$tag->id}}</td>
	<td>{{$tag->nama}}</td>
	<td><a href="{{Route('tags.edit',$tag->id)}}" class="btn-link2"> <span class="glyphicon glyphicon-edit"></span></a></td>
{!! Form::close() !!}

      {!! Form::open(['method' => 'delete','id' => 'hapus','onsubmit' => 'return ConfirmDelete()','class' => 'delete', 'action'=>['TagController@destroy',$tag->id]]) !!} 

     <td>{!!Form::button('<i class="glyphicon glyphicon-remove"></i>', ['onsubmit' => 'return ConfirmDelete()','id'=>'delete','data-file'=>'delete'.$tag->id,'class'=>'btn-link','type'=>'submit']) !!}</td> 

</tr>

@endforeach
		@endif
	</tbody>
</table>	
</div>
 
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
    </div>



 @include('include.error')
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libs.js')}}"></script>
<script src="{{asset('js/extras.js')}}"></script>

@stop