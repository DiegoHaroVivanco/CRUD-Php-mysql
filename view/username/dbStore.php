<?php
    require_once("./controller/userController.php");
    $objController = new usernameController();
    $objController->guardar($_POST['nombre']);
?>