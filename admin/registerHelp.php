<?php 
  include('../Validation.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
  <link rel="manifest" href="../favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

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
  ?>
  <?php 
    if(!isset($_SESSION['ManagerLogged']))
    {
      header('Location: ../index');
      exit();
    }

  ?>

  <div id="wrapper">

          <?php include('includes/navbar-side-menu.php'); ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <!-- HEADER DA PAGINA -->
        <?php include('includes/navbar-header.php'); ?>

        <!-- Conteudo Principal -->

        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>


      
          <div class=""></div>
          <?php 
            include('../ValidationMessages.php'); 
          ?>
          <div class="container">
            <div class="card mt-5 p-5 shadow-lg mb-5">
      
              <h3>Produtos e Voluntariado</h3>
              <br>
              <p>      Informe se sua instituição precisa produtos (ex. fraudas, produtos de higiene, alimentos) para o funcionamento de sua instituição, caso sua instituição precise de voluntário, escreva sobre isso também. Escreva detalhadamente sobre eles.</p>
              <p>Após o cadastrado dessas informações, elas estão disponiveis para visualizar e exclusão no seu perfil.</p>
              <hr>
              <?php include('../ValidationMessages.php'); ?>
              <form class="form-group" action="../OrganController" method="POST">
                <div class="row">
                  <div class="col-md-8">
                    <h4>Produto:</h4>
                    <p>Nesse espaço você pode escreve o nome do produto, tamanho, quantidade, marca entre outros. Defina bem o produto para que fique melhor definido.</p>
                    <label>CNPJ:</label>
                    <input type="text" class="form-control" name="cnpjAndCpf">
                    <label>Nome do produto:</label>
                    <input type="text" class="form-control" name="title">
                  </div>
                  <div class="col-md-8">
                    <label>Detalhes do produto ...</label>
                    <textarea class="form-control" name="description" style="height: 200px;"></textarea>
                  </div>
                </div>
                <input type="hidden" value="P" name="typeHelp">
                <input type="hidden" value="FULL" name="registerProductManager">
                <div class="row mt-2">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Enviar</button>
                  </div>
                </div>
              </form>
              <hr>
              <form class="form-group" action="../OrganController" method="POST">
                <div class="row">
                  <div class="col-md-8">
                    <h4>Voluntário:</h4>
                    <p>Nesse espaço você pode escrever para o que será o voluntário, defina detalhadamente para que ler entenda bem para o que é a oportunidade de voluntário.</p>
                    <label>CNPJ:</label>
                    <input type="text" class="form-control" name="cnpjAndCpf">
                    <label>No que será a ajuda:</label>
                    <input type="text" class="form-control" name="title">
                  </div>
                  <div class="col-md-8">
                    <label>Detalhes sobre a ...</label>
                    <textarea class="form-control" name="description" style="height: 200px;"></textarea>
                  </div>
                </div>
                <input type="hidden" value="V" name="typeHelp">
                <input type="hidden" value="FULL" name="registerVoluntierManager">
                <div class="row mt-2">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
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

  <script src="../assets/dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/dashboard/js/sb-admin-2.min.js"></script>
  <script src="../assets/js/autoCompleteCEP.js"></script>
  <script type="text/javascript" src="../assets/js/passwordPower.js"></script>

</body>

</html>
