<!DOCTYPE html>
<html lang="en-Us">
    <head>
        <title>Selection - Pandas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <script type="text/javascript" src="//cdn.datacamp.com/dcl-react.js.gz"></script>
        <script charset="UTF-8" src="//web.webpushs.com/js/push/21f7140e081ac8d7144ec5c3ffb92c8c_1.js" async></script>
         <script async src="https://cse.google.com/cse.js?cx=016236012273495808262:cabujlbzuwi"></script><link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text&display=swap" rel="stylesheet">
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
           <meta name="description" content="Selection in Pandas - Selection Pandas Data  - BestPythonTutorials.com" />
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

 
        #footlink li a{
          font-family: 'Big Shoulders Stencil Text', cursive!important;
        font-size:18px!important;
        margin:0px!important;
        }
        #footlink li h4{
          font-size:28px!important;
        }
 footer{
  font-family: 'Big Shoulders Stencil Text', cursive!important;
 }
        button{
          font-family: 'Big Shoulders Stencil Text', cursive!important;
          font-size:18px!important;
        }


        button{
          box-shadow:none!important;
          outline:none!important;
        }

        .modal-footer button{
          box-shadow:none!important;
          outline:none!important;
        }
        .ad{
         
         width: 99%!important;
        }
        @media(max-width: 1203px){
          .ad{
            width:100%!important;
        }
      }
        .link{
          color:grey;
          text-decoration:none;
        }

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
          #facebookshare{
            box-shadow:2px 2px lightgrey!important;
          
         
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
      .menu li{
      list-style:none;
      height:30px;
      width:19.8%;
      background-image: linear-gradient(192deg,#4537d1,#a54eee);
      text-align:left;
      line-height:0px;
      font-size:17px;
      padding:20px;
       }
   .menu li a{
     font-family: 'Big Shoulders Stencil Text', cursive!important;
   }
    .menu li:hover{
      background-image:linear-gradient(to right,#4537d1,#4537d1);
      cursor:pointer;
    }
    .menu li a{
      text-decoration:none;
      color:white;
      /*font-family: 'Expletus Sans', cursive;*/
     font-size:20px!important;

    }
   .menu{
      margin-left:-35px;
    }
    @media(max-width:1300px){
      .menu li{
      font-size:15px!important;
    }
    }
    .menu li h6{
      font-weight:bolder;
    }
    /*all css*/
     #topnav{
                background-image: linear-gradient(to right,#4537d1,#a54eee);
            }
            #topnav ul li a{
                color:white;
            }
            #topnav ul li a{
                font-family:Comic Sans MS, Comic Sans, cursive;
            }
             #topnav{
                background-image:linear-gradient(to right,#4537d1,#a54eee);
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
  background-color:#04D2C8;
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
          color:#a54eee!important;
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
  top:0;
  font-size:20px!important;
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
  line-height:auto;
  /*margin:0 auto;*/
  /*background-color: #a54eee;*/
  background-image:linear-gradient(145deg,#4537d1,#a54eee);
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
/*changed on 14-11-2020*/
/*.gsc-search-box .gsc-input{
  margin-top: -28px;
}*/

svg{
margin-top:-16px;
}
/**************************************testcodeends******************/
.dropdown-menu a{
  padding:10px;
  background-image:linear-gradient(192deg,#4537d1,#a54eee);
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



.spt {
  border-radius: 4px;
  background-image:linear-gradient(198deg,#4537d1,#a54eee);
  border: none;
  box-shadow:1px 1px #f2f2f2;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
padding:8px;
  width: auto;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.spt span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.spt span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.spt:hover span {
  padding-right: 25px;
}

.spt:hover span:after {
  opacity: 1;
  right: 0;
}



.formxyz {
  color:white;
}

.containerx { max-width:400px;
  border-radius:10px!important;
  padding: 20px;
  /*background-color: #f1f1f1;*/
  background-image:linear-gradient(163deg,#4537d1,#a54eee);
}

.text,.submit {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.checkbox {
  margin-top: 16px;
}

.submit {
  background-image:linear-gradient(#c21500,#ffc500); 
  color: white;
  border: none;
}

.submit:hover {
  opacity: 0.8;
}
i:hover{
  cursor:pointer;
}

/*code change*/

.newcolorbtn{
  background-color:#04D2C8;
  color:white;
  border:1px solid #04D2C8!important;
  box-shadow:none;
  outline: none;
}
.newcolorbtn:hover{
  background-color:transparent;
  color:#04D2C8!important;
  border:1px solid #04D2C8!important;
}
#skvspatron:hover{
  background-color:transparent!important;
  color: orangered!important;
  border:1px solid orangered!important;
}

applause-button .style-root{
  fill:#04D2C8!important;
  color:#04D2C8!important;
  stroke: #04D2C8!important;
}

.menu{
  height:520px!important;
  overflow-y:scroll;
  width:23%;

  position:sticky;
  top:100px;
  bottom:0;
}
.menu li{
  width:100%;
}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 8px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background-image: linear-gradient(to bottom,#4537d1,#a54eee); 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background-image: linear-gradient(to bottom,#4537d1,#a54eee);
}

#skvscontribute:hover{
   background-color:transparent!important;
  color: red!important;
  border:1px solid red!important;

}
#skvscontribute{
  box-shadow:none!important;
  outline:none!important;
}
.modal-body,.modal-body p{
  font-family: 'Big Shoulders Stencil Text', cursive!important;
}
.dcl__Button-module__primary--2SH7R {
    /* background-color: #03ef62; */
    background-image: linear-gradient(to top,#4537d1,#a54eee)!important;
    border: none!important;
    color: white;
    font-family: 'Raleway';
    border-radius: 1px!important;
}
.dcl__Button-module__primary--2SH7R:hover {
    /* background-color: #03ef62; */
    background-image: linear-gradient(to top,#4537d1,#a54eee)!important;
    border: none!important;
    color: white;
    font-family: 'Raleway';
    border-radius: 1px!important;
}
.lm_header {
    height: 30px;
    background-color: #f2f2f2;
}
.dcl__Footer-module__footer--3yGWB {
    height: 48px;
    background: #f2f2f2!important;
    text-align: left;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    align-content: center;
}

.datacamp-exercise{
  z-index:0!important;
}

h1,h2,h3,h4,h5,h6{
  font-family: 'Big Shoulders Stencil Text', cursive!important;
}

#tag1{
  font-size:25px!important;
}
body p{
  font-family: "euclid_circular_a","Source Sans Pro","Helvetica Neue","Helvetica","Arial",sans-serif!important;
}


/*toc css*/
/* The side navigation menu */
.sidenav {
  height: 100vh; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position:absolute; /* Stay in place */
  z-index: 1; /* Stay on top */
  right:0px;
  top:0;
  color:white!important;
  background-image:linear-gradient(to left,#a54eee,#4537d1); 
  overflow-x: hidden;
 /* Disable horizontal scroll */
 /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */}

/* The navigation menu links */
.sidenav a {
  /*padding: 8px 8px 8px 32px;*/
  text-decoration: none;
  font-size: 18px;
  color: white!important;
  display: block;
  transition: 0.3s;
  text-align:left;
  padding-left:15px;
  padding-top:5px;
  padding-bottom:8px;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  /*position: absolute;
  top: 0;
  left: 0px;
  */font-size: 36px;
  margin-left: 0px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

#main{
  padding:0px!important;
}
code {
    background-color: #f2f2f2;
    border-radius: 4px;
    font-size: 19px;
}

#arrayslist:hover{
  cursor:pointer;
}
#programslist{
text-align:justify;
margin-top:20px;
padding:0px;
}
#programslist li{
  list-style:none;
  margin-bottom:2px!important;
  
}
#programslist li a{
  text-decoration: none;
  color:#a54eee;
  font-size:20px;
  transition:color 0.5s ease-in-out;

}
#programslist li a:hover{
  color:#4537d1!important;
  
}
#programslist li{
  width:inherit;
  height:auto;

  border-radius:20px;
  padding:10px;
  border:1px solid #a54eee;
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
 <nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-fixed-top topulli p-4" style="background-image:linear-gradient(192deg,#4537d1,#a54eee);font-family: 'Big Shoulders Stencil Text', cursive!important;">
        <!--<span style="font-size:35px;cursor:pointer;color:white;font-family: 'Noto Serif', serif;"  onclick="openNav()" class="text-center">&#9781;<i class="fa fa-bars"></i>
       &#9776; 
        </span>-->
        <button class="navbar-toggler buttonmenu"  type="button" data-toggle="collapse" onclick="openNav()" style="display:none;">

    <!--<span class="navbar-toggler-icon"></span>-->
    &#9776;
  </button>

  <a class="navbar-brand" href="../index.php" style="font-size:25px;">BestPythonTutorials<y style="color:lime;">.com</y></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="menubutton1">
    <!--<span class="navbar-toggler-icon"></span>-->
    &#9776;
  </button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="menubuttoncross" style="display:none;font-size:40px!important;">
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
      <li class="nav-item active mr-auto ml-auto">
        <a class="nav-link" href="../pandas/home_pandas.php" target="_self">Pandas</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="../tkinter/home_tkinter.php" target="_self">Tkinter</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="../flask/home_flask.php" target="_self">Flask</a>
      </li>
      <li class="nav-item mr-auto ml-auto">
        <a class="nav-link" href="../numpy/home_numpy.php" target="_self">Numpy</a>
      </li>
    
    </ul>
  </div>
</nav>  
  <!--navbar-->
  <!--vertical menu-->
 
    <ul class="menu text-center">
       <img src="pandasbanner.png" class="ml-auto mr-auto img-fluid mt-3 mb-3 text-center" style="width:100%;height:190px;">
    <li style="box-shadow:1px 1px white;background-color:white;background-image:none!important;padding:0px;"><h4 style="text-align:center;font-family: 'Big Shoulders Stencil Text', cursive!important;height:30px;line-height:55px;color:#a54eee;background-color:white;font-size:35px!important;">PANDAS TUTORIAL</h4></li><br>
    <li><a href="home_pandas.php"  target="_self">Pandas Home</a></li>
    <li><a href="intro_pandas.php"  target="_self">Introduction</a></li>
    <li><a href="installation_pandas.php"  target="_self">Environment Setup</a></li>
    <li><a href="datastructures_pandas.php"  target="_self">Data Structures</a></li>
    <li><a href="series_pandas.php"  target="_self">Series</a></li>
    <li><a href="panel_pandas.php"  target="_self">Panel</a></li>
    <li><a href="dataframe_pandas.php"  target="_self">Data Frame</a></li>
    <li><a href="basic_functionalities_pandas.php"  target="_self">Basic Functionalities</a></li>
    <li><a href="readcsv_pandas.php"  target="_self">Read CSV</a></li>
    <li><a href="writecsv_pandas.php"  target="_self">Write CSV</a></li>
    <li><a href="indexing_pandas.php"  target="_self">Indexing</a></li>
    <li><a href="iteration_pandas.php"  target="_self">Iteration</a></li>
    <li><a href="sorting_pandas.php"  target="_self">Sorting</a></li>
    <li><a href="aggregation_pandas.php"  target="_self">Aggregation</a></li>
    <li><a href="concatenation_pandas.php"  target="_self">Concatenation</a></li>
    <li><a href="data_visualization_pandas.php"  target="_self">Data Visualization</a></li>
    <li><a href="sparse_data_pandas.php"  target="_self">Sparse Data</a></li>
    <li><a href="iotools_pandas.php"  target="_self">IO Tools</a></li>
    <li><a href="dataoperations_pandas.php"  target="_self">Data Operations</a></li>
    <li><a href="multiple_indexing_pandas.php"  target="_self">Multiple Indexing</a></li>
    <li><a href="reindexing_pandas.php"  target="_self">Reindexing</a></li>
    <li><a href="reset_index_pandas.php"  target="_self">Reset Index</a></li>
    <li><a href="set_index_pandas.php"  target="_self">Set Index</a></li>
    <li><a href="time_series_pandas.php"  target="_self">Time Series</a></li>
    <li><a href="time_offset_pandas.php"  target="_self">Time Offset</a></li>
    <li><a href="periods_pandas.php"  target="_self">Periods</a></li>
    <li><a href="working_with_text_pandas.php"  target="_self">Working with Text Data</a></li>
    <li><a href="view_data_pandas.php"  target="_self">Viewing Data</a></li>
    <li style="background-image:linear-gradient(#4537d1,#4537d1);border-top:1px solid white;border-bottom:1px solid white;"><a href="selection_pandas.php"  target="_self">Selection</a></li>
    <li><a href="manipulating_data_pandas.php"  target="_self">Manipulating Data</a></li>
    <li><a href="merging_joining_pandas.php"  target="_self">Merging and Joining</a></li>
    </ul>
      

  <!--vertical menu end-->
  <!---top menu-->
  <div class="container" style="position:absolute;top:100px;font-family: 'Oswald', sans-serif;z-index:1;" >        
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" style="border:none!important;" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
   

     <a href="" style="border:none;color:white;"><h1 id="tag1">PANDAS TUTORIAL</h1></a>
         <a href="home_pandas.php"  target="_self">Pandas Home</a>
            <a href="intro_pandas.php"  target="_self">Introduction</a>
    <a href="installation_pandas.php"  target="_self">Environment Setup</a>
    <a href="datastructures_pandas.php"  target="_self">Data Structures</a>
    <a href="series_pandas.php"  target="_self">Series</a>
    <a href="panel_pandas.php"  target="_self">Panel</a>
    <a href="dataframe_pandas.php"  target="_self">Data Frame</a>
    <a href="basic_functionalities_pandas.php"  target="_self">Basic Functionalities</a>
    <a href="readcsv_pandas.php"  target="_self">Read CSV</a>
    <a href="writecsv_pandas.php"  target="_self">Write CSV</a>
    <a href="indexing_pandas.php"  target="_self">Indexing</a>
    <a href="iteration_pandas.php"  target="_self">Iteration</a>
    <a href="sorting_pandas.php"  target="_self">Sorting</a>
    <a href="aggregation_pandas.php"  target="_self">Aggregation</a>
    <a href="concatenation_pandas.php"  target="_self">Concatenation</a>
    <a href="data_visualization_pandas.php"  target="_self">Data Visualization</a>
    <a href="sparse_data_pandas.php"  target="_self">Sparse Data</a>
    <a href="iotools_pandas.php"  target="_self">IO Tools</a>
    <a href="dataoperations_pandas.php"  target="_self">Data Operations</a>
    <a href="multiple_indexing_pandas.php"  target="_self">Multiple Indexing</a>
    <a href="reindexing_pandas.php"  target="_self">Reindexing</a>
    <a href="reset_index_pandas.php"  target="_self">Reset Index</a>
    <a href="set_index_pandas.php"  target="_self">Set Index</a>
    <a href="time_series_pandas.php"  target="_self">Time Series</a>
    <a href="time_offset_pandas.php"  target="_self">Time Offset</a>
    <a href="periods_pandas.php"  target="_self">Periods</a>
    <a href="working_with_text_pandas.php"  target="_self">Working with Text Data</a>
    <a href="view_data_pandas.php"  target="_self">Viewing Data</a>
    <a href="selection_pandas.php"  target="_self" style="color:white;">Selection</a>
    <a href="manipulating_data_pandas.php"  target="_self">Manipulating Data</a>
    <a href="merging_joining_pandas.php"  target="_self">Merging and Joining</a>
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
           <button class="btn newcolorbtn" onclick="prev()" id="prev" style="color:white;position:absolute;left:15%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;"><i class=" fa fa-chevron-left"></i>  Previous</button>
           <button class="btn newcolorbtn" onclick="next()" id="next" style="color:white;position:absolute;right:10%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;"> Next <i class=" fa fa-chevron-right"></i></button>
           <!--<button class="btn newcolorbtn" id="next" style="color:white;position:absolute;right:15%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;" onclick="next()">Next  <i class=" fa fa-chevron-right"></i></button>--><br><br>
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
<!--search ends--><h3 class="text-left" style="color: #a54eee;">Selection - Pandas</h3>
<div class="row ml-auto mr-auto" style="width:40%!important;">
<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//bestpythontutorials.com/pandas/selection_pandas.php" style="background-color:#3377ff;color:white;border-radius:1px;padding:1px;font-size:15px;" id="facebookshare" class="col-lg-3 col-sm-3 col-md-3 mb-1"> <i class="fa fa-facebook-f"></i> Share </a>
<a href="https://twitter.com/intent/tweet?text=http%3A//bestpythontutorials.com/pandas/selection_pandas.php" style="background-color:#1ac6ff;color:white;border-radius:1px;padding:1px;font-size:15px;" id="facebookshare" class="col-lg-3 col-sm-3 col-md-3 mb-1"> <i class="fa fa-twitter"></i> Tweet </a> 
<a href="https://www.youtube.com/channel/UC_pPPgwvndi8f2RkbkbvOIA" target="_blank" style="background-color:red;color:white;border-radius:1px;padding:1px;font-size:15px;" class="col-lg-3 col-sm-3 col-md-3 mb-1" id="facebookshare">   <i class="fa fa-youtube"></i> Youtube </a>
<a style="background-color:orangered;color:white;border-radius:1px;padding:1px;font-size:15px;" class="col-lg-3 col-sm-3 col-md-3 mb-1" id="facebookshare" onclick="languagedisplay()">   <i class="fa fa-language"></i><text>Language</text> </a></button>


</div>
<!--content goes here-->
<div id="main">
<p style="text-align:justify;" class="mt-4">This is the beginning of a four-part series on how to select subsets of data from a pandas DataFrame or Series. Pandas offers a wide variety of options for subset selection which necessitates multiple articles. This series is broken down into the following four topics.</p>
<ul style="text-align:justify;font-size:19px;">
<li>Selection with [], .loc and .iloc
<li>Boolean indexing
<li>Assigning subsets of data
<li>How NOT to select subsets of data
</ul>

<h4 class="text-left mt-4" style="color:#a54eee;">The importance of making subset selections</h4>
<p style="text-align:justify;">
You might be wondering why there need to be so many articles on selecting subsets of data. This topic is extremely important to pandas and it’s unfortunate that it is fairly complicated because subset selection happens frequently during an actual analysis. Because you are frequently making subset selections, you need to master it in order to make your life with pandas easier.
</p>

<h4 class="text-left mt-4" style="color:#a54eee;">What is subset selection?</h4>
<p style="text-align:justify;">Before we start doing subset selection, it might be good to define what it is. Subset selection is simply selecting particular rows and columns of data from a DataFrame (or Series). This could mean selecting all the rows and some of the columns, some of the rows and all of the columns, or some of each of the rows and columns.
</p>

<p style="text-align:justify;" class="mt-4">You can check the <a href="./indexing_pandas.php" style="color:grey;text-decoration:none;"> Indexing <img src="../django/link.png" style="height:12px;"></a> chapter for all the above operations in detail..</p>







<div id="id01" class="modal text-center ml-auto mr-auto" style="box-shadow:none;border:none;outline: none;z-index:99;">
  <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"><h2 class="text-center">&times;</h2></span>--><br>
  <form class="modal-content" action="https://formspree.io/moqkdqrk" method="POST" style="box-shadow:none;border:none;outline: none;">
    <div class="container" style="box-shadow:none;border:none;outline: none;">
      <h1>Subscribe for Updates</h1>
      <p></p>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Your Name..." name="name" required autocomplete="off">
      <label for="_replyto"><b>Email</b></label>
      <input type="text" placeholder="Enter Your Email..." name="_replyto" required autocomplete="off">
      
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
  <button class="btn btn-default" style="border-radius:50px;background-color:orangered;color:white;padding-left:63px;padding-right:63px;" id="skvspatron" onclick="window.open('https://www.patreon.com/skvprogrammer','_self')">Become a Patron</button><br> 
<br>
<div id="myModalfeedback" class="modal modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="border-radius:10px!important;color:white;    background-image: linear-gradient(to right,#a54eee,#4537d1);border:none!important;">
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
    <input type="email" name="_replyto" placeholder="Type your Email." style="margin-top:10px;margin-bottom:13px;padding:2px;width:70%;padding-left:2px;padding-right:2px;border:1px solid lightgrey;border-radius:10px;" required><br>
    <label>Your Suggestion</label><br>
    <textarea name="message" placeholder="Type you Suggestion." style="height:80px;width:165px;resize:none;margin-top:15px;width:70%;border:1px solid lightgrey;outline:none;padding-left:2px;padding-right:2px;border-radius:10px;" required></textarea><br>

    <br>
    <button type="submit" class="btn newcolorbtn mt-5" id="click-me" style="border-radius:50px;">Submit Your Suggestion</button>

  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default text-light" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<button class="btn newcolorbtn" style="box-shadow:none;outline:none;border-radius:50px;padding-left:20px;padding-right:20px;" data-toggle="modal" data-target="#myModalfeedback">Feedback/Suggest Improvement</button>

<br>

<button class="btn btn-default mt-4" style="border-radius:50px;background-color:red;color:white;padding-left:83px;padding-right:83px;" id="skvscontribute" data-toggle="modal" data-target="#myModalContribute">Contribute</button>

<br>
<button class="btn newcolorbtn mt-4" style="box-shadow:none;outline:none;border-radius:50px;padding-left:95px;padding-right:95px;" onclick="window.open('https://forum.bestpythontutorials.com','_blank')">Forum</button>

<div id="myModalContribute" class="modal modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="border-radius:10px!important;color:white;background-image: linear-gradient(to right,#a54eee,#4537d1);border:none!important;">
      <div class="modal-header">
        
        <h5 class="modal-title">How you can Contribute to us?</h5>
    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <ul style="font-size:20px;text-align:justify;">
          <li><a href="https://bestpythontutorials.com/blogs/write-your-article" style="color:white!important;">Write Articles for us</a></li>
          <li>Suggest Topics for Blogs and send them via <a href="mailto:contact@bestpythontutorials.com" style="color:white!important;text-decoration:underline;">E-Mails.</a></li>
          <li>And finally keep visiting our Website.</li>          
        </ul>

    
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default text-light" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


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
        

        
             <button class="btn newcolorbtn" onclick="prev()" id="prev" style="color:white;position:absolute;left:10%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;"><i class=" fa fa-chevron-left"></i>Previous</button>
             <button class="btn newcolorbtn" onclick="next()" id="next" style="color:white;position:absolute;right:10%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;"> Next <i class=" fa fa-chevron-right"></i></button>
           <!--<button class="btn newcolorbtn" id="next" style="color:white;position:absolute;right:10%;border-radius:1px!important;font-family: 'Roboto Condensed', sans-serif;" onclick="next()">Next  <i class=" fa fa-chevron-right"></i></button>--><br>
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
        
            <footer style="height:auto;background-image:linear-gradient(75deg,#a54eee,#4537d1);font-family: 'Roboto', sans-serif!important;" class="text-center container-fluid pt-5" id="foot"> 

             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" data-target="#myModal" data-toggle="modal"><i class="fa fa-flag"></i>  Report Error</button>


             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;"><i class="fa fa-envelope"></i><a href="mailto:contact@bestpythontutorials.com" style="color:white;text-decoration:none;"> Mail us</a></button>
             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" onclick="myopen(3)"><i class="fa fa-address-book"></i>      Contact us</button>
             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" onclick="myopen(4)"><i class="fa fa-user-secret"></i>        Privacy Policy</button>
             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" onclick="myopen(5)"><i class="fa fa-info"></i>    Terms and Conditions</button>
             <button class="btn newcolorbtn col-lg-4 col-md-4 col-sm-12 mt-3" style="border-radius:1px;" data-target="#myModalone" data-toggle="modal"><i class="fa fa-envelope-o"></i>     Contact Developer</button>
             <div class="row" style="font-family: 'Raleway', sans-serif;">
             <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Our Tutorials</h4></li>
               <li><a href="../home.php">Python</a></li>
               <li><a href="../django/home_django.php">Django</a></li>
               <li><a href="../flask/home_flask.php">Flask</a></li>
               <li><a href="../numpy/home_numpy.php">Numpy</a></li>
               <li><a href="../pandas/home_pandas.php">Pandas</a></li>
               <li><a href="../matplotlib/home_matplotlib.php">Matplotlib</a></li>
              
             </ul>
               <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Tutorials Coming Soon</h4></li>
               <li><a href="../datascience/home_datascience.php">Data Science</a></li>
               <li><a href="../sql/home_sql.php">SQL</a></li>
               <li><a href="../ds/home_ds_algo.php">DS/ALGO</a></li>
               <li><a href="../mobile_app/home_mobile_app_development.php">Mobile App Development</a></li>
               <li><a href="../ethical_hacking/home_ethical_hacking.php">Ethical Hacking</a></li>
               <li><a href="../index.php#all_courses">See all</a></li>
             </ul>
               <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Resources</h4></li>
               <li><a href="../ide/onlineide.php">Online IDE</a></li>
               <li><a href="../comp/ home_competitive_programming.php">Competitive Programming</a></li>
               <li><a href="../blogs/index.php">Community Blogs</a></li>
               <li><a href="../videos/home_videos.php">Video Tutorials</a></li>
               <li><a href="../ebooks/home_ebooks.php">EBooks</a></li>
               

             
             </ul>

               <ul style="list-style:none;color:white;" id="footlink" class="mt-5 col-lg-6 col-md-12 col-sm-12">
               <li><h4>Contribute</h4></li>
               <li><a href="https://bestpythontutorials.com/blogs/write-your-article"> Write articles for us</a></li>
               <li><a href="mailto:contact@bestpythontutorials.com">Suggest Topics for Blogs</a></li>
               <li><a href="mailto:report@bestpythontutorials.com">Report Errors(if any)</a></li>
               <li><a href="#social">Share our Tutorials</a></li>
               <li><a href="#">Finally Keep Visiting our site</a></li>  
                   
             </ul>
           </div>
           <button class="btn newcolorbtn mb-5 mt-5 pl-5 pr-5" style="border-radius:1px;padding-left:30px;padding-right:30px;" onclick="window.open('../quizzes.php','_blank')">Quizzes</button>
  <button class="btn newcolorbtn mb-5 mt-5 pl-5 pr-5" style="border-radius:1px;padding-left:30px;padding-right:30px;" onclick="window.open('https://shop.bestpythontutorials.com','_blank')">Shop</button>           

               <!-- Social buttons -->
        <h3 style="color:white;">Follow us on</h3>
  <ul class="list-unstyled list-inline text-center" style="color:white;" id="social">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1" onclick="window.open('https://www.facebook.com/skvprogrammer')" id="facebook">
        <i class="fa fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fa fa-twitter" onclick="window.open('https://twitter.com/bestpythontuto2')"> </i>
      </a>
    </li>
    <!--<li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fa fa-google-plus"> </i>
      </a>-->
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fa fa-instagram" onclick="window.open('https://www.instagram.com/skvprogrammer/?hl=en')"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fa fa-youtube" onclick="window.open('https://www.youtube.com/channel/UC_pPPgwvndi8f2RkbkbvOIA')"> </i>
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
                <div class="footer text-center py-3 text-light" style="font-family: 'Big Shoulders Stencil Text', cursive!important;font-size:20px;">&copy <?php
    $copyYear = 2020; // Set your website start date
    $curYear = date('Y'); // Keeps the second year updated
      echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
  ?> Copyright:
    <a href="../index.php" style="color:white;text-decoration:none;font-family: 'Big Shoulders Stencil Text', cursive!important;"> BestPythonTutorials.com :</a>All Rights are Reserved<br><br>
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
  window.open("manipulating_data_pandas.php","_self");
}
function prev(){
  window.open("view_data_pandas.php","_self");
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