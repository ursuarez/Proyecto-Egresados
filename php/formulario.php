<html>

	<head>
		<title>Registro de egresados</title>
		<meta charset="ISO-8859-1">
		<script language="JavaScript" type="text/javascript" src="../js/ajax.js"></script>
		<script language="JavaScript" type="text/javascript" src="../js/tabla_previa.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/formulario.css">
		<link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
	</head>
	
	<body onload="nuevo_egresado.nombres.focus();">
		<div id="reg">
			<form name="nuevo_egresado" method="POST" autocomplete="off">
			
			<h2>Nuevo registro</h2>
			
			<table>
				<tr>
					<td> <label>Nombres </label> </td> 
					<td> <input id="nombres" name="nombres" type="text" pattern="[A-Za-z ]{5,30}" required/> </td>
				</tr>

				<tr>
					<td> <label> Apellidos </label> </td> 
					<td> <input id="apellidos" name="apellidos" type="text" pattern="[A-Za-z ]{10,30}" required/> </td>
				</tr>

				<tr>
					<td> <label> Fecha de nacimiento </label> </td> 
					<td> <input id="fn" name="fn" type="text" placeholder="aaaa-mm-dd" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required/> </td>
				</tr>

				<tr>
					<td> <label> Calle </label> </td> 
					<td> <input id="calle" name="calle" type="text" pattern="[A-Za-z0-9 ]{5,30}" required/> </td>
				</tr>

				<tr>
					<td> <label> Colonia </label> </td> 
					<td> <input id="colonia" name="colonia" type="text" pattern="[A-Za-z0-9 ]{5,30}" required/> </td>
				</tr>

				<tr>
					<td> <label> N&uacutemero exterior </label> </td> 
					<td> <input id="ne" name="ne" type="text" pattern="[0-9]{1,5}"/> </td>
				</tr>

				<tr>
					<td> <label> N&uacutemero interior </label> </td> 
					<td> <input id="ni" name="ni" type="text" pattern="[A-Za-z0-9]{1,3}"/> </td>
				</tr>

				<tr>
					<td> <label> C&oacutedigo postal </label> </td> 
					<td> <input id="cp" name="cp" type="text" pattern="[0-9]{5}" required/> </td>
				</tr>

				<tr>
					<td> <label> Correo electr&oacutenico </label> </td> 
					<td> <input id="ce" name="ce" type="text" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required/> </td>
				</tr>

				<tr>
					<td> <label> Tel&eacutefono particular </label> </td> 
					<td> <input id="tp" name="tp" type="text" pattern="[0-9]{10}" required/> </td>
				</tr>

				<tr>
					<td> <label> Facebook </label> </td> 
					<td> <input id="fb" name="fb" type="text" pattern="[A-za-z ]{1,30}" required/> </td>
				</tr>

				<tr>
					<td>&nbsp;</td> 
					<td> <button id="btn_visualizar" onclick="mo(1)">Ver datos</button> </td>
				</tr>
			</table>

			<div>
				<div id="resultado" style="display: none;">
					<h3>Verifica que los datos ingresados sean correctos:</h3>
					<table id="tabla">
						<tr>
							<th>Nombres</th> <th>Apellidos</th> <th>Fecha de nacimiento</th> <th>Calle</th> <th>Colonia</th>
						</tr>

						<tr>
							<td id="td_n"></td> <td id="td_a"></td> <td id="td_f"></td> <td id="td_ca"></td> <td id="td_co"></td>
						</tr>

						<tr>
							<td>&nbsp;</td>
						</tr>

						<tr>
							<th>Numero exterior</th> <th>Numero interior</th> <th>Codigo postal</th> <th>Correo electronico</th> <th>Telefono particular</th>
						</tr>

						<tr>
							<td id="td_ne"></td> <td id="td_ni"></td> <td id="td_cp"></td> <td id="td_ce"></td> <td id="td_te"></td>
						</tr>

						<tr>
							<td>&nbsp;</td>
						</tr>

						<tr>
							<th>Facebook</th>
						</tr>

						<tr>
							<td id="td_fb"></td>
						</tr>
					</table>
					<button id="btn_ocultar" onclick="mo(2)">No, editar informaci&oacuten</button> 
					<input type="submit" id="btn_guardar" onsubmit="mo(3)" value="Guardar"></input>
				</div>
			</div>

			</form>

		</div>
	</body>
</html>