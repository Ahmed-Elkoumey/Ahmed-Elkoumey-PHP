<?php
session_start();
include_once"review.php";
// include_once "number.php";



echo
"
<div class='alert alert-danger'>
{$_SESSION['review']}<br>
 {$_SESSION['num']}</div>";
?>