<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'kotchakorn.mysql.database.azure.com', 'kotchakorn@kotchakorn', 'JLRhlq32', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Product = $_POST['Product'];
$Price = $_POST['Price'];
$Amount = $_POST['Amount'];
$Total = $_POST['Price']*$_POST['Amount'];




$sql = "INSERT INTO price (Product , Price , Amount, Total) VALUES ('$Product', '$Price', '$Amount', '$Total')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
