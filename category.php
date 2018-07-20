<?php
session_start();
if(!isset($_SESSION['mysession']))
{ header('location:index.php');}

require_once('sandbox/functions.php');
require_once('template/head.php'); ?>
}
</style>
</head>
<body>
<div class="container-fluid">
<?php require_once('template/nav.php'); ?>

	<p> This Place will show how much is spend between a particular time. For all members </p>

<form method="post" action="#">
<div class="form-group row">
<label for="item" class="col-sm-3 form-conrol-label col-sm-push-1">Start Date: (YYYY-MM-DD)</label>
                                                                  <div class="col-sm-3">
<input type="date" class="form-control" id="item"  value="<?php echo date('Y-m-d'); ?>" name="start_date"  required />
</div>
<label for="item" class="col-sm-3 form-conrol-label col-sm-push-1">End Date: (YYYY-MM-DD)</label>
                                                                  <div class="col-sm-3">
<input type="date" class="form-control" id="item"  value="<?php echo date('Y-m-d'); ?>" name="end_date"  required />
</div>


  </div>

      <button type="submit" name="datedata"class=" btn btn-primary col-sm-2 col-sm-push-2">SHOW</button>
</form>

<br><br><br>

<?php
if(isset($_POST['datedata'])){
$s=$_POST{'start_date'};
$e=$_POST{'end_date'};
echo ' <table class="table table-hover table-responsive">
<tr><th> Item Name </th><th> Cost </th></tr>';
 price_per_cat($con,$s,$e);
echo'</table>';
}
?>
  </div>
<!--It will show sum of particular person share particular person in a specific period of time -->
<div class="container-fluid">

	

	<p> This palce will show how much is spend between a particular time for u only </p>

<form method="post" action="#">
<div class="form-group row">
<label for="item" class="col-sm-3 form-conrol-label col-sm-push-1">Start Date: (YYYY-MM-DD)</label>
                                                                  <div class="col-sm-3">
<input type="date" class="form-control" id="item"  value="<?php echo date('Y-m-d'); ?>" name="start_date"  required />
</div>
<label for="item" class="col-sm-3 form-conrol-label col-sm-push-1">End Date: (YYYY-MM-DD)</label>
                                                                  <div class="col-sm-3">
<input type="date" class="form-control" id="item"  value="<?php echo date('Y-m-d'); ?>" name="end_date"  required />
</div>

  </div>

      <button type="submit" name="datedatameonly"class=" btn btn-primary col-sm-2 col-sm-push-2">SHOW</button>
</form>

<br><br><br>

<?php
if(isset($_POST['datedatameonly'])){
$s=$_POST{'start_date'};
$e=$_POST{'end_date'};
echo ' <table class="table table-hover table-responsive">
<tr><th> Date </th><th> Item Name </th><th> Cost </th></tr>';
 price_per_cat_only_me($con,$s,$e,$shareholdser);
echo'</table>';
}
?>
  </div>