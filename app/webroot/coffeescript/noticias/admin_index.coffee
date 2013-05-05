jQuery ->
  $('.guardar').on 'click', ->
    @button = $(@)
    @loading = $('img[data-id=' + @button.data('id') + ']')
    @button.attr('disabled', true)
    @loading.show()
    form = @button.parents('form')
    $.post 'publish', form.serialize(), (data) =>
      @button.attr('disabled', false)
      @loading.hide()
