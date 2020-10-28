function isAdminLoggin() {
    var adresseAdminLogin = $("#adresseAdminLogin").val()
    var passeAdminLogin = $("#passeAdminLogin").val()

    $.ajax({
        url: "student/processus-admin.php",
        method: "post",
        dataType: "json",
        data: {
            student_admin_login: "student_admin_login",
            adresseAdminLogin: adresseAdminLogin,
            passeAdminLogin: passeAdminLogin
        },
        success: function (data) {
            if (data == 0) {
                $('#successMsgAdminLogin').html('<small class="alert alert-danger">Email ou mot de passe invalide</small>')
            } else if (data == 1) {
                $('#successMsgAdminLogin').html('<div class="icomoon-spinner2 spinner2" role="status" id="spinner"> </div>');
                setTimeout(() => {
                    window.location.href = 'admin-page.php';
                }, 1000);
            }
        }
    })
}