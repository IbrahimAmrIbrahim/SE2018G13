<!DOCTYPE html>
<html lang= "en">
    <?php include_once './common/head.php'; ?>  
     <link href="../../Style/css/sticky-footer-navbar.css" rel="stylesheet" type="text/css"> 
    <body>
        <?php
        include_once './common/Navbar.php';
        ?>   
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div  role="main" class="container">
                    <table class="table" style="margin-top: 20px">
                        <thead >
                            <tr id="StudentTable_th">
                                <th scope="col" style="padding-bottom: 18px">  file</th> 
                            </tr>
                            <tr id="StudentTable_tr">
                                <td  scope="col" style="padding-bottom: 18px"> <button>upload file </button></td> 
                            </tr>
                        </thead>
                    </table>
                    <table style="margin-top: 200px"class="table">
                        <thead >
                            <tr id="StudentTable_th">
                                <th scope="col" style="padding-bottom: 18px"> Annoucmnets</th>
                                <th scope="col" style="padding-bottom: 18px"><button style="padding-left: 10px ;padding-right: 10px" > <a href="./addAnnoucment.php">add </a></button></th>
                            </tr>
                           
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <?php include_once './common/tail.php'; ?>
</html>