<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top footer">
    <p class="col-md-4 mb-0 text-danger">© 2023 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img class="logo mx-3" src="\img\logo.png" alt="">
    </a>

    <ul class="nav foo-hov col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 lead text-danger foo-hov">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 lead text-danger foo-hov">Andrea Palmieri</a></li>
      @auth
      <li class="nav-item"><a href="{{route('profile')}}" class="nav-link px-2 lead text-danger foo-hov">Profile</a></li>
      @endauth
      @guest
      <li class="nav-item"><a href="{{route('login')}}" class="nav-link px-2 lead text-danger foo-hov">Profile</a></li>
      @endguest
      <li class="nav-item"><a href="#" class="nav-link px-2 lead text-danger foo-hov">About</a></li>
    </ul>
  </footer>