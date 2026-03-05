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
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       
        <div id="layoutSidenav">
            
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard Admin Zakat</h1>
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body h3">
                                         <?php
                        include 'config.php';
                        $query = mysqli_query($koneksi, "SELECT sum(jumlah_uang) AS total FROM tbl_zakat");
                        $row = mysqli_fetch_assoc($query);
                        echo $row['total'];
                        
                        ?> RP
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       <h3>jumlah uang</h3>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body h3">
                                         <?php
                        $query = mysqli_query($koneksi, "SELECT sum(jumlah_beras) AS total FROM tbl_zakat");
                        $row = mysqli_fetch_assoc($query);
                        echo $row['total'];
                        ?> KG
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3>jumlah beras</h3>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body h3">
                                          <?php
                        $query = mysqli_query($koneksi, "SELECT sum(keterangan) AS total FROM tbl_zakat");
                        $row = mysqli_fetch_assoc($query);
                        echo $row['total'];
                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3>orang yang sudah zakat</h3>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                       
                            <div class="card-body">
                                 <a href="tambah.php" class="btn btn-primary">Tambah Zakat</a>
                               <table class="table align-items-center mb-0">
                                
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">no</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">nama</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jenis</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">jumlah_uang</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">jumlah_beras</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">metode</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">keterangan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">aksi</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
           <tbody>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM tbl_zakat");
    $no = 1;
    while ($data = mysqli_fetch_assoc($query)) :
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo htmlspecialchars($data['nama']); ?></td>
        <td><?php echo htmlspecialchars($data['jenis']); ?></td>
        <td class="text-center"><?php echo htmlspecialchars($data['jumlah_uang']); ?></td>
        <td class="text-center"><?php echo htmlspecialchars($data['jumlah_beras']); ?>KG</td>
        <td><?php echo htmlspecialchars($data['metode']); ?></td>
        <td><?php echo htmlspecialchars($data['tanggal']); ?></td>
        <td><?php echo htmlspecialchars($data['keterangan']); ?></td>
        <td>
            <a href="edit.php?id=<?php echo $data['id_donasi']; ?>" class="btn btn-sm btn-primary">Edit</a>
            <a href="#" onclick="deletedonatur(<?php echo $data['id_donasi']; ?>)" class="btn btn-sm btn-danger">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</tbody>
            </table>
                            </div>
                        </div>
                    </div>
                </main>
              
            </div>
        </div>
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
         
<script>
  // Delete function with SweetAlert2

  function deletedonatur(id) {
    Swal.fire({
      title: 'apakah anda yakin?',
      text: "data yang dihapus tidak dapat dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'iya, hapus data!',

    }).then((result) => {
        if (result.isConfirmed) {
          swal.fire({
            icon: 'success',
            title: 'Data berhasil dihapus!',
            showConfirmButton: false,
            timer: 2000
          });
          setTimeout(function() {
            window.location.href = 'delete.php?id=' + id;
          }, 2000);
      } else if (result.isDenied) {
        swal.fire('Your data is safe!', '', 'info');
        timer = 2000;
      }
    });
  }

</script>
    </body>
</html>
