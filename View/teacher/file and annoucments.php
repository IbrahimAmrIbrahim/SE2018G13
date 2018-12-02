<html>
    <head>
        <?php include_once './commons/head_tag.php'; ?>
        <title>

            time table LMS
        </title>        
        <link rel="stylesheet" href="./css/sticky-footer-navbar.css"> 
    </head>
    <body>
        <?php include_once './commons/head_nav.php'; ?>
<div  role="main" class="container">
        <table class="table" style="margin-top: 20px">

            <thead >
                <tr id="StudentTable_th">
                
                    
                    <th scope="col" style="padding-bottom: 18px">  file</th> 


                </tr>

            
                
           
                <tr>
                    <td  scope="col" style="padding-bottom: 18px"> <button>upload file </button></td> 
                </tr>






            </thead>

        </table>


        <table style="margin-top: 200px"class="table">
            <thead >
                    <tr id="StudentTable_th">
                    <th scope="col" style="padding-bottom: 18px"> Annoucmnets</th>
                    <th scope="col" style="padding-bottom: 18px"><button> <a href="./add_annoucment.php">add </a></button></th>

                </tr>

            </thead>

        </table>
</div>
        <?php include_once './commons/tail.php'; ?>
    </body>
</html>