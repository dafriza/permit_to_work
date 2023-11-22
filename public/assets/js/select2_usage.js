function dynamicSelect2(target, url) {
  return $('#' + target).select2({
    // minimumInputLength: 2,
    ajax: {
      url: function (params) {
        return url;
      },
      cache: true,
    },
    theme: "bootstrap-5",
    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    // placeholder: $(this).data('placeholder'),
  })
}
