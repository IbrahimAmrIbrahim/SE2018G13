</div>


<!-- The Modal -->
                        <div class="modal fade" id="loginModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="background-color: #330066">
                                    <div class="modal-body">
                                        <?php include_once('./View/login.php')?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="signupModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="background-color: #330066">
                                    <div class="modal-body">
                                        <?php include_once('./View/signup.php') ?>
                                    </div>
                                </div>
                            </div>
                        </div>  






<footer class="page-footer">
            <div class="footer-copyright text-center py-3">Copyright 2018, Software Engineering Course, ASUENG.</div>
        </footer>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="./Style/Jquery/jquery.min.js"></script>
        <script src="./Style/Js/bootstrap.bundle.min.js"></script>

        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>