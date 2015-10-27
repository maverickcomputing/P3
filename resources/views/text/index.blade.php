@extends('layouts.master')

@section('title')
    Generate Random Lorem Ipsum Paragraphs
@stop

@section('head')

@stop





@section('content')

<a href="/">Home.....</a>
<br>
<h3>Generate Lorem Ipsum  Paragraphs</h3>
  <form method='POST' action='/text'>

    <input type='hidden' name='_token' value='{{ csrf_token() }}'>

    How many paragraphs do you want?
    <input type='text' placeholder=" Max: 99" name='number' value=''>

  <input type='submit' class="btn btn-primary" value'Generate'>
</form> <br><br>
@if (isset($paragraphs))

  @foreach($paragraphs as $paragraph)

   {{ $paragraph }} <br><hr>

  @endforeach

@endif

@stop
