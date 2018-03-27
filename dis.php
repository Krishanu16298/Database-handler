<?php
  require('included.php');
  $q = $_GET['q'];
  $gq = 'select * from users where Name = "'.$q.'"';
  $r = mysqli_query($conn, $gq);
  $res = mysqli_fetch_assoc($r);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <meta charset="utf-8">
    <title>Display</title>
  </head>
  <body style="margin:30px;">
    <div class="card">
      <h1 class="card-content"><?php echo $res['Name']; ?></h1>
      <p class="card-content">
        <span style="font-weight:bold">Email ID : </span>
        <?php echo $res['Email_Id']; ?>
      </p>
    </div>
  </body>
</html>
