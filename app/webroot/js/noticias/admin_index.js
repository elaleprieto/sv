(function() {

  jQuery(function() {
    return $('.guardar').on('click', function() {
      var form,
        _this = this;
      this.button = $(this);
      this.loading = $('img[data-id=' + this.button.data('id') + ']');
      this.button.attr('disabled', true);
      this.loading.show();
      form = this.button.parents('form');
      return $.post('publish', form.serialize(), function(data) {
        _this.button.attr('disabled', false);
        return _this.loading.hide();
      });
    });
  });

}).call(this);
