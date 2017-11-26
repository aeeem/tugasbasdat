@extends('layouts.homepage')

@section('content')
	{{-- {{dd($posts)}} --}}
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
    color:#ffffff ;
    background-color:#4d4d4d;
    border-color: #ddd;
}
</style>


<div class="row">
	<div class="col-md-3">
<div class="panel panel-default" style="size: 300px">
	<div class="panel-heading">
	<table style="align-content: center;" ><strong >ini table</strong> </table>
	</div>
	<div class="panel-body" style="max-width: : 10;">
		<h1>this is body</h1>
	</div>
</div>
</div>
{{-- post --}}
	<div class="col-md-6">
		
	<div class="panel panel-default article" style="size: 500px">

	<div class="panel-heading" >
		<h2>
			
{{$posts->title}}
		</h2>
		
	</div>
	<div class="panel-body panelarticle" style="max-width: : 10;">
		<tbody>
			
		<tr>
		<td>
			
	 <p class="ArticleBody" >
          {{$posts->body}}
        </p>
		</td>	
		</tr>
		</tbody>
	</div>
	</div>
	

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






@stop
