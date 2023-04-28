<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= site_url('/')?>" class="nav-link" title="Ir para o inicio">Inicio</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link" title="Ir para o perfil">Perfil</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
        <i class="fas fa-user-circle" title="Perfil"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="text-align:left">
        <span class="dropdown-item ">
          <strong>Nome: </strong><?= service('session')->get('nome') ?><br>
          <strong>E-mail:</strong> <?= service('session')->get('email') ?><br>
          <strong>Perfil:</strong> <?= service('session')->get('perfil') ?><br>
        </span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="far fa-id-badge mr-2"></i> Visualizar meu perfil
        </a>
        <div class="dropdown-divider"></div>
        <a href="<?= url_to('logout') ?>" class="dropdown-item dropdown-footer">Logout <i class="fas fa-sign-out-alt mr-2"></i></a>
      </div>
    </li>
  </ul>
</nav>