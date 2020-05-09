<?php
include "koneksi.php";
$id=$_POST['id'];
$query=mysql_query("select * from regencies where province_id='".$id."'");

$row=mysql_num_rows($query);
if ($row > 0)
{
 while ($data=mysql_fetch_array($query))
 {
  echo "<option value=".$data["id"].">".$data["name"]."</option>";
 }
}
?>