<?php
   include ('../../Models/valida.php');
   include ('../../Models/Modelo.php');
   include ('../../Models/evt_eventos.php');
   include ('../../libs/adodb5/adodb5/adodb-pager.inc.php');
   include ('../../libs/adodb5/adodb5/adodb.inc.php');
   include ('../../Controllers/adminController/EventosController.php');
    
   
    $eventos = new EventosController();
    if(isset($_POST['eventos'])){
       
        if($eventos->registraevento($_POST['eventos'])){
          
            header("Location: registrocorrecto.php");
            ECHO "REGISTRADO EXITOSAMENTE";
            exit();
        }
    }
    
    
  
?>
<?php
include ('../layouts/header.php');
?>
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../bootstrap/css/registrar_evento.css" rel="stylesheet" type="text/css" />
<!--<script src="../Flat-UI-master/js/bootstrap-select.js"></script>
<script src="../Flat-UI-master/js/bootstrap-switch.js"></script>
<script src="../Flat-UI-master/js/flatui-checkbox.js"></script>
<script src="../Flat-UI-master/js/flatui-radio.js"></script>
<script src="../Flat-UI-master/js/jquery.tagsinput.js"></script>
<script src="../Flat-UI-master/js/jquery.placeholder.js"></script>
<script src="../Flat-UI-master/js/jquery.stacktable.js"></script>-->
<html><head></head>
    <title>Registro de Eventos</title>


<body class="palette palette-belize-hole"  >
   
	   <br><br><br> <br><br><br>
       <div class="container">
       <div id="Layer3" class="carousel-control"  align="right">


        <form id="formulario_usuarios" class="palette palette-clouds" name="formulario_usuarios" method="post" action=""  >
        <h2 class="demo-panel-title demo-headings">FORMULARIO PARA REGISTRAR EVENTO </h2>
		<br />
		<label for="nombre_evento">Nombre del evento</label>
        <input type="text"  name="eventos[nombre_evento]" id="eventos[nombre_evento]"  placeholder="Nombre del evento" required /><span class="fui-calendar-solid"></span>
        <br /><br />
        <label for="contacto">Contacto</label>
		<textarea  id="eventos[contacto]" name="eventos[contacto]" cols="78" rows="5" placeholder="Contacto" required></textarea><span class="fui-calendar-solid"></span>
	    <br /><br />
	    
	    <label for="cuando">Lugar</label>
	    <textarea id="eventos[lugar]" name="eventos[lugar]" cols="78" rows="5" placeholder="Lugar" required></textarea><span class="fui-calendar-solid"></span>
	    <br /><br />
	    <label id="informacion">Informacion</label>
	    <input id="eventos[informacion]" type="text" name="eventos[informacion]" value="" size="30" placeholder="Informacion" required> <span class="fui-calendar-solid"></span>
	    <br /><br />
	    <label id="fecha_inicio">FECHA INICIO</label>
	    <input id="eventos[fecha_inicio]" type="date" name="eventos[fecha_inicio]" value="" size="10" placeholder"Fecha Inicio" required><span class="fui-calendar-solid"></span>
	    <br /><br />
	    <label id="fecha_fin">FECHA FINAL</label>
	    <input  id="eventos[fecha_fin]" type="date" name="eventos[fecha_fin]" value="" size="10" placeholder="Fecha Fin" required><span class="fui-calendar-solid"></span>
	    <br /><br />
	    <input name="Enviar" type="submit" class="btn"  id="enviar" value="Registrar" />
	    <br />
	    <br />
</form>
</div>
     <strong><a href="Actualiza_evt_eventos.php" target="_blank">ACTUALIZAR EVENTO</a>
     <br>
     <br>
     <br>
     <a href="Elimina_evt_eventos.php" target="_blank">ELIMINAR EVENTO</a> </strong>   
<?php
include('../layouts/Footer.php');
?>
