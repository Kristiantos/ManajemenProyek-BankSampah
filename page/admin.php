<?php
session_start();
if (empty($_SESSION['user']) && empty($_SESSION['pass'])) {
    header('location:login.php');
} else {   
error_reporting(E_ALL | E_STRICT); 
include_once("../system/config/koneksi.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin</title>
		<link rel="stylesheet" href="../asset/internal/css/style_2.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway:700" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="shortcut icon" href="../asset/internal/img/img-local/favicon.ico">

		<!--     Fonts and icons     -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

		<!-- <style>
		  button{
          height: 27px;
          width: 85px;
          background: #8cd91a;
          border-radius: 5px;
          color: #fff;
          font-family: Montserrat;
        }
		</style> -->
	</head>
	<body>

		<?php 
	        $cek = mysqli_query($conn, "SELECT * FROM admin WHERE nia='".$_SESSION['nia']."'");
	        $row = mysqli_fetch_array($cek);
      	?>

		<!-- <div class="sidebar">
			<ul>
				<li>
					<a href="admin.php?page=data-admin" style="text-align: center; padding: 30px 0 30px 0; font-size: 20px;"><?php// echo $_SESSION["level"]; ?>, <br> <?php// echo $row['nama'] ?></a>
				</li>
						<?php
							//$level = $_SESSION['level'] == 'Admin';
							//if($level){
								//}else{
						?>	
				<li>
					<a href="admin.php?page=data-admin-full"><span class="fa fa-user" aria-hidden="true"></span>Data Admin</a>
				</li>	
						<?php// } ?>

				<li>
					<a href="admin.php?page=data-nasabah-full"><span class="fa fa-users" aria-hidden="true"></span>Data Nasabah</a>
				</li>
				 	
				<li>
					<a href="admin.php?page=data-sampah"><span class="fa fa-trash" aria-hidden="true"></span>Data Sampah</a>
				</li>
				
				<li>
					<a href="admin.php?page=data-setor"><span class="fa fa-handshake-o" aria-hidden="true"></span>Transaksi Setor</a>
				</li>
				
				<li>
					<a href="admin.php?page=data-tarik"><span class="fa fa-handshake-o" aria-hidden="true"></span>Transaksi Tarik</a>
				</li>

				<li>
					<a href="admin.php?page=data-report"><span class="fa fa-line-chart" aria-hidden="true"></span>Grafik Monitoring</a>
				</li>

				<li>
					<a href="logout.php"><span class="fa fa-sign-out" aria-hidden="true"></span>Logout</a>
				</li>

			</ul>
		</div> -->

		<nav class="navbar navbar-main navbar-expand-lg px-0 ml-5 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          
        </nav>
        <div class="collapse navbar-collapse bg-white fixed-top shadow-lg mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
            </li>
            <li class="mt-2">
              <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="logout.php">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

		<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">HEHE HAHA</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="admin.php?page=data-report">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="admin.php?page=data-admin-full">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Data Admin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="admin.php?page=data-nasabah-full">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Data Nasabah</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="admin.php?page=data-sampah">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Data Sampah</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="admin.php?page=data-setor">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Transaksi Setor</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="admin.php?page=data-tarik">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Transaksi Tarik</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="admin.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

		<div class="box-1">
			<section>
	
				<?php 
					if(isset($_GET['page'])){
						$page = $_GET['page'];

					switch ($page) {
						case 'data-admin':
							include "../system/function/view-admin.php";
							break;
						case 'tambah-data-admin':
							include "../system/function/tambah-admin.php";
							break;
						case 'data-admin-full':
							include "../system/function/view-admin-full.php";
							break;
						case 'edit-admin-id':
							include "../system/function/edit-admin-id.php";
							break;
						case 'edit-admin':
							include "../system/function/edit-admin.php";
							break;
						case 'edit-sampah':
							include "../system/function/edit-sampah.php";
							break;
						case 'data-nasabah-full':
							include "../system/function/view-nasabah-full.php";
							break;
						case 'edit-nasabah-id':
							include "../system/function/edit-nasabah-id.php";
							break;
						case 'tambah-data-nasabah':
							include "../system/function/tambah-nasabah.php";
							break;
						case 'data-sampah':
							include "../system/function/view-sampah.php";
							break;
						case 'tambah-data-setor':
							include "../system/function/tambah-setor.php";
							break;
						case 'edit-setor':
							include "../system/function/edit-setor.php";
							break;
						case 'tambah-data-tarik':
							include "../system/function/tambah-tarik.php";
							break;
						case 'data-setor':
							include "../system/function/view-setor.php";
							break;
						case 'data-tarik':
							include "../system/function/view-tarik.php";
							break;
						case 'data-report':
							include "../system/function/view-report.php";
							break;
						case 'tambah-data-sampah':
							include "../system/function/tambah-sampah.php";
							break;			
						default:
							echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
							break;
					}
				}else{
					include "../system/function/view-admin.php";
				}

				 ?>
			</section>
		</div>
		

	</body>
</html>
<?php } ?>