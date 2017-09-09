<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trabajo Practico N&#176;1</title>
 <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
	$(document).on('ready',function(){
		$('#crear_boton').click(function(){
			var url="crearUsuario.php";
			$.ajax({
				type:"POST",url:url,data:$("#formCrear").serialize(),success:function(data){
					$('#mainCrear').html(data);
				}
			})
		})
	})

</script>
<script>
	$(document).on('ready',function(){
		$('#listar_boton').click(function(){
			var url="listausuarios.php";
			$.ajax({
				type:"GET",url:url,data:$("#formlistar").serialize(),success:function(data){
					$('#mainlistar').html(data);
				}
			})
		})
	})

</script>
<script>
	$(document).on('ready',function(){
		$('#existe_boton').click(function(){
			var url="existeusuario.php";
			$.ajax({
				type:"POST",url:url,data:$("#formexiste").serialize(),success:function(data){
					$('#mainexiste').html(data);
				}
			})
		})
	})

</script>
<script>
	$(document).on('ready',function(){
		$('#actualizar_boton').click(function(){
			var url="modificarnombre.php";
			$.ajax({
				type:"POST",url:url,data:$("#actualizarexiste").serialize(),success:function(data){
					$('#mainactualizar').html(data);
				}
			})
		})
	})

</script>

    <!-- Bootstrap -->
<!--<link href="css/bootstrap.css" rel="stylesheet">-->
 


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!--Encabezado-->
<center><h1>LISTAR USUARIOS</h1></center>
        <form name="formlistar" method="get" id="formlistar">
		<center><input type="button" id="listar_boton" value="LISTAR"/></center>
		</form>
</div>
<center><div id="mainlistar">
</div></center>
<hr>
<!--Encabezado-->
<center><h1>CREAR USUARIO</h1></center>
	<center><table>
        <form name="formCrear" method="post" id="formCrear">
		<?php $fecha = date("Y-m-d");?>
		<tr><td>Nombre: </td><td><input type="text" id="nombre" name="nombre" value=""></td></tr>
		<tr><td>E-mail: </td><td><input type="text" id="email" name="email" value=""></td></tr>
		<tr><td>Clave: </td><td><input type="password" id="password" name="password" value=""></td></tr>
		
	</table></center></br>
		<center><input id="crear_boton" type="button" value="CREAR"/></center>
		</form>
</div>

<center><div id="mainCrear">
</div></center>
<hr>
<!--Encabezado-->
<center><h1>COMPROBAR EXISTENCIA DE USUARIO</h1></center>
	<center><table>
        <form name="formexiste" method="post" id="formexiste">
		<tr><td>E-mail: </td><td><input type="text" name="email" value=""></td></tr>
		<tr><td>Clave: </td><td><input type="password" name="password" value=""></td></tr>
	</table></center></br>
		<center><input type="button" id="existe_boton" value="COMPROBAR"/></center>
		</form>
</div>
<center> 
<div id="mainexiste">

</div>
</center>
<hr>
<!--Encabezado-->
<center><h1>ACTUALIZAR NOMBRE DE USUARIO</h1></center>
	<center><table>
        <form name="formactualizar" method="post" id="formactualizar">
		<tr><td>Nuevo nombre: </td><td><input type="text" name="nombre" value=""></td></tr>
	</table></center></br>
		<center><input type="button" id="actualizar_boton"value="ACTUALIZAR"/></center>
		</form>
</div>
<center> 
<div id="mainactualizar">

</div>
</center>
<hr>
<!--Encabezado-->
<center><h1>BORRAR USUARIO</h1></center>
	<center><table>
        <form name="formulario" method="post" action="borrarUsuario.php">
		<tr><td>Nombre: </td><td><input type="text" name="nombre" value=""></td></tr>
	</table></center></br>
		<center><input type="submit" value="BORRAR"/></center>
		</form>
</div>
<hr>
<!---Pie de pagina-->
<div id="footer" align="center">
Trabajo Practico N&#176;1 2017 | Alam Ravbar, Marcela Muller y Julio Chaar

</div>
	
  </body>
</html>
