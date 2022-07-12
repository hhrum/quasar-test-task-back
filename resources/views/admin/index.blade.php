@extends('layouts.main')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Текст</th>
            <th scope="col">Картинка</th>
        </tr>
        </thead>
        <tbody>

        @foreach($boardsList as $board)
            <tr>
                <th scope="row">{{$board->id}}</th>
                <td>{{$board->text}}</td>
                <td><a href="#">Посмотреть</a></td>
            </tr>
        @endforeach
        </tbody>

    </table>

        <ul class="pagination">
            {{$boardsList->links()}}
        </ul>

@endsection
