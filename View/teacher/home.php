<!DOCTYPE html>
<html lang= "en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../Images/chalkboard-teacher-solid.ico">

        <title>LMS</title>

        <!-- Bootstrap core CSS -->
        <link href="../../Style/Bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="../../Style/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="../../Style/css/common.css" rel="stylesheet">
    </head>

    <?php
    include_once('../../Control/common.php');
    $info = safeGet("get");
    ?>

    <body >
 <?php include_once './commons/head_nav.php'; ?>
      
                <div class="container-fluid">

                    <div class="container">
                        <input type="hidden" name="id" value="<?= safeGet("id"); ?>">
                        <h1 class="mt-5">Welcome Teacher : NAME  </h1>
                        <p> </p>
                    </div>

                </div>
          <?php include_once './commons/tail.php'; ?>
    </body>
</html>


