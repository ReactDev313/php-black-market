<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "config.php";
foreach (glob("Framework/*.php") as $filename)
{
    require_once $filename;
}
foreach (glob("Controller/*.php") as $filename)
{
    require_once $filename;
}

require_once "Model/ModelInterface.php";
require_once "Model/Model.php";
require_once "Model/User.php";
require_once "Model/Item.php";
require_once "Model/Purchase.php";

session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>
        Black Market
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
	<link rel='stylesheet' href='./Views/asseets//library/bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./Views/asseets/css/login.css">
      <!-- Custom styles for this template -->
    <link href="./Views/asseets/css/sidebar.css" rel="stylesheet">
</head>
<body class="main-bg">
<?php

\TestApp\DbConnection::getInstance()->connect($db_host, $db_name, $db_user, $db_password);

if(isset($_SESSION["error"])) {?>
<div class="error-message"><?php echo $_SESSION["error"]; ?></div>
<?php unset($_SESSION["error"]);}

echo(\TestApp\Router::routeTo($_SERVER['REQUEST_URI']));
?>

<!-- Bootstrap core JavaScript -->
  <script src="./Views/asseets/library/jquery/jquery.min.js"></script>
  <script src="./Views/asseets/library/bootstrap/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>