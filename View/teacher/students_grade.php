<!DOCTYPE html>
<?php
include_once('../../Controllers/common.php');
include_once('../../Models/student.php');
include_once('../../Models/Studentxcourse.php');
include_once('../../Models/Courses.php');
include_once('../../Models/user.php');
Database::DBConnect();
$id = safeGet('id');
$crs_id = safeGet('crs_id');
$user = new User($id);
$course = new Courses($crs_id);
$students = Studentxcourse::teacher_show_my_students($crs_id);
$grades = Studentxcourse::all($crs_id);
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
                    <h1 class="mt-5  "><?= $course->name ?></h1>

                    <div>

                        <table class="table">
                            <thead>
                                <tr id="GardeTable_th">
                                    <th scope="col">Student ID  </th>

                                    <th scope="col">Student Name  </th>

                                    <th scope="col">Student degree  </th>
                                    
                                       <th scope="col">Examine date</th>
                                       <th></th>


                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                //$grades = Grade::std_all(7, NULL, NULL);

                                    if(!empty($grades)){
                                        
                                    
                                foreach ($grades as $grade){

                                  
                                       $number=$grade['std_id'];
                                    
                                    ?>

                                    <tr id="GardeTable_tr">
                                        <td> <?= $number?> </td>
                                        <td>   <?=  $grade['Name']?> </td>
                                        <td> <?=  $grade['grade']?></td>
                                         <td> <?=  $grade['examine_date']?></td>
                                        <td>  <button class="edit_grade" id="<?= $id ?>" id2="<?= $crs_id ?>" id4="<?=$number?>" >Edit Grade</button>
                                        </td>

                                    <?php } }?>
                                   
                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
        </div>
    </body> 
    <?php include_once './common/tail.php'; ?>



    <script type="text/javascript">
        // open edit grade page
        $(document).ready(function () {
            $('.edit_grade').click(function (event) {
                window.location.href = "./editgrade.php?id="+$(this).attr('id')+"&&crs_id="+$(this).attr('id2')+"&&std_id="+$(this).attr('id4');
            });






        });






        function gradeViewSort($ID, $col, $ord) {
            var stdID = $ID;
            $.ajax({
                url: './controllers/gradesort.php',
                type: 'GET',
                dataType: 'json',
                data: {column: $col, order: $ord, page: "std", ID: stdID},
            })
                    .done(function (response) {
                        var num = 0;
                        response.forEach(function (obj) {
                            num = num + 1;
                            $("." + stdID + "gradeCrsID" + num).text(obj.course_id);
                            $("." + stdID + "gradeCrsName" + num).text(obj.crs_name);
                            $("." + stdID + "gradeDegree" + num).text(obj.degree);
                            $("." + stdID + "gradeMaxDegree" + num).text(obj.max_degree);
                            $("." + stdID + "gradeExamineAt" + num).text(obj.examine_at);
                            $("." + stdID + "gradeEdit" + num).attr("id", obj.id);
                            $("." + stdID + "gradeDelete" + num).attr("id", obj.id);
                        })
                    })
                    .fail(function () {
                        alert("Connection error.");
                    })
        }
    </script>
</html>
