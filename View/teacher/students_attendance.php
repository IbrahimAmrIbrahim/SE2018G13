<!DOCTYPE html>
<?php
include_once('../../Controllers/common.php');
include_once('../../Models/student.php');
include_once('../../Models/attendance.php');
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

                                    <th scope="col">Attendance points  </th>
                                    
                                   
                                    <th></th  >
                                    <th></th>
                                    <th></th>
                                    <th></th  > <th></th  > <th></th  > <th></th  >
                                     
                                    <th></th  > <th></th  > <th></th  > <th></th  > <th></th  >
                                    <th></th  > <th></th  > 
                                    <th><button>save</button></th>
                                       


                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                //$grades = Grade::std_all(7, NULL, NULL);

                                    if(!empty($grades)){
                                        
                                    $j=0;
                                foreach ($grades as $grade){

                                  $j=$j+1;
                                       $number=$grade['std_id'];
                                    $attendance= new Attendance($grade['crs_id'], $grade['std_id']);
                                    
                                    ?>

                                    <tr id="GardeTable_tr">
                                        <td> <?= $number?> </td>
                                        <td>   <?=  $grade['Name']?> </td>
                                       
                                         <td> <?=  $attendance->points?></td>
                                         <td  >Points</td>
                                        <td>  
                                        </td>
                                        <?php 
                                        for($i=0;$i<12;$i=$i+1)
                                        
                                        {
                                        ?>
                                        <td>
                            <input type="checkbox" id="<?=$i?><?=$j?>" class="checkbox" name="checkbox<?=$i?>" value="ON" />
                                        </td>
                                        <?php }?>
                                        <td>
                                            
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
                window.location.href = "./editattendance.php?id="+$(this).attr('id')+"&&crs_id="+$(this).attr('id2')+"&&std_id="+$(this).attr('id4');
            });

  $('.checkbox').click(function (event) {
                window.location.href = "./editattendance.php?id="+$(this).attr('id')+"&&crs_id="+$(this).attr('id2')+"&&std_id="+$(this).attr('id4');
            });




        });




function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementsByClassName(checkbox));
  // Get the output text
 
  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}


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
