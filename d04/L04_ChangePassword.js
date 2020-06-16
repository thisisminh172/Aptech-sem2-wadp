
function kt() {
    alert("hello");
    var pass1 = $('#txtNewPassword1').val();
    var pass2 = $('#txtNewPassword2').val();
var oldPass = $('#txtOldPassword').val();

    if (pass1 != pass2) {
        alert("new password must be the same with confirmed password");
        return false;
    } else {
        alert("good");
        return false;
    }
}
