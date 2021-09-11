<?php 
include_once 'dbhead.php';
require_once 'dccon1.php';
$query = "SELECT * FROM producat";
  $result=mysqli_query($con,$query);
?>

<div class='contetainer'>
<h3 class='well'style=background-color:#7300e6;color:white >DATA OF PRODUCT</h3><br>
  <table border=1 class='table' style=background-color:#7300e6;color:white>
    <tr>  
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Brand</th>
      <th>Prise</th>
      <th>Actions</th>
    </tr>
    <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td><?php echo $row['p_id']?></td>
      <td><?php echo $row['p_name']?></td>
      <td><?php echo $row['brand']?></td>
      <td><?php echo $row['prise']?></td>
       <td><a class="btn btn-info" href="dbup.php?id=<?php echo $row['p_id'] ?>">Edit</a> | <a class="btn btn-danger "href="dbdelete.php?id=<?php echo $row['p_id'] ?>">Delete</a></td>
    </tr> 
    <?php } ?>   
  </table>
  <br>
 <a  href="dbinsert.php" class="btn btn-primary">ADD PRODUCT</a>
</div>
</body>
</html>