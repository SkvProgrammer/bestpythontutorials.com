<a style="background-color:orangered;color:white;border-radius:10px;padding:1px;font-size:15px;" class="pl-2 pr-2 ml-1" id="facebookshare" onclick="languagedisplay()">   <i class="fa fa-language"></i>Language </a></button>













<!-------------------Google Translate API----------------------->
<div id="google_translate_element" style="display:none;"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
   function languagedisplay(){
      var z = document.getElementById("google_translate_element");
      if(z.style.display == "none"){
        z.style.display = "block";
      }else{
        z.style.display = "none";
      }
    }
</script>
<!-----------------------Google Translate API ends----------------->