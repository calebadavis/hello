<?php
  error_reporting(E_ALL);
  ini_set('display_errors',1);
  //phpinfo();
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <title>PHPiggy Bank</title>

    <?php require("logic.php"); ?>
</head>

<body>

    <img src='http://making-the-internet.s3.amazonaws.com/php-phpiggy-bank.png' alt='PHPiggy Bank Logo'>

    <p>
     You have $<?php echo $total; ?> in your piggy bank.
    </p>

</body>
</html>