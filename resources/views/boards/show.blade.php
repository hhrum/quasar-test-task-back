@extends('layouts.main')
@section('content')
    <div>
        <p class="text-center">{{$board->text}}</p>
        @if($board->image)
            <img src="{{Storage::url($board->image)}}" class="rounded mx-auto d-block" style="height: 400px">
        @endif
    </div>
@endsection
