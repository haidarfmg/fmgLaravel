@extends('layouts.app')

@section('content')

        <h1 align="center">hello world</h1>
        <table class="table table-striped" width="100%">
            <tbody>
                <?php
                    // $productitem =$product;
                    ?>
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">name</th>
                          <th scope="col">price</th>
                          <th scope="col">edit</th>
                          <th scope="col">delete</th>
                        </tr>
                      </thead>
                @foreach ($product as $productitem)
                    @IF ($productitem->id > 0)
                    <tr>
                        <td> {{ $productitem->id }}</td>
                        <td>{{$productitem->name }}</td>
                        <td>{{$productitem->price }}</td>
                        <td><a href="product/edit/{{ $productitem->id }}">edit</a></td>
                        <td><a href="product/delete/{{ $productitem->id }}">delete</a></td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
@endsection














