<?php
unset($_SESSION['email'], ['login']);

session_destroy();
header('Location: ../index.html');
?>