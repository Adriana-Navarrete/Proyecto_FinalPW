<?php

class Usuario extends Modelo{
    public $nombre_tabla = 'evt_asistentes';
    public $pk = 'id';
    public $atributos = array(
                        'nombre_asistente'=>array(),
                        'apellido_paterno'=>array(),
                        'apellido_materno'=>array(),
                        'genero'=>array(),
                        'edad'=>array(),
                        'email'=>array(),
                        'nctrl_rfc'=>array(),
                        'password'=>array()
    );
    
    private $nombre_asistente;
    private $apellido_paterno;
    private $apellido_materno;
    private $genero;
    private $edad;
    private $email;
    private $nctrl_rfc;
    private $password;
        
    function Usuario() {
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }

    public function get_nombre_asistente(){
        return $this->nombre_asistente;
    } 
    
    public function set_nombre_asistente($valor){
        $this->nombre_asistente= $valor;
}

    
    public function get_email(){
        return $this->email;
    } 
    
    public function set_email($valor){
	
        $this->email = $valor;
		
    } 
    
    public function get_password(){
        return $this->password;
    } 
    
    public function set_password($valor){
	 $this->password = md5($valor);
    }
    
    
    
}

?>
