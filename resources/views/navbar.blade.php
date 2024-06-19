<style>
    .navbar-link {
        color: white;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .navbar-link:hover {
        color: black;
    }

    .navbar-button {
        color: white;
        text-decoration: none;
        border: none;
        background: none;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .navbar-button:hover {
        color: white;
    }
</style>

<div class="bg-orange text-white py-2">
    <div class="d-flex justify-content-between mx-5">
        <h3>
            <img src="img/pethub-logo-orange.png" alt="" class="mr-2" style="width: 32px; height: 32px;">
            Pethub Adoption
        </h3>
        <div class="d-flex justify-content-start align-items-center">
            <h5 class="mx-2">
                <a href="/" class="navbar-link">Home</a>
            </h5>
            <h5 class="mx-2">
                <a href="/animals" class="navbar-link">Animals</a>
            </h5>
            <h5 class="mx-2">
                <a href="/center" class="navbar-link">Centers</a>
            </h5>
            @auth
            <h5 class="mx-2">
                <a href="{{ route('profile') }}" class="navbar-link">Profile</a>
            </h5>
            <h4 class="mx-2">
                <i class="bi bi-person-circle" style="color: white;"></i>
            </h4>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="navbar-button">Logout</button>
            </form>
            @else
            <h5 class="mx-2">
                <a href="/login" class="navbar-link"><i class="bi bi-box-arrow-in-right"></i> Log in</a>
            </h5>
            @endauth
            <div class="d-flex justify-content-start align-items-center">
                <form action="{{ route('search') }}" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="query" placeholder="Search">
                        <button class="btn btn-light" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- 
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}