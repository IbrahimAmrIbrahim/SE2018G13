<!DOCTYPE html>
<?php
include_once('../../Controllers/common.php');
include_once('../../Models/student.php');
include_once('../../Models/user.php');
Database::DBConnect();
$id = safeGet('id');
$user = new User($id);
?>

<!DOCTYPE html>
<html lang= "en">
    <?php include_once './common/head.php'; ?>  
    <body>
        <?php
        include_once './common/Navbar.php';
        ?>   
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div role="main" class="container">
                    <form action="../../Controllers/editAccountInfoController.php" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="../../Images/User.png" class="rounded-circle img-thumbnail" alt="User Img" width="250px" height="250px">
                            </div>
                            <div class="col-md-9">
                                <input type="hidden" name="user_id" value="<?=$id?>">

                                <div class="row">                        
                                    <div class="col-md-3" style="text-align: center;">Full Name</div>
                                    <div class="col-md-9"><input class="form-control" type ="text" name ="Full_Name" value="<?= $user->Name ?>" Required></div>
                                </div>  
                                <div class="row"  style="padding-top: 16px">                        
                                    <div class="col-md-3" style="text-align: center;">Email</div>
                                    <div class="col-md-9"><input class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="example@example.com" type ="text"  value="<?= $user->email ?>" name ="Email" Required></div>
                                </div>  
                                <div class="row"  style="padding-top: 16px">                        
                                    <div class="col-md-3" style="text-align: center;">Mobile No</div>
                                    <div class="col-md-9"><input class="form-control" pattern="(?=.*\d).{11,}" title="Must contain 11 number characters" type ="text"  value="<?= $user->mobile ?>" name ="Mobile_No" Required></div>
                                </div>  
                                <div class="row"  style="padding-top: 16px">                        
                                    <div class="col-md-3" style="text-align: center;">Profession</div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <select class="form-control" name="Profession">
                                                <option value="School Student" <?= ($user->profession == "School Student" ) ? "Selected" : "" ?>>School Student</option>
                                                <option value="Collage Student" <?= ($user->profession == "Collage Student" ) ? "Selected" : "" ?>>Collage Student</option>
                                                <option value="School Teacher" <?= ($user->profession == "School Teacher" ) ? "Selected" : "" ?>>School Teacher</option>
                                                <option value="Teacher Assistant" <?= ($user->profession == "Teacher Assistant" ) ? "Selected" : "" ?>>Teacher Assistant</option>
                                                <option value="Dr" <?= ($user->profession == "Dr" ) ? "Selected" : "" ?>>Dr</option>
                                                <option value="Professor" <?= ($user->profession == "Professor" ) ? "Selected" : "" ?>>Professor</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row"  style="padding-top: 16px">                        
                                    <div class="col-md-3" style="text-align: center;">Department</div>
                                    <div class="col-md-9"><input class="form-control" type ="text"  value="<?= $user->department ?>" name ="Department" Required></div>
                                </div>
                                <div class="row"  style="padding-top: 16px">                        
                                    <div class="col-md-3" style="text-align: center;">School/Collage</div>
                                    <div class="col-md-9"><input class="form-control" type ="text"  value="<?= $user->school_collage ?>" name ="School_Collage" Required></div>
                                </div>  
                                <div class="row"  style="padding-top: 16px">                        
                                    <div class="col-md-3" style="text-align: center;">Country</div>
                                    <div class="col-md-9"><input class="form-control" type ="text"  value="<?= $user->country ?>" name ="Country" Required></div>
                                </div>  

                                <div class="row" style="padding-top: 16px">
                                    <div class="col-md-9" ></div>
                                    <div class="col-md-3"><button class="btn btn-success form-control" type="submit">Update</button></div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <?php include_once('./common/tail.php') ?> 
    </body>
</html>