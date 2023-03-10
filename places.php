<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location:home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="icon" href="Tlogo.ico">
    <title>Trav-Places</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url(madridHome.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;

        /* font */
        font-family: 'futura';
        font-size: 1rem;
    }


    #main1 {
        position: absolute;
        list-style: none;
        background: transparent;
        -webkit-text-size-adjust: 100%;
        letter-spacing: .025rem;
        line-height: 1.5rem;
        font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
        color: #fff;
        font-size: .8em;
        fill-rule: evenodd;
        fill: currentColor;
        text-transform: uppercase;
        display: inline-block;
        padding: 0;
        color: #fff;
        margin-top: -41px;
        margin-left: 65pc;
        transition: all .6s ease;
        user-select: none;
        height: 120px;
    }
    #main1::before{
        content: "";
        position: absolute;
        z-index: 1;
        left: 18px;
        top: 40px;
        right: 100%;
        bottom: 0;
        background: #f6d2b7;
        height: 3px;
        -webkit-transition-property: right;
        transition-property: right;
        -webkit-transition-duration: 0.6s;
        transition-duration: 0.6s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }
    #main1:hover::before, #main1:focus::before, #main1:active::before{
        transition-duration: .5s;
        right: 15px;
        left: 18px;
    }
    #main1 li {
    font-size: 0.8rem;
    display: inline-block;
    position: relative;
    padding: 20px 0px;
    cursor: pointer;
    z-index: 5;
    min-width: 120px;
    margin-top: -5px;
    }


    #main1 div li{
        display: none;
    }


    #main1:hover div li{
        display: inline-block;
    }

    li:hover{
        display: inline-block;
    }

    li {
        margin: 0;
        text-align: center;
        user-select: none;

    }

    .drop {
        overflow: hidden;
        list-style: none;
        position: absolute;
        padding: 0;
        width: 70px;
        left: 0;
        margin-left: 0px;
        padding-right: 50px;
        top: 65px;
    }

    .drop div {
        -webkit-transform: translate(0, -100%);
        transform: translate(0, -100%);
        -webkit-transition: all 0.5s 0.1s;
        transition: all 0.5s 0.1s;
        position: relative;
    }
    .drop li {
        display: block;
        padding: 0;
        width: 70px;
        background: white;
        color: #f6d2b7;

    }

    #marker {
        height: 6px;
        background: transparent !important;
        position: absolute;
        bottom: 0;
        width: 120px;
        z-index: 2;
        -webkit-transition: all 0.35s;
        transition: all 0.35s;
    }

    #main1 li:nth-child(1):hover ul div {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
    }
    #main1 li:nth-child(1):hover ~ #marker {
        -webkit-transform: translate(0px, 0);
        transform: translate(0px, 0);
    }

    #main2 {
        position: absolute;
        list-style: none;
        background: transparent;
        -webkit-text-size-adjust: 100%;
        letter-spacing: .025rem;
        line-height: 1.5rem;
        font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
        color: #fff;
        font-size: .8em;
        fill-rule: evenodd;
        fill: currentColor;
        text-transform: uppercase;
        display: inline-block;
        padding: 0;
        color: #fff;
        margin-top: -41px;
        margin-left: 58pc;
        transition: all .6s ease;
        user-select: none;
        height: 120px;

    }
    #main2::before{
        content: "";
        position: absolute;
        z-index: 1;
        left: 18px;
        top: 40px;
        right: 100%;
        bottom: 0;
        background: #f6d2b7;
        height: 3px;
        -webkit-transition-property: right;
        transition-property: right;
        -webkit-transition-duration: 0.6s;
        transition-duration: 0.6s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }
    #main2:hover::before, #main2:focus::before, #main2:active::before{
        transition-duration: .5s;
        right: 15px;
        left: 18px;
    }
    #main2 li {
        font-size: 0.8rem;
        position: relative;
        padding: 20px 0px;
        cursor: pointer;
        z-index: 5;
        min-width: 120px;
        display: inline-block;
        margin-top: -5px;

    }

    #main2 div li{
        display: none;

    }

    #main2:hover div li{
        display: inline-block;
    }

    li:hover{
        display: inline-block;
    }


    #main2 li:nth-child(1):hover ul div {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);

        
    }
    #main2 li:nth-child(1):hover ~ #marker {
        -webkit-transform: translate(0px, 0);
        transform: translate(0px, 0);
    }


    .logo{
        -webkit-text-size-adjust: 100%;
        letter-spacing: .025rem;
        line-height: 1.5rem;
        font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
        color: #fff;
        font-size: 2em;
        fill-rule: evenodd;
        fill: currentColor;
        text-align: center;
        padding-top: 27px;
        width: 100%;
        height:55px;
        user-select: none;
        transition: all .6s ease;

    }
    .kln-banner{
        background-color: transparent;
        height: 85px;
        transition: all .6s ease;


    }

    .kln-banner:hover{
        background-color: white;


    }
    .kln-banner:hover .logo{
        transition: all .6s ease;
        color: #f6d2b7;
    }
    .kln-banner:hover .button-banner-search{
        color: #f6d2b7;
        transition: all .6s ease;

    }
    .kln-banner:hover .button-banner-book{
        color: #f6d2b7;
        transition: all .6s ease;

    }

    #profileImg{
        position:absolute;
        height:100px;
        width:100px;
        border-radius:50%;
        scale : 0.4;
        margin:0;
        margin-left:-80px;
        margin-top:-18px;
        padding:0;
        top:0;
  
    }



    .kln-banner:hover #main1{
        color: #f6d2b7;
        transition: all .6s ease;
    }
    .kln-banner:hover #main2{
        color: #f6d2b7;
        transition: all .6s ease;
    }
    .fr{
        margin : 5px 0px;
        z-index:3;
        transition: all .6s ease;

    }
    .fr:hover{
        background-color: #f6d2b7;
        color: white;

    }
    .lg{
        margin : 5px 0px;
        z-index:3;
        transition: all .6s ease;

    }
    .lg:hover{
        background-color: #f6d2b7;
        color: white;

    }
    .en{
        transition: all .6s ease;

    }
    .en:hover{
        background-color: #f6d2b7;
        color: white;
    }
    .rg{
        transition: all .6s ease;

    }
    .rg:hover{
        background-color: #f6d2b7;
        color: white;
    }


    .button-banner-search{
        -webkit-text-size-adjust: 100%;
        letter-spacing: .025rem;
        line-height: 1.5rem;
        font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
        color: #fff;
        font-size: .8em;
        fill-rule: evenodd;
        fill: currentColor;
        background:transparent; 
        border: none;
        position: absolute;
        display:block;
        margin-left: 20px;
        margin-top: 26px;
        width:100px;
        height:30px;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
        cursor: pointer;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        overflow: hidden;
        user-select: none;
        transition: all .6s ease;

    }





    .button-banner-book{
        -webkit-text-size-adjust: 100%;
        letter-spacing: .025rem;
        line-height: 1.5rem;
        font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
        color: #fff;
        font-size: .8em;
        fill-rule: evenodd;
        fill: currentColor;
        background:transparent; 
        border: none;
        position: absolute;
        display:block;
        margin-left: 1150px;
        margin-top: 24px;
        width:100px;
        height:30px;
        cursor: pointer;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        overflow: hidden;
        transition: all .6s ease;

    }
    .button-banner-book::before{
        content: "";
        position: absolute;
        z-index: -1;
        left: 23px;
        right: 100%;
        bottom: 0;
        background: #f6d2b7;
        height: 3px;
        -webkit-transition-property: right;
        transition-property: right;
        -webkit-transition-duration: 0.5s;
        transition-duration: 0.5s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }
    .button-banner-book:hover::before, .button-banner-book:focus::before, .button-banner-book:active::before{
        transition-duration: .5s;
        right: 23px;
        left: 23px;
    }

    .kln-banner:hover .search input + div svg {
    stroke: #f6d2b7;

    }
    .kln-banner:hover .search input {
        color: #f6d2b7;
    }
    .search {
        display: table;
        margin-top: -58px;
        margin-left: 80px;
    }
    .search input {
        background: none;
        border: none;
        outline: none;
        width: 28px;
        min-width: 0;
        padding: 0;
        z-index: 1;
        position: relative;
        line-height: 18px;
        margin: 5px 0;
        font-size: 12.7PX;
        font-family: 'futura';
        transition: all .6s ease;
        cursor: pointer;
        color: #fff;
        z-index: 3;

    }
    .search input + div {
        position: relative;
        height: 28px;
        width: 100%;
        margin: -28px 0 0 0;
        
    }
    .search input + div svg {
        display: block;
        position: absolute;
        height: 28px;
        width: 150px;
        right: 0;
        top: 0;
        fill: none;
        stroke: #fff;
        stroke-width: 2px;
        stroke-dashoffset: 271.908;
        stroke-dasharray: 59 212.908;
        transition: all .6s ease;

        
    }
    .search input:not(:placeholder-shown), .search input:focus {
        width: 140px;
        padding: 0 4px;
        cursor: text;
    }
    .search input:not(:placeholder-shown) + div svg, .search input:focus + div svg {
        stroke-dasharray: 150 212.908;
        stroke-dashoffset: 300;
    }

    ::-moz-selection {
        background: rgba(255, 255, 255, 0.2);
    }

    ::selection {
        background: rgba(255, 255, 255, 0.2);
    }

    ::-moz-selection {
        background: rgba(255, 255, 255, 0.2);
    }

    /* places */


    .places{
        margin-top: 500px;
        display: flex;
        justify-content: center;
        width: 100%;
        background-color: white;
        height: 120vh;
    }

    .destinations{
        color: #000;
        position: absolute;
        text-align: center;
        margin-top: 200px;
        font-size: 2rem;

    }

    .places img{
        padding-top: 370px;
        width: 300px;
        height: 200px;
        object-fit: cover;
        margin: 0 10px;
        align-items: center;
        transition: all 1s ease;

    }

    .place2 img{
        height: 450px;
        padding-top: 270px;
        object-fit: cover;
        filter: brightness(70%);

    }

    .places .place1:hover img{
        height: 450px;
        padding-top: 270px;
        object-fit: cover;
        filter: brightness(70%);
    }
    /* .places .place2:hover img{
        height: 450px;
        padding-top: 270px;
        object-fit: cover;
        filter: brightness(70%);
    } */
    .places .place3:hover img{
        height: 450px;
        padding-top: 270px;
        object-fit: cover;
        filter: brightness(70%);
    }
    .places1{
        margin-top: -250px;
        display: flex;
        justify-content: center;
        width: 100%;
        background-color: white;
        height: 100vh;
        
    }

    .places1 img{
        padding-top: 300px;
        width: 300px;
        height: 200px;
        object-fit: cover;
        margin: 0 10px;
        align-items: center;
        transition: all 1s ease;

        
    }
    .places1 .place4:hover img{
        height: 450px;
        padding-top: 200px;
        object-fit: cover;
        filter: brightness(70%);
    }
    .places1 .place5:hover img{
        height: 450px;
        padding-top: 200px;
        object-fit: cover;
        filter: brightness(70%);
    }
    .places1 .place6:hover img{
        height: 450px;
        padding-top: 200px;
        object-fit: cover;
        filter: brightness(70%);
    }


    /* add to favorites */

    .btn-secondary {
	    display: block;
	    margin: -60px auto 0px;
        text-align: center;
        background: #f6dcc8;
        border-radius: 3px;
        box-shadow: 0 10px 20px -8px #d09b68;
        padding: 10px 17px;
        font-size: 18px;
        border: none;
        outline: none;
        color: #ffffff;
        text-decoration: none;
        -webkit-transition: 0.3s ease;
        transition: all 0.6s ease;
        scale: 0.8;
        cursor: pointer;
    }
    /* .btn-secondary:hover {
        transform: translateY(-3px);
    } */
    .btn-secondary .fa {
        margin-right: 5px;
    }

    .choicesContainer{
        position: absolute;
        display: flex;
        justify-content: center;
        background-color: #ffffff;
        height: 150px;
        width: 90%;
        margin-top: 425px;
        margin-left: 60px;
        border-radius: 5px;
        z-index: 2;
        box-shadow: 0 2px 10px -5px #000;


    }

    .where{
        font-size: 1.5rem;
        padding-top: 30px;

    }

    /* input style */
    .inp1 {
        position: absolute;
        margin:auto;
        width: 100%;
        max-width: 280px;
        height: 53px;
        margin-left: -720px;
        margin-top: 80px;
        scale: 0.7;

    }
    .inp1 .border {
        position: absolute;
        left: 0;
        bottom: 0;
        height: 18px;
        fill: none;
    }
    .inp1 .border path {
        stroke: black;
        stroke-width: 2;
    }
    .inp1 .border path d {
        transition: all 0.2s ease;
    }
    .inp1 .check {
        position: absolute;
        top: 20px;
        right: 20px;
        fill: none;
        transform: translate(0, 9px) scale(0);
        transition: all 0.3s cubic-bezier(0.5, 0.9, 0.25, 1.3);
        transition-delay: 0.15s;
    }
    .inp1 .check path {
        stroke: black;
        stroke-width: 2;
    }
    .inp1 input {
        width: 100%;
        border: 0;
        font-family: "futura";
        padding: 0;
        height: 48px;
        font-size: 16px;
        font-weight: 500;
        background: none;
        border-radius: 0;
        color: black;
        transition: all 0.15s ease;
    }
    .inp1 input:focus {
        outline: none;
    }
    .inp1 input:focus + .border path {
        stroke: black;
    }
    .inp1 input:valid + .border path {
        animation: elasticInput 0.8s ease forwards;
    }
    .inp1 input:valid + .border + .check {
        transform: translate(0, 0) scale(1);
    }

    .inp2 {
        position: absolute;
        margin:auto;
        width: 100%;
        max-width: 280px;
        height: 53px;
        margin-left: -480px;
        margin-top: 80px;
        scale: 0.7;
    }
    .inp2 .border {
        position: absolute;
        left: 0;
        bottom: 0;
        height: 18px;
        fill: none;
    }
    .inp2 .border path {
        stroke: black;
        stroke-width: 2;
    }
    .inp2 .border path d {
        transition: all 0.2s ease;
    }
    .inp2 .check {
        position: absolute;
        top: 20px;
        right: 20px;
        fill: none;
        transform: translate(0, 9px) scale(0);
        transition: all 0.3s cubic-bezier(0.5, 0.9, 0.25, 1.3);
        transition-delay: 0.15s;
    }
    .inp2 .check path {
        stroke: black;
        stroke-width: 2;
    }
    .inp2 input {
        width: 100%;
        border: 0;
        font-family: "futura";
        padding: 0;
        height: 48px;
        font-size: 16px;
        font-weight: 500;
        background: none;
        border-radius: 0;
        color: black;
        transition: all 0.15s ease;
    }
    .inp2 input:focus {
        outline: none;
    }
    .inp2 input:focus + .border path {
        stroke: black;
    }
    .inp2 input:valid + .border path {
        animation: elasticInput 0.8s ease forwards;
    }
    .inp2 input:valid + .border + .check {
        transform: translate(0, 0) scale(1);
    }

    .inp3 {
        position: absolute;
        margin:auto;
        width: 100%;
        max-width: 280px;
        height: 53px;
        margin-left: -240px;
        margin-top: 80px;
        scale: 0.7;
    }
    .inp3 .border {
        position: absolute;
        left: 0;
        bottom: 0;
        height: 18px;
        fill: none;
    }
    .inp3 .border path {
        stroke: black;
        stroke-width: 2;
    }
    .inp3 .border path d {
        transition: all 0.2s ease;
    }
    .inp3 .check {
        position: absolute;
        top: 20px;
        right: 20px;
        fill: none;
        transform: translate(0, 9px) scale(0);
        transition: all 0.3s cubic-bezier(0.5, 0.9, 0.25, 1.3);
        transition-delay: 0.15s;
    }
    .inp3 .check path {
        stroke: black;
        stroke-width: 2;
    }
    .inp3 input {
        width: 100%;
        border: 0;
        font-family: "futura";
        padding: 0;
        height: 48px;
        font-size: 16px;
        font-weight: 500;
        background: none;
        border-radius: 0;
        color: black;
        transition: all 0.15s ease;
    }
    .inp3 input:focus {
        outline: none;
    }
    .inp3 input:focus + .border path {
        stroke: black;
    }
    .inp3 input:valid + .border path {
        animation: elasticInput 0.8s ease forwards;
    }
    .inp3 input:valid + .border + .check {
        transform: translate(0, 0) scale(1);
    }

    .inp4 {
        position: absolute;
        margin:auto;
        width: 100%;
        max-width: 280px;
        height: 53px;
        margin-left: 0px;
        margin-top: 80px;
        scale: 0.7;
    }
    .inp4 .border {
        position: absolute;
        left: 0;
        bottom: 0;
        height: 18px;
        fill: none;
    }
    .inp4 .border path {
        stroke: black;
        stroke-width: 2;
    }
    .inp4 .border path d {
        transition: all 0.2s ease;
    }
    .inp4 .check {
        position: absolute;
        top: 20px;
        right: 20px;
        fill: none;
        transform: translate(0, 9px) scale(0);
        transition: all 0.3s cubic-bezier(0.5, 0.9, 0.25, 1.3);
        transition-delay: 0.15s;
    }
    .inp4 .check path {
        stroke: black;
        stroke-width: 2;
    }
    .inp4 input {
        width: 100%;
        border: 0;
        font-family: "futura";
        padding: 0;
        height: 48px;
        font-size: 16px;
        font-weight: 500;
        background: none;
        border-radius: 0;
        color: black;
        transition: all 0.15s ease;
    }
    .inp4 input:focus {
        outline: none;
    }
    .inp4 input:focus + .border path {
        stroke: black;
    }
    .inp4 input:valid + .border path {
        animation: elasticInput 0.8s ease forwards;
    }
    .inp4 input:valid + .border + .check {
        transform: translate(0, 0) scale(1);
    }

    .goButton{
        position: absolute;
        font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
        text-align: center;
        width: 150px;
        height: 40px;
        background-color: #d09b68;
        color: white;
        border: none;
        margin-top: 90px;
        margin-left: 950px;
        box-shadow: 0 10px 20px -8px #d09b68;
        transition: all .6s ease;
        cursor: pointer;

        
}
.goButton:hover {
    background-color: white;
    color: #d09b68;
}
    

</style>
<body>
    <header>
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
                    <li id="Acc">Account
                    <ul class="drop">
                        <div>
                        <li class="lg" id="lg" onclick="logReg()">Login</li>
                        <li class="rg" id="rg" onclick="RegisterButton()">Register</li>
                        </div>
                    </ul>
                    </li>
                    </ul>
                </nav>
        </div>
    </header>
    <div id = "choicesContainer" class = "choicesContainer">
        <div class="where">Where do you want to go</div>
        <div class="choices">
    <form name="whereTo" action="">
        <label for="inp" class="inp1">
            <input type="text" id="inp" placeholder="Going To" list="availablePlaces" pattern=".{6,}" required >
            <datalist id="availablePlaces">
                    <option value="New York">New York</option>
                    <option value="London">London</option>
                    <option value="Paris">Paris</option>
                    <option value="Tokyo">Tokyo</option>
                    <option value="Dubai">Dubai</option>
                    <option value="Barcelona">Barcelona</option>
                    <option value="Madrid">Madrid</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Amsterdam">Amsterdam</option>
                    <option value="Seoul">Seoul</option>
            </datalist>
            <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
            </svg>
            <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                <path d="M1 7 5.5 11 L13 1"></path>
            </svg>
        </label>
        <label for="inp" class="inp2">
            <input type="text" id="inp" placeholder="Check-in" pattern=".{6,}" required onfocus="(this.type='date')" onblur="(this.type='text')">
            <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
            </svg>
            <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                <path d="M1 7 5.5 11 L13 1"></path>
            </svg>
        </label>
        <label for="inp" class="inp3">
            <input type="text" id="inp" placeholder="Check-out" pattern=".{6,}" required onfocus="(this.type='date')" onblur="(this.type='text')">
            <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
            </svg>
            <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                <path d="M1 7 5.5 11 L13 1"></path>
            </svg>
        </label>
        <label for="inp" class="inp4">
            <input type="text" id="inp" placeholder="Your Budget" pattern=".{7,}" required>
            
            <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
            </svg>
            <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                <path d="M1 7 5.5 11 L13 1"></path>
            </svg>
        </label>
        </div>
        <button class='goButton' type="submit">Go</button>
    </form>
    </div>
    <div class="places">
        <div class="destinations">Destinations<center style="font-size:0.8rem; color: #d09b68;">Places you need to visit</center></div>
        <div class="place1"><img src='place4.jpg'><button class="btn-secondary like-review" id = "btn-secondary1"><i class="fa fa-heart" aria-hidden="true"></i> Like</button></div>
        <div class="place2"><img src='place2.jpg'><button class="btn-secondary like-review" id = "btn-secondary2"><i class="fa fa-heart" aria-hidden="true"></i> Like</button></div>
        <div class="place3"><img src='city.jpg'><button class="btn-secondary like-review" id = "btn-secondary3"><i class="fa fa-heart" aria-hidden="true"></i> Like</button></div>
    </div>
    <div class="places1">
        <div class="place4"><img src='mexico.jpg'><button class="btn-secondary like-review" id = "btn-secondary4"><i class="fa fa-heart" aria-hidden="true"></i> Like</button></div>
        <div class="place5"><img src='chefchaouen.jpg'><button class="btn-secondary like-review" id = "btn-secondary5"><i class="fa fa-heart" aria-hidden="true"></i> Like</button></div>
        <div class="place6"><img src='canada.jpg'><button class="btn-secondary like-review" id = "btn-secondary6"><i class="fa fa-heart" aria-hidden="true"></i> Like</button></div>
    </div>

    
</body>
<script>
    var likeButton1 = document.getElementById("btn-secondary1");
    likeButton1.addEventListener('click',function(){
        likeButton1.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
    })
    var likeButton2 = document.getElementById("btn-secondary2");
    likeButton2.addEventListener('click',function(){
        likeButton2.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
    })
    var likeButton3 = document.getElementById("btn-secondary3");
    likeButton3.addEventListener('click',function(){
        likeButton3.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
    })
    var likeButton4 = document.getElementById("btn-secondary4");
    likeButton4.addEventListener('click',function(){
        likeButton4.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
    })
    var likeButton5 = document.getElementById("btn-secondary5");
    likeButton5.addEventListener('click',function(){
        likeButton5.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
    })
    var likeButton6 = document.getElementById("btn-secondary6");
    likeButton6.addEventListener('click',function(){
        likeButton6.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
    })


    function logout(){
            window.location.replace("http://localhost/project/logout.php");
    }

    function replace(username){
            // window.location.replace("http://localhost/project/dashboard.php");
            document.getElementById("Acc").innerHTML = "<img id='' src = ''>";
            document.getElementById("Acc").innerHTML += username;
            document.getElementById("Acc").innerHTML += "<ul class='drop'><div><li class='lg settings' id='settings' onclick=''>Settings</li><li class='rg logout' id='logout' onclick='logout()'>Logout</li></div></ul></li></ul>";
            
    }
</script>
<?php
    echo '<script>replace('.json_encode($_SESSION['username']).')</script>';
?>
</html>