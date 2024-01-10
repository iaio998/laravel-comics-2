@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-black text-white position-relative py-5">
        <span>
            <a class="my-btn-2" href="{{route('comics.index')}}">
                go back
            </a>
        </span>
        <div class="container">
            ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input value="{{old($comic->title)}}" class="form-control my-1" type="text" id="title" name="title"
                        placeholder="{{$comic->title}}">
                    <input value="{{old($comic->description)}}" class="form-control my-1" type="text" id="description"
                        name="description" placeholder="{{$comic->description}}">
                    <input value="{{old($comic->thumb)}}" class="form-control my-1" type="text" id="thumb" name="thumb"
                        placeholder="{{$comic->thumb}}">
                    <input value="{{old($comic->price)}}" class="form-control my-1" type="text" id="price" name="price"
                        placeholder="{{$comic->price}}">
                    <div>
                        <label for="sale_date">Sale date:</label>
                        <input value="{{old($comic->sale_date)}}" class="form-control my-1" type="date" id="sale_date"
                            name="sale_date" placeholder="{{$comic->sale_date}}">
                    </div>
                    <input value="{{old($comic->series)}}" class="form-control my-1" type="text" id="series"
                        name="series" placeholder="{{$comic->series}}">
                    <input value="{{old($comic->type)}}" class="form-control my-1" type="text" id="type" name="type"
                        placeholder="{{$comic->type}}">
                    <button class="btn btn-primary" type="submit">Add</button>
                </form>
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