function updateIframe(){
 var myFrame = $("#myframe").contents().find('body');
 var textareaValue = $("#editor1").val();
 myFrame.html(textareaValue);
 }