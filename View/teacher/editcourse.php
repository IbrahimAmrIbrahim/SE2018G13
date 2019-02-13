<?php
include_once("../../Controllers/common.php");
include_once('../../Models/Courses.php');
$id = safeGet('crsid' , 0);
Database::DBConnect();
$courses = new Courses($id);
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

                    <h2 class="mt-5"><?= ($id) ? "Edit" : "Add" ?> Course</h2>

                    <form action="controllers/savecourse.php" method="post">
                        <input type="hidden" name="id" value="<?= $courses->id ?>">
                        <div class="card"  style='background: #002752'>
                            <div class="card-body">
                                
                                <div class="form-group row gutters">
                                    <label for="course_name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" type="text" name="name" value="<?= $courses->get('name') ?>" required>
                                    </div>
                                    
                                    <div class="col-md-2"  style="color: white;">Privacy</div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <select class="form-control" name="Privacy">
                                                <option value="1">Public</option>
                                                <option value="0">Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <label  for="course_year" class="col-sm-2 col-form-label">Study Year</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" type="text" name="study_year" value="<?= $courses->get('study_year') ?>" required>
                                    </div>
                                    <label for="course_degree" class="col-sm-2 col-form-label">Max Degree</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="max_degree" value="<?= $courses->get('max_degree') ?>" required>
                                    </div>  
                                    
                                       <label for="course_description" class="col-sm-2 col-form-label" style="color: white;margin-top: 15px;">Description</label>
                                    <div class="col-sm-10" style="margin-top: 15px;">
                                        <textarea class="form-control"  name="description" rows="8" cols="30" required><?= $courses->description ?></textarea>
                                    </div>  
                                </div>
                                
                                 <div class="col-sm-2 float-right" style="margin-bottom: 10px">
                                    <button class="form-control btn-outline-success" type='submit'> ADD</button>
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