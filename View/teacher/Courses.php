<?php
include_once('../../Controllers/common.php');
include_once('../../Models/Courses.php');
include_once('../../Models/grade.php');

include_once('../../Models/user.php');
Database::DBConnect();
$id = safeGet('id');
$course_id=  Courses::show_my_courses($id);
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
                    <table class="table" style="margin-top: 20px">
                        <thead >
                            <tr id="StudentTable_th">
                                <th scope="col">Course ID
                                   
                                </th>
                                <th scope="col">Course Name
                                  
                                </th>
                                <th scope="col" style="padding-bottom: 18px">Study Year</th>
                                <th scope="col">Max Degree
                                   
                                </th>
                                <th scope="col" style="padding-bottom: 18px">Description</th>
                                <th scope="col" style="padding-bottom: 18px">Type</th>
                                <th scope="col" style="padding-bottom: 18px"><button class="add_course" id="0"> Add New Course</button> </th>
                            </tr>

                            <?php
                            //$grades = Grade::std_all(7, NULL, NULL);
                            $gradenum = 0;
                            foreach ($course_id as $course) {
                                $gradenum = $gradenum + 1;
                                $valid=$course->type;
                                if($valid==1){
                                    $valid="public";
                                    
                                }
                                else{
                                    $valid="private";
                                }
                                ?>
                                <tr id="GardeTable_tr">
                                    <td class="<?= 7 ?>gradeCrsID<?= $gradenum ?>"><?= $course->id ?></td>
                                    <td class="<?= 7 ?>gradeCrsName<?= $gradenum ?>"><?= $course->name ?></td>
                                    <td class="<?= 7 ?>gradeDegree<?= $gradenum ?>"><?= $course->study_year ?></td>
                                     <td class="<?= 7 ?>gradeCrsID<?= $gradenum ?>"><?= $course->max_degree ?></td>
                                    <td class="<?= 7 ?>gradeCrsName<?= $gradenum ?>"><?= $course->description ?></td>
                                    <td class="<?= 7 ?>gradeDegree<?= $gradenum ?>"><?= $valid ?></td>
                                    <td > <button class="show_details" id2=<?= $user->ID?> id=<?= $course->id ?>  > Show Details </button></td>
                                   
                                </tr>
                            <?php } ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </body> 
    <?php include_once './common/tail.php'; ?> 



    <script type="text/javascript">
        $(document).ready(function () {
                  
                   
            $('.show_details').click(function (event) {
                window.location.href = "students.php?id=" + $(this).attr('id2')+ "&&crs_id="+$(this).attr('id');
            });

            $('.delete_course').click(function () {
                var anchor = $(this);
                var crsID = anchor.attr('id');
                $.ajax({
                    url: './controllers/deletecourses.php',
                    type: 'GET',
                    dataType: 'json',
                    data: {id: crsID},
                })
                        .done(function (response) {
                            if (response.status == 1) {
                                anchor.closest('tr').fadeOut('slow', function () {
                                    $(this).remove();
                                });
                                $("#grade" + crsID).fadeOut('slow');
                            }
                        })
                        .fail(function () {
                            alert("Connection error.");
                        })
            });

         

            

           

           

          

          
          

          

           


        });

    </script>   
</html>