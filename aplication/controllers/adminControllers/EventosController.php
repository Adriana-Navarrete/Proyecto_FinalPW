<?php

class EventosController extends eventos  {
    
    function EventosController(){
        
    }
    
    public function registraevento($valores){
    parent::eventos();
            
            $this->set_nombre_evento($valores['nombre_evento']);
            $this->set_contacto($valores['contacto']);
            $this->set_lugar($valores['lugar']);
            $this->set_informacion($valores['informacion']);
            $this->set_fecha_inicio($valores['fecha_inicio']);
            $this->set_fecha_fin($valores['fecha_fin']);
            return $this->inserta($this->get_atributos());
          
    }
    public function modifica_eventos($valores){
            parent::eventos();
             $this->set_nombre_evento($valores['nombre_evento']);
             $this->set_contacto($valores['contacto']);
             $this->set_lugar($valores['lugar']);
             $this->set_informacion($valores['informacion']);
             $this->set_fecha_inicio($valores['fecha_inicio']);
             $this->set_fecha_fin($valores['fecha_fin']);
             return $this->actualizar($this->get_atributos(),$this->get_nombre_evento());    
    }
     
    public function eliminaevento($nombre_evento){
    parent::eventos();
            
            return $this->eliminar($nombre_evento);
          
    }
    
    public function actualizaevento($nombre_evento){
    parent::eventos();
            
            return $res=$this->actualiza_evento($nombre_evento);
            
            
    }
    public function rellenar($resul)
    {
            $rell_form['nombre']=$resul[0]['nombre_evento'];
            $rell_form['contacto']=$resul[0]['contacto'];
            $rell_form['lugar']=$resul[0]['lugar'];
            $rell_form['informacion']=$resul[0]['informacion'];
            $rell_form['fecha_inicio']=$resul[0]['fecha_inicio'];
            $rell_form['fecha_fin']=$resul[0]['fecha_fin'];
            
            return $rell_form;
    }
    
    public function consulta()
    {
        parent::eventos();
        $consulta_mysql="select nombre_evento from evt_eventos";
        $resultado=$this->llenar_lista($consulta_mysql);
       echo "<select name='select' id='select'>";
       $i=0;
       foreach ($resultado as &$valor){
           echo "<option value='".$resultado[$i]['nombre_evento']."'>".$resultado[$i]['nombre_evento']."</option>";
                    
                    $i++;
                    }
                echo "</select>";
    }
    
}
?>