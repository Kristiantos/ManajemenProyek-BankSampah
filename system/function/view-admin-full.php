<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTables.css">
    <!-- <style>
        label{
        font-family: Montserrat;    
        font-size: 18px;
        display: block;
        color: #EC407A;
        }

    </style> -->
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
</head>
<body>
    <!-- <h2 style="font-size: 30px; color: #262626;">Data Administrator</h2>
    <br>
    <table id="example" class="display" cellspacing="0" width="100%" border="0" >
        <thead>
        <tr>
            <th>No</th>
            <th>NIA</th>
            <th>Nama Admin</th>
            <th>Nomor Telepon</th>
            <th>E-mail</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>No</th>
            <th>NIA</th>
            <th>Nama Admin</th>
            <th>Nomor Telepon</th>
            <th>E-mail</th>
            <th>Level</th>
            <th>Aksi</th>       
        </tr>   
        </tfoot>
        <tbody> -->
        <?php
            // $no = 0;
            // $query = mysqli_query($conn, "SELECT * FROM admin ORDER BY nia ASC");
            // while($row = mysqli_fetch_assoc($query)){$no++;
        ?>
        <!-- <tr align="center">
            <td><?php// echo "$no" ?></td>
            <td><?php //echo $row['nia'] ?></td>
            <td><?php //echo $row['nama'] ?></td>
            <td><?php //echo $row['telepon'] ?></td>
            <td><?php //echo $row['email'] ?></td>
            <td><?php //echo $row['level'] ?></td>
            <td>
                
                <a href="admin.php?page=edit-admin-id&id=<?php// echo $row['nia']; ?>">
                <button><i class="fa fa-pencil"></i>edit</button> 
                </a>

                <a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="../system/function/delete-admin.php?id=<?php// echo $row['nia']; ?>">
                <button><i class="fa fa-trash-o"></i>hapus</button>
                </a>
                
            </td>
        </tr>
        <?php// } ?>
        </tbody>
    </table>
    <br>
    <br>
    
    <a href="admin.php?page=tambah-data-admin">
    <button><i class="fa fa-plus" aria-hidden="true"></i>Tambah</button>
    </a>

    <a target="_blank" href="../system/function/excel-admin.php">
    <button><i class="fa fa-print" aria-hidden="true"></i>Excel</button>
    </a>

    <a target="_blank" href="../system/function/print-admin.php">
    <button><i class="fa fa-print" aria-hidden="true"></i>Cetak</button>
    </a>
     -->
    <script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
    <script type="text/javascript" src="../datatables/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
           $('#example').DataTable();
        } );
    </script>



<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <div class="row">
                    <div class="col-8 d-flex align-items-center">
                      <h6 class="text-white text-capitalize ps-3 mb-0">Data Administrator</h6>
                    </div>
                    <div class="col-2 text-end ">
                      <a class="btn bg-gradient-light mb-0 " href="../system/function/excel-admin.php" aria-hidden="true"><i class="material-icons text-sm">download</i>download</a>
                    </div>
                    <div class="col-2 text-end px-4">
                      <a class="btn bg-gradient-light mb-0 " href="admin.php?page=tambah-data-admin" aria-hidden="true"><i class="material-icons text-sm">add</i>tambah</a>
                    </div>
                    
                </div>
                <!-- <h6 class="text-white text-capitalize ps-3">Data Administrator</h6> -->
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Telepon</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Level</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
            $no = 0;
            $query = mysqli_query($conn, "SELECT * FROM admin ORDER BY nia ASC");
            while($row = mysqli_fetch_assoc($query)){$no++;
        ?>
                    <tr>
                      <td>
                        <p class="text-xs text-center text-secondary mb-0"><?php echo "$no" ?></p>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0"><?php echo $row['nia'] ?></p>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['nama'] ?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $row['email'] ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0"><?php echo $row['telepon'] ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary"><?php echo $row['level'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                      <a class="badge badge-sm bg-warning" href="admin.php?page=edit-admin-id&id=<?php echo $row['nia']; ?>">edit</a>
                      <a class="badge badge-sm bg-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="../system/function/delete-admin.php?id=<?php echo $row['nia']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>

           
               
           

              </div>
              <!-- <a href="admin.php?page=tambah-data-admin">
                    <button><i class="fa fa-plus" aria-hidden="true"></i>Tambah</button>
                </a> -->
                <!-- <a target="_blank" href="../system/function/excel-admin.php">
                    <button><i class="fa fa-print" aria-hidden="true"></i>Excel</button>
                </a> -->
                <!-- <a target="_blank" href="../system/function/print-admin.php">
                    <button><i class="fa fa-print" aria-hidden="true"></i>Cetak</button>
                </a> -->
            </div>
          </div>
        </div>
      </div>



</body>
</html>