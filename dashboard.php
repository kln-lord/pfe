<?php
//include auth_session.php file on all user panel pages
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        p{
            font-family: 'futura';
            color: white;
            text-align: center;
        }
        a {
            text-decoration:none;
            color: white;
            cursor: pointer;
        }
        body{
            background-image: url("Card.png");
        }
    </style>
</head>
<body>
<header id = "header" role="banner" class="kln-header">
        <div class="containerNav">
            <input id="toggle" type="checkbox">
        
            <label class="toggle-container" for="toggle">
             
              <span class="button button-toggle" id="buttonNav"></span>
            </label>
        
            <!-- The Nav Menu -->
            <nav class="nav" id="navMenu">
              <div class="nav-item" id="lg" onclick="logReg()">LogIn</div>
              <div class="nav-item"  id="rg" onclick="RegisterButton()">Register</div>
              <div class="nav-item" >Hey there</div>

            </nav>
        
    
          </div>
        <div class="kln-banner">
            <div id="srch-banner" class = "button-banner-search" >SEARCH</div>
            <button class = "button-banner-book">BOOK</button>
            <div class = "logo">TRAV</div>
            <div  id="srch" class="search" onmouseover="myFunction()">
                    <input type="text" placeholder=" ">
                    <div>
                        <svg>
                            <use xlink:href="#path">
                        </svg>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 28" id="path">
                        <path d="M32.9418651,-20.6880772 C37.9418651,-20.6880772 40.9418651,-16.6880772 40.9418651,-12.6880772 C40.9418651,-8.68807717 37.9418651,-4.68807717 32.9418651,-4.68807717 C27.9418651,-4.68807717 24.9418651,-8.68807717 24.9418651,-12.6880772 C24.9418651,-16.6880772 27.9418651,-20.6880772 32.9418651,-20.6880772 L32.9418651,-29.870624 C32.9418651,-30.3676803 33.3448089,-30.770624 33.8418651,-30.770624 C34.08056,-30.770624 34.3094785,-30.6758029 34.4782612,-30.5070201 L141.371843,76.386562" transform="translate(83.156854, 22.171573) rotate(-225.000000) translate(-83.156854, -22.171573)"></path>
                    </symbol>
                </svg>
                <nav>
                <ul id="main1">
                    <li>Language
                    <ul class="drop">
                        <div>
                        <li class="fr">French</li>
                        <li class="en">English</li>
                        </div>
                    </ul>
                    </li>
                    </ul>
                </nav>
                <nav>
                <ul id="main2">
                    <li>Account
                    <ul class="drop">
                        <div>
                        <li class="lg settings" id="settings" onclick="">Settings</li>
                        <li class="rg logout" id="logout" href="logout.php">Logout</li>
                        </div>
                    </ul>
                    </li>
                    </ul>
                </nav>
        </div>
        
        
    </header>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <!-- <p><a style="display:block" href="logout.php">Logout</a></p> -->
    </div>
</body>
</html>