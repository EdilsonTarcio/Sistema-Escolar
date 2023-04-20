<?= view('layout/head') ?>
<!-- Navbar -->

<?= view('layout/navbar') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?= view('layout/sidebar') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Cadastro de Aluno</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Inicio</a></li>
            <li class="breadcrumb-item">Alunos</li>
            <li class="breadcrumb-item active">Cadastro</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <form method="post">
          <div class="card-body">
            <!-- Garantir a validade do formulario -->
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <span style="color: red;">
                <!-- INCLUIR A VARIÁVEL $msg -->
                <?php echo $msg ?? ''  ?>
                <?php if (isset($errors)) : ?>
                  <ul>
                    <?php foreach ($errors as $error) : ?>
                      <li><?php echo $error ?></li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </span>
            </div> <!-- /.alertas -->
            <div class="form-group">
              <label>Nome Completo</label>
              <input type="text" name="nome" class="form-control" placeholder="Nome do aluno">
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Usuário</label>
                  <input type="text" name="usuario" class="form-control" placeholder="Usuario para acessar o sistema">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>E-mail</label>
                  <input type="text" name="email" class="form-control" placeholder="E-mail do aluno ou do responsavél">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Senha</label>
                  <input type="password" name="senha" placeholder="Informe sua senha" class="form-control">
                </div>
              </div>
              <div class="col-sm-9">
                <div class="form-group">
                  <label>Grupo</label>
                  <input type="text" name="grupo" placeholder="Informe o grupo" class="form-control">
                </div>
              </div>
            </div><!-- /.row -->
          </div><!-- /.card body-->
          <div class="card-footer">
          <button type="submit" class="btn btn-fill btn-primary"><i class="fas fa-user-plus"></i> Cadastrar</button>
          </div><!-- /.card footer-->
        </form><!-- /.form -->
      </div><!-- /.card -->
    </div><!-- /.container-fluid -->
  </div><!-- /.content -->
</div><!-- /.content-wrapper -->
<!-- Main Footer -->
<?= view('layout/footer') ?>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/dist/js/adminlte.min.js"></script>
</body>

</html>