<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Bienvenido</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">


  
  <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../assets/css/_all-skins.min.css">    

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- header -->
  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-lg"><b>Admin</b></span>
      <span class="logo-mini"><b>Admin</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="../img/periyar_univ.png" class="user-image" alt="User Image"> -->
              <span class="hidden-xs"><?php echo $_SESSION['user']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../img/photo.jpeg " class="img-circle" alt="User Image">
                <h2><?php echo $_SESSION['user']; ?></h2>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="?c=login&a=CerrarSesion" class="btn btn-default btn-flat">Cerrar Sesion</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- sidebar -->
  <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu">
          <li><a href=""><i class="fa fa-circle-o text-green "></i> <span>item 1</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-green "></i> <span>item 2</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-green "></i> <span>item 3</span></a></li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Mantenimientos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
      
        </ul>
      </section>
  </aside>

  <!-- Content -->
  <div class="content-wrapper">
       <section class="content">
