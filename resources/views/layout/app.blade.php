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
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://kit.fontawesome.com/845b90585a.js" crossorigin="anonymous"></script>
    <script src="index.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body class="lh-sm font-Roboto">

    <header class="d-flex justify-content-between align-items-center bg-black opacity-90% py-3">
        <p class="fs-4 text-white">Dashboard</p>
        <nav class="d-flex justify-content-around align-items-center">
            @if (auth()->check())
            <ul>
                <li>
                    <form action="/logout" method="POST">
                        @csrf

                        <button
                            class="fs-6 fw-light text-white text-uppercase text-decoration-none d-none d-lg-block px-4 py-2 bg-transparent dashboard">Log
                            out</button>
                    </form>
                </li>
            </ul>
            @endif
        </nav>
    </header>

    @yield('content')

</body>

</html>
