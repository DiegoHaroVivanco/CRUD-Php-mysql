<?php
    require_once("./controller/userController.php");
    $objController = new usernameController();
    $objController->update($_POST['id'],$_POST['nombre']);

?>