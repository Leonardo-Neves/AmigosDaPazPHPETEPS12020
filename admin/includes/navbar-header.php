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

<script>       
$(function() {
  $(this).on("click", "#actFormLogoutSubmit", function(event) {
    event.preventDefault();
    if (!confirm("Deseja realmente sair?")) return false;

    location.href="../logout";
  });
});
</script>