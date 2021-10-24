


@extends('layouts.app')

@section('content')
    <div class="text-center my-0">
        <h1>display  credits</h1>
        <table class="table table-striped" width="100%">
            <tbody>
                <?php
                    // $productitem =$product;
                    ?>
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">name</th>
                          <th scope="col">number</th>
                          <th scope="col">edit</th>
                          <th scope="col">delete</th>
                        </tr>
                      </thead>
                @foreach ($people as $people1i)
                    @IF ($people1i->id > 0)
                    <tr>
                        <td> {{ $people1i->id ;}}</td>
                        <td>{{$people1i->name; }}</td>
                        <td>{{empty($people1i->credit['number']) ? 'N/A' : $people1i->credit['number'];}}</td>
                        <td><a href="credit/edit/{{ $people1i->id }}">edit</a></td>
                        <td><a href="credit/delete/{{ $people1i->id }}">delete</a></td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
