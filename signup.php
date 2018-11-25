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

        <title>sign up </title>
        <link href="./style/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="./css/logo-nav.css" rel="stylesheet">


        <!-- Bootstrap core CSS -->
        <link href="./style/css/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="./css/simple-sidebar.css" rel="stylesheet">
    </head>






    <body>





        <div id="page-content-wrapper">
            <div class="container-fluid">
                <!-- Navigation -->
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




                    <div>


                        <table>
                            <tr>
                                <td>
                                    <p>user name </p>

                                </td>
                                <td>
                                    <input type ="text"  pattern="[A-za-Z]{2,}$" value="" name ="" >
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Email </p>

                                </td>
                                <td>
                                    <input type ="email"  value="" name ="" >
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>ID </p>

                                </td>
                                <td>
                                    <input type ="number"  value="" name ="" >
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Mobile number</p>

                                </td>
                                <td>
                                    <input type ="number"  value="" name ="" >
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Location from the id </p>

                                </td>
                                <td>
                                    <input type="name"  value="" name ="" >
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Nick Name</p>

                                </td>
                                <td>
                                    <input type ="text"  pattern="[A-za-Z]{2,}$" value="" name ="" >
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <p>Date</p>

                                </td>
                                <td>
                                    <input type ="date"  value="" name ="" >
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <p>password</p>

                                </td>
                                <td>
                                    <input type ="password"  value="" id="pass" name ="" >
                                    <input type="checkbox" onclick="myFunction()" >
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>retype password</p>

                                </td>
                                <td>
                                    <input type ="password" id="pass2"  value="" name ="" >
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <p>pin</p>

                                </td>
                                <td>
                                    <input type ="password "   value="" id="pin" name ="" >
                                    <input type="checkbox" onclick="myFunction2()" >
                                </td>
                            </tr>



                        </table>




                    </div>
                    <div>   
                        <form class="in" >
                        <input    type="submit" value="submit"  /> 
                        </form>
                    </div>


                </div>
            </div> 










        </div>

    </body>

</html>
<script>
    function myFunction() {
        var x = document.getElementById("pass");
        var z = document.getElementById("pass2");
        if (x.type === "password") {
            x.type = "text";
            z.type = "text";
        } else {
            x.type = "password";
            z.type = "password";
        }
    }

    function myFunction2() {
        var x = document.getElementById("pin");

        if (x.type === "password") {
            x.type = "text";

        } else {
            x.type = "password";

        }
    }

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    
    
    
    
       $('.in').click(function (event) {
                    window.location.href = "index.php";
                });

</script>
<script src="./style/Jquery/jquery.min.js"></script>
<script src="./style/Js/bootstrap.bundle.min.js"></script>


