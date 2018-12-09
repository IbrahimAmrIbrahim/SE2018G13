<?php
include_once("../../controllers/common.php");
include_once('../../models/Courses.php');
$id = safeGet('id');
Database::DBConnect();
$courses = new Courses($id);
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

                    <h2 class="mt-5"><?= ($id) ? "Edit" : "Add" ?> Course</h2>

                    <form action="controllers/savecourse.php" method="post">
                        <input type="hidden" name="id" value="<?= $courses->get('id') ?>">
                        <div class="card"  style='background: #002752'>
                            <div class="card-body">
                                <div class="form-group row gutters">
                                    <label for="course_name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" type="text" name="name" value="<?= $courses->get('name') ?>" required>
                                    </div>
                                    <label  for="course_year" class="col-sm-2 col-form-label">Study Year</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" type="text" name="study_year" value="<?= $courses->get('study_year') ?>" required>
                                    </div>
                                    <label for="course_degree" class="col-sm-2 col-form-label">Max Degree</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="max_degree" value="<?= $courses->get('max_degree') ?>" required>
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <button class="button float-right" type="submit"><?= ($id) ? "Save" : "Add" ?></button>
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