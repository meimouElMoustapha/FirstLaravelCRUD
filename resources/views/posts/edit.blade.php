@extends('layouts.app')

@section('content')
<br>
<h3>Edit Post </h3>


<br>


{{-- {!! Form::open(['url' => 'update_post/{{ $post->id }}' ,'file'=>'true','method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
{{-- @csrf
@method('get') --}}

@if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif


<form action="{{ url('update_post/'.$post->id) }}" method="post" enctype='multipart/form-data'>
@csrf
@method("get")

<div class="form-group">
<input class="form-control" type="text" name="title" id="title" value="{{ $post->title }}"  placeholder="type text" />
<br>


<textarea class="form-control" type="text" name="content" id="content">{{ $post->content }}</textarea> 
<br>
<input type="file" class="img-thumbnail" name="image" id="image" value="{{ $post->image}}"/>

<br><br>
<button type="submit" class="btn btn-success">update</button>

<a href="/" class="btn btn-primary">go back</a>


</div>

</form>






      
{{-- {{  Form::label('text', 'Type text ');}}

{{  Form::text('title' ,null,array('class'=>'form-control'));}}

{{-- //Input::old('name'),, --}}

{{-- {{  Form::label('content', 'Type text ');}}

{{ Form::textarea('content',null,array('class'=>'form-control'));}}
<br>
{{  Form::label('file', null);}}

{{ Form::file('image',null,array('class'=>'form-control'));}}
<br><br>
{{ Form::Submit('Create Post',array('class'=>'btn btn-primary'));}} --}}










      {{-- {{ Form::close() }}  --}}



    





    @endsection 