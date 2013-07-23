<?php
   include ('../../Models/valida.php');
   include ('../../Models/Modelo.php');
   include ('../../Models/evt_eventos.php');
   include ('../../libs/adodb5/adodb5/adodb-pager.inc.php');
   include ('../../libs/adodb5/adodb5/adodb.inc.php');
   include ('../../Controllers/adminController/EventosController.php');
    
   
    $eventos = new EventosController();
    if(isset($_POST['select'])){
       
        if($eventos->eliminaevento($_POST['select'])){
          
            header("Location: registrocorrecto.php");
            ECHO "REGISTRADO EXITOSAMENTE";
            exit();
        }
    }
    
    
  
?>
<?php
include ('../layouts/header.php');
?>
	<link href="../bootstrap/css/elimina_evento.css"  type="text/css" rel="stylesheet" />
	<link href="../bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
   <html>
    <head></head>
    <title>Registro de Eventos</title>
	<body class="palette palette-belize-hole"  >
		<div class="container">
			<div id="Layer3" class="carousel-control"  align="right">
		<form id="formulario_usuarios" class="palette palette-clouds" name="formulario_usuarios" method="post" action=""  >
			<h3 class="demo-panel-title demo-headings">ELIMINAR EVENTOS </h3>
			<br />
			<label for="nombre_evento">Evento a eliminar</label>
	<!--        <input type="text"  name="nombre_evento" id="nombre_evento"  placeholder="Evento a eliminar" required /><span class="fui-calendar-solid"></span>-->
			<?php
			$lista=new EventosController();
			
			$hacer_consulta=$lista->consulta();
			 ?>
					<br /><br />
			
			<input name="Eliminar" type="submit" class="btn"  id="enviar" value="Eliminar evento" />
			<br />
			<br />
		</form>
	</div>

            
 
<?php
include('../layouts/Footer.php');
?>