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
                    <h2 class="mt-4">ADD Event</h2>
                    <form action="./time_table.php" method="post" id="form">
                        <div class="card" style="background:  #002752">
                            <div class="card-body">
                                <div class="form-group row gutters">
                                    <label  for="crsinput" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="crsinput" type="text"  value="" >
                                    </div>
                                    <label  for="crsinput" class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="crsinput" type='time' value="" >
                                    </div>
                                    <label  for="crsinput" class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="crsinput" type='date'  value="" >
                                    </div>
                                    <label  for="crsinput" class="col-sm-2 col-form-label">Info</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="crsinput" type="text"  value="" >
                                    </div>
                                    <div class="col-sm-10" style="margin-bottom: 10px"></div>
                                    <div class="col-sm-2" style="margin-bottom: 10px">
                                        <button class="form-control" type='submit'> ADD</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <?php include_once('./common/tail.php') ?> 
</html>


