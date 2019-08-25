test
<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('admin/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('admin/leftbar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Education Check
        <small>applicant : Hahrul Bikmi </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Education Check</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Main row -->
      <div class="row">
        <?php $json = file_get_contents(__DIR__ . '/../../json/mendikbud.json');
              $data = json_decode($json,true);
        ?>

        <div class="col-md-8">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Status</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Checked Item</th>
                    <th>Status</th>
                    <th>Result</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">EDU1147</a></td>
                    <td>Ristekdikti </td>
                    <td><span class="label label-success">checked</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">
                        0 Incorrect Data
                      </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-8">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-condensed">
                  <thead>
                  <tr>
                    <th style="width: 200px">Ristekdikti</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php echo '
                  <tr>
                    <td>Nama </td>
                    <td>: '.$data['Nama'].'</td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin </td>
                    <td>: '.$data['Jenis Kelamin'].'</td>
                  </tr>
                  <tr>
                    <td>Perguruan Tinggi </td>
                    <td>: '.$data['Perguruan Tinggi'].'</td>
                  </tr>
                  <tr>
                    <td>Program Studi </td>
                    <td>: '.$data['Program Studi'].'</td>
                  </tr>
                  <tr>
                    <td>Nomor Induk Mahasiswa </td>
                    <td>: '.$data['Nomor Induk Mahasiswa'].'</td>
                  </tr>
                  <tr>
                    <td>Semester Awal </td>
                    <td>: '.$data['Semester Awal'].'</td>
                  </tr>
                  <tr>
                    <td>Status Awal Mahasiswa </td>
                    <td>: '.$data['Status Awal Mahasiswa'].'</td>
                  </tr>
                  <tr>
                    <td>Status Mahasiswa Saat ini </td>
                    <td>: '.$data['Status Mahasiswa Saat ini'].'</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lulus </td>
                    <td>: '.$data['Tanggal Lulus'].'</td>
                  </tr>
                  <tr>
                    <td>Nomor Ijazah </td>
                    <td>: '.$data['Nomor Ijazah'].'</td>
                  </tr>';
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('admin/footer') ?>
</body>
</html>
