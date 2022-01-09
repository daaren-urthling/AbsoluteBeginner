<!DOCTYPE HTML>
<html lang="it-IT">
    <head>
        <?php require_once('includes/head_section.php') ?>
        <title>I Dilettanti In Cerca d'Autore</title>
    </head>
    <body>
        <?php require_once('includes/navbar.php') ?>
        <div role="main" class="container">
            <div class="row">
                <?php
                    require_once('php/database.php');
                    $query = "
                        SELECT title, content
                        FROM blog_posts
                        WHERE post_type = :about
                    ";
                    
                    $check = $pdo->prepare($query);
                    $about = 'about';
                    $check->bindParam(':about', $about, PDO::PARAM_STR);
                    $check->execute();
                    
                    $post = $check->fetch(PDO::FETCH_ASSOC);

                    if ($post) {
                        echo $post['content'];                        
                    } else {
                        echo "<p><i>nessun contenuto disponibile</i></p>";
                    }
                ?>
            </div>
        </div>
        <?php require_once('includes/footer.php') ?>
    </body>
</html>