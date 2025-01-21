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
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <!-- Default box -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Edit Transaksi</h3>
                            </div>
                            <div class="card-body">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>Tanggal</label>
        
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask-alias="datetime"
                                            data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
        
                                <!-- Date mm/dd/yyyy -->
                                <div class="form-group">
                                    <label>Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-users"></i></span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
        
                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>Nopol: </label>
        
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-stream"></i></span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
        
                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>Kategori</label>
                                
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-car"></i></span>
                                        </div>
                                        <select class="form-control">
                                            <option value="motor">Motor</option>
                                            <option value="minibus">Minibus</option>
                                            <option value="mobil-lainnya">Mobil Lainnya</option>
                                        </select>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                
                                <!-- IP mask -->
                                <div class="form-group">
                                    <label>Keluhan:</label>
        
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-question"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group">
                                    <label>Layanan:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-tools"></i></span>
                                        </div>
                                        <select class="form-control">
                                            <option value="ServisRingan">Service Ringan</option>
                                            <option value="ServiceSedang">Service Sedang</option>
                                            <option value="ServiceBerat">Service Berat</option>
                                        </select>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                    <i></i> Done
                                </button>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>


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