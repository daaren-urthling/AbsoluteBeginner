<!DOCTYPE HTML>
<html lang="it-IT">
    <head>
        <meta charset="UTF-8">
        <title>I Dilettanti In Cerca d'Autore</title>
        <link rel="icon" href="../img/Logo.ico">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/idGeneratedStyles.css">
        <link rel="stylesheet" href="../css/DICdA.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <div>
                    <a href="../index.php"><img src="../img/Logo.png" height="110"></a>
                </div>
                <div class="w-100 ms-4">
                    <div>
                        <a href="#">Chi siamo</a>
                    </div>
                </div>
                <div>
                    <a href="login.html">Login</a>
                </div>
            </div>
        </nav>
        <div role="main" class="container">
            <div class="row">
                <?php
                    require_once('database.php');
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
        <div class="footer">
            <div class="container">
                <span class="text-muted">
                    <i class="fa fa-facebook-square"></i>
                    <i class="ps-2 fa fa-youtube-play"></i>
                    <i class="ps-2 fa fa-instagram"></i>
                    <i class="ps-2 fa fa-twitter-square"></i>
                </span> 
            </div>
        </div>
    </body>
</html>