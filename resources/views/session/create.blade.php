@extends('layout')

@section('content')

    <main>
        <div class="hero w-100 d-flex justify-content-center align-items-center position-relative">
        </div>

        <section class="mt-5 d-flex justify-content-center align-items-center flex-column">
			<h1 class="fs-1 text-uppercase fw-light mb-5">Log in</h1>

            <form method="POST" action="/login">
				@csrf

				<div class="mb-3">
					<label class="d-block mb-2 text-uppercase" for="email">Email</label>
					<input class="p-2 rounded" type="text" name="email" id="email" value="{{ old('email') }}" required>
				</div>

				@error('email')
					<p class="error mb-3">{{ $message }}</p>
				@enderror

				<div class="mb-3">
					<label class="d-block mb-2 text-uppercase" for="password">Password</label>
					<input class="p-2 rounded" type="password" name="password" id="password" required>
				</div>

				@error('password')
					<p class="error mb-3">{{ $message }}</p>
				@enderror

				<div>
					<button type="submit" class="text-uppercase py-2 px-4 mb-5 mt-3">Submit</button>
				</div>

            </form>
        </section> 
    </main>

@endsection