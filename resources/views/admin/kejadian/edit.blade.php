    @extends('layouts.admin')
@section('content')
 <link href="{{asset('css/libs.css')}}" rel="stylesheet">



<div class="col-sm-6">

{!! Form::model($kejadianss, ['method' => 'patch', 'action'=>['AdminKejadian@update',$kejadianss->id]]) !!}

			<div class="form-group">
	   {!!  Form::label('nama_kejadian', 'Nama Kejadian')!!}
	   {!!  Form::text('nama_kejadian',null ,['class' => 'form-control'])!!}
	</div>
	<div class="form-group">
		{!! Form::submit('Buat Jenis Kejadian',['class' => 'btn btn-primary'])!!}
		</div>
		{!! Form::close() !!}



	
</div>



<div class="col-sm-4">
	@if ($kejadians)
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
		
@foreach ($kejadians as $kejadian)
<tr>
	<td>{{$kejadian->id}}</td>
	<td>{{$kejadian->nama_kejadian}}</td>
	<td><a href="{{Route('kejadian.edit',$kejadian->id)}}" class="btn-link2"> <span class="glyphicon glyphicon-edit"></span></a></td>
{!! Form::close() !!}

      {!! Form::open(['method' => 'delete','id' => 'hapus','onsubmit' => 'return ConfirmDelete()','class' => 'delete', 'action'=>['AdminKejadian@destroy',$kejadian->id]]) !!} 

     <td>{!!Form::button('<i class="glyphicon glyphicon-remove"></i>', ['onsubmit' => 'return ConfirmDelete()','id'=>'delete','data-file'=>'delete'.$kejadian->id,'class'=>'btn-link','type'=>'submit']) !!}</td> 

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