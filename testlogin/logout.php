<?php
session_start();

session_unset();
session_destroy();

//hancurkan cooke
setcookie("cookietoken","",time() - 3600,"/");
include "cekautentikasi.php";

?>
