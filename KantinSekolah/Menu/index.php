<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT m.Id_menu, m.Jenis, m.Harga, m.
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
        <th>Id menu</th>
         <th>Jenis</th> 
         <th>Harga</th>
          <th>Nama</th>
          <th>Stok</th>
          <th>Id_penjual</th>
    </tr>

    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['Id_menu']."</td>";
        echo "<td>".$user_data['Jenis']."</td>";
        echo "<td>".$user_data['Harga']."</td>";    
        echo "<td>".$user_data['Nama']."</td>";    
        echo "<td>".$user_data['Stok']."</td>";    
        echo "<td>".$user_data['Id_penjual']."</td>";    
        echo "<td><a href='edit.php?Id_menu=$user_data[Id_menu]'>Edit</a> | <a href='delete.php?Id_menu=$user_data[Id_menu]'>Delete</a></td></tr>";        
    }
    ?>
   
    </table>
</body>
</html>
