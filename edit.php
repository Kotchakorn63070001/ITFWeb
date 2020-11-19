<?php
$id = $_GET['id'];
?>
<html>
<head>
  <title>Comment Form</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: rgb(240, 204, 160);">
  <form action="saveedit.php" method="post" style="padding-top: 100px; padding-left: 30%; padding-right: 30%;">
  <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="comment">comment:</label>
      <textarea class="form-control" placeholder="Enter comment" rows="5" id="comment" name="comment"></textarea>
    </div>
    <div class="form-group">
      <label for="name">link:</label>
      <input type="name" class="form-control" placeholder="Enter link" id="link" name="link">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>
