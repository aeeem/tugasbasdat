@extends('layouts.homepage')

@section('content')
<style >
	
.article {
    border: 0;
}
.article {
    font-weight: : 900;
}
.panelarticle{
	background-color: #737373;
	color: #ffffff;
	font-weight: 400;
}
.panel-default > .panel-heading {
    color:#f2f2f2 ;
    background-color:#4d4d4d;
    border-color: #ddd;
}
</style>

<div class="row">
	<div class="col-md-3">
<div class="panel panel-default" style="size: 300px">
	<div class="panel-heading">
	<table style="align-content: center;" ><strong>ini table</strong> </table>
	</div>
	<div class="panel-body" style="max-width: : 10;">
		<h1>this is body</h1>
	</div>
</div>
</div>
{{-- post --}}
	<div class="col-md-6">
	@if($post)
	@foreach ( $post as $posts)
		{{-- expr --}}
	<div class="panel panel-default article" style="size: 500px">

	<div class="panel-heading" style="font-weight: 900">
		
{{$posts->title}}
		
	</div>
	<div class="panel-body panelarticle" style="max-width: : 10;">
		<tbody>
			
		<tr>
		<td>
			
	 <p class="ArticleBody">
            {{ str_limit(strip_tags($posts->body), 100) }}
            @if (strlen(strip_tags($posts->body)) > 100)
              ... <a href="{{ action('Welcome_Controller@show', $posts->id) }}" class="btn btn-info btn-sm">Read More</a>
            @endif
        </p>
		</td>	
		</tr>
		</tbody>
	</div>
	</div>
	@endforeach
	@endif

</div>
{{-- panel kanan --}}
	<div class="col-md-3 ">
<div class="panel panel-default" style="size: 500px">
	<div class="panel-heading">
	<table style="align-content: center;" ><strong>ini table</strong> </table>
	</div>
	<div class="panel-body" style="max-width: : 10;">
		<h1>this is body</h1>
	</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
	
$("#select1").change(function() {
  if ($(this).data('options') === undefined) {
    /*Taking an array of all options-2 and kind of embedding it on the select1*/
    $(this).data('options', $('#select2 option').clone());
  }
  
  var id = $(this).val();
  var options = $(this).data('options').filter('[value=' + id + ']');
  $('#selectdua').html(options);
});
</script>


@stop