<?php require_once('config.php') ?>
<!DOCTYPE HTML>
<html lang="it-IT">
    <head>
        <?php require_once(ROOT . '/includes/head_section.php') ?>
        <title>I Gatti In Cerca d'Autore</title>
    </head>
    <body>
        <?php 
        echo 'DOCUMENT_ROOT ' . $_SERVER['DOCUMENT_ROOT'] . "</br>";
        echo 'SERVER_NAME ' . $_SERVER['SERVER_NAME'] . "</br>";
        echo 'HTTP_REFERER ' . $_SERVER['HTTP_REFERER'] . "</br>";
        echo 'HTTP_HOST ' . $_SERVER['HTTP_HOST'] . "</br>";
        echo "SERVER_NAME +  REQUEST_URI http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']. "</br>";
        echo 'HTTPS ' . $_SERVER['HTTPS'] . "</br>";
        echo 'REQUEST_URI ' . $_SERVER['REQUEST_URI'] . "</br>";
        echo $protocol . "://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?') . "</br>";

        echo "</br>";
        echo 'ROOT ' . ROOT . "</br>";
        echo "BASE_URL " . BASE_URL . "</br>";
        ?>
        <?php require_once(ROOT . '/includes/navbar.php') ?>
        <div role="main" class="container">
            <div class="row">
                <?php
                    require_once(ROOT . '/php/database.php');
                    $query = "
                        SELECT title, content
                        FROM blog_posts
                        WHERE id_post = :id_post
                    ";
                    
                    $check = $pdo->prepare($query);
                    $id = 1;
                    $check->bindParam(':id_post', $id, PDO::PARAM_INT);
                    $check->execute();
                    
                    $post = $check->fetch(PDO::FETCH_ASSOC);

                    if ($post) {
                        printf("<h1>%s</h1>", $post['title']) ;
                        echo $post['content'];                        
                    } else {
                        echo "<p><i>nessun contenuto disponibile</i></p>";
                    }
                ?>
            </div>
        </div>
        <?php require_once(ROOT . '/includes/footer.php') ?>
    </body>
</html>