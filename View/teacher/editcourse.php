<?php
include_once("../../Controllers/common.php");
include_once('../../Models/Courses.php');
include_once('../../Models/user.php');
$user_id = safeGet('id', 0);
$course_id = safeGet('crs_id', 0);
Database::DBConnect();
$courses = new Courses($course_id);
$user = new User($user_id); // get the user id 
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

                    <h2 class="mt-5"><?= ($course_id) ? "Edit" : "Add" ?> Course</h2>

                    <form action="../../Controllers/savecourse.php" method="post">
                        <input type="hidden" name="user_id" value="<?= $user_id ?>">
                        <input type="hidden" name="course_id" value="<?= $course_id ?>">
                        <div class="card"  style='background: #002752'>
                            <div class="card-body">

                                <div class="form-group row gutters">
                                    <label for="course_name" class="col-sm-2 col-form-label"  style="color: white;">Name</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" type="text" name="name" value="<?= $courses->name ?>" required>
                                    </div>

                                    <div class="col-md-2"  style="color: white;">Privacy</div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <select class="form-control" name="Privacy">
                                                <option value="1" <?= ($courses->type) ? "Selected" : "" ?>>Public</option>
                                                <option value="0" <?= ($courses->type) ? "" : "Selected" ?>>Private</option>
                                            </select>
                                        </div>
                                    </div>

                                    <label  for="course_year" class="col-sm-2 col-form-label"  style="color: white;">Study Year</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" type="text" name="study_year" value="<?= $courses->study_year ?>" required>
                                    </div>
                                    <label for="course_degree" class="col-sm-2 col-form-label" style="color: white;">Max Degree</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="max_degree" value="<?= $courses->max_degree ?>" required>
                                    </div>  

                                    <label for="course_description" class="col-sm-2 col-form-label" style="color: white;margin-top: 15px;">Description</label>
                                    <div class="col-sm-10" style="margin-top: 15px;">
                                        <textarea class="form-control"  name="description" rows="8" cols="30" required><?= $courses->description ?></textarea>
                                    </div>  
                                </div>

                                <div class="col-sm-2 float-right" style="margin-bottom: 10px">
                                    <button class="form-control btn-outline-success" type='submit'><?= ($course_id) ? "Edit" : "Add" ?></button>
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