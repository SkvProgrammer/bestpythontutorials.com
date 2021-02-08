<!DOCTYPE html>
<html lang="en-Us">
    <head>
        <title>Home - Pygame</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <script type="text/javascript" src="//cdn.datacamp.com/dcl-react.js.gz"></script>
        <script charset="UTF-8" src="//web.webpushs.com/js/push/21f7140e081ac8d7144ec5c3ffb92c8c_1.js" async></script>
        <script async src="https://cse.google.com/cse.js?cx=016236012273495808262:cabujlbzuwi"></script><link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../codemirror/theme/base16-dark.css" >
        <link rel="stylesheet" href="../codemirror/theme/yonce.css" >
        <link rel="stylesheet" href="../codemirror/theme/dracula.css" >
        <link rel="stylesheet" type="text/css" href="../codemirror/lib/codemirror.css">
        <link rel="stylesheet" href="../codemirror/theme/eclipse.css" >
        <link rel="stylesheet" href="../codemirror/theme/night.css" >
        <script src="../codemirror/lib/codemirror.js"></script>
        <script src="../codemirror/mode/python/python.js"></script>
         <script src="../codemirror/mode/python/python.js"></script>
          <script src="../codemirror/mode/javascript/javascript.js"></script>
          <script src="../codemirror/mode/sql/sql.js"></script>
           <script src="../codemirror/mode/xml/xml.js"></script> 
           <meta name="description" content="Pygame Tutorial - Pygame is a Python-based Library for creating graphical games - You can easily create graphical games with pygame  - BestPythonTutorials.com" />
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
         <link rel="icon" href="../favicon2.png">
         <!--<script async src="https://cse.google.com/cse.js?cx=016236012273495808262:cabujlbzuwi"></script>-->
    
           
    <script type="application/javascript" src="https://sdki.truepush.com/sdk/v2.0.2/app.js" async></script>
    <script>
    var truepush = window.truepush || [];
            
    truepush.push(function(){
        truepush.Init({
            id: "5fae20b78deea45b893fa56a"
        },function(error){
          if(error) console.error(error);
        })
    })
    </script>
        
        <style>
          #search{
            box-shadow:none;outline:none;
          }
          form input{
            box-shadow:none;
            outline:none;
          }          #social li:hover{
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
            border:1px solid white;
            border-bottom:none!important
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
      font-family: 'Roboto', sans-serif;

    }
   .menu ul{
      margin-left:-35px;
    }
    @media(max-width:1300px){
      .menu ul li{
      font-size:15px!important;
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
      /*  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}*/
     #myBtn {
  display: none;
  position: fixed;
  bottom: 18px;
  right: 100px;
  z-index: 1;
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
#foot button{
  border:none;
  outline:none;
  box-shadow:none;
}
#btngrupx button{
  transition:background-color 1s ease-in;
}
@media(max-width:1200px){
  .buttonmenu{
    display:block!important;
  }
}


/**************************************testcode********************/

    .gsc-control-cse
{
  padding:0px !important;
  border-width:0px !important;
}

form.gsc-search-box,table.gsc-search-box
{
  margin-bottom:0px !important;
}

.gsc-search-box .gsc-input
{
  padding:0px 4px 0px 6px !important;
  border:none;
  margin-top:-8px;
}

#gsc-iw-id1
{
        height: auto !important;
        padding: 0px !important;
        border-width: 0px !important;
        box-shadow:none !important;
}

#gs_tti50
{
  padding:0px !important;
}

#gsc-i-id1
{
  height:20px !important;
  padding:0px !important;
  background:none !important;
  text-indent:0px !important;
}

.gsib_b
{
  display:none;
}

button.gsc-search-button
{
        display:block;
        width:13px !important;
        height:13px !important;
        border-width:0px !important;
        /*margin:0px !important;*/
      margin-top:-7px;
        padding: 10px 6px 10px 13px !important;
        outline:none;
        cursor:pointer;
        box-shadow:none !important;
        box-sizing: content-box !important;
}

.gsc-branding
{
  display:none !important;
}

.gsc-control-cse,#gsc-iw-id1
{
  background-color:transparent !important;
}

/* Changing placeholder color of search box */
    
#gsc-i-id1::-webkit-input-placeholder
{ 
  /* Chrome */
  color: #FFF;
}

#gsc-i-id1a:-ms-input-placeholder
{ 
  /* IE 10+ */
  color: #FFF;
}

#gsc-i-id1::-moz-placeholder
{ 
  /* Firefox 19+ */
  color: #FFF;
  opacity: 1;
}

#gsc-i-id1:-moz-placeholder
{ 
  /* Firefox 4 - 18 */
  color: #FFF;
  opacity: 1;
}

#search-box
{
  width:80%;
  height: 36px;
  line-height:-30px;
  /*margin:0 auto;*/
  /*background-color: #a54eee;*/
  background-image:linear-gradient(to right,#4537d1,#1ac6ff,#a54eee);
  border: 2px solid #FFF;
  box-shadow: 0px 0px 0px 2px #a54eee;
  border-radius: 40px; 
}

#gsc-i-id1
{
  color:#FFF;
}

button.gsc-search-button
{
  padding:10px !important;
  background-color:transparent !important;
}

/**************************************testcodeends******************/
.dropdown-menu a{
  padding:10px;
  background-image:linear-gradient(192deg,#a54eee,#4537d1);
}
.dropdown-menu a:hover{
  background-image:linear-gradient(#4537d1,#4537d1);
  color:white;
}
.btnxc {
  display:block;
  height:25px;
  width:25px;
  border-radius: 50%;  
  /*border:1px solid red;*/
}


/***************sign up************/
 #main form input{
 width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#main form input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
#main form button {
  
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}



button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
#main form .cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
#main form .cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
/*#main form .container {
  padding: 16px;
}*/

/* The Modal (background) */
#main .modal {
  display: none; /* Hidden by default */
  /*position: fixed;*/ /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  position:fixed;
  box-shadow:none;
  outline:none;
  outline:none;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color:white;

  padding-top: 50px;
}

/* Modal Content/Box */
#main form .modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
#main form .close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

#main form .close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  #main form .cancelbtn,#main form .signupbtn {
     width: 100%;
  }
}
#id01{
  text-align:center;
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

  <a class="navbar-brand" href="../index.php">BestPythonTutorials<y style="color:lime;">.com</y></a>
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
        <a class="nav-link" href="../index.php">Home</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="../home.php" target="_self">Python<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="../django/home_django.php" target="_self">Django</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="../tkinter/home_tkinter.php" target="_self">Tkinter</a>
      </li>
      <li class="nav-item active mr-auto ml-auto">
        <a class="nav-link" href="../pygame/home_pygame.php" target="_self">Pygame</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="../flask/home_flask.php" target="_self">Flask</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="../pandas/home_pandas.php" target="_self">Pandas</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="../matplotlib/home_matplotlib.php" target="_self">Matplotlib</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="../html/home_html4.php" target="_self">HTML</a>
      </li>
    <div class="btn-group dropleft" style="border-radius:1px!important;">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" style="border-radius:1px!important;" id="more">More</button>
        <div class="dropdown-menu">
            <a href="../html/home_html4.php" class="dropdown-item">HTML</a>
            <a href="../css/home_css.php" class="dropdown-item">CSS</a>
            <a href="../javascript/home_javascript.php" class="dropdown-item">Javascript</a>
            <a href="../jquery/home_jquery.php" class="dropdown-item">JQuery</a>
            <a href="../php/home_php.php" class="dropdown-item">Php</a>
            <a href="../sass/home_sass.php" class="dropdown-item">Sass</a>
            <a href="../bootstrap/home_bootstrap.php" class="dropdown-item">Bootstrap 4</a>
            <a href="../svg/home_svg.php" class="dropdown-item">SVG</a>
             <div class="dropdown-divider"></div>
            <a href="../clanguage/home_c.php" class="dropdown-item">C</a>
            <a href="../cpp/home_cpp.php" class="dropdown-item">C++</a>
            <a href="../csharp/home_csharp.php" class="dropdown-item">C#</a>
            <a href="../java/home_java.php" class="dropdown-item">Java</a>
            <div class="dropdown-divider"></div>
            <a href="../nodejs/home_node.php" class="dropdown-item">NodeJS</a>
            <a href="../expressjs/home_express.php" class="dropdown-item">ExpressJS</a>
            <a href="../angularjs/home_angularjs.php" class="dropdown-item">Angular JS</a>
            <div class="dropdown-divider"></div>
            <a href="../ds/ds_home.php" class="dropdown-item">Data Structures</a>
           <a href="../algo/algo_home.php" class="dropdown-item">Algorithms</a>
        </div>
    </div>
    </ul>
  </div>
</nav>  
  <!--navbar-->
  <!--vertical menu-->
  <div class="menu mt-1" style="height:100%;overflow:auto;">
    <ul class="mt-1">
     <li style="box-shadow:1px 1px white;background-color:white;background-image:none!important;padding:0px;border: 3px solid #a54eee;"><h4 style="text-align:center;font-family: 'Roboto', sans-serif;height:30px;line-height:55px;color:#a54eee;background-color:white;">PYGAME TUTORIAL</h4></li><br>
    <li style="background-image:linear-gradient(#4537d1,#4537d1);border-top:1px solid white;border-bottom:1px solid white;"><a href="home_seaborn.php"  target="_self">Pygame Home</a></li>
   <li><a href="intro_pygame.php"  target="_self">Introduction</a></li>
    <li><a href="intallation_pygame.php"  target="_self">Installation</a></li>
   <li><a href="simple_app_pygame.php"  target="_self">Simple Pygame Application</a></li>
   <li><a href="interactivity_pygame.php"  target="_self">Interactivity</a></li>
   <li><a href="adding_functionality_pygame.php"  target="_self">Adding Functionalities</a></li>
   <li><a href="basic_movement_pygame.php"  target="_self">Basic Movement</a></li>  
   <li><a href="adding_images_pygame.php"  target="_self">Adding Images</a></li>
   <li><a href="character_pygame.php"  target="_self">Character</a></li>
   <li><a href="working_with_sounds_pygame.php"  target="_self">Working With Sounds</a></li>
   <li><a href="projectile_pygame.php"  target="_self">Projectile</a></li>
   <li><a href="geometric_drawing_pygame.php"  target="_self">Geometric Drawing</a></li>
   <li><a href="fonts_texts_pygame.php"  target="_self">Fonts and Texts</a></li>
   <li><a href="input_models_pygame.php"  target="_self">Input Models</a></li>
   <li><a href="scene_logic_pygame.php"  target="_self">Scene Logic</a></li>
   <li><a href="conclusion_pygame.php"  target="_self">Conclusion</a></li>
    </ul>
      
  </div>
  <!--vertical menu end-->
  <!---top menu-->
  <div class="container" style="position:absolute;top:100px;font-family: 'Oswald', sans-serif;z-index:1;" >        
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" style="border:none!important;" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
   

     <a href="" style="border:none;color:white;"><h1 id="tag1">PYGAME TUTORIAL</h1></a>
   <a href="home_seaborn.php"  target="_self" style="color:white;">Pygame Home</a>
   <a href="intro_pygame.php"  target="_self">Introduction</a>
   <a href="installation_pygame.php"  target="_self">Environment Setup</a>
   <a href="simple_app_pygame.php"  target="_self">Simple Pygame Application</a>
   <a href="interactivity_pygame.php"  target="_self">Interactivity</a>
   <a href="adding_functionality_pygame.php"  target="_self">Adding Functionalities</a>
   <a href="basic_movement_pygame.php"  target="_self">Basic Movement</a>  
   <a href="adding_images_pygame.php"  target="_self">Adding Images</a>
   <a href="character_pygame.php"  target="_self">Character</a>
   <a href="working_with_sounds_pygame.php"  target="_self">Working With Sounds</a>
   <a href="projectile_pygame.php"  target="_self">Projectile</a>
   <a href="geometric_drawing_pygame.php"  target="_self">Geometric Drawing</a>
   <a href="fonts_texts_pygame.php"  target="_self">Fonts and Texts</a>
   <a href="input_models_pygame.php"  target="_self">Input Models</a>
   <a href="scene_logic_pygame.php"  target="_self">Scene Logic</a>
   <a href="conclusion_pygame.php"  target="_self">Conclusion</a>
  </div>
</div>
</div>
        
        

        <!--<div class="container-fluid sticky-top tm" style="background-image: linear-gradient(#4537d1,#4537d1);">
        <span style="font-size:35px;cursor:pointer;color:white;font-family: 'Noto Serif', serif;"  onclick="openNav()" class="text-center">&#9781;<topics>TOPICS MENU</topics> 
        </span>
           </div>-->
  <!--top menu ends-->
  <!--main content section-->
  <section class="container-fluid text-center" id="content" style="width:79.5%;background-color:white;font-family: 'Baloo Thambi 2', cursive;font-size:18px;position:absolute;top:60px;right:0px;padding:0px;"> 
    <!----------------------------ADS------------------->
    <div class="ad mb-1" style="height:90px;width:100%;">
    </div>
    <!-------------------------------ADS---------------->
           <button class="btn btn-success" onclick="prev()" id="prev" style="color:white;position:absolute;left:15%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;"><i class=" fa fa-chevron-left"></i>  Home</button>
           <button class="btn btn-success" onclick="next()" id="next" style="color:white;position:absolute;right:10%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;"> Next <i class=" fa fa-chevron-right"></i></button>
           <!--<button class="btn btn-success" id="next" style="color:white;position:absolute;right:15%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;" onclick="next()">Next  <i class=" fa fa-chevron-right"></i></button>--><br><br>
<div style="padding:10px;">
  
  
<!--<div class="container">
<div class="gcse-search" data-mobileLayout="enabled"></div>

</div>-->


<!--search starts-->
<div id="search-box" class="container">
   <script>
     (function() {
     var cx = "016236012273495808262:cabujlbzuwi";
     var gcse = document.createElement("script");
     gcse.type = "text/javascript";
     gcse.async = true;
     gcse.src = "https://cse.google.com/cse.js?cx=" + cx;
     var s = document.getElementsByTagName("script")[0];
     s.parentNode.insertBefore(gcse, s);
     })();
     window.onload = function()
     { 
     var searchBox =  document.getElementById("gsc-i-id1");
     searchBox.placeholder="Type Your Search...";
     searchBox.title="Type Your Search..."; 
     }
   </script>
   <gcse:search></gcse:search>
</div><br>
<!--search ends--><h3 class="text-left" style="color: #a54eee;"></h3>
<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//bestpythontutorials.com/pygame/home_pygame.php" style="background-color:#3377ff;color:white;border-radius:10px;padding:1px;font-size:15px;" id="facebookshare" class="mr-2 pl-2 pr-2"> <i class="fa fa-facebook-f"></i> Share </a>
<a href="https://twitter.com/intent/tweet?text=http%3A//bestpythontutorials.com/pygame/home_pygame.php" style="background-color:#1ac6ff;color:white;border-radius:10px;padding:1px;font-size:15px;" id="facebookshare" class="mr-2 pl-2 pr-2"> <i class="fa fa-twitter"></i> Tweet </a>
<a href="https://www.youtube.com/channel/UC_pPPgwvndi8f2RkbkbvOIA" target="_blank" style="background-color:red;color:white;border-radius:10px;padding:1px;font-size:15px;" class="pl-2 pr-2 ml-1" id="facebookshare">   <i class="fa fa-youtube"></i>Youtube </a>
<!--content goes here-->
<div id="main">
<h3 class="text-center mt-4" style="color:#a6a6a6;">AUDIENCE</h3>
<p style="text-align:justify;">This tutorial is designed for both beginners and working professionals to enhance their skills by Learning Tkinter and developing GUI or Desktop Applications with it.It's made with absolute love.</p>

<h3 class="text-center mt-4" style="color:#a6a6a6;">PREREQUISITES</h3>
<p style="text-align:justify;">For sure the prerequisite for this course is the knowledge of <a href="../home_python.php" style="color:grey;text-decoration:none;"> Python Programming Language <img src="../django/link.png" style="height:12px;"></a> and OOPs Concept of Python is also required because you might need it while creating widgets and OOPs is considered as best Programming Paradigm.</p>


<h3 class="text-center mt-4" style="color:#a6a6a6;">OVERVIEW</h3>
<p style="text-align:justify;">This course is created with a great effort and if you want that we should make more Courses like this.Please Support us by following us on Twitter and Facebook.Your small response will have a great impact on us :)</p>











<div id="id01" class="modal text-center ml-auto mr-auto" style="box-shadow:none;border:none;outline: none;z-index:99;">
  <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"><h2 class="text-center">&times;</h2></span>--><br>
  <form class="modal-content" action="https://formspree.io/moqkdqrk" method="POST" style="box-shadow:none;border:none;outline: none;">
    <div class="container" style="box-shadow:none;border:none;outline: none;">
      <h1>Subscribe for Updates</h1>
      <p></p>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Your Name..." name="name" required>
      <label for="_replyto"><b>Email</b></label>
      <input type="text" placeholder="Enter Your Email..." name="_replyto" required>
      
      <label>
        <p class="text-center"><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</p>
      </label>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Register</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>













</div>
<br><br>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;border-radius:50px;" class="btn btn-danger text-left pl-5 pr-5">Subscribe for Updates</button><br><br>
<button class="btn btn-default" style="border-radius:50px;background-color:orangered;color:white;padding-left:63px;padding-right:63px;" onclick="window.open('https://www.patreon.com/skvprogrammer','_self')">Become a Patron</button><br> 
<br>
<div id="myModalfeedback" class="modal modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="border-radius:10px!important;background-image: linear-gradient(to right,#a54eee,#4537d1);color:white;">
      <div class="modal-header">
        
        <h5 class="modal-title">Suggest Improvements</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form style="text-align: center;" action="https://formspree.io/mlepjgpw"
  method="POST">
    <label>Your Email</label><br>
    <input type="email" name="_replyto" placeholder="Type your Email..." style="margin-top:10px;margin-bottom:13px;padding:2px;width:70%;padding-left:2px;padding-right:2px;border:1px solid lightgrey;border-radius:5px;" autocomplete="off"><br>
    <label>Your Suggestion</label><br>
    <textarea name="message" placeholder="Type you Suggestion..." style="height:80px;width:165px;resize:none;margin-top:15px;width:70%;border:1px solid lightgrey;outline:none;padding-left:2px;padding-right:2px;border-radius:5px;"></textarea><br><br>
    <button type="submit" class="btn" id="click-me" style="border-radius:50px;color:white;background-color:#ff5c62;">Submit Your Suggestion</button>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default text-light" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<button class="btn btn-success" style="box-shadow:none;outline:none;border-radius:50px;" data-toggle="modal" data-target="#myModalfeedback">Feedback/Suggest Improvement</button>

<!--------------------------------COMMENTS----------------------COMMENTS-------------------------------------------------------->
<h3 class="mt-5 mb-4 text-left" style="margin-top:100px!important;">Comments</h3>


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
      <br><br><br>  
      <hr>
      <div class="container text-center ml-auto mr-auto">
      <div class="row text-center" id="btngrupx">

      <button class="btn mt-2 mb-2 col-lg-6 col-md-12 col-sm-6"  style="background-color:lightgrey;border-radius:1px!important;" onclick="codespeedy()"><i class="fa fa-print"></i>  <b>PRINT THIS PAGE</b></button><!--
      <button class="btn mt-2 mb-2 col-lg-2 col-sm-6"  style="background-color:lightgrey;border-radius:1px!important;" onclick="window.open('../aboutus.html')"><b>ABOUT US</b></button>-->
      <button class="btn mt-2 mb-2 col-lg-6 col-md-12 col-sm-6"  style="background-color:lightgrey;border-radius:1px!important;" onclick="window.open('https://devtipsntricks.com')"><i class="fa fa-newspaper-o"></i> <b>BLOGS</b></button>
      <button class="btn mt-2 mb-2 col-lg-6 col-md-12 col-sm-6"  style="background-color:lightgrey;border-radius:1px!important;" onclick="window.open('https://www.facebook.com/satyam.varman.12')"><i class="fa fa-thumbs-up"></i> <b>LIKE US ON FACEBOOK</b></button>
       <button class="btn mt-2 mb-2 col-lg-6 col-md-12 col-sm-6"  style="background-color:lightgrey;border-radius:1px!important;" onclick="window.open('../aboutus.html')"><i class="fa fa-address-book"></i> <b>ABOUT US</b></button>
    </div>
  </div>
      <hr>
      

        
 </div>
        

        
             <button class="btn btn-success" onclick="prev()" id="prev" style="color:white;position:absolute;left:10%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;"><i class=" fa fa-chevron-left"></i>Home</button>
             <button class="btn btn-success" onclick="next()" id="next" style="color:white;position:absolute;right:10%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;"> Next <i class=" fa fa-chevron-right"></i></button>
           <!--<button class="btn btn-success" id="next" style="color:white;position:absolute;right:10%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;" onclick="next()">Next  <i class=" fa fa-chevron-right"></i></button>--><br>
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
        <p>If you find any errors in this tutorials don't hesitate to <a href="mailto:report@bestpythontutorials.com" style="color:white;text-decoration:underline;">mail us</a></p>
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
    <div class="modal-content" style="background-image:linear-gradient(192deg,#a54eee,#4537d1);color:white;">
      <div class="modal-header">
        
        <h5 class="modal-title text-center">Contact Developer</h5>
      </div>
      <div class="modal-body">
         <p style="text-align:left;">Hey,I am Satyam Kumar Verman ,the creator of this awesome site I take individual projects of Web Design & Development,Android App Development and Software Development.You can contact me by mailing  at <br><a href="maito:satyamvarman2004@gmail.com" style="color:white;"> satyamvarman2004@gmail.com</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default text-white" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<!-----------------------------------MODAL ENDS------------------------->
        
           <footer style="height:auto;background-color: #0d0d0d;font-family: 'Roboto', sans-serif!important;" class="text-center container-fluid" id="foot"> 
             <button class="btn btn-success col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" data-target="#myModal" data-toggle="modal"><i class="fa fa-flag"></i>  Report Error</button>


             <button class="btn btn-success col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;"><i class="fa fa-envelope"></i><a href="mailto:" style="color:white;text-decoration:none;"> Mail us</a></button>
             <button class="btn btn-success col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" onclick="myopen(3)"><i class="fa fa-address-book"></i>      Contact us</button>
             <button class="btn btn-success col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" onclick="myopen(4)"><i class="fa fa-user-secret"></i>        Privacy Policy</button>
             <button class="btn btn-success col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" onclick="myopen(5)"><i class="fa fa-info"></i>    Terms and Conditions</button>
             <button class="btn btn-success col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" data-target="#myModalone" data-toggle="modal"><i class="fa fa-envelope-o"></i>     Contact Developer</button>
             <div class="row" style="font-family: 'Raleway', sans-serif;">
             <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Programming Language</h4></li>
               <li><a href="../home.php">Python</a></li>
               <li><a href="../java/home_java.php">Java</a></li>
               <li><a href="../clanguage/home_c.php">C</a></li>
               <li><a href="../cpp/home_cpp.php">C++</a></li>
               <li><a href="../csharp/home_csharp.php">C#</a></li>
               <li><a href="../php/home_php.php">Php</a></li>
               <li><a href="../javascript/home_javascript.php">JavaScript</a></li>
             </ul>
               <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Web Technologies</h4></li>
               <li><a href="../html/home_html4.php">HTML</a></li>
               <li><a href="../html/home_html5.php">HTML5</a></li>
               <li><a href="../css/home_css.php">CSS</a></li>
               <li><a href="../css/home_cssthree.php">CSS3</a></li>
               <li><a href="../javascript/home_javascript.php">Javascript</a></li>
               <li><a href="../jquery/home_jquery.php">JQuery</a></li>
             </ul>
               <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Web Frameworks</h4></li>
               <li><a href="../bootstrap/home_bootstrap.php">Bootstrap 4</a></li>
               <li><a href="../django/home_django.php">Django</a></li>
               <li><a href="../flask/home_flask.php">Flask</a></li>
               <li><a href="../angularjs/home_angularjs.php">AngularJS</a></li>
               <li><a href="../nodejs/home_node.php">Node.js</a></li>
               <li><a href="../expressjs/home_express.php">ExpressJS</a></li>
               <li><a href="../reactjs/home_react.php">React</a></li>
               <li><a href="../javascript/home_ecmascript.php">Ecmascript</a></li>
               <li><a href="../sass/home_sass.php">Sass</a></li>

             
             </ul>

               <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Databases</h4></li>
               <li><a href="../sql/home_sql.php">SQL</a></li>
               <li><a href="../mysql/home_mysql.php">MySQL</a></li>
               <li><a href="../mongodb/home_mongodb">MongoDB</a></li>  
               <li class="mt-5"><h4>Others</h4></li>
               <li><a href="../ds/ds_home.php">Data Structures</a></li>
               <li><a href="../algo/algo_home.php">Algorithms</a></li>  
               <li><a href="../index.php">More Tutorials</a></li>     
             </ul>
           </div>
             <button class="btn btn-success mb-5 mt-5" style="border-radius:1px;" onclick="window.open('../quizzes.php','_blank')"><div class="spinner-grow spinner-grow-sm"></div>Quizzes</button><br>
             

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
    <a href="../index.php" style="color:white;text-decoration:none;font-family: 'Raleway', sans-serif;"> BestPythonTutorials.com :</a>All Rights are Reserved<br><br>
    <applause-button style="width: 48px; height: 48px;margin:0px auto;color:rgb(0,200,0)!important;"/>
  </div>
           </footer>
           </section>


  <!--main content section ends-->
   <script>
    var num;
    function myopen(num){
      if(num == 1){
        window.open("../reporterror.php");
      }else if(num == 2){
        window.open("../mailus.php");
      }else if(num == 3){
        window.open("../contactus.php");
      }else if(num == 4){
        window.open("../privacypolicy.php");
      }else if(num == 5){
        window.open("../termsandconditions.php");
      }else{
        window.open("../contactdeveloper.php");
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
  window.open("intro_seaborn.php","_self");
}
function prev(){
  window.open("../index.php","_self");
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

/**********scroll functionality ends********/
/*function spt(){
  window.open("intro3.php","_self");
}*/
</script>
  <script>
        
    function codespeedy(){
      /*var print_div = document.getElementById("main");
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();*/
window.print();

// This is the code print a particular div element
    }
   
  </script>


</body>
</html>