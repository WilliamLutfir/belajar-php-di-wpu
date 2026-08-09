<?php
session_start();
$_SESSION=[];
session_unset();
session_destroy();
// utk menghapus cookie, atur cookie dgn nama yg sama & nilainya kosong, kemudian waktu expirednya buat pd waktu yg telah berlalu!
setcookie("n","",time()-60);
setcookie("key","",time()-60);
header("Location: login.php");
?>