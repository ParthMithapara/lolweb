
<?php
//<--it is use to connect the php page with anyother page -->
 require_once 'dccon1.php';
 include_once 'dbhead.php';
 $error=false;
 $nerror = '';
 $perror = '';
 $pn='';
 $pb='';
 $pp='';


  if(!empty($_POST))
{
      require_once 'dbvalid.php';
    $pn=cleaner($_POST['pname']);
    $pb=cleaner($_POST['pbrand']);
    $pp=$_POST['pprice'];
    require_once 'dbvalid.php';
    if(!$error){
    $q="INSERT INTO producat (p_name,brand,prise) VALUES ('$pn','$pb','$pp')";
    mysqli_query($con, $q);
    header("location:dbindex.php");
    exit();}

}
?>
 

  
<div class="container">
  
 <!-- The class well is use to box on any text-->
 <h3 class="well">Add Product</h3>
 <pre>
 <form method="POST"> <!-The 'action' word is tranfer the data into the file that name is given-> 
  <div class="form-group"> 
 <label>Name  :- </label><span class='ec'>*</span><input type="text" id="pname" name="pname"><small class='ec'><?php echo $nerror ?></small> 
 <label>Brand :- </label><input type="text" name="pbrand">
 <label>Price :- </label><input type="number" name="pprice"><small class='ec'><?php echo $perror ?></small> 
 <button type="submit" class="btn btn-info">Add</button>
</form>
</pre>
</body>
</html>
<?php

?>