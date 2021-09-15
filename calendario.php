
		<!-- Main Wrapper -->
		<?php
    session_start();
    if(isset($_SESSION['nombreUsuario'])){
        $usuarioIngresado=$_SESSION['nombreUsuario'];
        echo "<h1></h1>";
    }else{
        header('location: index.php');
    }
    if(isset($_POST['btnCerrar'])){
        session_destroy();
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Calendario</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
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
                <div class="header-left">
                    <a href="home.php" class="logo">
						<img src="./imagen/tt.png" width="50" height="40" alt="">
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
                <div class="page-title-box">
					<h3>Fullparking</h3>
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
								<input class="form-control" type="text" placeholder="Buscar en Google">
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
							</li>
							<li class="submenu">
								<a href="#" ><i class="la la-dashboard"></i> <span> Registro Vehiculos</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" class="active" href="./Registrovehiculos/registro_vehiculos.php">Registrar Vehiculo</a></li>
							
								</ul>
							</li>
							
							
							<li class="submenu">
								<a href="#" ><i class="la la-user"></i> <span> Registro Clientes</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="./Clientes/clientes.php">Registrar Cliente</a></li>
									
								</ul>
							</li>
						
						
							<li class="submenu">
								<a href="#" "><i class="la la-money"></i> <span> Tarifas </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="./Tarifas/tarifas.php"> Cambio de Tarifas </a></li>
								
								</ul>
							</li>
							
							<li class="submenu">
								<a href="#" ><i class="la la-edit"></i> <span> Servicio Adicional </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="./Adicionales/adicionales.php"> Agregar Servicio </a></li>
								</ul>
							</li>
							
							
							
							
							<li class="submenu">
								<a href="#" ><i class="la la-file-text"></i> <span> Factura </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="./Factura/factura.php"> Generar Factura </a></li>
								
								</ul>
							</li>
							
							<li class="submenu">
								<a href="#" ><i class="la la-hand-o-up"></i> <span> Contactanos </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="subscriptions.html"> Luis Oicata </a></li>
									<li><a class="noti-dot" href="subscriptions-company.html"> Omar Giovanny </a></li>
									<li><a class="noti-dot" href="subscribed-companies.html"> Pagina Web </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-edit"></i> <span> Suscripcion </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot"  href="suscripcion.php"> Suscribete </a></li>
									<li><a class="noti-dot"  href="task.php"> tas </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-table"></i> <span> Calendario </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" href="calendario.php"> Calendario </a></li>
								</ul>
							</li>
							<li class="submenu">
							<li><a href="#">
								
								<i class="la la-times-circle"></i> <span>Salir</span></a></li>
													
								</ul>
							
							</li>
							
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title" >Calendario</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">panel Administrativo</a></li>
									<li class="breadcrumb-item active">Events</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_event"><i class="fa fa-plus"></i> Add Event</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card mb-0">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
										
											<!-- Calendar -->
											<div id="calendar"></div>
											<!-- /Calendar -->
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
			
				<!-- Add Event Modal -->
				<div id="add_event" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Event</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label>Event Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>Event Date <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">Category</label>
										<select class="select form-control">
											<option>Danger</option>
											<option>Success</option>
											<option>Purple</option>
											<option>Primary</option>
											<option>Pink</option>
											<option>Info</option>
											<option>Inverse</option>
											<option>Orange</option>
											<option>Brown</option>
											<option>Teal</option>
											<option>Warning</option>
										</select>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Event Modal -->
				
				<!-- Event Modal -->
				<div class="modal custom-modal fade" id="event-modal">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Event</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body"></div>
							<div class="modal-footer text-center">
								<button type="button" class="btn btn-success submit-btn save-event">Create event</button>
								<button type="button" class="btn btn-danger submit-btn delete-event" data-dismiss="modal">Delete</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Event Modal -->
				
				<!-- Add Category Modal-->
				<div class="modal custom-modal fade" id="add-category">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Add a category</h4>
							</div>
							<div class="modal-body p-20">
								<form>
									<div class="row">
										<div class="col-md-6">
											<label class="col-form-label">Category Name</label>
											<input class="form-control" placeholder="Enter name" type="text" name="category-name">
										</div>
										<div class="col-md-6">
											<label class="col-form-label">Choose Category Color</label>
											<select class="form-control" data-placeholder="Choose a color..." name="category-color">
												<option value="success">Success</option>
												<option value="danger">Danger</option>
												<option value="info">Info</option>
												<option value="pink">Pink</option>
												<option value="primary">Primary</option>
												<option value="warning">Warning</option>
												<option value="orange">Orange</option>
												<option value="brown">Brown</option>
												<option value="teal">Teal</option>
											</select>
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-danger save-category" data-dismiss="modal">Save</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Category Modal-->
				
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Calendar JS -->
		<script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/fullcalendar.min.js"></script>
        <script src="assets/js/jquery.fullcalendar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>