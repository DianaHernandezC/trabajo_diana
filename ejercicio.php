<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>trabajo_diana</title>
	<script src="jquery-1.11.3.js"></script>
</head>

<body>

<h1>página principal ¡¡BIENVENIDO!!</h1>
<h2>por favor llenar los campos</h2>

<P>Nombres</p><input type="text" name="Nombres"/><br/>
<p>Apellidos</p><input type="text" name="Apellidos"/><br/>
<p>valor base</p><input type="text" name="sueldo"/><br/>
 
<br>

<h3>seleccione un curso</h3>
<form action="#">
		<strong>Primero: </strong>
		<select id="grado" name="select">
			<option value="Seleccione">Seleccione</option>
			<option value="PrimeroA">Primero A</option>
			<option value="PrimeroB">Primero B</option>
			<option value="PrimeroC">Primero C</option>
		</select>

<form>

</br>

<br>

<form action="#2">
	<strong>Segundo; </strong>
	<select id="select2" name="select">
		<option value="">Seleccione</option>
		<option value="Segundo A">Segundo A</option>
		<option value="Segundo C">Segundo B</option>

	</select>

</br>

<div id="resultado" ></div>


<script>
 

		$("#grado").change(function() {
				var grado = $("#grado").val();
				$.ajax({
				  method: "POST",
				  url: "matrucula.php",
				  data: { grado: grado}
				})
			  .done(function( msg ) {
			    	$("#resultado").html(msg);
			  });
		});
 
	</script>

		

 <br>
 <input type="submit" value="Enviar">

</form>

 </br>


</body>
</html>