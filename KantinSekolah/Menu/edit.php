<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['Id_Menu'];
    
    $Id_Menu=$_POST['Id_Menu'];
    $Jenis=$_POST['Jenis'];
    $Harga=$_POST['Harga'];
    $Nama=$_POST['Nama'];
    $Stok=$_POST['Stok'];
    $Id_penjual=$_POST['Id_penjual'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE menu SET Id_Menu= '$Id_Menu',Jenis= '$Jenis',Harga= '$Harga',Nama= '$Nama',Stok= '$Stok',Id_penjual= '$Id_penjual'  WHERE Id_Menu=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['Id_Menu'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM menu WHERE Id_Menu=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    
    $Id_Menu=$user_data['Id_Menu'];
    $Jenis=$user_data['Jenis'];
    $Harga=$user_data['Harga'];
    $Nama=$user_data['Nama'];
    $Stok=$user_data['Stok'];
    $Id_penjual=$user_data['Id_penjual'];
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
                <td>Id_menu</td>
                <td><input type="int" name="Id_Menu" value=<?php echo $Id_Menu;?>></td>
            </tr>
            <tr> 
            <td>Jenis</td>
                <td><select name="Jenis">
                    <option value="makanan"> Makanan <select\>
                    <option value="minuman"> Minuman <select\>

                    </td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="varchar" name="Harga" value=<?php echo $Harga;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="varchar" name="Nama" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="varchar" name="Stok" value=<?php echo $Stok;?>></td>
            </tr>
            <tr> 
                <td>Id_penjual</td>
                <?php
                include "config.php";
                $query = "SELECT * FROM penjual";
                $datapenjual = mysqli_query($mysqli, $query);               
                ?>

                <td><select name="Nama" id="">
                    <?php
                    while ($row = mysqli_fetch_array($datapenjual)) {
                    ?>
                    <option value="<?=$row['Id_penjual'] ?>"><?=$row['Nama']?></option>
                    <?php } ?>
               
            </tr>
            <tr>
                <td><input type="hidden" name="Id_Menu" value=<?php echo $_GET['Id_Menu'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>