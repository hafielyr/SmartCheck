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
        <!--twitter-->
        <?php
             $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "smartcheck";

             // Create connection
             $conn = new mysqli($servername, $username, $password, $dbname);
             // Check connection
             if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

        ?>
        <?php
        $var_value = $_GET['inputTwitter'];

        // keys and tokens
        $consumer_key = '0CMWq5J8RYC90BcRwdTWxxrPp';
        $consumer_secret = 'Fe7TPG8EjxX8wPV3iMY5lKHm5IYo90aQv5oeRX3pMopqrhYmwU';
        $access_token = '285026167-BnLnNmohZbejpGUnQddVbNbQFddwM8nXN0lm21om';
        $access_token_secret = 'CR4fh421Zk4QrQQGuNi3TSYXEmk6dCpBgD4mGYLv7uh7E';

        //include library
        require __DIR__ . '/../../../assets/twitteroauth/autoload.php';
        use Abraham\TwitterOAuth\TwitterOAuth;

        // connect to API
        $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
        $connection->setTimeouts(100, 150);
        $content = $connection->get("account/verify_credentials");

        //Get tweets
        $user= $connection->get("users/show",["screen_name"=>$var_value]);
        $statuses = $connection->get("statuses/user_timeline",["screen_name"=>$var_value,"count"=>200,"include_rts"=>1,"tweet_mode"=>"extended","truncated"=>"false"]);

        if(!isset($statuses->errors)){
        $statuses_json = json_encode($statuses);
        //print_r($statuses_json);
        //print_r($user);
        //echo '<br>';
        echo '
        <div class="col-md-8">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user" >
            <!-- Add the bg color to the header using any of the bg-* classes -->';
            if (property_exists($user,'profile_banner_url')){
            echo '<div class="widget-user-header bg-black" style="background: url('.$user->profile_banner_url.') center center;">';
            }
            else {
              echo '<div class="widget-user-header bg-black" style="background: black center center;">';
            }
            echo ' <h3 class="widget-user-username">'.$user->screen_name.'</h3>
              <h5 class="widget-user-desc">'.$user->name.'</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="'.$user->profile_image_url.'" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">'.$user->friends_count.'</h5>
                    <span class="description-text">Following</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">'.$user->followers_count.'</h5>
                    <span class="description-text">Followers</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">'.$user->statuses_count.'</h5>
                    <span class="description-text">Tweets</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>';
        ?>

        <div class="col-md-8">
          <div class="box">
            <div class="box-header">

              <div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">«</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tbody><tr>
                  <th>Negative tweets</th>
                </tr>
        <?php
        $sql = "SELECT * FROM words";
        $result = $conn->query($sql);
        $rows = [];
        while($row = mysqli_fetch_array($result))
        {
          $rows[] = $row;
        }
        $positive_tweets = 0;
        $neutral_tweets = 0;
        $negative_tweets = 0;
        //print_r($statuses);
        foreach ($statuses as $key=>$value) {
          // Use preg_split() function
        $str_arr = preg_split ('/[\ \n\,]+/', $value->full_text);
        $score = 0;
        foreach($str_arr as $str_row){
          foreach ($rows as $word_row) {
               if (strcasecmp($str_row, $word_row["Word"]) == 0){
                 $score = $score + $word_row["Score"];
               }
          }
        }
        if ($score>0){$positive_tweets= $positive_tweets+1;}
        else if ($score==0){$neutral_tweets= $neutral_tweets+1;}
        else if ($score<-1){
            $negative_tweets = $negative_tweets + 1;

        if (property_exists($value, 'retweeted_status')) {

           echo '<tr>
           <td>'.$value->retweeted_status->full_text.'</td>
           </tr>';
         }
          else {
            echo '<tr>
            <td>'.$value->full_text.'</td>
            </tr>';
          }
        }
      }
        ?>
           </tbody></table>
        </div>
    <!-- /.box-body -->
       </div>
      </div>

      <div class="col-md-4" style="padding-left : 0px; float : right;">
       <div class="info-box bg-blue">
             <span class="info-box-icon"><i class="ion ion-ios-plus-outline"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">Positive tweets</span>
               <span class="info-box-number"><?php echo $positive_tweets;?></span>

               <div class="progress">
                 <div class="progress-bar" style="width: <?php echo $positive_tweets;?>%"></div>
               </div>
             </div>
             <!-- /.info-box-content -->
         </div>
         <div class="info-box bg-blue">
               <span class="info-box-icon"><i class="ion "></i></span>

               <div class="info-box-content">
                 <span class="info-box-text">Neutral</span>
                 <span class="info-box-number"><?php echo $neutral_tweets;?></span>

                 <div class="progress">
                   <div class="progress-bar" style="width: <?php echo $neutral_tweets;?>%"></div>
                 </div>
               </div>
               <!-- /.info-box-content -->
           </div>
         <div class="info-box bg-blue">
               <span class="info-box-icon"><i class="ion ion-ios-minus-outline"></i></span>

               <div class="info-box-content">
                 <span class="info-box-text">Negative tweets</span>
                 <span class="info-box-number"><?php echo $negative_tweets;?></span>

                 <div class="progress">
                   <div class="progress-bar" style="width: <?php echo $negative_tweets;?>%"></div>
                 </div>
               </div>
               <!-- /.info-box-content -->
           </div>
       </div>
     <?php }?>
        <!--/twitter-->
      </div>

      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('admin/footer') ?>
</body>
</html>
