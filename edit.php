<?php
include 'config.php';
$alert = null; 

$id = $_GET['id'] ?? null;

// get id from query string and load record before showing form
$id = $_GET['id'] ?? null;
$siswa = [];
if ($id) {
    $result = mysqli_query($koneksi, "SELECT * FROM tbl_zakat WHERE id_donasi = '$id'");
    $siswa = mysqli_fetch_assoc($result) ?: [];
}

// handle update when form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $id) {
    $nama = $_POST['nama'] ?? '';
    $jenis = $_POST['jenis'] ?? '';
    $jumlah_uang = $_POST['jumlah_uang'] ?? '';
    $jumlah_beras = $_POST['jumlah_beras'] ?? '';
    $metode = $_POST['metode'] ?? '';
    $tanggal = $_POST['tanggal'] ?? '';
    $keterangan = $_POST['keterangan'] ?? '';

     $stmt = mysqli_prepare($koneksi,
        "UPDATE tbl_zakat SET nama=?, jenis=?, jumlah_uang=?, jumlah_beras=?, metode=?, tanggal=?, keterangan=? WHERE id_donasi=?"
    );
    mysqli_stmt_bind_param($stmt, "ssddsssi",
        $nama, $jenis, $jumlah_uang, $jumlah_beras, $metode, $tanggal, $keterangan, $id
    );

     if (mysqli_stmt_execute($stmt)) {
        // ← DON'T echo script here, just set a flag
        $alert = 'success';
    } else {
        $alert = 'error: ' . mysqli_stmt_error($stmt);
    }
    mysqli_stmt_close($stmt);

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <title>Edit Zakat - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">daftar Zakat</h3></div>
                                    <div class="card-body">
                                        <?php if (!empty($error_message)): ?>
                                          <div class="alert alert-danger"><?php echo $error_message; ?></div>
                                        <?php endif; ?>
                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="nama" placeholder="name@example.com" value="<?php echo htmlspecialchars($siswa['nama'] ?? '', ENT_QUOTES); ?>" />
                                                <label for="inputEmail">Nama</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                               
                                                <label for="inputPassword" placeholder="jenis zakat"></label>
                                                 <select name="jenis" id="jenis" class="form-control">
                                                <option value="zakat fitrah" <?php echo ($siswa['jenis'] ?? '') == 'zakat fitrah' ? 'selected' : ''; ?>>zakat fitrah</option>
                                                <option value="zakat mal" <?php echo ($siswa['jenis'] ?? '') == 'zakat mal' ? 'selected' : ''; ?>>zakat mal</option>
                                                </select>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputJumlahUang" type="text" name="jumlah_uang" placeholder="Jumlah Uang" value="<?php echo htmlspecialchars($siswa['jumlah_uang'] ?? '', ENT_QUOTES); ?>" />
                                                <label for="inputJumlahUang">Jumlah Uang</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputJumlahBeras" type="text" name="jumlah_beras" placeholder="Jumlah Beras" value="<?php echo htmlspecialchars($siswa['jumlah_beras'] ?? '', ENT_QUOTES); ?>" />
                                                <label for="inputJumlahBeras">Jumlah Beras</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                               
                                                <label for="inputMetode" placeholder="Metode Pembayaran"></label>
                                                 <select name="metode" id="metode" class="form-control">
                                                <option value="transfer" <?php echo ($siswa['metode'] ?? '') == 'transfer' ? 'selected' : ''; ?>>transfer</option>
                                                <option value="langsung" <?php echo ($siswa['metode'] ?? '') == 'langsung' ? 'selected' : ''; ?>>langsung</option>
                                                </select>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="date" id="inputTanggal" name="tanggal" placeholder="Tanggal" value="<?php echo htmlspecialchars($siswa['tanggal'] ?? '', ENT_QUOTES); ?>" />
                                                <label for="inputTanggal">Tanggal</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" id="inputKeterangan" name="keterangan" placeholder="Keterangan"><?php echo htmlspecialchars($siswa['keterangan'] ?? '', ENT_QUOTES); ?></textarea>
                                                <label for="inputKeterangan">Keterangan</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>

                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
         <?php if ($alert === 'success'): ?>
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data zakat berhasil diupdate.',
            icon: 'success',
            timer: 2000,
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = 'admin.php';
        });
    </script>
<?php elseif ($alert !== null && str_starts_with($alert, 'error')): ?>
    <script>
        Swal.fire({
            title: 'Gagal!',
            text: '<?= addslashes($alert) ?>',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
    <?php endif; ?>
    </body>
</html>
