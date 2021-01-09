
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!-- CSS Style -->

<style type="text/css">
br { display: none; }
 textarea, iframe{display: block;margin: 10px 0;width:100%;border: 1px solid #333;}
</style>

<!-- JavaScript -->

<script type="text/javascript">
 function updateIframe(){
 var myFrame = $("#myframe").contents().find('body');
 var textareaValue = $("textarea").val();
 myFrame.html(textareaValue);
 }
</script>

<textarea rows="5" cols="50" placeholder="Type HTML or text here..."></textarea>

<button style="border:0" type="button" onclick="updateIframe()"><i class="fa fa-pencil-square-o"></i> Run Code </button>

<iframe id="myframe"></iframe>
</body>
</html>