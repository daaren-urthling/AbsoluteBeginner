<?php require_once('config.php') ?>
<!DOCTYPE HTML>
<html lang="it-IT">
    <head>
        <?php require_once(ROOT_PATH . '/includes/head_section.php') ?>
        <title>I Gatti In Cerca d'Autore</title>
    </head>
    <body>
        <?php require_once(ROOT_PATH . '/utils/show_vars.php') ?>
        <?php require_once(ROOT_PATH . '/includes/navbar.php') ?>
        <div role="main" class="container">
            <div class="row">
                <?php
                    require_once(ROOT_PATH . '/php/database.php');
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
        <?php require_once(ROOT_PATH . '/includes/footer.php') ?>
    </body>
</html>