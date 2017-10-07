@extends('master')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	
                @include('videos.form_errors')
            
                {!! Form::model($video, ['method'=>'PATCH', 'action'=>['VideosController@update', $video->id], 'class'=>'form-horizontal']) !!}
            		
                    @include('videos.form', ['buttonText'=>'Zapisz zmiany'])

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@stop