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
$crs_id = safeGet('crs_id');
$user = new User($id); // get the user id 
?>

<!DOCTYPE html>
<html lang= "en">
    <?php include_once './common/head.php'; ?>  
    <body>
        <?php
        include_once './common/CourseNavbar.php';
        ?>   
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div role="main" class="container">

                    <div class="card" style="background-color: transparent;border: 0px;">
                        <?php
                        $courseMaterials = Courses::courseMaterial($crs_id);
                        foreach ($courseMaterials as $courseMaterial) {
                            ?>
                            <div class="card-body materialCard">
                                <p class="card-text Material" url="<?= $courseMaterial['material_url'] ?>" style="cursor: pointer;"><?= $courseMaterial['material_label'] ?></p>
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


        $('.Material').click(function (event) {
            var win = window.open($(this).attr('url'), '_blank');
            win.focus();
        });

    });

</script>   
</html>