<?php


//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);

if (!empty($cleardb_url["path"]))
{
    $config = [
        'db_engine' => 'mysql',
        'db_host' => $cleardb_url["host"],
        'db_name' => substr($cleardb_url["path"],1),
        'db_user' => $cleardb_url["user"],
        'db_password' => $cleardb_url["pass"],
    ];
}
else
{
    $config = [
        'db_engine' => 'mysql',
        'db_host' => '127.0.0.1',
        'db_name' => 'absolute-beginner',
        'db_user' => 'root',
        'db_password' => '',
    ];
}

$db_config = $config['db_engine'] . ":host=".$config['db_host'] . ";dbname=" . $config['db_name'];

try {
    $pdo = new PDO($db_config, $config['db_user'], $config['db_password'], [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]);
        
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    exit("Impossibile connettersi al database: " . $e->getMessage());
}