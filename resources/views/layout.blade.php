<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    
    <title>ODAS</title>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <a class="navbar-brand" href="/listings">
                    <img src="{{ asset('images/logo.png') }}" width="60" height="60"
                        class="d-inline-block align-top" alt="">
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" aria-current="page" href="index.php">Home</a> -->
                            <a class="nav-link" href="/submission">Submission</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link active" aria-current="page" href="index.php">Home</a> -->
                            <a class="nav-link" href="index.php">Status</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Checklist
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="accounts_customer.php">Extrajudical Settlement</a></li>
                                <li><a class="dropdown-item" href="accounts_employee.php">Simple Sale</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    LOGIN
                </button>
                {{-- <form action="logout.inc.php" method="POST">
                    <button type="submit" class="btn btn-outline-success me-2" name="logout">LOGOUT</button>
                </form> --}}
            </div>
        </nav>

    </header>
    {{-- VIEW OUTPUT --}}
    @yield('content')
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
                        <a href="/register">Register Here</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
