<html>
    <head>
            <title>public1</title>
            <link rel="stylesheet" href="Response.css">
            <style>
                h6{
                font-size: 25px;
                color: white;
                font-style: italic;
               padding-left: 75px;
               padding-top: 45px;
                }
                p{
                    font-size: 40px;
                    text-align: center;
                }
                *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
h6{
    font-size: 50px;
}
#banner{
    background: linear-gradient(rgba(0,0,0,0.5),rgb(200, 232, 238)) ,url(IMG.jpg); 
    background-size: cover;
    background-position: center;
    height: 100vh;
    width: 100%;
}
p{
   padding-top: 20%;
   font-size: 50px;
   color: white;
}
.hero{
    height: 100%;
    width: 100%;
    background: linear-gradient(rgba(0,0,0,0.5),rgb(255, 255, 255)) ,url(IMG.jpg); 
    background-position: center;
    background-size: cover;
    position: absolute;
    }
.button-box{
        width: 150px;
        height: 20px;
        margin: 35px auto;
        position: relative;
        border-radius: 30px;
        text-align: center;
    }
.form-box{
    width: 450px;
    height: 150px;
    position: relative;
    margin: 6% auto;
    background: #fff;
    padding: 40px;
    overflow: hidden;
    margin-top: 19%;
}
.input-group{
    top: 190px;
    position: absolute;
    width: 280px;
    transition: .5s;
}
.input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid rgb(118, 117, 117);
    outline: none;
    background: transparent;
}
.submit-btn{
    font-size: 15px;
    margin-top: 95%;
    margin-left: 200%;
    width: 85%;
    padding: 12px 30px;
    cursor: pointer;
    display: block;
    
    background: linear-gradient(rgb(255, 255, 255), rgb(255, 255, 255));
    border: 0;
    outline: none;
    border-radius: 30px;
}
span{
    color: #777;
    font-size: 12px;
    bottom: 68px;
    position: absolute;
}
#login{
    left: 50px;
}
            </style>
    </head>
    <body>
        
        <section id="banner">   <h6>CONNECT TO NGO</h6>
            <div class="banner-text">
                
                <p><b>YOUR RESPONSE HAS BEEN SUBMITTED</b></p>
                <form method="post">
               <button type="submit" class="submit-btn"> <a href="feed.php"><b>Go To Feed</b></a></button>
</form>
                </div>        
        </section>   
    
    </body>
    </html>
    <?php
    include "connecting.php";
    
    ?>
