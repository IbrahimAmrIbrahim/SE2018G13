<?php
include_once('../../Controllers/common.php');
include_once('../../Models/Courses.php');
include_once('../../Models/grade.php');

include_once('../../Models/user.php');
Database::DBConnect();
$id = safeGet('id');

$user = new User($id);

?>

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
                                <th scope="col">Course ID
                                    <button class="button idSortbtn"><i class="fas fa-sort-amount-up idSort"></i></button>
                                </th>
                                <th scope="col">Course Name
                                    <button class="button nameSortbtn"><i class="fas fa-random nameSort"></i></button>
                                </th>
                                <th scope="col" style="padding-bottom: 18px">Grade</th>
                                <th scope="col">Max Degree
                                    <button class="button yearSortbtn"><i class="fas fa-random yearSort"></i></button>
                                </th>
                                <th scope="col" style="padding-bottom: 18px">Examine at</th>
                                <th scope="col" style="padding-bottom: 18px">Attendance</th>
                                <th scope="col" style="padding-bottom: 18px">Max Attendance </th>
                            </tr>

                            <?php
                            $grades = Grade::std_all(7, NULL, NULL);
                            $gradenum = 0;
                            foreach ($grades as $grade) {
                                $gradenum = $gradenum + 1;
                                ?>
                                <tr id="GardeTable_tr">
                                    <td class="<?= 7 ?>gradeCrsID<?= $gradenum ?>"><?= $grade->course_id ?></td>
                                    <td class="<?= 7 ?>gradeCrsName<?= $gradenum ?>"><?= $grade->crs_name ?></td>
                                    <td class="<?= 7 ?>gradeDegree<?= $gradenum ?>"><?= $grade->degree ?></td>
                                    <td class="<?= 7 ?>gradeMaxDegree<?= $gradenum ?>"><?= $grade->max_degree ?></td>
                                    <td class="<?= 7 ?>gradeExamineAt<?= $gradenum ?>"><?= $grade->examine_at ?></td>
                                    <td ></td>
                                    <td ></td>
                                </tr>
                            <?php } ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </body> 
    <?php include_once './common/tail.php'; ?> 



    <script type="text/javascript">
        $(document).ready(function () {
            $('.edit_course').click(function (event) {
                window.location.href = "editcourse.php?id=" + $(this).attr('id');

            });

            $('.edit_grade').click(function (event) {
                window.location.href = "editgrade.php?id=" + $(this).attr('id') + "&page=crs";
            });

            $('.add_student').click(function (event) {
                window.location.href = "addstudenttocourse.php?id=" + $(this).attr('id');
            });

            $('.delete_course').click(function () {
                var anchor = $(this);
                var crsID = anchor.attr('id');
                $.ajax({
                    url: './controllers/deletecourses.php',
                    type: 'GET',
                    dataType: 'json',
                    data: {id: crsID},
                })
                        .done(function (response) {
                            if (response.status == 1) {
                                anchor.closest('tr').fadeOut('slow', function () {
                                    $(this).remove();
                                });
                                $("#grade" + crsID).fadeOut('slow');
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
                    $(".yearSort").attr("class", "fas fa-random yearSort");
                    crsViewSorted("id", "ASC");
                } else if (status == "fas fa-sort-amount-up idSort") {
                    $('.idSort').attr("class", "fas fa-sort-amount-down idSort");
                    $(".nameSort").attr("class", "fas fa-random nameSort");
                    $(".yearSort").attr("class", "fas fa-random yearSort");
                    crsViewSorted("id", "DESC");
                }
            });

            $('.nameSortbtn').click(function () {
                var status = $('.nameSort').attr('class');
                if (status == "fas fa-sort-amount-down nameSort" || status == "fas fa-random nameSort") {
                    $('.nameSort').attr("class", "fas fa-sort-amount-up nameSort");
                    $(".idSort").attr("class", "fas fa-random idSort");
                    $(".yearSort").attr("class", "fas fa-random yearSort");
                    crsViewSorted("name", "ASC");
                } else if (status == "fas fa-sort-amount-up nameSort") {
                    $('.nameSort').attr("class", "fas fa-sort-amount-down nameSort");
                    $(".idSort").attr("class", "fas fa-random idSort");
                    $(".yearSort").attr("class", "fas fa-random yearSort");
                    crsViewSorted("name", "DESC");
                }
            });

            $('.yearSortbtn').click(function () {
                var status = $('.yearSort').attr('class');
                if (status == "fas fa-sort-amount-down yearSort" || status == "fas fa-random yearSort") {
                    $('.yearSort').attr("class", "fas fa-sort-amount-up yearSort");
                    $(".idSort").attr("class", "fas fa-random idSort");
                    $(".nameSort").attr("class", "fas fa-random nameSort");
                    crsViewSorted("study_year", "ASC");
                } else if (status == "fas fa-sort-amount-up yearSort") {
                    $('.yearSort').attr("class", "fas fa-sort-amount-down yearSort");
                    $(".idSort").attr("class", "fas fa-random idSort");
                    $(".nameSort").attr("class", "fas fa-random nameSort");
                    crsViewSorted("study_year", "DESC");
                }
            });

            $('.stdIDSortbtn').click(function () {
                var crsID = $(this).attr('crsID');
                var status = $("." + crsID + "stdIDSort").attr('class');
                if (status == "fas fa-sort-amount-down " + crsID + "stdIDSort" || status == "fas fa-random " + crsID + "stdIDSort") {
                    $("." + crsID + "stdIDSort").attr("class", "fas fa-sort-amount-up " + crsID + "stdIDSort");
                    $("." + crsID + "stdNameSort").attr("class", "fas fa-random " + crsID + "stdNameSort");
                    $("." + crsID + "gradeSort").attr("class", "fas fa-random " + crsID + "gradeSort");
                    $("." + crsID + "examineatSort").attr("class", "fas fa-random " + crsID + "examineatSort");
                    gradeViewSort(crsID, "student_id", "ASC");
                } else if (status == "fas fa-sort-amount-up " + crsID + "stdIDSort") {
                    $("." + crsID + "stdIDSort").attr('class', "fas fa-sort-amount-down " + crsID + "stdIDSort");
                    $("." + crsID + "stdNameSort").attr("class", "fas fa-random " + crsID + "stdNameSort");
                    $("." + crsID + "gradeSort").attr("class", "fas fa-random " + crsID + "gradeSort");
                    $("." + crsID + "examineatSort").attr("class", "fas fa-random " + crsID + "examineatSort");
                    gradeViewSort(crsID, "student_id", "DESC");
                }
            });

            $('.stdNameSortbtn').click(function () {
                var crsID = $(this).attr('crsID');
                var status = $("." + crsID + "stdNameSort").attr('class');
                if (status == "fas fa-sort-amount-down " + crsID + "stdNameSort" || status == "fas fa-random " + crsID + "stdNameSort") {
                    $("." + crsID + "stdNameSort").attr("class", "fas fa-sort-amount-up " + crsID + "stdNameSort");
                    $("." + crsID + "stdIDSort").attr("class", "fas fa-random " + crsID + "stdIDSort");
                    $("." + crsID + "gradeSort").attr("class", "fas fa-random " + crsID + "gradeSort");
                    $("." + crsID + "examineatSort").attr("class", "fas fa-random " + crsID + "examineatSort");
                    gradeViewSort(crsID, "std_name", "ASC");
                } else if (status == "fas fa-sort-amount-up " + crsID + "stdNameSort") {
                    $("." + crsID + "stdNameSort").attr('class', "fas fa-sort-amount-down " + crsID + "stdNameSort");
                    $("." + crsID + "stdIDSort").attr("class", "fas fa-random " + crsID + "stdIDSort");
                    $("." + crsID + "gradeSort").attr("class", "fas fa-random " + crsID + "gradeSort");
                    $("." + crsID + "examineatSort").attr("class", "fas fa-random " + crsID + "examineatSort");
                    gradeViewSort(crsID, "std_name", "DESC");
                }
            });

            $('.gradeSortbtn').click(function () {
                var crsID = $(this).attr('crsID');
                var status = $("." + crsID + "gradeSort").attr('class');
                if (status == "fas fa-sort-amount-down " + crsID + "gradeSort" || status == "fas fa-random " + crsID + "gradeSort") {
                    $("." + crsID + "gradeSort").attr("class", "fas fa-sort-amount-up " + crsID + "gradeSort");
                    $("." + crsID + "stdIDSort").attr("class", "fas fa-random " + crsID + "stdIDSort");
                    $("." + crsID + "stdNameSort").attr("class", "fas fa-random " + crsID + "stdNameSort");
                    $("." + crsID + "examineatSort").attr("class", "fas fa-random " + crsID + "examineatSort");
                    gradeViewSort(crsID, "degree", "ASC");
                } else if (status == "fas fa-sort-amount-up " + crsID + "gradeSort") {
                    $("." + crsID + "gradeSort").attr('class', "fas fa-sort-amount-down " + crsID + "gradeSort");
                    $("." + crsID + "stdIDSort").attr("class", "fas fa-random " + crsID + "stdIDSort");
                    $("." + crsID + "stdNameSort").attr("class", "fas fa-random " + crsID + "stdNameSort");
                    $("." + crsID + "examineatSort").attr("class", "fas fa-random " + crsID + "examineatSort");
                    gradeViewSort(crsID, "degree", "DESC");
                }
            });

            $('.examineatSortbtn').click(function () {
                var crsID = $(this).attr('crsID');
                var status = $("." + crsID + "examineatSort").attr('class');
                if (status == "fas fa-sort-amount-down " + crsID + "examineatSort" || status == "fas fa-random " + crsID + "examineatSort") {
                    $("." + crsID + "examineatSort").attr("class", "fas fa-sort-amount-up " + crsID + "examineatSort");
                    $("." + crsID + "stdIDSort").attr("class", "fas fa-random " + crsID + "stdIDSort");
                    $("." + crsID + "stdNameSort").attr("class", "fas fa-random " + crsID + "stdNameSort");
                    $("." + crsID + "gradeSort").attr("class", "fas fa-random " + crsID + "gradeSort");
                    gradeViewSort(crsID, "examine_at", "ASC");
                } else if (status == "fas fa-sort-amount-up " + crsID + "examineatSort") {
                    $("." + crsID + "examineatSort").attr('class', "fas fa-sort-amount-down " + crsID + "examineatSort");
                    $("." + crsID + "stdIDSort").attr("class", "fas fa-random " + crsID + "stdIDSort");
                    $("." + crsID + "stdNameSort").attr("class", "fas fa-random " + crsID + "stdNameSort");
                    $("." + crsID + "gradeSort").attr("class", "fas fa-random " + crsID + "gradeSort");
                    gradeViewSort(crsID, "examine_at", "DESC");
                }
            });


        });

        function crsViewSorted($col, $ord) {
            $.ajax({
                url: './controllers/coursesort.php',
                type: 'GET',
                dataType: 'json',
                data: {keyword: $("#SearchBox").val(), column: $col, order: $ord},
            })
                    .done(function (response) {
                        var num = 0;
                        response.forEach(function (obj) {
                            num = num + 1;
                            $(".crsID" + num).text(obj.id);
                            $(".crsName" + num).text(obj.name);
                            $(".crsMaxDegree" + num).text(obj.max_degree);
                            $(".crsStudyYear" + num).text(obj.study_year);
                            $(".crsGrade" + num).attr("id", obj.id);
                            $(".crsEdit" + num).attr("id", obj.id);
                            $(".crsDelete" + num).attr("id", obj.id);
                            if ($("#grade" + obj.id).is(':visible')) {
                                $(".crsGrade" + num).text("Hide");
                            } else {
                                $(".crsGrade" + num).text("Show");
                            }
                            $(".crsRow" + num).after($("#grade" + obj.id))
                        })
                    })
                    .fail(function () {
                        alert("Connection error.");
                    })
        }

        function gradeViewSort($ID, $col, $ord) {
            var crsdID = $ID;
            $.ajax({
                url: './controllers/gradesort.php',
                type: 'GET',
                dataType: 'json',
                data: {column: $col, order: $ord, page: "crs", ID: crsdID},
            })
                    .done(function (response) {
                        var num = 0;
                        response.forEach(function (obj) {
                            num = num + 1;
                            $("." + crsdID + "gradestdID" + num).text(obj.student_id);
                            $("." + crsdID + "gradestdName" + num).text(obj.std_name);
                            $("." + crsdID + "gradeDegree" + num).text(obj.degree);
                            $("." + crsdID + "gradeExamineAt" + num).text(obj.examine_at);
                            $("." + crsdID + "gradeEdit" + num).attr("id", obj.id);
                            $("." + crsdID + "gradeDelete" + num).attr("id", obj.id);
                        })
                    })
                    .fail(function () {
                        alert("Connection error.");
                    })
        }

    </script>   
</html>