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
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div>
                        <label for="title">Title:</label>
                        <input required class="form-control my-1" type="text" id="title" name="title"
                            placeholder="Title">
                    </div>
                    <div>
                        <label for="description">Description:</label>
                        <input required class="form-control my-1" type="text" id="description" name="description"
                            placeholder="Description">
                    </div>
                    <div>
                        <label for="thumb">Image</label>
                        <input required class="form-control my-1" type="text" id="thumb" name="thumb"
                            placeholder="Image">
                    </div>
                    <div>
                        <label for="price">Price:</label>
                        <input required class="form-control my-1" type="text" id="price" name="price"
                            placeholder="Price">
                    </div>
                    <div>
                        <label for="sale_date">Sale date:</label>
                        <input required class="form-control my-1" type="date" id="sale_date" name="sale_date"
                            placeholder="Sale date">
                    </div>
                    <div>
                        <label for="series">Series:</label>
                        <input required class="form-control my-1" type="text" id="series" name="series"
                            placeholder="Description short">
                    </div>
                    <div>
                        <label for="type">Type:</label>
                        <input required class="form-control my-1" type="text" id="type" name="type" placeholder="Type">
                    </div>
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