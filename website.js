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
    document.getElementById("screen1").innerHTML="<div class='screen__content'><form name='form1' action='' method='post' class='login'><div class='login__field'><i class='login__icon fa fa-user'></i><input type='text' class='login__input' id='loginEmail' placeholder='User name / Email' name='email'></div><div class='login__field'><i class='login__icon fa fa-lock'></i><input type='password' id='loginPassword' class='login__input' placeholder='Enter a Password' name='password'></div><button type='submit' class='button login__submit' id='login__submit' onclick='return loginSubmit()' name='logSubmit' ><span class='button__text'>Log in Now</span><i class='button__icon fa fa-chevron-right'></i></button></form></div><div class='screen__background'><span class='screen__background__shape screen__background__shape4' id = 'shape4'></span><span class='screen__background__shape screen__background__shape3' id='shape3'></span><span class='screen__background__shape screen__background__shape2' id='shape2'></span><span class='screen__background__shape screen__background__shape1' id='shape1'></span></div><div class='register' onclick='register()'>REGISTER</div>";

    
    document.addEventListener('mouseup',function(event) {
        var loginWin = document.getElementById("loginWin");
        var screen1 = document.getElementById("screen1");


        if (!screen1.contains(event.target)) {
            loginWin.style.display = 'none';
            document.body.style.overflow="scroll";

        }
    })




};

//particles
/* ---- particles.js config ---- */

    particlesJS("choicesContainer1", {
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



function loginSubmit(){
    var loginEmail = document.getElementById("loginEmail");
    let email = loginEmail.value;
    loginEmail.style.animation = "none";
    if(!email.includes("@")) {
        loginEmail.value="";
        loginEmail.ariaPlaceholder="Please Enter a proper Email";
        loginEmail.focus();
        loginEmail.style.animation = "shake .1s linear";
        loginEmail.style.animationIterationCount="3";
    

    } 
};

//register
function register(){
    var screen1 = document.getElementById("screen1");
    screen1.innerHTML="<div class='screen__content'><form name='form2' action='' method='post' class='login'><div class='login__field'><i class='login__icon fa fa-user'></i><input type='text' class='login__input' id='username' placeholder='Username' name='username'></div><div class='login__field'><i class='login__icon fa fa-user'></i><input type='text' class='login__input' placeholder='Email' id='registerEmail' name='email'></div><div class='login__field'><i class='login__icon fa fa-lock'></i><input type='password' class='registerPassword' placeholder='Enter a Password' id='registerPassword1' name='password'></div><div class='login__field'><i class='login__icon fa fa-lock'></i><input type='password' class='registerPassword' placeholder='Re-enter the Password' id='registerPassword2'></div><button type='submit' class='button login__submit' id='register__submit' onclick='return registerSubmit()' name='regSubmit' ><span class='button__text'>Register Now</span><i class='button__icon fa fa-chevron-right'></i></button></form></div><div class='screen__background'><span class='screen__background__shape screen__background__shape4' id = 'shape4'></span><span class='screen__background__shape screen__background__shape3' id='shape3'></span><span class='screen__background__shape screen__background__shape2' id='shape2'></span><span class='screen__background__shape screen__background__shape1' id='shape1'></span></div>";

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

    if(!email.includes("@")){
        registerEmail.value="";
        registerEmail.ariaPlaceholder="Please Enter a proper Email";
        registerEmail.focus();
        registerEmail.style.animation = "shake .1s linear";
        registerEmail.style.animationIterationCount="3";

    }else if(pass1!=pass2){
        password2.value = "";
        password2.Placeholder="Passwords don't match";
        password2.focus();
        password2.style.animation = "shake .1s linear";
        password2.style.animationIterationCount="3";
    
    }

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






var loginSubmitButton = document.getElementById("login__submit");
loginSubmitButton.addEventListener('mouseover',function(){
    document.getElementById("shape2").style.backgroundColor="black;";

});



function DiscoverMor(){
    if(screen.width<500){
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
    var places = document.getElementById("choicesContainer2").scrollIntoView();
})

//bring up contact us
function bringUpContactUs(){
    document.getElementById("contactUs").style.display="none";
    document.getElementById("screen").style.animation="fadeInn 2s ease-in both";
}

