<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>log in </title>
        <link href="./style/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="./css/logo-nav.css" rel="stylesheet">


        <!-- Bootstrap core CSS -->
        <link href="./style/css/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="./css/simple-sidebar.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">


            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Start Bootstrap
                        </a>
                    </li>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Shortcuts</a>
                    </li>
                    <li>
                        <a href="#">Overview</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> 
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="./index.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <div >
                <div >
                    
                    
                    <table class=" table-bordered" style="margin-top: 20px" style="background-color: orange">
                        <tr style="background-color: orange">
                            <td>
                                <p >user name </p>

                            </td>
                            <td>
                                <input type ="text"  value="" name ="" >
                            </td>
                        </tr>

                        <tr style="background-color: orange">
                            <td>
                                <p>password </p>

                            </td>
                            <td>
                                <input type ="password"  value="" name ="" >
                            </td>
                        </tr>
                    </table>
                </div>

                <div class=" btn-block btn-toolbar">   
                    <form action="teacher home.php" method="post" >
                    <input type="submit" class="btn-dark login"  id="3" value="Log in " />
                    
                    </form>
                    <input type="submit" class="btn-dark" value="Forget My Password!!!" />
                </div>
            </div>

        </div>





        <script src="./style/Jquery/jquery.min.js"></script>
        <script src="./style/Js/bootstrap.bundle.min.js"></script>
    </body>
</html>


<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });


    
</script>