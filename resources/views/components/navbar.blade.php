<nav class="navbar navbar-expand-lg bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}"><img class="logo mx-4" src="\img\logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link active text-danger mx-4 fw-semibold" aria-current="page" href="{{route('home')}}"><i class="nav-hov fa-solid fa-house text-danger"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hov active text-danger mx-4 fw-semibold" aria-current="page" href="{{route('trailers.index')}}">MyTrailers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hov active text-danger mx-4 fw-semibold" aria-current="page" href="{{route ('trailers.create')}}">Aggiungi</a>
          </li>
        </ul>
      </div>
      <div class="d-flex justify-content-end align-items-end">
        <a href="{{route('register')}}" class="nav-link nav-hov active text-danger mx-2 fw-semibold">Register</a>
        <a href="{{route('login')}}" class="nav-link nav-hov active text-danger mx-2 fw-semibold">Login</a>
      </div>
    
  </div>
</nav>