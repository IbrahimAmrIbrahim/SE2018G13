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
                    <th scope="col" style="padding-bottom: 18px"> sunday  

                    </th>
                    <th scope="col" style="padding-bottom: 18px">monday

                    </th>

                    <th scope="col" style="padding-bottom: 18px">tuesday

                    </th>
                    <th scope="col"  style="padding-bottom: 18px">wednesday</th>
                    <th scope="col" style="padding-bottom: 18px"> thursday</th> 
                    <th scope="col" style="padding-bottom: 18px"> friday</th> 
                    <th scope="col" style="padding-bottom: 18px"> saturday</th> 


                </tr>

            
                <tr>
                    <td  scope="col" style="padding-bottom: 18px"> event at xx:xx</td> 
                    <td  scope="col" style="padding-bottom: 18px"> <button><a href="./addevent.php"> add event</a> </button></td> 
                    <td  scope="col" style="padding-bottom: 18px"> <button>add event </button></td> 
                    <td  scope="col" style="padding-bottom: 18px"> <button>add event </button></td> 
                    <td  scope="col" style="padding-bottom: 18px"> <button>add event </button></td> 
                    <td  scope="col" style="padding-bottom: 18px"> <button>add event </button></td> 
                    <td  scope="col" style="padding-bottom: 18px"> <button>add event </button></td> 

                </tr>
           
                <tr>
                    <td  scope="col" style="padding-bottom: 18px"> <button>add event </button></td> 
                </tr>






            </thead>

        </table>


        <table style="margin-top: 200px"class="table">
            <thead >
                    <tr id="StudentTable_th">
                    <th scope="col" style="padding-bottom: 18px"> date event</th>
                    <th scope="col" style="padding-bottom: 18px"><button> <a href="./add_event_date.php">add event</a></button></th>

                </tr>

            </thead>

        </table>
</div>
        <?php include_once './commons/tail.php'; ?>
    </body>
</html>