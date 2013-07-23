<?php

    class Valida{
        
        public $tipos_validacion = array(
            'id_asistente'=>"/^[0-9]+$/",
            'apellido_paterno'=>"/^[A-Za-z]+$/",
            'apellido_materno'=>"/^[A-Za-z]+$/",
            'nombre'=>"/^[A-Za-z]+$/",
            'sexo'=>"/^[HM]$/",
            'edad'=>"/^[0-9]+$/",
            'email'=>"/^[A-Za-z0-9]+.[A-Za-z0-9]*@[A-Za-z0-9]+.[A-Za-z]+$/",
            'nctr_rfc'=>"/^[A-Za-z][A-Za-z][A-Za-z][A-Za-z][0-9][0-9][0-9][0-9][0-9][0-9][A-Za-z][A-Za-z][0-9]$/",
            'numero_control'=>"/^[A-Za-z0-9]+$/",
            'password'=>"/^[A-Za-z0-9]+$/",
        );
        
        function valida_expresion_regular($tipo, $valor) {
            $expresion_regular=  $this->tipos_validacion[$tipo];
            $match = preg_match($expresion_regular, $valor);
            if ($match){
                return true;
            }
            else{
                return false;
            }
        }
        
    }

?>
