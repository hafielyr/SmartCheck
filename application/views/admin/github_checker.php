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
        Github Check
        <small>applicant : <?php echo $applicant_name ?> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Github Check</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Main row -->
      <div class="row">    
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
                    <th>Followers</th>
                    <th>Github Score</th>
                    <th>Status</th>                                        
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">EDU1147</a></td>
                    <td>Github.com </td>                    
                    <td> <div class="sparkbar" data-color="#00a65a" data-height="20">
                      <?php echo  $data['followers']?>
                      </div> </td>   
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">
                      <?php echo  $data['score']?>
                      </div>
                    </td>
                    <td><span class="label label-success">checked</span></td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
              <div style="margin: 10px;">
            <img src=<?php echo base_url('contribution_hafielyr.png'); ?> width="687" height="193.5"  alt="Girl in a jacket">
</div>
            </div>
            <!-- /.box-footer -->

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->        

        
        <?php      foreach ($data['repositories'] as $row) {
          echo '<div class="col-md-6">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"></i> '.$row['name'].' ('.$row['language'] .')</li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1-1">
                  <b>'.$row['watchers'].' stars</b><br>

                  <tr><td>'.$row['description'].'</td></tr>

                  <br><a href='.$row['url'].'><b>Github link</b></a>
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
