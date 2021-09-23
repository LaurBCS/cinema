@extends('layout.app')

@section('content')

<section>
    <h1 class="text-center text-uppercase my-5 fw-light">Show Movie</h1>

    <div class="wrapper d-flex justify-content-center align-items-center mx-5">
        <div class="d-lg-block w-75">
            <span class="type fs-6 mt-3">Type: {{ $movie->type }}</span>
            <h3 class="fs-4">Title: {{ $movie->title }}</h3>
            <p class="fs-6 mb-3">Description: {{ $movie->description }}</p>
            <div class=>
                <span class="view fs-6 me-3"><i class="far fa-clock"></i>Viewing day: {{ $movie->day }}</span>
            </div>
        </div>
    </div>

</section>

<a class="btn btn-dark d-inline-block mt-3 mb-5 ms-5" href="{{ route('movies.index') }}"> Back</a>

@endsection
