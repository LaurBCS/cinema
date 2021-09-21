<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Bocse Laurentiu">
    <meta name="description" content="At this cinema you can see the latest movies">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Cinema</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="images/icon-film.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/845b90585a.js" crossorigin="anonymous"></script>
    <script src="index.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body class="lh-sm font-Roboto">

    <header class="d-flex justify-content-between align-items-center bg-black opacity-90% position-fixed w-100">
		<a href="/" title="Cinema"><img src="images/logo.png" alt="A video tape with the company name"></a>
		<nav class="d-flex justify-content-around align-items-center">
			<ul>
				<li>
					<a href="/" title="Home"
						class="fs-6 fw-light text-white text-uppercase text-decoration-none me-2 d-none d-lg-block">Home</a>
				</li>
			</ul>
			<ul>
				<li>
					<a href="/about" title="About us"
						class="fs-6 fw-light text-white text-uppercase text-decoration-none me-2 d-none d-lg-block">About
						us</a>
				</li>
			</ul>
			<ul>
				<li>
					<a href="/contact" title="Contact us"
						class="fs-6 fw-light text-white text-uppercase text-decoration-none d-none d-lg-block">Contact
						us</a>
				</li>
			</ul>
			@if (!auth()->check())
				<ul>
					<li>
					
						<a href="/register" title="Register"
							class="fs-6 fw-light text-white text-uppercase text-decoration-none d-none d-lg-block register">Register</a>
					</li>
				</ul>
				<ul>
					<li>
						<a href="/login" title="Log in"
							class="fs-6 fw-light text-white text-uppercase text-decoration-none d-none d-lg-block px-4 py-2 login">Log in</a>	
					</li>
				</ul>
			@else
				<ul>
					<li>
						<form method="POST" action="/logout" >
							@csrf
							
							<button class="fs-6 fw-light text-white text-uppercase text-decoration-none d-none d-lg-block px-4 py-2 login">Log out</button>
						</form>
				    </li>
				</ul>
			@endif
		</nav>
	</header>

    @yield('content')

    <footer class="d-flex align-items-start justify-content-between bg-black">
        <div class="d-flex flex-column justify-content-center h-100">
            <h4 class="fs-6 fw-light text-uppercase">Section</h4>
            <a href="/#top-movies" title="Top Movies" class="fs-6 fw-light text-white text-decoration-none">Top
                Movies</a>
            <a href="/#new-movies" title="New Movies" class="fs-6 fw-light text-white text-decoration-none">New
                Movies</a>
            <a href="/#movies" title="Movies" class="fs-6 fw-light text-white text-decoration-none">Movies</a>
            <a href="/#most-viewed" title="Movies" class="fs-6 fw-light text-white text-decoration-none">Most
                Viewed</a>
        </div>

        <div class="d-flex flex-column justify-content-center h-100">
            <h4 class="fs-6 fw-light text-uppercase">Social Links</h4>
            <a href="#" title="Facebook" class="fs-6 fw-light text-white text-decoration-none"><i
                    class="fab fa-facebook-f footer"></i>Facebook</a>
            <a href="#" title="Instagram" class="fs-6 fw-light text-white text-decoration-none"><i
                    class="fab fa-instagram footer"></i>Instagram</a>
            <a href="#" title="Twitter" class="fs-6 fw-light text-white text-decoration-none"><i
                    class="fab fa-twitter footer"></i>Twitter</a>
        </div>

        <div class="d-flex flex-column justify-content-center h-100">
            <h4 class="fs-6 fw-light text-uppercase">Newsletter</h4>
            <form>
                <label for="email" class="fs-6 fw-light text-white">E-mail</label>
                <input type="text" id="email" name="email" class="fs-6 fw-light">
                <input type="submit" value="Subscribe" class="fs-6 fw-light d-block">
            </form>
        </div>
    </footer>
    
</body>

</html>
