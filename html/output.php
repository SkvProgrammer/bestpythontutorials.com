<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Editor</title>

</head>
<body>
    <style>
        .output{
            height:500px;
            width:600px;
            border:1px solid black;
        }
    </style>
<form action="output.php" method="POST">
<textarea style="height:200px;width:200px;" name="code">
    
</textarea>
<button>Run it</button>
</form>
<h4>Output</h4>

<div class="output">
    <?php
    $code = $_POST['code'];
    echo $code;
    ?>
</div>
</body>
</html>