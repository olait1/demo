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
        font-family: sans-serif;
    }
.navbar{
    position: fixed;
    top: 0;
    width: 100%;
    padding: 20px 80px;
    background: #fff;
    overflow: hidden;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, .2);
}
.navbar a{
text-decoration: none;
float: left;
color: #000;
/* padding: 10px; */
}
.navbar a:last-child{
    float: right;
}
#navbrand{
margin-left: 45%;
    text-align: center;
}
.navbar a:hover:first-child{
background: #ddd;
}

.nav{
    position: fixed;
    top: 0;
    width: 30%;
    height: 100%;
    background: #fff;
    z-index: 1;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, .2);
margin-left: -500px;
    overflow: hidden;
    transition: 2s;

}
.nav a{
    display: block;
    text-decoration: none;
    padding: 20px;
    font-size: 2em;
    color: #000;
}
.nav a:hover{
background: #ddd;
}
@media screen and (max-width: 600px) {
    .navbar{
        padding: 20px 15px;
    }
    #navbrand{
        margin-left: 20%;
    }
    .nav{
        width: 100%;
    }
    
    .nav a{
font-size: 1.5em;
}
}
.foods{
    margin: 100px 10%;
}
.food{
    width: 22%;    
    float: left;
    margin-top:30px;
}

.food:not(:last-child){
margin-right: 3%;    
}
.food img{
    width: 100%;
}
@media screen and (max-width: 600px) {
    .food{
width:100%;
margin-top: 30px;
    }
}
.foods{
    clear: both;
    }
    .head{
        text-align: center;
   color: #333;
    }
    .content{
        margin-top: 15px;
        /* letter-spacing: 2px; */
        color: #000;
        text-align: center;
    }
    .links{
        clear: both;
        margin-left:  40%;
        margin-top:700px;
    }
    @media screen and (max-width: 600px) {
        .links{
            margin-left: 15%;
        }
    }
    .links ul{
        list-style: none;
    }
    ul li{
        padding: 10px 15px;
        float: left;
        cursor:pointer;
    }
   
    ul li:hover,.link-active,.link-active a{
background: #000;
color: #fff;
    }
    ul li:hover a{
        color:  #fff;
    }
    ul li a{
        text-decoration: none;
        color: #000;
    }
    hr{
        clear:both;
        border:none;
        border-bottom:1px;
        border-bottom-style:solid;
        border-color:#eee;
        margin:50px 0px 80px;
    }
    .about{
        text-align:center; 
    margin-top:30px;
    letter-spacing: 2px;
    }
.about-img{
    width: 50%;
    margin: 30px auto;
    transform: translate(50,50);
 
}

.about-img img{
    width: 100%;
}
@media screen and (max-width: 600px) {

    .about-img{
    width: 100%;
}
}
.about p{
    margin-top: 30px;
}
.footer{
    margin: 0px 5%;
}
.footer h3{
margin-bottom: 20px;
}
.col{
    width: 30%;
    float: left;
 padding: 3px 5px;
}
@media screen and (max-width: 600px){
    .col{
        float: none;
        width: 100%;
        margin-top: 30px;
    }
}
.footer p{
    font-family:"karma",san-serif;
    letter-spacing: 1px;
}
.list img{
    width: 20%;
    height: 20%;
    float: left;
    margin-right: 15px;
    vertical-align: middle;
}
.list{
    overflow: auto;
}
.list:first-child{
border: none;
border-bottom-style: solid;
border-bottom-width: 1px;
border-bottom-color: #ddd;
}
.list:hover{
    background: #ccc;
}
.popular span{
    padding:2px 10px;
    margin-bottom: 5px;
    color: #fff;
    background: #333;
    display: inline-block;
    cursor: pointer;
}

.popular span:hover,.popular span:first-child{
    background: #000;

}
    </style>
</head>
<body>
    <div class="navbar">
        <a href="javascript:void(0);" onclick="openNav();"><h2>&#9776;</h2></a>
        <a href="#" id="navbrand"><h2>My Food</h2></a>
        <a href="javascript:void(0);"><h2>Mail</h2></a>
    </div>
    <section>
        <div class="nav" id="nav">

        <a href="#" onclick="closeNav();">Close Menu</a>
 
        <a href="#">Food</a>

        <a href="#">About</a>

        </div>
        <div class="main">
<div class="foods">
<div class="food">
<img src="images/sandwich.jpg" alt="">
<h3 class="head">The Perfect Sandwich, A Real NYC Classic</h3>
<p class="content">Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
</div>
<div class="food">
    <img src="images/cherries.jpg" alt="">
    <h3 class="head">The Perfect Sandwich, A Real NYC Classic</h3>
<p class="content">Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="food">
        <img src="images/steak.jpg" alt="">
        <h3 class="head">The Perfect Sandwich, A Real NYC Classic</h3>
<p class="content">Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
        </div>
        <div class="food">
            <img src="images/wine.jpg" alt="">
            <h3 class="head">The Perfect Sandwich, A Real NYC Classic</h3>
<p class="content">Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
          

</div>
<div class="foods">
    <div class="food">
    <img src="images/popsicle.jpg" alt="">
    <h3 class="head">The Perfect Sandwich, A Real NYC Classic</h3>
<p class="content">Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="food">
        <img src="images/wine.jpg" alt="">
        <h3 class="head">The Perfect Sandwich, A Real NYC Classic</h3>
<p class="content">Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
        </div>
        <div class="food">
            <img src="images/Salmon.jpg" alt="">
            <h3 class="head">The Perfect Sandwich, A Real NYC Classic</h3>
<p class="content">Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
            <div class="food">
                <img src="images/croissant.jpg" alt="">
                <h3 class="head">The Perfect Sandwich, A Real NYC Classic</h3>
<p class="content">Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                </div>
              
    
    </div>
    <div class="links">
<ul >
    <li><a href="javascript:void(0);">&#10094;</a></li>
    <li class="link-active"><a href="#" >1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="javascript:void(0);">&#10095;</a></li>
</ul>
    </div>
        </div>
    </section>
    <hr>
    <div style="margin:50px;" class="about">
    <h2 >About Me, The Food Man</h2>
    <div class="about-img">

        <img src="images/chef.jpg" alt="">
    </div>
    <h3 style="">I am Who I Am!</h3>
    <i>With Passion For Real, Good Food</i>
    <p>Just me, myself and I, exploring the universe of unknownment.
         I have a heart of love and an interest of lorem ipsum and mauris 
         neque quam blog. I want to share my world with you. Praesent tincidunt 
         sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, 
         ultricies congue gravida diam non fringilla. Praesent tincidunt 
        sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, 
        ultricies congue gravida diam non fringilla.</p>
    </div>
    <hr>
    <div class="footer">
<div class="col">
<h3>FOOTER</h3>
<p>Praesent tincidunt 
    sed tellus ut rutrum. Sed vitae justo condimentum, 
    porta lectus vitae, ultricies congue gravida diam non fringilla.
</p>
<br>
<p> Powered by <a href="#">olait</a></p>
</div>
<div class="col">
        <h3>BLOG POSTS</h3>
       <div>
           <div class="list">
               <img src="images/workshop.jpg" alt="">
            <h4>Lorem
                </h4>            
                  <p>  Sed mattis nunc</p>
           </div>
           <div class="list">
                <img src="images/gondol.jpg" alt="">
             <h4>Lorem
                 </h4>            
                   <p>  Sed mattis nunc</p>
            </div>
       </div>
</div>
<div class="col popular">
        <h3>POPULAR TAGS</h3>
        <span>Travel</span>
        <span>Travel</span>
        <span>Travel</span>
        <span>Travel</span>
        <span>Travel</span>
        <span>Travel</span>
        <span>Travel</span>
        <span>Travel</span>
        <span>Travel</span>
        <span>Travel</span>
        <span>Travel</span>
        <span>Travel</span>
</div>
    </div>
</body>
</html>
<script>
function openNav(){
    navs = document.getElementById("nav");
    nav.style.marginLeft=0+"px";
}
function closeNav(){
nav.style.marginLeft=-500+"px";
}
</script>