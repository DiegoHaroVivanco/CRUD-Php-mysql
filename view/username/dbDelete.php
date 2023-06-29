<?php
    require_once("./controller/userController.php");
    $objController = new usernameController();
    $objController->delete($_GET['id']);

?>