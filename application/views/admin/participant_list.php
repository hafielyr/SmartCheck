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
        Applicants
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Applicants</li>
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
              <h3 class="box-title">Checking status</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Social Media Check</th>
                    <th>Education Check</th>
                    <th>Criminality Check</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Resa Rayasya </td>
                    <td><span class="label label-success">checked</span></td>
                    <td><span class="label label-success">checked</span></td>
                    <td><span class="label label-success">checked</span></td>
                    <td><span class="label label-primary">select</span></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Hahrul Bikmi </td>
                    <td><span class="label label-default">verification needed</span></td>
                    <td><span class="label label-default">verification needed</span></td>
                    <td><span class="label label-default">verification needed</span></td>
                    <td><span class="label label-primary">select</span></td>
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

        <div class="col-md-3">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Summary</h3>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a href="socialMediaCheck"><b>Social Media Check : </b>10 grey records <br><a/>
            <a href="eduCheck"><b>Education Check : </b>1 grey record <br></a>
            <a href="ltcriminalCheck"><b>Criminality Check : </b> grey record <br></a>
            </div>
            <!-- /.box-body -->
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
