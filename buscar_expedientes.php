<!Dotype html>
<html>
<head>
	<title>
		Expedientes
	</title>
	<?php

include("menu.php");
	 ?>
	<meta charset="utf-8">
	<script type="text/javascript">
    function Confirmacion() {
       
       
          //codigo de aceptar
          //sirve para llamar otra pagina y pasarle variables como parametros..
          
       location.href='mo_expediente.php';
         
      }
</script>
	
	 	    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  

	
	<link rel=icon href='img/logo-icon.png' sizes="32x32" type="image/png">
<style type="text/css">
table{margin: 0 auto;}
#btnbuscar,#btnregistrar_paciente{
	background-color: #008cba;
 color: white;
 
 font-size: 18px;
 border-radius: 5px;
 
 box-sizing: border-box;
 transition: all 500ms ease;
}

#opbuscar{
	background-color: #f8f8f8;
         color: #337ab7;
                margin: 0 auto; 
              height: 45px;
               
                 
}
	
	#tb_expediente{

		background-color: #f8f8f8;
         color: #337ab7;
                margin: 0 auto; 
              
               
                 border-radius: 10px 10px 10px 10px;
                box-shadow:  10px 10px 10px;

	}
	#expedientes{
opacity: 0.9;
margin: 0 auto;
		width: 1300px;
		border-radius: 10px 10px 10px 10px;
                box-shadow:  10px 10px 10px;
	}
	#heading{
		background-color: #2c3e50;
		color: white;
	}
	label{ font-family: sans-serif;}
	#imagen{float: right;}
</style>
</head>
<body>


		
			
				
<div id="expedientes" class="panel panel-info">
<div id="imagen"><img src="imagenes/expe.png" height="78px"></div>
  <div id="heading" class="panel-heading">
    <h1>Expedientes</h1>
  </div>
  <div  class="panel-body">
  <form  class="form-horizontal">
  
    <div class="form-group">
    <form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row" id="opbuscar">
							<label for="q" class="col-md-2 control-label"></label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre de paciente a buscar" onkeyup='load(1);'>
							</div>
							
							
							
							<div class="col-md-3">
								<button id="btnbuscar" type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span> 
								
							</div>
							<button id="btnregistrar_paciente" type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-plus-sign" ></span> Registrar paciente</button>
								<span id="loader"></span> 
							
						</div>
				
				<div class="table-responsive " id="tb_expediente">
			  <table class="table table-hover" style="border-color: #337ab7;">
				<tr style="color: #fff; background-color: #2c3e50; border-color: #337ab7;">
					<th>ID</th>
					<th>NMBRES</th>
					<th>APELLIDOS</th>
					<th>SEXO	</th>
					<th>ACCIONES</th>
				</tr>
				<?php
				/*while ($row=mysqli_fetch_array($query)){
						$id=$row['id'];
						$nombres=$row['nombres'];
						$apellidos=$row['apellidos'];
						$cargo=$row['cargo'];
		
					*/?>
					<tr>
						<td>12345</td>
						<td>Bladimir</td>
						<td>Alvarado</td>
						<td>M</td>	
						<td><?php echo "<div class=\"input-group\">
      <button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"location='registrar_paciente.php'\"><span class=\"glyphicon glyphicon-pencil\"></span>DATOS PACIENTE</button> |
         
        <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"location='mo_expediente.php'\"><span class=\"glyphicon glyphicon-folder-open\"></span>MODIFICAR EXPEDIENTE</button> |
     
  <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"location='odontograma.php'\"><span class=\"glyphicon glyphicon-picture\"></span>ODONTOGRAMA</button>
      </div>";?>

      </td>	

					</tr>
					<?php
				
				?>
				<tr>
					<td colspan=7><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>

				
			</form>

    
	
</body>
</html>

