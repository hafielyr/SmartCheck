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
        Social Media Check
        <small>applicant : Hahrul Bikmi </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Social Media Check</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


      <!-- Main row -->
      <div class="row">
        <div class="form-group">
                  <label>Date range:</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
        <div class="col-md-6">
                  <!-- Box Comment -->
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-circle" src="<?php echo base_url('assets/template/back/dist') ?>/img/bahrul.png" alt="User Image">
                        <span class="username"><a href="#">Hahrul Bikmi</a></span>
                        <span class="description">Shared publicly - 7:30 PM 21/1/2019</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Mark as Positive">
                          <i class="fa fa-circle-o"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Mark as Negative"><i class="fa fa-times"></i></button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- post text -->
                      <p>wtf this is suck. Prabowi suck. I love Indonesia. Save Papua.</p>

                      <p>#2019GantiBaju</p>

                      <!-- Attachment -->
                      <div class="attachment-block clearfix">
                        <img class="attachment-img" src="<?php echo base_url('assets/template/back/dist') ?>/img/freeport.jpg" alt="Attachment Image">

                        <div class="attachment-pushed">
                          <h4 class="attachment-heading"><a href="http://www.lipsum.com/">No big revenue from Freeport for next three years: Minister</a></h4>

                          <div class="attachment-text">
                            State-Owned Enterprises Minister Rini Soemarno has said the government does not expect big revenue from gold and copper miner PT Freeport Indonesia (PTFI) in the next three years, following a US$3.85 billion divestment deal.... <a href="#">more</a>
                          </div>
                          <!-- /.attachment-text -->
                        </div>
                        <!-- /.attachment-pushed -->
                      </div>
                      <!-- /.attachment-block -->

                      <!-- Social sharing buttons -->
                      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                      <span class="pull-right text-muted">45 likes - 2 comments</span>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer box-comments">
                      <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="<?php echo base_url('assets/template/back/dist') ?>/img/reza.jpg" alt="User Image">

                        <div class="comment-text">
                              <span class="username">
                                Resa Rayaza
                                <span class="text-muted pull-right">8:03 PM 21/1/2019</span>
                              </span><!-- /.username -->
                          No, you suck #Prabowi2Periode
                        </div>
                        <!-- /.comment-text -->
                      </div>
                      <!-- /.box-comment -->
                      <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="<?php echo base_url('assets/template/back/dist') ?>/img/hafi.jpg" alt="User Image">

                        <div class="comment-text">
                              <span class="username">
                                Yusuf Risyana
                                <span class="text-muted pull-right">8:05 PM 21/1/2019</span>
                              </span><!-- /.username -->
                          Chill guys, we need to be wise in social media :)
                        </div>
                        <!-- /.comment-text -->
                      </div>
                      <!-- /.box-comment -->
                    </div>
                    <!-- /.box-footer -->
                    <div class="box-footer">
                      <form action="#" method="post">
                        <img class="img-responsive img-circle img-sm" src="<?php echo base_url('assets/template/back/dist') ?>/img/ulin.jpg" alt="Alt Text">
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class="img-push">
                          <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                        </div>
                      </form>
                    </div>
                    <!-- /.box-footer -->
                  </div>
                  <!-- /.box -->
                </div>
                <div class="col-md-6">
                          <!-- Box Comment -->
                          <div class="box box-widget">
                            <div class="box-header with-border">
                              <div class="user-block">
                                <img class="img-circle" src="<?php echo base_url('assets/template/back/dist') ?>/img/bahrul.png" alt="User Image">
                                <span class="username"><a href="#">Hahrul Bikmi</a></span>
                                <span class="description">Shared publicly - 7:30 PM 11/1/2017</span>
                              </div>
                              <!-- /.user-block -->
                              <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Mark as Positive">
                                  <i class="fa fa-circle-o"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Mark as Negative"><i class="fa fa-times"></i></button>
                              </div>
                              <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <!-- post text -->
                              <p>How many cops does it take to change a light bulb? One, unless it's a black bulb, then he'll call for backup!</p>

                              <!-- Social sharing buttons -->
                              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                              <span class="pull-right text-muted">5 likes - 0 comments</span>
                            </div>
                            <!-- /.box-body -->

                            <!-- /.box-footer -->
                            <div class="box-footer">
                              <form action="#" method="post">
                                <img class="img-responsive img-circle img-sm" src="<?php echo base_url('assets/template/back/dist') ?>/img/ulin.jpg" alt="Alt Text">
                                <!-- .img-push is used to add margin to elements next to floating images -->
                                <div class="img-push">
                                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                </div>
                              </form>
                            </div>
                            <!-- /.box-footer -->
                          </div>
                          <!-- /.box -->
                        </div>
                <div class="col-md-6">
                          <!-- Box Comment -->
                          <div class="box box-widget">
                            <div class="box-header with-border">
                              <div class="user-block">
                                <img class="img-circle" src="<?php echo base_url('assets/template/back/dist') ?>/img/bahrul.png" alt="User Image">
                                <span class="username"><a href="#">Hahrul Bikmi</a></span>
                                <span class="description">Shared publicly - 7:30 PM 11/1/2010</span>
                              </div>
                              <!-- /.user-block -->
                              <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Mark as Positive">
                                  <i class="fa fa-circle-o"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Mark as Negative"><i class="fa fa-times"></i></button>
                              </div>
                              <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <!-- post text -->
                              <p>C1nt4 !ny m3MbuuNuhqu,,,</p>

                              <!-- Social sharing buttons -->
                              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                              <span class="pull-right text-muted">5 likes - 0 comments</span>
                            </div>
                            <!-- /.box-body -->

                            <!-- /.box-footer -->
                            <div class="box-footer">
                              <form action="#" method="post">
                                <img class="img-responsive img-circle img-sm" src="<?php echo base_url('assets/template/back/dist') ?>/img/ulin.jpg" alt="Alt Text">
                                <!-- .img-push is used to add margin to elements next to floating images -->
                                <div class="img-push">
                                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                </div>
                              </form>
                            </div>
                            <!-- /.box-footer -->
                          </div>
                          <!-- /.box -->
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
