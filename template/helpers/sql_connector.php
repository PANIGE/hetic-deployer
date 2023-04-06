<?php
$_pdo=null;

function getPDO(){
    global $_pdo;#motifie la protée de la variable
    if($_pdo == null){
        $host = "127.0.0.1";
        $Name = "%(USERNAME)";
        $PW   = "%(PASSWORD)";
        $user = "%(USERNAME)";

        $_pdo = new PDO('mysql:host='.$host.';dbname='.$Name.';charset=utf8',$user ,$PW);
    }
    return $_pdo;
}

$pdo=getPDO();
?>
