<?php
include_once('../../Controllers/common.php');
include_once('../../Models/Courses.php');
include_once('../../Models/Studentxcourse.php');

include_once('../../Models/user.php');
Database::DBConnect();
$id = safeGet('id');
$crs_id = safeGet('crs_id');
$user = new User($id); // get the user id 
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

                    <h2 class="mt-4">Add Material</h2>
                    <form action="../../Controllers/addCourseMaterial.php" method="post">
                        <div class="card" style="background: rgba(06 ,44,51,0.85 );">
                            <div class="card-body">
                                <div class="form-group row gutters">
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <input type="hidden" name="crs_id" value="<?= $crs_id ?>">

                                    <label  for="materiallabel" class="col-sm-2 col-form-label" style="color: white;">Material Label</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="materiallabel" type="text" name="MaterialLabel" value="" Required>
                                    </div>
                                    <label  for="materialurl" class="col-sm-2 col-form-label" style="color: white;">Material URL</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="materialurl" type='text' name="MaterialURL" value="" Required>
                                    </div>

                                    <div class="col-sm-10" style="margin-bottom: 10px"></div>
                                    <div class="col-sm-2" style="margin-bottom: 10px">
                                        <button class="form-control" type='submit'> ADD</button>
                                    </div>
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


