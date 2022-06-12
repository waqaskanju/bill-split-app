<?php
date_default_timezone_set('Asia/Karachi');
function get_item($con,$select=""){
	
	 $q="SELECT item_name from items order by item_name ASC";
	$exe=mysqli_query($con,$q);
	while($exer=mysqli_fetch_assoc($exe)){
	echo	$item=$exer['item_name'];
		$s="";
		if($select==$item)
		{$s="Selected";}
echo "<option $s value='$item'>$item</option>";
		}
	}

function log_insertion($con,$n,$q){
	$name=$n;
	$query=$q;
	echo $query="INSERT INTO logs(`name`,`query`) VALUES('$n','$q')" or die('error in log');
	$rl=mysqli_query($con,$query);
	if($rl)
	{echo "log inserted";}
	else{"log failed";}
}

function sdestroy()

{

//	session_destroy();

}



function price_per_cat($con,$start,$end){

	$qitem="SELECT DISTINCT item_name FROM bills WHERE status=1 AND eventdate BETWEEN '$start' AND '$end' ORDER BY item_name ASC";

	$exe=mysqli_query($con,$qitem);

	while($exer=mysqli_fetch_assoc($exe)){



	$item=$exer['item_name'];

	$qcost="SELECT sum(paid_amount) as item FROM bills WHERE item_name='$item' AND eventdate BETWEEN '$start' AND '$end'";



	$qexe=mysqli_query($con,$qcost);

		$qexer=mysqli_fetch_assoc($qexe);

		$tcost=$qexer['item'];

	echo 	"<tr><td> $item  </td><td> $tcost </td></tr>";

		

	

		

	}

	$qtotal="SELECT SUM(paid_amount)as total FROM bills WHERE status=1 AND eventdate BETWEEN '$start' AND '$end'";

		$qtexe=mysqli_query($con,$qtotal);

		$qtotalexe=mysqli_fetch_assoc($qtexe);

		$tcostall=$qtotalexe['total'];

	echo 	"<tr><td> Total Cost  </td><td> $tcostall </td></tr>";

}



/*

This function will show how much a particular person spend in particualr time.



*/

function price_per_cat_only_me($con,$start,$end,$shareholder){

	

	require_once('class/Person.php'); 

	$total=0;

	$price=0;

	$q="SELECT * FROM bills WHERE status=1 AND $shareholder>0 AND eventdate BETWEEN '$start' AND '$end'";

$qexe=mysqli_query($con,$q);		

while($exer=mysqli_fetch_assoc($qexe)){	



$item_name=$exer['item_name'];

  $amount=$exer['paid_amount'];

  $wsk_share=$exer['wsk_share']."<br>";

  $ijz_share=$exer['ijz_share']."<br>";

  $imd_share=$exer['imd_share']."<br>";

  $brk_share=$exer['brk_share']."<br>";

	$nwb_share=$exer['nwb_share']."<br>";

	$isn_share=$exer['isn_share']."<br>";

	$jal_share=$exer['jal_share']."<br>";

	$kas_share=$exer['kas_share']."<br>";

	$nsr_share=$exer['nsr_share']."<br>";

	// change three T5

	$isr_share=$exer['isr_share']."<br>";

	$yas_share=$exer['yas_share']."<br>";

	$nwbc_share=$exer['nwbc_share']."<br>";

	$ans_share=$exer['ans_share']."<br>";

	$mhb_share=$exer['mhb_share']."<br>";

	$mus_share=$exer['mus_share']."<br>";

	$isq_share=$exer['isq_share']."<br>";
	
	$asf_share=$exer['asf_share']."<br>";
	$irf_share=$exer['irf_share']."<br>";
	$nae_share=$exer['nae_share']."<br>";
	$wzr_share=$exer['wzr_share']."<br>";
	$zkr_share=$exer['zkr_share']."<br>";


    //for calution of one share i neeed the sum of all shares;

	

	//change four T6

     $ts=$sh->total_share($wsk_share,$ijz_share,$imd_share,$brk_share,$nwb_share,$isn_share,$jal_share,$kas_share,$nsr_share,$isr_share,$yas_share,$nwbc_share,$ans_share,$mhb_share,$mus_share,$isq_share,$asf_share,$irf_share,$nae_share,$wzr_share,$zkr_share);

    $one_share=$sh->one_share_price($amount,$ts);

		 $price=$exer[$shareholder]*$one_share;

 echo"<tr><td> $exer[eventdate] </td><td> $item_name </td> <td> $price</td></tr>";

	

	$total=$total+$price;

}

echo	"<tr class='bg-primary'><td>Grand Total</td>  <td> $total</td><tr>";

	

	

}


function date_difference($eventdate,$actor){

 if($actor=="admin"){

	 return 0;

 }

	else {

		$now = time(); // or your date as well

		$your_date = strtotime($eventdate);

		$datediff = $now - $your_date;

		$val = floor($datediff / (60 * 60 * 24));

		return $val;

	}

}





function find_shareholder($actor){

	

	if($actor=="waqaskanju"){

		

		$shareholder="wsk_share";

		}

	elseif($actor=="barkat1245"){

		

		$shareholder="brk_share";

		}

		

		elseif($actor=="iammswt"){

		

		$shareholder="imd_share";

		}

		

		elseif($actor=="ihsanse"){

		

		$shareholder="isn_share";

		}

		

		elseif($actor=="nawabse"){

		

		$shareholder="nwb_share";

		}

		

		elseif($actor=="ijaz013"){

		

		$shareholder="ijz_share";

		}

		

		elseif($actor=="kashif"){

		

		$shareholder="kas_share";

		}

		

		elseif($actor=="jalil"){

		

		$shareholder="jal_share";

		}

		

		elseif($actor=="nasar"){

		

		$shareholder="nsr_share";

		}

		

		elseif($actor=="israr"){



		$shareholder="isr_share";

		}



	elseif($actor=="yasir"){



		$shareholder="yas_share";

	}

	elseif($actor=="nawabc")

{

		$shareholder="nwbc_share";
}
	else if($actor=="wazir")

{
	$shareholder="wzr_share";
}
	else if($actor=="zakir")

{
	$shareholder="zkr_share";
}




		elseif($actor=="admin"){



			$shareholder="wsk_share";

		}





	elseif($actor=="ansar"){



		$shareholder="ans_share";

	}


	elseif($actor=="mehboob"){


		$shareholder="mhb_share";
	}
	elseif($actor=="mushtaq"){


		$shareholder="mus_share";
	}
	elseif($actor=="ishaq"){


		$shareholder="isq_share";
	}

	elseif($actor=="asif"){


		$shareholder="asf_share";
	}

	elseif($actor=="irfan"){


		$shareholder="irf_share";
	}
	elseif($actor=="naeem"){


		$shareholder="nae_share";
	}

		return $shareholder;

	



	}

function check_item_name($con,$item){

	$myitem= strtolower($item);

	

	$q="Select item_name FROM items where item_name='$item'";

	$exeq=mysqli_query($con,$q);

	$numrow=mysqli_num_rows($exeq);

	if($numrow==0)

	{

	$qi="INSERT INTO items(item_name) VALUES('$myitem')";

	$s=mysqli_query($con,$qi) or die('error in inset');	

	echo "new item added";

	}



	}

///Presently usedn in settig page

function select_one_col($con,$table_name,$col_name,$user_name){



	$q="SELECT $col_name from $table_name where username='$user_name'";

	$qexe=mysqli_query($con,$q);

	$qres=mysqli_fetch_assoc($qexe);



return	$qres[$col_name];



}





/// used in setting and insform page.

function select_eleven_col($con,$table_name,$user_name){



	$q="SELECT * FROM $table_name WHERE username='$user_name'";

	$qs=mysqli_query($con,$q);



	$qsr=mysqli_fetch_assoc($qs);



	return $qsr;

}







function find_paid_person($actor){



	if($actor=="waqaskanju"){



		$pperson="waqas";

	}

	elseif($actor=="barkat1245"){



		$pperson="barkat";

	}



	elseif($actor=="iammswt"){



		$pperson="imdad";

	}



	elseif($actor=="ihsanse"){



		$pperson="ihsan";

	}



	elseif($actor=="nawabse"){



		$pperson="nawab";

	}



	elseif($actor=="ijaz013"){



		$pperson="ijaz";

	}



	elseif($actor=="kashif"){



		$pperson="kashif";

	}



	elseif($actor=="jalil"){



		$pperson="jalil";

	}



	elseif($actor=="nasar"){



		$pperson="nasar";

	}



	elseif($actor=="israr"){



		$pperson="israr";

	}



	elseif($actor=="yasir"){



		$pperson="yasir";

	}





	elseif($actor=="admin"){



		$pperson="admin";

	}



	elseif($actor=="nawabc"){



		$pperson="nawabc";

	}





	elseif($actor=="ansar"){



		$pperson="ansar";

	}

	elseif($actor=="mehboob"){



		$pperson="mehboob";

	}
	elseif($actor=="mushtaq"){



		$pperson="mushtaq";

	}
	elseif($actor=="ishaq"){



		$pperson="ishaq";

	}
	elseif($actor=="asif"){



		$pperson="asif";

	}
	elseif($actor=="irfan"){



		$pperson="irfan";

	}
	elseif($actor=="naeem"){



		$pperson="naeem";

	}
	elseif($actor=="wazir"){



		$pperson="wazir";

	}
	elseif($actor=="zakir"){



		$pperson="zakir";

	}


	return $pperson;

}
?>