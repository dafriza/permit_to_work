function submitWithAjax(target_id) {
  $('#' + target_id).on('submit', function (e) {
    e.preventDefault();
    let form = $(this);
    $.ajax({
      url: form.attr('action'),
      data: form.serialize(),
      success: function (data, textStatus, xhr) {
        if (textStatus == 'success') {
          Swal.fire({
            title: 'Success!',
            text: "Berhasil simpan data!",
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
          })
        }
        // console.log(data);
        // console.log(textStatus);
        // console.log(xhr);
      },
      error: function (xhr, textStatus, err) {
        if (textStatus == 'error') {
          Swal.fire({
            title: 'Error!',
            text: xhr.responseJSON.message,
            icon: 'error',
            showConfirmButton: false,
            timer: 1500
          })
        }
        // console.log(xhr);
        // console.log(textStatus);
        // console.log(err);
      }
    });
    // console.log($(this).attr('action'));
  });
}

function getDataWithAjax(url_data) {
  let ajax = $.ajax({
    url: url_data,
    type: 'GET',
  });
  return ajax;
}
