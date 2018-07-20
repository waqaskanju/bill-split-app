<?php
session_start();
if(!isset($_SESSION['mysession']))
{header('location:index.php');}
?>
<?php require_once('template/head.php');?>
</style>
</head>
<body>
<div class="container-fluid">
     <?php require_once('template/nav.php');?>
<?php
if(isset($_GET['id'])){
$id=$_GET['id'];
 $q="SELECT * FROM bills WHERE no='$id'";
$exe=mysqli_query($con,$q);
$exer=mysqli_fetch_assoc($exe);

 $id=$exer['no'];
 $eventdate=$exer['eventdate'];
 $_create=$exer['create_at'];
 $itemname=$exer['item_name'];
 $paid_person=$exer['paid_person'];
 $paid_amount=$exer['paid_amount'];
 $wsk=$exer['wsk_share'];
 $ijz=$exer['ijz_share'];
 $imd=$exer['imd_share'];
 $brk=$exer['brk_share'];
 $nwb=$exer['nwb_share'];
 $isn=$exer['isn_share'];
 $jal=$exer['jal_share'];
 $kas=$exer['kas_share'];
 $nsr=$exer['nsr_share'];
 $isr=$exer['isr_share'];
 $yas=$exer['yas_share'];

 $nwbc=$exer['nwbc_share'];
 $ans=$exer['ans_share'];

 $mhb=$exer['mhb_share'];
  $mus=$exer['mus_share'];
  $isq=$exer['isq_share'];
	$asf=$exer['asf_share'];
	$irf=$exer['irf_share'];
	$nae=$exer['nae_share'];
  $wzr=$exer['wzr_share'];
   $zkr=$exer['zkr_share'];

//c1 add the variable for new person share.



 $status=$exer['status'];



$d=date_difference($_create,$actor);
if($d>3){

$c="disabled";
$act="Not Allowed after three day";

}
else{

$c="";
$act="Update";
}


}
?>
<form name="billinst" onsubmit="return validate()" method="post" action="update.php">
    <div class="form-group row">
    <label for="selectitem" class="col-sm-2 form-conrol-label">Item Name:</label>
    <div class="col-sm-10">
   <select class="form-control" id="selectitem" <?php if($actor !='admin'){echo 'readonly';} ?> name="item" onChange="remove_border('selectitem')" >
      <option value="0"></option>

      <?php

      get_item($con,$itemname);
       ?>
    </select>

    </div>
 </div>

  <div class="form-group row">
    <label for="amount" class="col-sm-2 form-conrol-label">Paid Amount</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="amount" class="col-sm-10" name="amount" value="<?php echo $paid_amount; ?>" required>
    </div>
 </div>

  <div class="form-group row">
    <label for="selectperson" class="col-sm-2 form-conrol-label">Paid Person:</label>
    <div class="col-sm-10">
   <select class="form-control" name="paid_person" id="selectperson" onChange="remove_border('selectperson')">
      <option value='0'> </option>
      <option value="waqas" <?php if($paid_person=="waqas"){echo "selected";} ?> >Waqas</option>
      <option value="ijaz" <?php if($paid_person=="ijaz"){echo "selected";} ?> >Ijaz</option>
      <option value="imdad" <?php if($paid_person=="imdad"){echo "selected";} ?> >Imdad</option>
      <option value="barkat" <?php if($paid_person=="barkat"){echo "selected";} ?> >Barkat</option> 
      <option value="nawab" <?php if($paid_person=="nawab"){echo "selected";} ?> >Nawab</option>
    <option value="ihsan" <?php if($paid_person=="ihsan"){echo "selected";} ?> >Ihsan</option>
     <option value="jalil" <?php if($paid_person=="jalil"){echo "selected";} ?> >Jalil</option>
     <option value="kashif" <?php  if($paid_person=="kashif"){echo "selected";} ?> >Kashif</option>
     <option value="nasar" <?php  if($paid_person=="nasar"){echo "selected";} ?> >Nasar</option>
	 <option value="israr" <?php  if($paid_person=="israr"){echo "selected";} ?> >Israr</option>
	 	 <option value="yasir" <?php  if($paid_person=="yasir"){echo "selected";} ?> >Yasir</option>
	 	  <option value="nawabc" <?php  if($paid_person=="nawabc"){echo "selected";} ?> >Prince Nawab</option>
	 	   <option value="ansar" <?php  if($paid_person=="ansar"){echo "selected";} ?> >Ansar</option>
		     <option value="mehboob" <?php  if($paid_person=="mehboob"){echo "selected";} ?> >Mehboob</option>
			   <option value="mushtaq" <?php  if($paid_person=="mushtaq"){echo "selected";} ?> >Mushtaq</option>
			     <option value="ishaq" <?php  if($paid_person=="ishaq"){echo "selected";} ?> >Ishaq</option>
				 <option value="asif" <?php  if($paid_person=="asif"){echo "selected";} ?> >Asif</option>
				  <option value="irfan" <?php  if($paid_person=="irfan"){echo "selected";} ?> >Irfan</option>
				   <option value="naeem" <?php  if($paid_person=="naeem"){echo "selected";} ?> >Naeem</option>
           <option value="wazir" <?php  if($paid_person=="wazir"){echo "selected";} ?> >Wazir</option>
		   <option value="zakir" <?php  if($paid_person=="zakir"){echo "selected";} ?> >Zakir</option>
    </select>  
    </div>
 </div>

  <div class="form-group row">
    <label for="item" class="col-sm-2 form-conrol-label">Event Date:</label>
    <div class="col-sm-10">
    <input type="date" class="form-control" id="datePicker" <?php if($actor !='admin'){echo 'readonly';} ?>  value="<?php echo $eventdate ?>" class="col-sm-10" name="event_date"  required>
    </div>
 </div>

    <div class="form-group row">
        <label class="col-sm-2">Present Persons</label>

        <div class="col-sm-2">
            <div class="">
                <label>Waqas Share </label>  
                <input type="number" name="waqas" min="0" max="30" value="<?php echo $wsk ?>" required>
            </div>

        </div>

        <div class="col-sm-2">
            <div class="">
                <label>Ijaz Share </label>
                 <input type="number" name="ijaz" min="0" max="30" value="<?php echo $ijz ?>" required>
            </div>

        </div>


        <div class="col-sm-2">
            <div class="">
                <label>Imdad Share  </label> 
                 <input type="number" name="imdad" min="0" max="30" value="<?php echo $imd ?>" required>
            </div>

        </div>


        <div class="col-sm-2">
            <div class="" name="barkat">
                <label>Barkat Share</label>
                  <input type="number" name="barkat" min="0" max="30" value="<?php echo $brk ?>"required>
            </div>

        </div>
        <div class="col-sm-2">
        <div class="" name="nawab">
                <label>Nawab Share</label>
                  <input type="number" name="nawab" min="0" max="30" value="<?php echo $nwb ?>"required>
            </div>
        
        </div>
        
          <div class="col-sm-2">
        <div class="" name="ihsan">
                <label>Ihsan Share</label>
                  <input type="number" name="ihsan" min="0" max="30" value="<?php echo $isn ?>"required>
            </div>
        
        </div>
        
        
           <div class="col-sm-2">
        <div class="" name="jalil">
                <label>Jalil Share</label>
                  <input type="number" name="jalil" min="0" max="30" value="<?php echo $jal ?>"required>
            </div>
        
        </div>
        
        <div class="col-sm-2">
        <div class="" name="kashif">
                <label>Kashif Share</label>
                  <input type="number" name="kashif" min="0" max="30" value="<?php echo $kas ?>"required>
            </div>
        
        </div>
        
        
        <div class="col-sm-2">
        <div class="" name="nasar">
                <label>Nasar Share</label>
                  <input type="number" name="nasar" min="0" max="30" value="<?php echo $nsr ?>"required>
            </div>
        
        </div>
		
		<div class="col-sm-2">
        <div class="" name="israr">
                <label>israr Share</label>
                  <input type="number" name="israr" min="0" max="30" value="<?php echo $isr ?>"required>
            </div>
        
        </div>


        <div class="col-sm-2">
        <div class="" name="yasir">
                <label>Yasir Share</label>
                  <input type="number" name="yasir" min="0" max="30" value="<?php echo $yas ?>"required>
            </div>

        </div>


		<div class="col-sm-2">
        <div class="" name="nawabc">
                <label> Prince Nawab Share</label>
                  <input type="number" name="nawabc" min="0" max="30" value="<?php echo $nwbc?>"required>
            </div>

        </div>

        <div class="col-sm-2">
        <div class="" name="ansar">
                <label> Ansar</label>
                  <input type="number" name="ansar" min="0" max="30" value="<?php echo $ans?>"required>
            </div>

        </div>

        <div class="col-sm-2">
        <div class="" name="mehboob">
                <label> Mehboob</label>
                  <input type="number" name="mehboob" min="0" max="30" value="<?php echo $mhb?>"required>
            </div>

        </div>

         <div class="col-sm-2">
        <div class="" name="Mushtaq">
                <label> Mushtaq</label>
                  <input type="number" name="mushtaq" min="0" max="30" value="<?php echo $mus?>"required>
            </div>

        </div>

         <div class="col-sm-2">
        <div class="" name="Ishaq">
                <label> Ishaq</label>
                  <input type="number" name="ishaq" min="0" max="30" value="<?php echo $isq?>"required>
            </div>

        </div>

<div class="col-sm-2">
        <div class="" name="Asif">
                <label> Asif</label>
                  <input type="number" name="asif" min="0" max="30" value="<?php echo $asf?>"required>
            </div>

        </div>

        <div class="col-sm-2">
        <div class="" name="Irfan">
                <label> Irfan</label>
                  <input type="number" name="irfan" min="0" max="30" value="<?php echo $irf?>"required>
            </div>

        </div>
<div class="col-sm-2">
        <div class="" name="Naeem">
                <label> Naeem</label>
                  <input type="number" name="naeem" min="0" max="30" value="<?php echo $nae?>"required>
            </div>

        </div>

        <div class="col-sm-2">
        <div class="" name="Wazir">
                <label> Wazir</label>
                  <input type="number" name="wazir" min="0" max="30" value="<?php echo $wzr?>"required>
            </div>

        </div>
		
		 <div class="col-sm-2">
        <div class="" name="Zakir">
                <label> Zakir</label>
                  <input type="number" name="Zakir" min="0" max="30" value="<?php echo $zkr?>"required>
            </div>


        
    </div>
    <input type="hidden" name="no" value="<?php echo $id?>">
    <button type="submit" <?php echo $c;?> class=" btn btn-primary col-sm-2 col-sm-push-2"><?php echo $act; ?></button>

</form>

</div>
     <?php require_once('template/foot.php');

?>