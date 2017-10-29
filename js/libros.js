function lista_libros(valor){
	$.ajax({
		url:'modificarcurso.php',
		type:'POST',
		data:'valor='+valor+'&boton=buscar'
	}).done(function(resp){
		//alert(resp);
		var valores = eval(resp);
		html="<table class='table table-bordered'><thead><tr><th>#</th><th>ISBN</th><th>Titulo</th><th>Autor</th><th>Año de Publicacion</th><th>Nro de Paginas</th><th>Ediccion<</th><th>Idioma</th><th>Opciones</th></tr></thead><tbody>";
		for(i=0;i<valores.length;i++){
			datos=valores[i][0]+"*"+valores[i][1]+"*"+valores[i][2]+"*"+valores[i][3]+"*"+valores[i][4]+"*"+valores[i][5]+"*"+valores[i][6]+"*"+valores[i][7];
			html+="<tr><td>"+(i+1)+"</td><td>"+valores[i][1]+"</td><td>"+valores[i][2]+"</td><td>"+valores[i][3]+"</td><td>"+valores[i][4]+"</td><td>"+valores[i][5]+"</td><td>"+valores[i][6]+"</td><td>"+valores[i][7]+"</td><td><button class='btn btn-warning' data-toggle='modal' data-target='#modallibros' onclick='mostrar("+'"'+datos+'"'+");'><span class='glyphicon glyphicon-pencil'></span></button><button class='btn btn-danger' onclick='eliminar("+'"'+valores[i][0]+'"'+")'><span class='glyphicon glyphicon-remove'></span></button></td></tr>";
		}
		html+="</tbody></table>"
		$("#lista").html(html);
	});
}
function guardar(){
	var datosform=$("#formLibro").serialize();
	$.ajax({
		url:'modificarcurso.php',
		type:'POST',
		data:datosform+"&boton=actualizar"
	}).done(function(resp){
		if(resp==='exito'){
			$('#exito').show();
			lista_libros('');
		}
		else{
			alert(resp);
		}
		
	});
	
}
function mostrar(datos){
	//alert(datos);
	var d=datos.split("*");
	//alert(d.length);
	$("#nombres").val(d[0]);
	$("#apellidos").val(d[1]);
	$("#cedula").val(d[2]);
	$("#correo").val(d[3]);
	$("#carrera").val(d[4]);
	$("#curso").val(d[5]);
	$("#disponibilidad").val(d[6]);
	$("#ID").val(d[7]);
}
