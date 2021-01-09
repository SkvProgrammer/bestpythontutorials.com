<!DOCTYPE html>
<html lang="en-Us">
    <head>
        <title>Python Forensics</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<script async src="https://cse.google.com/cse.js?cx=016236012273495808262:cabujlbzuwi"></script>
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="codemirror/theme/base16-dark.css" >
           <link rel="stylesheet" href="codemirror/theme/yonce.css" >
           <link rel="stylesheet" href="codemirror/theme/dracula.css" >
        <link rel="stylesheet" type="text/css" href="codemirror/lib/codemirror.css">
        <link rel="stylesheet" href="codemirror/theme/eclipse.css" >
        <link rel="stylesheet" href="codemirror/theme/night.css" >
        <script src="codemirror/lib/codemirror.js"></script>
        <script src="codemirror/mode/python/python.js"></script>
        <script src="codemirror/mode/xml/xml.js"></script>
        <script src="codemirror/mode/htmlembedded/htmlembedded.js"></script>
        <meta name="description" content="Python Forencics Tutorial - BestPythonTutorials.com" />
        <script src="https://unpkg.com/applause-button/dist/applause-button.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/applause-button/dist/applause-button.css">
         <!-- add the button style & script -->
        <link rel="stylesheet" href="applause-button.css" />
        <script src="applause-button.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Itim|Lato:700|Roboto+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.comcss?family=Noto+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo|Oswald:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2|Playfair+Display:900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <!--favicon icon-->
         <link rel="icon" href="favicon2.png">
         <!--<script async src="https://cse.google.com/cse.js?cx=016236012273495808262:cabujlbzuwi"></script>-->

   <style>
    @media(max-width:707){
    .nlp{
      height:100px!important;
      width:100%!important;
    }
  }
    .email{
      padding:5px!important;
    }
    .email:focus{
      border:1px solid #4537d1;
    }
    .message{
      resize:none;
      padding:4px;
      border:none;
    }
       #graphcomment{
            width:100%!important;
          }
          #search{
            box-shadow:none;outline:none;
          }
          form input{
            box-shadow:none;
            outline:none;
          }
          #social li:hover{
            cursor:hand;
          }
          #facebookshare:hover{
            text-decoration:none;
          }
          ::-webkit-scrollbar {
            display:none;
          }
          #content{
           
            overflow:auto;
          }

          /*testing*/
          #more{
            outline:none;
            box-shadow:none;
          }
          #search:focus{
            border:2px solid #4537d1;
          }
         
        input{
          outline:none;
          width:70%;
          padding:12px;
        }

    
          .dropdown-menu .dropdown-divider{
            margin-top:0px;
            margin-bottom:0px;
          }
          .dropdown-menu{
            box-shadow:none!important;
            outline:none;
          }
          .dropdown-menu{
            border-radius:1px!important;
            height:300px;
            overflow-y:scroll;
            background-color:#a54eee;
            color:white!important;
            padding-top:0px;
            padding-bottom:0px;
          }
          .dropdown-menu a{
            color:white;
          }
                  table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2}
          string{
            color:rgb(0,255,0);
          }
        
          str{
            color:rgb(0,200,0);
          }
          div p{
            font-family: 'Open Sans', sans-serif;
          }
          p{
            text-align:justify!important;
          }
          .overlay-content a h1{
            margin-top:10px;
          }
          
          .menu ul li{
      list-style:none;
      height:30px;
      width:19.8%;
      background-image: linear-gradient(192deg,#a54eee,#4537d1);
      text-align:left;
      line-height:0px;
      font-size:17px;
      padding:20px;
    }
    .menu ul li:hover{
      background-image:linear-gradient(to right,#4537d1,#4537d1);
      cursor:pointer;
    }
    .menu ul li a{
      text-decoration:none;
      color:white;
      /*font-family: 'Expletus Sans', cursive;*/
      /*font-family: 'Itim', cursive;*/
      font-family: 'Roboto',sans-serif;
      margin-left:20px;
    }
   .menu ul{
      margin-left:-40px;
    }
    @media(max-width:1300px){
      .menu ul li{
      font-size:17px!important;
    }
    }
    .menu ul li h6{
      font-weight:bolder;
    }
    /*all css*/
     #topnav{
                background-image: linear-gradient(to right,#a54eee,#4537d1);
            }
            #topnav ul li a{
                color:white;
            }
            #topnav ul li a{
                font-family:Comic Sans MS, Comic Sans, cursive;
            }
             #topnav{
                background-image:linear-gradient(to right,#a54eee,#4537d1);
            }
            #topnav ul li a{
                color:white;
            }
            :root {
           --mainColor: #ff9800;
            }
             #topnav ul li   a {
              background:linear-gradient(to bottom, var(--mainColor) 0%,var(--mainColor) 100%);
              background-position: 0 100%;
              background-repeat: repeat-x;
              background-size: 0px 0px;
              color: #000;
              text-decoration: none;
              transition: background-size .2s;
            }

            #topnav ul li a:hover {
            background-size: 4px 50px;
             }
            x{
                color:lime;
            }
            
            #topnav ul li a{
                color:white;
            }
            .navbar-brand:hover{
               color:lime!important;
            }
            #topnav ul li{
                width:70px;
                text-align:center;
            }
            #topnav ul li a{
                font-family: 'Itim', cursive;

            }
            .navbar-brand{
              transition:color 1s ease-in-out;
            }
            .navbar-toggler{
                color:white;
                border:none;
                font-weight:bolder;
            }
            @media(max-width:770px){
                #text3{
                    margin-top:50px!important;
                }
                #sec{
                    height:110vh!important;
                }
            }

            body{
                height:1500px;
                /*background-color:#FAF6F5;*/
                background-color:white;
            }
           
}
           
                        
            *{
                margin:0px;
                padding:0px;
            }

            
            
            
.overlay {
  height:100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  /*background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);*/
 background-image: linear-gradient(43deg,#4537d1,#a54eee);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  /*margin-top: 20px;*/
}

            .overlay-content,.closebtn{
                margin-top:70px;
            }
.overlay a {
  padding: 2px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
  border-bottom:groove 1px white;

}
.overlay a:first-child{
  border-top:solid 1px white;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}
.overlay a h6{
  margin-top:10px;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

@media(max-width:900px){
  #tag1{
    font-size:20px;
  }
}

@media(max-width:1200px){
  #content{
    width:100%!important;
  }
  #ad1,#ad2{
    width:100%!important;
  }

}

        @media(max-width:900px){
        /*#ad1,#ad2{
          border:solid 1px black;
        }*/
      }

        @media(max-width:520px){
           #ad1,#ad2{
           height:13vh!important;
         }
        }
        @media(max-width:900px){
          #prev{
            left:0px!important;
          }
          #next{
            right:0px!important;
          }
          #sideads1{
            display:none;
          }
        }
        .overlay-content{
        border-bottom-width:100px!important;
        }
        @media(max-width:685px){
          #x{
            width:80%!important;
          }
        }
        /**********scroll button************/
        #myBtn {
  display: none;
  position: fixed;
  bottom: 18px;
  right: 100px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:#00b359;
  color: white;
  cursor: pointer;
  padding: 18px;
  border-radius: 100%;
}

/*#myBtn:hover {
  background-color: lime;
}*/

       .tm{
        display:none;
       }
       @media(max-width:1200px){
        .tm{
          display:block!important;
        }
        .menu{
          display:none!important;
        }
       }
        /***********scroll button ends*********/
        #prev{
          position:absolute;
          left:0px!important;
        }
        #next{
          position:absolute;
          right:0px!important;
        }
        #slp{
          padding:8px;
          background-color:orangered;
          color:white;
          text-decoration:none;
          border-radius:1px!important;
        }
      
        #footlink li a{
          color:white;
          text-decoration:none;
        }
        #footlink li a:hover{
          text-decoration:underline;
        }
        comment,comments{
          color:orangered;
        }
        keyword{
          color:#3083ff;
        }
        numbers{
          color:red;
        }
        datatypes{
          color:red;
        }
        #datatypes li a{
          text-decoration:none;
          color:black;
        } 
        code1{
          font-weight:bold;
        }
        #modulereference li{
          text-decoration:none;
          list-style:none;
        }
        #modulereference li a{
          font-size:20px!important;
        }
        #modulereference li a:hover{
          color:rgb(0,180,0)!important;
        }
        #modulereference{
          margin-left:-30px;
        }
        html{
          scroll-behavior:smooth;
        }
        #btngrupx button{
          border-right:2px solid white;
          background-color:#f2f2f2!important;
        
          text-align:center;
          padding-left:0px
          padding-right:0px;
        }
        #btngrupx button:hover{
          background-color:lightgrey!important;
          border-color:white!important;
        }

       #myInput {
  /*background-image: url('../search.png');*/ /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 70%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 10px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}
topics {
  width:200%;
  overflow:hidden;
}
topics {
  animation: slide-left 1s alternate infinite;
}

@keyframes slide-left {
  from {
    margin-left: 5%;
    width: 300%; 
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}
@media(max-width:991px){
  .btn-group{
    display:none!important;
  }
}
.topulli{
  position:sticky;
  top:0px;
}
#btngrupx button{
  transition:background-color 1s ease-in;
}
@media(max-width:1200px){
  .buttonmenu{
    display:block!important;
  }
}
#gs_tti50 input{
  padding:5px!important;
}
/*testing*/
.gsc-search-box{
  border:none!important;
}
.gsc-search-box td input{
  border-radius:1px!important;
}
input{
  padding:30px;
}
.gsc-search-box td{
  margin:0px;
  padding:0px;
}

.gsc-input{
  padding:0px!important;
  

}
.gsc-search-button{
  padding:10.9px;
  margin-left:-5px;
  color:#a54eee;
  background-color:none;
} 
button.gsc-search-button.gsc-search-button-v2{
  /*background-color:#f2f2f2;*/
  /*background-color:#4537d1;*/
  background-image:linear-gradient(to right
    ,#3399ff);
 
  /*border-color:white!important;*/
  border:2px solid #3399ff!important;
  border-bottom:3px solid #3399ff!important;
  border-top-right-radius:50px;
  border-bottom-right-radius:50px;
  outline:none;
  border:none;
  box-shadow:none;

}
.gsc-search-button-v2 svg{
  /*fill:#a54eee;*/
  fill:white;
}
path{
  background-color:green!important;
}
.gsc-input-box input{
  border-radius:50px!important
  box-shadow:none!important;
  outline:none!important;
}
.gsc-input-box{
  padding:0px!important;
  opacity:1;
  /*border-color:#a54eee;
  border-width:5px;*/
  
  border:2px solid #3399ff!important;
  border-image:linear-gradient(to right,#a54eee,#4537d1);
  border-right:none!important;
  
}
table.gstl_50.gsc-input{
  border-radius:50px!important;
}


.gsc-control-cse.gsc-control-cse-en{
  /*background-color:#f2f2f2;*/
  margin-bottom:10px;
}
.gsc-control-cse.gsc-control-cse-en table td{
  padding:0px!important;
}
tbody{
  padding:0px!important;
}

.btnxc {
  display:block;
  height:25px;
  width:25px;
  border-radius: 50%;  
  /*border:1px solid red;*/
}
#foot button{
  box-shadow:none;
  outline:none;
}

        </style>


</head>
<body>

  <script>
    $(document).ready(function(){
      $("#menubutton1").click(function(){
        $(this).hide()
        $("#menubuttoncross").show()
      })
      $("#menubuttoncross").click(function(){
        $(this).hide()
        $("#menubutton1").show()
      })
    })
</script>
  <!--<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>-->
  <button onclick="topFunction()" id="myBtn" title="Go to top">
<a class="btnxc" onclick=""><i class="fa fa-chevron-up"></i></a>
</button>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-fixed-top topulli" style="background-image:linear-gradient(192deg,#a54eee,#4537d1);font-family: 'Itim', cursive;">

        <!--<span style="font-size:35px;cursor:pointer;color:white;font-family: 'Noto Serif', serif;"  onclick="openNav()" class="text-center">&#9781;<i class="fa fa-bars"></i>
       &#9776; 
        </span>-->
        <button class="navbar-toggler buttonmenu"  type="button" data-toggle="collapse" onclick="openNav()" style="display:none;">

    <!--<span class="navbar-toggler-icon"></span>-->
    &#9776;
  </button>

  <a class="navbar-brand" href="index.php">BestPythonTutorials<y style="color:lime;">.com</y></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="menubutton1">
    <!--<span class="navbar-toggler-icon"></span>-->
    &#9776;
  </button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="menubuttoncross" style="display:none;">
    <!--<span class="navbar-toggler-icon"></span>-->
    &times;


      </button>
  <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ml-auto">
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active mr-auto ml-auto">
        <a class="nav-link" href="home.php" target="_self">Python<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="django/home_django.php" target="_self">Django</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="tkinter/home_tkinter.php" target="_self">Tkinter</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="flask/home_flask.php" target="_self">Flask</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="numpy/home_numpy.php" target="_self">Numpy</a>
      </li>
    <div class="btn-group dropleft" style="border-radius:1px!important;">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" style="border-radius:1px!important;" id="more">More</button>
        <div class="dropdown-menu">
            <a href="html/home_html4.php" class="dropdown-item">HTML</a>
            <a href="css/home_css.php" class="dropdown-item">CSS</a>
            <a href="javascript/home_javascript.php" class="dropdown-item">Javascript</a>
            <a href="jquery/home_jquery.php" class="dropdown-item">JQuery</a>
            <a href="php/home_php.php" class="dropdown-item">Php</a>
            <a href="sass/home_sass.php" class="dropdown-item">Sass</a>
            <a href="bootstrap/home_bootstrap.php" class="dropdown-item">Bootstrap 4</a>
            <a href="svg/home_svg.php" class="dropdown-item">SVG</a>
             <div class="dropdown-divider"></div>
            <a href="clanguage/home_c.php" class="dropdown-item">C</a>
            <a href="cpp/home_cpp.php" class="dropdown-item">C++</a>
            <a href="csharp/home_csharp.php" class="dropdown-item">C#</a>
            <a href="java/home_java.php" class="dropdown-item">Java</a>
            <div class="dropdown-divider"></div>
            <a href="nodejs/home_node.php" class="dropdown-item">NodeJS</a>
            <a href="expressjs/home_express.php" class="dropdown-item">ExpressJS</a>
            <a href="angularjs/home_angularjs.php" class="dropdown-item">Angular JS</a>
            <div class="dropdown-divider"></div>
            <a href="ds/ds_home.php" class="dropdown-item">Data Structures</a>
           <a href="algo/algo_home.php" class="dropdown-item">Algorithms</a>
        </div>
    </div>
    </ul>
  </div>
</nav>  
  <!--navbar-->
  <!--vertical menu-->
  <div class="menu" style="height:100%;overflow:auto;">
    <ul>
     <li style="box-shadow:1px 1px white;background-color:white;background-image:none!important;padding:0px;border: 3px solid #a54eee;"><h4 style="text-align:center;font-family: 'Roboto', sans-serif;height:30px;line-height:55px;color:#a54eee;background-color:white;">PYTHON TUTORIAL</h4></li><br>
      <li><a href="home.php"  target="_self">Python Home</a></li>
   <li><a href="intro3.php"  target="_self">Introduction</a></li>
    <li><a href="installation.php" target="_self">Installation</a></li>
    <!--<li><a href="majorpythonversions.php" target="_self">Major Python versions</a></li>-->
    <li><a href="pythonides.php" target="_self">Python IDEs</a></li>                      
    <li><a href="print.php" target="_self">print,docstring</a></li>
    <li><a href="datatypes.php" target="_self">Data Types,Variables</a></li>
    <li><a href="typecasting.php" target="_self">Type Casting</a></li>
    <li><a href="operators.php" target="_self">Operators</a></li>
    <li><a href="calculations.php" target="_self">Basic Calculations</a></li>
    <li><a href="stringoperations.php" target="_self">String Operations</a></li>
    <li><a href="stringfunctions.php" target="_self">String Functions</a></li>
    <li><a href="controlstructures.php" target="_self">Control Structures</a></li>
    <li><a href="userinput.php" target="_self">User Input</a></li>
    <li><a href="if.php" target="_self">If,else,elif</a></li>
    <li><a href="loops.php" target="_self">Loops</a></li>
    <li><a href="break.php" target="_self">break and continue</a></li>
    <li><a href="functions.php" target="_self">Functions</a></li>
    <li><a href="pass.php" target="_self">Pass Keyword</a></li>
    <li><a href="range.php" target="_self">range and xrange()</a></li>
    <li><a href="returnvsprint.php" target="_self">return vs print</a></li>
    <li><a href="recursion.php" target="_self">Recursion</a></li>
    <li><a href="recursionvsiteration.php" target="_self">Recursion vs Iteration</a></li>
    <li><a href="modules.php" target="_self">Modules</a></li>
    <li><a href="userdefinedmodules.php" target="_self">User defined modules</a></li>
    <li><a href="timemodule.php" target="_self">Time module</a></li>
    <li><a href="osmodule.php" target="_self">Os Module</a></li>
    <li><a href="randommodule.php" target="_self">Random Module</a></li>
    <li><a href="sysmodule.php" target="_self">sys Module</a></li>
    <li><a href="statisticsmodule.php" target="_self">statistics Module</a></li>
    <li><a href="readcsv.php" target="_self">Read CSV file</a></li>
    <li><a href="writecsv.php" target="_self">Write CSV file</a></li>
    <li><a href="readexcel.php" target="_self">Read Excel file</a></li>
    <li><a href="writeexcel.php" target="_self">Write Excel File</a></li>
    <li><a href="assert.php" target="_self">Assert Keyword</a></li>
    <li><a href="commandline.php" target="_self">Command Line Arguments</a></li>
    <li><a href="exception.php" target="_self">Exception Handling</a></li>
    <li><a href="collectionmodule.php" target="_self">Collection Module</a></li>
    <li><a href="itetools.php" target="_self">Python IterTools</a></li>
    <li><a href="magicmethods.php" target="_self">Python Magic Methods</a></li>
    <li><a href="and.php" target="_self">and,or,not</a></li>
    <li><a href="is.php" target="_self">is,is not</a></li>
    <li><a href="isvsequal.php" target="_self">is vs ==</a></li>
    <li><a href="ternary.php" target="_self">ternary operator</a></li>
    <li><a href="slicing.php" target="_self">Slicing,Indexing</a></li>
    <li><a href="comments.php" target="_self">comments/Documentation</a></li>
    <li><a href="arrays.php" target="_self">Arrays</a></li>
    <li><a href="lambda.php" target="_self">lambda function</a></li>
    <li><a href="map.php" target="_self">map,filter,reduce functions</a></li>
    <li><a href="listcomprehension.php" target="_self">List Comprehension</a></li>
    <li><a href="dictionarycomprehension.php" target="_self">Dictionary Comprehension</a></li>
    <li><a href="setcomprehension.php" target="_self">Set comprehension</a></li>
    <li><a href="generators.php" target="_self">Generators</a></li>
    <li><a href="generatorsvslist.php" target="_self">Generators vs List</a></li>
    <li><a href="generatorcomprehension.php" target="_self">Generator comprehension</a></li>
    <li><a href="cmathmodule.php" target="_self">CMath,Math module</a></li>
    <li><a href="decorators.php">Decorators</a></li>
   <li style="box-shadow:1px 1px white;background-color:white;background-image:none!important;padding:0px;border: 3px solid #a54eee;"><h4 style="text-align:center;font-family: 'Roboto', sans-serif;height:50px;line-height:55px;color:#a54eee;background-color:white;"><i class="fa fa-tick">OOPS</h4></li><br>
    <li><a href="classes.php" target="_self">Classes and Objects</a></li>
    <li><a href="abstraction.php" target="_self">Abstraction</a></li>
    <li><a href="inheritance.php" target="_self">Inheritance</a></li>
    <li><a href="polymorphism.php" target="_self">Polymorphism</a></li>
    <li><a href="encapsulation.php" target="_self">Encapsulation</a></li>
    <!--new-->
    <li style="box-shadow:1px 1px white;background-color:white;background-image:none!important;padding:0px;border: 3px solid #a54eee;"><h4 style="text-align:center;font-family: 'Roboto', sans-serif;height:50px;line-height:55px;color:#a54eee;background-color:white;"><i class="fa fa-tick">INTERMEDIATE</h4></li><br>
    <li><a href="micropython.php" target="_self">MicroPython</a></li>    <li><a href="pythondescriptors.php" target="_self">Python Descriptors</a></li>
    <li><a href="typechecking.php" target="_self">Type Checking</a></li>
    <li><a href="exploringhttps.php" target="_self">Exploring HTTPS</a></li>
    <li><a href="pdf.php" target="_self">Working with PDF Docs</a></li>
    <li><a href="legb.php" target="_self">LEGB Rule</a></li>
    <li><a href="async.php" target="_self">Async Features</a></li>
    <li><a href="redis.php" target="_self">Redis in Python</a></li>
    <li><a href="classmethod.php" target="_self">@classmethod</a></li>
    <li><a href="staticmethod.php" target="_self">@staticmethod</a></li>
    <li><a href="instancemethod.php" target="_self">Instance Method</a></li>
    <li><a href="pointers.php" target="_self">Pointers in Python</a></li>
    <li><a href="with.php" target="_self">with block</a></li>
    <li><a href="memory.php" target="_self">Memory Management</a></li>
    <li><a href="aws.php" target="_self">AWS S3 and BOTO3</a></li>
    <li><a href="pathlib.php" target="_self">Pathlib Module</a></li>
    <li><a href="inner.php" target="_self">Inner Functions</a></li>
    <li><a href="automation.php" target="_self">Automation in Python</a></li>
   <li style="box-shadow:1px 1px white;background-color:white;background-image:none!important;padding:0px;border: 3px solid #a54eee;"><h4 style="text-align:center;font-family: 'Roboto', sans-serif;height:50px;line-height:55px;color:#a54eee;background-color:white;"><i class="fa fa-tick">ADVANCE PYTHON</h4></li><br>
    <li><a href="args.php" target="_self">*args,**kwargs</a></li>
    <li><a href="name.php" target="_self">__name__ is __main__</a></li>
    <li><a href="introception.php" target="_self">Code Introspection</a></li>
    <li><a href="enum.php" target="_self">Enumerate function</a></li>
    <li><a href="json.php" target="_self">JSON</a></li>
    <li><a href="regexp.php" target="_self">RegExp</a></li>
    <li><a href="threads.php" target="_self">Threads</a></li>
    <!--new-->
    <li><a href="meta.php" target="_self">Meta Classes</a></li>
    <li><a href="gil.php">GIL</a></li>
    <li><a href="copying.php" target="_self">Object Copying</a></li>
    <li><a href="socket.php" target="_self">Socket Programming</a></li>
    <li><a href="functional.php" target="_self">Functional Programming</a></li>
    <li><a href="cpython.php" target="_self">CPython</a></li>
    <li><a href="interfaces.php" target="_self">Interfaces</a></li>
    <li><a href="cmodule.php" target="_self">C extension module</a></li>
    <li><a href="asynciomodule.php" target="_self">Asyncio Module</a></li>
    <li><a href="designpatterns.php" target="_self">Python Design Patterns</a></li>
    <li><a href="buffering.php" target="_self">Python Buffering Protocol</a></li>
    <li><a href="linguistics.php" target="_self">Linguistics</a></li>
    <li><a href="polynomial.php" target="_self">Polynomial Manipulation</a></li>
    <li><a href="wsgi.php" target="_self">WSGI Protocol</a></li>
    <li><a href="graph.php" target="_self">Graph Theory</a></li>
    <li><a href="systemprogramming.php" target="_self">System Programming</a></li>
    <li><a href="xmlprogramming.php" target="_self">XML Processing</a></li>
    <li><a href="cgiprogramming.php" target="_self">CGI Programming</a></li>
    <li><a href="logging.php" target="_self">Logging in Python</a></li>
    <li><a href="debugging.php" target="_self">Debugging</a></li>
    <li style="background-image:linear-gradient(to right,#4537d1,#4537d1);color:white;border-bottom:1px solid white;border-top:1px solid white;text-align:left;"><a href="forensics.php" target="_self">Python Forencics</a></li>
    <li><a href="virtualenv.php" target="_self">Virtual Enviroment</a></li>
    <li><a href="contextmanager.php" target="_self">Python Context Manager</a></li>
    <li><a href="functionfactory.php" target="_self">Function Factory</a></li>
    <li><a href="closure.php" target="_self">Closure</a></li>
    <li><a href="pickling.php" target="_self">Pickling & Unpickling</a></li>
    <li><a href="zip.php" target="_self">Zip,Sets</a></li>
    <li><a href="sendingmail.php" target="_self">Sending Mail</a></li>
    <li><a href="serialization.php" target="_self">Serialization</a></li>
    <li><a href="unittesting.php" target="_self">Unit Testing</a></li>
    <li><a href="subprocessmodule.php" target="_self">Subprocess Module</a></li>
    <li><a href="methodchaining.php" target="_self">Method Chaining</a></li>
 <li style="box-shadow:1px 1px white;background-color:white;background-image:none!important;padding:0px;border: 3px solid #a54eee;"><h4 style="text-align:center;font-family: 'Roboto', sans-serif;height:50px;line-height:55px;color:#a54eee;background-color:white;"><i class="fa fa-tick">PATTERNS</h4></li><br>
    <li><a href="starpattern.php" target="_self">Star Pattern</a></li>
    <li><a href="pyramid.php" target="_self">Pyramid Pattern</a></li>
    <li><a href="diamond.php" target="_self">Diamond Patterns</a></li>
    <li><a href="numberpatterns.php" target="_self">Number Patterns</a></li>
    <li><a href="morepatterns.php" target="_self">More Patterns</a></li>
   <li style="box-shadow:1px 1px white;background-color:white;background-image:none!important;padding:0px;border: 3px solid #a54eee;"><h4 style="text-align:center;font-family: 'Roboto', sans-serif;height:50px;line-height:55px;color:#a54eee;background-color:white;"><i class="fa fa-tick">FILE HANDLING</h4></li><br>
    <li><a href="introfilehandling.php" target="_self">Intro to file handling</a></li>
    <li><a href="openingfile.php" target="_self">Opening a file</a></li>
    <li><a href="readingfile.php" target="_self">Reading a file</a></li>
    <li><a href="writingfile.php" target="_self">Writing into a file </a></li>
    <li><a href="deletingfile.php" target="_self">Deleting a file</a></li>
    <li><a href="tell.php" target="_self">tell and seek method</a></li>
   <li style="box-shadow:1px 1px white;background-color:white;background-image:none!important;padding:0px;border: 3px solid #a54eee;"><h4 style="text-align:center;font-family: 'Roboto', sans-serif;height:50px;line-height:55px;color:#a54eee;background-color:white;"><i class="fa fa-tick">DS & ALGO</h4></li><br>
    <li><a href="linkedlist" target="_self">Linked List</a></li>
    <li><a href="stack.php" target="_self">Stack</a></li>
    <li><a href="queue.php" target="_self">Oueue</a></li>
    <li><a href="binarytree.php" target="_self">Binary Tree</a></li>
    <li><a href="binarysearchtree.php" target="_self">Binary Search Tree</a></li>
    <li><a href="heap.php" target="_self">Heap</a></li>
    <li><a href="hashing.php" target="_self">Hashing</a></li>
    <li><a href="graph.php" target="_self">Graph</a></li>
    <li><a href="advanceds.php" target="_self">Advance Data Structures</a></li>
    <li><a href="analysisofalgorithm.php" target="_self">Analysis Of Algorithms</a></li>
    <li><a href="searching.php" target="_self">Searching Algorithm</a></li>
    <li><a href="sorting.php" target="_self">Sorting Algorithm</a></li>
    <li><a href="geometric.php" target="_self">Geometric Algorithm</a></li>
    <li><a href="randomized.php" target="_self">Randomized Algorithms</a></li>
    <li><a href="divideconquer.php" target="_self">Divide and Conquer</a></li>
    <li><a href="greedy.php" target="_self">Greedy Algorithm</a></li>
    <li><a href="pattern.php" target="_self">Pattern Searching</a></li>
   <li> <a href="dynamicprogramming.php" target="_self">Dynamic Programming</a></li>
    <li><a href="backtracking.php" target="_self">Backtracking</a></li>
    <li><a href="branchandbound.php" target="_self">Branch and bound</a></li>
    <li><a href="allalgo.php" target="_self">All Algorithms</a></li> 
    <li style="box-shadow:1px 1px white;background-color:white;background-image:none!important;padding:0px;border: 3px solid #a54eee;"><h4 style="text-align:center;font-family: 'Roboto', sans-serif;height:50px;line-height:55px;color:#a54eee;background-color:white;"><i class="fa fa-tick">MORE TOPICS</h4></li><br>
     <li><a href="datavisualization.php" target="_blank">Data visualization</a></li>
     <li><a href="webscraping.php" target="_blank">Web Scraping</a></li>
     <li><a href="home_pygame.php" target="_blank">Pygame tuorials</a></li>
     
     <li><a href="home_mysql.php" target="_blank">Python MySQL</a></li>
     <li><a href="webblockers.php" target="_blank">Web Blockers</a></li>
     <li><a href="pythonmongodb.php" target="_blank">Python MongoDB</a></li>
     <li><a href="home_django.php" target="_self">Django</a></li>
     <li><a href="home_flask.php" target="_self">Flask</a></li>
     <li><a href="home_tkinter.php" target="_self">Tkinter</a></li>
     <li><a href="freelancersguide.php" target="_self">Freelancers Guide</a></li>
    </ul>
      
  </div>
  <!--vertical menu end-->
  <!---top menu-->
  <div class="container" style="position:absolute;top:100px;font-family: 'Oswald', sans-serif;z-index:1;" >        
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" style="border:none!important;" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
   

     <a href="" style="border:none;color:white;"><h1 id="tag1">PYTHON TUTORIAL</h1></a>
    <a href="home.php" target="_self">Home</a>
    <a href="intro3.php"  target="_self">Introduction</a>
    <a href="installation.php" target="_self">Installation</a>
    <a href="pythonides.php" target="_self">Python IDE </a>                   
    <a href="print.php" target="_self">print,docstring</a>
    <a href="datatypes.php" target="_self">Data Types,Variables</a>
    <a href="typecasting.php" target="_self">Type Casting</a>
    <a href="operators.php" target="_self">Operators</a>
    <a href="calculations.php" target="_self">Basic Calculations</a>
    <a href="stringoperations.php" target="_self">String Operations</a>
    <a href="stringfunctions.php" target="_self">String Functions</a>
    <a href="controlstructures.php" target="_self">Control Structures</a>
    <a href="userinput.php" target="_self">User Input</a>
    <a href="if.php" target="_self">If,else,elif</a>
    <a href="loops.php" target="_self">Loops</a>
    <a href="break.php" target="_self">break and continue</a>
    <a href="functions.php" target="_self">Functions</a>
    <a href="pass.php" target="_self">Pass Keyword</a>
    <a href="range.php" target="_self">range and xrange()</a>
    <a href="returnvsprint.php" target="_self">return vs print</a>
    <a href="recursion.php" target="_self">Recursion</a>
    <a href="recursionvsiteration.php" target="_self">Recursion vs Iteration</a>
    <a href="modules.php" target="_self">Modules</a>
    <a href="userdefinedmodules.php" target="_self">User defined modules</a>
    <a href="timemodule.php" target="_self">Time module</a>
    <a href="osmodule.php" target="_self">Os Module</a>
    <a href="randommodule.php" target="_self">Random Module</a>
    <a href="sysmodule.php" target="_self">sys Module</a>
    <a href="statisticsmodule.php" target="_self">statistics Module</a>
    <a href="readcsv.php" target="_self">Read CSV file</a>
    <a href="writecsv.php" target="_self">Write CSV file</a>
    <a href="readexcel.php" target="_self">Read Excel file</a>
    <a href="writeexcel.php" target="_self">Write Excel File</a>
    <a href="assert.php" target="_self">Assert Keyword</a>
    <a href="commandline.php" target="_self">Command Line Arguments</a>
    <a href="exception.php" target="_self">Exception Handling</a>
    <a href="collectionmodule.php" target="_self">Collection Module</a>
    <a href="itertools.php" target="_self">Python IterTools</a>
    <a href="magicmethods.php" target="_self">Python Magic Methods</a>
    <a href="and.php" target="_self">and,or,not</a>
    <a href="is.php" target="_self">is,is not</a>
    <a href="isvsequal.php" target="_self">is vs ==</a>
    <a href="ternary.php" target="_self">ternary operator</a>
    <a href="slicing.php" target="_self">Slicing,Indexing</a>
    <a href="comments.php" target="_self">comments/Documentation</a>
    <a href="arrays.php" target="_self">Arrays</a>
    <a href="lambda.php" target="_self">lambda function</a>
    <a href="map.php" target="_self">map,filter,reduce functions</a>
    <a href="listcomprehension.php" target="_self">List Comprehension</a>
    <a href="dictionarycomprehension.php" target="_self">Dictionary Comprehension</a>
    <a href="setcomprehension.php" target="_self">Set comprehension</a>
    <a href="generators.php" target="_self">Generators</a>
    <a href="generatorsvslist.php" target="_self">Generators vs List</a>
    <a href="generatorcomprehension.php" target="_self">Generator comprehension</a>
    <a href="cmathmodule.php" target="_self">CMath,Math module</a>
    <a href="decorators.php">Decorators</a>
     <a href="" style="color:white;border:none;"><h1 id="tag1">OOPs</h1></a>
    <a href="classes.php" target="_self">Classes and Objects</a>
    <a href="abstraction.php" target="_self">Abstraction</a>
    <a href="inheritance.php" target="_self">Inheritance</a>
    <a href="polymorphism.php" target="_self">Polymorphism</a>
    <a href="encapsulation.php" target="_self">Encapsulation</a>
    <!--new-->
     <a href="" style="border:none;"><h1 style="color:white;" id="tag1">INTERMEDIATE PYTHON</h1></a>
    <a href="micropython.php" target="_self">MicroPython</a>
    <a href="pythondescriptors.php" target="_self">Python Descriptors</a>
    <a href="typechecking.php" target="_self">Type Checking</a>
    <a href="exploringhttps.php" target="_self">Exploring HTTPS</a>
    <a href="pdf.php" target="_self">Working with PDF Docs</a>
    <a href="legb.php" target="_self">LEGB Rule</a>
    <a href="async.php" target="_self">Async Features</a>
    <a href="redis.php" target="_self">Redis in Python</a>
    <a href="classmethod.php" target="_self">@classmethod</a>
    <a href="staticmethod.php" target="_self">@staticmethod</a>
    <a href="instancemethod.php" target="_self">Instance Method</a>
    <a href="pointers.php" target="_self">Pointers in Python</a>
    <a href="with.php" target="_self">with block</a>
    <a href="memory.php" target="_self">Memory Management</a>
    <a href="aws.php" target="_self">AWS S3 and BOTO3</a>
    <a href="pathlib.php" target="_self">Pathlib Module</a>
    <a href="inner.php" target="_self">Inner Functions</a>
    <a href="automation.php" target="_self">Automation in Python</a>
    <a href="" style="border:none;"><h1 style="color:white;" id="tag1">ADVANCE PYTHON</h1></a>  
    <a href="args.php" target="_self">*args,**kwargs</a>
    <a href="name.php" target="_self">__name__ is __main__</a>
    <a href="introception.php" target="_self">Code Introspection</a>
    <a href="enum.php" target="_self">Enumerate function</a>
    <a href="json.php" target="_self">JSON</a>
    <a href="regexp.php" target="_self">RegExp</a>
    <a href="threads.php" target="_self">Threads</a>
    <!--new-->
    <a href="meta.php" target="_self">Meta Classes</a>
    <a href="gil.php" target="_self">GIL</a>
    <a href="copying.php" target="_self">Object Copying</a>
    <a href="socket.php" target="_self">Socket Programming</a>
    <a href="functional.php" target="_self">Functional Programming</a>
    <a href="cpython.php" target="_self">CPython</a>
    <a href="interfaces.php" target="_self">Interfaces</a>
    <a href="cmodule.php" target="_self">C extension module</a>
    <a href="asynciomodule.php" target="_self">Asyncio Module</a>
    <a href="designpatterns.php" target="_self">Python Design Patterns</a>
    <a href="buffering.php" target="_self">Python Buffering Protocol</a>
    <a href="linguistics.php" target="_self">Linguistics</a>
    <a href="polynomial.php" target="_self">Polynomial Manipulation</a>
    <a href="wsgi.php" target="_self">WSGI Protocol</a>
    <a href="graph.php" target="_self">Graph Theory</a>
    <a href="systemprogramming.php" target="_self">System Programming</a>
    <a href="xmlprogramming.php" target="_self">XML Processing</a>
    <a href="cgiprogramming.php" target="_self">CGI Programming</a>
    <a href="logging.php" target="_self">Logging in Python</a>
    <a href="debugging.php" target="_self">Debugging</a>
    <a href="forensics.php" target="_self" style="color:white">Python Forencics</a>
    <a href="virtualenv.php" target="_self">Virtual Enviroment</a>
    <a href="contextmanager.php" target="_self">Python Context Manager</a>
    <a href="functionfactory.php" target="_self">Function Factory</a>
    <a href="closure.php" target="_self">Closure</a>
    <a href="pickling.php" target="_self">Pickling & Unpickling</a>
    <a href="zip.php" target="_self">Zip,Sets</a>
    <a href="sendingmail.php" target="_self">Sending Mail</a>
    <a href="serialization.php" target="_self">Serialization</a>
    <a href="unittesting.php" target="_self">Unit Testing</a>
    <a href="subprocessmodule.php" target="_self">Subprocess Module</a>
    <a href="methodchaining.php" target="_self">Method Chaining</a>
    <a href="" style="color:white;border:none;"><h1 id="tag1">PATTERN PROGRAMMING</h1></a>
    <a href="starpattern.php" target="_self">Star Pattern</a>
    <a href="pyramid.php" target="_self">Pyramid Pattern</a>
    <a href="diamond.php" target="_self">Diamond Patterns</a>
    <a href="numberpatterns.php" target="_self">Number Patterns</a>
    <a href="morepatterns.php" target="_self">More Patterns</a>
    <a href="" style="color:white;border:none;"><h1 id="tag1">FILE HANDLING</h1></a>
    <a href="introfilehandling.php" target="_self">Intro to file handling</a>
    <a href="openingfile.php" target="_self">Opening a file</a>
    <a href="readingfile.php" target="_self">Reading a file</a>
    <a href="writingfile.php" target="_self">Writing into a file </a>
    <a href="deletingfile.php" target="_self">Deleting a file</a>
    <a href="tell.php" target="_self">tell and seek method</a>
     <a href="" style="border:none;"><h1 style="color:white;" id="tag1">DS and Algo</h1></a>
    <a href="linkedlist" target="_self">Linked List</a>
    <a href="stack.php" target="_self">Stack</a>
    <a href="queue.php" target="_self">Oueue</a>
    <a href="binarytree.php" target="_self">Binary Tree</a>
    <a href="binarysearchtree.php" target="_self">Binary Search Tree</a>
    <a href="heap.php" target="_self">Heap</a>
    <a href="hashing.php" target="_self">Hashing</a>
    <a href="graph.php" target="_self">Graph</a>
    <a href="advanceds.php" target="_self">Advance Data Structures</a>
    <a href="analysisofalgorithm.php" target="_self">Analysis Of Algorithms</a>
    <a href="searching.php" target="_self">Searching Algorithm</a>
    <a href="sorting.php" target="_self">Sorting Algorithm</a>
    <a href="geometric.php" target="_self">Geometric Algorithm</a>
    <a href="randomized.php" target="_self">Randomized Algorithms</a>
    <a href="divideconquer.php" target="_self">Divide and Conquer</a>
    <a href="greedy.php" target="_self">Greedy Algorithm</a>
    <a href="pattern.php" target="_self">Pattern Searching</a>
    <a href="dynamicprogramming.php" target="_self">Dynamic Programming</a>
    <a href="backtracking.php" target="_self">Backtracking</a>
    <a href="branchandbound.php" target="_self">Branch and bound</a>
    <a href="allalgo.php" target="_self">All Algorithms</a> 
    <a href="" style="color:white;border:none;"><h1 id="tagx">More Topics</h1></a>
    <a href="datavisualization.php" target="_blank">Data visualization</a>
    <a href="webscraping.php" target="_blank">Web Scraping</a>
    <a href="home_pygame.php" target="_blank">Pygame tuorials</a>
    <a href="home_mysql.php" target="_blank">Python MySQL</a>
    <a href="webblockers.php" target="_blank">Web Blockers</a>
    <a href="pythonmongodb.php" target="_blank">Python MongoDB</a>
    <a href="home_django.php" target="_self">Django</a>
    <a href="home_flask.php" target="_self">Flask</a>
    <a href="home_tkinter.php" target="_self">Tkinter</a>
    <a href="freelancersguide.php" target="_self">Freelancers Guide</a>
  </div>
</div>
</div>
        
        

        <!--<div class="container-fluid sticky-top tm" style="background-image: linear-gradient(#4537d1,#4537d1);">
        <span style="font-size:35px;cursor:pointer;color:white;font-family: 'Noto Serif', serif;"  onclick="openNav()" class="text-center">&#9781;<topics>TOPICS MENU</topics> 
        </span>
           </div>-->
  <!--top menu ends-->
  <!--main content section-->
  <section class="container-fluid text-center" id="content" style="width:80%;background-color:white;font-family: 'Baloo Thambi 2', cursive;font-size:18px;position:absolute;top:60px;right:0px;padding:0px;"> 
    <!----------------------------ADS------------------->
    <div class="ad mb-1" style="height:90px;width:100%;">
    </div>
    <!-------------------------------ADS---------------->
           <button class="btn newcolorbtn" onclick="prev()" id="prev" style="color:white;position:absolute;left:15%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;"><i class=" fa fa-chevron-left"></i>  Previous</button>
           <button class="btn newcolorbtn" id="next" style="color:white;position:absolute;right:15%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;" onclick="next()">Next  <i class=" fa fa-chevron-right"></i></button><br><br>
<div style="padding:10px;">
  
  <div class="container">
<div class="gcse-search" data-mobileLayout="enabled"></div>
</div>
<h3 style="text-align:justify;">Python Forensics</h3>
<div class="row ml-auto mr-auto" style="width:40%!important;">
<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//bestpythontutorials.com/debugging.php" style="background-color:#3377ff;color:white;border-radius:1px;padding:1px;font-size:15px;" id="facebookshare" class="col-lg-3 col-sm-3 col-md-3 mb-1" class="mr-2 pl-2 pr-2"> <i class="fa fa-facebook-f"></i> Share </a>
<a href="https://twitter.com/intent/tweet?text=http%3A//bestpythontutorials.com/debugging.php" style="background-color:#1ac6ff;color:white;border-radius:1px;padding:1px;font-size:15px;" id="facebookshare" class="col-lg-3 col-sm-3 col-md-3 mb-1"> <i class="fa fa-twitter"></i> Tweet </a>
<a href="mailto:satyamvarman2004@gmail.com?subject=Tutorial%20From%20BestPythonTutorials.com&body=Learn%20Programming%20in%20a%20better%20and%20simpler%20way%20with%20BestPythonTutorials.com" style="background-color:red;color:white;border-radius:10px;padding:1px;font-size:15px;" class="pl-2 pr-2 mr-2" id="facebookshare">   <i class="fa fa-envelope-o"></i> Email </a>
<a href="https://www.youtube.com/channel/UC_pPPgwvndi8f2RkbkbvOIA" target="_blank" style="background-color:red;color:white;border-radius:10px;padding:1px;font-size:15px;" class="pl-2 pr-2" id="facebookshare">   <i class="fa fa-youtube"></i>Youtube </a>

<p style="text-align:justify;" class="mt-4">Computational Forensics is an emerging research domain. It deals with solving forensic problems using digital methods. It uses computational science to study digital evidence.</p>
<p style="text-align:justify;">
Computation Forensics includes a broad range of subjects which has objects, substances, and processes investigated, mainly based on pattern evidence, such as toolmarks, fingerprints, shoeprints, documents etc., and also includes physiological and behavioral patterns, DNA, and digital evidence at crime scenes.</p>
<p style="text-align:justify;">Computational forensics is implemented with the help of some algorithms. These algorithms are used for signal and image processing, computer vision and graphics. It also includes data mining, machine learning, and robotics.</p>

<p style="text-align:justify;">Computational forensics involves diverse digital methods. The best solution to ease all digital methods in forensics is to use a general-purpose programming language like Python.
</p>
<div class="container-fluid mt-5" style="background-color:#ffffcc;padding:20px;">
<p style="text-align:justify;" class="mt-4">This was just an introduction to Computational Forensics in Python.We will be sooner launching courses on Computational Forensics.It's a new emerging Research domain.</p>
</div>

<br><br><br>
<script type="text/javascript">
wpac_init = window.wpac_init || [];
wpac_init.push({widget: 'Rating', id: 25392});
(function() {
    if ('WIDGETPACK_LOADED' in window) return;
    WIDGETPACK_LOADED = true;
    var mc = document.createElement('script');
    mc.type = 'text/javascript';
    mc.async = true;
    mc.src = 'https://embed.widgetpack.com/widget.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
})();
</script>
<button class="btn btn-outline-success" data-target="#myModalfeedback" data-toggle="modal" style="box-shadow:none;outline:none;border-radius:50px;">Feedback/Suggest Improvement</button>



<div id="myModalfeedback" class="modal modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="border-radius:1px!important;">
      <div class="modal-header">
        
        <h5 class="modal-title text-center">Suggest Improvements</h5>
      </div>
      <div class="modal-body">
  <form style="text-align: center;" action="https://formspree.io/mlepjgpw"
  method="POST">
    <label>Your Email</label><br>
    <input type="email" name="_replyto" placeholder="Type your Email..." style="margin-top:10px;margin-bottom:13px;padding:3px;padding-left:20px;border-radius:50px;border:1px solid lightgrey;"><br>
    <label>Your Suggestion</label><br>
    <textarea name="message" placeholder="Type you Suggestion..." style="height:80px;width:165px;resize:none;margin-top:10px;width:70%;border-radius:50px;border:1px solid lightgrey;outline:none;padding-left:30px;padding-right:30px;"></textarea><br>
    <button type="submit" class="btn btn-outline-success" id="click-me" style="border-radius:50px;">Submit Your Suggestion</button>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default text-dark" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--------------------------------COMMENTS----------------------COMMENTS-------------------------------------------------------->
<h3 class="mt-5 mb-4 text-left" style="margin-top:100px!important;">Comments</h3>


<!--</div><div class="powr-comments" id="fe9f97dc_1590211763"></div><script src="https://www.powr.io/powr.js?platform=embed"></script>-->
<div id="wpac-comment"></div>
<script type="text/javascript">
wpac_init = window.wpac_init || [];
wpac_init.push({widget: 'Comment', id: 25392});
(function() {
    if ('WIDGETPACK_LOADED' in window) return;
    WIDGETPACK_LOADED = true;
    var mc = document.createElement('script');
    mc.type = 'text/javascript';
    mc.async = true;
    mc.src = 'https://embed.widgetpack.com/widget.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
})();
</script>
<!--------TESTING------------------------>
<!--<div id="graphcomment"></div>
<script type="text/javascript">

  /* - - - CONFIGURATION VARIABLES - - - */

  // make sure the id is yours
  window.gc_params = {
    graphcomment_id: 'sddswer',

    // if your website has a fixed header, indicate it's height in pixels
    fixed_header_height: 0,
  };

  /* - - - DON'T EDIT BELOW THIS LINE - - - */

  
  (function() {
    var gc = document.createElement('script'); gc.type = 'text/javascript'; gc.async = true;
    gc.src = 'https://graphcomment.com/js/integration.js?' + Math.round(Math.random() * 1e8);
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(gc);
  })();

</script>-->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ec7d293c75cbf1769ee68c9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</div>
  </div>
      </div><br> <br> 
      <hr>
      <div class="container text-center ml-auto mr-auto">
      <div class="row text-center" id="btngrupx">

     <button class="btn mt-2 mb-2 col-lg-6 col-md-12 col-sm-6"  style="background-color:lightgrey;border-radius:1px!important;" onclick="codespeedy()"><b>PRINT THIS PAGE</b></button><!--
      <button class="btn mt-2 mb-2 col-lg-2 col-sm-6"  style="background-color:lightgrey;border-radius:1px!important;" onclick="window.open('../aboutus.html')"><b>ABOUT US</b></button>-->
      <button class="btn mt-2 mb-2 col-lg-6 col-md-12 col-sm-6"  style="background-color:lightgrey;border-radius:1px!important;" onclick="window.open('https://devtipsntricks.com')"><b>BLOGS</b></button>
      <button class="btn mt-2 mb-2 col-lg-6 col-md-12 col-sm-6"  style="background-color:lightgrey;border-radius:1px!important;" onclick="window.open('https://www.facebook.com/satyam.varman.12')"><b>LIKE US ON FACEBOOK</b></button>
       <button class="btn mt-2 mb-2 col-lg-6 col-md-12 col-sm-6"  style="background-color:lightgrey;border-radius:1px!important;" onclick="window.open('../aboutus.html')"><b>ABOUT US</b></button>
    </div>
  </div>
      <hr>
      

        
 </div>
    

          <!----------ADS-------------ADS----------ADS---------->
        <div class="container-fluid" style="width:30%;height:400px;;position:absolute;left:-30%;bottom:0%;background-color:lightgrey;">

         </div>
             
           

        
             <button class="btn newcolorbtn" onclick="prev()" id="prev" style="color:white;position:absolute;left:10%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;"><i class=" fa fa-chevron-left"></i>  Previous</button>
           <button class="btn newcolorbtn" id="next" style="color:white;position:absolute;right:10%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;" onclick="next()">Next  <i class=" fa fa-chevron-right"></i></button><br>
           <!------------------------ADS----------------->
           <div class="container-fluid mt-3 mb-1" style="height:30vh;width:100%;">

           </div>
           <!---------------------------ADS----------------->


           
           <!--------------------------------- MODAL STARTS ------------------------>
<div id="myModal" class="modal modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-image:linear-gradient(192deg,#a54eee,#4537d1);color:white;">
      <div class="modal-header">
        
        <h5 class="modal-title text-center">Report Us</h5>
      </div>
      <div class="modal-body">
        <p>If you find any errors in this tutorials don't hesitate to <a href="mailto:" style="color:white;text-decoration:underline;">mail us</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default text-white" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-----------------------------------MODAL ENDS------------------------->
<!--------------------------------- MODAL STARTS ------------------------>
<div id="myModalone" class="modal modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
     <div class="modal-content" style="background-image: linear-gradient(to right,#a54eee,#4537d1);color:white;">
      <div class="modal-header">
        
        <h5 class="modal-title text-center">Contact Developer</h5>
      </div>
      <div class="modal-body">
         <p style="text-align:left;">Hey,I am Satyam Kumar Verman ,the creator of this awesome site I take individual projects of Web Design & Development,Android App Development and Software Development.You can contact me by mailing  at <br><a href="maito:satyamkumarverman@gmail.com" style="color:white;"> satyamkumarverman@gmail.com</a><br>OR<br><a href="maito:developer@bestpythontutorials.com" style="color:white;"> developer@bestpythontutorials.com</a><br>OR<br> visit my<a href="https://skv.netlify.com" style="color:white;"> Website</a>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default text-white" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<!-----------------------------------MODAL ENDS------------------------->
        
           <footer style="height:auto;background-color: #0d0d0d;font-family: 'Roboto', sans-serif!important;" class="text-center container-fluid" id="foot"> 
             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" data-target="#myModal" data-toggle="modal"><i class="fa fa-flag"></i>  Report Error</button>


             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;"><i class="fa fa-envelope"></i><a href="mailto:" style="color:white;text-decoration:none;"> Mail us</a></button>
             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" onclick="myopen(3)"><i class="fa fa-address-book"></i>      Contact us</button>
             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" onclick="myopen(4)"><i class="fa fa-user-secret"></i>        Privacy Policy</button>
             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" onclick="myopen(5)"><i class="fa fa-info"></i>    Terms and Conditions</button>
             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" data-target="#myModalone" data-toggle="modal"><i class="fa fa-envelope-o"></i>     Contact Developer</button>
             <div class="row" style="font-family: 'Raleway', sans-serif;">
             <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Programming Language</h4></li>
               <li><a href="home.php">Python</a></li>
               <li><a href="java/home_java.php">Java</a></li>
               <li><a href="clanguage/home_c.php">C</a></li>
               <li><a href="cpp/home_cpp.php">C++</a></li>
               <li><a href="csharp/home_csharp.php">C#</a></li>
               <li><a href="php/home_php.php">Php</a></li>
               <li><a href="javascript/home_javascript.php">JavaScript</a></li>
             </ul>
               <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Web Technologies</h4></li>
               <li><a href="html/home_html4.php">HTML</a></li>
               <li><a href="html/home_html5.php">HTML5</a></li>
               <li><a href="css/home_css.php">CSS</a></li>
               <li><a href="css/home_cssthree.php">CSS3</a></li>
               <li><a href="javascript/home_javascript.php">Javascript</a></li>
               <li><a href="jquery/home_jquery.php">JQuery</a></li>
             </ul>
               <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Web Frameworks</h4></li>
               <li><a href="bootstrap/home_bootstrap.php">Bootstrap 4</a></li>
               <li><a href="django/home_django.php">Django</a></li>
               <li><a href="flask/home_flask.php">Flask</a></li>
               <li><a href="angularjs/home_angularjs.php">AngularJS</a></li>
               <li><a href="nodejs/home_node.php">Node.js</a></li>
               <li><a href="expressjs/home_express.php">ExpressJS</a></li>
               <li><a href="reactjs/home_react.php">React</a></li>
               <li><a href="javascript/home_ecmascript.php">Ecmascript</a></li>
               <li><a href="sass/home_sass.php">Sass</a></li>

             
             </ul>

               <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Databases</h4></li>
               <li><a href="sql/home_sql.php">SQL</a></li>
               <li><a href="mysql/home_mysql.php">MySQL</a></li>
               <li><a href="home_mongodb">MongoDB</a></li>  
               <li class="mt-5"><h4>Others</h4></li>
               <li><a href="ds/ds_home.php">Data Structures</a></li>
               <li><a href="algo/algo_home.php">Algorithms</a></li>  
               <li><a href="index.php">More Tutorials</a></li>     
             </ul>
           </div>

             <button class="btn newcolorbtn mb-5 mt-5" style="border-radius:1px;" onclick="window.open('quizzes.php','_blank')"><div class="spinner-grow spinner-grow-sm"></div>Quizzes</button><br>
             

               <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center" style="color:white;" id="social">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1" onclick="window.open('https://www.facebook.com/satyam.varman.12')" id="facebook">
        <i class="fa fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fa fa-twitter" onclick="window.open('https://twitter.com/skvprogrammer')"> </i>
      </a>
    </li>
    <!--<li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fa fa-google-plus"> </i>
      </a>-->
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fa fa-linkedin" onclick="window.open('https://www.linkedin.com/in/satyam-verman-b77272190/')"> </i>
      </a>
    </li>
    <!--<li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fa fa-dribbble"> </i>
      </a>
    </li>-->
  </ul>
             <!--like button-->
             <!--<abbr title="Like us on facebook"><i class="fa fa-thumbs-up" style="color:white;font-size:30px;"></i>-->
  
             <!--like button end-->

             <div class="footer text-center py-3 text-light" style="font-family: 'Raleway', sans-serif;">&copy 2020 Copyright:
    <a href="index.php" style="color:white;text-decoration:none;font-family: 'Raleway', sans-serif;"> BestPythonTutorials.com :</a>All Rights are Reserved<br><br>
    <applause-button style="width: 48px; height: 48px;margin:0px auto;color:rgb(0,200,0)!important;"/>

  </div>
           </footer>
           </section>


  <!--main content section ends-->
   <script>
    var num;
    function myopen(num){
      if(num == 1){
        window.open("reporterror.php");
      }else if(num == 2){
        window.open("mailus.php");
      }else if(num == 3){
        window.open("contactus.php");
      }else if(num == 4){
        window.open("privacypolicy.php");
      }else if(num == 5){
        window.open("termsandconditions.php");
      }else{
        window.open("contactdeveloper.php");
      }
    }
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
/*function funxopen(){
  window.open("installation.php");
}*/
function next(){
  window.open("virtualenv.php","_self");
}
function prev(){
  window.open("debugging.php","_self");
}

/**********scroll functionality*********/
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
function ChangeTheme(){
  var x = document.getElementById("code");

  if(x.style.backgroundColor === "white"){
    x.style.backgroundColor = "black";
    x.style.color = "white";
  }else{
    x.style.backgroundColor = "white";
    x.style.color = "black";
  }
}
function ChangeTheme2(){
  var x = document.getElementById("code2");

  if(x.style.backgroundColor === "white"){
    x.style.backgroundColor = "black";
    x.style.color = "white";
  }else{
    x.style.backgroundColor = "white";
    x.style.color = "black";
  }
}
function ChangeTheme3(){
  var x = document.getElementById("code3");

  if(x.style.backgroundColor === "white"){
    x.style.backgroundColor = "black";
    x.style.color = "white";
  }else{
    x.style.backgroundColor = "white";
    x.style.color = "black";
  }
}
function ChangeTheme4(){
  var x = document.getElementById("code4");

  if(x.style.backgroundColor === "white"){
    x.style.backgroundColor = "black";
    x.style.color = "white";
  }else{
    x.style.backgroundColor = "white";
    x.style.color = "black";
  }
}
function ChangeTheme5(){
  var x = document.getElementById("code5");

  if(x.style.backgroundColor === "white"){
    x.style.backgroundColor = "black";
    x.style.color = "white";
  }else{
    x.style.backgroundColor = "white";
    x.style.color = "black";
  }
}
function ChangeTheme6(){
  var x = document.getElementById("code6");

  if(x.style.backgroundColor === "white"){
    x.style.backgroundColor = "black";
    x.style.color = "white";
  }else{
    x.style.backgroundColor = "white";
    x.style.color = "black";
  }
}
function ChangeTheme7(){
  var x = document.getElementById("code7");

  if(x.style.backgroundColor === "white"){
    x.style.backgroundColor = "black";
    x.style.color = "white";
  }else{
    x.style.backgroundColor = "white";
    x.style.color = "black";
  }
}
/**********scroll functionality ends********/
/*function spt(){
  window.open("intro3.php","_self");
}*/
</script>
  <script type="text/javascript">
        
    function codespeedy(){
      var print_div = document.getElementById("main");
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();
// This is the code print a particular div element
    }
   
  </script>

<script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
</body>
</html>