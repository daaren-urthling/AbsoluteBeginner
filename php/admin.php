<!DOCTYPE html>
<html>
    <head>
        <title>I Dilettanti In Cerca d'Autore - Admin</title>
        <link rel="icon" href="img/Logo.ico">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/idGeneratedStyles.css">
        <link rel="stylesheet" href="css/DICdA.css">
    </head>
    <body>
        <?php
        session_start();

        if (isset($_SESSION['session_id'])) {
            $session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
            
            printf("Benvenuto %s", $session_user);
            echo "<br>";
            printf("%s", '<a href="logout.php">logout</a>');
        } else {
            printf("Effettua il %s per accedere all'area riservata", '<a href="../login.html">login</a>');
            die();
        }
        ?>
    </body>