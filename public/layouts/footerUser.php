<footer>
    <div id="footerContent">
        <p>Creative Commons <?php echo date("Y", time()); ?>, CPQR Univalle</p>
    </div>
</footer>
</body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>