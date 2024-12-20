<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

    <title>ODAS</title>
</head>
<x-message />

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <a class="navbar-brand" href="/assessor">
                    <img src="{{ asset('images/logo.png') }}" width="60" height="60"
                        class="d-inline-block align-top" alt="">
                </a>

                @auth
                    <div class="p-3 fw-bold text-uppercase">
                        {{ auth()->user()->name }}
                    </div>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-success me-2" name="logout">
                            LOGOUT
                        </button>
                    </form>
                @endauth
        </nav>

    </header>
    {{-- VIEW OUTPUT --}}
    {{ $slot }}
    <form method="POST">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">LOGIN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input maxlength="16" type="text" name="username" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                required>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="login" name="login">Login</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        No Account Yet?
                        <a href="/employee_register">Register Here</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
