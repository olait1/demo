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
    background: #222;
    overflow: hidden;
 
 }
.navbar a{
    text-decoration: none;
    color: #ccc;
    padding: 15px 14px;
    float: left;
    display: block;
    letter-spacing: 2px;
    transition: ease 2s;
}
.navbar a:hover{
    background: #ccc;
    color: #222;
}
.navbar .dropdown{
  overflow: hidden;
  padding: 15px 14px;
  float: left;
}
.drop-btn{
    background: inherit;
    font: inherit;
    color: #ccc;
    outline: none;
    border: none;
}
.dropdown-content{
    position: absolute;
 box-shadow: 4px 4px 4px 4px rgba(0, 0,0, .2);
 display: none;
 background: #ccc;
 z-index: 1;

}
.dropdown .dropdown-content a{
float: none;
display: block;
color: #222;
}
.dropdown .dropdown-content a:hover{
background: #222;
color: #ccc;
}
.navbar .dropdown:hover .dropdown-content{
    display: block;
}
.navbar .icon{
   display: none;
}
@media screen and (max-width: 600px) {
 .navbar a:not(:first-child),.dropdown{
        display: none;
    } 
    .navbar a.icon{
        float: right;
    display: block;
    }
    .navbar.responsive .icon{
        position: absolute;
        right: 0;
        top: 0;
    }
 
    .navbar.responsive a{
        display: block;
        float: none;
        text-align: left;
    }
}
/* carousel */
.carousel {
    background: #222;
}
.carousel .slideImg img{
    width: 100%;
}
.body{
    padding: 0px 20%;
    word-spacing: 9px;
    color: #000;
    margin: 50px 0px;
}
.body h3{
    font-size: 2em;
    text-align: center;
    letter-spacing: 5px
  
}
.body .h6{
    font-size: 17px;
    color: #555;
    text-align: center;
    margin: 0;
}

@media screen and (max-width: 600px) {
.body{
    padding: 0px 2%;
    word-spacing: 10px;
}
}
@media screen and (max-width:800px) {
    .body{
        width: 90%;
        margin:0px 5%;
        padding:20px 0px;
    }
}
/* name-images */
.name{
    margin: auto;
    width: 80%;
   
}
.name-img{
float:left;
width:20%;
margin-left: 6.666%;
text-align: center;
}
.name-img img{
    width: 100%;
}
@media screen and (max-width: 600px) {
    .name-img{
       width: 95%;
       float: none;
        }

}
.tour{
    margin-top: 60px;
    padding-top:30px;
    background: #222;
    clear: both;
    color: #ccc;
    bottom: 0;
    overflow: auto;
}
.tour h2, .tour p{
    text-align: center;
   margin-bottom: 20px;
}
.sold-Out{
    
    background: #ccc;
    color: #555;
    margin: auto;
    width: 65%;
}
@media screen and (max-width:800px ) {
    .sold-Out{
        width: 95%;
    }
}
.sold-Out tr td{
    border-bottom-style: solid;
    border-bottom-width: 1px;
    border-color: #555;
    padding: 5px;
}
.soldbtn{
    margin-left: 15px;
    background:red;
    padding: 5px;
    color: white;
}
.item{
    width: 30px;
    height: 30px;
 text-align: center;
 padding-top:5px; 
    float: right;
    border-radius: 50%;
    background: #000;
    color: white;
}
.country{
    margin:auto;
    width: 65%;
    padding: 30px 0px 500px 0px;
    }
    @media screen and (max-width:800px ) {
        .country{
        width: 95%;
        
        }
        .ticket{
            margin: 0px 0.8333333%;
        }
    }
.ticket{
    width: 30.33333%;
    float: left;
    margin-left: 1%;
    margin-top:10px;
}

.ticket img{
    width: 100%;
}
.ticket img:hover{
filter:contrast(.5)
}
@media screen  and (max-width: 600px){
    .ticket{
        width: 80%;
      margin:30px 5%; 
    }
}
.ticket-content{
    background: white;
    color: #000;
    overflow: auto;
    padding: 8px;
}
.ticket-content .date{
color: #555;
margin: 5px 0px;
}
.ticket-content .btn{
    background: #000;
    color: white;
    padding: 10px;
    outline: none;
    border: none;
    cursor: pointer;
}
.ticket-content .btn:hover{
background: #ccc;
color: #000;
}
/* modal */
.modal{
    width: 80%;

    position: fixed;
    top: 30px;
    z-index: 1;
    margin:0 10%;
    padding: 15px;
    display: none;
    overflow: auto;
}
@media screen and (max-width: 600px) {
    .modal{
        width: 80%;
    }
    .modal .header{
        width: 90%;
    }

}

.modal .header{
    background:#000;
    color: white;
    margin: 0;
    padding: 10px;
}
.modal .dismiss{
   position: absolute;
   right: 30px;
   cursor: pointer;
   color: white;
}
   @media screen and (max-width: 800px) {
    .modal .header{
        width: 90%;
    }
    .modal .dismiss{
        right: 80px;
    }
}
.modal .body{
    background: white;
    color: #000;
    margin: 0;
    padding: 10px;
}
.modal .body input{
    width: 100%;
    padding: 10px;
}
.modal .body .pay{
    background: #000;
    display: block;
    outline: none;
    border: none;
    width: 100%;
    padding: 5px;
    cursor: pointer;
    color: white;
}
.modal .body .close{
    background: red;
    outline: none;
    border: none;
    padding: 10px;
    color: white;
    cursor: pointer;
}
.modal .body span{
    float: right;
}
.contact{
width: 50%;
    margin:auto;
}
.contact h2{
    text-align: center;
    letter-spacing: 4px;
}
.contact p{
    text-align: center;
    color: #555;
}
.contact .address{
    width: 25%;
    float: left;
    margin: 30px 0px;
  
}
.contact .address p{
    text-align: left;
    color: #000;
}
.contact .input{
margin: 30px 2%;

float: right;
}
.contact .input input{
    width: 45%;
padding: 5px;

}
.contact .input input:last-child{
width: 100%;
margin-top:5px;
}
@media screen and (max-width: 600px) {
    .contact .input input{
        width: 100%;
        margin-top:5px; 
    }
    .contact .input{
        width: 100%;
    }
}
.contact-margin{
    margin:10px; 
}
@media screen and (max-width: 600px) {
    .contact .input{
        margin-top: 0px;
    }
    
}
.send{
    padding: 5px;
    background: #000;
    color: white;
    cursor: pointer;
    outline: none;
    border: none;
    float: right;
}
/* map */
#map{
    width: 100%;
    height: 400px;
}
.footer{
    width: 100%;
    height: 200px;
    background:#eee;
    text-align: center;
   padding-top:100px; 
}
.emailErr{
    color: red;
    padding: 5PX;
    text-transform: lowercase;
}
</style>
<body>
    <div class="navbar top " id="navbar">
        <a href="#home">HOME</a>
        <a href="#band">BAND</a>
        <a href="#tour">TOUR</a>
        <a href="#contact">CONTACT</a>
       <div class="dropdown">
           <button class="drop-btn">
               MORE
           </button>
           <div class="dropdown-content">
               <a href="#">Merchandise</a>
               <a href="#">Extrs</a>
               <a href="#">Media</a>
           </div>
          
       </div>
       <a href="javascript:void(0)" class="icon" onclick="icon()">&#9776;</a>
    </div>
    <!-- carousel -->
    <div class="carousel" id="home">
<div class="slideImg">
    <img src="images/la.jpg" alt="" srcset="">
</div>
<div class="slideImg">
    <img src="images/ny.jpg" alt="" srcset="">
</div>
<div class="slideImg">
    <img src="images/chicago.jpg" alt="" srcset="">
</div>
    </div>
    <!-- body -->
<div class="body">
<h3 id="band">THE BAND</h3>
<p class="h6"><i>We love music</i></p>
<p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<!-- name -->
<div class="name">
    <div class="name-img">
        <p>Name</p>
<img src="images/bandmember.jpg" alt="" srcset="">
    </div>
    <div class="name-img">
            <p>Name</p>
        <img src="images/bandmember.jpg" alt="" srcset="">
            </div>
            <div class="name-img">
                    <p>Name</p>
                <img src="images/bandmember.jpg" alt="" srcset="">
                    </div>
</div>
<!-- tour -->
<div class="tour" id="tour">
<h2>TOUR DATES</h2>
<P><i>Remember to book your tickets!</i></P>
<table class="sold-Out">
    <tr>
        <td>September <span class="soldbtn">Sold out</span></td>
    </tr>
    <tr>
            <td>October <span class="soldbtn">Sold out</span></td>
        </tr>
        <tr>
                <td>November <span class="item">3</span></td>
            </tr>
</table>

<div class="country">
    <div class="ticket">
        <img src="images/paris.jpg" alt="" srcset="">
        <div class="ticket-content">
            <h3>New York</h3>
            <br>
            <span class="date">Fri 27 Nov 2016</span> <br>
            <br>
            <span>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</span>
            <br>
            <br>
            <button class="btn" onclick="buy();">Buy Ticket</button>
        </div>
    </div>
    <div class="ticket">
            <img src="images/newyork.jpg" alt="" srcset="">
            <div class="ticket-content">
                <h3>New York</h3>
                <br>
                <span class="date">Fri 27 Nov 2016</span> <br>
                <br>
                <span>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</span>
                <br>
                <br>
                <button class="btn" onclick="buy();">Buy Ticket</button>
            </div>
        </div>
        
    <div class="ticket">
            <img src="images/sanfran.jpg" alt="" srcset="">
            <div class="ticket-content">
                <h3>New York</h3>
                <br>
                <span class="date">Fri 27 Nov 2016</span> <br>
                <br>
                <span>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</span>
                <br>
                <br>
                <button class="btn" onclick="buy();">Buy Ticket</button>
            </div>
        </div>
</div>
</div>
<!-- modal -->
<div class="modal" id="modal">
    <h1 class="dismiss" id="dismiss">&times;</h1>
<div class="header">
    <h2>Tickets</h2>
</div>
<div class="body">
    <form action="" method="POST">
        
    <p>Ticket,$15 per person</p>
    <input type="number" min="1" name="quantity" required placeholder="How many?" id="">
    <br>
    <br>
    <p>Send To</p>
    <input type="email" name="email" required  title="*****@gmail.com"   placeholder="Enter email">
   
    <br>
    <br>
    <button class="pay" id="pay"  > PAY</button>
    <br>
    <BUtton id="close" class="close" > Close</BUtton>
    <br>
    <br>
    <span>Need <a href="#">Help?</a></span>
    
</form>
</div>
</div>
<!-- contact us -->
<section class="contact-margin" id="contact">
<div class="contact">
    <h2>CONTACT</h2>
    <p>Fan? Drop a note!</p>
    <div class="address">
        <p>Chicago, US</p>
        <p> Phone: +00 151515</p>
        <p> Email: mail@mail.com</p>
    </div>
    <div class="input">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            
        <input type="text" placeholder="Name" required>
        <input type="email" placeholder="Email" required  id="email">

        <br>
        <input type="text" placeholder="Message" style="width: 100%; margin-top: 10px; @media screen {
            margin-top: 0px;
        }">
    <br>
    <br>
    <button class="send" type="submit" type="submit" >SEND</button>
    
</form>
    </div>
    
</div>
</section>
<div id="map">
&nbsp;
</div>
<div class="footer">
<p>powered by <a href="#">Olaitech</a> </p>
</div>
</body>
</html>
<script>
function icon(){
  var navbar=document.getElementById("navbar");
  if(navbar.className==="navbar"){
      navbar.className+=" responsive";
  }else{
      navbar.className="navbar";
  }
}
// carousel
var myIndex=0;
slides();
function slides(){
    var slideImg=document.getElementsByClassName("slideImg");
for (let index = 0; index < slideImg.length; index++) {
   slideImg[index].style.display="none";
}
myIndex++;
if(myIndex >slideImg.length){
    myIndex=1;
}
slideImg[myIndex-1].style.display="block";
setTimeout(slides,3000);
}
// modal
var modal=document.getElementById("modal");
var close=document.getElementById("close");
var dismiss=document.getElementById("dismiss");
function buy(){
modal.style.display="block";
}
close.onclick= function(){
    modal.style.display="none";
}
dismiss.onclick=function(){
    modal.style.display="none";
}
window.onclick=function(e){
if(e.target== modal){
    modal.style.display="none";
}
}
var mymap=document.getElementById("map");
var mapOption = {
   center: new google.maps.LatLng(51.5,-0.2),Zoom:10
}
var realMap= new google.maps.Map(mymap,mapOption);
</script>