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
                <td>Id_menu</td>
                <td><input type="int" name="Id_menu"></td>
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
                <td><input type="varchar" name="Harga"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="varchar" name="Nama"></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="varchar" name="Stok"></td>
            </tr>
            <tr> 
                <td>Id_penjual</td>
               
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
        $Id_menu = $_POST['Id_menu'];
        $Jenis = $_POST['Jenis'];
        $Harga = $_POST['Harga'];
        $Nama = $_POST['Nama'];
        $Stok = $_POST['Stok'];
        $Id_penjual = $_POST['Id_penjual'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO menu (Id_menu,Jenis,Harga,Nama,Stok,Id_penjual) VALUES ('$Id_menu','$Jenis','$Harga','$Nama','$Stok','$Id_penjual')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>