// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax()
{
	var xmlhttp=false;
	try 
	{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} 
	catch (e) 
	{
		try 
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} 
		catch (E) 
		{
			xmlhttp = false;
		}
	}	

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') 
	{
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//Función para recoger los datos del formulario y enviarlos por post
function enviarDatos()
{
	//div donde se mostrará lo resultados
	//divResultado = document.getElementById('resultado');
	//recogemos los valores de los inputs
	var nom = document.nuevo_egresado.nombres.value;
	var ape = document.nuevo_egresado.apellidos.value;
	var fn = document.nuevo_egresado.fn.value;
	var cal = document.nuevo_egresado.calle.value;
	var col = document.nuevo_egresado.colonia.value;
	var ne = document.nuevo_egresado.ne.value;
	var ni = document.nuevo_egresado.ni.value;
	var cp = document.nuevo_egresado.cp.value;
	var ce = document.nuevo_egresado.ce.value;
	var tp = document.nuevo_egresado.tp.value;
	var fb = document.nuevo_egresado.fb.value;
	//instanciamos el objetoAjax
	ajax = objetoAjax();
	//uso del método POST
	//archivo que realizará la operación registro.php
	ajax.open("POST", "registro.php", true);
	//cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
	ajax.onreadystatechange=function() 
	{
	//la función responseText tiene todos los datos pedidos alservidor
		if (ajax.readyState==4) 
		{
			//mostrar resultados en esta capa
			divResultado.innerHTML = ajax.responseText;
			//llamar a funcion para limpiar los inputs
			LimpiarCampos();
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("nom="+nom+"&ape="+ape+"&fn="+fn+"&cal="+cal+"&col="+col+"&ne="+ne+"&ni="+ni+"&cp="+cp+"&ce="+ce+"&tp="+tp+"&fb="+fb);
}

//función para limpiar los campos
function LimpiarCampos()
{
	document.nuevo_egresado.nombres.value = "";
	document.nuevo_egresado.apellidos.value = "";
	document.nuevo_egresado.fn.value = "";
	document.nuevo_egresado.calle.value = "";
	document.nuevo_egresado.colonia.value = "";
	document.nuevo_egresado.ni.value = "";
	document.nuevo_egresado.ne.value = "";
	document.nuevo_egresado.cp.value = "";
	document.nuevo_egresado.ce.value = "";
	document.nuevo_egresado.tp.value = "";
	document.nuevo_egresado.fb.value = "";
	document.nuevo_egresado.nombres.focus();
}