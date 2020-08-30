<header class="mb-2">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="/">Basic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item {{Request::is('/') ? 'active': ''}}">
            <a class="nav-link" href="/">Home </a>
          </li>
          <li class="nav-item {{Request::is('about') ? 'active': ''}}">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item {{Request::is('messages') ? 'active': ''}}">
            <a class="nav-link" href="/messages" tabindex="-1" >Messages</a>
          </li>
          <li class="nav-item {{Request::is('contact') ? 'active': ''}}">
            <a class="nav-link" href="/contact" tabindex="-1" >Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>