<?php require_once('../config.php') ?>
<?php
require_once(ROOT_PATH . '/php/database.php');

if (isset($_SESSION['session_id'])) {
    header('Location: admin.php');
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (empty($username) || empty($password)) {
        $msg = 'Inserisci username e password';
    } else {
        $query = "
            SELECT username, password
            FROM users
            WHERE username = :username
        ";
        
        $check = $pdo->prepare($query);
        $check->bindParam(':username', $username, PDO::PARAM_STR);
        $check->execute();
        
        $user = $check->fetch(PDO::FETCH_ASSOC);
        
        if (!$user || password_verify($password, $user['password']) === false) {
            $msg = 'Credenziali utente errate';
        } else {
            session_regenerate_id();
            $_SESSION['session_id'] = session_id();
            $_SESSION['session_user'] = $user['username'];
            
            header('Location: admin.php');
            exit;
        }
    }
    
}
?>
<!DOCTYPE HTML>
<html lang="it-IT">
    <head>
        <?php require_once(ROOT_PATH . '/includes/head_section.php') ?>
        <title>I Gatti In Cerca d'Autore</title>
    </head>
    <body>
        <!-- <?php require_once(ROOT_PATH . '/utils/show_vars.php'); ?> -->
        <?php require_once(ROOT_PATH . '/includes/navbar.php') ?>
        <div role="main" class="container">
            <div class="row">
                <p><?php echo $msg; ?></p>
                <a href="login.php">torna indietro</a>
            </div>
        </div>
        <?php require_once(ROOT_PATH . '/includes/footer.php') ?>
    </body>
</html>