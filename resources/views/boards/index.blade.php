@extends('layouts.main')
@section('content')
    <table class="table table-striped">

        <tbody>

        @foreach($boardsList as $board)
            <tr>
                <th scope="row">{{$board->id}}</th>
                <td>{{$board->text}}</td>
                <td><a href="{{route('admin.boards.show', ['board' => $board->id])}}">Посмотреть</a></td>
                <td><a href="{{route('admin.boards.edit', ['board' => $board->id])}}">Изменить</a></td>
                <td>
                    <form action="{{route('admin.boards.destroy', ['board' => $board->id])}}" method="post">
                        @method('delete')
                        @csrf
                        <input class="btn btn-dark" type="submit" value="Удалить">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

        <ul class="pagination">
            {{$boardsList->links()}}
        </ul>

@endsection
