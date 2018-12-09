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
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div  role="main" class="container">
                    <table class="table" style="margin-top: 20px">
                        <thead>
                            <tr id="StudentTable_th">
                                <th scope="col" style="padding-bottom: 18px">  files </th> 
                            </tr>
                            <tr>
                                <td> <button>file click to open</button></td>
                            </tr>
                        </thead>
                    </table>

                    <table style="margin-top: 200px"class="table">
                        <thead >
                            <tr id="StudentTable_th">
                                <th scope="col" style="padding-bottom: 18px"> Annoucmnets</th>
                            </tr>
                        </thead>
                        <tr id="StudentTable_tr">
                            <td> ANNOUCMENT EXAMPLE </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <?php include_once './common/tail.php'; ?>
</html>

