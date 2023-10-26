<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM penjual ORDER BY Id_penjual DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="../index.php">kembali ke halaman utama</a><br/>
    <a href="add.php">tambah penjual</a><br/><br/>
 
    <table width='80%' border=1>
    <tr>
        <th>id_penjual</th>
         <th>nama</th> 
         <th>no_hp</th>
          <th>alamat</th>
    </tr>

    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['Id_penjual']."</td>";
        echo "<td>".$user_data['Nama']."</td>";
        echo "<td>".$user_data['No_hp']."</td>";    
        echo "<td>".$user_data['Alamat']."</td>";    
        echo "<td><a href='edit.php?Id_penjual=$user_data[Id_penjual]'>Edit</a> | <a href='delete.php?Id_penjual=$user_data[Id_penjual]'>Delete</a></td></tr>";        
    }
    ?>
   
    </table>
</body>
</html>
