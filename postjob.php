<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>





h1{	font-family:verdana;
	color: #003366;
	overflow:auto;
	}
	
p{
color:#014a8e;

}
.job{

	align:center;
	box-shadow: 0 8px 6px -6px black;
	width:70%;
	height:15%;
}
	
body {margin:0;}
#im{float:right;}
.fa {
  padding: 5px;
  font-size: 15px;
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
  font-size: 16px;
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

.nb{
text-decoration:none;
color:white;
font-size:10px;
font-family:Verdana;
}

.box__dragndrop,
.box__uploading,
.box__success,
.box__error {
  display: none;
}

.box__button{
background-color:#003366;
color:white;
border:none;
width:130px;
height:35px;
font-family:verdana;
font-size:20px;
}
.box__input{
background-color:#003366;
color:white;
height:100px;
width:250px;
padding:100px;
opacity:0.99;
}


</style>
<body>
<div>
<ul>
<li><h1>MyPage</h1></li>
		<div style="float:right">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
		</div>

</ul>
</div>
<div class="icon-bar">

  <a href="index.php" class="nb">Home</a> 
  <a href="#" class=" nb dropbtn">search</a> 
  <a href="contactus.php" class=" nb dropbtn">Contact Us</a> 
  <a href="Aboutus.php" class=" nb dropbtn">About Us</a>
  <a href="registrationform.php" class=" nb dropbtn">Event Registration</a>
  <a href="userdetails.php" class="nb dropbtn">Your Profile</a> 

</div>


<div style="border:thin;border-color:#003366;">
<center><h2 style="color:#003366;font-family:Verdana;">Post Your Jobs here</h2></center>
	<div class=form>
	<center>
	<form class="box" method="post" action="postdb.php" enctype="multipart/form-data">
	<p>Title of the job</p>
	<input type="text" name="title"><br>
	<p>details of the job</p>
	<textarea name="details" cols="70" rows="6">Tell us more about the job....</textarea>
	<br><br>
  <div class="box__input">
    <input class="box__file" type="file" name="file">
    <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
	<br>
   
  </div>
  <div class="box__uploading">Uploading&hellip;</div>
  <div class="box__success">Done!</div>
  <div class="box__error">Error! <span></span>.</div>
<p>please include tags</p>

<input type="text" name="tags">

<br>
<br>
 <button type="submit" class="box__button" name="submit">Submit</button>
</form>
	</center>
	</div>


</div>