<?php
 require_once('dccon1.php');
 $q='DELETE FROM producat WHERE p_id='.$_GET['id'];
 $r=mysqli_query($con,$q);
 header('location:dbindex.php');
 exit;
?>