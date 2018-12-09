<?php
include_once("../../controllers/common.php");
include_once('../../models/student.php');
$id = safeGet('id');
Database::DBConnect();
$student = new Student($id);
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

                    <h2 class="mt-5"><?= ($id) ? "Edit" : "Add" ?> Student</h2>

                    <form action="controllers/savestudent.php" method="post">
                        <input type="hidden" name="id" value="<?= $student->get('id') ?>">
                        <div class="card"  style='background: #002752'>
                            <div class="card-body">
                                <div class="form-group row gutters">
                                    <?php
                                    if (($id) != 0) {
                                        ?>
                                        <label for="IDInput" class="col-sm-2 col-form-label">ID</label>
                                        <div class="col-sm-10" style="padding-bottom: 10px">
                                            <input class="form-control" id="IDInput" type="text" value="<?= $student->get('id') ?>" disabled>
                                        </div>                        
                                        <?php
                                    }
                                    ?>
                                    <label for="nameInput" class="col-sm-2 col-form-label" style="color: black">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="nameInput" type="text" name="name" value="<?= $student->get('name') ?>" required>
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