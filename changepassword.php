<?php
session_start();

if(!isset($_SESSION['mysession']))
{
    header('location:index.php');

}

?>

<?php require_once('template/head.php');?>
</style>
</head>
<body>
<div class="container-fluid">

<?php require_once('template/nav.php');
if($_SERVER['REQUEST_METHOD']=="POST"){

$old=$_POST{'oldpass'};
$old=md5($old);
$new=$_POST{'newpass'};
$new=md5($new);
$retry=$_POST{'retrypass'};
$q="SELECT * FROM user where username='$actor' AND password='$old'";
$srq=mysqli_query($con,$q);
$sr=mysqli_num_rows($srq);
if($sr==1)
    {

     $uq="UPDATE user set password='$new' WHERE username='$actor'" ;
    $chp=mysqli_query($con,$uq)or die('error');
    if($chp){

    echo "password changed";
    }
    else{

    echo "error";

    }

    }
    else{

    echo 'error';

    }



}
?>
<script>
function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}

</script>

<div class="row">
<div class="col-md-6  col-md-push-3">
<form action="#" method="post">

<div class="form-group">
<label>Old Password </label>
<input type="password" class="form-control" name="oldpass">
     </div>


     <div class="form-group">
     <label>New Password </label>
    <input type="password" id="pass1" class="form-control" name="newpass">
</div>

<div class="form-group">
     <label>Retry New Password </label>
      <input type="password" id="pass2" class="form-control" name="retrypass" onkeyup="checkPass(); return false;">
   <span id="confirmMessage" class="confirmMessage"></span>
    </div>


        <input type="submit" value="Change Password" class="btn btn-primary">

</form>
</div>
</div>

</div>



   <?php require_once('template/foot.php');?>