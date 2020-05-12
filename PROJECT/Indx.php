<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<title>Welcome Portal</title>
<style type="text/css">
*{
box-sizing:boder-box;
}
body{
margin:0;
font-size:1.2rem;
line-height:1.5;
color:#333;
font-family: 'Voces', cursive;
font-style: italic;
overflow-x: hidden;
}
.v-header{
height:100vh;
width: ;
display: flex;
align-items:center;
color: #fff;

}
.container{
max-width: 900px;
padding-left: 1rem;
padding-right: 1rem;
margin:auto;
text-align: center;
}
.fullscreen-video{
position:absolute;
top:0;
left:0;
width:100%;
height: 100vh;
overflow:hidden;
}
.overlay{

height:100vh;
position:absolute;
top:0;
width: 100vw;
left:0;
background:#225470;
z-index:1;
opacity: 0.65;
}
.content{
z-index:2;
}
.content h1{
font-size: 50px;
margin-bottom:0;
}
.header-content p{
font-size:1.5rem;
display:block;
padding-bottom:2rem;
}
@media(max-width:960px){
padding-left: 3rem;
padding-right: 3rem;
}
.btn{
background:#33FF68;
color: #fff;
font-size: 1.2rem;
padding:1rem 2rem;
text-decoration: none;


}
</style>
</head>
<body>
<header class="v-header container">
<div class="fullscreen-video">
<video src="agri.mp4" autoplay="true" loop="true" width="auto" height="auto" >
</div>
<div class="overlay">
</div>
<div class="content">
<h1>Welcome to Agriculture Hub</h1>
<p>Here we provide the suggestions and solution to the problems in the way of farming
and cultivation and help you to transform from the old cultivating technique to Modern technique</p><br>
<a href="register.php"class="btn">Register</a>
<a href="login.php"class="btn">Login</a>

</div>
</header>
</video>
</body>
</html>
	
