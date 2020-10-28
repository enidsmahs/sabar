<?php
if (!isset($_SESSION)) {
    session_start();
}
    require '../connection/ProcessusServiceImpl.php';
// APPEL A NOTRE BASE DE DONNEE
    $db = new ProcessusServiceImpl();

// VERIFICATION EMAIL
    if (isset($_POST['email_verif']) && isset($_POST['adresse'])) {
        $adresse = $_POST['adresse'];
        $result = $db->read_count("select email from student where email = '".$adresse."' ");
        echo json_decode($result);
    }

// AJOUTER UN NOUVEL STUDENT
    if (isset($_POST['student_signup']) && isset($_POST['name']) && isset($_POST['adresse']) && isset($_POST['passe'])) {
        $name = $_POST['name'];
        $adresse = $_POST['adresse'];
        $passe = $_POST['passe'];


        $insert = $db->create(
            "insert into student(nom, email, passe) values(:name, :email, :passe)",
            [
                ':name' => $name,
                ':email' => $adresse,
                ':passe' => $passe
            ]
        );

        if ($insert == true) {
            echo json_encode("OK");
        } else {
            echo json_encode("FAILED");
        }
    }

// LOGIN STUDENT
    if (!isset($_SESSION['is_login'])) {
        if (isset($_POST['student_login']) && isset($_POST['adresseLogin']) && isset($_POST['passeLogin'])) {
            $adresseLogin = $_POST['adresseLogin'];
            $passeLogin = $_POST['passeLogin'];
            $rows = $db->read_count("select email, passe from student where email = '".$adresseLogin."' and passe = '".$passeLogin."' ");

            if ($rows === 1) {
                $_SESSION['is_login'] = true;
                $_SESSION['adresse_email'] =  $adresseLogin;
                echo json_encode($rows);
            } else if ($rows === 0) {
                echo json_encode($rows);
            }
        }
    }

 ?>
