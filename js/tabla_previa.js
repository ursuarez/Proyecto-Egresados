function mo(opc)
{
	var val_nom = document.getElementById("nombres");
	var val_ape = document.getElementById("apellidos");
	var val_fec = document.getElementById("fn");
	var val_cal = document.getElementById("calle");
	var val_col = document.getElementById("colonia");
	var val_nue = document.getElementById("ne");
	var val_nui = document.getElementById("ni");
	var val_cop = document.getElementById("cp");
	var val_coe = document.getElementById("ce");
	var val_tep = document.getElementById("tp");
	var val_fac = document.getElementById("fb");

	if(opc==1)
	{
		if(val_nom.checkValidity()==true & val_ape.checkValidity()==true & val_fec.checkValidity()==true & val_cal.checkValidity()==true &
			val_col.checkValidity()==true & val_nue.checkValidity()==true & val_nui.checkValidity()==true & val_cop.checkValidity()==true &
			val_coe.checkValidity()==true & val_tep.checkValidity()==true & val_fac.checkValidity()==true)
		{
			val_nom.disabled = true;
			val_ape.disabled = true;
			val_fec.disabled = true;
			val_cal.disabled = true;
			val_col.disabled = true;
			val_nue.disabled = true;
			val_nui.disabled = true;
			val_cop.disabled = true;
			val_coe.disabled = true;
			val_tep.disabled = true;
			val_fac.disabled = true;
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
			document.getElementById("td_n").innerHTML = nom;
			document.getElementById("td_a").innerHTML = ape;
			document.getElementById("td_f").innerHTML = fn;
			document.getElementById("td_ca").innerHTML = cal;
			document.getElementById("td_co").innerHTML = col;
			document.getElementById("td_ne").innerHTML = ne;
			document.getElementById("td_ni").innerHTML = ni;
			document.getElementById("td_cp").innerHTML = cp;
			document.getElementById("td_ce").innerHTML = ce;
			document.getElementById("td_te").innerHTML = tp;
			document.getElementById("td_fb").innerHTML = fb;
			document.getElementById('resultado').style.display = 'block';
			event.preventDefault();
		}
	}

	else if(opc==2)
	{
		val_nom.disabled = false;
		val_ape.disabled = false;
		val_fec.disabled = false;
		val_cal.disabled = false;
		val_col.disabled = false;
		val_nue.disabled = false;
		val_nui.disabled = false;
		val_cop.disabled = false;
		val_coe.disabled = false;
		val_tep.disabled = false;
		val_fac.disabled = false;
		document.getElementById('resultado').style.display = 'none';
		event.preventDefault();
	}

	else if(opc==3)
	{
		enviarDatos();
	}
}