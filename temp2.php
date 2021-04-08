<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            transition: ease 2s;
        }
    .navbar{
        background: #fff;
        overflow: hidden;
        position: fixed;
        width: 100%;
        padding: 5px;
        box-shadow:0px 3px 3px 3px #aaa;
    }
    .navbar a{
        text-decoration: none;
        color: #000;
        float: left;
        padding: 16px 14px;
        font-size: 17px;
        letter-spacing: 5px;
    }
    .navbar a:hover{
        background: #ccc;
    

    }
        .side{
      float: right;
    }
.bg_img img{
   width: 100%; 
}
.bg_img h1{
  margin-top: -2em;
  margin-left:15px ;
  letter-spacing: 5px;
  color: #555;
  text-shadow: 2px #000;
}
@media screen and (max-width: 600px) {
    .side{
        display: none;
    }
}

.body{
    width: 80%;
margin: 200px 10%;
}
.image{
    width: 40%;
    float: left;
    margin: 0px 5% 0px 0px;
}

@media screen and (max-width: 600px) {
    .body{
        padding:5% ;
        margin-top:50px; 
    }
    .image{
        float: none;
        width: 100%;
        display: none;
    }
   
    .content-about h3{
    margin-top:20px;
    font-size: 2em !important;
    }
}
.image img{
width: 100%;
}
.content-about h3{
    font-size:2.5em;
    font-weight: 4em !important;
}
.content-about h3,.content-about  .headerline{
text-align: center;
letter-spacing: 5px;
}
.content-about .headerline{
margin-top:30px; 
}
.content-about .catering{
    word-spacing: 5px;
    letter-spacing: 1px;
    text-align: justify;
   margin-left:  5px;
}
.excepteur{
    color: #555;
    word-spacing: 5px;
    letter-spacing: 1px;
    text-align: justify;
}
hr{
    margin-top:220px; 
    clear: both;
    color: #eee;
    border: 0;
    border-style:solid;
    border-top-width:1px; 

}
@media screen and (max-width: 600px) {
   hr{
       margin-top: 50px;
   } 
}
@media screen and (max-width: 1200px) {
    hr{
        margin-top: 30px;
    }
}
.menu{
    width: 40%;
    margin-top: 50px;
    float: left;
}
.body .menu h1#menu-header{
    margin-top: 80px;
    margin-bottom: 20px;
    letter-spacing: 5px;
    text-align: center;
}
p.bread{
   letter-spacing: 5px;
   font-size: 18px;
  margin-bottom:10px; 
}
p.assort{
    color: #555;
    margin-bottom:20px; 
}
.menu-img{
    margin-top: 80px;
    width: 40%;
    float: right;
}
.menu-img img{
    width: 100%;
}

@media screen and (max-width: 600px) {
    .menu,.menu-img{float: none;
        width: 100%;}
    .menu {
        margin-top: 5px;
    }
}
.contact{
    clear: both;
    padding-top: 50px;
}
.contact h1{
    letter-spacing: 5px;
    padding: 5px;
}
.contact p{
    margin-top: 30px;
}
.contact h3{
    margin: 30px 0px;
    color: #005;
}
input,.input{
    margin-top: 30px;
}
.input input{
width: 100%;
height: 40px;
border: 0;
border-bottom-style: solid;
border-bottom-width:1px;
outline: none;
  
}
::placeholder {
font-size: 17px;
padding-left: 5px;
}
.input button{
    padding: 5px;
    background: #ddd;
    outline: none;
    cursor: pointer;
    border: none;
    font-size: 17px;
}
.footer{
    width: 100%;
    height: 100px;
    text-align: center;
    background: #ddd;
    padding: 50px;
   
}
.footer a{
    text-decoration: none;
}
</style>
</head>
<body>
    <div class="navbar">
        <a href="#">Gourmet au Catering</a>
        <div class="side">
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Contact</a>
    </div>
    </div>
    <!-- background-image -->
    <div class="bg_img">
<img src="images/hamburger.jpg" alt="">
<h1>
Le Catering
</h1>
    </div>

    <div class="body">
<div class="image">
    <img src="images/tablesetting2.jpg" alt="">
</div>
<div class="content-about" id="about">
        <h3>About Catering</h3>
        <p class="headerline">Tradition since 1889</p>
        <br>
        <p class="catering">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur
             adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
             Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use seasonal 
             ingredients.</p>
             <br><br>
             <p class="excepteur">Excepteur sint occaecat cupidatat non proident, 
                 sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod 
                 temporincididunt ut labore et dolore magna aliqua. Ut enim ad 
                 minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                 ea commodo consequat.</p>
    </div>
    <hr>
    <div class="menu" id="menu">
        <br>
        <h1 id="menu-header">Our Menu</h1>
<p class="bread">Bread Basket</p>
<p class="assort">Assortment of fresh baked fruit breads and muffins 5.50</p>

<p class="bread">
        Honey Almond Granola with Fruits</p>
<p class="assort">Assortment of fresh baked fruit breads and muffins 5.50</p>

<p class="bread">Belgian Waffle</p>
<p class="assort">Assortment of fresh baked fruit breads and muffins 5.50</p>

<p class="bread">Scrambled eggs</p>
<p class="assort">Assortment of fresh baked fruit breads and muffins 5.50</p>

<p class="bread">Blueberry Pancakes</p>
<p class="assort">Assortment of fresh baked fruit breads and muffins 5.50</p>
    </div>
    <div class="menu-img">
        <img src="images/tablesetting.jpg" alt="">
    </div>
    <hr>
    <div class="contact" id="contact">
        <h1>Contact</h1>
        <p>We offer full-service catering for any event,
            large or small. We understand your needs and we will cater
             the food to satisfy the biggerst criteria of them all, both
              look and taste. Do not hesitate to contact us.</p>
              <h3>Catering Service, 42nd Living St, 43043 New York, NY</h3>
              <p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>
              <form action="" method="POST">
                  <div class="input">
                      <input type="text" placeholder="Name" required>
                      <br>
                      <br>
                      <input type="number" min="0" placeholder="How many people" required>
                      <br><br>
                      <input type="datetime-local" name="datetime" placeholder="Date and Time"  id="" required>
                      <br>
                      <br>
                     <button  type="submit">Send message</button>               
                    </div>

              </form>
    </div>
    </div>
   
    <div class="footer">
            powered by 
    <a href="#">Olaitech
        </a>        </div>
</body>
</html>