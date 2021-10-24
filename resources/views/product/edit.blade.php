@extends('layouts.app')

@section('content')
    <br>
    <h1 align="center">insert Product </h1>
    <br><br>
    <form  action="/product/edit/{{ $product->id }}" method="post">
        {{ csrf_field() }}
        name : <input type="text" name="name" value="{{ $product->name }} ">
        <br><br>
        price : <input type="text" name="price" value="{{ $product->price }}">
        <br><br>
         <input type="submit" name="submit" value="edit">
    </form>
    @endsection












