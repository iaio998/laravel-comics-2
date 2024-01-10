@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-black text-white position-relative py-5">
        <div class="container">
            <span>
                <a class="my-btn" href="{{route('comics.create')}}">
                    Add new
                </a>
                <form action="{{route('comics.index')}}" method="GET" class="my-2">
                    <input class="my-input" type="text" name="search" placeholder="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </span>
            <div class="row">
                @foreach ($comics as $comic)
                @include('partials.card')
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-5">
                <button class="my-2">LOAD MORE</button>
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
@include('partials.modal_delete')
@endsection