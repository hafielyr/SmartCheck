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
      <h4>
      Massive Junior Programmer recruitment 2020
      </h4>
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
              <span class="info-box-number">Education Check</span>
              <span class="info-box-text label label-success">Enabled</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-navy"><i class="ion ion-ios-analytics-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-number"> </span>
              <span class="info-box-number">Criminal Records</span>
              <span class="info-box-text label label-success">Enabled</span>
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
              <span class="info-box-text label label-success">Disabled</span>
              
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
              <span class="info-box-text label label-success">Disabled </span>
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
              <span class="info-box-text label label-default">Disabled</span>              
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

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-grey"><i class="fa fa-github"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Github</span>
              <span class="info-box-text label label-success">Enabled</span>              
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
              <span class="info-box-text label label-default">Disabled</span>
              
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>

      <!-- /.row -->


      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Assessment Settings</h3>              
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
                    <th>Field</th>
                    <th>Criteria</th>
                    <th>Value</th>
                    <th>Score</th>
                    <th>Apply Labels</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">Education Deatils</a></td>
                    <td>Is Valid</td>
                    <td></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"></div>
                    </td>  
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"> <span class="label label-success">valid-education</span> </div>
                    </td>                  
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">Criminal Record</a></td>
                    <td>Exists</td>
                    <td></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"></div>
                    </td>  
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"> <span class="label label-warning">criminal-record{0}</span> </div>
                    </td>                  
                  </tr>              
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right"> Edit </a>
              
              <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-flat pull-right">Smart Generate</a>
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

