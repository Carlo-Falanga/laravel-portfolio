<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="d-flex flex-column min-vh-100">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container-fluid">
                <!-- Toggler sidebar (solo mobile) -->
                <button class="navbar-toggler border-0 me-2 d-md-none" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#adminSidebar" aria-controls="adminSidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="{{ route('admin.index') }}">Admin</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="adminNavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Vai al sito</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid flex-grow-1">
            <div class="row">
                <!-- Sidebar: offcanvas su mobile, fissa da md in su -->
                <aside class="offcanvas-md offcanvas-start bg-light border-end p-0 col-md-3 col-lg-2"
                    tabindex="-1" id="adminSidebar" aria-labelledby="adminSidebarLabel">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title" id="adminSidebarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#adminSidebar" aria-label="Chiudi"></button>
                    </div>
                    <div class="offcanvas-body d-md-block py-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('admin.index') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('admin.projects.index') }}">Progetti</a>
                            </li>
                        </ul>
                    </div>
                </aside>

                <!-- Contenuto -->
                <main class="col-12 col-md-9 col-lg-10 py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

</html>
