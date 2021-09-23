@extends('layout.app')

@section('content')

<section class="mt-5 d-flex justify-content-center align-items-center flex-column">

    <h1 class="text-uppercase mb-5 fw-light">Edit Movie</h1>

    <form action="{{ route('movies.update', $movie->id) }}" method="post" enctype="multipart/form-data">
            
        @csrf
		@method('PATCH')  
		
        <div class="mb-3">
			<label class="d-block mb-2 text-uppercase" for="title">Title</label>
			<input class="p-2 rounded" type="text" name="title" id="title" value="{{ $movie->title }}" required>
		</div>

        <div class="mb-3">
			<label class="d-block mb-2 text-uppercase" for="type">Type</label>
			<input class="p-2 rounded" type="text" name="type" id="type" value="{{ $movie->type }}" required>
		</div>

        <div class="mb-3">
            <label class="d-block mb-2 text-uppercase" for="description">Description</label>
            <textarea class="form-control" name="description" id="description" required>{{ $movie->description }}</textarea>
        </div>

        <div class="mb-3">
			<label class="d-block mb-2 text-uppercase" for="day">Day</label>
			<input class="p-2 rounded" type="text" name="day" id="day" value="{{ $movie->day }}" required>
		</div>

        <div class="mb-3">
			<label class="d-block mb-2 text-uppercase" for="image">Image</label>
			<input class="p-2 rounded" type="text" name="image" id="image" value="{{ $movie->image }}" required>
		</div>

        <div>
			<button type="submit" class="text-uppercase py-2 px-4 mb-5 mt-3">Submit</button>
		</div>
   
    </form>

</section>

<a class="btn btn-dark d-inline-block mt-3 mb-5 ms-5" href="{{ route('movies.index') }}"> Back</a>

@endsection