

@extends('layouts.main')
@section('content')
    <table class="table table-striped">

        <tbody>

        @foreach($boardsList as $board)
            <tr>
                <th scope="row">{{$board->id}}</th>
                <td>{{$board->text}}</td>
                <td><a href="{{route('admin.show', ['admin' => $board->id])}}">Посмотреть</a></td>
                <td><a href="{{route('admin.edit', ['admin' => $board->id])}}">Изменить</a></td>
                <td>
                    <form action="{{route('admin.destroy', ['admin' => $board->id])}}" method="post">
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
