<?php
require_once "app/controladores/personas.controlador.php";
?>

<div class="content-wrapper">
  <!-- Content Header -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Administrador de Personas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Administrador de Personas</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">
      <div class="login-box" style="margin: 0 auto;">
        <div class="login-logo">
          <a href="#"><b>Medic</b>Plus</a>
        </div>
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Registrar una persona</p>

            <!-- Cambié la acción a la ruta absoluta para depuración -->
            <form action="index.php?modulo=personas" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre Completo" name="registroNombre" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>

              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="registroEmail" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>

              <div class="input-group mb-3">
                <select class="form-control" name="registroTipoDocumento" required>
                  <option value="">Tipo de Documento</option>
                  <option value="dni">DNI</option>
                  <option value="passport">Pasaporte</option>
                  <option value="id_card">Cédula de identidad</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Número de Documento" name="registroNumeroDocumento" required>
              </div>

              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Teléfono" name="registroTelefono" required>
              </div>

              <div class="row">
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </div>
              </div>
            </form>

            <?php
            // Procesar el registro si existe la función de controlador
            $registro = ControladorRegistro::ctrRegistro();

            if ($registro === "ok") {
            echo '<script>
            if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
            }
            // Ocultar después de 3 segundos
            setTimeout(() => {
            document.getElementById("alerta").style.display = "none";
            }, 3000);
            </script>';
            echo '<div id="alerta" class="alert alert-success">El usuario ha sido registrado correctamente</div>';
            } elseif ($registro === "error") {
            echo '<script>
            setTimeout(() => {
            document.getElementById("alerta").style.display = "none";
            }, 3000);
            </script>';
            echo '<div id="alerta" class="alert alert-danger">Hubo un error en el registro, por favor intenta nuevamente</div>';
            }
            ?>


          </div>
        </div>
      </div>
    </div>
  </section>
</div>
