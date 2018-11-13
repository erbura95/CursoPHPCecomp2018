jQuery(document).ready(function($) {

	
	$(document).on('click', '#btnRegistrarLibro', function() {
		
		var nombre_titulo = $('#nombre_libro').val().trim();

		if( nombre_titulo == null || nombre_titulo.length == 0  ) {
      		nombre_titulo = null;
	      	$("#ErrorMensaje-nombre_libro").text('El Titulo del Libro NO puede ser vacio.');
	        $("#ErrorMensaje-nombre_libro").show();
	        $("#nombre_libro").focus();
	        return false;
	      }

	    var numero_paginas = $('#numero_paginas').val().trim();

	    if( numero_paginas == null || numero_paginas.length == 0  ) {
      		numero_paginas = null;
	      	$("#ErrorMensaje-numero_paginas").text('El # de páginas NO puede ser vacio.');
	        $("#ErrorMensaje-numero_paginas").show();
	        $("#numero_paginas").focus();
	        return false;
	      }

	      if (numero_paginas <= 0 ) {
	      	numero_paginas = null;
	      	$("#ErrorMensaje-numero_paginas").text('El # de páginas NO puede ser cero.');
	        $("#ErrorMensaje-numero_paginas").show();
	        $("#numero_paginas").focus();
	        return false;	
	      };

	      var anio_edicion = $('#anio_edicion').val().trim();

	    if( anio_edicion == null || anio_edicion.length == 0  ) {
      		anio_edicion = null;
	      	$("#ErrorMensaje-anio_edicion").text('El Año NO puede ser vacío.');
	        $("#ErrorMensaje-anio_edicion").show();
	        $("#anio_edicion").focus();
	        return false;
	      }

	      if (anio_edicion <= 0 ) {
	      	anio_edicion = null;
	      	$("#ErrorMensaje-anio_edicion").text('El Año NO puede ser cero.');
	        $("#ErrorMensaje-anio_edicion").show();
	        $("#anio_edicion").focus();
	        return false;	
	      };

	      var FechaPublicacion = $('#FechaPublicacion').val().trim();

			if( FechaPublicacion == null || FechaPublicacion.length == 0  ) {
      			FechaPublicacion = null;
		      	$("#ErrorMensaje-FechaPublicacion").text('La Fecha de Publicacion no puede ser vacía');
		        $("#ErrorMensaje-FechaPublicacion").show();
		        $("#FechaPublicacion").focus();
		        return false;
		      }	      

		   var codigo_isbn = $('#codigo_isbn').val().trim();

			if( codigo_isbn == null || codigo_isbn.length == 0  ) {
      			codigo_isbn = null;
		      	$("#ErrorMensaje-codigo_isbn").text('El Codigo ISBN no puede ser vacío.');
		        $("#ErrorMensaje-codigo_isbn").show();
		        $("#codigo_isbn").focus();
		        return false;
		      }

		    var resumen = $('#resumen').val().trim();

			if( resumen == null || resumen.length == 0  ) {
      			resumen = null;
		      	$("#ErrorMensaje-resumen").text('El Resumen no puede ser vacío.');
		        $("#ErrorMensaje-resumen").show();
		        $("#resumen").focus();
		        return false;
		      }

		    var filas_autor = $('#tabla tr').length;
		    
		    if (filas_autor - 1 <= 0 ) {

		    	resumen = null;
		      	$("#ErrorMensaje-tabla").text('Debe Existir al Menos un Autor Asociado al Libro.');
		        $("#ErrorMensaje-tabla").show();
		        //$("#resumen").focus();
		        return false;
		    
		    };

	});

	$(document).on('keypress', '#nombre_libro', function(event) {
		$("#ErrorMensaje-nombre_libro").hide();
	});

	$(document).on('keypress', '#numero_paginas', function(event) {
		$("#ErrorMensaje-numero_paginas").hide();
	});

	$(document).on('keypress', '#anio_edicion', function(event) {
		$("#ErrorMensaje-anio_edicion").hide();
	});

	$(document).on('keypress', '#FechaPublicacion', function(event) {
		$("#ErrorMensaje-FechaPublicacion").hide();
	});

	$(document).on('keypress', '#codigo_isbn', function(event) {
		$("#ErrorMensaje-codigo_isbn").hide();
	});

	$(document).on('keypress', '#resumen', function(event) {
		$("#ErrorMensaje-resumen").hide();
	});

	$(document).on("click",".eliminar-fila-detalle",function(){
	    var parent = $(this).parents().get(0);
	    $(parent).remove();
	});

	$(document).on('click', '.btnAgregarAutor', function(event) {
		
		$('#ErrorMensaje-tabla').hide();

		var codigo_repetido = 0;

		$('table#tabla tbody tr').each(function(index,) {

			if ($(this).find('input').val() == $('#autor_id').val() ) {
				codigo_repetido = 1;
			};
		});

		if (codigo_repetido <= 0 ) {

			var row = "<tr class='row-fila-detalle'><td style='display:none;'><input  type='text' name='autores_id[]' value='" + $('#autor_id').val()+ "'></td><td><textarea name='autores_nombres[]' id='descripcion_detalle' class='text-center form-control descripcion_detalle' rows='1' readonly>" + $('#autor_id option:selected').text() + "</textarea></td><td style='vertical-align: middle;' class='eliminar-fila-detalle text-center'><button type='button' class='btn btn-danger'>Eliminar</button></td></tr>";

			$("#tabla tbody").append(row);	
		
		};
	
	});



});