<!doctype html>
<html lang='en'>
  <head>
    <title>Hello World</title>
    <meta charset='utf-8'/>
  </head>
  <body>
    <p>
      <?php 
        echo '<h1>Hello World!</h1>You are visiting: ' . $_SERVER['SERVER_NAME'] . '<br/>';
        echo 'Your browser identified itself as: ' . $_SERVER['HTTP_USER_AGENT'];
      ?>
    </p>
<!--        <?php phpinfo(); ?> -->

    <form action="action.php" method="post">
      <p>Your name: <input type="text" name="name" /></p>
      <p>Your age: <input type="text" name="age" /></p>
      <p><input type="submit" /></p>
    </form>
  </body>
</html>
