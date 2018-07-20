<!--This page is used to insert new item in database-->
<?php
session_start();

if(!isset($_SESSION['mysession']))
{
    header('location:../index.php');

}



require_once('template/head.php');?>
tr:first-child th{background-color:pink;}
</style>
</head>
<body>
<div class="container-fluid">



<?php require_once('template/nav.php'); ?>


<?php
if(isset($_POST['insertitem'])){
	
	 $item=strtolower($_POST['newitem']);
	$q="SELECT item_name from items WHERE item_name='$item' AND status=1";
			$exe=mysqli_query($con,$q)or die('error in select');
			$c=mysqli_num_rows($exe);
	if($c==0)
	{
		
	$qi="INSERT INTO items(item_name) VALUES('$item')";
	$s=mysqli_query($con,$qi) or die('error in inset');	
	if($s){
		
	echo 	'<h3 class="alert alert-info"> New item inserted</h3>';
		header('location:insform.php?item='.$item);
		}
	}
	
	}
	
?>

	<form method="post" action="#">
		<div class="col-md-2">
    		<label for="item" > Insert New Item Name 
            </label>
            </div>
        <div class="col-md-8">
    		  <input type="text" name="newitem" class="form-control" id="item">
    	</div>
    		
            <div class="col-md-2">
    		  <input type="submit" value="Save" name="insertitem" class="btn btn-primary ">
  		 </div>

</form>



</div>
</div>

<?php require_once('template/foot.php'); ?>
