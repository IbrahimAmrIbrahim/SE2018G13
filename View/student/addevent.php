<HTML>


   
    <head>
     <?php include_once '../teacher/commons/head_tag.php'; ?>  
        <title>
            lms
        </title>
    </head>
<body> 
       <?php include_once '../teacher/commons/head_nav_student.php';?>
    <!-- Begin page content -->
    <div role="main" class="container">

        <h2 class="mt-4">Edit Grade</h2>

        <form action="./time_table.php" method="post" id="form">
            

            <div class="card" style='background: #002752'>
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
                        
                         <label  for="crsinput" class="col-sm-2 col-form-label">INF</label>
                        <div class="col-sm-10" style="margin-bottom: 10px">
                            <input class="form-control" id="crsinput" type="text"  value="" >
                        </div>
                    </div>
                </div>
            </div>
              <button type='submit'>  ADD</button>
        </form>

            <?php include_once '../teacher/commons/tail.php';?>   
    </body>
    </html>

