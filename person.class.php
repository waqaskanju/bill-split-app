<!--This is Bill Page--><?phpsession_start();if(!isset($_SESSION['mysession'])){    header('location:index.php');}require_once('template/head.php');?></style></head><body><div class="container-fluid"><?php require_once('template/nav.php'); ?><h1> <a href="http://flatbill.atwebpages.com/"> For Old Record Plz Visit </a> </h1><?php/** * Created by PhpStorm. * User: WAQAR * Date: 3/6/2016 * Time: 2:25 AM */require_once('class/Person.php'); $e=$sh->execute_query($con);// THe variable are the first and last alphabet of the person name.$ws_share=0.0;$ws_all=0.0;$iz_share=0.0;$iz_all=0.0;$id_share=0.0;$id_all=0.0;$bt_share=0.0;$bt_all=0.0;$nb_share=0.0;$nb_all=0.0;$in_share=0.0;$in_all=0.0;$jl_share=0.0;$jl_all=0.0;$kf_share=0.0;$kf_all=0.0;$nr_share=0.0;$nr_all=0.0;//change one T8$ir_share=0.0;$ir_all=0.0;$yr_share=0.0;$yr_all=0.0;$nbc_share=0.0;$nbc_all=0.0;$ar_share=0.0;$ar_all=0.0;$mb_share=0.0;$mb_all=0.0;$ms_share=0.0;$ms_all=0.0;$iq_share=0.0;$iq_all=0.0;$af_share=0.0;$af_all=0.0;$if_share=0.0;$if_all=0.0;$na_share=0.0;$na_all=0.0;$wz_share=0.0;$wz_all=0.0;$zr_share=0.0;$zr_all=0.0;//change two T9while($ans=mysqli_fetch_assoc($e)){     $amount=$ans['paid_amount'];     $wsk_share=$ans['wsk_share']."<br>";     $ijz_share=$ans['ijz_share']."<br>";     $imd_share=$ans['imd_share']."<br>";     $brk_share=$ans['brk_share']."<br>";	 $nwb_share=$ans['nwb_share']."<br>";	$isn_share=$ans['isn_share']."<br>";	$jal_share=$ans['jal_share']."<br>";	$kas_share=$ans['kas_share']."<br>";	$nsr_share=$ans['nsr_share']."<br>";	$isr_share=$ans['isr_share']."<br>";	$yas_share=$ans['yas_share']."<br>";	$nwbc_share=$ans['nwbc_share']."<br>";	$ans_share=$ans['ans_share']."<br>";	$mhb_share=$ans['mhb_share']."<br>";	$mus_share=$ans['mus_share']."<br>";	$isq_share=$ans['isq_share']."<br>";    $asf_share=$ans['asf_share']."<br>";    $irf_share=$ans['irf_share']."<br>";    $nae_share=$ans['nae_share']."<br>";       $wzr_share=$ans['wzr_share']."<br>";	          $zkr_share=$ans['zkr_share']."<br>";    //for calution of one share i neeed the sum of all shares;	//change threee T10   $ts=$sh->total_share($wsk_share,$ijz_share,$imd_share,$brk_share,$nwb_share,$isn_share,$jal_share,$kas_share,$nsr_share,$isr_share,$yas_share,$nwbc_share,$ans_share,$mhb_share,$mus_share,$isq_share,$asf_share,$irf_share,$nae_share,$wzr_share,$wzr_share,$zkr_share);    $one_share=$sh->one_share_price($amount,$ts);    //***********************************************************************************************    $ws_share=$sh->calculate_share($wsk_share,$one_share);    $ws_all=$ws_all+$ws_share;    //End of Wsk Calculation.   //************************************************************************************************    //Ijaz Khan Share Calculation    $iz_share=$sh->calculate_share($ijz_share,$one_share);    $iz_all=$iz_all+$iz_share;    //End of Ijaz Khan Share Calculation.    //**********************************************************************************************    //Imdad Ahmad Mian Share Calculation    $id_share = $sh->calculate_share($imd_share, $one_share);    $id_all=$id_all+$id_share;    //End of Imdad Ahmad Share Calculation.    //**********************************************************************************************    //Barkatullah  Share Calculation    $bt_share=$sh->calculate_share($brk_share,$one_share);    $bt_all=$bt_all+$bt_share;    //End of Barkatullah Share Calculation.    //**********************************************************************************************    //Ihsan Ali Share caluction	$in_share=$sh->calculate_share($isn_share,$one_share);	$in_all=$in_all+$in_share;	//ENd of Ihsan Share    //**********************************************************************************************    //Nawabshah  Share Calculation    $nb_share=$sh->calculate_share($nwb_share,$one_share);    $nb_all=$nb_all+$nb_share;    //End of Nawabshah Share Calculation.    //**********************************************************************************************		//Jalil  Share Calculation    $jl_share=$sh->calculate_share($jal_share,$one_share);    $jl_all=$jl_all+$jl_share;    //End of Jalil Share Calculation.    //**********************************************************************************************		//Kashif  Share Calculation    $kf_share=$sh->calculate_share($kas_share,$one_share);    $kf_all=$kf_all+$kf_share;    //End of Kashif Share Calculation.    //**********************************************************************************************	//Nasar  Share Calculation    $nr_share=$sh->calculate_share($nsr_share,$one_share);    $nr_all=$nr_all+$nr_share;    //End of Nasar Share Calculation.    //**********************************************************************************************	//Israr  Share Calculation    //change 4 T11	$ir_share=$sh->calculate_share($isr_share,$one_share);    $ir_all=$ir_all+$ir_share;    //End of Israr Share Calculation.    //**********************************************************************************************		//Yasir  Share Calculation    //change 4 T11	$yr_share=$sh->calculate_share($yas_share,$one_share);    $yr_all=$yr_all+$yr_share;    //End of Israr Share Calculation.		  //**********************************************************************************************    //Chota Nawab  Share Calculation    $nbc_share=$sh->calculate_share($nwbc_share,$one_share);    $nbc_all=$nbc_all+$nbc_share;    //End of Chota Nawab Share Calculation. //**********************************************************************************************    //Ansar Sarwar Share Calculation    $ar_share=$sh->calculate_share($ans_share,$one_share);    $ar_all=$ar_all+$ar_share;    //End of Anssr Sarwar Calculation.    //********************************************************************************************** //Mehboob Share Calculation    $mb_share=$sh->calculate_share($mhb_share,$one_share);    $mb_all=$mb_all+$mb_share;    //End of Mehbbob Share Calculation.    //********************************************************************************************** //Mushtaq Share Calculation    $ms_share=$sh->calculate_share($mus_share,$one_share);    $ms_all=$ms_all+$ms_share;    //End of Mushtaq Share Calculation.    //********************************************************************************************** //Ishaq Share Calculation    $iq_share=$sh->calculate_share($isq_share,$one_share);    $iq_all=$iq_all+$iq_share;    //End of Chota Nawab Share Calculation.    //**********************************************************************************************//Asif Share Calculation    $af_share=$sh->calculate_share($asf_share,$one_share);    $af_all=$af_all+$af_share;    //End of asif Share Calculation.    //**********************************************************************************************//Irfan Share Calculation    $if_share=$sh->calculate_share($irf_share,$one_share);    $if_all=$if_all+$if_share;    //End of asif Share Calculation.    //**********************************************************************************************//Naeem Share Calculation    $na_share=$sh->calculate_share($nae_share,$one_share);    $na_all=$na_all+$na_share;    //End of asif Share Calculation.    //**********************************************************************************************    //**********************************************************************************************//Naeem Share Calculation    $wz_share=$sh->calculate_share($wzr_share,$one_share);    $wz_all=$wz_all+$wz_share;    //End of asif Share Calculation.    //**********************************************************************************************//Zakir Share Calculation    $zr_share=$sh->calculate_share($zkr_share,$one_share);    $zr_all=$zr_all+$zr_share;    //End of asif Share Calculation.    //**********************************************************************************************}$ws_credit=$sh->calculate_credit($con,'waqas');$iz_credit=$sh->calculate_credit($con,'ijaz');$id_credit=$sh->calculate_credit($con,'imdad');$bt_credit=$sh->calculate_credit($con,'barkat');$nb_credit=$sh->calculate_credit($con,'nawab');$in_credit=$sh->calculate_credit($con,'ihsan');$jl_credit=$sh->calculate_credit($con,'jalil');$kf_credit=$sh->calculate_credit($con,'kashif');$nr_credit=$sh->calculate_credit($con,'nasar');//change 4 T12$ir_credit=$sh->calculate_credit($con,'israr');$yr_credit=$sh->calculate_credit($con,'yasir');$nbc_credit=$sh->calculate_credit($con,'nawabc');$ar_credit=$sh->calculate_credit($con,'ansar');$mb_credit=$sh->calculate_credit($con,'mehboob');$ms_credit=$sh->calculate_credit($con,'mushtaq');$iq_credit=$sh->calculate_credit($con,'ishaq');$af_credit=$sh->calculate_credit($con,'asif');$if_credit=$sh->calculate_credit($con,'irfan');$na_credit=$sh->calculate_credit($con,'naeem');$wz_credit=$sh->calculate_credit($con,'wazir');$zr_credit=$sh->calculate_credit($con,'zakir');	/* THere is one ruppy difference on each person */$ws_bill=ceil($ws_all-$ws_credit);$iz_bill=ceil($iz_all-$iz_credit);$id_bill=ceil($id_all-$id_credit);$bt_bill=ceil($bt_all-$bt_credit);$nb_bill=ceil($nb_all-$nb_credit);$in_bill=ceil($in_all-$in_credit);$jl_bill=ceil($jl_all-$jl_credit);$kf_bill=ceil($kf_all-$kf_credit);$nr_bill=ceil($nr_all-$nr_credit);//change 5 T13$ir_bill=ceil($ir_all-$ir_credit);$yr_bill=ceil($yr_all-$yr_credit);$nbc_bill=ceil($nbc_all-$nbc_credit);$ar_bill=ceil($ar_all-$ar_credit);$mb_bill=ceil($mb_all-$mb_credit);$ms_bill=ceil($ms_all-$ms_credit);$iq_bill=ceil($iq_all-$iq_credit);$af_bill=ceil($af_all-$af_credit);	$if_bill=ceil($if_all-$if_credit);$na_bill=ceil($na_all-$na_credit);$wz_bill=ceil($wz_all-$wz_credit);$zr_bill=ceil($zr_all-$zr_credit);			$allcredit=$ws_credit+$iz_credit+$id_credit+$bt_credit+$nb_credit+$in_credit+$jl_credit+$kf_credit+$nr_credit+$ir_credit+$yr_credit+$nbc_credit+$ar_credit+$mb_credit+$ms_credit+$iq_credit+$af_credit+$if_credit+$na_credit+$wz_credit+$zr_credit;//change 6 T14echo "<table class='table table-bordered table-hover'>        <tr><th>Name</th>   <th>Bill</th>  <th>Credit</th>   <th>Total</th></tr>        <tr><td>Waqas </td>  <td>$ws_all</td>  <td>$ws_credit</td>    <td>$ws_bill</td></tr>        <tr><td>Ijaz </td>   <td>$iz_all</td>  <td>$iz_credit</td>    <td>$iz_bill</td></tr>     <!--   <tr>//<td>Imdad </td>  <td>//$id_all</td>  <td> //$id_credit</td>    <td> //$id_bill</td></tr> -->        <tr><td>Barkat</td> <td>$bt_all</td>  <td>$bt_credit</td>    <td>$bt_bill</td></tr>	<!-- 	 <tr><td>//Nawab</td> <td>//$nb_all</td>  <td>//$nb_credit</td>    <td>//$nb_bill</td></tr> -->		<tr><td>Ihsan</td> <td>$in_all</td>  <td>$in_credit</td>    <td>$in_bill</td></tr>  <!--   		<tr><td>Jalil</td> <td>//$jl_all</td>  <td>//$jl_credit</td>    <td>//$jl_bill</td></tr> -->		<tr><td>Kashif</td> <td>$kf_all</td>  <td>$kf_credit</td>    <td>$kf_bill</td></tr>  <!--   		<tr><td>Nasar</td> <td>//$nr_all</td>  <td>//$nr_credit</td>    <td>//$nr_bill</td></tr> -->  <!--   		<tr><td>Israr</td> <td>//$ir_all</td>  <td>//$ir_credit</td>    <td>//$ir_bill</td></tr> -->  <!--   		<tr><td>Yasir</td> <td>//$yr_all</td>  <td>//$yr_credit</td>    <td>//$yr_bill</td></tr>  -->		<tr><td>Prince Nawab</td> <td>$nbc_all</td>  <td>$nbc_credit</td>    <td>$nbc_bill</td></tr>		<tr><td>Ansar</td> <td>$ar_all</td>  <td>$ar_credit</td>    <td>$ar_bill</td></tr>		<tr><td>Mehboob</td> <td>$mb_all</td>  <td>$mb_credit</td>    <td>$mb_bill</td></tr>		<tr><td>Mushtaq</td> <td>$ms_all</td>  <td>$ms_credit</td>    <td>$ms_bill</td></tr>		<tr><td>Ishaq</td> <td>$iq_all</td>  <td>$iq_credit</td>    <td>$iq_bill</td></tr>		<tr><td>Asif</td> <td>$af_all</td>  <td>$af_credit</td>    <td>$af_bill</td></tr>			<tr><td>Irfan</td> <td>$if_all</td>  <td>$if_credit</td>    <td>$if_bill</td></tr>				<tr><td>Naeem</td> <td>$na_all</td>  <td>$na_credit</td>    <td>$na_bill</td></tr>                    <tr><td>Wazir</td> <td>$wz_all</td>  <td>$wz_credit</td>    <td>$wz_bill</td></tr>					 <tr><td>Zakir</td> <td>$zr_all</td>  <td>$zr_credit</td>    <td>$zr_bill</td></tr>		        <tr><td colspan='3'><b>Total Spend </b></td> <td><b> $allcredit </b> </td></tr>    </table>        ";//$sh->con_destroy($con);?> <dt class="text-danger">Bill<dt><dd>Money spend on you. e-g eaten meal.</dd> <dt class="text-primary">Credit<dt><dd>Money which you spend. e-g payment to shopkeeper.</dd> <dt class="text-info">Total<dt><dd> Bill minus credit. <br>Smaller the value, better your position. <br>Negative value means other will pay you.</dd>	<dt>Note</dt><dd class="text-danger">There is a ceil function applied to the Total Column. This means 5.1 will evaluated to 6.<br>I mean to say. There is Rs 1 difference in the Total of each person. If there is  decimal value Involve in Total Column. </dd>