@extends('layouts.app')

@section('content')


<div class="container">
    <br><br><br>
    <h3>Dalate post page</h3>
  
    
      <div class="alert alert-success">
        <p>the post title <b>{{ $posttest->title }}</b> is deleted please do not 
          refresh the page and go back</p>
      </div>
  
  
          <a href="/" class="btn btn-primary">back</a>

          @endsection 