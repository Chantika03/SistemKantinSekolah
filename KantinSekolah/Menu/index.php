<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM menu ORDER BY Id_Menu DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="../index.php">kembali ke halaman utama</a><br/>
    <a href="add.php">pilih menu</a><br/><br/>
 
    <table width='80%' border=1>
    <tr>
        <th>Id_menu</th>
         <th>Jenis</th> 
         <th>Harga</th>
          <th>Nama</th>
          <th>Stok</th>
          <th>Id_penjual</th>
    </tr>

    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['Id_Menu']."</td>";
        echo "<td>".$user_data['Jenis']."</td>";
        echo "<td>".$user_data['Harga']."</td>";    
        echo "<td>".$user_data['Nama']."</td>";    
        echo "<td>".$user_data['Stok']."</td>";    
        echo "<td>".$user_data['Id_penjual']."</td>";    
        echo "<td><a href='edit.php?Id_Menu=$user_data[Id_Menu]'>Edit</a> | <a href='delete.php?Id_Menu=$user_data[Id_Menu]'>Delete</a></td></tr>";        
    }
    ?>
   
    </table>
</body>
</html>
