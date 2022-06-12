<?php
session_start();
if (!isset($_SESSION['mysession'])) {
  header('location:index.php');
}
?>
<?php require_once('template/head.php'); ?>
</style>
</head>

<body>
  <div class="container-fluid">

    <?php require_once('template/nav.php'); ?>

    <script>
      function validate() {

        var item = document.getElementById("selectitem").value;

        if (item == '0') {

          document.getElementById("selectitem").style.borderColor = "red";

          return false;

        }



        var person = document.getElementById("selectperson").value;

        if (person == '0') {

          document.getElementById("selectperson").style.borderColor = "red";

          return false;

        }



        return true;



      }

      function remove_border(id) {

        document.getElementById(id).style.borderColor = '';

      }
    </script>



    <?php



    if (($_SERVER['REQUEST_METHOD'] == "POST")) {



      if ($actor == "barkat1245") {

        $item_name = $_POST['item'];

        check_item_name($con, $item_name);
      } else {

        $item_name = $_POST['item'];
      }



      $amount = $_POST['amount'];

      $paid_person = $_POST['paid_person'];



      $event_date = $_POST['event_date'];



      $waqas_share = $_POST['waqas'];

      $ijaz_share = $_POST['ijaz'];

      $imdad_share = $_POST['imdad'] = 0;

      $barkat_share = $_POST['barkat'];

      $nawab_share = $_POST['nawab'] = 0;

      $ihsan_share = $_POST['ihsan'];

      $jalil_share = $_POST['jalil'] = 0;

      $kashif_share = $_POST['kashif'];

      $nasar_share = $_POST['nasar'] = 0;

      $israr_share = $_POST['israr'] = 0;

      $yasir_share = $_POST['yasir'] = 0;



      $nawabc_share = $_POST['nawabc'];

      $ansar_share = $_POST['ansar'];
      $mehboob_share = $_POST['mehboob'];
      $mushtaq_share = $_POST['mushtaq'] = 0;
      $ishaq_share = $_POST['ishaq'] = 0;
      $asif_share = $_POST['asif'] = 0;
      $irfan_share = $_POST['irfan'];
      $naeem_share = $_POST['naeem'] = 0;
      $wazir_share = $_POST['wazir'];
      $zakir_share = $_POST['zakir'] = 0;

      //start of changes for only credit with out share.



      //echo "value of all shares=".$waqas_share+$ijaz_share+$imdad_share+$barkat_share+$nasar_share+$ihsan_share+$jalil_share+$kashif_share+$nasar_share+$israr_share;

      if (($waqas_share + $ijaz_share + $imdad_share + $barkat_share + $nawab_share + $ihsan_share + $jalil_share + $kashif_share + $nasar_share + $israr_share + $yasir_share + $nawabc_share + $ansar_share + $mehboob_share + $mushtaq_share + $ishaq_share + $asif_share + $irfan_share + $naeem_share + $wazir_share + $zakir_share) == 0) {


        echo '<h2 class="bg-warning text-center"> Now Allowed. Plz mention the share. </h2>';

        exit();
      }

      // end of changes for only credit with out share.



      echo $q = "INSERT INTO bills(eventdate,item_name,paid_person,paid_amount,wsk_share,imd_share,brk_share,ijz_share,nwb_share,isn_share,jal_share,kas_share,nsr_share,isr_share,yas_share,nwbc_share,ans_share,mhb_share,mus_share,isq_share,asf_share,irf_share ,nae_share,wzr_share,zkr_share,actor) VALUES('$event_date','$item_name','$paid_person','$amount','$waqas_share','$imdad_share','$barkat_share','$ijaz_share','$nawab_share','$ihsan_share','$jalil_share','$kashif_share','$nasar_share','$israr_share','$yasir_share','$nawabc_share','$ansar_share','$mehboob_share','$mushtaq_share','$ishaq_share','$asif_share','$irfan_share','$naeem_share','$wazir_share','$zakir_share','$actor')";
      $r = mysqli_query($con, $q) or mysqli_errno($con);



      if ($r) {

        echo '<h2 class="bg-success text-center"> Data Inserted </h2>';

        header("refresh:2;url=#");
      } else {

        if (mysqli_errno($con) == 1062) {

          echo '<h3><label class="danger"> Duplicate Entry Error! </label></h3>';
        } else {



          echo '<label class="danger"> Data Inserted Error </label>';
        } //end of else data inserted error

      } // end of not data entered else state.

    }



    ?>
  </div>
  <form name="billinst" onsubmit="return validate()" method="post" action="#">

    <div>



      <label for="selectitem" class="col-sm-2 form-conrol-label">Item Name:</label>



      <?php

      if ($actor == "barkat1245") {

      ?>

        <div class="col-sm-10">

          <input type="text" class="form-control" id="selectitem" class="col-sm-10" name="item" required />

        </div>

      <?php

      } else {

      ?>

        <div class=" form-group col-sm-8">
          <!-- Values of combobox or textbox -->
          <select class="form-control" id="selectitem" name="item" onChange="remove_border('selectitem')">
            <option value="0"></option>
            <?php get_item($con); ?>
            <?php if (isset($_GET['item'])) {
              $item = $_GET['item'];
              echo ' <option value="' . $item . '" selected>' . $item . '</option>';
            }
            ?>
          </select>

          <!--End of the values of combobox or textbox -->

        </div>

        <div class="col-sm-2">

          <a href="item.php" class="btn btn-primary">Add New</a>

        </div>

      <?php

      } //end of else

      ?>

    </div>



    <div class="form-group col-sm-12">

      <label for="amount" class="col-sm-2 form-conrol-label">Paid Amount</label>

      <div class="col-sm-10">

        <input type="number" min="0" max="19500" class="form-control" id="amount" class="col-sm-10" name="amount" required />

      </div>

    </div>



    <div class="form-group col-sm-12">

      <label for="selectperson" class="col-sm-2 form-conrol-label">Paid Person:</label>

      <div class="col-sm-10">

        <select class="form-control" name="paid_person" id="selectperson" onChange="remove_border('selectperson')">

          <option value='0'></option>

          <option value="waqas" <?php if ($actor == "waqaskanju") {
                                  echo "selected";
                                } ?>>Waqas</option>

          <option value="ijaz" <?php if ($actor == "ijaz013") {
                                  echo "selected";
                                } ?>>Ijaz</option>

          <!--   <option value="imdad"<?php //if($actor=="iammswt"){echo "selected";} 
                                      ?>>Imdad</option> -->

          <option value="barkat" <?php if ($actor == "barkat1245") {
                                    echo "selected";
                                  } ?>>Barkat</option>

          <!--  <option value="nawab"<?php // if($actor=="nawabse"){echo "selected";} 
                                      ?>>Nawab</option> -->

          <option value="ihsan" <?php if ($actor == "ihsanse") {
                                  echo "selected";
                                } ?>>Ihsan</option>

          <option value="kashif" <?php if ($actor == "kashif") {
                                    echo "selected";
                                  } ?>>Kashif</option>

          <!--     <option value="nasar"<?php // if($actor=="nasar"){echo "selected";} 
                                        ?>>Nasar</option> -->

          <option value="nawabc" <?php if ($actor == "nawabc") {
                                    echo "selected";
                                  } ?>>Prince Nawab</option>

          <!--  <option value="jalil" <?php //  if($actor=="jalil"){echo "selected";} 
                                      ?>>Jalil</option> -->



          <!-- <option value="israr" <?php // if($actor=="israr"){echo "selected";} 
                                      ?>>Israr</option>

		    <option value="yasir"<?php // if($actor=="yasir"){echo "selected";} 
                              ?>>Yasir</option> -->



          <option value="ansar" <?php if ($actor == "ansar") {
                                  echo "selected";
                                } ?>>Ansar</option>
          <option value="mehboob" <?php if ($actor == "mehboob") {
                                    echo "selected";
                                  } ?>>Mehboob</option>
          <!--     <option value="mushtaq"<?php // if($actor=="mushtaq"){echo "selected";} 
                                          ?>>Mushtaq</option>  -->
          <!-- <option value="ishaq"<?php // if($actor=="ishaq"){echo "selected";} 
                                    ?>>Ishaq</option>  -->
          <!-- 	<option value="asif"<?php // if($actor=="asif"){echo "selected";} 
                                      ?>>Asif</option> -->
          <option value="irfan" <?php if ($actor == "irfan") {
                                  echo "selected";
                                } ?>>Irfan</option>
          <option value="wazir" <?php if ($actor == "wazir") {
                                  echo "selected";
                                } ?>>Wazir</option>
          <!-- 	<option value="zakir"<?php if ($actor == "zakir") {
                                        echo "selected";
                                      } ?>>Zakir</option> -->
          <!-- 	<option value="naeem"<?php // if($actor=="naeem"){echo "selected";} 
                                      ?>>Naeem</option> -->


        </select>

      </div>

    </div>



    <div class="form-group col-sm-12">

      <label for="item" class="col-sm-2 form-conrol-label">Event Date:</label>

      <div class="col-sm-10">

        <input type="date" class="form-control" id="item" class="col-sm-10" value="<?php echo date('Y-m-d'); ?>" name="event_date" required />

      </div>

    </div>







    <?php



    $tvalue = select_eleven_col($con, "setting", $actor);
    $wsk_def = $tvalue['wsk_def_val'];
    $imd_def = $tvalue['imd_def_val'];
    $ijz_def = $tvalue['ijz_def_val'];
    $brk_def = $tvalue['brk_def_val'];
    $isn_def = $tvalue['isn_def_val'];
    $nwb_def = $tvalue['nwb_def_val'];
    $jal_def = $tvalue['jal_def_val'];
    $nsr_def = $tvalue['nsr_def_val'];
    $kas_def = $tvalue['kas_def_val'];
    $isr_def = $tvalue['isr_def_val'];
    $yas_def = $tvalue['yas_def_val'];
    $nwbc_def = $tvalue['nwbc_def_val'];
    $ans_def = $tvalue['ans_def_val'];
    $mhb_def = $tvalue['mhb_def_val'];
    $mus_def = $tvalue['mus_def_val'];
    $isq_def = $tvalue['isq_def_val'];
    $asf_def = $tvalue['asf_def_val'];
    $irf_def = $tvalue['irf_def_val'];
    $nae_def = $tvalue['nae_def_val'];
    $wzr_def = $tvalue['wzr_def_val'];
    $zkr_def = $tvalue['zkr_def_val'];
    ?>

    <div class="form-group col-sm-12">
      <label class="col-sm-2">Present Persons:</label>
      <div class="row">
        <div class="col-sm-2">
          <label>Waqas Ahmad</label>
          <input type="number" name="waqas" min="0" max="30" value="<?php echo $wsk_def ?>" required>
        </div>

        <div class="col-sm-2">
          <label>Ijaz Ali </label>
          <input type="number" name="ijaz" min="0" max="30" value="<?php echo $ijz_def ?>" required>
        </div>

        <div class="col-sm-2">
          <label>BarkatUllah </label>
          <input type="number" name="barkat" min="0" max="30" value="<?php echo $brk_def ?>" required>
        </div>

        <div class="col-sm-2">
          <label>Ihsan Ali </label>
          <input type="number" name="ihsan" min="0" max="30" value="<?php echo $isn_def ?>" required>
        </div>

      </div> <!-- End of row -->
    </div> <!-- End of col sm 12 -->

    <div class="form-group col-sm-12">
      <label class="col-sm-2">
        <!-- empty label for equal spacing like present person -->
      </label>
      <div class="row">

        <div class="col-sm-2 ">
          <label>Kashif Yaqoob</label>
          <input type="number" name="kashif" min="0" max="30" value="<?php echo $kas_def ?>" required>
        </div>

        <div class="col-sm-2 ">
          <label>Muhammad Ansar</label>
          <input type="number" name="ansar" min="0" max="30" value="<?php echo $ans_def ?>" required>
        </div>

        <div class="col-sm-2 ">
          <label>Mehboob Khan</label>
          <input type="number" name="mehboob" min="0" max="30" value="<?php echo $mhb_def ?>" required>
        </div>

        <div class="col-sm-2 ">
          <label>Nawab Ali</label>
          <input type="number" name="nawabc" min="0" max="30" value="<?php echo $nwbc_def ?>" required>
        </div>



      </div>

    </div> <!-- End of row -->
    </div><!-- End of from group col sm 12 -->

    <!-- <div class="form-group col-sm-12">  start of new line whihc contain empty lable and 4 persson  --->
    <!--    <label class="col-sm-2">  empty label for equal spacing like present person -->
    <!-- </label> -->
    <!--   <div class="row">
          <div class="col-sm-2 ">
            <label>Ishaq Khan</label>
                <input type="number" name="ishaq" min="0" max="30" value="<?php // echo $isq_def 
                                                                          ?>"required> </div>

          <div class="col-sm-2 ">
              <label>Asif Yaqoob</label>
              <input type="number" name="asif" min="0" max="30" value="<?php //  echo $asf_def 
                                                                        ?>"required>
          </div>

        <div class="col-sm-2 "> <label>Mushtaq Khan</label>
           <input type="number" name="mushtaq" min="0" max="30" value="<?php //  echo $mus_def 
                                                                        ?>"required>
        </div>

        <div class="col-sm-2 ">
        <label>Naeem Shahzad</label>
              <input type="number" name="naeem" min="0" max="30" value="<?php // echo $nae_def 
                                                                        ?>"required>
        </div>
    </div>  end of row -->
    <!-- </div> -->
    <!-- end of col sm 12 -->


    <div class="form-group col-sm-12">
      <!-- start of new line whihc contain empty lable and 4 persson  --->
      <label class="col-sm-2">
        <!-- empty label for equal spacing like present person -->
      </label>
      <div class="row">
        <div class="col-sm-2 ">
          <label>Irfan Khan</label>
          <input type="number" name="irfan" min="0" max="30" value="<?php echo $irf_def ?>" required>
        </div>

        <div class="col-sm-2 ">
          <label>Wazir</label>
          <input type="number" name="wazir" min="0" max="30" value="<?php echo $wzr_def ?>" required>
        </div>

        <!-- <div class="col-sm-2 ">
          <label>Zakir</label>
                  <input type="number" name="zakir" min="0" max="30" value="<?php echo $zkr_def ?>"required>
          </div> -->
      </div> <!-- end of row -->
    </div> <!-- end of col sm 12 -->


    <!--

        <div class="col-sm-2">

            <div class="">

                <label>Imdad   </label>

                 <input type="number" name="imdad" min="0" max="30" value="<? // php echo $imd_def 
                                                                            ?>" required>
            </div>
        </div>
-->


    <!--
        <div class="col-sm-2">
<div class="" name="nawab">
                <label>Nawab</label>
                  <input type="number" name="nawab" min="0" max="30" value="<?php // echo $nwb_def
                                                                            ?>"required>
            </div>  	</div>
        </div>
-->
    <!--new row-->




    <!-- End of col 10-->

    <!--

<div class="col-sm-2">

    <div class="" name="jalil">

                <label>Jalil</label>

                  <input type="number" name="jalil" min="0" max="30" value="<?php // echo $jal_def
                                                                            ?>"required>
            </div>
        </div>
-->


    <!--

        <div class="col-sm-2 ">

      <div class="" name="nasar">

                <label>Nasar </label>

                  <input type="number" name="nasar" min="0" max="30" value="<?php // echo $nsr_def 
                                                                            ?>"required>

          </div>

        

        </div>

		

		<div class="col-sm-2 ">

      <div class="" name="israr">

                <label>Israr </label>

                  <input type="number" name="israr" min="0" max="30" value="<?php // echo $isr_def 
                                                                            ?>"required>

          </div>



        </div>

        -->
    <!--new row-->
    <!--         <div class="form-group col-sm-12">

            <label class="col-sm-2">empty label</label>-->

    <!-- <div class="col-sm-2 ">

      <div class="" name="yasir">

                <label>yasir </label>

                  <input type="number" name="yasir" min="0" max="30" value="<?php // echo $yas_def 
                                                                            ?>"required>

          </div>



        </div>

</div>

    -->

    <!--new row-->
    <!--new row-->








    <!--
</div> End of col 10 -->



    <div class="form-group col-sm-12">

      <div class="col-sm-10 col-sm-push-2">

        <button type="submit" class=" btn btn-primary ">Insert</button>

      </div>

    </div>

  </form>



  </div>



  <?php require_once('template/foot.php');



  ?>