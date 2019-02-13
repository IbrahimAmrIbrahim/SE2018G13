<?php
include_once('../../Controllers/common.php');
include_once('../../Models/student.php');
include_once('../../Models/Studentxcourse.php');
include_once('../../Models/Courses.php');
include_once('../../Models/user.php');
Database::DBConnect();
$crs_id = safeGet('crs_id');
$id_user = safeGet('id');
$std_id= safeGet('std_id');
$user = new User($id_user);
$student = new User($std_id);
$grade = new Studentxcourse($crs_id,$std_id);
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

                    <h2 class="mt-5">Edit Grade for : <?= $student->Name ?> </h2>
                    
                    <form action="../../controllers/savegrade.php" method="get">
                        
                       <input type="hidden" name="id" value="<?= $id_user?>">
                      <input type="hidden" name="crs_id" value="<?= $crs_id ?>">
                      <input type="hidden" name="std_id" value="<?= $std_id ?>">
                        <div class="card"  style='background: darkslategray ;opacity: .85' >
                            <div class="card-body">
                                <div class="form-group row gutters">
                                   
                                    <label for="nameInput" class="col-sm-2 col-form-label" style="color: black">Old degree</label>
                                    
                                    <div class="col-sm-10">
                                        <input class="form-control" id="nameInput" type="text" name="ss" value="<?=$grade->grade ?>" disabled="">
                                    </div>
                                    
                                     <label for="nameInput" class="col-sm-2 col-form-label mt-2" style="color: black">Old Exame Date</label>
                                    
                                    <div class="col-sm-10 ">
                                        <input class="form-control mt-2" id="nameInput" type="text" name="ss" value="<?=$grade->examine_date ?>" disabled="">
                                    </div>
                                   
                                    
                                    
                                   <label for="nameInput" class="col-sm-2 col-form-label mt-5" style="color: black">New degree</label>

                                    <div class="col-sm-10">
                                        <input class="form-control mt-5"  id="nameInput" type="text" name="name" value="<?= $student->get('name') ?>" required>
                                    </div>
                                   
                                   
                                   
                                   <label for="nameInput" class="col-sm-2 col-form-label mt-2" style="color: black">New Exame Date</label>

                                    <div class="col-sm-10">
                                        <input class="form-control mt-2"  id="nameInput" type="date" name="examine_date" value="<?= $student->get('examine_date') ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button style="padding-left:50px ;padding-right: 50px" class="button float-right" type="submit" >Add </button>
                                </div>
                            </div>
                        </div>
                    </form>
                
                    
                
                
                </div>
            </div>
        </div>
    </body>
    <?php include_once('./common/tail.php') ?>
</html>