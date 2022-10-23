<?php
include 'db_connect.php';
$sql = " SELECT ProductName, UnitsInStock From products where CategoryID=1 ";
$result = mysqli_query( $conn, $sql );
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<body>
  <table>
    <tr>
      <th>Product name</th>
      <th>Units in stock</th>
    </tr>
    <tbody>
 <?php while($row = $result->fetch_assoc()): ?>
  <tr>
   <td class="ProductName">
    <?php echo $row['ProductName']; ?>
   </td>
   <td><?php echo $row['UnitsInStock']; ?></td>
   </tr>
 <?php endwhile ?>
 
</tbody>
    <!-- add table rows hear ex.
    <tr>
      <td>Chai</td>
      <td>39</td>
    </tr>
    -->    
  </table>
</body>
</html>