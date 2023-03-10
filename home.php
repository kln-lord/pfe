<?php       
            namespace PHPMailer\PHPMailer;
            //first thing always
            session_start();      
?>
<!DOCTYPE html>
<html>
   <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <link rel="icon" href="Tlogo.ico">
    <link rel="stylesheet" href="font-awesome.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    
    <title>Trav</title>
   </head>
   <style>
    html{
    scroll-behavior:smooth;
}


.containerNav{
    display: none;
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
    background: black;
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
    color: black;

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
    background: black;
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



body{
    margin: 0; padding: 0;
    background-image: url(home2.jpg);
    background-repeat:no-repeat;
    background-size: cover;
    font-family: 'futura';
    background-attachment: fixed;
    user-select: none;
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
}
.kln-banner:hover .logo{
    transition: all .6s ease;
    background-color: #fff;
    color: black;
}
.kln-banner:hover .button-banner-search{
    color: black;
    transition: all .6s ease;

}
.kln-banner:hover .button-banner-book{
    color: black;
    transition: all .6s ease;

}



.kln-banner:hover #main1{
    color: black;
    transition: all .6s ease;
}
.kln-banner:hover #main2{
    color: black;
    transition: all .6s ease;
}
.fr{
    margin : 5px 0px;
    z-index:3;
    transition: all .6s ease;

}
.fr:hover{
    background-color: black;
    color: white;

}
.lg{
    margin : 5px 0px;
    z-index:3;
    transition: all .6s ease;

}
.lg:hover{
    background-color: black;
    color: white;

}
.en{
    transition: all .6s ease;

}
.en:hover{
    background-color: black;
    color: white;
}
.rg{
    transition: all .6s ease;

}
.rg:hover{
    background-color: black;
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
    background: black;
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
.homeTitle{
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 1.5rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    color: #fff;
    font-size: 3em;
    fill-rule: evenodd;
    fill: currentColor;
    text-align: center;
    padding-top: 170px;
    z-index: auto;
    user-select: none;
    animation: fadeInn 2s ease-in both; 


}
.homeSubTitle{
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 1.5rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    color: #fff;
    font-size: 1em;
    fill-rule: evenodd;
    fill: currentColor;
    text-align: left;
    padding-left: 800px;
    padding-top: 10px;
    z-index: auto;
    user-select: none;
    animation: fadeInn 2s ease-in both; 


}
.homeInterButton{
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    outline: 0;
    text-decoration: none;
    font-size: 1rem;
    letter-spacing: .025rem;
    line-height: 1.25rem;
    font-weight: 400;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 3rem;
    min-width: 15rem;
    text-align: center;
    cursor: pointer;
    color: #fff;
    padding: .625rem 1.5rem .85rem;
    border-radius: 1.3125rem;
    position: relative;
    border: 0;
    box-shadow: inset 0 0 0 1px #fff;
    margin-left: 800px;
    margin-top: 10px;
    width: 100px;
    transition: all .6s ease;
    user-select: none;



}
.homeInterButton:hover{
    background-color: #fff;
    color: black;
    transition-duration: 0.5s;

}
.homeNatButton{
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    outline: 0;
    text-decoration: none;
    font-size: 1rem;
    letter-spacing: .025rem;
    line-height: 1.25rem;
    font-weight: 400;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 3rem;
    min-width: 15rem;
    text-align: center;
    cursor: pointer;
    color: #fff;
    padding: .625rem 1.5rem .85rem;
    border-radius: 1.3125rem;
    position: relative;
    border: 0;
    box-shadow: inset 0 0 0 1px #fff;
    margin-left: 250px;
    margin-top: -50px;
    width: 100px;
    transition: all .6s ease;
    user-select: none;

    
}
.homeNatButton:hover{
    color: black;
    background-color: #fff;
    transition-duration: 0.5s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}
.kln-banner:hover .search input + div svg {
    stroke: black;

}
.kln-banner:hover .search input {
    color: black;
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
img{
    object-fit: cover;
    margin-top:300px;
    width: 100%;
    height: 700px;
}
.fade{
    
    transition: opacity 1s ease;
}


.fadeOut { opacity: 0; }
.fadeIn { 
    opacity: 1;
}
@keyframes fadeInn {
    from {
        opacity: 0;
        transform: translate3d(0, 20%, 0);
    }
    to {
        opacity: 1;
        transform: translate3d(0, 0%, 0);
    }
}

/* input style */
.inp1 {
    position: absolute;
    margin:auto;
    width: 100%;
    max-width: 280px;
    height: 53px;
    margin-left: -50px;
    margin-top: 10px;
    scale: 0.8;

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
    margin-left: 250px;
    margin-top: 10px;
    scale: 0.8;
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
    margin-left: 550px;
    margin-top: 10px;
    scale: 0.8;
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
    margin-left: 850px;
    margin-top: 10px;
    scale: 0.8;
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

::placeholder {
    color: #9098a9;
}

@keyframes elasticInput {
    33% {
        d: path("M0,12 L226,12 C220,12 220.666667,12 228,12 C239,12 245,1 253,1 C261,1 268,12 278,12 C284.666667,12 285.333333,12 280,12");
    }
    66% {
        d: path("M0,12 L226,12 C220,12 220.666667,12 228,12 C239,12 245,17 253,17 C261,17 268,12 278,12 C284.666667,12 285.333333,12 280,12");
    }
}

.choices{
    margin: auto;
    margin-top: 50px;
    height: 85px;
    width: 1100px;
    background-color: white; 
               
}

.where{
    
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 2rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    color: black;
    font-size: 2em;
    fill-rule: evenodd;
    fill: currentColor;
    width: 400px;
    height: 70px;
    user-select: none;
    text-transform: uppercase;
    padding-top: 100px;
    padding-left: 430px;

}
.choicesDescription{
    letter-spacing: .025rem;
    line-height: 2rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    color: black;
    font-size: 1,3em;
    fill-rule: evenodd;
    fill: currentColor;
    text-align: center;
    margin: 50px;
}

.test{
    height: 1000px;
}

.choicesContainer{
    margin-top: 300px;
    width: 100%;
    height: 600px;
    background-color: #fff;
    
}
.choicesContainer1{
    margin-top: -5px;
    width: 100%;
    height: 670px;
    background-color: white;
    color: black;
    transition: all 0.6s ease;

}

.choicesContainer2{
    margin-top: -5px;
    width: 100%;
    height: 1200px;
    background-color: white;
    color: black;
    transition: all 0.6s ease;
}

.goButton{
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    outline: 0;
    text-decoration: none;
    font-size: 1rem;
    letter-spacing: .025rem;
    line-height: 1.25rem;
    font-weight: 400;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 3rem;
    min-width: 15rem;
    text-align: center;
    cursor: pointer;
    color: #fff;
    background-color: black;
    padding: .625rem 1.5rem .85rem;
    position: relative;
    border: 0;
    box-shadow: inset 0 0 0 1px #fff;
    margin-left: 505px;
    margin-top: 50px;
    width: 100px;
    transition: all .6s ease;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;
}
.goButton:hover {
    box-shadow: rgba(0, 0, 0, 0.4) 5px 5px, rgba(0, 0, 0, 0.3) 10px 10px, rgba(0, 0, 0, 0.2) 15px 15px, rgba(0, 0, 0, 0.1) 20px 20px, rgba(0, 0, 0, 0.05) 25px 25px;    border-radius: 15px;
}
.HomeImg{
    margin: 0;
}

::selection{
    background-color: black;
    color: white;
}

.aboutUs{
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 2rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    font-size: 1,5em;
    fill-rule: evenodd;
    fill: currentColor;
    width: 400px;
    height: 70px;
    user-select: none;
    text-transform: uppercase;
    padding-top: 80px;
    padding-left: 100px;
}
.welcomeAboutUs{
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 2rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    font-size: 2em;
    fill-rule: evenodd;
    fill: currentColor;
    width: 400px;
    height: 70px;
    user-select: none;
    text-transform: uppercase;
    padding-top: 0px;
    padding-left: 100px;

}
.contentAboutUs{
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 2rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    font-size: 1em;
    fill-rule: evenodd;
    fill: currentColor;
    width: 400px;
    height: 70px;
    user-select: none;
    padding-top: 40px;
    padding-left: 100px;

}
.discTheme{
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 1,5rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    font-size: 1em;
    fill-rule: evenodd;
    fill: currentColor;
    width: 400px;
    height: 70px;
    user-select: none;
    padding-top: 110px;
    padding-left: 100px;

}
.imgContainer1 .cityNight1{
    scale: 0.25;
    position: absolute;
    margin-top: -785px;
    margin-left: 720px;
    border-radius: 30px;
    height: 1510px;
    width: 810px;
    object-fit: cover;
    transition: all .6s ease;

}
.imgContainer2 .cityNight2{
    scale: 0.25;
    position: absolute;
    margin-top: -280px;
    margin-left: 200px;
    border-radius: 30px;
    transition: all .6s ease;


}
.imgContainer3 .cityNight3{
    scale: 0.25;
    position: absolute;
    margin-top: -480px;
    margin-left: 200px;
    border-radius: 30px;
    transition: all .6s ease;

}

.cityNight1:hover{
    scale: 0.3;
}

.cityNight2:hover{
    scale: 0.3;
}

.cityNight3:hover{
    scale: 0.3;
}

.toggle{
    position: relative;
    width: 160px;
    height: 60px;
    background: white;
    border-radius: 220px;
    border:1px solid #2d2d2d;
    box-shadow: inset 0 8px 50px white,
    inset 0 8px 8px white,
    inset 0 -4px 4px white;
    scale: 0.5;
    margin-top: -90px;
    margin-left: 350px;
}

.toggle .toggle-item{
    left: 0;
    width: 48px;
    height: 48px;
    background: black;
    position: absolute;
    border-radius: 220px;
    margin-top: 5px;
    margin-left: 6px;
    box-shadow: inset 0 8px 50px rgba(0,0,0,0.1),
    inset 0 8px 8px rgba(0,0,0,0.1),
    inset 0 -4px 4px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: all 0.6s ease;
    z-index: 1;
}



.toggle .toggle-item.active{
    left: 100px;
    width: 48px;
    height: 48px;
    background: white;
    position: absolute;
    border-radius: 220px;
    margin-top: 5px;
    margin-left: 6px;
    box-shadow: inset 0 8px 50px rgba(0,0,0,0.1),
    inset 0 8px 8px rgba(0,0,0,0.1),
    inset 0 -4px 4px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: all 0.5s ease;
}
body.active .toggle{
    position: relative;
    width: 160px;
    height: 60px;
    background: black;
    border-radius: 220px;
    border:1px solid white;
    box-shadow: inset 0 8px 50px rgba(0,0,0,0.1),
    inset 0 8px 8px rgba(0,0,0,0.1),
    inset 0 -4px 4px rgba(0,0,0,0.1);
}

/* arrow flicker */
.arrow {
    box-sizing: border-box;
    height: 3vw;
    width: 3vw;
    border-style: solid;
    border-color: white;
    border-width: 0px 2px 2px 0px;
    transform: rotate(45deg);
    transition: border-width 150ms ease-in-out;
    animation: flickerAnimation .5s infinite;
}

.arrow1 {
    box-sizing: border-box;
    height: 3vw;
    width: 3vw;
    border-style: solid;
    border-color: white;
    border-width: 0px 2px 2px 0px;
    transform: rotate(45deg);
    transition: border-width 150ms ease-in-out;
    animation: flickerAnimation .5s infinite;
    margin-top: -20px;
    scale: .8;
}



.container {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: transparent;
    margin-left: 620px;
    margin-top: 100px;
    height: 100px;
}

@keyframes flickerAnimation {
    0%   { opacity:1; }
    50%  { opacity:0; }
    100% { opacity:1; }
}

/* small squares */
.serviceTransportation{
    position: relative;
    z-index: 1;
    background-color: white;
    box-shadow: 0 2px 14px 5px rgb(20 20 20 / 5%);
    border-radius: 3px;
    padding: 30px;
    margin-left: 100px;
    margin-top: 70px;
    text-align: center;
    width: 100px;
    height: 100px;
    opacity: 0;
    transition: all 0.6s ease;
    cursor: pointer;

}

.serviceTransportation:hover{
    scale: 1.2;
    
}

.serviceHotels{
    position: relative;
    z-index: 1;
    background-color: white;
    box-shadow: 0 2px 14px 5px rgb(20 20 20 / 5%);
    border-radius: 3px;
    padding: 30px;
    margin-left: 400px;
    margin-top: -160px;
    text-align: center;
    width: 100px;
    height: 100px;
    opacity: 0;
    transition: all 0.6s ease;
    cursor: pointer;
}

.serviceHotels:hover{
    scale: 1.2;
    
}

.serviceRestaurents{
    position: relative;
    z-index: 1;
    background-color: white;
    box-shadow: 0 2px 14px 5px rgb(20 20 20 / 5%);
    border-radius: 3px;
    padding: 30px;
    margin-left: 700px;
    margin-top: -160px;
    text-align: center;
    width: 100px;
    height: 100px;
    opacity: 0;
    transition: all 0.6s ease;
    cursor: pointer;

}

.serviceRestaurents:hover{
    scale: 1.2;
    
}

.serviceRecomendations{
    position: relative;
    z-index: 1;
    background-color: white;
    box-shadow:0 2px 14px 5px rgb(20 20 20 / 5%);
    border-radius: 3px;
    padding: 30px;
    margin-left: 1000px;
    margin-top: -160px;
    text-align: center;
    width: 100px;
    height: 100px;
    opacity: 0;
    transition: all 0.6s ease;
    cursor: pointer;

}

.serviceRecomendations:hover{
    scale: 1.2;
    
}

.airplaneIcon{
    margin-bottom: 20px;
    display: inline-block;
    max-height: 80px;
    vertical-align: middle;
    border-style: none;
    margin-top: -20px;
    scale: 0.7;
}

.restaurentIcon{
    margin-bottom: 0px;
    display: inline-block;
    max-height: 100px;
    vertical-align: middle;
    border-style: none;
    margin-top: -20px;
    scale: 0.7;

}

.hotelsIcon{
    margin-bottom: 0px;
    display: inline-block;
    max-height: 100px;
    vertical-align: middle;
    border-style: none;
    margin-top: -20px;
    scale: 0.7;

}

.placesIcon{
    margin-bottom: 0px;
    display: inline-block;
    max-height: 100px;
    vertical-align: middle;
    border-style: none;
    margin-top: -20px;
    scale: 0.7;

}
.imgContainer4, .imgContainer5, .imgContainer6, .imgContainer7, .imgContainer8{
    position:absolute;

}

/* second block of images */
.imgContainer4 .place1{
    scale: 0.25;
    position: absolute;
    margin-top: -500px;
    margin-left: 530px;
    border-radius: 30px;
    height: 1600px;
    width: 1000px;
    object-fit: cover;
    transition: all .6s ease;


}
.imgContainer5 .place2{
    scale: 0.25;
    position: absolute;
    height: 1600px;
    width: 1000px;
    margin-top: -500px;
    margin-left: 330px;
    border-radius: 30px;
    transition: all .6s ease;




}
.imgContainer6 .place3{
    scale: 0.25;
    position: absolute;
    height: 1600px;
    width: 1000px;
    margin-top: -500px;
    margin-left: 130px;
    border-radius: 30px;
    transition: all .6s ease;



}

.imgContainer7 .place4{
    scale: 0.25;
    position: absolute;
    margin-top: -500px;
    margin-left: -70px;
    border-radius: 30px;
    height: 1600px;
    width: 1000px;
    object-fit: cover;
    transition: all .6s ease;



}
.imgContainer8 .place5{
    scale: 0.25;
    position: absolute;
    height: 1600px;
    width: 1000px;
    margin-top: -500px;
    margin-left: -270px;
    border-radius: 30px;
    object-fit: cover;
    transition: all .6s ease;


}


.imgContainer4:hover .place1{
    translate: 50px;
    box-shadow: 0 2px 20px 5px black;
    filter: brightness(50%);

}

.imgContainer5:hover .place2{
    translate: 50px;
    box-shadow: 0 2px 20px 5px black;
    filter: brightness(50%);


}
.imgContainer6:hover .place3{
    translate: 50px;
    box-shadow: 0 2px 20px 5px black;
    filter: brightness(50%);


}

.imgContainer7:hover .place4{
    translate: 50px;
    box-shadow: 0 2px 20px 5px black;
    filter: brightness(50%);


}

.imgContainer8:hover .place5{
    scale: 0.3;
    filter: brightness(50%);

}

.place1Name{
    position:absolute;
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 2rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    font-size: 1.2em;
    fill-rule: evenodd;
    fill: currentColor;
    color: white;
    margin-top: 400px;
    margin-left: 970px;
    z-index: 1;
    width: 130px;
    transition: all .6s ease;
    text-shadow: 0 2px 20px 5px black;
    opacity: 0;



    

}

.place2Name{
    position:absolute;
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 2rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    font-size: 1.2em;
    fill-rule: evenodd;
    fill: currentColor;
    color: white;
    margin-top: 400px;
    margin-left: 810px;
    z-index: 1;
    transition: all .6s ease;
    text-shadow: 0 2px 20px 5px black;
    opacity: 0;



    

}
.place3Name{
    position:absolute;
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 2rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    font-size: 1.2em;
    fill-rule: evenodd;
    fill: currentColor;
    color: white;
    margin-top: 400px;
    margin-left: 590px;
    z-index: 1;
    transition: all .6s ease;
    text-shadow: 20px 20px 20px black;
    opacity: 0;


    

}
.place4Name{
    position:absolute;
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 2rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    font-size: 1.2em;
    fill-rule: evenodd;
    fill: currentColor;
    color: white;
    margin-top: 400px;
    margin-left: 380px;
    z-index: 1;
    transition: all .6s ease;
    text-shadow: 0 2px 20px 5px black;
    opacity: 0;
    width: 100px;

}
.place5Name{
    position:absolute;
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 2rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    font-size: 1.2em;
    fill-rule: evenodd;
    fill: currentColor;
    color: white;
    margin-top: 400px;
    margin-left: 195px;
    z-index: 1;
    transition: all .6s ease;
    text-shadow: 0 2px 20px 5px black;
    opacity: 0;

}



.imgContainer4:hover .place1Name{
    opacity: 1;
    translate: 50px;
}

.imgContainer5:hover .place2Name{
    opacity: 1;
    translate: 50px;
}
.imgContainer6:hover .place3Name{
    opacity: 1;
    translate: 50px;
}

.imgContainer7:hover .place4Name{
    opacity: 1;
    translate: 50px;
}
.imgContainer8:hover .place5Name{
    opacity: 1;
    scale: 1.3;
}

/* our destination */
.ourDestinatons{
    position:relative;
    margin: 0;            
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 2rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    font-size: 2em;
    fill-rule: evenodd;
    fill: currentColor;
    color: black;
    z-index: 2;
    text-align: center;
    padding-top: 100px;

}

/* contact us */
.contactUsContainer {
flex: 0 1 700px;
margin-top: -250px;
margin-left: 300px;

}

.screen {
position: relative;
background-color: transparent;
border-radius: 15px;
width: 120vh;
box-shadow: 0 2px 20px 5px rgb(20 20 20 / 5%);
opacity: 1;
font-family: 'futura';
z-index: 1;


}

.screen:after {
content: '';
display: block;
position: absolute;
top: 0;
left: 20px;
right: 20px;
bottom: 0;
border-radius: 15px;
z-index: -1;
background-color: transparent;

}

.screen-header {
display: none;
align-items: center;
padding: 10px 20px;
border-top-left-radius: 15px;
border-top-right-radius: 15px;
background-image: url("cityNight3.jpg");
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;

}

.screen-header-left {
margin-right: auto;
}

.screen-header-button {
display: inline-block;
width: 8px;
height: 8px;
margin-right: 3px;
border-radius: 8px;
background: white;
}

.screen-header-button.close {
background: #ed1c6f;
}

.screen-header-button.maximize {
background: #e8e925;
}

.screen-header-button.minimize {
background: #74c54f;
}

.screen-header-right {
display: flex;
}

.screen-header-ellipsis {
width: 3px;
height: 3px;
margin-left: 2px;
border-radius: 8px;
background: #999;
}

.screen-body {
display: flex;
color: white !important;

}

.screen-body-item {
flex: 1;
padding: 50px;
}

.screen-body-item.left {
display: flex;
flex-direction: column;
margin-right: 100px;
}

.app-title {
display: flex;
flex-direction: column;
position: relative;
color: white !important;
font-size: 26px;
}

.app-title:after {
content: '';
display: block;
position: absolute;
left: 0;
bottom: -10px;
width: 25px;
height: 4px;
color: orange;

}

.app-contact {
margin-top: auto;
font-size: 8px;
color: #d2c486;
}

.app-form-group {
margin-bottom: 15px;
}

.app-form-group.message {
margin-top: 40px;
}

.app-form-group.buttons {
margin-bottom: 0;
text-align: right;
}

.app-form-control {
width: 100%;
padding: 10px 0;
background: none;
border: none;
border-bottom: 1px solid #fff;
color: white !important;
font-size: 14px;
text-transform: uppercase;
outline: none;
transition: border-color .2s;
}

.app-form-control::placeholder {
color: #666;
font-family: 'futura';
}

.app-form-control:focus {
border-bottom-color: #ddd;
}

.app-form-button {
background: none;
border: none;
color: orange;
color: white;
font-size: 14px;
cursor: pointer;
outline: none;
transition: all .5s ease;
}

.app-form-button:hover {
    color: #d2c486;
}


@media screen and (max-width: 520px) {
.screen-body {
    flex-direction: column;
}

.screen-body-item.left {
    margin-bottom: 30px;
}

.app-title {
    flex-direction: row;
}

.app-title span {
    margin-right: 12px;
}

.app-title:after {
    display: none;
}
}

@media screen and (max-width: 600px) {
.screen-body {
    padding: 40px;
}

.screen-body-item {
    padding: 0;
}
}

.contactUs{
    position: absolute;
    height: 500px;
    width: 100%;
    background-image: url("Card.png");
    background-attachment: fixed;
    background-position: 0 -100px;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: -350px;
    z-index: 1;
}

.contactUsContent{
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 2rem;
    color: white;
    /* position: absolute; */
    font-size: 2em;
    margin-left: 20px;
    margin-top: 80px;
    text-align: center;
    
}

.contactUsButton{
    display: none;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    outline: 0;
    text-decoration: none;
    font-size: 1rem;
    letter-spacing: .025rem;
    line-height: 1.25rem;
    font-weight: 400;
    box-sizing: border-box;
    align-items: center;
    justify-content: center;
    min-height: 3rem;
    min-width: 15rem;
    text-align: center;
    cursor: pointer;
    color: #fff;
    padding: .625rem 1.5rem .85rem;
    border-radius: 1.3125rem;
    position: relative;
    border: 0;
    box-shadow: inset 0 0 0 1px orange;
    margin-left: 1000px;
    margin-top: 80px;
    width: 100px;
    transition: all .6s ease;
    user-select: none;
    position: absolute;
}

.contactUsButton:hover{
    background-color: white;
    color: black;
}
/* login css */
.loginWin{
    display: none;	 
    opacity: 0;
    margin-top: -50px;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;

}
.screen1 {	

    position: absolute;
    height: 550px;
    width: 360px;	
    box-shadow: 0px 0px 24px black;
    transition: opacity 1s ease;
    background: transparent;

}

.screen__content {
    z-index: 1;
    position: relative;	
    height: 100%;

}

.screen__background {	
    background-color: #111111;	
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 0;
    -webkit-clip-path: inset(0 0 0 0);
    clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
    transform: rotate(33deg);
    position: absolute;
}

.screen__background__shape1 {
    height: 520px;
    width: 520px;
    background:linear-gradient(45deg, #EEEEEE, #FAF8F9, #FFFFFF);
    top: -170px;
    right: 150px;	
    border-radius: 0 0px 0 0;
    scale: 1.5;
    transition: all .6s ease;
}

.screen1:hover .screen__background__shape1{

    right: 100px;


}

.screen__background__shape2 {
    height: 220px;
    width: 220px;
    background: transparent;	
    top: -100px;
    right: 0;	
    border-radius: 32px;
    transition: all .6s ease;

}

.screen__background__shape3 {
    position: absolute;
    height: 540px;
    width: 190px;
    background: transparent;
    top: -10px;
    right: 0;	
    border-radius: 32px;
    transition: all .6s ease;
    z-index: -10;

}

.screen__background__shape4 {
    height: 400px;
    width: 200px;
    background: transparent;	
    top: 420px;
    right: 50px;	
    border-radius: 60px;
    transition: all .6s ease;

}

.login {
    width: 320px;
    padding: 30px;
    padding-top: 100px;
}

.login__field {
    padding: 20px 0px;	
    position: relative;	
}

.login__icon {
    position: absolute;
    top: 30px;
    color: black;
}

.login__input {
    border: none;
    border-bottom: 2px solid #D1D1D4;
    background: none;
    padding: 10px;
    padding-left: 24px;
    font-weight: 700;
    width: 75%;
    transition: all .6s ease;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
    outline: 0;
    text-decoration: none;
    border-bottom-color: black;
    transition: all .6s ease;
}

.registerPassword {
    border: none;
    border-bottom: 2px solid #D1D1D4;
    background: none;
    padding: 10px;
    padding-left: 24px;
    font-weight: 700;
    width: 75%;
    transition: all .6s ease;
}

.registerPassword:active,
.registerPassword:focus,
.registerPassword:hover {
    outline: 0;
    text-decoration: none;
    border-bottom-color: black;
    transition: all .6s ease;
}

.login__submit {
    background: #fff;
    font-size: 12px;
    margin-top: 30px;
    padding: 16px 20px;
    border-radius: 26px;
    border: 1px solid black;
    text-transform: uppercase;
    font-weight: 700;
    display: flex;
    align-items: center;
    width: 100%;
    height: 50px;
    color: black;
    box-shadow: 0px 2px 2px black;
    cursor: pointer;
    transition: all .6s ease;

}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
    background-color: black;
    color : white;
    outline: none;
    transition: all .6s ease;

}

.button__icon {
    font-size: 24px;
    margin-left: auto;
    color: black;
    transition: all .6s ease;

    
}
.login__submit:hover .button__icon,.login__submit:focus .button__icon,.login__submit:active .button__icon{
    color: #FFF;
}

/* profile  */
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


.register {	
    position: absolute;
    text-align: center;
    height: fit-content;
    width: fit-content;
    padding-bottom:50px;
    padding-right: 55px;
    bottom: 0px;
    right: 0px;
    color: #fff;
    font-family: 'futura';
    font-size: 0.9rem;
    z-index: 2;
    transition: all .6s ease;
    cursor: pointer;


}

.register:hover{
    color:orange;


}

.forgot{
    position: absolute;
    color: white;
    padding-top: -100px;
    cursor: pointer;
    transition: all 0.6s ease;

}

.forgot:hover{
    color: orange;
}



::placeholder{
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif;
    outline: 0;
    text-decoration: none;
    font-size: 0.8rem;
    letter-spacing: .025rem;
    line-height: 1.25rem;
    font-weight: 400;
}

.back-video{
    width: 100%;
}

div a{
    display: none;
}

.place6Name{
    display: none;
}
.place7Name{
    display: none;
}
.place8Name{
    display: none;
}

.particles-js-canvas-el{
    height: 99% !important;
    margin-top: -250px;
}

/* fllow us  */

.blankContent{
    text-align: center;
    color: black;
    padding-top: 200px;
    font-size: 1.2rem;
}



.followUs {
  display: inline-block;
  position:absolute;
  left:50%;
  -ms-transform:translate(-50%,-50%);
  -webkit-transform:translate(-50%,-50%);
  transform:translate(-50%,-50%);
  padding-top: 100px;
}

/* Icons */

.followUs a {
  color:#fff;
  background: #b8955c;
  border-radius:4px;
  text-align:center;
  text-decoration:none;
  font-family:fontawesome;
  position: relative;
  display: inline-block;
  width:40px;
  height:28px;
  padding-top:12px;
  margin:0 2px;
  -o-transition:all .5s;
  -webkit-transition: all .5s;
  -moz-transition: all .5s;
  transition: all .5s;
   -webkit-font-smoothing: antialiased;
}

.followUs a:hover {
  background: #fff;
  color: black;
}

/* pop-up text */

.followUs a span {
  color:#666;
  position:absolute;
  font-family:sans-serif;
  bottom:0;
  left:-25px;
  right:-25px;
  padding:5px 7px;
  z-index:-1;
  font-size:14px;
  border-radius:2px;
  background:#fff;
  visibility:hidden;
  opacity:0;
  -o-transition:all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -webkit-transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -moz-transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

/* pop-up text arrow */

.followUs a span:before {
  content:'';
  width: 0; 
  height: 0; 
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #fff;
  position:absolute;
  bottom:-5px;
  left:40px;
}

/* text pops up when icon is in hover state */

.followUs a:hover span {
  bottom:50px;
  visibility:visible;
  opacity:1;
}

/* font awesome icons */

.followUs a:nth-of-type(1):before {
content:'\f09a';
}
.followUs a:nth-of-type(2):before {
content:'\f099';
}
.followUs a:nth-of-type(3):before {
content:'\f0d5';
}
.followUs a:nth-of-type(4):before {
content:'\f113';
}
.followUs a:nth-of-type(5):before {
content:'\f17d';
}
.followUs a:nth-of-type(6):before {
content:'\f1cb';
}

/* error animation */

@keyframes shake {
    0% { margin-left: -5px; }
    100% { margin-right: -5px; }
}

/* for phones */
@media only screen and (min-width:360px) and (max-width:500px){
    * {
         margin: 0; padding: 0;
    }
     body{
         overflow-x: hidden;
         background: url("city.jpg");
         background-repeat: no-repeat;
         /* -webkit-background-size: 100% auto;
         -moz-background-size: 100% auto;
         -o-background-size: 100% auto; */
         background-size: 100% auto;
     }

     
     
     .kln-banner :not(.logo){
         display: none;
     }


     /* container nav */
     .containerNav{
        display: inline;
        position: relative;
        margin: 35px auto 0;
        width: 300px;
        height: 534px;
        background-color: transparent;
        overflow: hidden;
      }
      
      /* Toggle Functionality */
      #toggle {
        display: none;
      }
      
      #toggle:checked ~ .toggle-container .button-toggle {
        box-shadow: 0 0 0 0.8vh rgba(0, 0, 0, 0.1), inset 0 0 0 20px rgba(0, 0, 0, 0.1);
        z-index: 100;
      }
      #toggle:checked ~ .toggle-container .button-toggle:before {
        transform: translateY(-50%) rotate(45deg) scale(1);
      }
      #toggle:checked ~ .toggle-container .button-toggle:after {
        transform: translateY(-50%) rotate(-45deg) scale(1);
      }
      #toggle:checked ~ .nav {
        margin-bottom: 70px;
        pointer-events: auto;
        transform: translate(25px, 25px);
      }
      #toggle:checked ~ .nav .nav-item {
        font-family: 'futura';
        color: #ffffff;
        letter-spacing: 0;
        height: 40px;
        line-height: 40px;
        margin-top: 0;
        opacity: 1;
        transform: scaleY(1);
        transition: 0.5s, opacity 0.1s;
      }
      #toggle:checked ~ .nav .nav-item:nth-child(1) {
        transition-delay: 0.15s;
      }
      #toggle:checked ~ .nav .nav-item:nth-child(1):before {
        transition-delay: 0.15s;
      }
      #toggle:checked ~ .nav .nav-item:nth-child(2) {
        transition-delay: 0.1s;
      }
      #toggle:checked ~ .nav .nav-item:nth-child(2):before {
        transition-delay: 0.1s;
      }
      #toggle:checked ~ .nav .nav-item:nth-child(3) {
        transition-delay: 0.05s;
      }
      #toggle:checked ~ .nav .nav-item:nth-child(3):before {
        transition-delay: 0.05s;
      }
      #toggle:checked ~ .nav .nav-item:nth-child(4) {
        transition-delay: 0s;
      }
      #toggle:checked ~ .nav .nav-item:nth-child(4):before {
        transition-delay: 0s;
      }
      #toggle:checked ~ .nav .nav-item:before {
        opacity: 0;
      }

      /* Toggle Button */
      .button-toggle {
        position: absolute;
        display: inline-block;
        width: 20px;
        height: 20px;
        margin: 25px;
        background-color: transparent;
        border: none;
        cursor: pointer;
        border-radius: 100%;
        transition: 0.6s;
      }

      .logo{
        padding: 0;
      }
      .button-toggle:hover {
        box-shadow: 0 0 0 8px rgba(0, 0, 0, 0.1), inset 0 0 0 20px rgba(0, 0, 0, 0.1);
      }
      .button-toggle:before, .button-toggle:after {
        position: absolute;
        content: "";
        top: 50%;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #ffffff;
        border-radius: 5px;
        transition: 0.5s;
      }
      .button-toggle:before {
        transform: translateY(-50%) rotate(45deg) scale(0);
      }
      .button-toggle:after {
        transform: translateY(50%) rotate(-45deg) scale(0);
      }
      
      /* Menu */
      .nav {
        display: inline-block;
        margin: 25px 25px 20px;
        margin-bottom: -25px;
        pointer-events: none;
        transition: all 0.5s ease;
      }

      .nav a{
        text-decoration: none;
      }
      
      .nav-item {
        position: relative;
        display: inline-block;
        /* float: left; */
        clear: both;
        color: transparent;
        font-size: 14px;
        font-family: 'futura';
        letter-spacing: -6.2px;
        height: 7px;
        line-height: 7px;
        text-transform: uppercase;
        white-space: nowrap;
        transform: scaleY(0.2);
        transition: 0.5s, opacity 1s;
      }
      .nav-item:nth-child(1) {
        transition-delay: 0s;
      }
      .nav-item:nth-child(1):before {
        transition-delay: 0s;
      }
      .nav-item:nth-child(2) {
        transition-delay: 0.05s;
      }
      .nav-item:nth-child(2):before {
        transition-delay: 0.05s;
      }
      .nav-item:nth-child(3) {
        transition-delay: 0.1s;
      }
      .nav-item:nth-child(3):before {
        transition-delay: 0.1s;
      }
      .nav-item:nth-child(4) {
        transition-delay: 0.15s;
      }
      .nav-item:nth-child(4):before {
        transition-delay: 0.15s;
      }
      .nav-item:nth-child(1) {
        letter-spacing: -8px;
      }
      .nav-item:nth-child(2) {
        letter-spacing: -7px;
      }
      .nav-item:nth-child(n+4) {
        letter-spacing: -8px;
        margin-top: -7px;
        opacity: 0;
      }
      .nav-item:before {
        position: absolute;
        content: "";
        top: 50%;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #fff;
        transform: translateY(-50%) scaleY(5);
        transition: 0.5s;
      }

      
      
      
     .logo{
         margin: auto;
     }
     .kln-banner:hover .logo{
        background-color: transparent;
        color: white;
    }
     .homeTitle{
         line-height: 3rem;
 
 
     }
     .homeSubTitle{
         margin :auto;
         padding-left: 0;
         padding-right: 0;
         margin-top: -20px;
         margin-bottom: 20px;
         text-align: center;
     }
     .homeNatButton{
         margin: auto;
         margin-top: 20px;
     }
 
     .homeInterButton{
         margin: auto;
     }
 
     .choicesContainer{
        position: relative;
         width: 100%;
         height:140vh;
     }
 
     .choicesContainer1{
         width: 100%;
     }
     
 
     .fade{
         transition: none;
 
     }
     .fadeOut { opacity: 1; }
     .fadeIn { 
             opacity: 1;
     }
 
     .where{
         margin: auto;
         margin-top: -250px;
         width: 50%;
         text-align: center;
         display: block;
         padding-left:0;
         padding-right: 0;
         font-size: 1.2rem;
        
     }
 
     .choices {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-left:-140px;
    }   
 
     .goButton{
         margin: auto;
         margin-top: 220px;
 
         
     }
 
     .inp1, .inp2, .inp3, .inp4{
        margin: auto;     
         scale: 1;
    }
 
     .inp2{
         margin-top: 70px;
     }
 
     .inp3{
         margin-top: 140px;
     }
 
     .inp4{
         margin-top: 210px;
     }
 
     .imgContainer1{
        margin-left: 15%;

     }
 
     .imgContainer1 .cityNight1{
        margin: auto;
        margin-left: -15%;
        scale: 1;
        height: 700px;
        width: 100%;
        object-fit: cover;
        margin-top: 1300px;
        border-radius: 0px;
        padding: 0;
        box-shadow: 0 2px 14px 5px rgb(20 20 20 / 30%);
        animation: bringUp 1s;

 
     }
    
    .place6Name {
        letter-spacing: 0.025rem;
        font-family: futura, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 1.2em;
        fill-rule: evenodd;
        fill: currentcolor;
        color: white;
        padding: 90% 12%;
        transition: all 0.6s ease 0s;
        z-index: 10;
        text-align: center;
        position: absolute;
        text-size-adjust: 100%;
        line-height: 2rem;
        display: block;
        justify-content: center;
        align-items: center;
        margin-top: 1300px;
        opacity: 0;
        text-shadow: 0 0 10px #fff
      
    }

    
    
    /* @keyframes shine {
    0% {
        background-position: 0;
    }
    60% {
        background-position: 180px;
    }
    100% {
        background-position: 180px;
    }
    } */



    .imgContainer1:hover .place6Name{
        opacity: 1;
    }
     .imgContainer1:hover .cityNight1{
        filter: brightness(50%);
        
     }
     .imgContainer2{
        margin-left: 15%;

     }
     .imgContainer2 .cityNight2{
        margin: auto;
        margin-left: -15%;
        scale: 1;
        height: 700px;
        width: 100%;
        object-fit: cover;
        margin-top: 2000px;
        border-radius: 0px;
        box-shadow: 0 2px 14px 5px rgb(20 20 20 / 30%);
     }

     .place7Name {
        letter-spacing: 0.025rem;
        font-family: futura, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 1.2em;
        fill-rule: evenodd;
        fill: currentcolor;
        color: white;
        padding: 90% 22%;
        transition: all 0.6s ease 0s;
        z-index: 10;
        text-align: center;
        position: absolute;
        text-size-adjust: 100%;
        line-height: 2rem;
        display: block;
        justify-content: center;
        align-items: center;
        margin-top: 2000px;
        opacity: 0;
        text-shadow: 0 0 10px #fff
      
    }

     .imgContainer2:hover .place7Name{
        opacity: 1;
    }

     .imgContainer2:hover .cityNight2{
        filter: brightness(50%);

     }

     .imgContainer3{
        margin-left: 15%;
     }

     .imgContainer3 .cityNight3{
         margin: auto;
         margin-left: -15%;
         scale: 1;
         height: 700px;
         width: 100%;
         object-fit: cover;
         margin-top: 2700px;
         border-radius: 0px;
         box-shadow: 0 2px 14px 5px rgb(20 20 20 / 30%);



     }
     .place8Name {
        letter-spacing: 0.025rem;
        font-family: futura, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 1.2em;
        fill-rule: evenodd;
        fill: currentcolor;
        color: white;
        padding: 90% 22%;
        transition: all 0.6s ease 0s;
        z-index: 10;
        text-align: center;
        position: absolute;
        text-size-adjust: 100%;
        line-height: 2rem;
        display: block;
        justify-content: center;
        align-items: center;
        margin-top: 2700px;
        opacity: 0;
        text-shadow: 0 0 10px #fff
      
    }

    .imgContainer3:hover .place8Name{
        opacity: 1;
    }
    .imgContainer3:hover .cityNight3{ 
        filter: brightness(50%);
     }

     .back-video{
        margin: 0px;
    }
    
     .aboutUs{
         width: 100%;
         padding-left: 0;
         padding-right: 0;
         margin: auto;
         text-align: center;
 
     }
 
     .welcomeAboutUs{
         width: 100%;
         padding-left: 0;
         padding-right: 0;
         margin: auto;
         text-align: center;
     }
 
     .contentAboutUs{
         width: 95%;
         padding-left: 0;
         padding-right: 0;
         margin: auto;
         text-align: center;
 
     }
 
     .toggle{
         padding-left: 0;
         padding-right: 0;
         margin: auto;
         text-align: center;
 
     }
 
     .contactUs{
         display: none;
     }
     
 
     .serviceTransportation{
        margin: auto;
        margin-top: 70px;
        text-align: center;
        width: 250px;
 
     }

     .serviceTransportation:hover{
        scale: 0.9;

     }
 
     .airplaneIcon{
         width: 100px;
         margin: auto;
     }

 
     .serviceHotels{
         margin: auto;
         width: 250px;
         margin-top: 50px;
 
     }


     .serviceHotels:hover{
        scale: 0.9;

     }
 
 
     .hotelsIcon{
         width: 100px;
         margin: auto;
         margin-top: -20px;
 
     }


 
     .serviceRestaurents{
         margin: auto;
         text-align: center;
         width: 250px;
         margin-top: 50px;
        
     }


     .serviceRestaurents:hover{
        scale: 0.9;

     }
 
 
     .restaurentIcon{
         width: 100px;
         margin: auto;
         margin-top: -20px;
 
 
     }
 
     .serviceRecomendations{
         margin: auto;
         text-align: center;
         width: 250px;
         margin-top: 50px;
     }


     .serviceRecomendations:hover{
        scale: 0.9;

     }
 
 
     .placesIcon{
         width: 100px;
         margin: auto;
         margin-top: -20px;
 
     }
 
     .contactUsContainer{
         display: none;
     }
     .container{
         display: none;
     }
     .discTheme{
         text-align: center;
         padding-left: 0;
         padding-right: 0;
         width: 100%;
     }
     .choicesContainer2 .imgContainer4,.imgContainer5,.imgContainer6,.imgContainer7,.imgContainer8{
        display: none;
     }

    .ourDestinatons {
        display: block;
        padding: 0px;
        height: 100px;
        margin-top: 800px;
        margin-bottom: 100px;
        position: static;
        
    }

     .choicesContainer2{
         height: 1900px;
     }

     .nav .nav-item{
        cursor: pointer;
     }

     

     
    }
   </style>

   <body id="body">
   
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
            <button class = "button-banner-book" onclick='book()'
            >BOOK</button>
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

    <!--login & register-->
    <div class="loginWin" id="loginWin">
    <div class="screen1" id = "screen1">
    <form class="form1" action="" method="post">
		<div class="screen__content">
				<div class="login__field">
					<i class="login__icon fa fa-user"></i>
					<input type="text" class="login__input" id="loginEmail" placeholder="Username / Email" name="email">
				</div>
				<div class="login__field">
					<i class="login__icon fa fa-lock"></i>
					<input type="password" class="login__input" id="loginPassword"  placeholder="Password" name="password">
				</div>
				<button type="button" class="button login__submit" id="login__submit" onclick="loginSubmit()" type="submit" name="logSubmit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fa fa-chevron-right"></i>
				</button>				
		</div>
		<div class="screen__background" id="screen__background">
			<span class="screen__background__shape screen__background__shape4" id ="shape4"></span>
			<span class="screen__background__shape screen__background__shape3" id="shape3"></span>		
			<span class="screen__background__shape screen__background__shape2" id="shape2"></span>
			<div class="screen__background__shape screen__background__shape1" id="shape1"></div>
		</div>	
        <div class="register" onclick="register()">
		 REGISTER
		</div>	
        <div class="forgot" onclick="resetPassword()">
		 forgot password ?
		</div>	
        </form>

	</div>

    </div>
    <div class="fade fadeOut">
        <div id = "homeTitle" class = "homeTitle">Discover The World</div>
        <div class = "homeSubTitle">In one place</div>
        <div  class = "homeInterButton" onmouseover="DiscoverWor()" onclick="goToInter()">International</div>
        <div class = "homeNatButton" onmouseover="DiscoverMor()" onclick="goToNat()">national</div>
        <div class="container">
            <div data-scroll href="#">
              <div class="arrow" id="arrow"></div>
              <div class="arrow1" id="arrow1"></div>
            </div>
          </div>

    </div>
    
    
    <div class="fade fadeOut">
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
    <div class="choicesDescription">Our agents have access to special offers from top travel suppliers around the world. Explore one of the options below to learn more.

</div>
    </div>
    <video autoplay loop muted plays-inline class="back-video" id="back-video">
        <source src="interVideo.mp4" type="video/mp4">
    </video>


    <!-- another one -->
    <div id = "choicesContainer1" class = "choicesContainer1" onmouseover="bringThemUp()">
        <div class="aboutUs">About Us</div>
        <div class="welcomeAboutUs">Welcome To Trav Agency</div>
        <div class="contentAboutUs">With over 340 agencies Discover everything Trav has to offer. From historic attractions to outdoor adventures, there is something for everyone.
            <br><br>Manager: Bendrioua Ahmed
        </div>
        <div class="imgContainer1"><img src="cityDay2.jpg" alt="night city" class="cityNight1" id="cityNight1"><div class="place6Name">Mosque Hassan II<br><center style="font-size:0.9rem ; margin-top:-10px; color:orange;text-shadow: 0 0 10px orange">1500$</center></div></div>
        <div class="imgContainer2"><img src="homephone.jpg" alt="night city" class="cityNight2" id="cityNight2"><div class="place7Name">Marrakesh<br><center style="font-size:0.9rem ; margin-top:-10px; color:#edb7c2;text-shadow: 0 0 10px #edb7c2">2000$</center></div></div>
        <div class="imgContainer3"><img src="cityDay4.jpg" alt="night city" class="cityNight3" id="cityNight3"><div class="place8Name">Chefchaouen<br><center style="font-size:0.9rem ; margin-top:-10px; color:cyan;text-shadow: 0 0 10px cyan">1500$</center></div></div>
        <div class="discTheme" id="discTheme">Discover the world at Day</div>
        <div class="toggle">
            <span class="toggle-item" id="toggle-item"></span>
        </div>
        <div class="serviceTransportation" id="serviceTransportation">
            <img src="airplane.png" alt="airplane" class="airplaneIcon" id="airplaneIcon">
            <div>Transportation</div>

        </div>
        <div class="serviceHotels" id="serviceHotels">
            <img src="hotels.png" alt="hotels" class="hotelsIcon" id="hotelsIcon">
            <div>Hotels</div>
            
        </div>
        <div class="serviceRestaurents" id="serviceRestaurents">
            <img src="restaurent.png" alt="restaurent" class="restaurentIcon" id="restaurentIcon">
            <div>Restaurents</div>

        </div>
        <div class="serviceRecomendations" id="serviceRecomendations">
            <img src="places.png" alt="places" class="placesIcon" id="placesIcon">
            <div>Places</div>
        </div>
    </div>
    <div id = "choicesContainer2" class = "choicesContainer2" onmouseover="bringThemUp()">
        <div class="ourDestinatons"><br> Our Destinations<br><center style="font-size:1rem ; margin-top:-10px; color:orange;">Choose Your Next Destination</center></div>
        <div class="imgContainer4"><img src="place1.jpg" alt="night city" class="place1" id="place1" onmouseover="bringPlace1NameUp()"><div class="place1Name">Fuji Mountain <br><center style="font-size:0.9rem ; margin-top:-10px; color:orange;">1500$</center></div></div>
        <div class="imgContainer5"><img src="place2.jpg" alt="night city" class="place2" id="place2" onmouseover="bringPlace2NameUp()"><div class="place2Name">Paris <br><center style="font-size:0.9rem ; margin-top:-10px; color:cyan;">2000$</center></div></div>
        <div class="imgContainer6"><img src="place3.jpg" alt="night city" class="place3" id="place3" onmouseover="bringPlace3NameUp()"><div class="place3Name">London <br><center style="font-size:0.9rem ; margin-top:-10px; color:red;">1000$</center></div></div>
        <div class="imgContainer7"><img src="place4.jpg" alt="night city" class="place4" id="place4" onmouseover="bringPlace4NameUp()"><div class="place4Name">New York <br><center style="font-size:0.9rem ; margin-top:-10px; color:yellow;">2540$</center></div></div>
        <div class="imgContainer8"><img src="place5.jpg" alt="night city" class="place5" id="place5" onmouseover="bringPlace5NameUp()"><div class="place5Name">Kyoto <br><center style="font-size:0.9rem ; margin-top:-10px; color:#FAE5D3;">1000$</center></div></div>
    </div>

        <div class="contactUs" id="contactUs">
            <div class="contactUsContent">Contact Us Now <br><center style="font-size:1rem ; margin-top:-10px; color:orange;">What are you waiting for</center></div>
            <div class="contactUsButton" onclick="bringUpContactUs()">Contact Us</div>
        </div>

        <div class="background">
        <div class="contactUsContainer">
            <div class="screen" id="screen">
            <div class="screen-header">
                <div class="screen-header-left">
                <div class="screen-header-button close"></div>
                <div class="screen-header-button maximize"></div>
                <div class="screen-header-button minimize"></div>
                </div>
                <div class="screen-header-right">
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
                </div>
            </div>
            <div class="screen-body">
                <div class="screen-body-item left">
                <div class="app-title">
                    <span>CONTACT</span>
                    <span>US</span>
                </div>
                <div class="app-contact">CONTACT INFO : +212 06 05 39 39 10</div>
                </div>
                <div class="screen-body-item">
                <div class="app-form">
                    <div class="app-form-group">
                    <input class="app-form-control" placeholder="NAME" value="TRAV">
                    </div>
                    <div class="app-form-group">
                    <input class="app-form-control" placeholder="EMAIL">
                    </div>
                    <div class="app-form-group">
                    <input class="app-form-control" placeholder="CONTACT NO">
                    </div>
                    <div class="app-form-group message">
                    <input class="app-form-control" placeholder="MESSAGE">
                    </div>
                    <div class="app-form-group buttons">
                    <button class="app-form-button">CANCEL</button>
                    <button class="app-form-button">SEND</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="blank" id="blank" style="height:80vh;background-color:white;width:100%;">
    <!-- <div class="AboutUsImg"><img src="aboutUs.png"></div> -->
    <div class = "blankContent">follow us on socoal media</div>
    <div class="followUs">
    <a href="#"><span>Facebook</span></a>
    <a href="#"><span>Twitter</span></a>
    <a href="#"><span>Google+</span></a>
    <a href="#"><span>Github</span></a>
    <a href="#"><span>Dribbble</span></a>
    <a href="#"><span>CodePen</span></a>
    </div>

    </div>

    

    

    <script src="particles.js"></script>

    <script>

        // nav bar
        var NavBar = document.getElementById("buttonNav");
        NavBar.addEventListener('click',function(){
            document.getElementById("kln-banner").display = "none";
        })
        // login
        function logReg(){
            document.getElementById("loginWin").style.animation = "fadeInn 1s ease-in both";
            document.getElementById("loginWin").style.display = "flex";
            document.body.style.overflow="hidden";
            document.getElementById("screen1").innerHTML="<div class='screen__content'><form name='form1' action='' method='post' class='login'><div class='login__field'><i class='login__icon fa fa-user'></i><input type='text' class='login__input' id='loginEmail' placeholder='User name / Email' name='email'></div><div class='login__field'><i class='login__icon fa fa-lock'></i><input type='password' id='loginPassword' class='login__input' placeholder='Enter a Password' name='password'></div><button type='submit' class='button login__submit' id='login__submit' onclick='return loginSubmit()' name='logSubmit' ><span class='button__text'>Log in Now</span><i class='button__icon fa fa-chevron-right'></i></button></form></div><div class='screen__background'><span class='screen__background__shape screen__background__shape4' id = 'shape4'></span><span class='screen__background__shape screen__background__shape3' id='shape3'></span><span class='screen__background__shape screen__background__shape2' id='shape2'></span><span class='screen__background__shape screen__background__shape1' id='shape1'></span></div><div class='register' onclick='register()'>REGISTER</div><div class='forgot' onclick='resetPassword()'>forgot password ?</div>";
            document.getElementById("navMenu").style.visibility = "hidden";
            
            document.addEventListener('mouseup',function(event) {
                var loginWin = document.getElementById("loginWin");
                var screen1 = document.getElementById("screen1");


                if (!screen1.contains(event.target)) {
                    loginWin.style.display = 'none';
                    document.body.style.overflow="scroll";
                    document.getElementById("navMenu").style.visibility = "visible";


                }
            })




        };

        //particles
        /* ---- particles.js config ---- */

            particlesJS("blank", {
            particles: {
                
                number: {
                value: 100,
                density: {
                    enable: true,
                    value_area: 2000
                }
                },
                color: {
                value: ["#000"]
                },

                shape: {
                type: "circle",
                stroke: {
                    width: 0,
                    color: "#000"
                },
                polygon: {
                    nb_sides: 5
                },
                image: {
                    src: "img/github.svg",
                    width: 100,
                    height: 100
                }
                },
                opacity: {
                value: 0.6,
                random: false,
                anim: {
                    enable: false,
                    speed: 1,
                    opacity_min: 0.1,
                    sync: false
                }
                },
                size: {
                value: 2,
                random: true,
                anim: {
                    enable: false,
                    speed: 40,
                    size_min: 0.1,
                    sync: false
                }
                },
                line_linked: {
                enable: true,
                distance: 120,
                color: "#000000",
                opacity: 0.4,
                width: 1
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                onhover: {
                    enable: true,
                    mode: "grab"
                },
                onclick: {
                    enable: false
                },
                resize: true
                },
                modes: {
                grab: {
                    distance: 140,
                    line_linked: {
                    opacity: 1
                    }
                },
                bubble: {
                    distance: 400,
                    size: 40,
                    duration: 2,
                    opacity: 8,
                    speed: 3
                },
                repulse: {
                    distance: 200,
                    duration: 0.4
                },
                push: {
                    particles_nb: 4
                },
                remove: {
                    particles_nb: 2
                }
                }
            },
                retina_detect: true
            });



        

        //register
        function register(){
            var screen1 = document.getElementById("screen1");
            screen1.innerHTML="<div class='screen__content'><form name='form2' action='' method='post' class='login'><div class='login__field'><i class='login__icon fa fa-user'></i><input type='text' required class='login__input' id='username' placeholder='Username' name='username'></div><div class='login__field'><i class='login__icon fa fa-user'></i><input type='email' required class='login__input' placeholder='Email' id='registerEmail' name='email'></div><div class='login__field'><i class='login__icon fa fa-lock'></i><input type='password' required class='registerPassword' placeholder='Enter a Password' id='registerPassword1' name='password'></div><div class='login__field'><i class='login__icon fa fa-lock'></i><input type='password' required class='registerPassword' placeholder='Re-enter the Password' id='registerPassword2'></div><button type='submit' class='button login__submit' id='register__submit' onclick='return registerSubmit()' name='regSubmit' ><span class='button__text'>Register Now</span><i class='button__icon fa fa-chevron-right'></i></button></form></div><div class='screen__background'><span class='screen__background__shape screen__background__shape4' id = 'shape4'></span><span class='screen__background__shape screen__background__shape3' id='shape3'></span><span class='screen__background__shape screen__background__shape2' id='shape2'></span><span class='screen__background__shape screen__background__shape1' id='shape1'></span></div>";

        }

        function resetPassword(){
            var screen1 = document.getElementById("screen1");
            screen1.innerHTML =" <div class='screen__content'><form name='form2' action='' method='post' class='login'><div class='login__field'><i class='login__icon fa fa-user'></i><input type='email' required class='login__input' placeholder='Email' id='registerEmail' name='email'></div><div class='login__field'><i class='login__icon fa fa-lock'></i><input type='password' required class='registerPassword' placeholder='Enter the new Password' id='registerPassword1' name='password'></div><button type='submit' class='button login__submit' id='register__submit' name='resetSubmit' ><span class='button__text'>Reset Password</span><i class='button__icon fa fa-chevron-right'></i></button></form></div><div class='screen__background'><span class='screen__background__shape screen__background__shape4' id = 'shape4'></span><span class='screen__background__shape screen__background__shape3' id='shape3'></span><span class='screen__background__shape screen__background__shape2' id='shape2'></span><span class='screen__background__shape screen__background__shape1' id='shape1'></span></div>"
        }
        function registerSubmit(){
            var registerEmail = document.getElementById("registerEmail");
            let email = registerEmail.value;
            let password1 = document.getElementById("registerPassword1");
            let password2 = document.getElementById("registerPassword2");
            let pass1 = password1.value;
            let pass2 = password2.value;

            registerEmail.style.animation="none";
            password2.style.animation = "none";

            // if(!email.includes("@")){
            //     registerEmail.value="";
            //     registerEmail.ariaPlaceholder="Please Enter a proper Email";
            //     registerEmail.focus();
            //     registerEmail.style.animation = "shake .1s linear";
            //     registerEmail.style.animationIterationCount="3";

            // }else if(pass1!=pass2){
            //     password2.value = "";
            //     password2.Placeholder="Passwords don't match";
            //     password2.focus();
            //     password2.style.animation = "shake .1s linear";
            //     password2.style.animationIterationCount="3";
            
            // }

        }

        function RegisterButton(){
            register();
            document.getElementById("loginWin").style.animation = "fadeInn 1s ease-in both";
            document.getElementById("loginWin").style.display = "flex";
            document.body.style.overflow="hidden";
            document.addEventListener('mouseup',function(event) {
                var loginWin = document.getElementById("loginWin");
                var screen1 = document.getElementById("screen1");


                if (!screen1.contains(event.target)) {
                    loginWin.style.display = 'none';
                    document.body.style.overflow="scroll";

                }
            })
        }

        function usernameTaken(){
            register();
            document.getElementById("loginWin").style.animation = "fadeInn 1s ease-in both";
            document.getElementById("loginWin").style.display = "flex";
            document.body.style.overflow="hidden";
            document.addEventListener('mouseup',function(event) {
                var loginWin = document.getElementById("loginWin");
                var screen1 = document.getElementById("screen1");


                if (!screen1.contains(event.target)) {
                    loginWin.style.display = 'none';
                    document.body.style.overflow="scroll";

                }
            })
            document.getElementById("username").placeholder = "Username is already taken"
            document.getElementById("username").focus();
            document.getElementById("username").style.borderBottomColor="red";
        }

        function emailTaken(){
            register();
            document.getElementById("loginWin").style.animation = "fadeInn 1s ease-in both";
            document.getElementById("loginWin").style.display = "flex";
            document.body.style.overflow="hidden";
            document.addEventListener('mouseup',function(event) {
                var loginWin = document.getElementById("loginWin");
                var screen1 = document.getElementById("screen1");


                if (!screen1.contains(event.target)) {
                    loginWin.style.display = 'none';
                    document.body.style.overflow="scroll";

                }
            })
            document.getElementById("registerEmail").placeholder = "email is already associated"
            document.getElementById("registerEmail").focus();
            document.getElementById("registerEmail").style.borderBottomColor="red";
        }

        function incorrectLogin(){
            logReg();
            document.getElementById("loginWin").style.animation = "fadeInn 1s ease-in both";
            document.getElementById("loginWin").style.display = "flex";
            document.body.style.overflow="hidden";
            document.addEventListener('mouseup',function(event) {
                var loginWin = document.getElementById("loginWin");
                var screen1 = document.getElementById("screen1");


                if (!screen1.contains(event.target)) {
                    loginWin.style.display = 'none';
                    document.body.style.overflow="scroll";

                }
            })
            document.getElementById("loginEmail").focus();
            document.getElementById("loginEmail").style.borderBottomColor="red";
            document.getElementById("loginPassword").style.borderBottomColor="red";


        }
        
        
        function book(){
            var bool =  "<?php echo !isset($_SESSION['username']) ?>"
            if(bool) alert ("you need to log in first");
            else if(!bool) window.location.replace("http://localhost/project/places.php");
        }



        var loginSubmitButton = document.getElementById("login__submit");
        loginSubmitButton.addEventListener('mouseover',function(){
            document.getElementById("shape2").style.backgroundColor="black;";

        });

        //replace webpage after login
        function replace(username){
            // window.location.replace("http://localhost/project/dashboard.php");
            document.getElementById("Acc").innerHTML = "<img id='profileImg' src = 'pfp.jpeg'>";
            document.getElementById("Acc").innerHTML += username;
            document.getElementById("Acc").innerHTML += "<ul class='drop'><div><li class='lg settings' id='settings' onclick=''>Settings</li><li class='rg logout' id='logout' onclick='logout()'>Logout</li></div></ul></li></ul>";
            
        }

        function logout(){
            window.location.replace("http://localhost/project/logout.php");
        }


        function DiscoverMor(){
            if(screen.width<400){
                document.body.style.transition = "background-image 2s ease";
                document.body.style.background = "url(homePhone.jpg)";
                document.body.style.backgroundSize="100% auto";
                document.body.style.webkitBackgroundSize="100% auto";
                document.body.style.backgroundRepeat="no-repeat";
                document.body.style.backgroundAttachment = "fixed";


            }else {
                document.body.style.transition = "background-image 2s ease";
                document.body.style.background = "url(home1.jpg)";
                document.body.style.backgroundSize="cover";
                document.body.style.backgroundRepeat="no-repeat";
                document.body.style.backgroundAttachment = "fixed";


            }
            
        }
        function DiscoverWor(){
            if(screen.width<400){
                document.body.style.transition = "background-image 2s ease";
                document.body.style.background = "url(city.jpg)";
                document.body.style.backgroundSize="100% auto";
                document.body.style.webkitBackgroundSize="100% auto";
                document.body.style.backgroundRepeat="no-repeat";
                document.body.style.backgroundAttachment = "fixed";

            }
            else{
                document.body.style.transition = "background-image 2s ease";
                document.body.style.background = "url(home2.jpg)";
                document.body.style.backgroundSize="cover";
                document.body.style.backgroundRepeat="no-repeat";
                document.body.style.backgroundAttachment = "fixed";

            }
            


        


        }
        window.onscroll = function(){
            if(window.pageYOffset > 0){
                document.getElementById("arrow").style.animation="none";       
                document.getElementById("arrow1").style.animation="none";       

            }else{
                document.getElementById("arrow").style.animation="flickerAnimation .5s infinite";       
                document.getElementById("arrow1").style.animation="flickerAnimation .5s infinite";  

            }
        }
        const observerOptions = {
            root: null,
            rootMargin: "0px",
            threshold: 0.01
        };

        function observerCallback(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                // fade in observed elements that are in view
                entry.target.classList.replace('fadeOut', 'fadeIn');
                var c = entry.target.children;
                var c1 = c[0].children;
                c1[0].style.animation = "fadeInn 2s ease-in both";
                c1[1].style.animation = "fadeInn 2s ease-in both";
                c1[1].style.animationDelay = "300ms";
                c1[2].style.animation = "fadeInn 2s ease-in both";
                c1[2].style.animationDelay = "600ms";
                c1[3].style.animation = "fadeInn 2s ease-in both";
                c1[3].style.animationDelay = "900ms";


                
                } else {
                // fade out observed elements that are not in view
                entry.target.classList.replace('fadeIn', 'fadeOut');
                }
            });
        }

        const observer = new IntersectionObserver(observerCallback, observerOptions);

        const fadeElms = document.querySelectorAll('.fade');
        fadeElms.forEach(el => observer.observe(el));

        function goToNat(){
            var rect = document.getElementById("choicesContainer").getBoundingClientRect();
            window.scrollTo({top:rect.top,behavior:"smooth"});
            //change datalist of going to
            document.getElementById("availablePlaces").innerHTML="<option value='Chefchaouen'>Chefchaouen</option><option value='Fes'>Fes</option><option value='Marrakech'>Marrakech</option><option value='Rabat'>Rabat</option><option value='Meknes'>Meknes</option><option value='Ouarzazate'>Ouarzazate</option><option value='Casablanca'>Casablanca</option><option value='Agadir'>Agadir</option><option value='Tangier'>Tangier</option>";
            //change image if national was clicked
            document.getElementById("back-video").src="natVideo.mp4";
        }

        function goToInter(){
            var rect = document.getElementById("choicesContainer").getBoundingClientRect()
            window.scrollTo({top:rect.top,behavior:"smooth"});
            //change datalist of going to
            document.getElementById("availablePlaces").innerHTML="<option value='New York'>New York</option><option value='London'>London</option><option value='Paris'>Paris</option><option value='Tokyo'>Tokyo</option><option value='Dubai'>Dubai</option><option value='Barcelona'>Barcelona</option><option value='Madrid'>Madrid</option><option value='Singapore'>Singapore</option><option value='Amsterdam'>Amsterdam</option>"
            //change image if Internation was clicked
            document.getElementById("back-video").src="interVideo.mp4";


        }
        
        var toggle = document.getElementById("toggle-item");
        toggle.addEventListener("click", function(){
            this.classList.toggle("active");
            document.body.classList.toggle("active");
            var container1 = document.getElementById("choicesContainer1");
            var cityNight1 = document.getElementById("cityNight1");
            var cityNight2 = document.getElementById("cityNight2");
            var cityNight3 = document.getElementById("cityNight3");
            var descTheme = document.getElementById("discTheme");
            if(!this.classList.contains("active")) {
                container1.style.backgroundColor="white";
                container1.style.color="black";
                cityNight1.src="cityDay2.jpg";
                cityNight2.src="cityDay1.jpg";
                cityNight3.src="cityDay4.jpg";
                descTheme.innerHTML="Discover the world at Day";

                //boxes
                document.getElementById("serviceTransportation").style.backgroundColor="white";

                document.getElementById("serviceHotels").style.backgroundColor="white";

                document.getElementById("serviceRestaurents").style.backgroundColor="white";

                document.getElementById("serviceRecomendations").style.backgroundColor="white";
                document.getElementById("restaurentIcon").style.filter="none";
                document.getElementById("hotelsIcon").style.filter="none";
                document.getElementById("airplaneIcon").style.filter="none";
                document.getElementById("placesIcon").style.filter="none";

                document.getElementById("serviceTransportation").style.boxShadow="0 2px 14px 5px rgb(20 20 20 / 5%)";
                document.getElementById("serviceHotels").style.boxShadow="0 2px 14px 5px rgb(20 20 20 / 5%)";
                document.getElementById("serviceRestaurents").style.boxShadow="0 2px 14px 5px rgb(20 20 20 / 5%)";
                document.getElementById("serviceRecomendations").style.boxShadow="0 2px 14px 5px rgb(20 20 20 / 5%)";

                



            }
            else{
                container1.style.backgroundColor="#141414";
                container1.style.color="white";
                cityNight3.style.animation="fadeInn 2s ease-in both";
                cityNight1.style.animation="fadeInn 2s ease-in both";
                cityNight2.style.animation="fadeInn 2s ease-in both";
                cityNight1.src="cityNight1.jpg";

                cityNight2.src="cityNight2.jpg";

                cityNight3.src="cityNight3.jpg";
              




                descTheme.innerHTML="Discover the world at Night"

                document.getElementById("serviceTransportation").style.backgroundColor="#141414";

                document.getElementById("serviceHotels").style.backgroundColor="#141414";

                document.getElementById("serviceRestaurents").style.backgroundColor="#141414";

                document.getElementById("serviceRecomendations").style.backgroundColor="#141414";

                document.getElementById("restaurentIcon").style.filter="invert()";
                document.getElementById("hotelsIcon").style.filter="invert()";
                document.getElementById("airplaneIcon").style.filter="invert()";
                document.getElementById("placesIcon").style.filter="invert()";

                document.getElementById("serviceTransportation").style.boxShadow="0 0px 14px 0px black";
                document.getElementById("serviceHotels").style.boxShadow="0 0px 14px 0px black";
                document.getElementById("serviceRestaurents").style.boxShadow="0 0px 14px 0px black";
                document.getElementById("serviceRecomendations").style.boxShadow="0 0px 14px 0px black";





            }
        });

        function bringThemUp(){
            document.getElementById("serviceTransportation").style.animation="fadeInn 2s ease-in both";
            document.getElementById("serviceTransportation").style.animationDelay="200ms"

            document.getElementById("serviceHotels").style.animation="fadeInn 2s ease-in both";
            document.getElementById("serviceHotels").style.animationDelay="700ms"


            document.getElementById("serviceRestaurents").style.animation="fadeInn 2s ease-in both";
            document.getElementById("serviceRestaurents").style.animationDelay="1200ms"


            document.getElementById("serviceRecomendations").style.animation="fadeInn 2s ease-in both";
            document.getElementById("serviceRecomendations").style.animationDelay="1700ms"

            // document.getElementById("place1").style.animation="fadeInn 2s ease-in both";
            // document.getElementById("place1").style.animationDelay="1s";

            // document.getElementById("place2").style.animation="fadeInn 2s ease-in both";
            // document.getElementById("place2").style.animationDelay="1300ms";

            // document.getElementById("place3").style.animation="fadeInn 2s ease-in both";
            // document.getElementById("place3").style.animationDelay="1500ms";

            // document.getElementById("place4").style.animation="fadeInn 2s ease-in both";
            // document.getElementById("place4").style.animationDelay="1700ms";

            // document.getElementById("place5").style.animation="fadeInn 2s ease-in both";
            // document.getElementById("place5").style.animationDelay="2000ms";
            




        }
        

        //add eventListener to services recomendations
        var placesIcon = document.getElementById("serviceRecomendations");

        placesIcon.addEventListener("click",function(){
            window.location.replace("http://localhost/project/places.php");
        })

        //bring up contact us
        function bringUpContactUs(){
            // document.getElementById("contactUs").style.display="none";
            document.getElementById("screen").style.zIndex = "1";

            document.getElementById("screen").style.animation="fadeInn 2s ease-in both";
        }

        function noUserFound(){
            resetPassword();
            document.getElementById("loginWin").style.animation = "fadeInn 1s ease-in both";
            document.getElementById("loginWin").style.display = "flex";
            document.body.style.overflow="hidden";
            document.addEventListener('mouseup',function(event) {
                var loginWin = document.getElementById("loginWin");
                var screen1 = document.getElementById("screen1");


                if (!screen1.contains(event.target)) {
                    loginWin.style.display = 'none';
                    document.body.style.overflow="scroll";

                }
            })
            document.getElementById("registerEmail").focus();
            document.getElementById("registerEmail").style.borderBottomColor="red";
            document.getElementById("registerEmail").placeholder = "user not found";
        }
        
        
        
    </script>
    <?php require "db.php";  

        require("PHPMailer-master/src/PHPMailer.php");
        require("PHPMailer-master/src/SMTP.php"); 
        // When form submitted, insert values into the database.
        if(isset($_REQUEST['regSubmit'])){
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con,$username);

            // removes backslashes
            $email    = stripslashes($_REQUEST['email']);
            //escapes special characters in a string to prevent sql injection
            $email    = mysqli_real_escape_string($con, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $create_datetime = date("Y-m-d H:i:s");
            $query_username_check = "SELECT * FROM users WHERE username = '" . $username . "'";
            $res_username_check = mysqli_query($con,$query_username_check);
            $query_email_check = "SELECT * FROM users WHERE email = '" . $email . "'";
            $res_email_check = mysqli_query($con,$query_email_check);
            if(mysqli_num_rows($res_username_check)!=0) echo '<script type="text/javascript">usernameTaken();</script>';
            else if(mysqli_num_rows($res_email_check)!=0) echo '<script>emailTaken();</script>';
            else{
                $query    = "INSERT into users(username,email,password,create_datetime) VALUES ('$username','$email', '" . md5($password) . "', '$create_datetime')";
                $result   = mysqli_query($con, $query);
                $mail = new PHPMailer();
                $mail->IsSMTP(); // enable SMTP

                $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
                $mail->SMTPAuth = true; // authentication enabled
                $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465; // or 587
                $mail->IsHTML(true);
                $mail->Username = "travagence";
                $mail->Password = "bhinnpeoenclenyg";
                $mail->SetFrom("travagence@gmail.com");
                $mail->Subject = "Trav Account Confirmation";
                $mail->Body = "Dear ".$username.",<br>Thank you for registering for Trav.";
                $mail->AddAddress($email);

                if($mail->Send()) {
                } else {
                    echo '<script>alert("failed to send a confirmation email");</script>';
                }


            }
            
        }

        else if(isset($_REQUEST['logSubmit'])){
            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($con,$email);//to prevent sql injection it will escape special characters 

            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $query = "SELECT * FROM users WHERE email = '" . $email . "' AND password = '" . md5($password)."'";
            $result = mysqli_query($con,$query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);


            
            if($rows==1){
                //this how to fetch a single column
                
                $username_result = mysqli_query($con,"SELECT username FROM users WHERE email = '" . $email . "'");
                $username_row =  mysqli_fetch_array($username_result);
                $_SESSION['username'] = $username_row['username'];
                echo '<script>replace('.json_encode($_SESSION['username']).')</script>';
                header("Refresh:0");
            }else{
                $query = "SELECT * FROM users WHERE username = '" . $email/*it can be a username too */ . "' AND password = '" . md5($password)."'";
                $result = mysqli_query($con,$query);
                if(!mysqli_num_rows($result)){
                    echo '<script type="text/javascript">incorrectLogin()</script>';                
                    die;
                }else{
                    $_SESSION['username'] = $email;
                    echo '<script>replace('.json_encode($email).')</script>';
                    header("Refresh:0");

                }
            }
        }else if(isset($_REQUEST['resetSubmit'])){
            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($con,$email);

            $query = "SELECT username FROM users WHERE email = '" . $email . "'";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)==0){
                echo '<script type="text/javascript">noUserFound()</script>';
                
            }else{
                $result_row = mysqli_fetch_array($result);
                $username = $result_row['username'];


                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
                $mail->SMTPAuth = true; // authentication enabled
                $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465; // or 587
                $mail->IsHTML(true);
                $mail->Username = "travagence";
                $mail->Password = "bhinnpeoenclenyg";
                $mail->SetFrom("travagence@gmail.com");
                $mail->Subject = "Trav Account Password Reset";
                $mail->Body = "Dear ".$username.",<br>your password was reset you can login with your new password " ;
                $mail->AddAddress($email);

                if($mail->Send()) {
                    $password = stripslashes($_REQUEST['password']);
                    $password = mysqli_real_escape_string($con, $password);
                    $quey = "UPDATE users SET password = '" . md5($password) . "' WHERE email = '" . $email . "'";
                    $result = mysqli_query($con,$quey);

                } else {
                    echo '<script>alert("failed to send a confirmation email");</script>';
                }

            }

            


        }
        ?>
   </body>
</html>