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
        Settings        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Social Media Check</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-navy"><i class="ion ion-ios-analytics-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-number"> </span>
              <span class="info-box-number">Summary</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box"><a href="twitterCheck">
            <span class="info-box-icon bg-aqua"><i class="fa fa-twitter"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Twitter</span>
              <span class="info-box-text label label-success">Active</span>
              <span class="info-box-text">2 settings </span>
            </div>
            <!-- /.info-box-content -->
            </a>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box"><a href="facebookCheck">
            <span class="info-box-icon bg-blue"><i class="fa fa-facebook"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Facebook</span>
              <span class="info-box-text label label-success">Enabled </span>
            </div>
            <!-- /.info-box-content -->
          </a>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-linkedin"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Linkedin</span>
              <span class="info-box-text label label-default">Disabled</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-quora"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Quora</span>
              <span class="info-box-number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-grey"><i class="fa fa-stack-overflow"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Stack Overflow</span>
              <span class="info-box-text label label-default">Disabled</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-instagram"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Instagram</span>
              <span class="info-box-text label label-default">Disabled</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-black"><i class="fa fa-medium"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Medium</span>
              <span class="info-box-text label label-default">Not-active</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
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
                    <th>Social Media</th>
                    <th>Status</th>
                    <th>Negativity</th>
                    <th>Positivity</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                    <td>Twitter</td>
                    <td><span class="label label-warning">verification needed</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">150</div>
                    </td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">70</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                    <td>Facebook</td>
                    <td><span class="label label-warning">verification needed</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">25</div>
                    </td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">69</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>Linkedin</td>
                    <td><span class="label label-success">checked</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">0</div>
                    </td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">120</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>Quora</td>
                    <td><span class="label label-success">checked</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">0</div>
                    </td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">55</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                    <td>Stack Overflow</td>
                    <td><span class="label label-warning">verification needed</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">0</div>
                    </td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">32</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>Instagram</td>
                    <td><span class="label label-success">checked</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">0</div>
                    </td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">0</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                    <td>Medium</td>
                    <td><span class="label label-success">checked</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">0</div>
                    </td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">200</div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Details</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Indicators</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
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
