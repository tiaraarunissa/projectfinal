<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height: 3000px">
    <!----Header --->
    <nav class="navbar navbar-expand navbar-dark bg-primary sticky-top">
        <div class="container-lg">
            <a class="navbar-brand" href="#"> <i class="bi bi-hospital"></i> Kesma</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Username
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end nt-2">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!----End Header --->
    <div class="container-lg">
        <div class="row">
            <!----Sidebar --->
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active link-light" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="#"> <i class="bi bi-journal-bookmark-fill"></i> Pencatatan Riwayat Kesehatan</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link link-dark" href="#"> <i class="bi bi-calendar2-week"></i> Jadwal Kesehatan</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link link-dark" href="#"> <i class="bi bi-clipboard2-pulse"></i> Informasi Kesehatan</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link link-dark" href="#"> <i class="bi bi-person-badge"></i> Admin</a>
                                      </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--- End Sidebar --->

            <!--- Content --->
            <div class="col-lg-9 mt-2">
            <div class="card">
  <div class="card-header">
    Home
  </div>
  <div class="card-body">
    <h5 class="card-title">Pelacak Kesehatan Pada Masyarakat</h5>
    <p class="card-text">Sebuah aplikasi yang digunakan untuk membantu masyarakat dalam memantau dan meningkatkan kesehatan mereka dengan lebih baik.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
            <!--- End Content --->
        </div>

        <div class="fixed-bottom text-center mb-2">
            Tiara Arunissa 2024
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>