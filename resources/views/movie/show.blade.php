<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Lihat Pengguna</title>
  <!-- CSS files -->
  <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet"/>
</head>

<body>
<script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>

<div class="page">
  <!-- Sidebar -->
  <aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
              aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="navbar-brand navbar-brand-autodark">
        <a href=".">
          <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
      </h1>
      <div class="navbar-nav flex-row d-lg-none">
        <div class="nav-item d-none d-lg-flex me-3">
          <div class="btn-list">
            <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
              <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                   stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path
                  d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"/>
              </svg>
              Source code
            </a>
            <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24"
                   stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/>
              </svg>
              Sponsor
            </a>
          </div>
        </div>
        <div class="d-none d-lg-flex">
          <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
             data-bs-placement="bottom">
            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"/>
            </svg>
          </a>
          <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
             data-bs-toggle="tooltip"
             data-bs-placement="bottom">
            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"/>
              <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"/>
            </svg>
          </a>
          <div class="nav-item dropdown d-none d-md-flex me-3">
            <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
              <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                   stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"/>
                <path d="M9 17v1a3 3 0 0 0 6 0v-1"/>
              </svg>
              <span class="badge bg-red"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Last updates</h3>
                </div>
                <div class="list-group list-group-flush list-group-hoverable">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Example 1</a>
                        <div class="d-block text-secondary text-truncate mt-n1">
                          Change deprecated html tags to text decoration classes (#29604)
                        </div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                               viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                               stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="status-dot d-block"></span></div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Example 2</a>
                        <div class="d-block text-secondary text-truncate mt-n1">
                          justify-content:between ⇒ justify-content:space-between (#29734)
                        </div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions show">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24"
                               viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                               stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="status-dot d-block"></span></div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Example 3</a>
                        <div class="d-block text-secondary text-truncate mt-n1">
                          Update change-version.js (#29736)
                        </div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                               viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                               stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Example 4</a>
                        <div class="d-block text-secondary text-truncate mt-n1">
                          Regenerate package-lock.json (#29730)
                        </div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                               viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                               stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
            <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>

          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="#" class="dropdown-item">Status</a>
            <a href="./profile.html" class="dropdown-item">Profile</a>
            <a href="#" class="dropdown-item">Feedback</a>
            <div class="dropdown-divider"></div>
            <a href="./settings.html" class="dropdown-item">Settings</a>
            <a href="./sign-in.html" class="dropdown-item">Logout</a>
          </div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="sidebar-menu">
        <ul class="navbar-nav pt-lg-3">
          <li class="nav-item">
            <a class="nav-link" href="/roles">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="24"
                        height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="9" cy="7" r="4"/>
        <path d="M9 14a6 6 0 0 0 6 6"/>
        <path d="M15 19l2 2l4 -4"/>
      </svg>
                  </span>
              <span class="nav-link-title">
                    Peran
                  </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/users">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24"
             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
             stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="12" cy="7" r="4"/>
        <path
          d="M5.5 21h13a1.5 1.5 0 0 0 1.5 -1.5v-2a5.5 5.5 0 0 0 -5.5 -5.5h-5a5.5 5.5 0 0 0 -5.5 5.5v2a1.5 1.5 0 0 0 1.5 1.5z"/>
      </svg>
                  </span>
              <span class="nav-link-title">
                    Pengguna
                  </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/casts">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
             stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="9" cy="7" r="4"/>
        <circle cx="15" cy="7" r="4"/>
        <path
          d="M5.5 21h13a1.5 1.5 0 0 0 1.5 -1.5v-2a5.5 5.5 0 0 0 -5.5 -5.5h-5a5.5 5.5 0 0 0 -5.5 5.5v2a1.5 1.5 0 0 0 1.5 1.5z"/>
      </svg>
                  </span>
              <span class="nav-link-title">
                    Pemeran
                  </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/genres">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
           <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M4 4h6v6h-6z"/>
        <path d="M14 4h6v6h-6z"/>
        <path d="M4 14h6v6h-6z"/>
        <circle cx="17" cy="17" r="3"/>
      </svg>
                  </span>
              <span class="nav-link-title">
                    Genre
                  </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/movies">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-film" width="24" height="24"
             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
             stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <rect x="3" y="3" width="18" height="18" rx="2"/>
        <line x1="7" y1="3" x2="7" y2="21"/>
        <line x1="17" y1="3" x2="17" y2="21"/>
        <line x1="3" y1="7" x2="21" y2="7"/>
        <line x1="3" y1="17" x2="21" y2="17"/>
      </svg>
                  </span>
              <span class="nav-link-title">
                    Film
                  </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/reviews">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
         <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle" width="24"
              height="24"
              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="12" cy="12" r="9"/>
        <path d="M12 17l-3.5 -3.5l-1.5 1.5"/>
        <path d="M15 7h-6"/>
      </svg>
                  </span>
              <span class="nav-link-title">
                    Ulasan
                  </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </aside>

  <!-- Navbar -->
  <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
    <div class="container-xl">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
              aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav flex-row order-md-last">
        <div class="d-none d-md-flex">
          <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
             data-bs-placement="bottom">
            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"/>
            </svg>
          </a>
          <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
             data-bs-toggle="tooltip"
             data-bs-placement="bottom">
            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"/>
              <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"/>
            </svg>
          </a>
          <div class="nav-item dropdown d-none d-md-flex me-3">
            <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
              <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                   stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"/>
                <path d="M9 17v1a3 3 0 0 0 6 0v-1"/>
              </svg>
              <span class="badge bg-red"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Last updates</h3>
                </div>
                <div class="list-group list-group-flush list-group-hoverable">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Example 1</a>
                        <div class="d-block text-secondary text-truncate mt-n1">
                          Change deprecated html tags to text decoration classes (#29604)
                        </div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                               viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                               stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="status-dot d-block"></span></div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Example 2</a>
                        <div class="d-block text-secondary text-truncate mt-n1">
                          justify-content:between ⇒ justify-content:space-between (#29734)
                        </div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions show">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24"
                               viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                               stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="status-dot d-block"></span></div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Example 3</a>
                        <div class="d-block text-secondary text-truncate mt-n1">
                          Update change-version.js (#29736)
                        </div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                               viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                               stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                      <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Example 4</a>
                        <div class="d-block text-secondary text-truncate mt-n1">
                          Regenerate package-lock.json (#29730)
                        </div>
                      </div>
                      <div class="col-auto">
                        <a href="#" class="list-group-item-actions">
                          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                               viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                               stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
            <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
            <div class="d-none d-xl-block ps-2">
              <div>Arphan Maulana Firdaus</div>
              <div class="mt-1 small text-secondary">UI Designer</div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="#" class="dropdown-item">Status</a>
            <a href="./profile.html" class="dropdown-item">Profile</a>
            <a href="#" class="dropdown-item">Feedback</a>
            <div class="dropdown-divider"></div>
            <a href="./settings.html" class="dropdown-item">Settings</a>
            <a href="./sign-in.html" class="dropdown-item">Logout</a>
          </div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div>
          <form action="./" method="get" autocomplete="off" novalidate>
            <div class="input-icon">
                  <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                        d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"/><path d="M21 21l-6 -6"/></svg>
                  </span>
              <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <div class="page-wrapper">
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    @if(session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif

    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">Lihat Peran</h2>
          </div>
        </div>
      </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="card">
          <div class="card-body">
            <form method="POST" action="{{ route('movies.update', $movie->id) }}" enctype="multipart/form-data"
                  disabled>
              @csrf
              @method('PUT')

              <!-- Movie Title -->
              <div class="mb-3">
                <label for="title" class="form-label">Judul Film</label>
                <input type="text" class="form-control" id="title" name="title"
                       value="{{ old('title', $movie->title) }}" placeholder="Masukkan Judul Film" disabled>
              </div>

              <!-- Movie Synopsis -->
              <div class="mb-3">
                <label for="synopsis" class="form-label">Sinopsis</label>
                <textarea class="form-control" id="synopsis" name="synopsis" rows="4"
                          placeholder="Masukkan Sinopsis Film"
                          disabled>{{ old('synopsis', $movie->synopsis) }}</textarea>
              </div>

              <!-- Movie Year -->
              <div class="mb-3">
                <label for="year" class="form-label">Tahun</label>
                <input type="number" class="form-control" id="year" name="year" value="{{ old('year', $movie->year) }}"
                       placeholder="Masukkan Tahun Rilis" disabled>
              </div>

              <!-- Movie Genre -->
              <div class="mb-3">
                <label for="genre_id" class="form-label">Genre</label>
                <select class="form-control" id="genre_id" name="genre_id" disabled>
                  <option value="">Pilih Genre</option>
                  @foreach($genres as $genre)
                    <option
                      value="{{ $genre->id }}" {{ $movie->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
                  @endforeach
                </select>
              </div>

              <!-- Movie Availability -->
              <div class="mb-3">
                <label for="available" class="form-label">Tersedia</label>
                <select class="form-control" id="available" name="available" disabled>
                  <option value="1" {{ $movie->available ? 'selected' : '' }}>Ya</option>
                  <option value="0" {{ !$movie->available ? 'selected' : '' }}>Tidak</option>
                </select>
              </div>

              <!-- Movie Poster -->
              <div class="mb-3">
                <label for="poster" class="form-label">Poster</label>
                <input type="file" class="form-control" id="poster" name="poster" accept="image/*" disabled>
              </div>

              <!-- Poster Preview -->
              <div>
                @if ($movie->poster)
                  <img src="{{ asset('storage/' . $movie->poster) }}" alt="Poster"
                       style="max-width: 200px; height: auto;">
                @else
                  <span>No Poster</span>
                @endif
              </div>

              <!-- Movie Cast (Multiselect) -->
              <div class="mb-3">
                <label for="casts" class="form-label">Pemeran</label>
                <select class="form-control" id="casts" name="casts[]" multiple disabled>
                  @foreach($casts as $cast)
                    <option
                      value="{{ $cast->id }}" {{ in_array($cast->id, $movie->casts->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $cast->name }}</option>
                  @endforeach
                </select>
                <small class="form-text text-muted">
                  Tekan <kbd>Ctrl</kbd> (Windows) atau <kbd>Command</kbd> (Mac) dan klik untuk memilih beberapa pemeran.
                </small>
              </div>

              <div class="text-center">
                <a href="{{ route('movies.index') }}" class="btn btn-secondary">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Tabler Core -->
<script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
<script src="{{ asset('dist/js/demo.min.js') }}" defer></script>
<script>
  // Fungsi untuk preview image saat file dipilih
  function previewImage(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function (e) {
      const imagePreview = document.getElementById('poster-preview');
      imagePreview.innerHTML = `<img src="${e.target.result}" alt="Preview" class="img-fluid" style="max-width: 200px; height: auto;">`;
    };

    if (file) {
      reader.readAsDataURL(file); // Membaca file image dan mengonversinya menjadi URL data
    }
  }
</script>
</body>
</html>
