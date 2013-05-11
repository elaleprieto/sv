jQuery ->
  $('.guardar').on 'click', ->
    @button = $(@)
    @loading = $('img[data-id=' + @button.data('id') + ']')
    @button.attr('disabled', true)
    @loading.show()
    form = @button.parents('form')
    $.post WEBROOT + 'admin/noticias/publish', form.serialize(), (data) =>
      @button.attr('disabled', false)
      @loading.hide()

  $('.editar').on 'click', ->
    document.location = WEBROOT + 'admin/noticias/edit/' + $(@).data('id')

  $('.eliminar').on 'click', ->
    @button = $(@)
    @row = @button.parents('form')
    # document.location = WEBROOT + 'admin/noticias/delete/' + $(@).data('id')
    $.post WEBROOT + 'admin/noticias/delete/' + $(@).data('id'), (data) =>
      if data is 'true'
        @row.hide()
