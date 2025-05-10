<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Administrador de Categorias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administrador de categorias</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="login-box" style="margin: 0 auto;">
  <div class="login-logo">
    <a href="#"><b>Medical</b>Printer</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrar Categoría</p>

      <form action="guardar_categoria.html" method="post">
        <div class="input-group mb-3">
          <input type="text" name="nombre_categoria" class="form-control" placeholder="Nombre de la Categoría" required>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-tags"></span></div>
          </div>
        </div>
        <div class="input-group mb-3">
          <textarea name="descripcion_categoria" class="form-control" placeholder="Descripción de la Categoría" rows="3"></textarea>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Registrar</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>