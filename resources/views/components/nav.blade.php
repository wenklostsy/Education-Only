<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0 py-3">
    <div class="container-xl">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{asset('img/logo.png')}}" style="height: 50px;" alt="...">
        </a>
        <!-- Navbar toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Nav -->
            <div class="navbar-nav mx-lg-auto">
                <a class="nav-item nav-link {{ request()->routeIs('home') || request()->routeIs('establishments.profile') ? 'active' : '' }}" href="{{ route('home') }}" aria-current="page">Home</a>
                <a class="nav-item nav-link
                {{ request()->routeIs('substratos') || request()->routeIs('aço') ? 'active' : '' }}" href="{{ route('substratos') }}">Substratos</a>
                {{-- <a class="nav-item nav-link" href="#">Features</a> --}}
                <a class="nav-item nav-link {{ request()->routeIs('team') ? 'active' : '' }}" href="{{ route('team') }}">Equipe</a>
            </div>
        </div>
    </div>
</nav>
