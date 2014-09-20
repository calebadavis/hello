<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'/>
    <title>Clock</title>
    <link rel='stylesheet' href='clock.css' type='text/css'/>
    <?php require("clock_logic.php"); ?>

  </head>

  <?php echo "<body class='$period'>\n"; ?>
  <?php echo "  <h1>It is $curTime</h1>\n"; ?>
  <?php echo "  <p><small>Timezone: $tzName</small></p>\n"; ?>
  <?php echo "  <img src='$time_image_url'/>\n"; ?>
  </body>
</html>