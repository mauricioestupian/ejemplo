function mul() {
	var nu1 = document.form2.nu_num.value;
	var mult = document.getElementById('nu_mult').value;
	/*nu1=parseInt(nu1);
	mult=parseInt(mult);*/
	document.write("<table border='1px'> <tr><th>Numero</th><th>*</th><th>Multiplo</th><th>=</th><th>resultado</th><th>Par/Impar</th></tr>");
	for (var i = 0; i < mult; i++) {
		resul=i*mult;
		document.write("<tr><td>"+i+"</td><td> * </td><td>"+mult+"</td><td> = </td><td>"+resul+"</td>");
		mod = resul % 2;
		if (mod > 0) {
			document.write("<td>Ipmpar</td></tr>");
		}	
			else{
			document.write("<td>Par</td></tr>");	
		}
	}
	document.write("</table>");
}