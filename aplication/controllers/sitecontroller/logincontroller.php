<?php
    
    class LoginController extends Usuarios{
    
        public function valida_usuario($email,$password){
            parent::Usuarios();
            $SQL="select * from usuarios where email='".$email."'";
            $rs=$this->consulta_login($SQL);
            $rows=$rs->GetArray();
            if(count($rows)==1){
                if($rows['0']['password']==md5($password)){
                    $this->inicia_sesion($rows[0]);
                } 
                else{
                    ?>
                        <script language="javascript">
                            alert("Email incorrecto, intenta de nuevo");
                        </script>
                    <?php
                }   
            }
        }
        
        public function inicia_sesion($rows){
            $_SESSION['nombre']=$rows['nombre'];
            $_SESSION['email']=$rows['email'];
            $_SESSION['id_asistente']=$rows['id_asistente'];
            header("Location: ../../views/site/inicio.php");
        }
     
    }
?>
