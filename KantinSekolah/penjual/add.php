<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id_penjual</td>
                <td><input type="int" name="Id_penjual"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="varchar" name="Nama"></td>
            </tr>
            <tr> 
                <td>No_hp</td>
                <td><input type="int" name="No_hp"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="varchar" name="Alamat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $Id_penjual = $_POST['Id_penjual'];
        $Nama = $_POST['Nama'];
        $No_hp = $_POST['No_hp'];
        $Alamat = $_POST['Alamat'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO penjual (Id_penjual,Nama,No_hp,Alamat) VALUES ('$Id_penjual','$Nama','$No_hp','$Alamat')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>