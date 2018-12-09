<HTML>


   
    <head>
    <?php include_once './common/head.php'; ?>  
        <title>
            LMS add event
        </title>
    </head>
<body> 
      <?php
        include_once './common/Navbar.php';
        ?>   
    <!-- Begin page content -->
    
    <div role="main" class="container">

        <h2 class="mt-4">Edit Grade</h2>

        <form action="./time_table.php" method="post" id="form">
            

         <div class="card"   style=" background: darkslategrey ; opacity: 0.95"    >
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
            <button type='submit'style="padding-right: 100;padding-left: 100; cursor: auto" >  ADD</button>
        </form>
    </div>
    <?php include_once './common/tail.php'; ?> 
    </body>
    
    </html>

