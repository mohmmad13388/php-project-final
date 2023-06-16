<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



</head>
<body>








<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="{{ url('/') }}">Food Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">

      <li class="nav-item container">
        <a class="nav-link" href="{{ url('/food') }}">Meals</a>
      </li>

      <li class="nav-item container">
        <a class="nav-link" href="{{ url('/drink') }}">Drinks</a>
      </li>
    </ul>

    @if (Route::has('login'))

                    @auth
                    <a href="{{ url('/home') }}" class="nav-item mx-2"> <button type="button" class="btn btn-dark"> Home </button> </a>
                    @else
                        <a href="{{ route('login') }}" class="nav-item mx-2">  <button type="button" class="btn btn-dark"> Log in </button> </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-item mx-2"> <button type="button" class="btn btn-dark"> Register </button> </a>
                        @endif
                    @endauth

       @endif

  </div>
</nav>


<div id="background-img"></div>


   <br>

<div class="container">

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="../img/slice-crispy-pizza-with-meat-cheese.jpg" class="card-img-top" alt="..." height="300px">
            <div class="card-body">
              <h5 class="card-title">pizza</h5>
              <p class="card-text">very good food and cheap.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../img/shaorma.jpg" class="card-img-top" alt="..." height="300px">
            <div class="card-body">
              <h5 class="card-title">pizaqy</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../img/fizzy-cola-drink-macro-shot.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">pipsi</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../img/fizzy-cola-drink-macro-shot.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">cola</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>


</div>


<hr>

</body>
</html>
