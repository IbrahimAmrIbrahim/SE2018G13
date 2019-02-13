<?php
include_once('../../Controllers/common.php');
include_once('../../Models/Courses.php');
include_once('../../Models/Studentxcourse.php');

include_once('../../Models/user.php');
Database::DBConnect();
$id = safeGet('id');
$crs_id = safeGet('crs_id');
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

                    <div class="card" style="background-color: transparent;border: 0px;">
                        <?php
                        $courseMaterials = Courses::courseMaterial($crs_id);
                        foreach ($courseMaterials as $courseMaterial) {
                            ?>
                            <div class="card-body materialCard">
                                <p class="card-text"><?= $courseMaterial['material_label'] ?></p>
                                <a href="#" class="btn btn-success Material" url="<?= $courseMaterial['material_url'] ?>">Open</a>
                                <a href="./updateCourseMaterial.php?id=<?= $id ?>&crs_id=<?= $crs_id ?>&materialid=<?= $courseMaterial['id'] ?>" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger delete_material" id="<?= $courseMaterial['id'] ?> ">Delete</a>
                            </div>
                        <?php } ?>

                        <a href="#" class="float AddMaterial" url="./addCourseMaterial.php?id=<?= $id ?>&crs_id=<?= $crs_id ?>">
                            <i class="fa fa-plus my-float"></i>
                        </a>
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

        $('.AddMaterial').click(function (event) {
            window.location.href = $(this).attr('url');
        });

        $('.delete_material').click(function () {
            var anchor = $(this);
            var materialID = anchor.attr('id');
            $.ajax({
                url: '../../controllers/deleteCourseMaterial.php',
                type: 'GET',
                dataType: 'json',
                data: {id: materialID},
            })
                    .done(function (response) {
                        if (response.status == 1) {
                            anchor.closest('.materialCard').fadeOut('slow', function () {
                                $(this).remove();
                            });
                        }
                    })
                    .fail(function () {
                        alert("Connection error.");
                    })
        });
    });

</script>   
</html>