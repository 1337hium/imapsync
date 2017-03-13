<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WHOIS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../whois/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../rezept/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../rezept/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
    <style>

      .left    { text-align:left; }
      .right   { text-align: right; }
      .center  { text-align: center; }
      .justify { text-align: justify; }
      .start   { text-align: start; }

    </style>
</head>
<body>
<script>
function Scrollit(){ window.scrollBy(0,1); }
setInterval("Scrollit()",0.1);
</script>
<h1 class="center"> IMAPSYNC</h1>
<html>
</div>
<div class="row">   
      <div class="col-md-4">
</div>
</div>
<?php
header('Content-Encoding: none;');


$oldhost = $_GET["oldhost"];
$olduser = $_GET["olduser"];
$oldpw = $_GET["oldpw"];
$oldauth = $_GET["oldauth"];
$newhost = $_GET["newhost"];
$newuser = $_GET["newuser"];
$newpw = $_GET["newpw"];
$newauth = $_GET["newauth"];

echo '<pre>';
$output = system("imapsync --host1 '$oldhost' --user1 '$olduser' --password1 '$oldpw' --authmech1 '$oldauth' --host2 '$newhost' --user2 '$newuser' --password2 '$newpw' --authmech2 '$newauth' --ssl2");
echo '</pre>';


?>
</br>
</br>

<button type="submit" name="update" id="update" class="btn btn-default" onclick="goBack()">back</button>

<script>
function goBack() {
    window.history.back();
}
</script>
