<?php
	require 'conexion.php';
	//consulta al egresado recien registrado
	$sql=mysqli_query($conn,"SELECT * FROM registrados");
?>
	<table style="color:#000099;width:400px;">
		<tr style="background:#9BB;">
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Web</td>
		</tr>

<?php
	while($row = mysql_fetch_array($sql)){
	echo "<tr>";
	echo "<td>".$row['nombre']."</td>";
	echo "<td>".$row['apellido']."</td>";
	echo "<td>".$row['web']."</td>";
	echo "</tr>";
}
?>
	</table>