<?php
include_once('../../Controllers/common.php');
include_once('../../Models/user.php');

Database::DBConnect();
$id = safeGet('id');
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
                    <h2>We are electrical engineers from CSE department in AIN SHAMS University.</h2>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="card-box">
                                <div class="card-title">
                                    <h2>Team Members (G13)</h2>
                                    <ul>
                                        <li>Ibrahim Amr</li>
                                        <li>Ahmed Hessuin</li>
                                        <li>Ahmed Osama</li>
                                        <li>Ahmed Saeid</li>
                                        <li>Eslam Tarek</li>
                                        <li>Marwan Mostafa</li>
                                        <li>Mohammed Adel</li>
                                    </ul>
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
