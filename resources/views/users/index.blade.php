@extends('layouts.master')

@section('title')
    User Generator
@stop

@section('head')

@stop





@section('content')
<a href="/">Home.....</a>
<br>
<h1>Generate Random Users
  <form method='POST' action='/users'>

      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
<br><br>
    How many Users do you want?

    <input type='text' name='number' value="<?php if(isset($_POST['number'])) echo $_POST['number']; ?>"</input>    (Max:99)<br>
  <br>

    <input type='submit' value'Generate'>

  </form> <br><br>


@if(isset($randomStuff))

@for ($i=0; $i < count($randomStuff); $i++)

    Name :    {{ $randomStuff[$i] }} <br><br>
    Address :   {{ $RandomAdd[$i] }} <br><br>
    Profile :   {{ $RandomPro[$i]}}<br><hr>




@endfor




@endif

  @stop
