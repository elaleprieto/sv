jQuery ->
	$('#formulario').on 'submit', (evento) ->
		evento.preventDefault()
		$.post "users/contactar", $('#formulario').serialize(), (data) ->
			if data is 'true'
				$('#alerta').removeClass('alert-error')
				$('#alerta').addClass('alert-success')
				$('#alerta').text('Su mensaje ha sido enviado. ¡Muchas gracias!')
				$('#alerta').fadeIn('slow').delay('3000').fadeOut('5000')
			else
				$('#alerta').text('Ha ocurrido un error. Intente nuevamente.')
				$('#alerta').removeClass('alert-success')
				$('#alerta').addClass('alert-error')
				$('#alerta').fadeIn('slow').delay('3000').fadeOut('5000')
				
