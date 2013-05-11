(function() {

  jQuery(function() {
    $('.guardar').on('click', function() {
      var form,
        _this = this;
      this.button = $(this);
      this.loading = $('img[data-id=' + this.button.data('id') + ']');
      this.button.attr('disabled', true);
      this.loading.show();
      form = this.button.parents('form');
      return $.post(WEBROOT + 'admin/noticias/publish', form.serialize(), function(data) {
        _this.button.attr('disabled', false);
        return _this.loading.hide();
      });
    });
    $('.editar').on('click', function() {
      return document.location = WEBROOT + 'admin/noticias/edit/' + $(this).data('id');
    });
    return $('.eliminar').on('click', function() {
      var _this = this;
      this.button = $(this);
      this.row = this.button.parents('form');
      return $.post(WEBROOT + 'admin/noticias/delete/' + $(this).data('id'), function(data) {
        if (data === 'true') return _this.row.hide();
      });
    });
  });

}).call(this);
