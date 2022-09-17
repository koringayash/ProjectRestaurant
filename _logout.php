<?php
session_start();
echo 'Logging You out. Please wait......';

session_destroy();
header("Location: /project/index.php");

?>