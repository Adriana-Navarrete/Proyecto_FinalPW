<?php

    class Usuarios extends Modelo{

        public  $nombre_tabla = 'usuarios';
        private $id_asistente;
        private $apellido_paterno;
        private $apellido_materno;
        private $nombre;
        private $sexo;
        private $edad;
        private $email;
        private $nctr_rfc;
        private $numero_control;
        private $password;
        
        private $atributos = array('apellido_paterno'=>array(), 
                                   'apellido_materno'=>array(),
                                   'nombre'=>array(),
                                   'sexo'=>array(), 
                                   'edad'=>array(), 
                                   'email'=>array(), 
                                   'nctr_rfc'=>array(),
                                   'numero_control'=>array(),
                                   'password'=>array()
                             );
        
        function Usuarios() {
            parent::Modelo();
        }


        public function get_atributos(){
            $rs = array();
            foreach ($this->atributos as $key=> $value){
                $rs[$key]=$this->$key;
            }
            return $rs;
        }

        public function get_id_asistente(){
            return $this->id_asistente;
        }

        public function set_id_asistente($valor){
            if($this->valida_expresion_regular('id_asistente', $valor)){
                $this->id_asistente=$valor;
                return true;
            }
            else{
                return false;
            }
        }

        public function get_apellido_paterno(){
            return $this->apellido_paterno;
        }

        public function set_apellido_paterno($valor){
            if($this->valida_expresion_regular('apellido_paterno', $valor)){
                $this->apellido_paterno=$valor;
                return true;
            }
            else{
                return false;
            }
        }

        public function get_apellido_materno(){
            return $this->apellido_materno;
        }

        public function set_apellido_materno($valor){
            if($this->valida_expresion_regular('apellido_materno', $valor)){
                $this->apellido_materno=$valor;
                return true;
            }
            else{
                return false;
            }
        }

        public function get_nombre(){
            return $this->nombre;
        }

        public function set_nombre($valor){
            if($this->valida_expresion_regular('nombre', $valor)){
                $this->nombre=$valor;
                return true;
            }
            else{
                return false;
            }
        }

        public function get_sexo(){
            return $this->sexo;
        }

        public function set_sexo($valor){
            if($this->valida_expresion_regular('sexo', $valor)){
                $this->sexo=$valor;
                return true;
            }
            else{
                return false;
            }
        }

        public function get_edad(){
            return $this->edad;
        }

        public function set_edad($valor){
            if($this->valida_expresion_regular('edad', $valor)){
                $this->edad=$valor;
                return true;
            }
            else{
                return false;
            }
        }

        public function get_email(){
            return $this->email;
        }

        public function set_email($valor){
            if($this->valida_expresion_regular('email', $valor)){
                $this->email=$valor;
                return true;
            }
            else{
                return false;
            }
        }

        public function get_nctr_rfc(){
            return $this->nctr_rfc;
        }

        public function set_nctr_rfc($valor){
            if($this->valida_expresion_regular('nctr_rfc', $valor)){
                $this->nctr_rfc=$valor;
                return true;
            }
            else{
                return false;
            }
        }

        public function get_numero_control(){
            return $this->numero_control;
        }

        public function set_numero_control($valor){
            if($this->valida_expresion_regular('numero_control', $valor)){
                $this->numero_control=$valor;
                return true;
            }
            else{
                return false;
            }
        }
        
        public function get_password(){
            return $this->password;
        }

        public function set_password($valor){
            if($this->valida_expresion_regular('password', $valor)){
                $this->password= md5($valor);
                return true;
            }
            else{
                return false;
            }
        }

    }

?>