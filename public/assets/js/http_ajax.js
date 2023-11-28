function submitWithAjax(target_id) {
  $('#' + target_id).on('submit', function (e) {
    e.preventDefault();
    let form = $(this);
    $.ajax({
      url: form.attr('action'),
      data: form.serialize(),
      success: function (data, textStatus, xhr) {
        if (textStatus == 'success') {
          // Swal.fire({
          //   title: 'Success!',
          //   text: "Berhasil simpan data!",
          //   icon: 'success',
          //   showConfirmButton: false,
          //   timer: 1500
          // })
          swal_usage('Success!', "Berhasil!", 'success')
        }
        // console.log(data);
        // console.log(textStatus);
        // console.log(xhr);
      },
      error: function (xhr, textStatus, err) {
        if (textStatus == 'error') {
          swal_usage("Error!", xhr.responseJSON.message, 'error')
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

function swal_usage(title, text, icon) {
  Swal.fire({
    // title: 'Error!',
    title: title,
    // text: xhr.responseJSON.message,
    text: text,
    // icon: 'error',
    icon: icon,
    showConfirmButton: false,
    timer: 1500
  })
}
