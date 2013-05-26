(function() {

  jQuery(function() {
    return $('.cancelar').on('click', function() {
      return document.location = WEBROOT + 'admin/noticias/index';
    });
  });

}).call(this);
