<?php
include 'db_connect.php';
$sql = " SELECT CategoryID, CategoryName From categories ";
$q = mysqli_query( $conn, $sql );
echo "<select>";
    while( $f = mysqli_fetch_assoc( $q ) ) {
        echo "<option value='".$f['CategoryID']."'>".$f['CategoryName']."</option>";
      
    }
    echo  "</select>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
  
</head>
<body>
  <header>
    <form action="product.php" method="get">
      <label for="category">
        <select name="category" id="category">
          <!-- add options hear ex.
          <option value="1">Beverages</option>
          -->
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>