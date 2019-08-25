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
        Civil Litigation or Criminal Check
        <small>applicant :<?php echo 'test' ?> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Civil Litigation or Criminal Check</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Main row -->
      <div class="row">     

        <div class="col-md-8"
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
                    <td><a href="pages/examples/invoice.html">CT9842</a></td>
                    <td>Criminal Law</td>
                    <td><span class="label label-success">checked</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">
                        <?php
                              echo $data['count'].' records found';
                        ?>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">CT1848</a></td>
                    <td>Civil Law</td>
                    <td><span class="label label-success">checked</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">0 record found</div>
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

        <div class="col-md-4">
          <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="ion ion-ios-minus-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Criminality</span>
              <span class="info-box-number">
                <?php
                      echo $data['count'].' records found';
                ?>
              </span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $data['count'].'%' ?>"></div>
              </div>
              <span class="progress-description">
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

          <?php      foreach ($data['results'] as $row) {
          echo '<div class="col-md-6">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"></i> '.substr($row['header'],0,30).'...'.'</li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1-1">
                  <b>Summary:</b><br>

                  <tr><td>'.$row['summary'].'</td></tr>

                  <br><a href='.$row['link'].'><b>Details</b></a>
              </div>
              </div>
            </div>
          </div>';
          } ?>
          
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
