<?php
include_once("../../Controllers/common.php");
include_once('../../Models/student.php');
include_once('../../Models/user.php');
Database::DBConnect();
$crs_id = safeGet('crs_id');
$id_user = safeGet('id');
$user = new User($id_user);
$student = new Student(null);
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

                    <h2 class="mt-5">Add Student</h2>
                    <form action="./editstudent.php" class="form-inline" method="get">
                <div class="input-group" style="width: 100%">
                     <input type="hidden" name="id" value="<?= $id_user?>">
                      <input type="hidden" name="crs_id" value="<?= $crs_id ?>">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input required class="form-control" id="SearchBox" type="text" name="keywords" placeholder="Search" aria-label="Search" value="<?= safeGet('keywords') ?>">
                    <div class="input-group-append">
                       
                        <button  style="padding-left:50px ;padding-right: 50px" class="button " type="submit">Search</button>
                    </div>
                </div>
                    </form>
                    <form action="../../controllers/savestudent.php" method="get">
                        
                        <input type="hidden" name="id" value="<?= $id_user?>">
                      <input type="hidden" name="crs_id" value="<?= $crs_id ?>">
                        <div class="card"  style='background: darkslategray ;opacity: .85' >
                            <div class="card-body">
                                <div class="form-group row gutters">
                                   
                                    <label for="nameInput" class="col-sm-2 col-form-label" style="color: black">User Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="nameInput" type="text" name="name" value="<?= $student->get('name') ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button style="padding-left:50px ;padding-right: 50px" class="button float-right" type="submit" >Add </button>
                                </div>
                            </div>
                        </div>
                    </form>
                
                    <div>
                        <table class="table" style="margin-top: 20px">
                        <thead >
                            <tr id="StudentTable_th">
                                <th scope="col">Student ID
                                   
                                </th>
                                <th scope="col">Student user Name
                                  
                                </th>
                              
                                <th scope="col">Student name  </th>
                                   
                               
                                
                            </tr>

                            <?php
                            if(safeGet('keywords')!=null){
                            $student_search = User::all(safeGet('keywords'), NULL, NULL);
                            
                            foreach ($student_search as $student_d) {
                                
                               
                                ?>
                                <tr id="GardeTable_tr">
                                    <td ><?= $student_d->ID ?></td>
                                    <td><?= $student_d->User_Name ?></td>
                                    <td ><?= $student_d->Name ?></td>
                                    
                               
                                   
                                </tr>
                            <?php } } ?>
                        </thead>
                    </table>
                        
                    </div>
                
                
                </div>
            </div>
        </div>
    </body>
    <?php include_once('./common/tail.php') ?>
</html>