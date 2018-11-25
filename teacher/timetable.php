<html>
    <?php
include_once('./controllers/common.php');
include_once('./components/head.php');
include_once('./models/Courses.php');
include_once('./models/Student.php');
include_once('./models/grade.php');
Database::DBConnect();
?>
   <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Simple Sidebar - Start Bootstrap Template</title>

        
             <!-- Bootstrap core CSS -->
        <link href="../style/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/logo-nav.css" rel="stylesheet">
        
        
        <!-- Bootstrap core CSS -->
        <link href="../style/css/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/simple-sidebar.css" rel="stylesheet">

    </head>
    
    <body>
        <div id="wrapper" >
           <div>
       <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                           Teacher
                        </a>
                    </li>
                    <li>
                        <a href="./courses.php">Courses</a>
                    </li>
                    <li>
                        <a href="#">Time Table</a>
                    </li>
                    <li>
                        <a href="./students.php">Students  </a>
                    </li>
                    <li>
                        <a href="">files</a>
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
                                <a class="nav-link" href="../teacher home.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Sign Out</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
            
            <div id="page-content-wrapper">
                
                
                <div>
                    <table class="table" style="margin-top: 20px">
            <thead>
                <tr id="StudentTable_th">
                    <th scope="col">Time Table ID
                        <button class="button idSortbtn"><i class="fas fa-sort-amount-up idSort"></i></button>
                    </th>
                    <th scope="col">Date
                        <button class="button nameSortbtn"><i class="fas fa-random nameSort"></i></button>
                    </th>
                    <th scope="col"  style="padding-bottom: 18px">Event</th>
                    <th scope="col"><button class="button float-right edit_student" id="0">Add Event</button></th>
                </tr>
            </thead>
            <tr id="StudentTable_tr">
                <td>
                    
                </td>
                
                 <td>
                    
                </td>
                 <td>
                    
                </td>
                 <td>
                   
                </td>
            </tr>
            
        </table>
                    
                    
                    
                    
                    
                </div>
                
                
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </div>
    </body>
</html>


    <script type="text/javascript">
            $(document).ready(function () {
                $('.edit_student').click(function (event) {
                    window.location.href = "editstudent.php?id=" + $(this).attr('id');
                });

                $('.edit_grade').click(function (event) {
                    window.location.href = "editgrade.php?id=" + $(this).attr('id') + "&page=std";
                });

                $('.add_Courses').click(function (event) {
                    window.location.href = "addcoursetostudent.php?id=" + $(this).attr('id');
                });

                $('.delete_student').click(function () {
                    var anchor = $(this);
                    var stdID = anchor.attr('id');
                    $.ajax({
                        url: './controllers/deletestudent.php',
                        type: 'GET',
                        dataType: 'json',
                        data: {id: stdID},
                    })
                            .done(function (response) {
                                if (response.status == 1) {
                                    anchor.closest('tr').fadeOut('slow', function () {
                                        $(this).remove();
                                    });
                                    $("#grade" + stdID).fadeOut('slow');
                                }
                            })
                            .fail(function () {
                                alert("Connection error.");
                            })
                });

                $('.delete_grade').click(function () {
                    var anchor = $(this);
                    $.ajax({
                        url: './controllers/deletegrade.php',
                        type: 'GET',
                        dataType: 'json',
                        data: {id: anchor.attr('id')},
                    })
                            .done(function (response) {
                                if (response.status == 1) {
                                    anchor.closest('tr').fadeOut('slow', function () {
                                        $(this).remove();
                                    });
                                }
                            })
                            .fail(function () {
                                alert("Connection error.");
                            })
                });

                $('.show_grade').click(function () {
                    var anchor = $(this);
                    $('#grade' + anchor.attr('id')).slideToggle("Slow", function () {
                        var status = anchor.text();
                        if (status == "Show") {
                            anchor.text("Hide");
                        } else if (status == "Hide")
                        {
                            anchor.text("Show");
                        }
                    });
                });

                $('.idSortbtn').click(function () {
                    var status = $('.idSort').attr('class');
                    if (status == "fas fa-sort-amount-down idSort" || status == "fas fa-random idSort") {
                        $('.idSort').attr("class", "fas fa-sort-amount-up idSort");
                        $(".nameSort").attr("class", "fas fa-random nameSort");
                        stdViewSort("id", "ASC");
                    } else if (status == "fas fa-sort-amount-up idSort") {
                        $('.idSort').attr('class', "fas fa-sort-amount-down idSort");
                        $(".nameSort").attr("class", "fas fa-random nameSort");
                        stdViewSort("id", "DESC");
                    }
                });

                $('.nameSortbtn').click(function () {
                    var status = $('.nameSort').attr('class');
                    if (status == "fas fa-sort-amount-down nameSort" || status == "fas fa-random nameSort") {
                        $('.nameSort').attr("class", "fas fa-sort-amount-up nameSort");
                        $(".idSort").attr("class", "fas fa-random idSort");
                        stdViewSort("name", "ASC");
                    } else if (status == "fas fa-sort-amount-up nameSort") {
                        $('.nameSort').attr('class', "fas fa-sort-amount-down nameSort");
                        $(".idSort").attr("class", "fas fa-random idSort");
                        stdViewSort("name", "DESC");
                    }
                });

                $('.crsIDSortbtn').click(function () {
                    var stdID = $(this).attr('stdID');
                    var status = $("." + stdID + "crsIDSort").attr('class');
                    if (status == "fas fa-sort-amount-down " + stdID + "crsIDSort" || status == "fas fa-random " + stdID + "crsIDSort") {
                        $("." + stdID + "crsIDSort").attr("class", "fas fa-sort-amount-up " + stdID + "crsIDSort");
                        $("." + stdID + "crsNameSort").attr("class", "fas fa-random " + stdID + "crsNameSort");
                        $("." + stdID + "gradeSort").attr("class", "fas fa-random " + stdID + "gradeSort");
                        $("." + stdID + "examineatSort").attr("class", "fas fa-random " + stdID + "examineatSort");
                        gradeViewSort(stdID, "course_id", "ASC");
                    } else if (status == "fas fa-sort-amount-up " + stdID + "crsIDSort") {
                        $("." + stdID + "crsIDSort").attr('class', "fas fa-sort-amount-down " + stdID + "crsIDSort");
                        $("." + stdID + "crsNameSort").attr("class", "fas fa-random " + stdID + "crsNameSort");
                        $("." + stdID + "gradeSort").attr("class", "fas fa-random " + stdID + "gradeSort");
                        $("." + stdID + "examineatSort").attr("class", "fas fa-random " + stdID + "examineatSort");
                        gradeViewSort(stdID, "course_id", "DESC");
                    }
                });

                $('.crsNameSortbtn').click(function () {
                    var stdID = $(this).attr('stdID');
                    var status = $("." + stdID + "crsNameSort").attr('class');
                    if (status == "fas fa-sort-amount-down " + stdID + "crsNameSort" || status == "fas fa-random " + stdID + "crsNameSort") {
                        $("." + stdID + "crsNameSort").attr("class", "fas fa-sort-amount-up " + stdID + "crsNameSort");
                        $("." + stdID + "crsIDSort").attr("class", "fas fa-random " + stdID + "crsIDSort");
                        $("." + stdID + "gradeSort").attr("class", "fas fa-random " + stdID + "gradeSort");
                        $("." + stdID + "examineatSort").attr("class", "fas fa-random " + stdID + "examineatSort");
                        gradeViewSort(stdID, "crs_name", "ASC");
                    } else if (status == "fas fa-sort-amount-up " + stdID + "crsNameSort") {
                        $("." + stdID + "crsNameSort").attr('class', "fas fa-sort-amount-down " + stdID + "crsNameSort");
                        $("." + stdID + "crsIDSort").attr("class", "fas fa-random " + stdID + "crsIDSort");
                        $("." + stdID + "gradeSort").attr("class", "fas fa-random " + stdID + "gradeSort");
                        $("." + stdID + "examineatSort").attr("class", "fas fa-random " + stdID + "examineatSort");
                        gradeViewSort(stdID, "crs_name", "DESC");
                    }
                });

                $('.gradeSortbtn').click(function () {
                    var stdID = $(this).attr('stdID');
                    var status = $("." + stdID + "gradeSort").attr('class');
                    if (status == "fas fa-sort-amount-down " + stdID + "gradeSort" || status == "fas fa-random " + stdID + "gradeSort") {
                        $("." + stdID + "gradeSort").attr("class", "fas fa-sort-amount-up " + stdID + "gradeSort");
                        $("." + stdID + "crsIDSort").attr("class", "fas fa-random " + stdID + "crsIDSort");
                        $("." + stdID + "crsNameSort").attr("class", "fas fa-random " + stdID + "crsNameSort");
                        $("." + stdID + "examineatSort").attr("class", "fas fa-random " + stdID + "examineatSort");
                        gradeViewSort(stdID, "degree", "ASC");
                    } else if (status == "fas fa-sort-amount-up " + stdID + "gradeSort") {
                        $("." + stdID + "gradeSort").attr('class', "fas fa-sort-amount-down " + stdID + "gradeSort");
                        $("." + stdID + "crsIDSort").attr("class", "fas fa-random " + stdID + "crsIDSort");
                        $("." + stdID + "crsNameSort").attr("class", "fas fa-random " + stdID + "crsNameSort");
                        $("." + stdID + "examineatSort").attr("class", "fas fa-random " + stdID + "examineatSort");
                        gradeViewSort(stdID, "degree", "DESC");
                    }
                });

                $('.examineatSortbtn').click(function () {
                    var stdID = $(this).attr('stdID');
                    var status = $("." + stdID + "examineatSort").attr('class');
                    if (status == "fas fa-sort-amount-down " + stdID + "examineatSort" || status == "fas fa-random " + stdID + "examineatSort") {
                        $("." + stdID + "examineatSort").attr("class", "fas fa-sort-amount-up " + stdID + "examineatSort");
                        $("." + stdID + "crsIDSort").attr("class", "fas fa-random " + stdID + "crsIDSort");
                        $("." + stdID + "crsNameSort").attr("class", "fas fa-random " + stdID + "crsNameSort");
                        $("." + stdID + "gradeSort").attr("class", "fas fa-random " + stdID + "gradeSort");
                        gradeViewSort(stdID, "examine_at", "ASC");
                    } else if (status == "fas fa-sort-amount-up " + stdID + "examineatSort") {
                        $("." + stdID + "examineatSort").attr('class', "fas fa-sort-amount-down " + stdID + "examineatSort");
                        $("." + stdID + "crsIDSort").attr("class", "fas fa-random " + stdID + "crsIDSort");
                        $("." + stdID + "crsNameSort").attr("class", "fas fa-random " + stdID + "crsNameSort");
                        $("." + stdID + "gradeSort").attr("class", "fas fa-random " + stdID + "gradeSort");
                        gradeViewSort(stdID, "examine_at", "DESC");
                    }
                });

            });

            function stdViewSort($col, $ord) {
                $.ajax({
                    url: './controllers/studentsort.php',
                    type: 'GET',
                    dataType: 'json',
                    data: {keyword: $("#SearchBox").val(), column: $col, order: $ord},
                })
                        .done(function (response) {
                            var num = 0;
                            response.forEach(function (obj) {
                                num = num + 1;
                                $(".stdID" + num).text(obj.id);
                                $(".stdName" + num).text(obj.name);
                                $(".stdGrade" + num).attr("id", obj.id);
                                $(".stdEdit" + num).attr("id", obj.id);
                                $(".stdDelete" + num).attr("id", obj.id);
                                if ($("#grade" + obj.id).is(':visible')) {
                                    $(".stdGrade" + num).text("Hide");
                                } else {
                                    $(".stdGrade" + num).text("Show");
                                }
                                $(".stdRow" + num).after($("#grade" + obj.id))
                            })
                        })
                        .fail(function () {
                            alert("Connection error.");
                        })
            }

            function gradeViewSort($ID, $col, $ord) {
                var stdID = $ID;
                $.ajax({
                    url: './controllers/gradesort.php',
                    type: 'GET',
                    dataType: 'json',
                    data: {column: $col, order: $ord, page: "std", ID: stdID},
                })
                        .done(function (response) {
                            var num = 0;
                            response.forEach(function (obj) {
                                num = num + 1;
                                $("." + stdID + "gradeCrsID" + num).text(obj.course_id);
                                $("." + stdID + "gradeCrsName" + num).text(obj.crs_name);
                                $("." + stdID + "gradeDegree" + num).text(obj.degree);
                                $("." + stdID + "gradeMaxDegree" + num).text(obj.max_degree);
                                $("." + stdID + "gradeExamineAt" + num).text(obj.examine_at);
                                $("." + stdID + "gradeEdit" + num).attr("id", obj.id);
                                $("." + stdID + "gradeDelete" + num).attr("id", obj.id);
                            })
                        })
                        .fail(function () {
                            alert("Connection error.");
                        })
            }
        </script>


 </script>   
         <script src="../style/Jquery/jquery.min.js"></script>
        <script src="../style/Js/bootstrap.bundle.min.js"></script>
        <script>
            
            
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });


    
</script>