<?php
    session_start();
    if(isset($_SESSION['nombreUsuario'])){
        $usuarioIngresado=$_SESSION['nombreUsuario'];
    }else{
        header('location: index.php');
    }
    if(isset($_POST['btnCerrar'])){
        session_destroy();
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
		
        <title>FullParking</title>
		


		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/fn.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Calendar CSS -->
		<link rel="stylesheet" href="assets/css/fullcalendar.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		

		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
	
    <body>

		<!-- Main---------------------------------------------------------------------------------- Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="page-title-box">
                    <a href="home.php" class="logo">
					<h3>FullParking</h3>
					</a>
                </div>
				<!-- /Logo -->
				<a id="toggle_btn" href="javascript:void(0);">
					
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				<!-- Header Title -->
                <div class="header-left">
				
					
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Buscador -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="https://www.google.es/" target="_blank">
								<input class="form-control" type="text" placeholder="Buscar">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<!-- /buscador -->
				


					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="./imagen/user avatar.png" alt="">
							<span class="status online"></span></span>
							<span>Administrador</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html">Mi Perfil</a>
							<a class="dropdown-item" href="calendario.php">Calendario</a>
							<form method="POST">
								<?php 
									if($_SESSION['nombreUsuario']=="")
									{
										?>
										<button type="submit" class="dropdown-item" name="btnCerrar" >Cerrar Sesión </button>
									<?php
									}
									else
									{
										?>
								<button type="submit" class="dropdown-item" name="btnCerrar" >Cerrar Sesión</button>
									<?php
									} 
								?>
								</form> 
						</div>
						
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.html">Mi Perfil</a>
						<a class="dropdown-item" href="settings.html">Configuracion</a>
						<form method="POST">
								<?php 
									if($_SESSION['nombreUsuario']=="")
									{
										?>
										<button type="submit" class="dropdown-item" name="btnCerrar" >Cerrar Sesión</button>
									<?php
									}
									else
									{
										?>
								<button type="submit" class="dropdown-item" name="btnCerrar" >Cerrar Sesión</button>
									<?php
									} 
								?>
								</form> 

					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Menu</span>
								<li> 
								<a href="home.php"><i class="la la-home"></i> <span>Pagina Principal</span></a>
							</li>

								<li class="submenu">
								<a href="#"><i class="la la-key"></i> <span> Acceso al Sistema </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="admin.php"> Registrar Acceso  </a></li>
									<li><a class="noti-dot" href="listar_Admin.php"> Lista de Acceso </a></li>
									
		
								</ul>
							</li>

							</li>
						
							<li class="submenu">
								<a href="#" ><i class="la la-user"></i> <span> Registro Clientes</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="clientes.php">Registrar Cliente</a></li>
									<li><a class="noti-dot" href="listarclientes.php">Listado Cliente</a></li>
									<li><a class="noti-dot" href="Convenios/index.php">Convenios</a></li>

								</ul>
							</li>
						
						
							<li class="submenu">
								<a href="#" ><i class="la la-money"></i> <span> Tarifas </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="Tarifas.php"> Cambio de Tarifas </a></li>
									<li><a class="noti-doc" href="listar_Tarifas.php"> Lista de Tarifas </a></li>
									<li><a class="noti-dot" href="Detalle tarifas/index.php"> Detalle tarifas</a></li> <!--solo  acceso para admi-->
								
								</ul>
							</li>
							
							<li class="submenu">
								<a href="#" ><i class="la la-edit"></i> <span> Servicio Adicional </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="adicionales.php"> Agregar Servicio </a></li>
									<li><a class="noti-dot" href="listarAdicionales.php"> Lista Adicionales </a></li>
									<li><a class="noti-dot" href="Detalle adicionales/index.php"> Detalle adicionales</a></li> <!--solo  acceso para admi-->
								</ul>
							</li>
							
							
							
							
							<li class="submenu">
								<a href="#" ><i class="la la-file-text"></i> <span> Factura </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="factura.php"> Registrar Factura </a></li>
									<li><a class="noti-dot" href="listar_Factura.php"> Listado Facturas </a></li>
								</ul>
							</li>
							

							<li class="submenu">
							<a href="#" ><i class="la la-box"></i> <span> Caja </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="index_caja.php"> caja </a></li>
									
								</ul>
							</li>

							<li class="submenu">
							<a href="#" ><i class="la la-car"></i> <span> Espacios </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="Espacios/index.php"> Espacios </a></li>
									
								</ul>
							</li>


							<li class="submenu">
								<a href="#" ><i class="la la-hand-o-up"></i> <span> Contactanos </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="subscriptions.html"> Luis Oicata </a></li>
									<li><a class="noti-dot" href="subscriptions-company.html"> Giovanni Sierra Rico </a></li>
									<li><a class="noti-dot" href="subscribed-companies.html"> Pagina Web </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-edit"></i> <span> Suscripcion </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot"  href="suscripcion.php"> Suscribete </a></li>
									
								</ul>
							</li>
							<!--<li class="submenu"> 
								<a href="#"><i class="la la-table"></i> <span> Calendario </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="calendario.php"> Calendario </a></li>
								</ul>
							</li> -->

							<li class="submenu">
								<a href="#"><i class="la la-table"></i> <span> Mensualidades </span> <span class="menu-arrow"></span></a> <!--solo  acceso para admi-->
								<ul style="display: none;">
									<li><a class="noti-dot" href="Mensualidades/index.php"> Mensualidades </a></li>
								</ul>
								</li>
							<!--<li class="submenu">
							<li><a href="#">
								
								<i class="la la-times-circle"></i> <span>Salir</span></a></li>
							
								</ul>
							
							</li>
							
							</li>-->
						</ul>
					</div>
                </div>
            </div>
            <div class="page-wrapper">
            