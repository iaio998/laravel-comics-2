@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-black text-white py-5">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                <div class="col-2">
                    <div>
                        <a href="{{route('comics.show', $comic->id)}}">
                            <img class="my-img" src="{{$comic->thumb}}" alt="{{$comic->title}}" />
                            <div class="text-white text-center">
                                <h2 class="fs-5">{{$comic->title}}</h2>
                                <p>{{$comic->series}}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                @foreach ($hyper as $option)
                <div class="d-flex align-items-center col gap-2 m-0 px-2">
                    <div class="div-img">
                        <img src="{{$option['img']}}" alt="{{$option['text']}}" />
                    </div>
                    <a href="#"> {{ $option['text'] }}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="final-one">
        <div class="container">
            <div class="row">
                <div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection