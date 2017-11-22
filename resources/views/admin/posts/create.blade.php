    @extends('layouts.admin')






@section('content')


    <h1>Create Post</h1>

    <div class="row">
         {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostController@store'	]) !!}

           <div class="form-group">
                 {!! Form::label('title', 'Judul:') !!}
                 {!! Form::text('title', null, ['class'=>'form-control'])!!}
           </div>

            <div class="form-group">
                {!! Form::label('kategori_id', 'Cateagory:') !!}
                {!! Form::select('kategori_id   ', [''=>'Choose Categories'], null, ['class'=>'form-control'])!!}
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




@stop