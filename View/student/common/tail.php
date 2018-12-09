<footer class="page-footer">
    <div class="footer-copyright text-center py-3">Copyright 2018, Software Engineering Course, ASUENG.</div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../Style/Jquery/jquery.min.js"></script>
<script src="../../Style/Js/bootstrap.bundle.min.js"></script>

<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
