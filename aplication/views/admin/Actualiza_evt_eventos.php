<?php
   include ('../../models/valida.php');
   include ('../../models/Modelo.php');
   include ('../../models/evt_eventos.php');
   include ('../../libs/adodb5/adodb5/adodb-pager.inc.php');
   include ('../../libs/adodb5/adodb5/adodb.inc.php');
   include ('../../Controllers/adminController/EventosController.php');
    
   
    $evento = new EventosController();
    if(isset($_POST['select'])){
       
        $res=$evento->actualizaevento($_POST['select']);
          
           $rell=$evento->rellenar($res);
      }
      
    if(isset($_POST['eventos']))
    {
        //echo "eventos[nombre_evento]";
        if($evento->modifica_eventos($_POST['eventos'])){
         // echo 'q2';  
        }
    }
   
?>
<?php
include ('../layouts/header.php');
?>

<link href="../bootstrap/css/capas.css" type="text/css" rel="stylesheet" >
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

<!--<script src="../Flat-UI-master/js/bootstrap-select.js"></script>
<script src="../Flat-UI-master/js/bootstrap-switch.js"></script>
<script src="../Flat-UI-master/js/flatui-checkbox.js"></script>
<script src="../Flat-UI-master/js/flatui-radio.js"></script>
<script src="../Flat-UI-master/js/jquery.tagsinput.js"></script>
<script src="../Flat-UI-master/js/jquery.placeholder.js"></script>
<script src="../Flat-UI-master/js/jquery.stacktable.js"></script>-->
<html>
    <head></head>
    <title>Registro de Eventos</title>
	<body class="palette palette-belize-hole"  >
		<div class="container">
			<div id="Layer4" class="carousel-control"  align="right">
				<form id="formulario_usuarios" class="palette palette-clouds" name="formulario_usuarios" method="post" action=""  >
					<h3 class="demo-panel-title demo-headings">FORMULARIO PARA MODIFICAR EVENTO </h3>
						<br />
					<label for="nombre_evento">Evento a actualizar</label>
				<!--        <input type="text"  name="nombre_evento" id="nombre_evento"  placeholder="Evento a eliminar" required /><span class="fui-calendar-solid"></span>-->
						<?php
						$lista=new EventosController();
						
						$hacer_consulta=$lista->consulta();
					   
						 ?>
								<br /><br />
						
						<input name="Actualizar" type="submit" class="btn"  id="enviar" value="Buscar evento" />
						<br />
						<br />
				</form>

				<form id="formulario_usuarios" class="palette palette-clouds" name="formulario_usuarios" method="post" action=""  >
					  <form id="formulario_usuarios" class="palette palette-clouds" name="formulario_usuarios" method="post" action=""  >
						<h3 class="demo-panel-title demo-headings">Actualizar Eventos </h3>
						<br />
						<label for="nombre_evento">Evento a actualizar</label>
				<!--        <input type="text"  name="nombre_evento" id="nombre_evento"  placeholder="Evento a eliminar" required /><span class="fui-calendar-solid"></span>-->
						<?php
						$lista=new EventosController();
						
						$hacer_consulta=$lista->consulta();
					   
						 ?>
                <br /><br />
        
					<input name="Actualizar" type="submit" class="btn"  id="enviar" value="Buscar evento" />
					<br />
					<br />
					</form>

					<form id="formulario_usuarios" class="palette palette-clouds" name="formulario_usuarios" method="post" action=""  >
				   
					<br />
					<label for="nombre_evento">Nombre del evento</label>                            
					<input type="text"  name="eventos[nombre_evento]" id="eventos[nombre_evento]"  value="<?php echo $rell['nombre'];?>" required /><span class="fui-calendar-solid"></span>
					<br /><br />
						<label for="contacto">Contacto</label>
						<textarea  id="eventos[contacto]" name="eventos[contacto]" cols="78" rows="5"  required> <?php echo $rell['contacto'];?> </textarea><span class="fui-calendar-solid"></span>
							<br /><br />
						 <label for="contacto">Lugar</label>
					<textarea  id="eventos[lugar]" name="eventos[lugar]" cols="78" rows="5"  required> <?php echo $rell['lugar'];?> </textarea><span class="fui-calendar-solid"></span>
					<br /><br />
					<label id="informacion">Informacion</label>
					<input id="eventos[informacion]" type="text" name="eventos[informacion]"  size="30" value="<?php echo $rell['informacion'];?>" required> <span class="fui-calendar-solid"></span>
					<br /><br />
					<label id="fecha_inicio">FECHA INICIO</label>
					<input id="eventos[fecha_inicio]" type="date" name="eventos[fecha_inicio]" size="10" value="<?php echo $rell['fecha_inicio'];?>" required><span class="fui-calendar-solid"></span>
					<br /><br />
					<label id="fecha_fin">FECHA FINAL</label>
					<input  id="eventos[fecha_fin]" type="date" name="eventos[fecha_fin]"  size="10" value="<?php echo $rell['fecha_fin'];?>" required><span class="fui-calendar-solid"></span>
					<br /><br />
					<input name="Enviar" type="submit" class="btn"  id="enviar" value="Actualizar Datos" />
					<br />
					<br />
			</form>
			</div>

            
 
<?php
include('../layouts/Footer.php');
?>