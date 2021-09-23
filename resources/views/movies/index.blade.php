@extends('layout.app')

@section('content')

<section>
    <h1 class="text-center my-5 text-uppercase fw-light">Movies</h1>

    <a href="{{ route('movies.create') }}" class="text-decoration-none btn btn-success my-3 create">Create movie</a>

    <div class="d-flex justify-content-center align-items-center">
        <table class="table table-hover w-75">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">type</th>
                    <th scope="col">description</th>
                    <th scope="col">day</th>
                    <th scope="col">image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                <tr>
                    <th scope="row">{{ $movie->id }}</th>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->type }}</td>
                    <td class="w-25">{{ $movie->description }}</td>
                    <td>{{ $movie->day }}</td>
                    <td>{{ $movie->image }}</td>
                    <td>
                        <form action="{{ route('movies.destroy',$movie->id) }}" method="POST">
                            @csrf

                            <a class="btn btn-info" href="{{ route('movies.show',$movie->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('movies.edit',$movie->id) }}">Edit</a>

                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
