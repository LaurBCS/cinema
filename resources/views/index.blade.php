@extends('layout')

@section('content')

	<main>
		<section id="top-movies">
			<div id="slide">
				<slide-show></slide-show>
			</div>
		</section>

		<section id="new-movies" class="new-movies mx-auto my-0">
			<h2 class="fs-4 fw-light position-relative text-uppercase">New in</h2>
			<div class="wrapper d-xl-flex justify-content-between">
				<div>
					<img src="images/airsoft.jpg" alt="A soldier with a gun in his hand">
					<h4 class="fs-6 fw-light mt-1 mb-3 text-xl-center">Lorem ipsum dolor.</h4>
				</div>

				<div>
					<img src="images/woman.jpg" alt="A woman sitting on a rock outside in the evening">
					<h4 class="fs-6 fw-light mt-1 mb-3 text-xl-center">Lorem ipsum dolor.</h4>
				</div>

				<div>
					<img src="images/witchs-house.jpg" alt="A witch flies on a broom at night">
					<h4 class="fs-6 fw-light mt-1 mb-3 text-xl-center">Lorem ipsum dolor.</h4>
				</div>
			</div>
		</section>

		<section id="movies" class="movies mx-auto my-0">
			<ul class="ps-0">
				<li class="fs-5 fw-light d-inline-block pe-3 mb-3">Mon</li>
				<li class="fs-5 fw-light d-inline-block pe-3 mb-3">Tue</li>
				<li class="fs-5 fw-light d-inline-block pe-3 mb-3">Wed</li>
				<li class="fs-5 fw-light d-inline-block pe-3 mb-3"><span>Thu</span></li>
				<li class="fs-5 fw-light d-inline-block pe-3 mb-3">Fri</li>
				<li class="fs-5 fw-light d-inline-block pe-3 mb-3">Sat</li>
				<li class="fs-5 fw-light d-inline-block pe-3 mb-3">Sun</li>
			</ul>
			<div class="wrapper d-flex flex-column">
				<div class="special card d-lg-block border-0 border-bottom">
					<img src="images/woman.jpg" alt="A woman sitting on a rock outside in the evening" class="float-start">
					<span class="type fs-6 fw-light text-uppercase mt-3">Thriller, Horror</span>
					<h3 class="fs-5">Lorem ipsum dolor</h3>
					<p class="fs-6 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque non nisi
						porttitor pharetra. In turpis nibh, laoreet id consequat ac, ornare in tortor. Pellentesque eget
						arcu ut sapien pretium.</p>
					<div class="wrapper-time d-flex flex-wrap align-items-center justify-content-start">
						<span class="view fs-6 text-uppercase me-3"><i class="far fa-clock"></i>Viewing times</span>
						<span class="time fs-6 me-3">11:00 am</span>
						<span class="time fs-6 me-3">1:30 pm</span>
						<span class="time fs-6 me-3">5:15 pm</span>
						<span class="time fs-6">10:00 pm</span>
						<span class="duration fs-6"> 130 Mins</span>
					</div>
				</div>

				<div class="special card d-lg-block border-0 border-bottom">
					<img src="images/witchs-house.jpg" alt="A witch flies on a broom at night" class="float-start">
					<span class="type fs-6 fw-light text-uppercase mt-3">Thriller, Horror</span>
					<h3 class="fs-5">Lorem ipsum dolor</h3>
					<p class="fs-6 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque non nisi
						porttitor pharetra. In turpis nibh, laoreet id consequat ac, ornare in tortor. Pellentesque eget
						arcu ut sapien pretium.</p>
					<div class="wrapper-time d-flex flex-wrap align-items-center justify-content-start">
						<span class="view fs-6 text-uppercase me-3"><i class="far fa-clock"></i>Viewing times</span>
						<span class="time fs-6 me-3">11:00 am</span>
						<span class="time fs-6 me-3">2:00 pm</span>
						<span class="time fs-6 me-3">5:15 pm</span>
						<span class="time fs-6">10:30 pm</span>
						<span class="duration fs-6"> 105 Mins</span>
					</div>
				</div>

				<div class="card d-lg-block border-0">
					<img src="images/airsoft.jpg" alt="A soldier with a gun in his hand" class="float-start">
					<span class="type fs-6 fw-light text-uppercase mt-3">Thriller, Horror</span>
					<h3 class="fs-5">Lorem ipsum dolor</h3>
					<p class="fs-6 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque non nisi
						porttitor pharetra. In turpis nibh, laoreet id consequat ac, ornare in tortor. Pellentesque eget
						arcu ut sapien pretium.</p>
					<div class="wrapper-time d-flex flex-wrap align-items-center justify-content-start">
						<span class="view fs-6 text-uppercase me-3"><i class="far fa-clock"></i>Viewing times</span>
						<span class="time fs-6 me-3">11:00 am</span>
						<span class="time fs-6 me-3">2:00 pm</span>
						<span class="time fs-6 me-3">5:15 pm</span>
						<span class="time fs-6">10:30 pm</span>
						<span class="duration fs-6"> 110 Mins</span>
					</div>
				</div>
			</div>
		</section>

		<section class="most-viewed-movies mx-auto my-0" id="most-viewed">
			<h2 class="fs-4 fw-light text-uppercase position-relative">Most Viewed</h2>
			<div id="api" class="most-viewed">
				<vue-api></vue-api>
			</div>
		</section>
	</main>
	
@endsection
