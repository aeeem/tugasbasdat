@extends('layouts.homepage')


@section('content')

   {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> --}}


    <link href="{{asset('css/libs.css')}}" rel="stylesheet">
    <link href="{{asset('css/extras.css')}}" rel="stylesheet">

<style >
    .form-control{
        font-weight: bold;
    }
</style>

 
    <div class="row col-md-9" style="margin-left: 160px">
    	 <h1>Create Post</h1>
         {!! Form::open(['method'=>'POST', 'action'=> 'UserPostController@store'	]) !!}

           <div class="form-group">
           
                 {!! Form::label('title', 'Judul:') !!}
                <strong>{!! Form::text('title', null, ['class'=>'form-control textboxman'])!!}</strong> 
    
       </div>

            <div class="form-group">
                {!! Form::label('tags[]', 'Tags:') !!}
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    
                @foreach ($tag as $tags)
                    <option value="{{$tags->id}}">{{$tags->nama}}</option>
                @endforeach
                </select>
                
            </div>


           {{--  <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null,['class'=>'form-control'])!!}
             </div>
 --}}

            <div class="form-group">
                {!! Form::label('body', 'Isi:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
            </div>




             <div class="form-group">
                {!! Form::submit('Buat Post', ['class'=>'btn btn-primary']) !!}
             </div>

           {!! Form::close() !!}

    </div>


    <div class="row">


        @include('include.error')



    </div>

<script type="text/javascript">
    $('.select2-multi').select2();

</script>


@stop