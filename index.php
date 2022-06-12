<?php
  session_start();
  require_once('sandbox/functions.php');
  require_once('class/Connection.php');

  if(isset($_POST['submitted'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $pass = md5($pass);
    
    $q="SELECT username,password from user WHERE username='$user' AND password='$pass'";
    $ans=mysqli_query($con, $q);

    if(mysqli_num_rows($ans) == 1) {
        $_SESSION['mysession'] = $user;
        header("location:spend.php");
    }else{
        echo "Wrong Username or Password";
    }
  }
?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  
  <div class="container">
  <h3>Welcome to Bill Split Application</h3>
    <form class="form-signin" method="post" action="#">
      <h2 class="form-signin-heading">Please sign in</h2>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="submitted">
    </form>
  </div> <!-- /container -->

    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">  
  </body>
</html>