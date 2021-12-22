<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylephp.css">
</head>

<body>

    <div class="header">
        <form action="http://localhost:4000/final/wish.php" class="header-content" id="input-box">
            <input type="text" name="name" class="user-input " placeholder="Enter your name"><br>
            <!-- <input type="submit" class="user-input" > -->
            <button class="header-content create user-input" >create</button>
        </form>
        <button class="header-content follow" >follow <br> us</button>
    </div>
        <div class="wishing-text">
            <h1 class="username"> <?php echo $_GET['name']; ?> wishing you </h1>
            <h1 class="advance">Advance</h1>
            <div class="wrapper">
                
                <ul class="dynamic-txt">
                    <li><span> HealthY </span></li>
                    <li><span> Safe </span></li>
                </ul>
                <div class="static-txt"> New Year </div>
            </div>
            <!-- <img src="gifs/diya2.gif"> -->
            <p class="last-line"> Happy New Year </p>
            <h1 class="line4"> 2 0 2 2</h1>
            
        </div>
        

    <canvas id="Canvas"></canvas>
    <div class="countdown-container">
            
            
            <div class="countdown-El ">
                <p id="last-in">in</p>
                <span id="last-dot" style="color: black;">.</span>
            </div>
            <div class="countdown-El days-c">
                <p class="big-text" id="days">0</p>
                <span class="countWords">days</span>
            </div>
            <div class="countdown-El hours-c">
                <p class="big-text" id="hours">0</p>
                <span class="countWords">hours</span>
            </div>
            <div class="countdown-El mins-c">
                <p class="big-text" id="minutes">0</p>
                <span class="countWords">mins</span>
            </div>
            <div class="countdown-El seconds-c">
                <p class="big-text" id="seconds">0</p>
                <span class="countWords">seconds</span>
            </div>

        </div>


        <div class="social-menu">
          <ul>
            
            <li><a href="" class="whatsapp-btn"><i class="fa fa-whatsapp"></i></a></li>
            <li><a href="" class="facebook-btn"><i class="fa fa-facebook"></i></a></li>
            <li><a href="" class="instagram-btn"><i class="fa fa-instagram"></i></a></li>
            <li><a href="" class="twitter-btn"><i class="fa fa-twitter"></i></a></li>
            <!-- <li><a href=""><i class="fa fa-linkedin"></i></a></li> -->
          </ul>
        </div>



        <div class="footer">
            <p class="advertisement1">advertise</p>
            <p class="advertisement2">advertise</p>
            <div class="ad-bg">
                <img src="adimage.jpg" alt="Google-ads" class="ad">
            </div>
        </div>

    <script src="javascript.js"></script>
</body>

</html>