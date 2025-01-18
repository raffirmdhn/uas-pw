<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Mekanik | Bengkel</title>

  <?php include_once 'head.php' ?>
  
  <style>
    /* Add space between the 'Kemampuan' label and checkboxes */
    .form-group.d-flex.align-items-center label {
        margin-right: 20px; /* Adjust this value as needed */
    }
    /* Add space between checkbox and label */
    .form-check-label {
        margin-left: 10px; /* Adjust this value as needed */
    }
  </style>
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
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Mekanik</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="proses-edit-mekanik.php" method="POST">
            <div class="card-body">
              <!-- Input Nama Mekanik -->
              <div class="form-group">
                <label for="nama_mekanik">Nama Mekanik</label>
                <input type="text" class="form-control" id="nama_mekanik" name="nama_mekanik" placeholder="Masukkan Nama Mekanik">
              </div>

              <div class="form-group">
                <label for="kategori_mekanik">Kategori Mekanik</label>
                <select class="form-control" id="kategori_mekanik" name="kategori_mekanik">
                  <option value="Spesialisasi A">Spesialis Service Motor</option>
                  <option value="Spesialisasi B">Spesialis Kirian</option>
                  <option value="Spesialisasi C">Spesialis Repaint</option>
                  <option value="Spesialisasi D">Magang</option>
                  <option value="Spesialisasi E">Spesialis Service Mobil</option>
                  <option value="Spesialisasi F">Spesialis Ganti Oli</option>
                  <option value="Spesialisasi G">Spesialis Cek Mesin</option>
                  <option value="Spesialisasi H">Spesialis Service Ringan</option>
                  <option value="Spesialisasi I">Spesialis Service Berat</option>
                </select>
              </div>

              <div class="form-group">
                <label for="Skill">Deskripsi Skill</label>
                <textarea class="form-control" id="Skill" name="Skill" placeholder="Masukkan Deskripsi Mekanik" rows="4">Deskripsi Mekanik</textarea>
              </div>

              <div class="form-group d-flex align-items-center">
                <label for="kemampuan" class="mb-0 me-4">Kemampuan</label>
                <div class="d-flex">
                  <div class="form-check me-4">
                    <input type="checkbox" class="form-check-input" id="SSS" name="kemampuan[]" value="SSS">
                    <label class="form-check-label" for="SSS">SSS</label>
                  </div>
                  <div class="form-check me-4">
                    <input type="checkbox" class="form-check-input" id="SS" name="kemampuan[]" value="SS">
                    <label class="form-check-label" for="SS">SS</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="S" name="kemampuan[]" value="S">
                    <label class="form-check-label" for="S">S</label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
              </div>

              <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon</label>
                <input type="tel" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon +62" pattern="[0-9]{10,15}" required>
                <small>Masukkan nomor telepon tanpa spasi dengan awalan +62</small>
              </div>

              <div class="form-group">
                <label for="foto">Upload Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
              </div>

            </div>
            <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Apakah Anda yakin ingin menyimpan?') && alert('Form berhasil disimpan!')">
                    Simpan
                </button>
              </div>
            
          </form>
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
