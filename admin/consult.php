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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

                <div class="row">
                  
                  <div class="col-12">
                    <h3>Consultar</h3>
                    <p>Informe um nome para pesquisar um usuario.</p>
                    <form class="form-group" action="" method="GET">
                      <div class="row">
                        <div class="col-8">
                          <input class="form-control" type="text" name="search" required>
                        </div>
                        <div class="col-4">
                          <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                      </div>
                    </form>
                  </div>

                </div>
                <br>
                

                <?php 
                  include('../connection.php');
                  include('../ManagerRepository.php');

                  $data = "";
                  

                  if(isset($_GET['search']) && !empty($_GET['search']))
                  {

                    $search = mysqli_real_escape_string($connectionUser, $_GET['search']);

                    $data = consultUserManager($search);
                  }

                  

                ?>

                <h4>Resultado:</h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nome</th>
                      <th scope="col">E-mail</th>
                      <th scope="col">Telefone</th>
                      <th scope="col">Endereço</th>
                      <th scope="col">CNPJ/CPF</th>
                      <th scope="col">Tipo Usuário</th>
                      <th><center><b>X</b></center></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                        if(!empty($data))
                        {
                          

                          while($dataArray = mysqli_fetch_array($data))
                          {
                    ?>
                          <tr>
                            <td><?php echo $dataArray["id"] ?></td>
                            <td><?php echo $dataArray["name"] ?></td>
                            <td><?php echo $dataArray["email"] ?></td>
                            <td><?php echo $dataArray["fone"] ?></td>
                            <td><?php echo $dataArray["street"]; ?>, <?php echo $dataArray["cep"]; ?> - <?php echo $dataArray["neighborhood"]; ?></td>
                            <td><?php echo $dataArray["cnpjAndCpf"] ?></td>
                            <td><?php echo $dataArray["typeUser"] ?></td>
                            <td>
                              <center>
                                <form name="delete" action="../ManagerController.php" method="POST">
                                  <input type="hidden" name="cnpjAndCpf" value=<?php echo $dataArray["cnpjAndCpf"] ?> >
                                  <input type="hidden" value="FULL" name="remove">
                                  <button type="submit" class="btn btn-danger" id="actFormDelete">Excluir</button>
                                </form>
                              </center>
                            </td>
                          </tr>
                    <?php
                          }  
                        } else if(!$data) {

                          ?>
                            <td><center><b>Sem resultados ...</b></center></td>
                          <?php 

                        }

                    ?>
                  </tbody>
                </table>
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

<script>       
$(function() {
  $(this).on("click", "#actFormDelete", function(event) {
    event.preventDefault();
    if (!confirm("Deseja realmente excluir esta conta?")) return false;
    $('form[name="delete"]').submit()
   
  });
});
</script>
</body>

</html>
