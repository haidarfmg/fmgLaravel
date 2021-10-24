@extends('layouts.app')

@section('content')
    <br>
    <h1 align="center">insert Product </h1>
    <br><br>
    <form  action="/credit/edit/{{ $people->id }}" method="post">
        {{ csrf_field() }}
        name : <input type="text" name="name" value="{{ $people->name }} ">
        <br><br>
        number : <input type="text" name="number" value="{{ $people->credit->number }}">
        <br><br>
         <input type="submit" name="submit" value="edit">
    </form>
    @endsection












