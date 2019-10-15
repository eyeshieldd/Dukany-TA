<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dukany Adventure</title>

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" /> 
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url() ?>/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="<?php echo base_url() ?>/assets/stylesheet" type="text/css" href="<?php echo base_url() ?>/ssets/css/zabuto_calendar.css">
  <link rel="<?php echo base_url() ?>/assets/stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/css/style-responsive.css" rel="stylesheet">
  <script src="<?php echo base_url() ?>/assets/lib/chart-master/Chart.js"></script>
  <!-- =======================================================
    Template Name: ui
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="<?php echo base_url() ?>" class="logo"><b>DUKANY<span>adventure</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">ui Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo base_url().'auth/logout'?>">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse " id="main-menu">>
        <!-- sidebar menu start-->
         
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?php echo base_url() ?>assets/img/ui-sam.jpg" class="img-rounded" width="140"></a></p>
          <h5 class="centered">
         <?php $rows = $this->db->query("SELECT *FROM kasir WHERE username='".$this->session->userdata('username')."'")->row_array(); ?>
         <?php echo $rows['nama_lengkap']; ?>
          </h5>
            
          <li class="mt">
        
            <a class="active" href="<?php echo base_url().'dashboard' ?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <!-- <li class="sub-menu">
            <a href="<?php echo base_url().'kategori'?>">
              <i class="fa fa-archive"></i>
              <span>Kategori Barang</span>
              </a>
          
          </li> -->
          <li class="sub-menu">
            <a href="<?php echo base_url().'dashboard' ?>">
              <i class="fa fa-bar-chart-o"></i>
              <span>Data Barang</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url().'barangjual'?>">Barang Jual</a></li>
              <li><a href="<?php echo base_url().'barangsewa'?>">Barang Sewa</a></li>
          
            </ul>
          </li>
               <!--<li class="sub-menu">
            <a href="<?php echo base_url().'supplier'?>">
              <i class="fa fa-users"></i>
              <span>supplier</span>
              </a>-->
          
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url().'kasir'?>">
              <i class="fa fa-user"></i>
              <span>Kasir</span>
              </a>


               </li>
          <li class="sub-menu">
            <a href="<?php echo base_url().'supplier'?>">
              <i class="fa fa-users"></i>
              <span>Supplier</span>
              </a>
           
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url().'dashboard' ?>">
              <i class="fa fa-tasks"></i>
              <span>Transaksi</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url().'transaksijual'?>">Transaksi penjualan</a></li>
              <li><a href="<?php echo base_url().'transaksisewa'?>">Transaksi Sewa</a></li>
             
            </ul>
          </li>
          </li>
          <li class="sub-menu">
            <a href="<?php echo base_url().'dashboard' ?>">
              <i class="fa fa-tasks"></i>
              <span>Laporan</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url().'laporan '?>">Transaksi penjualan</a></li>
              <li><a href="<?php echo base_url().'laporansewa'?>">Transaksi Sewa</a></li>
             
            </ul>
          </li>
          <li>
            <a href="<?php echo base_url().'auth/logout'?>"">
              <i class="fa fa-sign-out"></i>
              <span>Logout </span>
            
              </a>
          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
     
            </div>
            <!-- /. PAGE INNER  -->
        </div>
    </aside>



    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
              
         <section id="main-content">
      <section class="wrapper">
         <div class="alert alert-success"  style="border-radius:0px">
      <img class="pull-left" style="width:120px; margin-right:10px; border:1px solid #e3e3e3" src="http://localhost/pos1/assets/img/logo.png">
        <h3 style="margin:0px;"><b>Dukany Adventure</b></h3>
        <p style="color:#000">Jl. Ringroad Utara No.274, Ngropoh, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>

      </div>
        <div id="page-wrapper" >
            <div id="page-inner">
                    <?php echo $contents; ?>
            </div>
            <!--CUSTOM CHART START -->
            
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
   <br>
   <br>
      <br>
   <br>
      <br>
   <br>
      <br>
   <br>
      <br>
   <br>
      <br>
   <br>
      <br>
   <br>
   <br>
    <footer class="site-footer">
      <div class="text-center">
        <p>
                       &copy; Copyrights <strong>Dukanyadventure</strong>. All Rights Reserved
        </p>
        <div class="credits">
      
     
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url() ?>/assets/lib/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url() ?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="<?php echo base_url() ?>/assets/include" type="text/javascript" src="assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?php echo base_url() ?>/assets/lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>/assets/lib/jquery.sparkline.js"></script>
  <script src="<?php echo base_url() ?>/assets/lib/common-scripts.js"></script>
  <script type="<?php echo base_url() ?>/assets/text/javascript" src="<?php echo base_url() ?>/assets/assets/lib/gritter/js/jquery.gritter.js"></script>
  <script type="<?php echo base_url() ?>/assets/text/javascript" src="<?php echo base_url() ?>/assets/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="<?php echo base_url() ?>/assets/lib/sparkline-chart.js"></script>
  <script src="<?php echo base_url() ?>/assets/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
   <script>
   <script src="<?php echo base_url() ?>/assets/lib/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url() ?>/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.js"></script>

    <script src="<?php echo base_url() ?>/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
function confirmDialog() {
    return confirm("Apakah kamu yakin ingin menghapus data ini?")
}
</script>

<script>
function coba(){
swal("Good job!", "You clicked the button!", "success")
}
</script>

$(document).ready(function () {
                $('#coba').dataTable();
            });
    </script>