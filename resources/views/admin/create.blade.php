@extends('layouts.main')
@section('content')
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Текст карточки</label>
        <textarea class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" style="height: 200px"> </textarea>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Пример ввода файла по умолчанию</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary mb-3">Добавить</button>
    </div>
@endsection



