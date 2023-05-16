<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <link rel="stylesheet" href="css1.css">
    <title>ODAS</title>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            
            <a class="navbar-brand" href="index.php">
                <img src="{{asset('images/logo.png')}}" width="60" height="60" class="d-inline-block align-top" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                  <!-- <a class="nav-link active" aria-current="page" href="index.php">Home</a> -->
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="products.php">Products</a> -->
                    <a class="nav-link" href="products.php">Instructions</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cart</a> -->
                    <!-- <a class="nav-link active" aria-current="page" href="cart.php">Cart</a> -->
                    <a class="nav-link" href="cart.php">Requirements</a>
                </li>
              </ul>
            </div>
            <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              LOGIN
            </button>
              <form action="logout.inc.php" method="POST" >
                <button type="submit" class="btn btn-outline-success me-2" name="logout">LOGOUT</button>
              </form>
          </div>
        </nav>
      
      </header>
    
    {{-- VIEW OUTPUT --}}
    @yield('content')
</body>
</html>