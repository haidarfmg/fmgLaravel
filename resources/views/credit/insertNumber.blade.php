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
    <form  action="insertNumber" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
            <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile02">name :</label>
            <select class="custom-select form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="inputGroupSelect01">
                @foreach ($people as $people1i)
                    @IF ($people1i->id > 0 && $people1i->credit_id < 1)
                        <option value="{{ $people1i->id }}">{{ $people1i->name }}</option>
                    @endif
                @endforeach
              </select>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile02">credit number :</label>
            <input type="text" name="number" value="{{ old('number') }}" class="form-control {{ $errors->has('number') ? ' is-invalid' : '' }}" id="inputGroupFile02">
        </div>
        <div class="input-group mb-3">
            <input class="btn btn-primary" type="submit" name="submit" value="insert">
        </div>

    </form>
    @endsection












