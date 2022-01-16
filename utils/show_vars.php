<?php 
    echo 'DOCUMENT_ROOT ' . $_SERVER['DOCUMENT_ROOT'] . "</br>";
    echo 'SERVER_NAME ' . $_SERVER['SERVER_NAME'] . "</br>";
    echo 'HTTP_REFERER ' . $_SERVER['HTTP_REFERER'] . "</br>";
    echo 'HTTP_HOST ' . $_SERVER['HTTP_HOST'] . "</br>";
    echo 'SCRIPT_FILENAME ' . $_SERVER['SCRIPT_FILENAME'] . "</br>";
    echo "SERVER_NAME +  REQUEST_URI http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']. "</br>";
    if(isset($_SERVER['HTTPS'])){    
        echo 'HTTPS ' . $_SERVER['HTTPS'] . "</br>";
    }
    else {
        echo 'HTTPS (undefined)' . "</br>";
    }
    echo 'REQUEST_URI ' . $_SERVER['REQUEST_URI'] . "</br>";
    echo 'basename ' . pathinfo(ROOT_PATH, PATHINFO_BASENAME) . "</br>";

    echo "</br>";
    echo 'ROOT_PATH ' . ROOT_PATH . "</br>";
    echo "ROOT_URL " . ROOT_URL . "</br>";
?>
