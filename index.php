<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IMAPSYNC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
<h1 class="center"> IMAPSYNC</h1>
<html>
<form action="sync.php" method="get">
      <div class="container">
      <div class="row"> 
      <div class="col-md-4">

  Old Host: <input type="text" name="oldhost" placeholder="mail.domain.tld"><br>
  Old E-Mail: <input type="text" name="olduser" placeholder="user@domain.tld"><br>
  Old Password: <input type="password" name="oldpw"><br>
  Old Authmech: <input type="text" name="oldauth" value="PLAIN"><br>
</div>
<div class="row">
      <div class="col-md-4">
  New Host: <input type="text" name="newhost" placeholder="mail.domain.tld"><br>
  New E-Mail: <input type="text" name="newuser" placeholder="user@domain.tld"><br> 
  New Password: <input type="password" name="newpw"><br>
  New Authmech: <input type="text" name="newauth" value="PLAIN"><br> 
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<div class="row">
      <div class="col-md-4">
<br>
Enter Hostname<br>
<br>
<br>
<br>
Enter E-Mail
<br>
<br>
<br>
<br>
Passwords from old and new Server
<br>
<br>
<br>
<br>
PLAIN or LOGIN
