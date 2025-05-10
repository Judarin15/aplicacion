<?php

include "app/modelos/personas.modelo.php"; // Ruta corregida

class ControladorRegistro {

    static public function ctrRegistro() {

        if (isset($_POST["registroNombre"])) {

            $tabla = "personas";

            $datos = array(
                "nombre"   => $_POST["registroNombre"],
                "correo"   => $_POST["registroEmail"],
                "tipodoc"  => $_POST["registroTipoDocumento"],
                "numdoc"   => $_POST["registroNumeroDocumento"],
                "telefono" => $_POST["registroTelefono"]
            );

            $respuesta = ModeloRegistro::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }





        /*=============================================
    Seleccionar Registros
    =============================================*/
   /*
    static public function ctrSeleccionarRegistro(){

        $tabla = "personas";

        $respuesta = ModeloRegistro::mdlSeleccionarRegistro($tabla, null,null);

        return $respuesta;
    }


    /*
    <!-- ========== Metodo ingresar ========== -->    
    */

    /* static public function ctrIngresar(){

            if(isset($_POST["ingresoCorreo"])){
    
                $tabla = "personas";

                $item = "pers_correo";
                
                $valor = $_POST["ingresoCorreo"];
    
                $respuesta = ModeloRegistro::mdlSeleccionarRegistro($tabla, $item, $valor);




    
                if($respuesta["pers_correo"] == $_POST["ingresoCorreo"] && $respuesta["pers_clave"] == $_POST["ingresoClave"]){ 
    
                    session_start();
                    $_SESSION["validarIngreso"] = "ok";
    
                    echo '<script>
    
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
    
                        window.location = "index.php?modulo=contenido";
    
                    </script>';
    
                } else {
    
                    echo '<script>
    
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
    
                    </script>';
    
                    echo '<div class="alert alert-success">la contraseña no es valida</div>';
                }
    
    
            }
    

    } */
}