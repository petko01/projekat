
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img id="logo" src="images/logo.png">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">
                <li class="nav-item">
                    <button id="button-home" class="nav-link active" aria-current="page">Home</button>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" id="navbarScrollingDropdown" id="button-workout2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Workouts</button>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><button class="dropdown-item" id="button-all">All workout</button></li>
                        <li><button class="dropdown-item" id="button-muscle">Build Muscle</button></li>
                        <li><button class="dropdown-item" id="button-fat">Fat Loss</button></li>
                        <li><button class="dropdown-item" id="button-sport">Sport</button></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <button id="button-admin" class="nav-link">Admin</button>
                </li>
                <li class="nav-item">
                    <a href="index.php?optionUser=logout" class="nav-link">Logout</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn " type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
