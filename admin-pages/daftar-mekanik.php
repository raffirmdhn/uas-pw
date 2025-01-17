<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Mekanik | Bengkel</title>

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
              <h1>Team Mekanik</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <!-- <li class="breadcrumb-item"><a href="#">Daftar Mekanik</a></li> -->
                <li class="breadcrumb-item active">Team Mekanik</li>
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
            <h3 class="card-title">List Team Mekanik</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped projects">
              <thead>
                <tr>
                  <th style="width: 1%">
                    #
                  </th>
                  <th style="width: 20%">
                    Team Name
                  </th>
                  <th style="width: 30%">
                    Team Members
                  </th>
                  <th>
                     
                  </th>
                  <th style="width: 8%" class="text-center">
                    Status
                  </th>
                  <th style="width: 20%">
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    <a>
                      Team Hore
                    </a>
                    <br />
                    <small>
                      Created 01.05.2015
                    </small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../dist/img/avatar.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../dist/img/avatar2.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../dist/img/avatar3.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../dist/img/avatar4.png">
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress">
                    
                  </td>
                  <td class="project-state">
                    <span>Full</span>
                  </td>
                  <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="edit-mekanik.php?id=1">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" onclick="confirm('Hapus Team Hore?') && alert('Mekanik Team Hore berhasil dihapus!')">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    <a>
                      Team Sukses
                    </a>
                    <br />
                    <small>
                      Created 06.05.2017
                    </small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../dist/img/avatar.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../dist/img/avatar2.png">
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress">
                    
                  </td>
                  <td class="project-state">
                    <span>-2</span>
                  </td>
                  <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="edit-mekanik.php?id=2">
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
                  <td>
                    3
                  </td>
                  <td>
                    <a>
                      Team Alakadarnya
                    </a>
                    <br />
                    <small>
                      Created 09.07.2019
                    </small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../dist/img/avatar.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../dist/img/avatar2.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../dist/img/avatar3.png">
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress">
                    
                  </td>
                  <td class="project-state">
                    <span>-1</span>
                  </td>
                  <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="edit-mekanik.php?id=3">
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
              </tbody>
            </table>
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