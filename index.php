<?php 
session_start();

	include("connection.php");
	include("functions.php");

  


	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Leaf_now</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css">

<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=-7fxd7eoGt1cXOnwfzxMzn7CnpA3jvU0MBAdzxI_7VBP1lRlegTqO4srqrMSO9BxCXkyPYFOEjJmgn0VW0YPQ_g-RlcXZ8_4nWrQ_94QkQo" charset="UTF-8"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js" ></script>



<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("Donate_seed.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("Plant.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("Planting.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
  }
}

.footer {
  position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #708090;
  color: white;
  text-align: center;
  }


@import url(http://fonts.googleapis.com/css?family=Raleway);
h1{
text-align: center;
}
#main {
width: 950PX;
margin: 50PX auto;
font-family: raleway;
}
#container {
width: 834px;
float: left;
border-radius: 10px;
font-family: raleway;
border: 2px solid #ccc;
padding: 10px 40px 11px;
margin: 16PX;
}
h2 {
background-color: #FEFFED;
text-align: center;
border-radius: 10px 10px 0 0;
margin: -10px -40px;
padding: 15px;
}
hr {
border: 0;
border-bottom: 1px solid #ccc;
margin: 10px -40px;
margin-bottom: 30px;
}
input[type=submit]{
width: 100%;
margin-top: 20px;
background-color: #FFBC00;
color: white;
border: 1px solid #FFCB00;
padding: 10px;
font-size: 20px;
cursor: pointer;
margin-bottom: 0px;
transition: all .2s ease-in-out;
}
input[type=number]{
width: 90%;
padding: 10px;
margin-top: 20px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 17px;
font-family: raleway;
}
input[type=submit]:hover{
transform: scale(1.1);
}
.box-shadow-preview{
position: relative;
background-color: #FFFFFF;
border-width: 7px;
border-style: solid;
border-color: white;
border-radius: 0px;
box-shadow: 0px 5px 17px 1px #99A3AD, 0px 0px 40px #EEEEEE;
}
.charity{
background-color: #fff;
border: 1% solid #ccc;
width: 23%;
height: 250px;
margin-left: 1%;
margin-right: 1%;
box-shadow: 0 0 5px rgba(0, 121, 193, 1);
float: left;
}
.donate{
margin-bottom: 30px;
width: auto;
height: 250px;
}
.charity img{
width: 150px;
height: 100px;
padding: 25px 25px 0 25px;
}
.charity p{
text-align: center;
}
.charity p a {
text-decoration: none;
color: rgb(0, 92, 132);
font-weight: 600;
}
.simplePopup {
display:none;
position:fixed;
border: 4px solid #FD703F;
background:#fff;
z-index:3;
width: 290px;
min-width: 290px;
padding: 12px;
text-align: center;
}

.simplePopupClose {
float:right;
cursor:pointer;
margin-left:10px;
margin-bottom:10px;
}
.simplePopup h3{
text-align: center;
font-family: raleway;
}
.simplePopup b{
font-size: 30px;
}
.simplePopup img{
position: relative;
background-color: #FFFFFF;
border-width: 7px;
border-style: solid;
border-color: rgb(253, 112, 63);
border-radius: 0px;
width: 100px;
}
.simplePopupBackground {
display:none;
background:#000;
position:fixed;
height:100%;
width:100%;
top:0;
left:0;
z-index:1;
}

#return {
width: 492px;
height: 350px;
float: left;
border-radius: 10px;
font-family: raleway;
border: 2px solid #ccc;
padding: 10px 40px 11px;
margin: 16PX;
}
#return h3#success {
text-align: center;
font-size: 24px;
margin-top: 50px;
color: green;
}
#return P {
margin-left: 122px;
}
#return .back_btn {
margin-top: 51px;
text-align: center;
}
#btn {
width: 100%;
background-color: #FFBC00;
color: white;
border: 2px solid #FFCB00;
padding: 10px 70px;
font-size: 20px;
cursor: pointer;
border-radius: 5px;
margin-bottom: 15px;

}
a{
text-decoration:none;
color: cornflowerblue;
}
#wiki{
float: right;
}
#return h3#fail{
text-align: center;
font-size: 24px;
margin-top: 50px;
color: red;
}

{box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 10px;
  border: 3px solid #f1f1f1;
  z-index: 7;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
</head>
<body>

	<a href="logout.php">Logout</a>

<div class="navbar">
  <a href="#home">Home</a>
  <a href="javascript:generatePDF()" id="downloadButton">Click to download</a>
  <a href="https://www.studytoday.net/tree-donation/" target="_blank">News</a>
  <div class="dropdown">
    <button class="dropbtn">Click here 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Donate</a>
      <a href="#">Sell</a>
      <a href="#">Buy</a>
    </div>
  </div> 
</div>


<div class="bgimg-1">
  <div class="caption">
  <span class="border">LEAF NOW</span>
  <h2 >Join us in planting trees to RESTORE OUR EARTH!</h2>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Plant Tree for better future</h3>
  <h4><center>Feel free to plant a tree</center></h4>
  <p>We all have lived our childhood by running and playing around trees, watching the beautiful flowers bloom on long branches, collected different sized leaves from various trees, peeped from the window to catch a glimpse of the twittering birds etc.Since the very beginning trees have given us the gift of life's essentials, such as food and oxygen. Many generations passed and we discovered other many uses of trees and exploited them for our survival.</p>
</div>



<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
  <p>We donate seeds/plants to each one across India</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
  <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">NEVER STOP PLANTING TREES</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
  <a href="https://docs.google.com/forms/d/e/1FAIpQLScnSYl1j_xz7e_u_5gEzSc7f7pA7uStnf3d1oZarVgKbyjkzQ/viewform?embedded=true" target="_blank">Requested to fill up this form!</a>

  </div>
</div>



<div class="bgimg-1">
  <div class="caption">
  
 <span class="border">Donate Now</span>
  </div>


</div>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat with us</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


<div class="footer">
  <p>&copy; 2021 3Ps.com</p>
</div>

<script>
  async function generatePDF() {
    document.getElementById("downloadButton").innerHTML = "Currently downloading,Please wait";

    var downloading = document.getElementById("whatToPrint");
    var doc = new jsPDF('1', 'pt');

    //await html2canvas(downloading, {
     // width:550
    //}).then((canvas) => {
     // doc.addImage(canvas.toDataURL("image/png"), 'PNG', 5, 5, 500, 500);
    //})

    doc.save("Document.pdf");

    document.getElementById("downloadButton").innerHTML = "Click to Download";

  }

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>

</body>
</html>