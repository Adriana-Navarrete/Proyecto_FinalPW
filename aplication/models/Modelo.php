<?php

    class Modelo extends Valida{

        private $db;

        function Modelo(){
                $this->db = ADONewConnection('mysql');
                $this->db->debug = false;
                $this->db->Connect('localhost','root','vicgame1991','proyecto');
        }

        public function consulta_datos(){
            $rs = $this->db->Execute('select * from '. $this->nombre_tabla);
            $this->get_error($rs, 'Error en consulta datos');
            return $rs;
        }
        
        public function consulta_login($sql){
            $rs=$this->db->Execute($sql);
            $this->get_error($rs,'Error en consulta datos');
            return $rs;
        }
        
        public function inserta_datos($rs){
            $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla,$rs);
            return $this->get_error($this->db->Execute($sql_insert),'Error en la insercion');
        }
        
        public function get_error($result, $tipo_error){
            if($result == false){
                die('Redireccionar a la pagina de error'.$tipo_error);
                return false;
            }
            else{
                return true;
            }
        }
        
        public function show_grid($num = '10'){
            $sql = "select * from ".$this->nombre_tabla;
            $grid = new ADODB_Pager($this->db,$sql);
            $grid->Render($rows_per_page=$num);
        }

    }
	
?>