<?php
include_once("../../controllers/common.php");
include_once('../../models/grade.php');
$id = safeGet('id');
$page = safeGet('page');
Database::DBConnect();
$grades = new Grade($id, "std");
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

                    <h2 class="mt-4">Edit Grade</h2>

                    <form action="controllers/savegrade.php" method="post" id="form">
                        <input type="hidden" name="id" value="<?= $grades->get('id') ?>">
                        <input type="hidden" name="page" value="<?= $page ?>">

                        <div class="card"  style="background: #002752">
                            <div class="card-body">
                                <div class="form-group row gutters">

                                    <label  for="stdinput" class="col-sm-2 col-form-label">Student Name</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="stdinput" type="text"  value="<?= $grades->get('std_name') ?>" disabled>
                                    </div>

                                    <label  for="crsinput" class="col-sm-2 col-form-label">Course Name</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="crsinput" type="text"  value="<?= $grades->get('crs_name') ?>" disabled>
                                    </div>
                                    <label  for="maxGradeinput" class="col-sm-2 col-form-label">Max Grade</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="maxGradeinput" type="text"  value="<?= $grades->get('max_degree') ?>" disabled>
                                    </div>
                                    <label  for="degreeinput" class="col-sm-2 col-form-label">Degree</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="degreeinput" type="text" name="degree" value="<?= $grades->get('degree') ?>" required>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="alert alert-danger col-sm-8" role="alert" style="margin-bottom: 10px; margin-left: 200px">
                                            <strong>Error!</strong> Wrong Degree Value.
                                        </div>     
                                    </div>
                                    <label for="examineAtinput" class="col-sm-2 col-form-label">Examine at</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="examineAtinput" type="date" name="examine_at" value="<?= $grades->get('examine_at') ?>" required>
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <button class="button float-right" type="button" id="save">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <?php include_once('./commons/tail.php') ?> 


    <script type="text/javascript">
        $('.alert').hide('fast');
        $(document).ready(function () {
            $('#degreeinput').change(function (event) {
                var maxDegree = parseInt($('#maxGradeinput').val());
                var Degree = parseInt($('#degreeinput').val());
                if (Degree > maxDegree || Degree < 0) {
                    $('.alert').show('slow');
                } else {
                    $('.alert').hide('slow');
                }
            });

            $('#save').click(function (event) {
                var maxDegree = parseInt($('#maxGradeinput').val());
                var Degree = parseInt($('#degreeinput').val());
                if (Degree <= maxDegree && Degree >= 0) {
                    $('#form').submit();
                }
            });
        });
    </script>
</html>