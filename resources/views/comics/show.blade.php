@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-black text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>

                        <img class="my-img" src="{{$comic->thumb}}" alt="{{$comic->title}}" />
                        <div>
                            <p>{{$comic->series}}</p>
                            <p>{{$comic->description}}</p>
                            <p>GENRE: {{$comic->type}} | NAME: {{$comic->title}} </p>
                            <p>PRICE: {{$comic->price}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary text-white py-5">
        <div class="container">
            <div class="row">
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