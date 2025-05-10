<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Administrador de productos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administrador de productos</li>
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
      <p class="login-box-msg">Registrar Producto</p>

      <form action="guardar_producto.html" method="post">
        <div class="input-group mb-3">
          <input type="text" name="nombre_producto" class="form-control" placeholder="Nombre del Producto" required>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-box"></span></div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="precio" class="form-control" placeholder="Precio" step="0.01" required>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-dollar-sign"></span></div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="stock" class="form-control" placeholder="Cantidad en stock" required>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-sort-numeric-up"></span></div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select name="categoria_producto" class="form-control" required>
            <option value="">Selecciona una Categoría</option>
            <option value="1">Categoría 1</option>
            <option value="2">Categoría 2</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-tags"></span></div>
          </div>
        </div>
        <div class="input-group mb-3">
          <textarea name="descripcion_producto" class="form-control" placeholder="Descripción del Producto" rows="3"></textarea>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-info btn-block">Registrar</button>
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