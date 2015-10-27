@extends('layouts.master')

@section('title')
    User Generator
@stop

@section('head')

@stop





@section('content')
<a href="/">Home.....</a>
<br>
<h3>Generate Random Users </h3>
  <form method='POST' class="form-inline" action='/users'>

      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
<br>
    How many Users do you want?

    <input type='text' placeholder=" Max: 99" name='number' value="<?php if(isset($_POST['number'])) echo $_POST['number']; ?>"</input>


    <input type='submit' class="btn btn-primary" value'Generate'>

  </form> <br><br>


@if(isset($randomStuff))

@for ($i=0; $i < count($randomStuff); $i++)

    Name :    {{ $randomStuff[$i] }} <br><br>
    Address :  {{ $RandomAdd[$i] }} <br><br>
    Profile :   <em> {{ $RandomPro[$i]}} </em><br><hr>




@endfor




@endif

  @stop
