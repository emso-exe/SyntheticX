  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right w-25 " id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        <a href="dashboard" class="list-group-item list-group-item-action bg-light" data-parent="#sidebar-wrapper"><i class="fas fa-chalkboard-teacher"></i><span class="ml-2">Dashboard</a>
        <a href="#collapse-funcionarios" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-funcionarios" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-user-tie"></i><span class="ml-2">Funcionários</span>
        </a>
          <div class="collapse" id="collapse-funcionarios" data-parent="#sidebar-wrapper">
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="user_create">Cadastro</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="user_search_edit">Edição</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="user_search">Consulta</a>
          </div>
        <a href="#collapse-login-senha" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-login-senha" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-user-lock"></i><span class="ml-2">Login e Senha</span>
        </a>
          <div class="collapse" id="collapse-login-senha"  data-parent="#sidebar-wrapper">
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="login_pass_search_edit">Manutenção</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="login_pass_search">Consulta</a>
          </div>
        <a href="#collapse-setores-cargos" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-setores-cargos"  class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-id-card"></i><span class="ml-2">Setores e Cargos</span>
        </a>
          <div class="collapse" id="collapse-setores-cargos" data-parent="#sidebar-wrapper">
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="sector_position_create">Cadastro</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="sector_position_search_edit">Edição</a>
            <a class="list-group-item list-group-item-action list-group-item-light border-0" href="sector_position_search">Consulta</a>
          </div>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

<?php require $content->load();?>

  <!-- Page Content -->
  <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom fixed-top">
        <a class="navbar-brand exo2-semi-bold-italic" href="#"><img class="mr-2 ml-2" src="images/syntheticx_white.svg" alt="" width="40" height="31">SyntheticX</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars fa-small-size"></i>
        </button>

        <div class="collapse navbar-collapse m-0" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2">Estênio Mariano</span><i class="fas fa-user-circle fa-small-size"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile"><i class="fas fa-address-card"></i><span class="ml-3">Perfil</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fas fa-times-circle"></i><span class="ml-3">Logout</span></a>
              </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-question-circle fa-small-size"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown2">
                <a class="dropdown-item" href="#"><i class="fas fa-question-circle"></i><span class="ml-3">Ajuda</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fas fa-info-circle"></i><span class="ml-3">Sobre</span></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- /#page-content-wrapper -->
  </div>

  <div id="page-content-footer" class="bg-secondary border-top fixed-bottom">
    <h6 class="text-dark text-center pt-2">SyntheticX &copy; Estênio Mariano 2019</h6>
  </div>
