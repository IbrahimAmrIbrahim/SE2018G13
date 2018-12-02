<?php
include_once("./controllers/common.php");
include_once('./components/head.php');
include_once('./models/grade.php');
$id = safeGet('id');
$page = safeGet('page');
Database::DBConnect();
$grades = new Grade($id, "std");
?>


   
    <header>
         <link rel="stylesheet" href="./css/sticky-footer-navbar.css"> 
      <?php include_once './commons/head_tag.php'; ?>
        <title>
            lms
        </title>
    </header>
<body> 
    <?php include_once('./commons/head_nav.php') ?> 
    <!-- Begin page content -->
   
<div role="main" class="container">
        <h2 class="mt-4">ADD Annoucment</h2>

        <form action="./file and annoucments.php" method="post" id="form">
            

            <div class="card" style="background:  #002752">
                <div class="card-body">
                    <div class="form-group row gutters">

                         <label  for="crsinput" class="col-sm-2 col-form-label">name</label>
                        <div class="col-sm-10" style="margin-bottom: 10px">
                            <input class="form-control" id="crsinput" type="text"  value="" >
                        </div>

                        <label  for="crsinput" class="col-sm-2 col-form-label">time</label>
                        <div class="col-sm-10" style="margin-bottom: 10px">
                            <input class="form-control" id="crsinput" type='time'  value="" >
                        </div>
                         <label  for="crsinput" class="col-sm-2 col-form-label">date</label>
                        <div class="col-sm-10" style="margin-bottom: 10px">
                            <input class="form-control" id="crsinput" type='date'  value="" >
                        </div>
                        
                         <label  for="crsinput" class="col-sm-2 col-form-label">INF</label>
                        <div class="col-sm-10" style="margin-bottom: 10px">
                            <input class="form-control" id="crsinput" type="text"  value="" >
                        </div>
                    </div>
                </div>
            </div>
            
            <button type='submit'>  ADD</button>
        </form>

        <?php include_once('./commons/tail.php') ?> 
    </body>
    

