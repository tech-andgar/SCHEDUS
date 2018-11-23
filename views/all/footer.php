    <!-- FOOTER -->
        <footer class="app-footer"<?php if(empty($_SESSION['user'])){echo 'style="margin-left:0;"';}?> >
        <span><a href="#">SCHEDUS</a> &copy; <?php echo date('Y')?></span>
        <span class="ml-auto mr-2">Desarrollado por <a href="https://github.com/andgar2010">Andres Garcia</a></span>&amp;&nbsp;&nbsp;<span class="my-auto"><a href="https://github.com/johannbulls">Johann Amaya</a></span>
    </footer>
    <!-- END FOOTER -->

<?php
    // if (!empty($data['msgType'])) {
    //     echo "<script>toastr." . $data['msgType']['type'] . "('" . $data['msgType']['msg'] . "','" . $data['msgType']['title'] . "')</script>";
    // }
?>


<!-- <canvas id="myChart" width="400" height="400"></canvas>

<script>
    var ctx = document.getElementById("myChart");
    console.log(ctx);

    var options = {}

    var data = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [65, 59, 80, 81, 56, 55, 40],
                spanGaps: false,
            }
        ]
    };

     var myChart = new Chart(ctx,{
        type: 'line',
        data: data,
        options: options
    })
</script> -->

</body>
<!-- END BODY -->
</html>