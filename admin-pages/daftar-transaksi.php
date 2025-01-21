<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Transaksi | Bengkel</title>

  <?php include_once 'head.php' ?>
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php include_once 'navbar.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once 'sidebar.php' ?>
    <!-- /.Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Daftar Transaksi</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <!-- <li class="breadcrumb-item"><a href="#">Daftar Transaksi</a></li> -->
                <li class="breadcrumb-item active">Daftar Transaksi</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Transaksi</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fas fa-globe"></i> Bengkel Bermuda
                  <small class="float-right">Date: 2/10/2014</small>
                </h4>
              </div>
              <!-- /.col -->
            </div>

            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Pelanggan</th>
                      <th>Nopol</th>
                      <th>Kategori</th>
                      <th>Keluhan</th>
                      <th>Layanan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>12 Desember 2024</td>
                      <td>Ucup</td>
                      <td>B23OAe</td>
                      <td>Motor</td>
                      <td>Mogok</td>
                      <td>Service Ringan</td>
                      <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="edit-transaksi.php?id=1">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>12 Desember 2024</td>
                      <td>Bagus</td>
                      <td>F7890AA</td>
                      <td>Motor</td>
                      <td>Mesin Mati</td>
                      <td>Service Berat</td>
                      <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="edit-transaksi.php?id=1">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>13 Desember 2024</td>
                      <td>Ujang</td>
                      <td>A8997RI</td>
                      <td>Mobil</td>
                      <td>Ai Radiator Bocor</td>
                      <td>Service Ringan</td>
                      <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="edit-transaksi.php?id=1">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>13 Desember 2024</td>
                      <td>Walter White</td>
                      <td>C0000KK</td>
                      <td>Minibus</td>
                      <td>AC mati</td>
                      <td>Service Ringan</td>
                      <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="edit-transaksi.php?id=1">
                          <i class="fas fa-pencil-alt"></i>
                          Edit
                        </a>

                        <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                        </a>
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->



            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-12">
                <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                  Payment
                </button>
                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                  <i class="fas fa-download"></i> Generate PDF
                </button>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- footer -->
    <?php include_once 'footer.php' ?>
    <!-- /.footer -->
  </div>
  <!-- ./wrapper -->

  <?php include_once 'scripts.php' ?>
</body>

</html>