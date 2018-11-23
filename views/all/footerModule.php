    <!-- FOOTER -->
    <footer class="app-footer">
        <span><a href="#">SCHEDUS</a> &copy;<?php echo date('Y') ?></span>
        <span class="ml-auto mr-2">Desarrollado por <a href="https://github.com/andgar2010">Andres Garcia</a></span>&amp;&nbsp;&nbsp;<span class="my-auto"><a href="https://github.com/johannbulls">Johann Amaya</a></span>
    </footer>
    <!-- END FOOTER -->

<?php
if (!empty($data['msgType'])) {
    echo "<script>toastr." . $data['msgType']['type'] . "('" . $data['msgType']['msg'] . "','" . $data['msgType']['title'] . "')</script>";
    unset($data);
}
?>

</body>
<!-- END BODY -->
</html>