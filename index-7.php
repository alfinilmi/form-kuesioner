<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Survey Pengguna Mobile Banking</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="icon" href="img/icon2.png" type="image/x-icon"/>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav">
            <h3 class="text-light">Survey Pengguna Mobile Banking</h3>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid col-10">
          <!-- Content Row -->
        <form action="addBtnSubmit.php" method="post">
          <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-left-primary h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div>
                                    Jawaban terbaik berkesempatan mendapatkan hadiah berupa uang tunai senilai <b><i>Rp100.000</i></b> untuk 5 orang yang beruntung.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Apakah anda memiliki saran terkait peningkatan fitur pada aplikasi mobile banking yang Anda gunakan?</label>
                            <input type="text" class="form-control" placeholder="Your Answer">
                        </div>
                        <div class="form-group">
                            <label>Apakah Anda cenderung menggunakan aplikasi m-banking kami lebih sering daripada bertransaksi secara fisik? Jika ya, mengapa Anda lebih memilih aplikasi m-banking?</label>
                            <input type="text" class="form-control" placeholder="Your Answer">
                        </div>
                        <div class="form-group">
                            <label>Dalam situasi tertentu, apakah Anda merasa ragu untuk menggunakan aplikasi m-banking kami? Jika ya, apa yang menyebabkan keragu-raguan tersebut?</label>
                            <input type="text" class="form-control" placeholder="Your Answer">
                        </div>
                        <div class="form-group">
                            <label class="mb-0">No. Telepon</label> <br>
                            <small>Masukkan nomor telepon Anda untuk berpartisipasi dalam mendapatkan hadiah uang tunai.</small>
                            <input type="text" class="form-control" placeholder="Your Answer">
                        </div>
                        <div class="form-group">
                            <label class="mb-0">No. Rekening</label> <br>
                            <small>No. Rekening dibutuhkan jika kami tidak dapat mengirim uang tunai melalui dompet digital, Format: No. Rek - Nama Bank</small>
                            <input type="text" class="form-control" placeholder="Your Answer">
                        </div>
                        <div class="form-group">
                            <label class="mb-0">Jalan/Nomor Rumah</label> <br>
                            <small>Apabila kami tidak dapat mengirimkan hadiah ke dua opsi di atas, kami akan mengirimkannya secara langsung melalui jasa pengiriman</small>
                            <input type="text" class="form-control" placeholder="Your Answer">
                        </div>
                    </div>
                </div>
              </div>
              <a href="index-6.php" class="btn btn-secondary mb-4 mr-2">Back</a>
              <button type="submit" class="btn btn-primary mb-4">Submit</button>
            </form>
          <!-- Content Row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>2023</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
