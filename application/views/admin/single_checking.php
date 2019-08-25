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
        Single checking
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Single checking</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Main row -->
      <div class="row">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Candidate</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="inputUniversity">University</label>
                <input type="text" class="form-control" id="inputUniversity" placeholder="Enter university">
              </div>
              <div class="form-group">
                <label for="inputDepartment">Department</label>
                <input type="text" class="form-control" id="inputDepartment" placeholder="Enter Department">
              </div>
              <div class="form-group">
                <label for="inputDegree">Degree</label>
                <input type="text" class="form-control" id="inputDegree" placeholder="Enter Degree">
              </div>
              <div class="form-group">
                <label for="inputTwitter">Twitter</label>
                <input type="text" class="form-control" id="inputTwitter" placeholder="Enter Twitter">
              </div>
              <div class="form-group">
                <label for="inputFacebook">Facebook</label>
                <input type="text" class="form-control" id="inputFacebook" placeholder="Enter Facebook">
              </div>
              <div class="form-group">
                <label for="inputGithub">Github</label>
                <input type="text" class="form-control" id="inputGithub" placeholder="Enter Github">
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('admin/footer') ?>
</body>
</html>
