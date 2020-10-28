<?php

if (!isset($_SESSION)) {session_start();}
require '../connection/ProcessusServiceImpl.php';
// APPEL A NOTRE CLASSE DE FONCTIONS
$db = new ProcessusServiceImpl();

// LOGIN ADMIN
if (!isset($_SESSION['is_admin_login'])) {
    if (isset($_POST['student_admin_login']) && isset($_POST['adresseAdminLogin']) && isset($_POST['passeAdminLogin'])) {
        $adresseAdminLogin = $_POST['adresseAdminLogin'];
        $passeAdminLogin = $_POST['passeAdminLogin'];
        $rows = $db->read_count("select email, passe from admin where email = '".$adresseAdminLogin."' and passe = '".$passeAdminLogin."' ");

        if ($rows === 1) {
            $_SESSION['is_admin_login'] = true;
            $_SESSION['adresse_email'] =  $adresseAdminLogin;
            echo json_encode($rows);
        } else if ($rows === 0) {
            echo json_encode($rows);
        }
    }
}
