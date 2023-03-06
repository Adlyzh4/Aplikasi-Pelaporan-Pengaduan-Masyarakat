<?php

session_start();
include('../config/database.php');
if (isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $q = mysqli_query($con, "INSERT INTO `masyarakat` (nik, nama, username, password, telp, verifikasi) VALUES ('$nik', '$nama', '$username', '$password', $telp, 0)");
    if ($q) {
        echo '<div class="alert alert-success alert-dismissable">
                <a href="" class="close" data-dismiss="alert" aria-label="close">×</a>
                Registrasi Berhasil Tunggu verifikasi oleh admin
                </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<?php include('../assets/header.php') ?>

<body>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fa fa-registered"></i>Daftar</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nik</label>
                                <input type="text" name="nik" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Jangan kasih tau username atau passwordmu
                                    kesiapapun!.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                                <input type="text" name="telp" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                
                            </div>

                            <div class="card-footer mt-3">
                                <button type="submit" name="simpan" class="btn btn-primary form-control">Daftar</button>
                                <p class="text-center mt-2"><span>Apakah anda sudah daftar?</span>Ayo login<a
                                        href="login.php">klik disini!</a></p>
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