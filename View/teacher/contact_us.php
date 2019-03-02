<?php
// Start the session
session_start();

include_once('../../Controllers/common.php');
include_once('../../Models/user.php');

Database::DBConnect();
if (!isset($_SESSION['id'])) {
    header("Location: ../../index.php?status=session_expired");
} else {
    $id = $_SESSION['id'];
}
$user = new User($id); // get the user id 
?>  

<!DOCTYPE html>
<html lang= "en">
    <?php
    include_once './common/head.php';
    ?>  

    <body>
        <?php
        include_once './common/Navbar.php';
        ?>  

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="container" style="margin-top: 50px">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="card-box">
                                <div class="card-title">
                                    <h2>To Contact us for support , question and feedback please send us email on:   </h2>
                                    <p style="text-align: center;">ibrahem.amr.eid@gmail.com <br>
                                        dreadknight29@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php include_once './common/tail.php'; ?>
</html>