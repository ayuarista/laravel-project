<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top mx-12">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Restaurant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active hover:text-white transition-all" aria-current="page"
                        href="{{ route('menu.index') }}">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active hover:text-white transition-all" aria-current="page"
                        href="{{ route('additional.index') }}">Additional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active hover:text-white transition-all" aria-current="page"
                        href="{{ route('variant.index') }}">Variant</a>
                </li>
            </ul>
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Upload
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{ route('additional.create') }}">Upload Additional</a></li>
                    <li><a class="dropdown-item" href="{{ route('additional.create') }}">Upload Additional</a></li>
                    <li><a class="dropdown-item" href="{{ route('variant.create') }}">Upload Variant</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<style>
    .navbar-nav .nav-link:hover {
        color: rgb(74, 74, 74);
        transform: transition all ease-in-out 0.3s;
    }

    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
    }

    body {
        padding-top: 50px;
    }
</style>
