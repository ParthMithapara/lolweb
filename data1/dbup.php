<?php

include_once 'dbhead.php';
require_once 'dccon1.php';

 if(!empty($_POST))
 {
  $error = false ;
  $nerror = '';
  $perror = '';
  $pn='';
  $pp='';
   require_once 'dbvalid.php';
     $ui=$_POST['pid'];
     $pn=cleaner($_POST['pnm']);
     $ub=$_POST['pb'];
     $pp=cleaner($_POST['pp']);
    require_once 'dbvalid.php';
   
  if(!$error)
    { $q="UPDATE producat SET p_name='$pn', brand='$ub', prise='$pp' WHERE p_id='$ui'";
     $ur=mysqli_query($con,$q);
     header("location:dbindex.php");
     exit();}
  }

$query='SELECT * FROM producat WHERE p_id='.$_GET['id'];
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);



?>
</body>
<h3 class="well">UPDATE PRODUCT</h3>
<form method="POST" class="well">
  <label>Product ID</label>
  <input type="text" name="pid" value="<?php echo $row['p_id']?>"><br>
  <label>Product Name<span class='ec'>*</span></label>
  <input type="text" name="pnm" value="<?php echo $row['p_name']?>"> <small class="ec"><?php echo $nerror ?></small><br>
  <label>Brand</label>
  <input type="text" name="pb" value="<?php echo $row['brand']?>"><br>
  <label>Prise</label>
  <input type="text" name="pp" value="<?php echo $row['prise']?>"><small class='ec'><?php echo $perror ?></small><br>
  <button type="submit" class="btn btn-primary">SUBMIT</button>   
</form>
</html>
