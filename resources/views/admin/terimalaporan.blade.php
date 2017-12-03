@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="col-md-12">
			


	@if ($laporan)
<table class="table">
	<thead style="color: white;background-color: black">
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<td>Jenis Kejadian</td>
			<td>Hapus</td>
			<td>Status</td>				
			<td>Lihat</td>	
		</tr>
	</thead>
	<tbody>
		
@foreach ($laporan as $laporans)
<tr>
	<td>{{$laporans->id}}</td>
	<td>{{$laporans->nama_laporan}}</td>
	<td>{{$laporans->kejadian->nama_kejadian}}
	</td>

      {!! Form::open(['method' => 'delete','id' => 'hapus','onsubmit' => 'return ConfirmDelete()','class' => 'delete', 'action'=>['AdminTerimaLaporan@destroy',$laporans->id]]) !!} 

     <td>{!!Form::button('<i class="glyphicon glyphicon-remove"></i>', ['onsubmit' => 'return ConfirmDelete()','id'=>'delete','data-file'=>'delete'.$laporans->id,'class'=>'btn-link','type'=>'submit']) !!}</td> 

{!! Form::close() !!}


@if ($laporans->diterima == 'belum')
 	
 {!! Form::model($laporans, ['method' => 'patch', 'action'=>['AdminTerimaLaporan@update',$laporans->id],'files'=>true]) !!}
   <td>{!!Form::button('terima', ['value'=>'sudah','id'=>'diterima','name'=>'diterima','data-file'=>'update'.$laporans->id,'class'=>'btn btn-success','type'=>'submit']) !!}</td>

{!! Form::close() !!}
 @else

 {!! Form::model($laporans, ['method' => 'patch', 'action'=>['AdminTerimaLaporan@update',$laporans->id],'files'=>true]) !!}
 <td>{!!Form::button('batalkan', ['value'=>'belum','id'=>'diterima','name'=>'diterima','data-file'=>'update'.$laporans->id,'class'=>'btn btn-danger','type'=>'submit']) !!}</td>

{!! Form::close() !!}
 @endif
    

</tr>

@endforeach
		@endif
	</tbody>
</table>	

 
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



		</div>




	</div>


@stop

