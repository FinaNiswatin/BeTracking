<nav class="navbar fixed-top navbar-expand-lg custom-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
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

            <!-- Profile Dropdown -->
            <div class="profile-section dropdown">
                <a class="d-flex align-items-center dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('images/profile-icon.png') }}" alt="Profile" class="nav-icon me-2">
                    <span class="user-info">
                        <strong class="mb-0">Najem Salamy</strong><br>
                        <small class="mt-0">Premium User</small>
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <img src="{{ asset('images/person.svg') }}" alt="Account" class="dropdown-icon me-2">
                            Account
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('landing') }}">
                            <img src="{{ asset('images/logout.svg') }}" alt="Logout" class="dropdown-icon me-2">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
