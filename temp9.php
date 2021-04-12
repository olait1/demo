<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome/fontawesome.css">
    
    <title>Document</title>
</head>
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    scroll-behavior: smooth;
    transition: 1s all;
}
body{
    background: #ffffff;
}

.col1{
    float: left;
   width: 20%;
    background: #ffffff;
    overflow: auto;
    position: fixed;
}
.col2{
    width: 80%;
    margin-left: 20%;
    padding: 30px;
    padding-bottom: 0;
}
.logo{
    text-align: center;
    font-size: large;
    padding:20px 0;
    font-size: xx-large;
    letter-spacing: 3px;
    font-weight:bold;
    color: #000;
}
.sidenav{
    height: 100%;
    width:20%;
    position: fixed;
    top: 0;
    left: 0;
    background: #fff;
    overflow-x: hidden;
    padding: 10px;
}
.sidenav a,.dropdown-btn{
    text-decoration: none;
    display: block;
    color: #000;
     padding: 10px;
     margin-left: 10%;
     border: none;
     outline: none;
     background: none;
     font-size: large;
     cursor: pointer;
}
.drop-container{
 
    box-shadow: rgba(0, 0, 0, .2);
    padding: 10px;
    display: none;
}
.show{
    display: block;
}
.sidenav a:hover,.dropdown-btn:hover{
    background:#f1f1f1;
    color: #000;
}
.contact{
    margin-top: 40px;
}
.contact a{
font-size: small;
}
.header{
    font-size: x-large;
}

.bg{
    width: 100%;
    margin-top: 30px;
    width: 100%;
    position: relative;
    background: #000; 
}
.bg img{
width: 100%;

    vertical-align: middle;
}
.bg-content{
    position: absolute;
    top: 10%;
    left: 5%;
    font-size: xx-large;
    /* z-index: 1; */
    color: #fff;
}
.shopNow{
    outline: none;
    border:none;
    cursor: pointer;
    padding: 10px;
    color:#fff;
    background: #000;
    font-size: large;
}
.navbar{
    z-index: 1;
    display: none;
}
#close{
    float: right;
    cursor: pointer;
    display: none;

}

@media screen and (max-width: 600px) {
    .col1{
   width: 50%;
       z-index: 1;
    }
    .sidenav{
        width: 50%;
        display: none;
    }
    .col2{
        width: 100%;
        margin:0 ;
        padding-left: 10px;
        padding-right: 10px;
        
    }
    .bg-content{
font-size: large;
    }
    .navbar{
    position: fixed;
    width: 100%;
    margin: 0;
    display: block;
    background: #000;
 
}
.icon{
top: 0;
right: 0;
cursor: pointer;
float: right;
color: #fff;
}
.header{
    margin-top: 50px;

}
.logo{
    text-align: left;
    margin:0 20px;
    color: #fff;
    font-size: large;
}
.sidenav .logo{
    color: #000;
}
#close{
    display: block;
}
}
.cloth{ position: relative;
    width:23%;
    margin-right: 2%;
    float: left;
    margin-top:20px;
}
.cloth img{
width: 100%;
filter: grayscale(.5);

}
@media screen and (max-width: 600px){
    .cloth{
        width:48%;
    }
}
.price{
    font-weight: bold;
}
.sub{
  clear: both;
    padding: 40px 30px;
    background: #000;
    margin-top: 60px;
    color: #fff;
}
.sub input{
width: 100%;
padding:15px;
margin-top: 10px;
}
.sub #btn{
    background: #f00;
    color: #fff;
    padding: 10px;
    margin-top: 10px;
    cursor: pointer;
    outline: none;
    border: none;
}
.contac{
    width: 100%;
    padding: 30px;
    background: #f1f1f1;
    overflow: auto;
    margin-top: 0;
}
.contact-input,.about{
    width: 33%;
    float: left;
}
@media screen and (max-width: 600px) {
    .contact-input,.about{
    width:100%;
    float: none;
    margin-top: 30px;
    }
}
.contact-input h3,.contact-input p{
text-align: center;
margin-bottom: 10px;
}
.contact-input input{
    padding: 10px;
    margin-top:5px;
    width: 100%;
}
#send{
    background: #f00;
    color: #fff;
    outline: none;
    border: none;
    cursor: pointer;
}
#send:hover{
    background: #ccc;
    color: #000;
}
.about{
    text-align: center;
}
.about a{
color: #000;
margin-top: 15px;
font: xx-small;
}
.store{
    text-align: justify;
}
@media screen and (max-width:600px) {
    .about {
text-align: justify;
margin-bottom: 20px;
    }
}
.footer{
    padding: 50px 20px;
    background: #000;
    color: #fff;
    margin-bottom: 0;
}
.footer a{
color: #fff;
}
.modal{
position: fixed;
top: 20%;
   left: 30%;
    padding: 50px;
    background: #fff;
   overflow: auto;
    z-index: 1;
    display: none;
  
}
#modal-close{
    float: right;
    cursor: pointer;

}
.modal input{
    width: 100%;
    padding: 10px;
    margin: 30px 0;
}
.modal button{
    padding: 8px;
    background:#f00;
    color: #fff;
    outline: none;
    border: none;
    cursor: pointer;
}
.modal button:hover{
background: #ccc;color: #000;
}
@media screen and (max-width: 600px){
    .modal{
    left:0;
    }
}
.icon{
    float:right;
}

.fullscr{
    display: none;
    width: 50%;
    height: 50%;
    margin: auto;
    position: fixed!important;
top: 10vh;
left: 40vw;
margin: auto;
    align-content: center;
    align-items: center;
    align-self: center;
    z-index: 1;
  transition:ease-in-out 2s;
}
.fullscr img{
width: auto;
height: auto;
}
@media screen and (max-width: 600px) {
  .fullscr{
      width: 100%;
      height: auto;
      left: 0;
  } 
 
}
.all:not(.bg){
    pointer-events: none;
    opacity: .3;
}
.imgitem{
    float: right;
    margin-bottom: 30px;
    font-size: 2rem;
}
.close:hover,#cat:hover{
color: #f00;
cursor: pointer;
}
.jeans{
    cursor: pointer;
}

@media screen and (max-width: 600px){
    .imgitem{
    display: flex;
    flex-direction: row-reverse;
    font-size: 1rem;
    
    }
    .close,#cat,.jeans{

        justify-content: space-between;
    }
}

/* cart */
table{
      border-collapse: collapse;
      border-spacing: 0;
      width: 50%;
      position: fixed!important;
top: 10vh;
left: 30vw;
      display: none;
      border: 1px solid #ddd;
      overflow: auto;
    }
    @media screen and (max-width: 600px) {
        table{
           left: 0;
           width: 100%;
overflow: auto;
        }
    }
    th,td{
text-align:right;
padding: 16px;
    }
    tr:nth-child(even){
background: #f2f2f2;

    }
    .cimg{
        width: 100px;
        height: 100px;
    }
  .search-input{
      position: relative;
  }
  .search{
      position: absolute;
      top: 0;
      left: 0;
      font: 100px;
  }
</style>

<body class="body">
    <div id="body" >
    <div class="navbar">
            <p ><h2 class="logo" id="logo">LOGO  <p class="icon" id="icon"> &#9776;</p></h2></p>
           
    </div>
        <div class="col1">
        <div class="sidenav"  id="sidenav">
            <p ><span id="close">&times;</span>
                <h2 class="logo">LOGO</h2> </p>
            <a href="#">Shirts</a>
            <a href="#">Dresses</a>
        
            <button class="dropdown-btn" id="btn">
                    Jeans <span class="fa fa-caret-down"></span>

            </button>
            <div class="drop-container" id="dropdown">
            <a href="#">Skinny</a>
            <a href="#">Relaxed</a>
            <a href="#">Bootcut</a>
            <a href="#">Straight</a>
        </div>
        <a href="#">Jackets</a>
        <a href="#">Gymwear</a>
        <a href="#">Blazers</a>
        <a href="#">Shoes</a>
<div class="contact">
    
        <a href="#">Contact</a>
        <a href="#" id="news">Newsletter</a>
        <a href="#">Subscribe</a>
        </div>
        
</div>
        </div>
        <div class="col2">
            <div class="header">
                <span>  Jeans</span>
                <div class="icon">
                
                        <input type="text" class="search-input" placeholder="">
                       
                <i class=" fa fa-cart-arrow-down fa-lg" id="cart"></i>

            </div></div>
            <div class="bg">
                
            <img class src="images/jeans.jpg" alt="jeans">
            <div class="bg-content">
                    <h2>New arrivals</h2>
                    <br>
                    <p>COLLECTION 2021</p>
                    <br>
                    <button class="shopNow">
                        SHOP NOW
                        
                    </button>
                </div>
        </div>
        <p style="color: #ccc; margin:20px 0;">
            8 items
        </p>
        <div class="cloth">
            <img src="images/jeans1.jpg" class="jeans" alt="jeans1">
            <p>Ripped Skinny Jeans</p>
            <h4 class="price">$24.99</h4>
       </div>
       <div class="cloth">
        <img src="images/jeans4.jpg" class="jeans" alt="jeans1">
        <p>Ripped Skinny Jeans</p>
        <h4 class="price">$24.99</h4>
   </div>
   <div class="cloth">
    <img src="images/jeans2.jpg" class="jeans" alt="jeans1">
    <p>Ripped Skinny Jeans</p>
    <h4 class="price">$35.99</h4>
</div>
<div class="cloth">
    <img src="images/jeans3.jpg" class="jeans" alt="jeans1">
    <p>Ripped Skinny Jeans</p>
    <h4 class="price">$24.99</h4>
</div>
<div class="cloth">
    <img src="images/jeans4.jpg" class="jeans" alt="jeans1">
    <p>Ripped Skinny Jeans</p>
    <h4 class="price">$24.99</h4>
</div>
<div class="cloth">
    <img src="images/jeans2.jpg" class="jeans" alt="jeans1">
    <p>Ripped Skinny Jeans</p>
    <h4 class="price">$24.99</h4>
</div>
<div class="cloth">
    <img src="images/jeans1.jpg" class="jeans" alt="jeans1">
    <p>Ripped Skinny Jeans</p>
    <h4 class="price">$24.99</h4>
</div>
<div class="cloth">
    <img src="images/jeans3.jpg" class="jeans" alt="jeans1">
    <p>Ripped Skinny Jeans</p>
    <h4 class="price">$24.99</h4>
</div>
       <br>
<div class="sub">
    <h1>Subscribe</h1>
    <p>To get special offers and VIP treatment:</p>
    <input type="email" name="email" placeholder=" Enter e-mail" class="email">
    <button id="btn">Subscribe</button>
</div>
<div class="contac">
    <div class="contact-input">
        <form action="" method="post">
            <h3>Contact</h3>
            <p>Questions? Go ahead.</p>
<input type="text" name="name" id="name" required placeholder="Name">
<br>
<input type="email" name="email" class="email" required placeholder="Email ">
<br>
<input type="text" name="subject" id="subject" required placeholder="Subject">
<br>
<input type="text" name="message" id="message" required placeholder="Message">
<input type="submit" id="send" value="Send">
</form>
    </div>
    <div class="about">
        <h3>About</h3>
        <br>
        <a href="#">About Us</a><br><br>
        <a href="#">We're hiring</a><br><br>
        <a href="#">Support</a><br><br>
        <a href="#">Find store</a><br><br>
        <a href="#">Shipment</a><br><br>
        <a href="#">payment</a><br><br>
        <a href="#">Gift card</a><br><br>
        <a href="#">Return</a><br><br>
        <a href="#">Help</a>
        </div>
        <div class="store">
            <h3>Store</h3>
            <br>
            <p><i class="fa fa-map-marker"> </i>Company Name</p><br>
            <p> <i class=" 	fa fa-phone"> </i> 0044123123</p><br>
            <p><i class="fa fa-envelope"> </i>  ex@mail.com</p><br>
            <h3>We accept</h3>
            <br>
            <p><i class=" 	fa fa-credit-card"> </i>Amex</p><br>
            <p><i class="fa fa-map-marker"> </i> Credit Card</p><br>
            <i class="fa fa-facebook"> </i>
            <i class="fa fa-instagram"> </i>
            <i class="fa fa-whatsapp"> </i>
            <i class="fa fa-twitter"> </i>
            </div>
</div>

     <div class="footer">
        <p>Powered by <a href="#">Olait</a></p>
    </div>
    

    <!-- modal -->
    <div class="modal" id="modal">
        <h2 id="modal-close">&times;</h2>
        <h2> NEWSLETTER</h2> 
        <br>
        <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
        <input type="email" name="email" id="news-email">
        <br>
        <button class="subs">
            Subscribe
        </button>
    </div>

    </div>
    </div>
  
    <div id="bg" class="fullscr">
        <div class="imgitem">
                <h1 class="close" id="clos">&times;</h1>
            <h1><i class=" fa fa-cart-arrow-down "   id="cat"></i>
            </h1>
    </div>
        <img id="bimg" src="" alt="" srcset="">
            </div>
     
            <!-- cart -->
          
            <table id="table">
            <form action="" method="post">
                <tr>
                    <th>Product </th>
                 <th>Quantity  </th>
                 <th>Amount  </th>
                 <th>Total Price </th>
                 <th>Cart </th>
             </tr>
             <tr>
                     <td><img id='cimg' class="cimg" alt="" srcset=""> </td>
                  <td><input type="number" onchange="change()" min="0"  name="quantity" class="quantity" id="quantity"> </td>
                  <td id="amounts" name="amount">  </td>
                  <td class="prices" id="prices" name="prices"> </td>
                  <td><label for="remove">remove</label> <input type="checkbox" name="remove" id=""> </td>
              </tr>
             <tr> <td> <input type="submit" name="submitData" value="submit">
             </td></tr></form>
            </table>
          
            
</body>
<?php
$conn=mysqli_connect("localhost","root","","jeanscollection");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}else{
    echo"<script>alert('connect')</script>";
}
$qnty=$_POST['quantity'];
$amount=$_POST['amount'];
$prices=$_POST['prices'];
$sub=$_POST['submitData'];

if(!isset($query)){
    if(isset($sub)){
        $sql="INSERT INTO cart(quantity,amount,totalPrice) VALUES($qnty,$amount,$prices) ";
        $query=mysqli_query($conn,$sql);
        
        }
}else{
    echo"none";
}
?>
<script>
    var price=document.getElementsByClassName("price");
    var quantity=document.getElementById("quantity");
    var prices=document.getElementById("prices");
var amount=document.getElementsByClassName("amounts");
var drop=document.getElementById("btn");
var dropdown=document.getElementById("dropdown");
var icon=document.getElementById("icon");
var sidenav=document.getElementById("sidenav");
var logo=document.getElementById("logo");
var clos=document.getElementById("close");
var news=document.getElementById("news");
var modal=document.getElementById("modal");
var modalClose=document.getElementById("modal-close");
var cloth= document.getElementsByClassName("cloth");
var body=document.getElementById("body");
var img=document.getElementsByClassName("jeans");
var bg=document.getElementById("bg");
var bimg=document.getElementById("bimg");
var clo=document.getElementById("clos");
var cat=document.getElementById("cat");
var cloths=[...cloth];
var table=document.getElementById("table");
var cimg=document.getElementById("cimg");
var rimg;

drop.onclick=function(){
dropdown.classList.toggle("show");
}
icon.onclick=function(){
    sidenav.style.display="block";
}
clos.onclick=function(){
    sidenav.style.display="none";
}
news.onclick=function(){
   modal.style.display="block";
   modalClose.onclick=function(){
       modal.style.display="none";
   }
}
for (let index = 0; index < cloths.length; index++) {
   cloths[index].onclick=function(){
      bg.style.display='block';
     body.classList.add('all');
    imgsrc = img[index].getAttribute('src');
  
    bimg.setAttribute('src',imgsrc);
    price=price[index].textContent;
    }
}
clo.onclick=function(){
    bg.style.display='none';
    body.classList.remove('all');
}
cat.onclick=function(){ 
table.style.display="block";
bg.style.display='none';
body.classList.add('all');
cimg.setAttribute('src',imgsrc);
amounts.innerHTML=price;

}
quantity.onkeyup=function(){
   change();
}
   function change(){
    pric=price.substring(1);
a=parseFloat(pric);
c= quantity.value;
b=parseInt(c);
totalPrice=a * b;

 if(isFinite(totalPrice)){
    prices.innerHTML="$"+totalPrice.toFixed(2);
    prices.style.color="#222";
   }else if (totalPrice =" ") {
    prices.innerHTML="invalid input";
    prices.style.color="red";
}
   }
</script>
</html>