<!doctype html>
<html>
<head>
	<title></title>
	    <link rel="stylesheet" href="codemirror/lib/codemirror.css" />
        <script src="codemirror/lib/codemirror.js"></script>
        <script src="codemirror/mode/python/python.js"></script>
        <link rel="stylesheet" href="codemirror/theme/dracula.css" />
        <link rel="stylesheet" href="codemirror/theme/base16-dark.css" >
</head>
<body>
 <textarea id="editor" style="height:20vh!important;">
"""enumerate function for counting the number of iterations of a List"""

list1 = ["Skv","Skvprogrammer","Skv2"]
"""Default Index"""
print(list(enumerate(list1)))
"""Different Index"""
print(list(enumerate(list1,100)))
             </textarea>
              <script>
    var editor = CodeMirror.fromTextArea
    (document.getElementById('editor'),{
      mode:"python",
      lineNumbers:true,
      theme:"night"
    });
  </script> 
</body>
</html>