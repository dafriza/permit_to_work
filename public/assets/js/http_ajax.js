function submitWithAjax(target_id, ifSuccess = null, ifError = null) {
    $("#" + target_id).on("submit", function (e) {
        e.preventDefault();
        let form = $(this);
        $.ajax({
            url: form.attr("action"),
            type: "POST",
            data: form.serialize(),
            success: function (data, textStatus, xhr) {
                if (textStatus == "success") {
                    if (ifSuccess != null) {
                        ifSuccess();
                    }
                    swal_usage_ok("Success!", "Berhasil!", "success");
                }
                console.log(data);
                // console.log(textStatus);
                // console.log(xhr);
            },
            error: function (xhr, textStatus, err) {
                if (textStatus == "error") {
                    if (ifError != null) {
                        ifError();
                    }
                    swal_usage_ok("Error!", xhr.responseJSON.message, "error");
                }
                // console.log(xhr);
                // console.log(textStatus);
                // console.log(err);
            },
        });
        // console.log($(this).attr('action'));
    });
}
function submitWithAjaxOnlyForm(targetId) {
    // let form = $("#signed_request");
    let form = $("#" + targetId);
    $.ajax({
        url: form.attr("action"),
        type: "POST",
        data: form.serialize(),
        success: function (data, textStatus, xhr) {
            setTimeout(function () {
                location.reload();
            }, 1500);
            Swal.fire("Saved!", "", "success");
        },
        error: function (xhr, textStatus, err) {
            Swal.fire(xhr.responseJSON.message, "", "error");
        },
    });
}
function postWithAjax(urlData, token) {
    $.ajax({
        url: urlData,
        type: "POST",
        data: {
            _token: token,
        },
        success: function (data, textStatus, xhr) {
            if (textStatus == "success") {
                toastDefault("Success!", "Berhasil!", "success");
            }
        },
        error: function (xhr, textStatus, err) {
            // if (textStatus == "error") {
            toastDefault("Error!", xhr.responseJSON.message, "error");
            // }
        },
    });
}
function getDataWithAjax(url_data) {
    let ajax = $.ajax({
        url: url_data,
        type: "GET",
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
        timer: 1500,
    });
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
    });
}
function toastDefault(title, text, icon) {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        },
    });
    Toast.fire({
        icon: icon,
        title: title,
        text: text,
    });
}
function swal_usage_img(title, text, image) {
    Swal.fire({
        title: title,
        text: text,
        html: `<img src="data:image/png;base64, ${image}"></img>`,
    });
}
function partDeleteWithAjax(id, url_data) {
    let ajax = $.ajax({
        url: url_data,
        type: "GET",
        success: function (data, textStatus, xhr) {
            if (textStatus == "success") {
                swal_usage_ok("Success!", "Berhasil!", "success");
            }
        },
        error: function (xhr, textStatus, err) {
            if (textStatus == "error") {
                swal_usage_ok("Error!", xhr.responseJSON.message, "error");
            }
        },
    });
    return ajax;
}
function swalPostWithAjax(id, formId, type, isHtml = null, isFunction) {
    $("#" + id).on("click", function (e) {
        let swalData = typeSwal(type, isHtml);
        e.preventDefault();
        // var form = $(this).parents("form");
        Swal.fire({
            ...swalData,
        }).then((result) => {
            let form = $("#" + formId);
            // console.log(formId);
            if (result.isConfirmed) {
                $.ajax({
                    url: form.attr("action"),
                    type: "POST",
                    data: form.serialize(),
                    success: function (data, textStatus, xhr) {
                        if (isFunction != null) {
                            isFunction();
                        }
                        if (textStatus == "success") {
                            swal_usage_ok("Success!", "Berhasil!", "success");
                        }
                        console.log(data);
                    },
                    error: function (xhr, textStatus, err) {
                        // console.log(xhr);
                        if (textStatus == "error") {
                            swal_usage_ok(
                                "Error!",
                                xhr.responseJSON.message,
                                "error"
                            );
                        }
                    },
                });
            }
        });
    });
}
function typeSwal(type, isHtml = null) {
    switch (type) {
        case "delete":
            return {
                title: "Delete data",
                text: "Data yang akan dihapus tidak akan kembali!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false,
                ...isHtml,
            };
            break;
        case "submit":
            return {
                title: "Submit data",
                text: "Data yang akan submit masuk sistem!",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#55dd6b",
                confirmButtonText: "Yes, submit it!",
                closeOnConfirm: false,
                ...isHtml,
            };
            break;
    }
}
