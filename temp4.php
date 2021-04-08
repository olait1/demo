   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }
.navbar{
 background: transparent;
    overflow: hidden;
    position: relative;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, .2);
    width: 100%;
    transition: ease 2s;
z-index: 1;
}
.navbar a{
    color: #000;
    text-decoration: none;
    float: left;
    padding: 14px 16px;
    letter-spacing: 3px;
    font-size: 17px;
}
.navbar a:hover{
background: #ccc;
}
a.icon{
    display: none;
}
@media screen and (max-width: 600px) {
    .navbar{
        position: relative;
    }
    .navbar a:not(:first-child){
        display: none;
    }
    .navbar a.icon{
        display: block;
        position: absolute;
        right: 0;
        top: 0;
    }

    .navbar.responsive a{
        display: block;
        float: none;
    }

}
.bg{
    background-image: url("images/parallax1.jpg");
    background-attachment: fixed;
    background-position: center;
height: 660px;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
margin-bottom: 30px; 
padding-top: 20%;
}
.bg-content{
    background: #000;
    padding: 15px;
    color: #fff;
    margin: auto;
    width: 350px;
    letter-spacing: 5px;
    text-align: center;
   
}
@media screen and (max-width: 600px) {
    .bg{
        padding-top: 80%;
    }
    .bg-content{
        width: 200px;
    }
    
}
.about{
    margin: 0px 10%;
}
.about h2,center i{
    text-align: center;
    color:#555;
    margin-bottom: 15px;
}
.about p{
    text-align: justify;
    color: #555;
 margin: 20px 0;
 letter-spacing: 1px;
 line-height: 1.5em;
}
.about-name{
    text-align: center;
    width: 48%;
    float: left;
    margin-right: 50px;
}
.about-name img{
    width: 100%;
}
.about-name h3{
    margin-bottom: 20px;
}
.about-name img{
  opacity: .6;
}
.about-name img:hover{
    opacity: 1;
}

@media screen and (max-width: 600px) {
    .about-name{
        float: none;
        width: 100%;
    }  
}
.work{
    clear: both;
    margin: 20px;
}

.port{
    background:#222;height: 200px;
 overflow: hidden; 
 padding: 70px 10%;
  color: #fff; 
  width:100%;
}
.port .pro{
    float: left;
    margin: 0px 10%; 
}
@media screen and (max-width: 600px) {
    .port .pro{
    float: none;
    text-align: center;
    padding: 20px 0px;
  }

}
@media screen and (max-width: 600px) {
      .port{ height: 500px;
      }
   }
.parallex{
    background-attachment: fixed;
    background-image: url("images/parallax2.jpg");
    background-position:center;
    width: 100%; 
    height: 300px;
    text-align: center;
    padding: 80px;
    color: #fff;
    letter-spacing: 4px;
}
@media screen and (max-width: 600px) {
    .parallex{
        padding: 80px 0;
    }
}
.myWork{
    margin: 0px 15%;
    margin-top: 40px;
    
}
.myWork h4{
text-align: center;
font-size: 1.7em;
margin-bottom: 20px;
}
.myWork p{
    text-align: center;
    color: #555;
    margin-bottom: 15px;
}
.my{
    width: 23%;
    cursor: pointer;
    float: left;
    opacity: .8;
}
@media screen and (max-width: 600px) {
    .my{
        width: 100%;
        float: none;
    }
}
.my:hover{
    opacity: 1;
}
.my:not(:last-child){
    margin-right: 2%;
}
.my img{
width: 100%;
}
.my-modal{
    position: fixed;
    top: 0%;
    padding: 10% 25%;
    padding-bottom:100%; 
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0,.9);
    z-index: 1;
    display: none;
}

.close{
    color: #fff;
    font-size: 2em;

   cursor: pointer;
    /* float: right; */
    position: absolute;
    top: 0;
    right: 0;
}
.my-modal img{
width: 80%;

}
@media screen and (max-width: 600px) {
    .my-modal img{
        position: absolute;
top: 35%;
left: 0;
width: 100%;
    }    
}
.more{
    clear: both;
width: 100%;
margin-top: 30px;
}
.more button.btn{
    margin-top: 30px;
 /* margin-left:50% ; */
 padding: 15px;
 font-size: 16px;
 cursor: pointer;
 outline: none;
 border: none;
 background: #ccc;
 margin-bottom: 50px;
}
@media screen and (max-width: 600px) {
    
}
.more button.btn:hover{
background: #555;
color: #fff;
}
.bg-attachement{
    width: 100%;
    height: 300px;
    padding-top:150px ;
    background: url("images/parallax3.jpg");
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    margin-bottom: 50px;
}
.bg-attachement h1{
letter-spacing: 4px;
color: #fff;
text-align: center;
}
.contact-form{
    margin-top:30px;
     text-align:left; 
    margin:0px 30%;
    margin-bottom: 40px;
}
@media screen and (max-width: 600px) {
.contact-form{
    margin:0px 10%;
}}
.swing{
    margin-top: 30px;
}
.contact-form input.input{
width: 40%;
padding: 10px;
margin-top:30px;

}
.contact-form input#message{
    width: 80%;
}
@media screen and (max-width: 600px){
    .contact-form input.input,.contact-form input#message{
        width: 100%;
    }
}
button.send{
padding: 5px;
cursor: pointer;
border: none;
outline: none;
margin: 30px 0;
padding: 10px;
background: #000;
color: #fff;
}
button.send:hover{
background: #999;
}
.footer button{
padding: 10px;
border:none;
outline: none;
cursor: pointer;
background: #999;
margin-bottom: 30px;
}
.footer{
    height: 300px;
    width: 100%;
    color: #fff;
    background-color:black;
    padding-top:150px; 
    text-align: center;
}
.footer a{
    color: #fff;
}
#top{
    transition: 5s;
    text-decoration: none;
    padding: 5px;
    background: #ccc;
    color: #000;
}
</style>
<body>

    <div class="navbar" id="navbar" id="top">
        <a href="#top">HOME</a>
        <a href="#about">ABOUT</a>
        <a href="#portfolio">PORTFOLIO</a>
        <a href="#contact">CONTACT</a>
        <a href="#" class="icon" onclick="icon();">&#9776;</a>
    </div>
    <div class="bg">
   <div class="bg-content">
       <h2>MY WEBSITE LOGO</h2>
   </div>
   </div>
   <div class="about"   id="about">
       <h2>ABOUT ME</h2>
       <center><i>I love photography</i></center>
       <p>We have created a fictional "personal" website/blog, and
            our fictional character is a hobby photographer. Lorem ipsum
             dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
               minim veniam, quis nostrud exercitation ullamco laboris nisi 
               ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
               reprehenderit in voluptate velit esse cillum dolore eu fugiat 
               nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum consectetur 
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                 aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <div class="about-name">
                      <h3>MY NAME</h3>
                      <img src="images/avatar_hat.jpg" alt="">
                  </div>
                  <div class="about-content">
<p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit,
     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
       ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
       in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
       occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim 
       id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com
     modo consequat.</p>
                  </div>
                  <h3 class="work">Im really good at:</h3>
                  <p style="letter-spacing: 3px;">Photography</p>
                  <div class="photo" max="100" min="0" style="background:#ccc; margin-bottom:30px;  width: 100%">
                        <div class="photo" max="100" min="0" style="background:#555; width: 90%;padding: 10px 0;
                       font-size: 17px;  text-align: center; color: #fff;">90%</div>
                </div>
   
                <p style="letter-spacing: 3px;">Web Design</p>
                <div class="photo" max="100" min="0" style="background:#ccc; margin-bottom:30px;  width: 100%">
                      <div class="photo" max="100" min="0" style="background:#555; width: 85%;padding: 10px 0;
                     font-size: 17px;  text-align: center; color: #fff;">85%</div>
              </div>
              <p style="letter-spacing: 3px;">Photoshop</p>
              <div class="photo" max="100" min="0" style="background:#ccc; margin-bottom:30px;  width: 100%">
                    <div class="photo" max="100" min="0" style="background:#555; width:75%;padding: 10px 0;
                   font-size: 17px;  text-align: center; color: #fff;">75%</div>
            </div>
   </div>
   <div class="port" style="" id="portfolio">
    <div class="pro"><h2>14+</h2>
    <p>Partners </p></div>
    <div class="pro"><h2>14+</h2>
        <p>Partners </p></div>
        <div class="pro"><h2>14+</h2>
            <p>Partners </p></div>
            <div class="pro"><h2>14+</h2>
                <p>Partners </p></div>
   </div>
   <div class="parallex">
<h1>
    PORTFOLIO
    </h1>
   </div>
   <div class="myWork">
       <h4>MY WORK</h4>
       <p><i>Here are some of my latest lorem work ipsum tipsum.<br>
        Click on the images to make them bigger</i></p>
<div class="my"  onclick="my(0);">
    <img src="images/p1.jpg" alt="" id="my">
</div>
<div class="my"  onclick="my(1);">
    <img src="images/p2.jpg" alt="" id="my">
</div>
<div class="my"  onclick="my(2);">
    <img src="images/p3.jpg" alt="" id="my">
</div>
<div class="my"  onclick="my(3);">
    <img src="images/p4.jpg" alt="" id="my">
</div>
<div class="my"  onclick="my(4);">
    <img src="images/p5.jpg" alt="" id="my">
</div>
<div class="my"  onclick="my(5);">
    <img src="images/p6.jpg" alt="" id="my">
</div>
<div class="my"  onclick="my(6);">
    <img src="images/p7.jpg" alt="" id="my">
</div>
<div class="my"  onclick="my(7);">
    <img src="images/p8.jpg" alt="" id="my">
</div>

   </div>
   <div class="my-modal" id="my-modal">
       <h1><span class="close" onclick="clos();">&times;</span></h1>
    <img src="images/p1.jpg" alt="" id="my" >
</div>
<div class="my-modal" id="my-modal">
        <h1><span class="close" onclick="clos();">&times;</span></h1>
    <img src="images/p2.jpg" alt="" id="my">
</div> 
<div class="my-modal" id="my-modal">
        <h1><span class="close" onclick="clos();">&times;</span></h1>
    <img src="images/p3.jpg" alt="" id="my">
</div> 
<div class="my-modal" id="my-modal">
        <h1><span class="close" onclick="clos();">&times;</span></h1>
    <img src="images/p4.jpg" alt="" id="my">
</div> 
<div class="my-modal" id="my-modal">
        <h1><span class="close" onclick="clos();">&times;</span></h1>
    <img src="images/p5.jpg" alt="" id="my">
</div>
<div class="my-modal" id="my-modal">
        <h1><span class="close" onclick="clos();">&times;</span></h1>
    <img src="images/p6.jpg" alt="" id="my">
</div> 
<div class="my-modal" id="my-modal">
        <h1><span class="close" onclick="clos();">&times;</span></h1>
    <img src="images/p7.jpg" alt="" id="my">
</div>
<div class="my-modal" id="my-modal">
        <h1><span class="close" onclick="clos();">&times;</span></h1>
    <img src="images/p8.jpg" alt="" id="my">
</div> 
<div class="more">
<button class="btn" style="margin-left:50%;"> Load More...</button>
</div>
<div class="bg-attachement" id="contact">
<h1>
CONTACT
        </h1>
</div> 
<div style="text-align: center; padding-top:20px;  color: #555;">
    
<h2>WHERE I WORK</h2>
<p>I'd love your feedback!</p>
<form action="" method="POST" class="contact-form">
<h3> Chicago, US</h3>
<h3> Phone: +00 151515</h3>
<h3> Email: mail@mail.com</h3>
<p class="swing">Swing by for a cup of , or leave me a note:</p>
<input type="text" class="input" placeholder="Name">
<input type="text" class="input" placeholder="Email">
<input type="text" class="input" placeholder="Message" id="message">
<br>
<button class="send">SEND MESSAGE</button>
</form>
</div>
<div >
</div>
<div class="footer">
    <a href="#top">Top</a>
    <p>powered by <a href="#">OLAIT</a></p>
</div>
</body>
</html>
<script>
    var myNav= document.getElementById("navbar");
    function icon(){    

if(myNav.className==="navbar"){
    myNav.className+=" responsive";
}else
{
    myNav.className="navbar";
}
    }

    var previousPos=window.pageYOffset;
  window.onscroll=function()
    {
        var cpos=window.pageYOffset;
        if(cpos > previousPos){
myNav.style.backgroundColor="white";
myNav.style.position="fixed";
myNav.style.marginTop=0;
        }else{
            myNav.style.background="transparent";
        }
    }
var myModal=document.getElementsByClassName("my-modal");
var close=document.getElementsByClassName("close");
function my(d) {
    ind=d;
myModal[d].style.display="block";
}
function clos(d){
    myModal[ind].style.display="none";   
}
</script>