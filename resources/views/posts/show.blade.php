@extends('layouts.app')

@section('content')


<div class="container">
<br><br>
<a href="/" class="btn btn-primary" >Go back</a><br><br>


<h4> {{$post->title}}</h4>

<p>{{$post->content}}</p>


<td><img src="{{ asset('uploads/appsetting/'. $post->image) }}" height="300px" width="300px"/></td>
<br><br>
<hr>
<a href="{{ url('edit_post', [$post->id]) }}" class="btn btn-primary">edit</a>
<a href="{{ url('destroy_post',[$post->id])}}" class="btn btn-danger">delete</a>





  {{-- <td><img src="{{ asset('uploads/appsetting/' . $t->image) }}" height="100px" width="100px"/></td> --}}
  


       
        {{-- {{ url('projects/projectDetails', [$pro->id]) }} --}}
        
        {{-- {{ URL::to("post/show/{$t->id}") }} --}}
  







      </div>

    


    @endsection 