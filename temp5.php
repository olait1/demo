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
    body{
        background: #eee;
    }
    .navbar{
        text-align: center;
        position: relative;
        overflow: hidden;
        background: transparent;
        padding: 50px 0;
        font-size:1.5em;
    }
    .navbar p{
        margin:30px 0;
    }
    .navbar span{
        padding: 10px;
        background: #000;
        color: #fff;
    }
    .titled{
        width: 70%;
        margin: 30px 3% 0px 1%;
        float: left;

    }
   .title-heading{
        width: 100%;
        margin-bottom: 40px;
        
    }
    .title-heading1{
        width: 25%;
        float: right;
        margin-right: 1%;
        margin-top: 0;
        padding-top:0 ;
      
    }
    @media screen and (max-width: 600px) {
        .titled{
width: 98%;
        }
        .title-heading,.title-heading1{
            float: none;
        }
        .title-heading1{
            width: 98%;
            float: none;
        }
    }
    .title-head{
        overflow: hidden;
        background: #fff;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, .4);
    }
    .title-heading img{
        width: 100%;
    }

    .description,.head,.content,.title-footer{
        padding: 10px;
        background: #fff;
    }
    .content{
      
    }
    .date{
        color: #555;
    }
    .title-btn{
        padding: 10px;
        margin: 10px;
        cursor: pointer;
        outline-color: #000;
        border-style: solid;
        border-width: 1px;
    }
    .title-btn:hover {
   background: #999;
        border-color: #000;
    }
.country,.post{
    margin:30px 0;
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, .4);
    overflow: auto;
    background: #fff;
  
}
.tag{
background: #eee;
padding: 7px;
}
.tags{
    background: #fff;
    padding: 15px;
}
.tags span{
    padding: 2px;
    
}
.tags span:first-child{
    background: #000;
    color: #fff;
}
.posts{
    background: #eee;
    padding:10px;
}
.post-item{
    padding:10px;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, .1);
    overflow:auto;
}
.post-item img{
    width: 50px;
    height: 50px;
    vertical-align: middle;
    float: left;
    margin-right:10px;
    box-shadow: none;
}

.post-item:hover{
background: #eee;
cursor: pointer;
}
.footer{
    width: 100%;
    height: 300px;
    background: rgba(0, 0, 0, .5);
    content: "";
    clear: both;
}
.footer .nav,.footer p{
    padding: 10px;
    margin-left: 10px;
    margin-top: 40px;
   
    color: #fff;
    border: none;
    outline: none;
    cursor: pointer;
}
.footer .nav{
    background: #000;
}
.footer .prev{
    cursor:no-drop;
    background: rgba(0, 0, 0, .4);
}
    </style>
</head>
<body>
    <div class="navbar">
        <h2>MY BLOG</h2>
      <p>Welcome to the blog of <span> unknown</span></p>
    </div>
    <div class="titled">
          <div class="title-heading">
        <div class="title-head">
        <img src="images/woods.jpg" alt="">
        <div class="title-heading-caption">
      <h2 class="head">TITLE HEADING</h2>
      <p class="description">Title description,<span class="date">April 7, 2014</span></p>
      <p class="content">Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. 
          Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, 
           accumsan tortor cursus at. 
          Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus
           ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida
            diam non fringilla.</p>
            <div class="title-footer">
                <button class="title-btn">READ MORE</button>
                <span style="float: right;margin: 10px; font-weight: bold;">comment<span style="background: #000; margin-left:5px;padding: 5px; color: #fff;">0</span>
                    </span>
            </div>
        </div>
        </div>
    </div>
    <div class="title-heading">
            <div class="title-head">
            <img src="images/bridge.jpg" alt="">
            <div class="title-heading-caption">
          <h2 class="head">TITLE HEADING</h2>
          <p class="description">Title description,<span class="date">April 7, 2014</span></p>
          <p class="content">Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. 
              Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, 
               accumsan tortor cursus at. 
              Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus
               ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida
                diam non fringilla.</p>
                <div class="title-footer">
                    <button class="title-btn">READ MORE</button>
                    <span style="float: right;margin: 10px; font-weight: bold;">comment<span style="background: #000; margin-left:5px;padding: 5px; color: #fff;">0</span>
                        </span>
                </div>
            </div>
            </div>
        </div>
    </div>
    
        
    <div class="title-heading1">
        <div class="title-head">
        <img src="images/avatar_g.jpg" alt="">
        <div class="title-heading-caption">
      <h2 class="head">My Name</h2>
      <p class="content">Just me, myself and I, exploring the universe of uknownment. 
          I have a heart of love and a interest of lorem ipsum and mauris neque quam blog.
           I want to share my world with you.</p>
        </div>
        </div>
<div class="post">
    <div class="posts"><h2>Popular Posts</h2></div>
<div class="post-item">
<img src="images/workshop.jpg" alt="">
<div class="post-content">
    <h3>Ipsum</h3>
<p>Praes tinci sed</p> 
</div></div>
<div class="post-item">
    <img src="images/gondol.jpg" alt="">
    <div class="post-content">
        <h3>Ipsum</h3>
    <p>Praes tinci sed</p> 
    </div></div>
    
<div class="post-item">
    <img src="images/skies.jpg" alt="">
    <div class="post-content">
        <h3>Ipsum</h3>
    <p>Praes tinci sed</p> 
    </div></div>
    
<div class="post-item">
    <img src="images/rock.jpg" alt="">
    <div class="post-content">
        <h3>Ipsum</h3>
    <p>Praes tinci sed</p> 
    </div></div>
</div>

        <div class="country">
      <div class="tag"><h2>Tags</h2></div>
      <div class="tags">
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
    </div>
    <div class="footer">
<button class="nav prev">Previous</button>
<button class="nav">Next</button>
<p style="color: #fff;">Powered by <a href="#" style="color: #fff;">Olaitech</a></p>
    </div>
</body>
</html>