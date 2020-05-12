<html>
<head><title>Agriculturist Login</title>
<meta name="viewport" content="width=device-width"/>
<style type="text/css">
div.r{

position:relative;top:10px;left:30px;

}
body
{
margin:0;
padding:0;
background:url(4.png);
width:100%;
height:100%;
font-family: 'Voces', cursive;
font-style: italic;
overflow-y: hidden;
color:white;
}
.new
{
color:white;
}
.overlay{

height:100vh;
position:absolute;
top:0;
width: 100vw;
left:0;
background:#225470   ;
z-index:1;
opacity: 0.65;
}
img.ref{position:fixed;top:200px;right:500px;}

#tb1{
position:absolute;
top:50%;
left:80%;
transform:translate(-40%,-40%);
box-sizing:border-box;
transation:.5s;
border-radius:5px;
background:transparent;
box-shadow:0 10px 20px rgba(0,0,0,30);
width:350px;
z-index:1;
}
.reg{background:#33442a;
color: #fff;
font-size:1.2rem;
padding:0.5rem .5rem;
text-decoration: none;
opacity:40%;


}
.reg
{
background:blue;
border:#345b36 2px;
color:white;
margin:2px 3px;
padding:14px 17px;
border-radius:10px 10px;
z-index:2;
font-size:15px;
}
.inp{
width:300px;
height:30px;
font-size:20px;
font-family: 'Voces', cursive;
font-style: italic;
}

.gr1{opacity:1;}
.inputbox 
{
padding-left:20px;
}
.inputbox input
{
border:none;
border-bottom:2px solid black;
outline:none;
height:40px;
font-size:16px;
padding-left:20px;
z-index:3;

}
 *[placeholder] {
    color: black !important;
}
</style>
<script>
function f()
{
var a=document.getElementById("p").value;
var b=document.getElementById("un").value;
if((a.length!=8)||(b.length>30)||(b.length==0))
{
alert("Entered name or password limit is incorrect");
document.getElementById("un").value="";
document.getElementById("p").value="";
}
else
{
var a=document.getElementById("frm1");
a.setAttribute("action","validate.php");
}
}
</script>
</head>
<body>

<div class="overlay">
</div>
<div class="r"><img src="logo.png" height="550px" width="550px" class="gr1"/><img src="6.gif" width="500px" height="500px" class="ref" class="gr1"/></div><br><br>
<div border=1 id="tb1" >
<form action="" method="post" id="frm1">
<h1 style="color:white;" align="center" class="new">Login Details</h1>
<center>
<div class="inputbox">
<p class="new">User Name</p>
<input type="text" name="uname" id="un" max="100" min="3"placeholder="Enter the User Name" class="inp"></div><br>
<div class="inputbox">
<p class="new">Password<p>
<input type="password" name="password" id="p" placeholder="Enter the Password" class="inp" /><br>
<br>Must be 8 Character Length
</div><br><br><center>
<div class="button">
<input type="submit" name="submit"  value="Log In" class="reg" onclick="f();"/>&nbsp&nbsp&nbsp&nbsp
<input type="reset"  name="clear" value="Clear" class="reg" /></div><br><br></center>
</div>
</form>
</body>

