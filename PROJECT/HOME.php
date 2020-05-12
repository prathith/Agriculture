<!DOCTYPE html>
<html>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: ; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top:-50px;
    font-family: 'Voces', cursive;
    font-style: italic;
    z-index: 1;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;

}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.popup{
text-align:justify;
font-size:20px;
font-weight:transparent;
line-height: 200%;
color:black;
}
.head{
font-family: "Times New Roman", Times, serif;
font-size:40px;
color:white	;
}
.head1{
font-family: "Times New Roman", Times, serif;
font-size:35px;
font-weight:bold;
color:white;
text-align:center;
position: absolute;
top:130%;
padding:10px;
}
#intro{
position:absolute;
top:25%;
left:25%;
transform:translate(-40%,-40%);
box-sizing:border-box;
transation:.5s;
border-radius:5px;
background:transparent;
box-shadow:0 10px 20px rgba(0,0,0,30);
width:700px;
z-index:1;
font-family: 'Voces', cursive;
    font-style: italic;
font-size:20px;
font-weight:bold;
color:black;
text-align:justify;
padding:10px;

}
.imgpr{
background:transparent;
overflow-y: none;
}

.head2{
background: linear-gradient(to right, rgba(255,0,0,0.5), rgba(255,0,0,2));
border-radius: 25px 25px;
width:100vw;


}

button{

    background-color:#4d94ce;
    text-align: center;
    color:white;
    font-size: 20px;
    padding: 10px;
    border:black;
    font-family: 'Voces', cursive;
    font-style: italic;
    
}
#pp{
font-family: 'Voces', cursive;
    font-style: italic;
font-size:50px;
font-weight:bold;
color:blue;
position:absolute;
top:120%;
left:10%;
width:800px;
text-align: justify;
background-color: gray;
border-radius:25px 25px;
padding:10px; 
}
#r
{
position: absolute;
top:0;
left:0;
height:100vh;
width:100vw;
z-index:0;
}
.de
{
position: absolute;
top:100%;
left:0;
height:100vh;
width:100vw;
}
.s{
position: absolute;
top:202%;
left:0;
height:100vh;
width:100vw;

}
.t{color:white;}
.v{
position: absolute;
top:10%;
}
.q{
text-align:center;
}

.rrr{
z-index:1;
color:black;
}
</style>
<?php
session_start();
print_r($GLOBALS);
if(isset($_SESSION['user']))
{
echo "<img src='homee.jpg' height=600px width=1280px class='imgpr' id='r'>";
echo "<h1 id='r' style='font-family:Voces, cursive;
    font-style:italic;font-size:45px;position:absolute;top:-25px;left:40px;'>Welcome"." ".$_SESSION['user']."</h1>";}
else
echo "Welcome ";
?>
</head>
<body>
<div id="intro">
&nbsp Modern agriculture is an evolving approach to agricultural innovations and farming practices that helps farmers increase efficiency and reduce the amount of natural resources—water, land, and energy—necessary to meet the world’s food, fuel, and fiber needs. Modern agriculture is driven by continuous improvements in digital tools and data, as well as collaborations among farmers and researchers across the public and private sectors.

<div class="head2"><p class="head1">How will climate change affect farming?</p></div>
<button id="myBtn" style="position:absolute;left:30%;top:220%;">VIEW ANSWER</button></div>

<div id="myModal" class="modal">

  <div class="modal-content" style="background: linear-gradient(to right, rgba(0,255,0,0.8), rgba(0,255,0,2));">
    <span class="close">&times;</span>
<p class="head q" style="color:black;"><u >How will climate change affect farming?</u></p>
    <p class="popup" >Climate change is already affecting farmers. As global temperatures rise, farmers are facing unique and unexpected challenges. In some regions, climate change is resulting in longer growing seasons, erratic and extreme weather events, and less (or more) rainfall. This makes an already unpredictable way of life even more uncertain. The agriculture industry is investing in helping to offer farmers a number of avenues to combat impacts of climate change. Software companies are creating hyper-accurate weather-forecasting programs; seed companies are using breeding technology to help plants be more tolerant of water-limited conditions; and many universities are researching how farmers can best manage unplanned shifts in temperature and rain—all factors connected to climate change, and all impacting the farm.<br>

	</p>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<img src="log.jpg" height=600px width=1280px class="imgpr de">

<div id="pp"><p class="head q">Growing Organic and Conventional Crops</p><p class="popup t">Farmers have many options when it comes to the types of crops they can grow on their land. Many see benefits in growing both organic and conventional.We talked to one farmer whose family has seen success adding an organic crop to their operation.</p>
<a href="sub.html"><center><button style="background-color:#4d94ce;position:absolute;top:110%;left:44%;">MORE</button></center></a></div><br>
<img src="flower.jpg" height=600px width=1280px class="imgpr s">
<div style="color:white;position:absolute;top:220%;left:5%;" class="popup">
<h1>Technology Spotlight</h1>
<h1 style="font-weight:bold;font-size:45px;">The Science Inside a GMO Seed</h1>
<div style="width:600px;font-family: 'Voces', cursive;
    font-style: italic;">&nbsp&nbsp&nbsp&nbsp&nbspOver time, the agriculture industry has evolved to meet many challenges, like climate change. Genetically modified seed can help farmers become more efficient by empowering them to use less of our natural resources. Many people have questions about how genetic modification works and why farmers might choose to grow GM seeds.<br>
<br><a href="gmo.php"><center><button style="background-color:#4d94ce;color:white;">MORE</button></center></a>

<a href="query.html"><center><button style="background-color:#4d94ce;color:white;position:fixed;top:10px;left:70%;font-size:20px;padding:2px;">SUBMIT QUERY</button></center></a>
<a href="ab.html"><center><button style="background-color:#4d94ce;color:white;position:fixed;top:10px;left:85%;font-size:20px;padding:2px;">ABOUT US</button></center></a>

</div>
</body>
</html>

