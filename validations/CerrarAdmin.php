<?php
session_start();
session_destroy();
session_unset();
header('Location:http://localhost/parkit/192.168.088.html');
?>
