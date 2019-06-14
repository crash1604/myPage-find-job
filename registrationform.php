<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
h1{	font-family:verdana;
	color: #003366;
	overflow:auto;
	}
	
p{
color:#014a8e;
font-family:Verdana;
font-size:14px;

}
.form{
	padding:100px;
	align:center;
	box-shadow: 0 8px 6px -6px black;
	width:70%;
	border: 1px;
}
	
body {margin:0;}
#im{float:right;}
.fa {
  padding: 5px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}
.icon-bar {
  width: 100%;
  background-color: #003366;
  overflow: auto;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.icon-bar a {
  float: left;
  width: 15%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

li {
  float: left;
}

img
{
	float:left;
	width: 120px;
	height:120px;
	overflow:auto;
}

.icon-bar a:hover {
  background-color: #003366;
}
button{
background-color:#003366;
color:white;
border:none;
width:130px;
height:35px;
font-family:verdana;
font-size:20px;
float:right;
}
.active {
  background-color: #003366;
}
.form1 {	align:center;
	box-shadow: 0 8px 6px -6px black;
	width:70%;
}
</style>
<title></title>
</head>

<body>
<div>
<ul>
<li><h1>MyPage</h1></li>
		<div style="float:right">
<a href="" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
		</div>

</ul>
</div>
<div class="icon-bar">
 <a class="active" href="index.php"><i class="fa fa-home"></i></a> 
  <a href="#"><i class="fa fa-search"></i></a> 
  <a href="contactus.php"><i class="fa fa-envelope"></i></a> 
  <a href="Aboutus.php"><i class="fa fa-globe"></i></a>
  <a href="registrationform.php"><i class="fa fa-file"></i></a> 
  <a href="userdetails.php"><i class="fa fa-user"></i></a>
</div>
<div class="form" style="border:thin">
	<br>
	<form>
	<p>Full Name:</p>
	<input type="text" value="" name="name">
	<br>
	<p>Email:</p>
	<input type="email" required>
	<br>
	<p>Contact details</p>
	<input type="number">
	<br>
	<p>Applying as(Please include your skills aswell):</p>
    <textarea name="textarea" cols="50" rows="4">
	</textarea>
	</form>

</div>


	</body>
</html>