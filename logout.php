<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
header("location:loginV2.php");
exit;
