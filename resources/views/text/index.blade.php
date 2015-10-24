@extends('layouts.master')

@section('title')
    Generate Random Lorem Ipsum Paragraphs
@stop

@section('head')

@stop





@section('content')

<a href="/">Home.....</a>
<br>
<h1>Generate Lorem Ipsum  Paragraphs</h1>
  <form method='POST' action='/text'>

    <input type='hidden' name='_token' value='{{ csrf_token() }}'>

    How many paragraphs do you want?
    <input type='text' name='number' value=''>    (Max:99)<br>

  <input type='submit' class="btn btn-primary" value'Generate'>
</form> <br><br>
@if (isset($paragraphs))

  @foreach($paragraphs as $paragraph)

   {{ $paragraph }} <br><hr>

  @endforeach

@endif

@stop
