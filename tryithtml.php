<!DOCTYPE html>
<html>
  <head>
  	<title>Code Editor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles.css">
  </head>

  <body>

    <textarea id="html" placeholder="HTML">
      <?php echo $_POST["html"];?>
    </textarea>
    <textarea id="css" placeholder="CSS">
      <?php echo $_POST["css"];?>
    </textarea>
    <textarea id="js" placeholder="JavaScript">
      <?php echo $_POST["js"];?>
    </textarea>
    <iframe id="code"></iframe>

    <script type="text/javascript" src="app.js"></script>

  </body>
</html>