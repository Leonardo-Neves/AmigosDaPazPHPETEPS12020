<?php
$url = $_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$one = "nav-item";
$two = "nav-item";
$three = "nav-item";
$four = "nav-item";
$five = "nav-item";
if ($url == "localhost/admin/dashboard.php")
$one = "nav-item active";
else if ($url == "localhost/admin/register.php")
$two = "nav-item active";
else if ($url == "localhost/admin/consult.php")
$three = "nav-item active";
else if ($url == "localhost/admin/registerHelp.php")
$four = "nav-item active";
else if ($url == "localhost/admin/consultHelp.php")
$five = "nav-item active";


?>
<style>
.nav-item.active{
  background-color: #0055b0;
}
.nav-link.collapsed{
    font-weight: 500 !important;
}
</style>
<ul class="navbar-nav btn_roxo sidebar sidebar-dark accordion" style="min-width: 250px" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index">
        
        <div class="sidebar-brand-text mx-3" style="font-weight: 550 !important;"><i class="fas fa-home"></i> Home </div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class='<?= $one ?>'>
        <a class="nav-link" href="../admin/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span style="font-weight: 510 !important;">Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Gerencimento
      </div>

      <!-- Cadastro Voluntario -->
     

      <li class='<?= $two ?>' >
        <a class="nav-link collapsed" href="../admin/register"  aria-expanded="true" aria-controls="collapseTwo" >
          <i class="fas fa-fw fa-cog"></i>
          <span >Cadastrar Usuário</span>
        </a>
      </li>

      <li class='<?= $three ?>'>
        <a class="nav-link collapsed" href="../admin/consult"  aria-expanded="true" aria-controls="collapseTwo" id="consult">
          <i class="fas fa-fw fa-cog"></i>
          <span >Consultar / Excluir Usuário</span>
        </a>
      </li>

      <li class='<?= $four ?>'>
        <a class="nav-link collapsed" href="../admin/registerHelp"  aria-expanded="true" aria-controls="collapseTwo" >
          <i class="fas fa-fw fa-cog"></i>
          <span >Cadastrar Ajudas</span>
        </a>
      </li>

      <li class='<?= $five ?>'>
        <a class="nav-link collapsed" href="../admin/consultHelp"  aria-expanded="true" aria-controls="collapseTwo" id="consult">
          <i class="fas fa-fw fa-cog"></i>
          <span>Consultar / Excluir Ajudas</span>
        </a>
      </li>

    </ul>