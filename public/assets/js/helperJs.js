function isNumberKey(evt) {
    let charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function isDateNow(evt) {
    // let choose_date = new Date(evt.target.value).toISOString();
    let choose_date = new Date(evt.target.value);
    choose_date = choose_date.getFullYear() + '-' + choose_date.getMonth() + '-' + choose_date.getDate();
    // let date_now = new Date().toISOString();
    let date_now = new Date();
    date_now = date_now.getFullYear() + '-' + date_now.getMonth() + '-' + date_now.getDate();
    if (choose_date < date_now) {
        evt.target.value = null;
        return false;
    } return true;
}

function romanize(num) {
    var lookup = { M: 1000, CM: 900, D: 500, CD: 400, C: 100, XC: 90, L: 50, XL: 40, X: 10, IX: 9, V: 5, IV: 4, I: 1 }, roman = '', i;
    for (i in lookup) {
        while (num >= lookup[i]) {
            roman += i;
            num -= lookup[i];
        }
    }
    return roman;
}
