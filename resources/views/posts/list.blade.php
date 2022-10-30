@extends('layouts.app')

@section('content')

<a href="create_post/" class="btn btn-success" style="float:right;">create post</a><br><br>
@if (session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@foreach ($test as $test)
<div class="row">
<div class="col-lg-6 mb-4">

<div class="card" style="width: 18rem;">
  {{-- <td><img src="{{ asset('uploads/appsetting/' . $t->image) }}" height="100px" width="100px"/></td> --}}
  <div class="card-body">
      <h5 class="card-title">{{ $test->id }} </h5>
      <p class="card-text">{{ $test->title }} </p>
 
      <a href="{{ url('show_post',[$test->id]) }}" class="btn btn-primary">More Info</a>
    </div>
</div>
</div>


       
        {{-- {{ url('projects/projectDetails', [$pro->id]) }} --}}
        
        {{-- {{ URL::to("post/show/{$t->id}") }} --}}
  
</div>

@endforeach

    @endsection 