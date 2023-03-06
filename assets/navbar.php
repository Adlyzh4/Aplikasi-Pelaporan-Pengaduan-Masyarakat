<nav class="navbar navbar-light bg-light fixed-top ">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <hr>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <?php
                    if ($_SESSION['level'] == 'masyarakat') { ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://<?= $_SERVER['SERVER_NAME'] ?>/Aplikasi-Pelaporan-Pengaduan-Masyarakat/modul/profile.php"><i
                                    class="fa fa-user"></i>
                                Profile</a>
                        </li>
                    <?php } ?>


                    <?php
                    if ($_SESSION['level'] == 'admin') { ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://<?= $_SERVER['SERVER_NAME'] ?>/Aplikasi-Pelaporan-Pengaduan-Masyarakat/modul/masyarakat.php"><i
                                    class="fa fa-users"></i>
                                Masyarakat</a>
                        </li>
                    <?php } ?>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://<?= $_SERVER['SERVER_NAME'] ?>/Aplikasi-Pelaporan-Pengaduan-Masyarakat/modul/pengaduan.php"><i
                                class="fa fa-bullhorn"></i>
                            Pengaduan</a>
                    </li>


                    <?php
                    if ($_SESSION['level'] == 'admin' || 'petugas') { ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://<?= $_SERVER['SERVER_NAME'] ?>/Aplikasi-Pelaporan-Pengaduan-Masyarakat/modul/tanggapan.php"><i
                                    class="fa fa-comments"></i>
                                Tanggapan</a>
                        </li>
                    <?php } ?>


                    <?php
                    if ($_SESSION['level'] == 'admin') { ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://<?= $_SERVER['SERVER_NAME'] ?>/Aplikasi-Pelaporan-Pengaduan-Masyarakat/modul/petugas.php"><i
                                    class="fa fa-briefcase"></i>
                                Petugas</a>
                        </li>
                    <?php } ?>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://<?= $_SERVER['SERVER_NAME'] ?>/Aplikasi-Pelaporan-Pengaduan-Masyarakat/modul/logout.php"><i
                                class="fa fa-door-open"></i>
                            Logout</a>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</nav>