<header class="navbar navbar-expand-md navbar-overlap d-print-none" data-bs-theme="dark">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-menu">
      <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('roles.index') }}">
              <span class="nav-link-title">Roles</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
              <span class="nav-link-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('casts.index') }}">
              <span class="nav-link-title">Casts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('genres.index') }}">
              <span class="nav-link-title">Genres</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('movies.index') }}">
              <span class="nav-link-title">Movies</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('reviews.index') }}">
              <span class="nav-link-title">Reviews</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
