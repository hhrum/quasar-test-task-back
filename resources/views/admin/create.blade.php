@extends('layouts.main')
@section('content')

    @if($errors->any())
        <div class="mb-3">
            @foreach($errors->all() as $error)
                <span class="text-danger">
                    {{$error}}
                </span>
            @endforeach
        </div>
    @endif

    <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="text" class="form-label">Текст карточки</label>
            <textarea class="form-control" name="text" placeholder=""
                      style="height: 200px"> </textarea>
        </div>
        <div class="mb-3">
            <input class="form-control" type="file" name="image">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary mb-3">
        </div>
    </form>
@endsection



