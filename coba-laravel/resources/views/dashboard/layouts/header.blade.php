
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">My Blog</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-auto flex-fill rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <a class="text-white text-decoration-none px-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Welcome back, {{ auth()->user()->name }}
      </a>
      <a class="btn btn-secondary mx-2 link-light border-0 bg-dark article" href="/blog"><i class="bi bi-layout-text-window-reverse"></i>Blog</a>

    <div class="navbar-nav">

      <div class="nav-item">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 bg-dark border-0"> Logout  <span data-feather="log-out" class="align-text-bottom"></span></button>
        </form>
      </div>
    </div>
  </header>