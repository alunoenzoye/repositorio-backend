<?php
session_start();
// echo $_SESSION['autenticado'];
// Verificar se o usuário está autenticado através da SESSION
if (!(isset($_SESSION['autenticado'])) or !($_SESSION['autenticado'])) {
  header('location: pagina_login.php?login=erro2');
}