<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <script src="//unpkg.com/alpinejs" defer></script>

    <title>ODAS</title>
</head>
<x-message />

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/logo.png') }}" width="60" height="60"
                        class="d-inline-block align-text-top">

                </a>
                <div class="collapse navbar-collapse text-center" id="navbarNav">

                    @auth

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                {{-- <a class="nav-link active" aria-current="page" href="index.php">Submission</a> --}}
                                <a class="nav-link" href="/transactions">Transactions</a>
                            </li>
                            <li class="nav-item">
                                <!-- <a class="nav-link active" aria-current="page" href="index.php">Home</a> -->
                                <a class="nav-link" href="/status">Status</a>
                            </li>
                            <li class="nav-item">
                                {{-- <a class="nav-link active" aria-current="page" href="index.php">Submission</a> --}}
                                <a class="nav-link" href="/submission">Submit Documents</a>
                            </li>

                        </ul>
                    </div>

                    <div class="p-3 fw-bold text-uppercase">
                        {{ auth()->user()->name }}
                    </div>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-success me-2" name="logout">
                            LOGOUT
                        </button>
                    </form>
                @else
                    <div class="container-fluid">
                        <div class="d-flex justify-content-center">
                            <h1 class="text-center">Land Registration Authority</h1>
                        </div>
                    </div>

                @endauth
            </div>
        </nav>
    </header>
    {{-- VIEW OUTPUT --}}
    {{ $slot }}

    




</body>

</html>
