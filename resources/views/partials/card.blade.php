<div class="col-2">
    <div>
        <a href="{{route('comics.show', $comic->id)}}">
            <img class="my-img" src="{{$comic->thumb}}" alt="{{$comic->title}}" />
            <div class="text-white text-center">
                <h2 class="fs-6 ">{{$comic->title}}</h2>
                <p class="fst-italic">{{$comic->series}}</p>
            </div>
        </a>
    </div>
    <form class="text-center" action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="my-btn-dlt" data-item-title="{{$comic->title}}" type="submit"> Delete</button>
    </form>
</div>