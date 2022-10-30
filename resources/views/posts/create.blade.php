@extends('layouts.app')

@section('content')
<br>
<h3>Create Post </h3>




@if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

    



{!! Form::open(['url' => 'store_post/{{ $post->id }}' ,'file'=>'true','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
@csrf
@method('get')


{{  Form::label('text', 'Type text ');}}

{{  Form::text('title' ,null,array('class'=>'form-control','required'));}}

{{-- //Input::old('name'),, --}}

{{  Form::label('content', 'Type text ');}}

{{ Form::textarea('content',null,array('class'=>'form-control','required'));}}
<br>
{{  Form::label('file', null);}}

{{ Form::file('image',null,array('class'=>'form-control','required'));}}
<br><br>
{{ Form::Submit('Create Post',array('class'=>'btn btn-primary'),array('style'=>'float:right'));}}

<a href="/" class="btn btn-success">go back</a>









      {{ Form::close() }}


    



    @endsection 