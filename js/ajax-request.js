// VERIFICATION EMAIL
$(document).ready(function (){
    $('#adresse').on("keypress blur", function (){
        var reg = /^[a-zA-Z0-9.%+_-]+@([a-zA-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var adresse = $('#adresse').val();
        $.ajax({
            url: "student/processus-student.php",
            method: "POST",
            data: {
                email_verif: 'email_verif',
                adresse: adresse
            },
            success: function (data) {
                if (data != 0) {
                    $('#labelMsgAdresse').html('<small class="h6" style="color: red">cet email existe déjà</small>');
                    $('#save').attr("disabled", true);
                } else if (data == 0  && reg.test(adresse)) {
                    $('#labelMsgAdresse').html('<small class="h6" style="color: green">cet email est valide</small>');
                    $('#save').attr("disabled", false);
                } else if (!reg.test(adresse)) {
                    $('#labelMsgAdresse').html('<small class="h6" style="color: red">veuillez saisir un email valide</small>');
                    $('#save').attr("disabled", true);
                }
            }
        })
    });
});

// AJOUTER UN NOUVEL STUDENT
function addStudent() {
    var name = $('#name').val();
    var adresse = $('#adresse').val();
    var passe = $('#passe').val();
    var reg = /^[a-zA-Z0-9.%+_-]+@([a-zA-Z0-9-]+\.)+[A-Z]{2,4}$/i;

    if (name.trim() == "") {
        $('#labelMsgName').html('<small class="h6" style="color: red">veuillez saisir votre nom</small>');
        $('#labelMsgName').focus();
        return false;
    } else if (adresse.trim() == "") {
        $('#labelMsgAdresse').html('<small class="h6" style="color: red">veuillez saisir votre email</small>');
        $('#labelMsgAdresse').focus();
        return false;
    } else if (passe.trim() == "") {
        $('#labelMsgPasse').html('<small class="h6" style="color: red">veuillez saisir votre mot de passe</small>');
        $('#labelMsgPasse').focus();
        return false;
    } else if (adresse.trim() != "" && !reg.test(adresse)) {
        $('#labelMsgAdresse').html('<small class="h6" style="color: red">veuillez saisir un email valide</small>');
        $('#labelMsgAdresse').focus();
    }

    else {
        $.ajax({
            url: 'student/processus-student.php',
            method: "POST",
            dataType: "json",
            data: {
                student_signup: 'student_signup',
                name: name,
                adresse: adresse,
                passe: passe
            },
            success: function (data) {
                if (data == "OK") {
                    clear();
                    $('#successMsg').html('<span class="alert alert-success">Etudiant enrégistré avec succés</span>');
                } else if (data == "FAILED") {
                    $('#successMsg').html('<span class="alert alert-danger">Erreur...</span>');
                }
            }
        })
    }
}


// METHODE EFFACER LE FORM APRES INSERTION
function clear() {
    $('#studentForm').trigger('reset');
    $('#labelMsgName').html(" ");
    $('#labelMsgAdresse').html(" ");
    $('#labelMsgPasse').html(" ");
}

// GESTION LOGIN

function isLoggin() {
    var adresseLogin = $('#adresseLogin').val();
    var passeLogin = $('#passeLogin').val();

    $.ajax({
        url: 'student/processus-student.php',
        method: 'post',
        data: {
            student_login: "student_login",
            adresseLogin: adresseLogin,
            passeLogin: passeLogin
        },
        success: function (data) {
            if (data == 0) {
                $('#successMsgLogin').html('<small class="alert alert-danger">Email ou mot de passe invalide</small>')
            } else if (data == 1) {
                $('#successMsgLogin').html('<div class="icomoon-spinner2 spinner2" role="status" id="spinner"> </div>');
                setTimeout(() => {
                    window.location.href = 'index.php';
                }, 1000);
            }
        }
    })
}