<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: #ddd;
        }
        .navbar{
            background: #fff;
        }
        .navbrand{
            transform: translate(50,50);
            margin: 0 auto;
            padding: 50px;
            font-size:x-large;
            text-align: center;
        
        }
  
    .navbrand p{
        font-size: 15px;
    }
    .navbrand span{
        padding: 5px;
        background: #000;
        color: #fff;
    }
    @media screen and (max-width: 600PX) {
        .navbrand{
            margin-left:  5%;
            font-size:large;
        }
        .navbrand h1{
            font-size: large;
        }
    }
    
    .body img{
        width: 100%;
        height: auto;
        /* vertical-align: middle;  */
        position: relative;
    }
    .body .content{
        position: absolute;
        bottom: 0px;
        left: 20px;
        color: #fff;
        font-size: large;
    }
    .body p{
font-size:4rem;
font-weight: bold;
    }
    .body button{
        padding: 15px;
        outline: none;
        border: none;
        font-size: 1em;
        cursor: pointer;  
        background: rgba(250, 250,250, .4);
    }
    .body button:hover{
        background: #ccc;
    }
    @media screen and (max-width: 600px) {
        .body .content{
            bottom: 150px;
            font-size:17px;
            bottom: 250px;
        }
        .body button{
            font-size: 17px;
        }
        .body p{
           font-size: 2em; 
        }
    }
    .modal{
        margin: auto;
        overflow: auto;
        padding: 50px;
        background: #fff;
        z-index: 1;
        position: fixed;
        top: 30%;
        left: 30%;
        display: none;
    }
   .modal h1{
       font-weight: 50;
       margin-bottom: 10px;
   }
    .modal-input{
        width: 100%;
        padding: 5px;
        margin:5px 0;
    }
 .modal-btn{
        background:#000;
        color: #fff;
        font-size: 1em;
        border: none;
        outline: none;
        cursor: pointer;
    }
    .modal-btn:hover{
background: #ccc;
color: #000;
    }
    .close{
        float: right;
        font-weight: bolder;
        cursor: pointer;
    }
    @media screen and (max-width: 1228px) {
        
        .modal{
         left: 0;
         width: 100%;
          }
    }
  
    .side1{
        width: 60%;
        float: left;
    }
    @media screen and (max-width: 600px) {
        .side1{
            float:none;
            width:100%;
        }
    }
    .row{
        margin: 30px 0px 30px 5%;
    }
    .col-1{
        background: #fff;
        padding: 20px;
        width: 100%;
        overflow: auto;
        margin-top: 30px;
    }
    .col-1 h1, .col-1 p{
        text-align: center;
    }
    .col-1 .date{
        color: #ccc;
    }
    .col-1 img{
        padding-top: 30px;
        width: 100%;
        margin-bottom: 10px;
    }
    .content{
        letter-spacing: 1px;
    }
    .btn{
        padding: 5px 10px;
        margin-top: 10px;
        outline:none;
        border-style: solid;
        border-width: 1px;
        background: #ccc;
        color: #000;
        border-color: #000;
        cursor: pointer;
    }
    .reply{
        float: right;
        background: #000;
        color: #fff;
    }
    @media screen and (max-width: 600px){
        .row{
            width: 90%;
        }
    }
    .comment{
        border: none;
        border-top-style: solid;
        border-top-width: 1px;
        border-color: #eee;
        margin-top: 10px;
        display: none;
    }
    .comment .img{
        width: 90px;
        float: left;
        margin-right: 0;
        padding-right: 0;
    }
    .comment img{
        width: 100%;
    }
    .comment p{
        margin-top: 40px; 
        margin-left: 0;
        padding-left: 0;
    }
   

    #send{
padding:7px 10px;
    }
    .form{
        clear: both;
        padding: 20px;
        margin:20px 10px 0px 0px;
border: none;

        border-top-style: solid;
        border-top-width: 1px;
        border-top-color: #eee;
    }
    .form-mess{
        width: 80%;
        float: left;
    }
    .form-mess textarea{
        width: 100%;
    }
    .form-btn
{
float: right;

}
.form-btn button{
    cursor: pointer;
    background: #fff;
    color:#000;
    border-color: #000;
    outline: none;
    border-width: 1px;
    border-style: solid;
}
.col-2{
    width: 35%;
    margin: 40px;
    margin-left:62%;

}
.myname{
        background:#000;
        width: 100%
     
        }
@media screen and (max-width: 600px) {
    .col-2{
    float: none;
    margin: inherit;
    width: 90%;
    padding: 30px 5%;
    width:100%;
    }
    .myname{
        background: inherit;
    }
    .myname img{
        width: 100%;
        vertical-align: middle;
        margin-bottom: 0;
        padding-bottom: 0px;
      
    }
    .side-1{
        width:100%;
        float:none;
    }
}
.myname img{
    width: 100%;
    margin-bottom: 0;

}

.myname-content{
padding: 10px;
background: #000;
color: #fff;
overflow: auto;
margin-top: 0;
width: 100%;

}
.popular{
    margin-top:30px;
    background:#fff;
}
.popular-head{

    color:#fff;
    background:#000;
}
.popular-list-item{
    border-bottom-style:solid;
border-bottom-width:1px;
border-bottom-color:#eee;
}
.popular-head,.popular-list-item{
    padding:10px;
    overflow:auto;
}
.popular-list-item:hover{
background:#eee;
cursor:pointer;
}
.popular-list-item img{
width:50px;
float:left;
}
.popular-list-content{
margin-left:60px;

}
.advert{
    background-color:#fff;
    overflow:auto;
    margin-top:30px;
}
.advert-head{
    padding:20px;
    background:#000;
    color:#fff;
}
.advert-frame{
    background:#fff;
   padding:10px;
}
.advert-body{
    background:#ccc;
    width:100%;
    height:300px;
    text-align:center;
    padding-top:20%;
}
.tag{
    margin-top:30px;
}
.tag,.tag-body{
    background:#fff;
}
.tag-body{
    padding:10px;
    
}
.tag-head{
    background:#000;
    padding:10px;
    color:#fff;
}

.tag-body span{
    display:inline-block;
    padding:5px;
    background:#ccc;
    margin:3px;
    cursor:pointer;
    font-size:small;
}
.tag-body span:first-child{
background:#000;
color:#fff;
}
.inspiration{
    background:#fff;
    margin-top:30px;
    overflow:auto;
}
.inspiration-head{
    background:#000;
    color:#fff; 
    padding:10px;
}
.inspiration-body{
    background:#fff;
    overflow:auto;
    padding:10px;
}
.inspiration-img{
width:40%;
vertical-align:middle;
float:left;
}
.inspiration-body .inspiration-img:nth-child(even){
    float:none;
    cursor:pointer;
    margin-left:51%;
}
.div1{
    float:left;
    width:200px;
}

img.inspiration-img{
width:48.5%;
margin-right:1.5%;

}
img#div2{
    width:48.5%;
    margin-left:1.5%;
}
.subscribe{
    background:#fff;
    margin-top:30px;
}
.sub-head{
    background:#000;
    color:#fff;
    padding:10px;
}
.sub-body{
    padding:10px;
}
.sub-body #email{
width:100%;
padding:5px;
margin:20px 0;
}
.sub{
    width:100%;
    padding:5px;
    background:#000;
    color:#fff;
    cursor:pointer;
    border:none;
    outline:none;
}
.footer{
    clear:both;
    margin:30px 0 0px 0;
    background:#000;
    color:#fff;
    padding:50px;
}
a.top{
    color:#fff;
    text-decoration:none;
    padding:10px;
    background:#222;
    margin-bottom:30px;
}
textarea{
    padding:15px;
}
    </style>
    <?php
   $connect=mysqli_connect("localhost","root","","jane bloglife");
   if(!$connect){
       die("connection failed".mysqli_connect_error());

   }
   
    
    ?>
</head>
<body>
    <div class="navbar" id="top">
        <div  class="navbrand">
            <h1>JANE BLOGLIFE</h1>
            <p>Welcome to the blog of <span>Jane's world</span> </p>
        </div>
    </div>
    <!-- body -->
    <div class="body">
        <img src="images/jane.jpg" alt="">
        <div class="content">
                <h1>Jane</h1>
                <p>FASHION BLOG</p>
                <button id="sub">
                    SUBSCRIBE
                </button>
        </div>
    </div>
    <!-- modal -->
    <div class="modal" id="modal">
            <span class="close" id="close" onclick="modal.style.display='none';"><h1>&times;</h1></span>
<h1>SUBSCRIBE</h1>

<p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
<input type="email" class="modal-input" placeholder="enter your E-mail">
<input type="button" class="modal-input modal-btn" value="subscribe">
    </div>
    <!-- side1 -->
<div class="side1">
    <div class="row">
<div class="col-1">
    <h1>TITLE HEADING</h1>
    <p>Title description,<span class="date"> May 2, 2016</span>
        </p>
        <img src="images/man_hat.jpg" alt="">
        <div class="content">
        <h3>More Hats! </h3><span> I am crazy about hats these days. Some text about this blog entry.
             Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. 
             Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. 
             Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum,
              porta lectus vitae, ultricies congue gravida diam non fringilla.

                Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                 nostrud exercitation ullamco.</span>
                 <br>
                 <button class="btn like  " id="like" >Like</button>    <button class="btn reply"  id="reply">Replies</button>   
                </div>
                <!-- Replies -->
                <div class="comment" id="comment">
                    
                    <div class="message">
                    <i class="fa fa-circle-user fa-lg"></i> <p>George 
                    <span class="date"> May 3, 2015, 6:32 PM</span>
                    <p>Great blog post! Following</p>
                    </p>
                   
                </div>

                <form action="" method="post" class="form">
                        <input type="text" placeholder="Enter your name" required  name="username" style="padding:10px; width: 100%; margin:10px 0px;" id="">
                    <div class="form-mess">
                      
                          <textarea name="mess" id="mess" placeholder="write your comment"></textarea>
                        </div>  
<div class="form-btn">
                <button id="send">Send</button>          
</div>
            </form>

                </div>
</div>
<div class="col-1">
    <h1>TITLE HEADING</h1>
    <p>Title description,<span class="date"> May 2, 2016</span>
        </p>
        <img src="images/avatar_hat.jpg" alt="">
        <div class="content">
        <h3>More Hats! </h3><span> I am crazy about hats these days. Some text about this blog entry.
             Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. 
             Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. 
             Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum,
              porta lectus vitae, ultricies congue gravida diam non fringilla.

                Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                 nostrud exercitation ullamco.</span>
                 <br>
                 <button class="btn like  " id="like">Like</button>    <button class="btn reply"  id="reply">Replies</button>   
                </div>
                <!-- Replies -->
                <div class="comment" id="comment">
                <div class="message">
                    <i class="fa fa-circle-user fa-lg"></i> <p>George 
                    <span class="date"> May 3, 2015, 6:32 PM</span>
                    <p>Great blog post! Following</p>
                    </p>
                   
                </div>
                <form action="" method="post" class="form">
                <input type="text" placeholder="Enter your name" required  name="username" style="padding:10px; width: 100%; margin:10px 0px;" id="">
                
                    <div class="form-mess">
                          <textarea name="mess" id="mess" placeholder="write your comment"></textarea>
                        </div>  
<div class="form-btn">
                <button id="send">Send</button>
</div>
            </form>
                </div>
</div>
<div class="col-1">
    <h1>TITLE HEADING</h1>
    <p>Title description,<span class="date"> May 2, 2016</span>
        </p>
        <img src="images/runway.jpg" alt="">
        <div class="content">
        <h3>More Hats! </h3><span> I am crazy about hats these days. Some text about this blog entry.
             Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. 
             Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. 
             Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum,
              porta lectus vitae, ultricies congue gravida diam non fringilla.

                Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                 nostrud exercitation ullamco.</span>
                 <br>
                 <button class="btn like" id="like"  >Like</button>    <button class="btn reply"   id="reply">Replies</button>   
                </div>
                <!--Replies -->
                <div class="comment" id="comment">
                <div class="message">
                    <i class="fa fa-circle-user fa-lg"></i> <p>George 
                    <span class="date"> May 3, 2015, 6:32 PM</span>
                    <p>Great blog post! Following</p>
                    </p>
                   
                </div>

                <form action="" method="post" class="form">
                <input type="text" placeholder="Enter your name" required  name="username" style="padding:10px; width: 100%; margin:10px 0px;" id="">
                
                    <div class="form-mess">
                      
                          <textarea name="mess" id="mess" placeholder="write your comment"></textarea>
                        </div>  
<div class="form-btn">
    
                <button name="send" id="send">Send</button>                
</div>
    </form>
                  </div>
</div>
    </div>
</div>
    <!-- side two -->
    <div class="col-2">
        <div class="myname">
            <img src="images/avatar_girl2.jpg" alt="" srcset="">
            <div class="myname-content">
                <h4>My Name</h4>
<p>
    Just me, myself and I, exploring the universe of uknownment. 
    I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. 
    I want to share my world with you.
</p>
            </div>
        </div>
        <!-- popular -->
        <div class="popular">
<div class="popular-head">
    <h2>POPULAR POST</h2>
</div>
<div class="popular-list-item">
<img src="images/avatar_smoke.jpg" alt="avatar_smoke">
<div class="popular-list-content">
<h4>Denim</h4>
<p>Sed mattis nunc</p>
</div>

</div>
<div class="popular-list-item">
<img src="images/avatar_smoke.jpg" alt="avatar_smoke">
<div class="popular-list-content">
<h4>Denim</h4>
<p>Sed mattis nunc</p>
</div>

</div>
<div class="popular-list-item">
<img src="images/avatar_smoke.jpg" alt="avatar_smoke">
<div class="popular-list-content">
<h4>Denim</h4>
<p>Sed mattis nunc</p>
</div>

</div>
<div class="popular-list-item">
<img src="images/avatar_smoke.jpg" alt="avatar_smoke">
<div class="popular-list-content">
<h4>Denim</h4>
<p>Sed mattis nunc</p>
</div>

</div>
        </div>

        <div class="advert">
        <div class="advert-head">
            <h2>Advertise</h2>
        </div>
            <div class="advert-frame">
<div class="advert-body">
<p>Your AD Here </p>
</div>
            </div>
        </div>
        <div class="tag">
        <div class="tag-head">
        <h2>Tags</h2>
        </div>
        <div class="tag-body">
        <span>Fashion</span>
        <span>New York</span>
        <span>London</span>
        <span>Hats</span>
        <span>Norway</span>
        <span>Sweaters</span>
        <span>Ideas</span>
        <span>Deals</span>
        <span>Accessories</span>
        <span>News</span>
        <span>Clothing</span>
        <span>Shopping</span>
        <span>Jeans</span>
        <span>Trends</span>
        </div>
        </div>
        <div class="inspiration">
<div class="inspiration-head">
    <h2>Inspiration</h2>
</div>
<div class="inspiration-body">
<img src="images/avatar_hat.jpg" class="inspiration-img" alt="">
<div class="div2">
   <img src="images/jeans.jpg" id="div2" alt="" srcset="">
</div>
        </div>
        
<div class="inspiration-body">
<img src="images/man_hat.jpg" class="inspiration-img" alt="">
<div class="div2">
   <img src="images/team1.jpg" id="div2" alt="" srcset="">
</div>
        </div>
        
    </div>
    <div class="subscribe">
    <div class="sub-head">
   <h2> Subscribe</h2>
    </div>
    <div class="sub-body">
    <form action="" method="post">
    <p>Enter your e-mail below and get notified on the latest blog posts.</p>
    <input type="email" name="email" id="email" placeholder="enter your email">

    <button type="submit"  class="sub">
    Subscribe</button>
    </form>
    </div>
    </div>
    </div>
    <div class="footer">
    <a href="#top" class="top">To the top</a>
    <p>powered by <a href="#">Olaitech</a> </p>
    </div>
    <?php
    if(isset( $_POST['send'])){
    $Uname=$_POST["username"];
    $mess=$_POST["mess"];
    $sql="INSERT INTO details('username','comment',) VALUES ('$Uname','$mess')";
    $result=mysqli_query($connect,$sql);
    }?>
</body>
<script>
  function funcs(){
var sub=document.getElementById("sub");
var modal=document.getElementById("modal");
  }
  funcs();
sub.onclick=function(){
  modal.style.display="block";
window.onclick=function(e){
if(e.target== modal){
    modal.style.display="none";
}
}
}
var like=document.getElementsByClassName("like");
var comment=document.getElementsByClassName("comment");
var reply=document.getElementsByClassName("reply");
for (let index = 0; index < like.length; index++) {
like[index].onclick=function(){
    if(like[index].innerHTML==="Like"){
     like[index].innerHTML="Liked";
     like[index].classList+="  fa fa-check fa-lg";

 }else 
 if(like[index].innerHTML==="Liked"){
     like[index].innerHTML="Like";
     like[index].classList.remove("icon-check");
 }}
 reply[index].onclick=function(){

if(comment[index].style.display==="none"){
comment[index].style.display="block";
}else{
comment[index].style.display="none";
}
}
 }
</script>
</html>