<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
require_once './UserModel.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $userModel = new UserModel();
        $status = $userModel->doesEmailExist('jame@example.com');
        if (isset($status))
        {
            echo $status;
        }
        ?>
    </body>
</html>
