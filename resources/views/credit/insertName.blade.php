@extends('layouts.app')

@section('content')
    <br>
    <h1 align="center">insert Product </h1>
    <br><br>
    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form  action="insertName" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
            <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile02">name :</label>
            <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" id="inputGroupFile02">
        </div>

        <div class="input-group mb-3">
            <input class="btn btn-primary" type="submit" name="submit" value="insert">
        </div>

    </form>
    @endsection












