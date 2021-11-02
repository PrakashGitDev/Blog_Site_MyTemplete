<?php
require('../includes/db.php');
require('../includes/function.php');

if (!isset($_SESSION['isUserLoggedIn'])) {
  header('location:login.php');
}
$admin=getadmininfo($db,$_SESSION['email']);


?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>MyBlog-Admin Panel</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Blog <span class="lite">Admin</span></a>
      <!--logo end-->

     
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="">
                            </span>
                            <span class="username"><?=$admin['full_name']?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Add Post</span>
                      </a>
          </li>
          <li>
            <a class="" href="index.php?managepost">
                          <i class="icon_document_alt"></i>
                          <span>Manage Post</span>  
                      </a>
          </li>
          
          <li>
            <a class="" href="index.php?managecategory">
                          <i class="icon_tags"></i>
                          <span>Manage Category</span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
<?php
if (isset($_GET['managepost'])) {
  include('managepost.php');
}
else if(isset($_GET['managecategory'])) { 
  include('category.php');
}
else{ 
 if(isset($_GET['id'])){
                              $id=$_GET['id']; 
                              $getpostdata=getpostbyid($db,$id); 
                        } 

?> 
        <!-- project team & activity start -->
        </div><br><br>


         <div class="row">
              <!-- Bootsrep Editor -->
              <!-- CKEditor -->

              <div class="col-lg-12 col-md-12">
                <section class="panel">
                  <header class="panel-heading">
                    <?php
                    if (isset($id)) {
                      echo "Edit Post";
                    }else{
                      echo "Add Post";
                    }
                    ?>
                  </header>
                  <div class="panel-body">
                    <div class="form">

                      <form 
                      <?php
                      if (isset($id)) {
                        $_SESSION['id']=$id;
                         echo 'action="../includes/editpost.php"';
                       }else{
                         echo 'action="../includes/addpost.php"';
                       }
                      ?>
                       enctype="multipart/form-data" method="post" class="form-horizontal">
                        <div class="form-group">
                          <div class="col-sm-12">
                            <label>Post Title</label>
                            <input type="text" class="form-control" name="post_title" 
                            value = "<?php 
                            
                            if(isset($_GET['id'])){
                              foreach($getpostdata as $postdata){
                                echo $postdata['title'];
                              }
                            }
                            ?>" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <label>Post Excerpt</label>
                            <input type="text" class="form-control" name="post_excerpt" 
                            value = "<?php 
                            
                            if(isset($_GET['id'])){
                              foreach($getpostdata as $postdata){
                                echo $postdata['excerpt'];
                              }
                            }
                            ?>" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                            <label>Post Content</label>
                            <textarea class="form-control ckeditor" name="post_content" rows="6"><?php 
                            
                            if(isset($_GET['id'])){
                              foreach($getpostdata as $postdata){
                                echo $postdata['content'];
                              }
                            }
                            ?></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-6">
                          <label>Select Category</label>
                          <select name="post_category"class="form-control">
<?php


if (isset($id)) {
  foreach($getpostdata as $postdata){

?>                        <option value="<?=$postdata['id']?>"><?=getcategory($db,$postdata['cat_id'])?></option> 
<?php
  }
}
$numb=getpostcatid($db,$_GET['id']);
$categories = getallcategory($db);
  foreach($categories as $ct) {
    if($ct['cat_id']==$numb) {continue;}
?>ss
                          <option value="<?=$ct['cat_id']?>"><?=$ct['cat_name']?></option>


<?php
 }

?>
                            </select>
                          </div>
                          <div class="col-sm-6">
                            <label>Photos</label>
                            <input type="file" class="form-control" accept="image/*" name="post_image[]" value="sumbit"> 
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-2">
                            <input value="submit" type="submit" class="btn btn-primary" name="addpost">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
              </div>
            </div>
        <!-- project team & activity end -->
  <?php
}
?>


      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <div>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="js/owl.carousel.js"></script>

    <!--custome script for all page-->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/form-component.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
