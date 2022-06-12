<?php



require_once('sandbox/functions.php');

require_once('class/Connection.php');



$connection = new Connection();

$actor = $_SESSION['mysession'];

$shareholdser = find_shareholder($actor);

$pperson = find_paid_person($actor);



?>



<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



  <style>