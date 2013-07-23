<?php
session_start();
    
    include('../../models/valida.php');
    include('../../models/modelo.php');
    include('../../models/usuarios.php');
    include('../../libs/adodb5/adodb.inc.php');
    include('../../libs/adodb5/adodb-pager.inc.php');
    include('../../controllers/sitecontroller/logincontroller.php');
  
    if(isset($_POST['email'])){
        $login=new LoginController();
        $login->valida_usuario($_POST['email'], $_POST['password']);
    }
?>