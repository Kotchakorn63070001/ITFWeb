<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'kotchakorn.mysql.database.azure.com', 'kotchakorn@kotchakorn', 'JLRhlq32', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM price WHERE id = $id";


if (mysqli_query($conn, $sql)) {
    header('location: show_product.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
echo "<a href=\"show_product.php\">BACK</a>";
?>
