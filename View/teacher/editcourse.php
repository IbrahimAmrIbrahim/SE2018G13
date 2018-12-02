<?php
include_once("./controllers/common.php");
include_once('./components/head.php');
include_once('./models/Courses.php');
$id = safeGet('id');
Database::DBConnect();
$courses = new Courses($id);
?>

   
    <header>
     <?php include_once './commons/head_tag.php';?>
        <title>lms</title>
    </header>
<body> 
    
    <?php include_once './commons/head_nav.php'; ?>
    <!-- Begin page content -->
    <div role="main" class="container">

        <h2 class="mt-5"><?= ($id) ? "Edit" : "Add" ?> Course</h2>

        <form action="controllers/savecourse.php" method="post">
            <input type="hidden" name="id" value="<?= $courses->get('id') ?>">
            <div class="card">
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
    </body>
        <?php include_once('./commons/tail.php') ?> 