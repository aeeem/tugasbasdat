    @extends('layouts.admin')




 <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">

@section('content')


    <h1>Create Post</h1>

    <div class="row">
         {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostController@store'	]) !!}

           <div class="form-group">
                 {!! Form::label('title', 'Judul:') !!}
                 {!! Form::text('title', null, ['class'=>'form-control'])!!}
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


<script src="{{asset('js/select2.min.js')}}"></script>
<script type="text/javascript">
    $('.select2-multi').select2();



</script>

@stop