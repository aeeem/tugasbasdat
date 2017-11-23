    @extends('layouts.admin')






@section('content')


    <h1>Edit Post</h1>

    <div class="row">
         {!! Form::model($post, ['method' => 'patch', 'action'=>['AdminPostController@update',$post->id],'files'=>true]) !!}

           <div class="form-group">
                 {!! Form::label('title', 'Judul:') !!}
                 {!! Form::text('title', null, ['class'=>'form-control'])!!}
           </div>

            <div class="form-group">
                {!! Form::label('kategory_id', 'Cateagory:') !!}
                {!! Form::select('kategory_id   ', [''=>'Pilih Kategori'], null, ['class'=>'form-control'])!!}
            </div>

{{-- 
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null,['class'=>'form-control'])!!}
             </div>

 --}}
            <div class="form-group">
                {!! Form::label('body', 'Isi:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
            </div>




             <div class="form-group">
              
                {{ Form::button('<i class="glyphicon glyphicon-save"></i>', ['type' => 'submit', 'class' => 'btn btn-warning btn-large'] )  }}
                {!!Form::button('<i class="glyphicon glyphicon-repeat"></i>', ['type'=>'reset','class'=>'btn btn-warning btn large']) !!}
             </div>

           {!! Form::close() !!}

    </div>


    <div class="row">


        @include('include.error')



    </div>




@stop