<?php
/**
 * Created by PhpStorm.
 * User: Waqas Ahmad
 * Date: 3/7/2017
 * Time: 1:04 AM
 */
session_start();
	if(!isset($_SESSION['mysession'])){ 
		header('location:index.php');
	}
?>
<?php require_once('template/head.php');?>
</style>
</head>

<body>
  <div class="container-fluid">
    <?php require_once('template/nav.php');?>
    <table class="table table-striped table-bordered">
      <th colspan="2"> Electric Bill Information </th>
      <tr>
        <td> Name and Address </td>
        <td> MOHD AFZAL KHAN S/O ALI AKBAR VILL GOLARA SHARIF </td>
      </tr>
      <tr>
        <td>Refrence No </td>
        <td>12141272667900</td>
      </tr>
      <tr>
        <td>Refrence No New </td>
        <td>12141272874900</td>
      </tr>
      <tr>
        <td>Meter No</td>
        <td> S-P 201967 </td>
      </tr>
      <tr>
        <td>Website to check bill</td>
        <td> <a href="http://210.56.23.106:888/iescobill" target="_blank"> Check Electric bill </a> </td>
      </tr>
      <tr>
        <td>Normally Due date</td>
        <td>9th of Month</td>
      </tr>
    </table>

    <table class="table table-striped table-bordered">
      <th colspan="2"> Gas Bill Information </th>
      <tr>
        <td> Name and Address </td>
        <td>NAUSHAD ALI KHAN GOLRA SHARIF OH KHANA WALA ISLAMABAD </td>
      </tr>
      <tr>
        <td>CONSUMER No </td>
        <td> 99976624728 </td>
      </tr>
      <tr>
        <td>Meter No</td>
        <td> GN00100999 </td>
      </tr>
      <tr>
        <td>Website to check bill</td>
        <td> <a
            href="http://sngpl.com.pk/login.jsp?mdids=85&pgname=PAGES_NAME_a&secs=ss7xa852op845&cats=ct456712337&artcl=artuyh709123465"
            target="_blank"> Check Gas bill </a> </td>
      </tr>
      <tr>
        <td>Normally Due date</td>
        <td>7th of Month</td>
      </tr>
    </table>

    <table class="table table-striped table-bordered">
      <th colspan="2"> PTCL Bill Information </th>
      <tr>
        <td> Name and Address </td>
        <td>BABU NAWAB APT,MOHALLA KHANAWALLA,GOLRA SHARIF,ISLAMABAD </td>
      </tr>
      <tr>
        <td>Account ID </td>
        <td> 100000188327 </td>
      </tr>
      <tr>
        <td>PTCL No</td>
        <td> 2155191 </td>
      </tr>
      <tr>
        <td>Website to check bill</td>
        <td> <a href="https://dbill.ptcl.net.pk/PTCLSearchInvoice.aspx" target="_blank"> Check PTCL bill </a> </td>
      </tr>
      <tr>
        <td>Normally Due date</td>
        <td>6th of Month</td>
      </tr>
  </div>
  <?php require_once('template/foot.php');
?>