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
                    <h1 class="m-0">Oops!</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Inicio</a></li>
                        <li class="breadcrumb-item active">Erro 404</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="error-page">
            <h2 class="headline text-warning">404</h2>
            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i>Página não encontrada.</h3>
                <p>
                    Não foi possível encontrar a página que você estava procurando.
                    Ou talvez você não tenha autorização para acessar!
                </p>
            </div>
            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>

</div>
<!-- /.content-wrapper -->
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