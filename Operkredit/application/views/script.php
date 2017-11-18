<!-- jQuery Library -->
<script type="text/javascript" src="<?php echo base_url("./js/jquery-1.11.2.min.js")?>"></script>
<!--materialize js-->
<script type="text/javascript" src="<?php echo base_url("./js/materialize.js")?>"></script>
<!--scrollbar-->
<script type="text/javascript" src="<?php echo base_url("./js/plugins/perfect-scrollbar/perfect-scrollbar.min.js")?>"></script>


<!-- chartist -->

<script type="text/javascript" src="<?php echo base_url("./js/plugins/chartist-js/chartist.min.js")?>"></script>

<!-- chartjs -->
<script type="text/javascript" src="<?php echo base_url("./js/plugins/chartjs/chart.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("./js/plugins/chartjs/chart-script.js")?>"></script>

<!-- sparkline -->
<script type="text/javascript" src="<?php echo base_url("./js/plugins/sparkline/jquery.sparkline.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("./js/plugins/sparkline/sparkline-script.js")?>"></script>

<!-- google map api -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

<!--jvectormap-->
<script type="text/javascript" src="<?php echo base_url("./js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("./js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("./js/plugins/jvectormap/vectormap-script.js")?>"></script>


<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="<?php echo base_url("./js/plugins.js")?>"></script>
<!-- Toast Notification -->

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>