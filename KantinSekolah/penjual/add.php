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
                <td>id penjual</td>
                <td><input type="int" name="id_penjual"></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="varchar" name="nama"></td>
            </tr>
            <tr> 
                <td>no hp</td>
                <td><input type="varchar" name="no_hp"></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="varchar" name="alamat"></td>
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
        $IdPenjual = $_POST['id_penjual'];
        $nama = $_POST['nama'];
        $NoHp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO penjual (IdPenjual,nama,NoHp,alamat) VALUES('$IdPenjual','$nama','$NoHp','$alamat)");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>