function submitWithAjax(target_id, ifSuccess = null) {
    $('#' + target_id).on('submit', function (e) {
        e.preventDefault();
        let form = $(this);
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function (data, textStatus, xhr) {
                if (textStatus == 'success') {
                    // Swal.fire({
                    // title: 'Success!',
                    // text: "Berhasil simpan data!",
                    // icon: 'success',
                    // showConfirmButton: false,
                    // timer: 1500
                    // })
                    if (ifSuccess != null) {
                        ifSuccess()
                    }
                    swal_usage_ok('Success!', "Berhasil!", 'success')
                }
                // console.log(data);
                // console.log(textStatus);
                // console.log(xhr);
            },
            error: function (xhr, textStatus, err) {
                if (textStatus == 'error') {
                    swal_usage_ok("Error!", xhr.responseJSON.message, 'error')
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
function swal_usage_ok(title, text, icon) {
    Swal.fire({
        // title: 'Error!',
        title: title,
        // text: xhr.responseJSON.message,
        text: text,
        // icon: 'error',
        icon: icon,
        showConfirmButton: true,
        // timer: 1500
    })
}
function swal_usage_img(title, text, image) {
    Swal.fire({
        title: title,
        text: text,
        html: `<img src="data:image/png;base64, ${image}"></img>`
    })
}

function partDeleteWithAjax(id, url_data) {
    let ajax = $.ajax({
        url: url_data,
        type: 'GET',
        success: function (data, textStatus, xhr) {
            if (textStatus == 'success') {
                swal_usage_ok('Success!', "Berhasil!", 'success')
            }
        },
        error: function (xhr, textStatus, err) {
            if (textStatus == 'error') {
                swal_usage_ok("Error!", xhr.responseJSON.message, 'error')
            }
        }
    });
    return ajax;
}
