<!doctype html>
<html lang='en'>
  <head>
    <title>Submission Results</title>
    <meta charset='utf-8'/>
  </head>
  <body>
    <h1>Submission Results</h1>
    <p>Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.
    </p>
  </body>
</html>
