<div id="header">
    <div class="container py-2">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{Vite::asset('resources/img/dc-logo.png')}}"
                        alt="Logo"></a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                        <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
                    </div>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div id="jumbotron"></div>
</div>