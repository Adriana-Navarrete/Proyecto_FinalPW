<?php

class LoginController extends Usuario{

    public function valida_usuario($email,$password){
        //validar
        $sql="select * from evt_asistentes where email= '".$email."'";
        $rs=$this->consulta_sql($sql);
        
        $rows=$rs->GetArray();
        if(count($rows)==1){
            if($rows['0']['password']==($password)){
                
                $this->inicia_sesion($rows['0']);
                 }
                      
        }else{
            ?>
           <script language="javascript">
                alert("Email incorrecto, intenta de nuevo");
        </script>
   <?php
        }
 
    }
    
    public function inicia_sesion($rows){
            $_SESSION['email']=$rows['email'];
            $_SESSION['nombre_asistente']=$rows['nombre_asistente'];
            $_SESSION['roles']=array('admin','usuario');
            $_SESSION['id_asistente']='1';
        
            
            header("location: ../../views/site/inicio.php");
        
    }

}
?>