<!DOCTYPE html>
<html lang= "en">
    <head>
    <?php include_once './common/head.php'; ?> 
        <link href="../../Style/css/sticky-footer-navbar.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <?php
        include_once './common/Navbar.php';
        ?>  

     
            <div class="container-fluid">
                <div role="main" class="container">
                    <table class="table" style="margin-top: 20px">
                        <thead >
                            <tr id="StudentTable_th">
                                <th scope="col" style="padding-bottom: 18px">Sunday</th>
                                <th scope="col" style="padding-bottom: 18px">Monday</th>
                                <th scope="col" style="padding-bottom: 18px">Tuesday</th>
                                <th scope="col" style="padding-bottom: 18px">Wednesday</th>
                                <th scope="col" style="padding-bottom: 18px"> Thursday</th> 
                                <th scope="col" style="padding-bottom: 18px"> Friday</th> 
                                <th scope="col" style="padding-bottom: 18px"> Saturday</th> 
                            </tr>

                            <tr id="GardeTable_tr"  >
                                <td  scope="col" style="padding-bottom: 18px"> event at xx:xx</td> 
                                <td  scope="col" style="padding-bottom: 18px">Event</td> 
                                <td  scope="col" style="padding-bottom: 18px">Event</td> 
                                <td  scope="col" style="padding-bottom: 18px">Event</td> 
                                <td  scope="col" style="padding-bottom: 18px">Event</td> 
                                <td  scope="col" style="padding-bottom: 18px">Event</td> 
                                <td  scope="col" style="padding-bottom: 18px">Event</td> 
                            </tr>
                        </thead>
                    </table>

                    <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            <button> <a href="./addEvent.php">add event</a></button>
                        </div>
                    </div>
                </div>
            </div>
      <?php include_once './common/tail.php'; ?>   
    </body>
   
</html>