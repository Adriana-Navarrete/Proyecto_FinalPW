<?php

class Modelo extends Valida{
    private $db;
	
	function Modelo(){
		$this->db=ADONewConnection('mysql');
		$this->db->debug=false;
		$this->db->Connect('localhost','root','gerardo123','eventositc');
		}
		
	public function consulta_datos(){
	    $rs=$this->db->Execute('SELECT * from '. $this->nombre_tabla);
            $this->get_error($rs,'Error en Modelo.consulta');
            return $rs;
	}
        public function consulta_s($sql){
            $rs=$this->db->execute($sql);
            $this->get_error($rs,'Error en consulta datos');
            
            return $rs;
        }
        public function inserta($rs){
        $sql_insert=  $this->db->GetInsertSQL($this->nombre_tabla,$rs);
            return $this->get_error($this->db->Execute($sql_insert),'Error en Modelo.inseta');
        }
        
        public function actualizar($record,$nombre){
            
            $sql="select * from evt_eventos where nombre_evento = '".$nombre."'";
            $rs=  $this->db->execute($sql);
             
        $sql_update=  $this->db->GetUpdateSQL($rs,$record);
        return $this->get_error($this->db->Execute($sql_update));
        }
        
        public function ingreso($nombre, $password)
        {
            $usuario=$nombre;
            $pass=$password;
         $consulta=$this->db->Execute("Select * FROM evt_usuarios 
            WHERE nombre='".$usuario."' AND password='".$pass."'");  
         
         
       
         if(count($rs->fields)>1)
        if($pass==$rs->fields['Password']){

            $_SESSION['Username']=$r;
			$_SESSION['nombre']=$rs->fields['Nombre'];
            echo "Bienvenido";
       }else{
           echo "invalido";
        }
		else{
			return "invalido 1";
		}
                
        }

        public function get_error($result){
            if($result==false){
                return false;
            }
            else
            {
                return true;
            }
        }
        
        public function show_grid($num='10'){
            $sql="SELECT * From ".$this->nombre_tabla."";
            $grid=new ADODB_Pager($this->db,$sql);
            $grid->Render($rows_per_page=$num);
        }
        
        public function actualiza_evento($nombre_evento){
            
            $sql="Select * from ".$this->nombre_tabla." where nombre_evento='".$nombre_evento."'";
            $record=  $this->db->Execute($sql);
            $rows=$record->GetArray();
            return $rows;  
        }
        
        public function eliminar($where){
            
                $sql="delete from ".$this->nombre_tabla." where nombre_evento='".$where."'";
            $this->get_error($this->db->Execute($sql),"Error al eliminar");
                
            
        }
        public function llenar_lista($sql)
        {
            $resultado_consuta=$this->db->Execute($sql);
            $rows=$resultado_consuta->GetArray();
            return $rows;
            
            }
}