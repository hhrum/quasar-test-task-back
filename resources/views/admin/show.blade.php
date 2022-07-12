@extends('layouts.main')
@section('content')
    <div>
        <p class="text-center">{{$card->text}}</p>
        @if($card->image)
            <img src="{{Storage::url($card->image)}}" class="rounded mx-auto d-block" style="height: 400px">
        @endif
    </div>
@endsection



