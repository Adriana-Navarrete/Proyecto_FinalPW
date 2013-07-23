<?php

class valida{
    public $tiposV=array(   
                'letras'=>"/^[a-z\d_]{4,300}$/i",
                'numeros'=>"/^[0-9]+$/",
//                'letras'=>"/^[A-Z][a-z]*$/",
                'fecha'=>"/^[0-9][0-9][0-9][0-9][-][0-9][0-9][-][0-9][0-9]$/",
                'correo'=>"/^[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-z A-Z]+$/",
                'rfc'=>"/^[A-Z][A-Z][A-Z][A-Z][0-9][0-9][0-9][0-9][0-9][0-9][A-Z][A-Z][A-Z]$/",
                'nocontrol'=>"/^[A-Z0-9]+[A-Z0-9]*$/",
                'sexo'=>"/^[HM]$/",
                'password'=>"/^[A-Z][a-zA-Z0-9]+[0-9][0-9]",
    );
    
    function valida_er($tipo, $valor)
    {
        $ER=  $this->tiposV[$tipo];
        
        $match = preg_match($ER, $valor);
    if ($match){
    return true;}
    else{
    return false;}
    }
}


?>
