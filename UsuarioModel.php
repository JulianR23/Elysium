<?php 
    require_once(realpath(dirname(__FILE__) . '/../Clases/db.php'));

    class UsuarioModel{


        //Atributos
        private $id;
        private $nombre;
        private $telefono;
        private $email;
        private $contrasena;

        //Conexion a base de datos
        private $db;
        public function __construct(){
            $this-> db = DataBase::connect();
        }

        public function Insertar(){
            
            if($this->Consultar()==false){
                $sql ="INSERT INTO usuario VALUES ('{$this->getId()}','{$this->getNombre()}','{$this->getTelefono()}','{$this->getEmail()}','{$this->getContrasena()}');";
                $save = $this->db->query($sql);
                $result = false;
                if($save){
                    $result = true;
                }
            }else{
                $result = false;
            }
            
            return $result;
        }

        public function Consultar (){
            $sql = "SELECT * FROM usuario WHERE ID = '{$this->getId()}'";
            $save = $this->db->query($sql);
            $result = false;
            if($save && $save->num_rows==1){
                $result = true;
            }
            return $result;
        }
        public function login(){
            $id=$this->id;
            $contrasena=$this->contrasena;
            //comprobar si existe usuario
            $sql="SELECT * FROM usuario WHERE ID='{$this->getId()}'";
            $login=$this->db->query($sql);
            if($login && $login->num_rows==1){
                //identificar la contraseña
                $usuario=$login->fetch_object();
                //verificar contraseña
                if($contrasena === $usuario->CONTRASENA){
                    $resultado=$usuario;
                }
            }
            return $resultado;
        }
            
        
        public function Actualizar(){
            if($this->Consultar()===false){
                $result = false;
            }else{
                $sql = "UPDATE USUARIO SET NOMBRE = '{$this->getNombre()}', TELEFONO = '{$this->getTelefono()}', CORREO = '{$this->getEmail()}', CONTRASENA = '{$this->getContrasena()}' WHERE ID = '{$this->getId()}'";
                $save = $this->db->query($sql);
                if($save){
                    $result = true;
                }else{
                    $result = false;
                }
            }
            return $result;
        }
        public function Eliminar(){
           if($this->Consultar()==true){
               $sql = "DELETE FROM USUARIO WHERE ID = '{$this->getId()}'";
               $save = $this->db->query($sql);
               if($save){
                   $result = true;
               }else{
                   $result = false;
               }
           }else{
                $result = false;
           }
            
            return $result;
        }
        

        //Encapsulamiento
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id=$this-> db-> real_escape_string($id);
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$this -> db->real_escape_string($nombre);
        }
        public function getTelefono(){
            return $this->telefono;
        }
        public function setTelefono($telefono){
            $this->telefono=$this -> db->real_escape_string($telefono);
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email=$this -> db->real_escape_string($email);
        }
        public function getContrasena(){
            return $this->contrasena;
        }
        public function setContrasena( $contrasena){
            $this->contrasena=$this -> db->real_escape_string($contrasena);
        }
    }
?>