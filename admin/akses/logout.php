<?php
@session_start();
@session_destroy();
header("location: /dinas_pupr/index.php");
?>