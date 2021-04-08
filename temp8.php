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
    padding:0;
    margin:0;
    box-sizing: border-box;
    font-family:sans-serif;
}
body{
    background:#f7f5f2;
}
.navbar{
    background:#000;
    overflow:hidden;
   
    padding:5px;
    z-index:1;
}
.navbar-link{
    float:left;
    padding:16px 10.5%;
    cursor:pointer;

}
.navbar-link:hover{
background:#ccc;
}
.navbar-link:hover .link{
color:#000;
}
.navbar-link a{
    font-size:small;
color:#fff;
text-decoration:none;
}

@media screen and (max-width:1062px){
    .navbar-link{
    padding:16px 5%;
}
}
@media screen and (max-width:968px){
    .navbar-link{
        padding:16px 10%;
    }  
}

@media screen and (max-width:600px){
    .navbar-link{
        padding:16px 4.5%;
    }  
}
.bg{
    background:url("images/coffeehouse.jpg");
   background-repeat:no-repeat;
   background-size:cover;
   background-position:center;
    height:400px;
    position:relative;
    filter:grayscale(.5);
    transform:scale(1);
}
.header{
    position:absolute;
    top:30%;
    left:30%;
     width:50%;
    text-align:center;
    color:#fff;
    margin:auto;
    font-size:2.3em;
    
}
.time{
    padding:10px;
    background:#000;
    color:#fff;
    position:absolute;
    bottom:10px;
    left:10px;
}

.about .about-header{

letter-spacing:2px;
    color:#fff;
    width:50%;
    text-align:center;
    margin:auto;
    margin-top:30px;
    font-size:small;
}
.about-header span{
    background:#000;
    padding:5px;
}
.about-content{
    width:50%;
    margin:auto;
    margin-top:30px;
    letter-spacing:1.2px;
}
@media screen and (max-width:600px){
    .about-content{
    width:95%;
    margin:30px 2.5%;
    }
}
.about-content p{
margin-top:30px;
}
.quote{
    background:#f1f1f1;
    border:none;
    border-left-style:solid;
    border-left-width:10px;
    border-left-color:#cccccc;
    padding:10px;
    overflow:auto;
    margin-top:30px;

}
.about-content img{
    width:100%;
    vertical-align:middle;
    margin-top:30px;
    filter:grayscale(.5);
}
.b{
    font-weight:bold;
}
.menu{
    width:50%;
    margin:auto;
    margin-top:30px;
}
.menu .menu-header{
    text-align:center;
    background:#000;
    color:#fff;
    padding:10px;
    width:50%;
    margin:auto; 
    letter-spacing:2px;
    margin-bottom:30px;

}
.bars{
    padding:10px;
    color:#000;
    box-shadow:2px 2px 2px 2px rgba(0,0,0,.2);
}
.menu-content-bar{
float:left;
margin-right;


}
.menu-content-bar1{
    margin-left:50%;

}
.menu-content-bar,.menu-content-bar1{
padding:10px;
text-align:center;
width:50%;
cursor:pointer;
}  

.menu-content{
    width:100%;
    box-shadow:5px 5px 5px 5px rgba(0,0,0,.2);
    overflow:auto;
    padding:0px 10x 10x 10x;
    background:#f7f5f2;
}
.menu-body{
    padding:15px;
}
.details{
    color:#ccc;
    font-size:17px;
    padding:10px 0;
}
img.menu-img{
    width:100%;
    margin:30px 0;
    filter:grayscale(70%);

}

@media screen and (max-width:600px){
    .menu,.mean-header{
        width:90%;
        margin:30px auto;
    }
}
#name,#number,#dateTime,#message{
    width:100%;
    padding: 10px;
    margin-top:20px;
}
#sendMessage{
    padding: 10px; 
    margin-top:20px;
    background:#000;
    color:#fff;
    outline: none;
    border:none;
    cursor: pointer;
    font-size: large;
}
.map{
    width:50%; margin:30px auto;
}
@media screen and (max-width:600px) {
    .menu{
        width: 95%;
    } 
    .menu .menu-header{
  width
    }
        .map{
            width: 90%;
        }
    }
</style>
<body>
    <div class="navbar">
    <div class="navbar-link">
    <a href="#home" class="link">HOME</a>
    </div> 
    <div class="navbar-link">
    <a href="#about" class="link">ABOUT</a>
    </div>
    <div class="navbar-link">
    <a href="#menu" class="link">MENU</a>
    </div>
    <div class="navbar-link">
    <a href="#where" class="link">WHERE</a>
    </div>
    </div>
    <div class="bg">
    <div class="header">
        <h1>
the
Cafe </h1>
</div>
<span class="time">Open from 6am to 5pm</span>
</div>
</div>
<!-- body -->
<div class="about" id="about">
<div class="about-header">
    <h2><span> ABOUT THE CAFE </span></h2></div>
    <div class="about-content">
<p>The Cafe was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet,
     consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
       laboris nisi ut aliquip ex ea commodo consequat.</p>
       <p>
       In addition to our full espresso and brew bar menu, 
       we serve fresh made-to-order breakfast and lunch sandwiches, 
       as well as a selection of sides and salads and other good stuff.
       </p>
       <div class="quote">
       <p>    "Use products from nature for what it's worth - but never too early, nor too late."
       <br> Fresh is the new sweet.
</p>
<p>Chef, Coffeeist and Owner: Liam Brown</p>
       </div>
       <img src="images/coffeeshop.jpg" alt="">
       <p><span class="b">Opening hours:</span> everyday from 6am to 5pm.</p>
       <p><span class="b">Address:</span> 15 Adr street, 5015, NY</p>
    </div>
    <div class="menu" id="menu">
    <div class="menu-header">MENU</div>
    <div class="menu-content">
    <div class="bars">
    <div class="menu-content-bar" id="eat">
    Eat
    </div>
    <div class="menu-content-bar1" id="drink">
    Drink
    </div>
    </div>
  <div class="menu-body">
 <p id="bread">Bread Basket</p>
 <p class="details " id="assortment">Assortment of fresh baked fruit breads and muffins 5.50</p>
 <br>
 <p id="honey">Honey Almond Granola with Fruits</p>
 <p class="details" id="natural">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p>
 <br> 
 <p id="belgian">Belgian Waffle</p>
 <p class="details " id="vanilla">Vanilla flavored batter with malted flour 7.50</p>
 <br>
 <p id="egg">Scrambled eggs</p>
 <p class="details scramble" id="scramble">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p>
 <br>
 <p id="blueberry">Blueberry Pancakes</p>
 <p class="details " id="syrup">With syrup, butter and lots of berries 8.50</p>
  </div>
    </div>
    <img src="images/coffeehouse2.jpg" class="menu-img" alt="coffeehouse2">
    </div>
</div>
    <div style="width: 50%; margin:30px auto;  text-align: center;" id="where" class="map">
        <span style="letter-spacing:3px; padding: 10px; background: #000; color:#fff;">WHERE TO FIND US</span>
    </div>
    <div style="" class="map" >
        
    <p>Find us at some address at some place.</p>
<div id="map" style="width: 100%; height: 300px;">

</div>
<p style="letter-spacing: 2px;"> <span style="background:#000; color:#fff; padding:5px;"> FYI! </span>  
    We offer full-service catering for any event, large or small. We understand your needs and we will cater the food 
    to satisfy the biggerst criteria of them all, both look and taste.</p>
    <br/>
<p><b>Reserve</b>  a table, ask for today's special or just send us a message:</p>
<br/>
<form action="" method="POST">
    <input type="text" name="name" id="name" placeholder="Name">
    <br>
    <input type="number" name="number" min="01" id="number" placeholder="How many people">
    <br>
    <input type="datetime-local" name="dateTime" id="dateTime">
    <br>
    <input type="text" name="message" id="message" placeholder="message / special requirements">
    <br>
    <input type="submit" value="Send Message" id="sendMessage">
</form>
</div>

<div class="footer" style="padding: 100px;text-align:center; background:#f1f1f1;">
    <p>Powered by <a href="#">Olait</a></p>
</div>
</body>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<script>
    function myMap() {
      var mapCanvas = document.getElementById("map");
      var mapOptions = {
        center: new google.maps.LatLng(51.508742, -0.120850),
        zoom: 7,
        disableDefaultUI: true
      };
      var map = new google.maps.Map(mapCanvas ,mapOptions);
    }
    </script>
<script>
var assortment=document.getElementById("assortment");
var  natural=document.getElementById("natural");
var vanilla=document.getElementById("vanilla");
var  scramble=document.getElementById("scramble");
var  syrup=document.getElementById("syrup");

var bread=document.getElementById("bread");
var  honey=document.getElementById("honey");
var belgian=document.getElementById("belgian");
var  egg=document.getElementById("egg");
var  blueberry=document.getElementById("blueberry");

var drinks=document.getElementById("drink");
var eat=document.getElementById("eat");

eat.style.backgroundColor="#000";
eat.style.color="#fff";

var drink=
    {
    assortment:"Regular coffee 2.50",
    natural:"Chocolate espresso with milk 4.50",
    vanilla:"Whiskey and coffee 5.00",
    scramble:"Hot tea, except not hot 3.00",
    syrup:"Coke, Sprite, Fanta, etc. 2.50"
    }
    var eats=
    {
    assortment:"Assortment of fresh baked fruit breads and muffins 5.50",
    natural:"Natural cereal of honey toasted oats, raisins, almonds and dates 7.00",
    vanilla:"Vanilla flavored batter with malted flour 7.50",
    scramble:"Scrambled eggs, roasted red pepper and garlic, with green onions 7.50",
    syrup:"With syrup, butter and lots of berries 8.50"
    }
    var drinkHeader={
        bread:"Coffee",
        honey:"Chocolato",
        belgian:"Corretto",
        egg:"Iced tea",
        blueberry:"Soda"

    }
    var eatHeader={
        bread:"Bread Basket",
        honey:"Honey Almond Granola with Fruits",
        belgian:"Belgian Waffle",
        egg:"Scrambled eggs",
        blueberry:"Blueberry Pancakes"

    }
drinks.onclick=function(){
this.style.backgroundColor="#000";
this.style.color="#fff";
eat.style.backgroundColor="#f7f5f2";
eat.style.color="#000";

assortment.innerHTML=eats.assortment;
natural.innerHTML=drink.natural;
vanilla.innerHTML=drink.vanilla;
scramble.innerHTML=drink.scramble;
syrup.innerHTML=drink.syrup;

bread.innerHTML=drinkHeader.bread;
honey.innerHTML=drinkHeader.honey;
belgian.innerHTML=drinkHeader.belgian;
egg.innerHTML=drinkHeader.egg;
blueberry.innerHTML=drinkHeader.blueberry;
}   


eat.onclick=function(){
this.style.backgroundColor="#000";
this.style.color="#fff";
drinks.style.backgroundColor="#f7f5f2";
drinks.style.color="#000";

assortment.innerHTML=eats.assortment;
natural.innerHTML=eats.natural;
vanilla.innerHTML=eats.vanilla;
scramble.innerHTML=eats.scramble;
syrup.innerHTML=eats.syrup;

bread.innerHTML=eatHeader.bread;
honey.innerHTML=eatHeader.honey;
belgian.innerHTML=eatHeader.belgian;
egg.innerHTML=eatHeader.egg;
blueberry.innerHTML=eatHeader.blueberry;
}  
</script>

</html>