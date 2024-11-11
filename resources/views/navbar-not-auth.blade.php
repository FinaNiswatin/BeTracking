<nav class="navbar fixed-top navbar-expand-lg custom-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 300px" >
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link me-2 {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2 {{ Request::is('reports') ? 'active' : '' }}" href="{{ route('reports') }}">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2 {{ Request::is('wallet') ? 'active' : '' }}" href="{{ route('wallet') }}">Wallet</a>
                </li>
            </ul>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> 
                    <li class="nav-item">
                        <a class="btn custom-btn" href="{{ route('login') }}">Login</a> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
