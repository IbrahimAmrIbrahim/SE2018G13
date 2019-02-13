<?php
include_once('../../Controllers/common.php');
include_once('../../Models/Courses.php');
include_once('../../Models/grade.php');
include_once('../../Models/studentxcourse.php');
include_once('../../Models/user.php');
Database::DBConnect();
$id = safeGet('id');
$my_courses= Studentxcourse::std_show_my_courses($id);

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

                    <div class="card-deck table">
                        <?php
                        //$grades = Grade::std_all(7, NULL, NULL);
                        $gradenum = 0;
                        foreach ($my_courses as $course) {
                           // $gradenum = $gradenum + 1;
                            $valid = $course->type;
                            if ($valid == 1) {
                                $valid = "public";
                            } else {
                                $valid = "private";
                            }
                            ?>

                            <div class="card" >
                                <div class="card " id="<?= $id ?>" style=" background-color: rgba(06 ,44,51,0.85 );margin: 0;">
                                    <div class="card-body text-center">
                                        <h1><?= $course->name ?></h1>
                                        <p class="card-text"> course id : <?= $course->id ?> </p>
                                        <p class="card-text">course study year : <?= $course->study_year ?> </p>
                                        <p class="card-text">course max degree : <?= $course->max_degree ?> </p>
                                        <p class="card-text">course type : <?= $valid ?> </p>
                                        <p class="card-text">course description :-</p>
                                        <p><?= $course->description ?> </p>

                                        <button class="show_details" id2=<?= $user->ID ?> id=<?= $course->id ?>  > Show Details </button>
                                    </div>
                                </div> 
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body> 
<?php include_once './common/tail.php'; ?> 



<script type="text/javascript">
    $(document).ready(function () {


        $('.show_details').click(function (event) {
            window.location.href = "students.php?id=" + $(this).attr('id2') + "&&crs_id=" + $(this).attr('id');
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