<?php
// Start the session
session_start();

include_once('../../Controllers/common.php');
include_once('../../Models/Courses.php');
include_once('../../Models/user.php');

Database::DBConnect();
if (!isset($_SESSION['id'])) {
    header("Location: ../../index.php?status=session_expired");
} else {
    $id = $_SESSION['id'];
}
$course_id = Courses::show_my_courses($id);
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

                    <a href="./addcourse.php?id=<?= $id ?>" class="float">
                        <i class="fa fa-plus my-float"></i>
                    </a>

                    <div class="card-deck table">
                        <?php
                        foreach ($course_id as $course) {
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
                                        <i class="fas fa-cog float-right edit_course" style="cursor: pointer;" id2=<?= $user->ID ?> id=<?= $course->id ?>></i>
                                        <h1><?= $course->name ?></h1>
                                        <p class="card-text"> course id : <?= $course->id ?> </p>
                                         
                                          <p class="card-text"> teacher name : <?= User::user($course->teacher_id)->Name ?></p>
                                        <p class="card-text">course study year : <?= $course->study_year ?> </p>
                                        <p class="card-text">course max degree : <?= $course->max_degree ?> </p>
                                        <p class="card-text">course type : <?= $valid ?> </p>
                                        <p class="card-text">course description :-</p>
                                        <p><?= $course->description ?> </p>

                                        <button class="show_details btn btn-outline-success" id2=<?= $user->ID ?> id=<?= $course->id ?>  > Show Details </button>
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
            window.location.href = "./courseDashboard.php?crs_id=" + $(this).attr('id');
        });

        $('.edit_course').click(function (event) {
            window.location.href = "./editcourse.php?crs_id=" + $(this).attr('id');
        });

    });

</script>   
</html>