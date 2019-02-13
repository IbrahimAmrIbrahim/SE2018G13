<!DOCTYPE html>
<?php
include_once('../../Models/studentxcourse.php');
include_once('../../Controllers/common.php');
include_once('../../Models/student.php');
include_once('../../Models/grade.php');
include_once('../../Models/Courses.php');
include_once('../../Models/user.php');
Database::DBConnect();
$id = safeGet('id');
$crs_id=safeGet('crs_id');
$grade= new Studentxcourse($crs_id);
$user = new User($id);
$course=new Courses($crs_id);
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
                    
                    <h1 class="mt-5" style=" color: blue  "><?= $course->name ?></h1>
                  
                    <div class="card-text mb-3" > <?= $course->description?></div>
                       
                  
                    <div>
                        
                        
                        <div class="card-deck table">
  <div class="card student_grade" id="<?=$id?>" style=" background-color: rgba(06 ,44,51,0.85 ) ">
    <div class="card-body text-center">
        <h3>course degree </h3>
        <p class="card-text"> MAX = <?= $course->max_degree?> </p>
            <p class="card-text">MINE = <?= $grade->grade ?>   </p>
    </div>
  </div>
   <div class="card student_managment" id="<?=$id?>" style=" background-color: rgba(06 ,44,51,0.85 );cursor: pointer ">
    <div class="card-body text-center">
        <h3>Student management</h3>
      <p class="card-text">you can mange students from here </p>
    </div>
  </div>
                            
   <div class="card course_material" id="<?=$id?>"  style=" background-color: rgba(06 ,44,51,0.85 );cursor: pointer ">
    <div class="card-body text-center">
          <h3>Course Material</h3>
      <p class="card-text">click to open the materials file</p>
    </div>
  </div>
<div class="card student_attendance" id="<?=$id?>" style=" background-color: rgba(06 ,44,51,0.85 );cursor: pointer ">
    <div class="card-body text-center">
          <h3>attendance</h3>
      <p class="card-text">show your attendance  </p>
      
    </div>
  </div> 
</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </body> 
    <?php include_once './common/tail.php'; ?>



    <script type="text/javascript">
                // open edit grade page
        $(document).ready(function () {
         

                // material page
            $('.course_material').click(function (event) {
                 window.location.href = "home.php?id=" +$(this).attr('id') ;//+"&&std_id="+ $(this).attr('id');
            });
                // student enroll
            
            
              $('.student_attendance').click(function (event) {
               window.location.href = "home.php?id=" +$(this).attr('id') ;//+"&&std_id="+ $(this).attr('id');
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