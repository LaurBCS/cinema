@extends('layout.layout')

@section('content')

    <main>
        <div class="hero w-100 d-flex justify-content-center align-items-center position-relative">
            <h1 class="fs-1 text-uppercase fw-light text-white">About Us</h1>
        </div>

        <section class="about mx-auto my-0">
            <h2 class="text-uppercase position-relative fs-4 fw-light">Cinema</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas maximus cursus nisl sit
                    amet bibendum. Aenean orci diam, tempus sit amet nunc et, laoreet pharetra nulla. Interdum et malesuada
                    fames ac ante ipsum primis in faucibus. Nulla volutpat nisl nunc, nec scelerisque dolor commodo et. Sed
                    eu mi lobortis, aliquet magna nec, accumsan lorem. Mauris vitae nisl aliquam, mattis neque vel, posuere
                    diam. Pellentesque accumsan nulla ut turpis tempor consequat. Pellentesque sit amet luctus ex, eget
                    auctor tortor.</p>
                <img src="images/team.svg" alt="">
            </div>
        </section>
    </main>
    
@endsection
