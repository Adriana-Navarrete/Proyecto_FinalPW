<?php

class AdminController {

    function AdminController(){
        
    }
    
    public function lista_usuarios(){
        $usuario = new Usuario();
        $usuario->show_grid();
    }
    
    
}  

?>
