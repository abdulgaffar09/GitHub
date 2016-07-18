<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Random Login Form</title>
    
    
    
    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(http://cdn1.stumagz.com/images/573403b938bf0stryimg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
a:link, a:visited {
    background-color: #fff;
    color: #a18d6c;
    padding: 14px 75px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: #fff;;
}
    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>
  <script>

function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
function CheckId(val) {
  if (val=="") {
  	alert(val);
    document.getElementById("txtHint").innerHTML="<?php echo "<font color='red'>Enter valid userid</font>" ?>";
  } 
  // else
  // {
  // if (window.XMLHttpRequest) {
  //   // code for IE7+, Firefox, Chrome, Opera, Safari
  //   xmlhttp=new XMLHttpRequest();
  // } else { // code for IE6, IE5
  //   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  // }
  // xmlhttp.onreadystatechange=function() {
  //   if (xmlhttp.readyState==4 && xmlhttp.status==200) {
  //     document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
  //   }
  // }
  // xmlhttp.open("GET","LoginController.php?q="+val,true);
  // xmlhttp.send();
// }
}
  </script>
      <!-- <script src="{{asset('js/ajax-crud.js')}}"></script> -->

  <body>
  <?php ?>
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Login<span>To Read</span></div>
		</div>
		<br>
		<div class="login">
		<form  action="{{ URL ::to('/login') }}" method="get">

				<input type="text" placeholder="username" name="Uid" id="Uid" onblur="CheckId(this.value)" required ><span id="txtHint"></span><br>
				<input type="password" placeholder="password" name="password" id="pwd" required><br>
				<input type="submit" value="Login" class="log">
		</form>
		<a href="Register" value="Sign Up" class="register">Sign Up(New User?)</a>
		</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    
    <?php ?>
  </body>
</html>
