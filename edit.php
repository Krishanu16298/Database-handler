<?php
  require('included.php');
  if(!isset($_GET)){
    echo 'Could not complete request';
  }
  if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['state'])){

      $name = $_POST['name'];
      $email = $_POST['email'];
      $state = $_POST['state'];
      $query = 'insert into users values(DEFAULT,"'.$name.'","'.$email.'","'.$state.'")';
      mysqli_query($conn, $query);
  }
  if(isset($_POST['dname'])){

      $name = $_POST['dname'];
      $query = 'delete from users where Name = "'.$name.'"';
      mysqli_query($conn, $query);
  }
  if(isset($_POST['demail'])){

      $name = $_POST['demail'];
      $query = 'delete from users where Email_Id = "'.$name.'"';
      mysqli_query($conn, $query);
  }
  if(isset($_POST['dstate'])){

      $name = $_POST['dstate'];
      $query = 'delete from users where State = "'.$name.'"';
      mysqli_query($conn, $query);
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>My Database</title>
    <style>
      h1{
        color:#0066ff;
      }
    </style>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s10"><h1>Manage Database</h1></div>
        <div class="col s2"><a class="btn blue waves-effect waves-light" style="margin-top:50px;" href="index.php">Home</a></div>
      </div>
      <div>
        <?php if(isset($_GET)):?>
          <?php if($_GET['q'] == 'insert'):?>
            <form action="edit.php?q=insert" method="post">
              <div class="input-field">
                <label>Name</label>
                <input type="text" name="name">
              </div>
              <div class="input-field">
                <label>Email ID</label>
                <input type="email" name="email" class="validate">
              </div>
              <div class="input-field">
                <label>State</label>
                <input type="text" name="state">
              </div>
              <div class="input-field">
                <button type="submit" name="sub" class="btn" onclick="subForm()">Submit</button>
              </div>
            </form>
          <?php endif;?>
          <?php if($_GET['q'] == 'view'):?>
            <?php
              $gquery = 'select * from users';
              $res = mysqli_query($conn, $gquery);
              $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
            ?>
            <table>
              <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email Id</th>
                <th>State</th>
              </thead>
              <?php foreach($result as $key): ?>
              <tbody>
                <tr>
                  <td><?php echo $key['Id']; ?></td>
                  <td><a href="dis.php?q=<?php echo $key['Name']; ?>"><?php echo $key['Name']; ?></a></td>
                  <td><?php echo $key['Email_Id']; ?></td>
                  <td><?php echo $key['State']; ?></td>
                </tr>
              </tbody>
            <?php endforeach; ?>
            </table>
          <?php endif;?>
          <?php if($_GET['q'] == 'delete'):?>
            <a class='dropdown-button' href='#' data-activates='dropdown1'>Search by <i class="fas fa-caret-down"></i></a>
            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>
              <li><a href="edit.php?q=byName">Name</a></li>
              <li><a href="edit.php?q=byEmail">Email</a></li>
              <li><a href="edit.php?q=byState">Id</a></li>
            </ul>
          <?php endif;?>
          <?php if($_GET['q'] == 'byName'):?>
            <form action="edit.php?q=byName" method="post">
              <div class="input-field">
                <label>Enter the name .. </label>
                <input type="text" name="dname">
              </div>
              <button type="submit" class="btn red">Delete</button>
            </form>
          <?php endif;?>
          <?php if($_GET['q'] == 'byEmail'):?>
            <form action="edit.php?q=byEmail" method="post">
              <div class="input-field">
                <label>Enter the email .. </label>
                <input type="text" name="demail">
              </div>
              <button type="submit" class="btn red">Delete</button>
            </form>
          <?php endif;?>
          <?php if($_GET['q'] == 'byState'):?>
            <form action="edit.php?q=byState" method="post">
              <div class="input-field">
                <label>Enter the state .. </label>
                <input type="text" name="dstate">
              </div>
              <button type="submit" class="btn red">Delete</button>
            </form>
          <?php endif;?>
        <?php endif;?>
      </div>
    </div>
    <!-- javaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();
});
    </script>
  </body>
</html>
