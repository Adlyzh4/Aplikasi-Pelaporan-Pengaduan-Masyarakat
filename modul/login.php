<!DOCTYPE html>
<html lang="en">
<?php

include('../config/database.php');
if (isset($_POST['cek'])) {
    $pilihan = $_POST['pilihan']; //masyarakat atau petugas
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if ($pilihan == 'masyarakat') {
        $q = mysqli_query($con, "SELECT * FROM `masyarakat` WHERE username='$username' AND password='$password' AND verifikasi= 1 ");
        $r = mysqli_num_rows($q);
        if ($r == 1) {
            $d = mysqli_fetch_object($q);
            session_start();
            $_SESSION['nik'] = $d->nik;
            $_SESSION['nama'] = $d->nama;
            $_SESSION['username'] = $d->username;
            $_SESSION['telp'] = $d->telp;
            $_SESSION['level'] = 'masyarakat';
            header('location:profile.php');
        } else {
            echo '<div class="alert alert-danger alert-dismissable" >
        <a href="" class="close" data-dismiss="alert" ></a>
        data yang anda masukan salah atau belum terverifikasi
        </div>';
        }
    } elseif ($pilihan == 'petugas') {
        $q = mysqli_query($con, "SELECT * FROM `petugas` WHERE username='$username' AND password='$password'");
        $r = mysqli_num_rows($q);
        if ($r == 1) {
            $d = mysqli_fetch_object($q);
            session_start();
            $_SESSION['username'] = $d->username;
            $_SESSION['id_petugas'] = $d->id_petugas;
            $_SESSION['level'] = $d->level;
            header('location:petugas.php');
        }
    }
}
?>

<?php include('../assets/header.php') ?>

<body>

    <div class="container-fluid" style="margin-top: 6%;">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card h-100 bg-primary text-white ">
                    <div class="card-body d-flex align-items-center">
                        <h4 class="text-center">Halo guys!
                            <br> Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat</h4>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class=" card">
                    <div class="card-header bg-primary text-white">
                        <h3><i class="fa fa-users"></i> Aplikasi Pelaporan Pengaduan Masyarakat</h3>

                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">Jangan kasih tau username atau passwordmu
                                    kepada siapapun!.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    required>
                            </div>
                            <label for="Default select example" class="form-label">Login sebagai :</label>
                            <select class="form-select" aria-label="Default select example" name="pilihan">
                                <option value="masyarakat">Masyarakat</option>
                                <option value="petugas">Petugas</option>
                            </select>
                            <div class="card-footer mt-3">
                                <button type="submit" name="cek" class="btn btn-primary form-control">Masuk</button>
                                <p class="text-center mt-2"><span>Apakah anda belum daftar?</span>Ayo daftar<a
                                        href="registrasi.php">klik
                                        disini!</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('../assets/footer.php') ?>
</body>

</html>