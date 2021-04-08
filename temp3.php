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
    }
    .navbar{
        background: white;
        width: 100%;
        position: fixed;
        box-shadow: 2px 2px 3px 2px rgba(0, 0, 0, .2);
        z-index: 1;
        padding: 5PX;
    }
    .navbar a{
        text-decoration: none;
        float: left ;
        color: #000;
        padding: 22px 20px;
        font-size: 18px;
        letter-spacing: 5px;
    }
    .navbar a:hover{
background: #eee;

    }
    .navbar .nav-link{
        float: right;
    }
    @media screen and (max-width: 600px) {
        .nav-link{
            display: none;
        }
    }
    .bg{
        width: 100%;
        color: #fff;
        position: relative;
    }
    .bg img{
        width: 100%;
        vertical-align: middle;
    }
    .content-logo{
        position: absolute;
        top: 50%;
        left: 50%;
        display: inline-block;
        /* transform: translate(-50,-50); */
    }
    .project{
        margin-top: ;
        margin:30px 5% 20px;
    }
    .project h3{
        letter-spacing: 1px;
        font-size: 2em;
        margin-bottom: 15px;
      
    }
    hr{
        border: 0;
        border-bottom-style:solid;
         border-bottom-width: 1px;
         color: #eee;
         outline: none;
         margin-bottom: 20px;
    }
    .project-img{
        float: left;
        width: 24%;
        margin-right: 1%;
        margin-bottom:15px;
        position: relative;
    }
    .project-img img{
        width: 100%;
       
    }

    .project-img span{
        background: #000;
        color: #fff;
        padding: 10px;
    position: absolute;
    top: 0;
    left: 0;
   
    }
    @media screen and (max-width: 600px) {
        .project-img{
            width: 100%;
        }
    }
    .about{
        margin: 40px 5%;
    }
    .about p{
        letter-spacing: 1px;
    }
    .card{
        margin-top:30px; 
        width: 21%;
        float: left;
     
    }
    @media screen and (max-width: 600PX) {
        .card{
            width: 100%;
        }
    }
    .card:not(:last-child){
        margin-right:4.5%; 
    }
    .card img{
        width: 100%;
        filter:grayscale(1);
    }
    .card h3{
        margin: 15px 0px;
    }
    .card .status{
        color: #555;
        margin-bottom: 15px;
    }
    .card p.description
    {
text-align: left;
padding: 5px 0px;
    }
.card .card-footer{
background: #eee;
width: 100%;
padding: 5px;
text-align: center;
cursor: pointer;
}
.card .card-footer:hover{
background: #ccc;
}
/* contact */
.contact{
    margin: 30px 5%;
    padding: 5px 0;
}
.contact form input{
    width: 100%;
    height: 40px;
    margin-bottom: 20px;
}
::placeholder{
    font-size: 17px;
    /* padding-left: 5px; */
}
.contact button{
    outline: none;
    border: none;
    cursor: pointer;
    padding: 10px;
    background: #000;
    color: #fff;
}
.bg .br{
    background: rgba(0,0,0, .8);
    padding: 10px;
    opacity: .8;

}
@media screen and (max-width: 600px) {
    .bg .arch{
        display: none;
    }
}
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#"><span><b>BR </b> Architects</span></a>
        <div class="nav-link">
            <a href="#">Projects</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </div>
    <!-- body -->
    <div class="bg">
<img src="images/architect.jpg" alt="">
<div class="content-logo">
<h1><span class="br">BR </span> <span class="arch">Architects</span></h1>
</div>

    </div>

    <!-- Projects -->
<div class="project">
<h3>Project</h3>
<hr>

<div class="project-img">
<img src="images/house5.jpg" alt="">
<span>Summer House</span>
</div>


<div class="project-img">
        <img src="images/house4.jpg" alt="">
        <span>Brick House</span>
        </div>
        
<div class="project-img">
        <img src="images/house3.jpg" alt="">
        <span>Renovated</span>
        </div>
        
<div class="project-img">
        <img src="images/house4.jpg" alt="">
        <span>Barn House</span>
        </div>
        
<div class="project-img">
        <img src="images/house3.jpg" alt="">
        <span>
                Brick House</span>
        </div>
        
<div class="project-img">
        <img src="images/house5.jpg" alt="">
        <span>Renovated</span>
        </div>
        
<div class="project-img">
        <img src="images/house4.jpg" alt="">
        <span>Summer House</span>
        </div>
        
<div class="project-img">
        <img src="images/house3.jpg" alt="">
        <span>Barn House</span>
        </div>
</div>
<!-- about -->
<div class="about">
    <h1>About</h1>
    <hr>
    <p>Lorem ipsum dolor sit amet,
         consectetur adipiscing elit, sed do eiusmod 
         tempor incididunt ut labore et dolore magna 
         aliqua. Ut enim ad minim veniam, quis 
         nostrud exercitation ullamco laboris 
         nisi ut aliquip ex ea commodo consequat.
          Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum consectetur 
            adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
            ea commodo consequat. </p>

            <div class="card">
                <img src="images/team2.jpg" alt="">
                <div class="card-content">
                    <h3>John Doe</h3>
                    <p class="status">CEO & Founder</p>
                    <p class="description">Phasellus eget enim eu lectus
                         faucibus vestibulum. Suspendisse 
                         sodales pellentesque elementum.</p>
                </div>
                <div class="card-footer">
                    Contact
                </div>
            </div>
            <div class="card">
                    <img src="images/team1.jpg" alt="">
                    <div class="card-content">
                        <h3>John Doe</h3>
                        <p class="status">CEO & Founder</p>
                        <p class="description">Phasellus eget enim eu lectus
                             faucibus vestibulum. Suspendisse 
                             sodales pellentesque elementum.</p>
                    </div>
                    <div class="card-footer">
                        Contact
                    </div>
                </div>
                <div class="card">
                        <img src="images/team3.jpg" alt="">
                        <div class="card-content">
                            <h3>John Doe</h3>
                            <p class="status">CEO & Founder</p>
                            <p class="description">Phasellus eget enim eu lectus
                                 faucibus vestibulum. Suspendisse 
                                 sodales pellentesque elementum.</p>
                        </div>
                        <div class="card-footer">
                            Contact
                        </div>
                    </div>
                    <div class="card">
                            <img src="images/team4.jpg" alt="">
                            <div class="card-content">
                                <h3>John Doe</h3>
                                <p class="status">CEO & Founder</p>
                                <p class="description">Phasellus eget enim eu lectus
                                     faucibus vestibulum. Suspendisse 
                                     sodales pellentesque elementum.</p>
                            </div>
                            <div class="card-footer">
                                Contact
                            </div>
                        </div>
        </div>

        <!-- Contact -->
<div class="contact">
    <h1>Contact</h1>
    <hr>
    <p >Lets get in touch and talk about your next project.</p>
<form action="temp1.html" method="POST" >
<input type="text" name="" id="name" placeholder="Name" required>
<br>
<input type="email" name="" id="email" placeholder="Email" required>
<br>
<input type="text" name="subject" id="subject" placeholder="Subject" required>
<br>
<input type="text" name="Comment" id="Comment" placeholder="Comment" >
<button type="submit">SEND MESSAGE</button>
</form>
</div>
        <div class="map" style="width:100%;height:400px">
            <script>
            var map=document.getElementsByClassName("map");
            var mapOption={center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5}
            var realmap=new.google.maps.Map(map,mapOption);
            </script>
        </div>
        <div style="background: #000; color:#fff; width:100%;height:100px; padding-top: 15px; text-align:center;">
            <p>Powered by <a href="#"> Olaitech

            </a>
            </p>
        </div>
</body>
</html>