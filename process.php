<?php

$login = $_POST["login"];
$senha = $_POST["Senha"];
if(isset($_POST["salva"])){
    setcookie("login",$login);
    setcookie("senha",$senha);
}
else{
    setcookie("login",$login,time()-1);
    setcookie("senha",$senha, time()-1);
}



if($_POST["usuario"] == "admin" && $_POST["senha"] == "123"){
    session_start();
    $_SESSION["index"] = true;
    header('Location: index.php');
}
else{
    header('Location: login.php');
}
?>
