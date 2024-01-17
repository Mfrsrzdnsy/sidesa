<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/all.min.css">

    <style>
    .sidebar {
        height: 100vh;
        overflow-y: auto;

    }

    .main-content {
        min-height: a;

    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class=" container-fluid">
            <a class="navbar-brand text-bg-dark" href="#"><i class="fa-solid fa-building-columns"></i> Sistem Infomasi
                Desa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="index.php"><i
                                class="fa-solid fa-house">
                            </i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Another action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-3">
            <main class="d-flex flex-nowrap b-example-divider b-example-vr sidebar">
                <h1 class="visually-hidden">Sidebars examples</h1>

                <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="dashboard.php" class="nav-link text-white">
                                <i class="fa-solid fa-gauge-high"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pegawai.php" class="nav-link text-white" aria-current="page">
                                <i class="fa-solid fa-user"></i> Pegawai
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg>
                                Orders
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#grid"></use>
                                </svg>
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                                Customers
                            </a>
                        </li>
                    </ul>
                    <hr />
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                                class="rounded-circle me-2" />
                            <strong>mdo</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
                <div></div>
            </main>
        </div>
        <div class="col-md-9">
            <main>
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
                    <h1 class="h2">Data Pegawai</h1>
                </div>
                <div class="card-body">
                    <a href="tambah_pegawai.html" class="btn btn-primary mb-2 mt-2" role="button">Tambah <i
                            class="fas fa-user-plus">
                        </i> </a>
                    <div class="table-responsive">
                        <table class="table table-hover" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th scope="col">NIP</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">L/P</th>
                                    <th scope="col">Telpon</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>111</td>
                                    <td>Firas</td>
                                    <td>Sumbawa</td>
                                    <td>15 Agustus 2001</td>
                                    <td>L</td>
                                    <td>082341876756</td>
                                    <td>Menikah</td>
                                    <td>foto</td>
                                    <td>
                                        <a href='#' class='btn btn-success'><i class="fas fa-edit"></i></a>
                                        <a href='#' class='btn btn-danger'><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>111</td>
                                    <td>Firas</td>
                                    <td>Sumbawa</td>
                                    <td>15 Agustus 2001</td>
                                    <td>L</td>
                                    <td>082341876756</td>
                                    <td>Menikah</td>
                                    <td>foto</td>
                                    <td>
                                        <a href='#' class='btn btn-success'><i class="fas fa-edit"></i></a>
                                        <a href='#' class='btn btn-danger'><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>111</td>
                                    <td>Firas</td>
                                    <td>Sumbawa</td>
                                    <td>15 Agustus 2001</td>
                                    <td>L</td>
                                    <td>082341876756</td>
                                    <td>Menikah</td>
                                    <td>foto</td>
                                    <td>
                                        <a href='#' class='btn btn-success'><i class="fas fa-edit"></i></a>
                                        <a href='#' class='btn btn-danger'><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>111</td>
                                    <td>Firas</td>
                                    <td>Sumbawa</td>
                                    <td>15 Agustus 2001</td>
                                    <td>L</td>
                                    <td>082341876756</td>
                                    <td>Menikah</td>
                                    <td>foto</td>
                                    <td>
                                        <a class='btn btn-success'><i class="fas fa-edit"></i></a>
                                        <a href='#' class='btn btn-danger'><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>


        </div>
    </div>
    <div class="row">
        <div class="card bg-dark-subtle">
            <div class="card-body" style="text-align: center;">
                Copyright &copy;2023 by Muhammad Firas Rizaldiansyah
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/all.min.js"></script>

    <!-- <script src="js/sidebar.js"></script> -->
</body>

</html>