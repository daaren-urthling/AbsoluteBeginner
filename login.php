<?php require_once('config.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>I Dilettanti In Cerca d'Autore - Login</title>
        <?php require_once(ROOT_PATH . '/includes/head_section.php') ?>
    </head>
    <body>
        <?php require_once(ROOT_PATH . '/includes/navbar.php') ?>
        <div role="main" class="container">
            <div class="row">
                <form class="form mt-3" method="post" action="php/login.php">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Login</h3>
                            <div class="mb-3 row">
                                <div class="col-sm-10">
                                    <input type="text" id="username" class="form-control" placeholder="Username" name="username" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-10">
                                    <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            <div>
                                <button type="submit" name="login" class="btn btn-primary">Accedi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php require_once(ROOT_PATH . '/includes/footer.php') ?>
    </body>
</html>
