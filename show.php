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
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <table width="100%" border="1">
                <tr>
                  <th width="100" style="background-color: #F0F0B8;"><div align="center">name</div></th>
                  <th width="350" style="background-color: #F0F0C8;"> <div align="center">comment </div></th>
                  <th width="150" style="background-color: #F0F0B8;"> <div align="center">link </div></th>
                  <th width="150" style="background-color: #F0F0C8;"> <div align="center">action </div></th>
                </tr>
              <?php
              while($Result = mysqli_fetch_array($res))
              {
              ?>
                <tr>
                  <td style="background-color: #ffffff;"><?php echo $Result['name'];?></div></td>
                  <td style="background-color: #ffffff;"><?php echo $Result['comment'];?></td>
                  <td style="background-color: #ffffff;"><?php echo $Result['link'];?></td>
                  <td style="background-color: #ffffff;">
                      <a href="delete.php?id=<?=$Result['id'];?>" class="btn btn-info">delete</a>
                      <a href="edit.php?id=<?=$Result['id'];?>" class="btn btn-info">edit</a>
                  </td>
                </tr>
              <?php
              }
              ?>
              </table>
              
            <a href="form.html" class="btn btn-info">add</a>
        </div>
    </div>

</div>


<?php
mysqli_close($conn);
?>
</body>
</html>
