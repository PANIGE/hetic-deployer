<?php
$_pdo=null;

function getPDO(){
    global $_pdo;#motifie la protée de la variable
    if($_pdo == null){
        $host = "127.0.0.1";
        $Name = "panige";
        $PW   = "azerty";
        $user = "panige-blog";

        $_pdo = new PDO('mysql:host='.$host.';dbname='.$Name.';charset=utf8',$user ,$PW);
    }
    return $_pdo;
}

$pdo=getPDO();
?>
