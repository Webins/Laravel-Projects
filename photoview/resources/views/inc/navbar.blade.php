<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark text-white p-4">
      <h1><a class="navbar-brand" href="/">Photo View</a></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item {{Request::is('/') ? 'active': ''}}">
            <a class="nav-link" href="/">Home</a>
          </li>
        <li class="nav-item {{Request::is('/create') ? 'active': ''}}">
            <a class="nav-link" href="/create">Create Album</a>
          </li>

        <li class="nav-item {{Request::is('/albums') ? 'active': ''}}">
            <a class="nav-link" href="/albums">Albums</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>