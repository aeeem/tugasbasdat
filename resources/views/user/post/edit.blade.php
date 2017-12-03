    @extends('layouts.homepage')


<style >
    .form-control{
       font-weight: bolder;
    }
     body {
  font-weight: 1000;
}
</style>

 <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
@section('content')
<div class=" col-md-3-offsset col-md-9  row" style="margin-left: 160">

    <h1>Edit Post</h1>

    <div class="row">
         {!! Form::model($post, ['method' => 'patch', 'action'=>['UserPostController@update',$post->id],'files'=>true]) !!}

           <div class="form-group">
                 {!! Form::label('title', 'Judul:') !!}
                 {!! Form::text('title', null, ['class'=>'form-control'])!!}
           </div>
       <div class="form-group">
                
                    <div class="form-group">
                       {{ Form::label('tags', 'Tags')}}
                       {{  Form::select('tags[]', $tags  ,null ,['class' => 'form-control select2-multi',"multiple"=>"multiple"])}}
                    </div>
        
                </select>
                
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
              
                {{ Form::button('<i class="glyphicon glyphicon-floppy-disk"></i>', ['type' => 'submit', 'class' => 'btn btn-warning btn-large'] )  }}
                {!!Form::button('<i class="glyphicon glyphicon-repeat"></i>', ['type'=>'reset','class'=>'btn btn-warning btn large']) !!}
             </div>

           {!! Form::close() !!}

    </div>


    <div class="row">
</div>
</div>
        @include('include.error')


    <script src="{{asset('js/select2.min.js')}}"></script>
    
           <script type="text/javascript">
    $('.select2-multi').select2();
    $('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds())!!}).trigger('change');
</script>

@stop