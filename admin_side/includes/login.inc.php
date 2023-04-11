<?php
if (isset($_POST['submit_log_in'])) {
    //include functions
    require_once('../functions/loginFunctions.fun.php');
    require_once('../functions/connect.fun.php');

    //login data
    $e_mail = $_POST['e_mail'];
    $password = $_POST['password'];

    //hadi kheliha hakda mabghatch tkhdem
    //check emmpty input
    // if (emptyInput($e_mail, $password) == false) {
    //     header('Location: ../pages/index.php?error=emptyInput');
    //     exit();
    // }


    $stmt = connect()->prepare('SELECT mdp FROM utilisateur WHERE email = ?;');

    //la we93at chi error ghay khdem had block
    if (!$stmt->execute(array($e_mail))) {
        $stmt = null;
        header('Location: ../pages/index.php?error=stmtfailed');
        exit();
    }

    //la mal9a ta email => utilisateur makinch
    if ($stmt->rowCount() == 0) {
        $stmt = null;
        header('Location: ../pages/index.php?error=usernotfound');
        exit();
    }

    $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // password_verify() -> returns true or false

    if ($password === $pwdHashed[0]['mdp']) { //$pwdHashed[0]['user_pwd'] mdp li kin fbase de données ki 9arno m3a li dakhel utilisateir
        $checkPwd = true;
    } else {
        $checkPwd = false;
    }

    if ($checkPwd == false) { //si mdp ghalat
       //$stmt = null;
        //header('Location: ../pages/index.php?error=wrongpassword');
        echo $checkPwd;
        echo $password;
        echo $pwdHashed[0]['mdp'];
        exit();
    } elseif ($checkPwd == true) { //si s7i7
        $stmt = connect()->prepare('SELECT * FROM utilisateur WHERE email = ? AND mdp= ?;');

        if (!$stmt->execute(array($e_mail, $password))) {
            $stmt = null;
            header('Location:../pages/index.php?error=stmtfailed');
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header('Location: ../pages/index.php?error=usernotfound');
            exit();
        }

        //gha njibo les données bach n3rfo le role dyal utilisateur note : 7aydi chargeur 100%
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $role = $user[0]['role1'];

        $stmt = null;
    }
    $stmt = null;

    header('Location: ../pages/adminUsers.php');
}