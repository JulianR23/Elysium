<?php
require_once(realpath(dirname(__FILE__) . '/../models/UsuarioModel.php'));
class UsuarioController
{
    public function procesarLogin() {
        if (isset($_POST)) {
            $id = isset($_POST['cedula']) ? $_POST['cedula'] : false;
            $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : false;
            
            if($id && $contrasena ){
                $usuario = new UsuarioModel();
                $usuario->setId($id);
                $usuario->setContrasena($contrasena);
                $identificacion=$usuario->Login();
                
            
                if($identificacion && is_object($identificacion)){
                    session_start();
                    $_SESSION['identificacion']=$identificacion;
    

                    $id_admin = 1814; 
    
                    if ($identificacion->ID == $id_admin) {

                        $_SESSION['es_admin'] = true;
                    }
    
                    // Redirigir a la vista de login en caso de que la informacion este correcta
                    header("Location: index.php?controller=UsuarioController&action=mostrarInicio");
                    exit();
                   
                }else{
                    header("Location: index.php?controller=UsuarioController&action=mostrarLogin");
                    exit();
                    
                }
                
            }
        }
    }
    
    


    public function procesarRegistro() {
       if(isset($_POST)){
            $id = isset($_POST['id']) ? $_POST['id'] : false;
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
            $correo=isset($_POST['email']) ? $_POST['email'] : false;
            $contrasena=isset($_POST['contrasena']) ? $_POST['contrasena'] :false;

        
            if($id && $nombre && $telefono && $correo && $contrasena ){
                $usuario = new UsuarioModel();
                $usuario->setId($id);
                $usuario->setNombre( $nombre );
                $usuario->setTelefono($telefono);
                $usuario->setEmail($correo);
                $usuario->setContrasena($contrasena);
                $guardar=$usuario->Insertar();
                if($guardar){
                    // Redirigir a la vista de login en caso de que la informacion este correcta
                    header("Location: index.php?controller=UsuarioController&action=mostrarLogin&status=Registrado");
                    exit();
                   
                }else{
                    
                    header("Location: index.php?controller=UsuarioController&action=mostrarRegistro");
                    exit();
                    
                }
            }
        }
    }

    public function ProcesarActualizarEliminar (){
        if(isset($_POST)){
            $id = isset($_POST['id']) ? $_POST['id'] : false;
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
            $correo=isset($_POST['email']) ? $_POST['email'] : false;
            $contrasena=isset($_POST['contrasena']) ? $_POST['contrasena'] :false;

        
            if($id && $nombre && $telefono && $correo && $contrasena ){
                $usuario = new UsuarioModel();
                $usuario->setId($id);       
                $usuario->setNombre( $nombre );
                $usuario->setTelefono($telefono);
                $usuario->setEmail($correo);
                $usuario->setContrasena($contrasena);
                $guardar=$usuario->Actualizar();
                $identificacion=$usuario->Login();
            
                if($identificacion && is_object($identificacion)){
                    session_start();
                    $_SESSION['identificacion']=$identificacion;
                }
                if($guardar){
                    // Redirigir a la vista de login en caso de que la informacion este correcta
                    header("Location: index.php?controller=UsuarioController&action=mostrarEditar&status=actualizado");
                    exit();
                   
                }else{
                    
                    header("Location: index.php?controller=UsuarioController&action=mostrarEditar&status=error");
                    exit();
                    
                }
            }
        }
    }

    public function ProcesarEliminar() {
        if(isset($_POST)){
            session_start();
            $usuario = new UsuarioModel();
            $objUsu=$_SESSION['identificacion'];
            
            $usuario->setId($objUsu->ID);
            $result=$usuario->Eliminar();
            if($result){ 
                // Redirigir a la vista de login en caso de que la informacion este correcta
                header("Location: index.php?controller=UsuarioController&action=mostrarLogin");
                exit();
                   
            }else{
                header("Location: index.php?controller=UsuarioController&action=mostrarActualizarEliminar&status=error");
                exit();
                    
            }
        }
        
    }


    public function mostrarInicio() {
        include("views/inicio.php");
    }

    public function mostrarLogin() {
        include("views/Login.html");
    }
    public function mostrarRegistro() {
        include("views/Registro.php");
    }
    public function mostrarEditar() {
        include("views/Perfil.php");
    }
    public function mostrarActualizarEliminar() {
        include("views/ActualizarEliminar.php");
    }
}
?>