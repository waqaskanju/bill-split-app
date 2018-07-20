<?php
/**
 * Created by PhpStorm.
 * User: WAQAR
 * Date: 3/10/2016
 * Time: 3:22 PM
 */

session_start();

if(!isset($_SESSION['mysession']))
{
    header('location:index.php');

}


include('sandbox/functions.php');

session_destroy();
header('location:spend.php');