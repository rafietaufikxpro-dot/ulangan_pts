<?php
include 'config.php';
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
        <title>Login - SB Admin</title>
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
                                        <form method="POST" >
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="nama" placeholder="name@example.com" />
                                                <label for="inputEmail">Nama</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                               
                                                <label for="inputPassword" placeholder="jenis zakat"></label>
                                                 <select name="jenis" id="jenis" class="form-control">
                                                <option>zakat fitrah</option>
                                                <option>zakat mal</option>
                                                </select>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputJumlahUang" type="text" name="jumlah_uang" placeholder="Jumlah Uang" />
                                                <label for="inputJumlahUang">Jumlah Uang</label>
                                               
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputJumlahBeras" type="text" name="jumlah_beras" placeholder="Jumlah Beras" />
                                                <label for="inputJumlahBeras">Jumlah Beras</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                               
                                                <label for="inputMetode" placeholder="Metode Pembayaran"></label>
                                                 <select name="metode" id="metode" class="form-control">
                                                <option>transfer</option>
                                                <option>langsung</option>
                                                </select>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="date" id="inputTanggal" name="tanggal" placeholder="Tanggal" />
                                                <label for="inputTanggal">Tanggal</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" id="inputKeterangan" name="keterangan" placeholder="Keterangan"></textarea>
                                                <label for="inputKeterangan">Keterangan</label>
                                            </div>
                                            <button class="btn btn-primary">daftar</button>
                                                
                                              
                                           
                                        </form>
                                        <?php
$query = mysqli_query($koneksi, "SELECT * FROM tbl_zakat");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama         = trim($_POST['nama'] ?? '');
    $jenis        = trim($_POST['jenis'] ?? '');
    $jumlah_uang  = !empty($_POST['jumlah_uang'])  ? (float) $_POST['jumlah_uang']  : 0;  // ← cast to float
    $jumlah_beras = !empty($_POST['jumlah_beras']) ? (float) $_POST['jumlah_beras'] : 0;  // ← cast to float
    $metode       = trim($_POST['metode'] ?? '');
    $tanggal      = trim($_POST['tanggal'] ?? date('Y-m-d'));  // fallback to today
    $keterangan   = trim($_POST['keterangan'] ?? '');

    if (empty($nama) || empty($jenis) || empty($metode)) {
        echo "<script>
            Swal.fire({
                title: 'Error!',
                text: 'Nama, jenis, dan metode wajib diisi.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>";
    } else {
        $stmt = mysqli_prepare($koneksi,
            "INSERT INTO tbl_zakat (nama, jenis, jumlah_uang, jumlah_beras, metode, tanggal, keterangan)
             VALUES (?, ?, ?, ?, ?, ?, ?)"
        );

        // s=string, d=double(float), s=string ...
        mysqli_stmt_bind_param($stmt, "ssddsss",
            $nama,
            $jenis,
            $jumlah_uang,   // d → float/decimal
            $jumlah_beras,  // d → float/decimal
            $metode,
            $tanggal,       // ← use $tanggal from POST, not NOW()
            $keterangan
        );

       
}
}

?>
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <?php
         if (mysqli_stmt_execute($stmt)) {
            echo "<script>
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Data zakat berhasil disimpan.',
                    icon: 'success',
                    timer: 2000,
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'admin.php';
                });
            </script>";
            $success = true;
        } else {
            echo "<script>
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Error: " . mysqli_stmt_error($stmt) . "',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            </script>";
        }

        mysqli_stmt_close($stmt);
    
        ?>
    </body>
</html>
