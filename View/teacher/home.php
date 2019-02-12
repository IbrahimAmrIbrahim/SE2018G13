<!DOCTYPE html>
<?php
include_once("../../Controllers/common.php");
include_once('../../Models/user.php');
$id = safeGet('id');
Database::DBConnect();
$user = new User($id);
?>
<html lang= "en">
    <?php include_once './common/head.php'; ?>  
    <body>
        <?php
        include_once './common/Navbar.php';
        ?>   
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="container">
                    <h1 class="mt-5">Welcome <?= $user->profession?> : <?= $user->Name ?></h1>
                </div>
            </div>
        </div>
    </body>
    <?php include_once './common/tail.php'; ?>
</html>


