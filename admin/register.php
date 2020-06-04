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

              <div class="card p-5 shadow-lg m-5">
                <h3>Cadastrar</h3>
                <br>
                

                <form class="form-group" action="../ManagerController" method="POST">
                  <h4>Dados Pessoais</h4>
                  <hr>
                  <div class="row">
                    <div class="col-md-4">
                      <label>Nome:</label>
                      <input class="form-control" type="text" name="name">
                    </div>
                    <div class="col-md-4">
                      <label>CNPJ/CPF</label>
                      <input class="form-control" type="text" name="cnpjAndCpf">
                    </div>
                    <div class="col-md-4">
                      <label>Telefone:</label>
                      <input class="form-control" type="text" name="fone">
                    </div>
                  </div>
                  <br>
                  <h4>Tipo do Cadastro:</h4>
                  <hr>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" value="O" name="type">
                          <label class="form-check-label">Organização</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" value="U" name="type">
                          <label class="form-check-label">Usuário</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" value="G" name="type">
                          <label class="form-check-label">Gerente</label>
                      </div>
                    </div>
                  </div>

                  <br>
                  <h4>Dados de Acesso:</h4>
                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Email:</label>
                      <input class="form-control" type="text" name="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Senha:</label>
                      <input class="form-control" type="password" id="senha" name="password">
                      
                        <div id="senhaBarra" class="progress mt-3" style="display: none;">
                            <div id="senhaForca" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                  </div>
                  <br>
                  <h4>Endereço</h4>
                  <hr>
                  <div class="row">
                    <div class="col-md-4">
                      <label>CEP:</label>
                      <input class="form-control" type="text" id="cep" name="cep">
                    </div>
                    <div class="col-md-4">
                      <label>Rua:</label>
                      <input class="form-control" type="text" id="rua" name="street">
                    </div>
                    <div class="col-md-4">
                      <label>Bairro:</label>
                      <input class="form-control" type="text" id="bairro" name="neighborhood">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label>Cidade:</label>
                      <input class="form-control" type="text" id="cidade" name="city">
                    </div>
                    <div class="col-md-4">
                      <label>UF:</label>
                      <input class="form-control" type="text" id="uf" name="uf">
                    </div>
                    <div class="col-md-4">
                      <label>IBGE:</label>
                      <input class="form-control" type="text" id="ibge" name="ibge">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <label>Descrição:</label>
                      <textarea class="form-control" name="description" placeholder="Descreva sua Organização ou seu perfil como voluntário ..."></textarea>
                    </div>
                  </div>
                  
                  <input class="form-control" type="hidden" value="FULL" name="register">

                  <button type="submit" class="btn btn-primary mt-3">Enviar</button>
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
