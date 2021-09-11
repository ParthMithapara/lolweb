<?php
if($pn == ''){
   $nerror ='Name is requried';
   $error= true;
}

if($pp == ''){
	$perror='Enter the prise';
	$error=true;
}

function cleaner($data)
{
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return($data);
}
?>