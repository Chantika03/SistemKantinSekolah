<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id = $_GET['Id_penjual'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM penjual WHERE Id_penjual=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>