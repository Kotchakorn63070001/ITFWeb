<html>
<head>
<title>ITF Lab</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: rgb(180, 255, 239);"> 
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'kotchakorn.mysql.database.azure.com', 'kotchakorn@kotchakorn', 'JLRhlq32', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM price');
?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <table width="100%" border="1">
                <tr>
                  <th width="100" style="background-color: #F0F0B8;"><div align="center">Product </div></th>
                  <th width="350" style="background-color: #F0F0C8;"> <div align="center">Price </div></th>
                  <th width="150" style="background-color: #F0F0B8;"> <div align="center">Amount </div></th>
                  <th width="150" style="background-color: #F0F0B8;"> <div align="center">Total </div></th>
                  <th width="150" style="background-color: #F0F0C8;"> <div align="center">action </div></th>
                </tr>
              <?php
              while($Result = mysqli_fetch_array($res))
              {
              ?>
                <tr>
                  <td style="background-color: #ffffff;"><?php echo $Result['Product'];?></div></td>
                  <td style="background-color: #ffffff;"><?php echo $Result['Price'];?></td>
                  <td style="background-color: #ffffff;"><?php echo $Result['Amount'];?></td>
                  <td style="background-color: #ffffff;"><?php echo $Result['Total'];?></td>
                  <td style="background-color: #ffffff;">
                      <a href="delete_form.php?Id=<?=$Result['Id'];?>" class="btn btn-info">delete</a>
                  </td>
                </tr>
              <?php
              }
              ?>
              </table>
              
            <a href="form_product.html" class="btn btn-info">add</a>
        </div>
    </div>

</div>


<?php
mysqli_close($conn);
?>
</body>
</html>

