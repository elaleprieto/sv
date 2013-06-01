(function() {
  jQuery(function() {
    return $('#formulario').on('submit', function(evento) {
      evento.preventDefault();
      return $.post("users/contactar", $('#formulario').serialize(), function(data) {
        if (data === 'true') {
          $('#alerta').removeClass('alert-error');
          $('#alerta').addClass('alert-success');
          $('#alerta').text('Su mensaje ha sido enviado. ¡Muchas gracias!');
          return $('#alerta').fadeIn('slow').delay('3000').fadeOut('5000');
        } else {
          $('#alerta').text('Ha ocurrido un error. Intente nuevamente.');
          $('#alerta').removeClass('alert-success');
          $('#alerta').addClass('alert-error');
          return $('#alerta').fadeIn('slow').delay('3000').fadeOut('5000');
        }
      });
    });
  });

}).call(this);
