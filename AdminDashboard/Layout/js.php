

<script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/dynamic-pie-chart.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.js"></script>
    <script src="js/jvectormap.min.js"></script>
    <script src="js/world-merc.js"></script>
    <script src="js/polyfill.js"></script>
    <script src="js/main.js"></script>

  <script>
    document.getElementById('confirmDeleteButton').addEventListener('click', function () {
        const form = document.querySelector('form[onsubmit="return false;"]');
        if (form) {
            form.submit();
        }
    });
</script>
    