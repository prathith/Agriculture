<!DOCTYPE html>
<html>
<title>Agriculturist</title>
<meta name="viewport" content="width=device-width"/>
<style type="text/css">
reg{color:White;font-family:"Comic Sans MS";font-weight:Bold;font-size:50px;text-shadow:3px 3px black;}	
div.r{position:relative;top:40px;}	
div.a{position:relative;top:-60px;left:20px;}	

.bttn{
background:#33FF68;
color: #fff;
font-size: 1.2rem;
padding:1rem 2rem;
text-decoration: none;

border-radius: 200%;
size:1000px;

}

#animate1 {
 
  position: absolute;
  left:300px;top:200px;
  z-index:0;
}
#animate2 {
 
  position: absolute;
  left:300px;top:200px;
  z-index:0;
}
#animate3 {
 
  position: absolute;
  left:300px;top:200px;
  z-index:0;
}
#animate4 {
 
  position: absolute;
  left:300px;top:200px;
  z-index:0;
}
#animate5 {
 
  position: absolute;
  left:300px;top:200px;
  z-index:0;
}
#animate6 {
 
  position: absolute;
  left:300px;top:200px;
  z-index:0;
}
#animate7 {
 
  position: absolute;
  left:200px;top:200px;
  z-index:0;
}
#gif{
position:absolute;
left:800px;top:50px;
}
#logo{
position:absolute;
left:160px;top:120px;
z-index:1;
}
</style>
<script>
function myMove1() {
var pos1 = 300;
 var elem1 = document.getElementById("animate1");  
var pos2 = 280;
 var elem2 = document.getElementById("animate2");
  var id1 = setInterval(frame1, 10);
var pos3 = 300;
 var elem3 = document.getElementById("animate3");   
 var id2 = setInterval(frame2, 10);
 var id3 = setInterval(frame3, 10);
var pos=300;
 var elem = document.getElementById("animate4");
 var id4 = setInterval(frame4, 10);
 var id5 = setInterval(frame5, 10);
var pos4=300;
var elem4 = document.getElementById("animate6");   
  var id6 = setInterval(frame6, 10);
var pos5=300;
var elem5 = document.getElementById("animate5"); 
  function frame1() {
 
    if (pos1 == 100) {
      clearInterval(id1);
    } else {
      pos1--; 
      elem1.style.top = '170px'; 
      elem1.style.left = pos1 + 'px'; 
    }
  }
function frame2() {   
    if (pos2 == 80) {
      clearInterval(id2);
    } else {
      pos2--; 
      elem2.style.top = pos2 + 'px'; 
       
    }
  }
function frame3() {
    if (pos3 == 100) {
      clearInterval(id3);
    } else {
      pos3--; 
      elem3.style.left = pos3 + 'px'; 
    elem3.style.top= '400px';
    }
  }
function frame4() {
   
    if (pos == 500) {
      clearInterval(id4);
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
     
    }
  }
function frame5() {
 
    if (pos4 == 500) {
      clearInterval(id5);
    } else {
      pos4++; 
      elem4.style.top='400px';
      elem4.style.left = pos4 + 'px'; 
    }
  }
function frame6() {
 
    if (pos5 == 500) {
      clearInterval(id6);
    } else {
      pos5++; 
      elem5.style.top = '180px'; 
      elem5.style.left = pos5 + 'px'; 
    }
  }
}
</script>
</head>
<body bgcolor="grey" onload="myMove1()">
<div class="r" style="background-color:green;"><marquee direction="right" behavior="slide"   scrollamount=20 width=710  >
<reg class="ref">Welcome </reg></marquee></marquee></div>
<div class="a">
<img src="logo.png" height="150px" width="150px"/>
</div>

<center>
<div style="position:absolute;top:160px;left:210px;" align="center">
<a id ="animate1" class="bttn">Page1</a>
<a id ="animate2"class="bttn">Page2</a>
<a id ="animate3"class="bttn">Page3</a>
<a id ="animate4"class="bttn">Page4</a>
<a id ="animate5"class="bttn">Page5</a>
<a id ="animate6"class="bttn">Page6</a>
<div id="gif"><img src="" height=px width=px /></div>
<div id="logo"><img src="logo.png" height=370px width=370px /></div>
</div ><center>
<h1 align="center" style="position:absolute;top:100px;right:570px;font-size:50px;color:white;text-shadow:3px 3px black;">To</h1>
<h1 align="center" style="position:absolute;top:160px;right:400px;font-size:50px;color:white;text-shadow:3px 3px black;">Agriculture Portal</h1>
</body>
</html>
