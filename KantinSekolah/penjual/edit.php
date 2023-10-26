<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['Id_penjual'];
    
    $Id_penjual=$_POST['Id_penjual'];
    $Nama=$_POST['Nama'];
    $No_hp=$_POST['No_hp'];
    $Alamat=$_POST['Alamat'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE penjual SET Id_penjual= '$Id_penjual',Nama='$Nama',No_hp='$No_hp',Alamat= '$Alamat' WHERE Id_penjual=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['Id_penjual'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM penjual WHERE Id_penjual=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $Id_penjual=$user_data['Id_penjual'];
    $Nama=$user_data['Nama'];
    $No_hp=$user_data['No_hp'];
    $Alamat=$user_data['Alamat'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Id_penjual</td>
                <td><input type="int" name="Id_penjual" value=<?php echo $Id_penjual;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="varchar" name="Nama" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>No_hp</td>
                <td><input type="int" name="No_hp" value=<?php echo $No_hp;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="varchar" name="Alamat" value=<?php echo $Alamat;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="Id_penjual" value=<?php echo $_GET['Id_penjual'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>