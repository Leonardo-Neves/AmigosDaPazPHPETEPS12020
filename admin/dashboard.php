<?php 
  include('../Validation.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    a:link, li
  {
  list-style: none !important;
  text-decoration:none !important;
  }
  .nav-link.btn-primary:hover{
    background: #ff1428 !important;
    -webkit-filter: drop-shadow(10px 5px 2.5px rgba(0,0,0,.3));
      filter: drop-shadow(10px 5px 2.5px rgba(0,0,0,.3));
  }
  </style>

  <title>Dashboard</title>


  <link href="../assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
<?php include('../Shared/head.php'); ?>


  <style type="text/css">
      .btn_roxo {
        background-color: #352961;
      }
      .text-color {
        color: white;
        text-decoration: bold;
      }



  </style>
</head>

<body id="page-top">
   <?php   

    $dataUser = "";

    if(isset($_SESSION['UserLogged']))
    {
      $dataUser = $_SESSION['UserData'];
    }

    if(isset($_SESSION['OrganLogged']))
    {
      $dataUser = $_SESSION['OrganData'];
    }

    if(isset($_SESSION['ManagerLogged']))
    {
      $dataUser = $_SESSION['ManagerData'];
    } 

    if(!isset($_SESSION['ManagerLogged']))
    {
      header('Location: index');
      exit();
    }

  ?>

  <div id="wrapper">

    <?php include('includes/navbar-side-menu.php'); ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <!-- HEADER DA PAGINA -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por ..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <li class="nav-item">
                  <a class="nav-link btn btn-primary btn btn-outline-light" id="actFormLogoutSubmit" style="color: white; max-height: 35px; margin-top: 15px" href="#">Sair</a>
              </li>

            <div class="topbar-divider d-none d-sm-block"></div>
            
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" style="margin-right: 5px; margin-left: 5px;" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                <b style="font-size: 20px;"><?php echo $dataUser["name"] ?></b></span>
                
              </a>
              
            </li>

          </ul>

        </nav>

        <!-- Conteudo Principal -->

        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>


      
          <div class=""></div>
            <div class="action" id="action"></div>          
          </div>
          


      </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
           <span>Copyright &copy;2020</span>
          </div>
        </div>
      </footer>

    </div>

  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="assets/dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/dashboard/js/sb-admin-2.min.js"></script>

</body>
<script>       
$(function() {
  $(this).on("click", "#actFormLogoutSubmit", function(event) {
    event.preventDefault();
    if (!confirm("Deseja realmente sair?")) return false;

    location.href="../logout";
  });
});
</script>

</html>
