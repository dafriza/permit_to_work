function swal_usage(title, text, icon) {
  return Swal.fire({
    // title: 'Success!',
    title: title,
    // text: "Berhasil simpan data!",
    text: text,
    // icon: 'success',
    icon: icon,
    showConfirmButton: false,
    timer: 1500
  });
}
export {swal_usage}
