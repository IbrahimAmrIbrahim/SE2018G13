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

                            <tr>
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
        </div>
    </body>
    <?php include_once './common/tail.php'; ?>   
</html>