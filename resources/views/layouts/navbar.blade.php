<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="/">Bengkelin.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="/landingpage">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('servicepage') }}">Services</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="/profileuser" class="nav-link">Profile</a>
                </li>
            </ul>
            <div class="kanan navbar-nav ml-auto">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-lg login btn-outline-primary mx-2">Login</a>
                    <a href="#" class="btn btn-lg signup mx-2">Sign Up</a>
                @endguest
                @auth
                    <a href="{{ url('logout') }}" class="btn btn-lg login btn-outline-primary mx-2">Logout</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
