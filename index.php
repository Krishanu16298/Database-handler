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
  </head>
  <body>
    <div class="container">
      <h1>Manage Database</h1>
      <div>
        <a class='dropdown-button btn blue' href='#' data-activates='dropdown1'>Select <i class="material-icons right">arrow_drop_down</i></a>
        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="edit.php?q=view">View</a></li>
          <li><a href="edit.php?q=insert">Insert</a></li>
          <li><a href="edit.php?q=delete">Delete</a></li>
        </ul>
      </div>
    </div>
    <!-- javaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script type="text/javascript">
    </script>
  </body>
</html>
