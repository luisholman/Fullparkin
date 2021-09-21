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
        <title>Subscriptions - HRMS admin template</title>
		
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
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html">Mi Perfil</a>
							<a class="dropdown-item" href="calendario.php">Calendario</a>
							<form method="POST">
								<?php 
									if($_SESSION['nombreUsuario']=="luis@gmail.com")
									{
										?>
										<button type="submit" class="dropdown-item" name="btnCerrar" >Cerrar Sesión oicata</button>
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
									if($_SESSION['nombreUsuario']=="luis@gmail.com")
									{
										?>
										<button type="submit" class="dropdown-item" name="btnCerrar" >Cerrar Sesión oicata</button>
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
									
									<li class="submenu">
									<a href="#" ><i class="la la-dashboard"></i> <span> Espacios vehiculos</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot" class="active" href="./Espacios/index.php">Espacios Vehiculo</a></li>
							
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
									<li><a class="noti-dot" href="subscriptions-company.html"> Giovanni sierra Rico</a></li>
									<li><a class="noti-dot" href="subscribed-companies.html"> Pagina Web </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-edit"></i> <span> Suscripcion </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="noti-dot"  href="suscripcion.php"> Suscribete </a></li>
									<!--<li><a class="noti-dot"  href="task.php"> tas </a></li>-->
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
						
						<div class="row">
							<div class="col">
								<h3 class="page-title">Subscripciones</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Panel Administrativo</a></li>
									<li class="breadcrumb-item active">Subscriptions</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_plan"><i class="fa fa-plus"></i> Adic Subscripcion</a>
							</div>
						</div>
		  
				
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-lg-10 mx-auto">
						
							<!-- Plan Tab -->
							<div class="row justify-content-center mb-4">
								<div class="col-auto">
									<nav class="nav btn-group">
										<a href="#monthly" class="btn btn-outline-secondary active show" data-toggle="tab">Plan Mensual</a>
										<a href="#annual" class="btn btn-outline-secondary" data-toggle="tab">Plan Anual</a>
									</nav>
								</div>
							</div>
							<!-- /Plan Tab -->

							<!-- Plan Tab Content -->
							<div class="tab-content">
							
								<!-- Monthly Tab -->
								<div class="tab-pane fade active show" id="monthly">
								
									<div class="row mb-30 equal-height-cards">
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Free</h3>
														<span class="display-4">$0</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>1 User</b></li>
														<li><i class="fa fa-check"></i> 5 Projects </li>
														<li><i class="fa fa-check"></i> 5 GB Storage</li>
														<li><i class="fa fa-check"></i> Unlimited Message</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Professional</h3>
														<span class="display-4">$21</span>
														<span>/mo</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>30 Users</b></li>
														<li><i class="fa fa-check"></i> 50 Projects</li>
														<li><i class="fa fa-check"></i> 100 GB Storage</li>
														<li><i class="fa fa-check"></i> Unlimited Message</li>
														<li><i class="fa fa-check"></i> 24/7 Customer Support</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Enterprise</h3>
														<span class="display-4">$38</span>
														<span>/mo</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>Unlimited Users </b></li>
														<li><i class="fa fa-check"></i> Unlimited Projects</li>
														<li><i class="fa fa-check"></i> 500 GB Storage</li>
														<li><i class="fa fa-check"></i> Unlimited Message</li>
														<li><i class="fa fa-check"></i> Voice and Video Call</li>
														<li><i class="fa fa-check"></i> 24/7 Customer Support</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Monthly Plan Details -->
									<div class="row">
										<div class="col-md-12">
											<div class="card card-table mb-0">
												<div class="card-header">
													<h4 class="card-title mb-0">Plan Details</h4>
												</div>
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Plan</th>
																	<th>Plan Type</th>
																	<th>Create Date</th>
																	<th>Modified Date</th>
																	<th>Amount</th>
																	<th>Subscribed Users</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Free Trial</td>
																	<td>Monthly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>Free</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">30 Users</a></td>
																</tr>
																<tr>
																	<td>Professional</td>
																	<td>Monthly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>$21</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">97 Users</a></td>
																</tr>
																<tr>
																	<td>Enterprise</td>
																	<td>Monthly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>$38</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">125 Users</a></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Monthly Plan Details -->
								
								</div>
								<!-- /Monthly Tab -->
								
								<!-- Annual Plan Tab -->
								<div class="tab-pane fade" id="annual">
									<div class="row mb-30 equal-height-cards">
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Free</h3>
														<span class="display-4">$0</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>1 User</b></li>
														<li><i class="fa fa-check"></i> 5 Projects </li>
														<li><i class="fa fa-check"></i> 5 GB Storage</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Professional</h3>
														<span class="display-4">$199</span>
														<span>/mo</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>30 Users</b></li>
														<li><i class="fa fa-check"></i> 50 Projects</li>
														<li><i class="fa fa-check"></i> 100 GB Storage</li>
														<li><i class="fa fa-check"></i> Unlimited Message</li>
														<li><i class="fa fa-check"></i> 24/7 Customer Support</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card pricing-box">
												<div class="card-body d-flex flex-column">
													<div class="mb-4">
														<h3>Enterprise</h3>
														<span class="display-4">$399</span>
														<span>/mo</span>
													</div>
													<ul>
														<li><i class="fa fa-check"></i> <b>Unlimited Users </b></li>
														<li><i class="fa fa-check"></i> Unlimited Projects</li>
														<li><i class="fa fa-check"></i> 500 GB Storage</li>
														<li><i class="fa fa-check"></i> Unlimited Message</li>
														<li><i class="fa fa-check"></i> Voice and Video Call</li>
														<li><i class="fa fa-check"></i> 24/7 Customer Support</li>
													</ul>
													<a href="#" class="btn btn-lg btn-secondary mt-auto" data-toggle="modal" data-target="#edit_plan">Edit</a>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Yearly Plan Details -->
									<div class="row">
										<div class="col-md-12">
											<div class="card card-table mb-0">
												<div class="card-header">
													<h4 class="card-title mb-0">Plan Details</h4>
												</div>
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Plan</th>
																	<th>Plan Type</th>
																	<th>Create Date</th>
																	<th>Modified Date</th>
																	<th>Amount</th>
																	<th>Subscribed Users</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Free Trial</td>
																	<td>Yearly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>Free</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">62 Users</a></td>
																</tr>
																<tr>
																	<td>Professional</td>
																	<td>Yearly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>$199</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">157 Users</a></td>
																</tr>
																<tr>
																	<td>Enterprise</td>
																	<td>Yearly</td>
																	<td>9 Nov 2019</td>
																	<td>8 Dec 2019</td>
																	<td>$399</td>
																	<td><a class="btn btn-info btn-sm" href="subscribed-companies.html">241 Users</a></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Yearly Plan Details -->
								
								</div>
								<!-- /Annual Plan Tab -->
								
							</div>
							<!-- /Plan Tab Content -->
						  
							<!-- Add Plan Modal -->
							<div class="modal custom-modal fade" id="add_plan" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-md modal-dialog-centered">
									<div class="modal-content">
										<button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
										<div class="modal-body">
											<h5 class="modal-title text-center mb-3">Add Plan</h5>
											<form>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Name</label>
															<input type="text" placeholder="Free Trial" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Amount</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Type</label>
															<select class="select"> 
																<option> Monthly </option>
																<option> Yearly </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Users</label>
															<select class="select"> 
																<option> 5 Users </option>
																<option> 50 Users </option>
																<option> Unlimited </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Projects</label>
															<select class="select"> 
																<option> 5 Projects </option>
																<option> 50 Projects </option>
																<option> Unlimited </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Storage Space</label>
															<select class="select"> 
																<option> 5 GB </option>
																<option> 100 GB </option>
																<option> 500 GB </option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>Plan Description</label>
													<textarea class="form-control" rows="4" cols="30"></textarea>
												</div>
												<div class="form-group">
													<label class="d-block">Status</label>
													<div class="status-toggle">
														<input type="checkbox" id="add_plan_status" class="check">
														<label for="add_plan_status" class="checktoggle">checkbox</label>
													</div>
												</div>
												<div class="m-t-20 text-center">
													<button class="btn btn-primary submit-btn">Submit</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- /Add Plan Modal -->

							<!-- Edit Plan Modal -->
							<div class="modal custom-modal fade" id="edit_plan" role="dialog">
								<div class="modal-dialog modal-md modal-dialog-centered">
									<div class="modal-content">
										<button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
										<div class="modal-body">
											<h5 class="modal-title text-center mb-3">Edit Plan</h5>
											<form>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Name</label>
															<input type="text" placeholder="Free Trial" class="form-control" value="Free Trial">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Amount</label>
															<input type="text" class="form-control" value="$500">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Plan Type</label>
															<select class="select"> 
																<option> Monthly </option>
																<option> Yearly </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Users</label>
															<select class="select"> 
																<option> 5 Users </option>
																<option> 50 Users </option>
																<option> Unlimited </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Projects</label>
															<select class="select"> 
																<option> 5 Projects </option>
																<option> 50 Projects </option>
																<option> Unlimited </option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>No of Storage Space</label>
															<select class="select"> 
																<option> 5 GB </option>
																<option> 100 GB </option>
																<option> 500 GB </option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>Plan Description</label>
													<textarea class="form-control" rows="4" cols="30"></textarea>
												</div>
												<div class="form-group">
													<label class="d-block">Status</label>
													<div class="status-toggle">
														<input type="checkbox" id="edit_plan_status" class="check">
														<label for="edit_plan_status" class="checktoggle">checkbox</label>
													</div>
												</div>
												<div class="m-t-20 text-center">
													<button class="btn btn-primary submit-btn">Save</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- /Edit Plan Modal -->
						  
						</div>
					</div>
					
                </div>
				<!-- /Page Content -->
				
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
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>