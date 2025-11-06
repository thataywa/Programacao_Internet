<?php
 if(!isset($_SESSION)){
    session_start();
 }

 if(!isset($_SESSION['id'])){
    die("voce nao pode acessar esta pagina porque nao esta logado.<p><a href=\"index.php\">Entrar<a/></p>");
 }

?>