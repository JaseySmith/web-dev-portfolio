// --- Particles For Home Section -----

particlesJS("particles-js", {
    "particles":{
        "number":{
            "value":60,
            "density":{
                "enable":true,
                "value_area":800
            }
        },
        "color":{
            "value":"#8E8E90"
        },
        "shape":{
            "type":"circle",
            "stroke":{
                "width":0,
                "color":"#000000"
            },"polygon":{
                "nb_sides":5
            },
            "image":{
                "src":"img/github.svg",
                "width":100,
                "height":100
            }
        },
        "opacity":{
            "value":0.5,
            "random":false,
            "anim":{
                "enable":false,
                "speed":1,
                "opacity_min":0.1,
                "sync":false
            }
        },
        "size":{
            "value":3,
            "random":true,
            "anim":{
                "enable":false,
                "speed":1,
                "size_min":0.1,
                "sync":false
            }
        },
        "line_linked":{
            "enable":true,
            "distance":150,
            "color":"#8E8E90",
            "opacity":0.4,
            "width":1
        },
        "move":{
            "enable":true,
            "speed":2,
            "direction":"none",
            "random":false,
            "straight":false,
            "out_mode":"out",
            "bounce":false,
            "attract":{
                "enable":false,
                "rotateX":600,
                "rotateY":1200
            }
        }
    },
    "interactivity":{
        "detect_on":"canvas",
        "events":{
            "onhover":{
                "enable":true,
                "mode":"grab"
            },
            "onclick":{
                "enable":true,
                "mode":"repulse"
            },"resize":true
        },
        "modes":{
            "grab":{
                "distance":200,
                "line_linked":{
                    "opacity":0.7
                }
            },
            "bubble":{
                "distance":400,
                "size":40,
                "duration":2,
                "opacity":8,
                "speed":3},
                "repulse":{
                    "distance":200,
                    "duration":0.4
                },
                "push":{
                    "particles_nb":4
                },
                "remove":{
                    "particles_nb":2
                }
            }
        },
        "retina_detect":true
    }
);



// ----- Dark Mode Switch -----

const toggle = document.querySelector('#toggle input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
  
    if (currentTheme === 'dark') {
        toggle.checked = true;
    }
}

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
    else {        
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
    }    
}

toggle.addEventListener('change', switchTheme, false);



// ----- Shrink Navbar On Scroll -----

var nav = document.querySelector('.nav');
var subNav = document.querySelectorAll('.nav a');
var burger = document.querySelector('.burger');
var body = document.querySelector('body');

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    document.getElementById("header").style.paddingTop = "0.6em";
    document.getElementById("header").style.paddingBottom = "0.6em";
    document.getElementById("header").style.backgroundColor = "var(--dark-bg)";
    document.getElementById("header").style.borderBottom = "1px solid var(--shade-color)";
    document.getElementById("logo").style.fontSize = "2.5em";
  } else {
    document.getElementById("header").style.paddingTop = "1em";
    document.getElementById("header").style.paddingBottom = "1em";
    document.getElementById("header").style.backgroundColor = "var(--light-bg)";
    document.getElementById("header").style.borderBottom = "none";
    document.getElementById("logo").style.fontSize = "3em";
  }
}

window.onscroll = function() {scrollFunction()};



// ----- Navbar & Burger -----

function linkClick() {
    if (window.innerWidth < 1024) {
        openNav();
        animateLinks();
        animateBurger();
        noScroll();
    }
}
    
function openNav() {
    nav.classList.toggle('nav-active');
}

function animateLinks() {
    subNav.forEach((link, index) => {
      if (link.style.animation) {
          link.style.animation = '';
      } else {
          link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.1}s`
      }
    });
}

function animateBurger() {
    burger.classList.toggle('toggle');
}

$(burger).on('click touch', function () {
    openNav();
    animateLinks();
    animateBurger();
    noScroll();
})
  
function noScroll() {
    body.classList.toggle('noscroll');
}



// ----- Scroll Animation -----

const scrollElements = document.querySelectorAll(".js-scroll");

// detect when element is in view
const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

// detect when element is outof view
const elementOutofView = (el) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop > (window.innerHeight || document.documentElement.clientHeight)
  );
};

// add 'scrolled' class to element in view
const displayScrollElement = (element) => {
  element.classList.add("scrolled");
};

// remove 'scrolled' class from out of view element
const hideScrollElement = (element) => {
  element.classList.remove("scrolled");
};

// Logic for animation
const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1.1)) {
      displayScrollElement(el);
    }
  })
}

// add event listener
window.addEventListener("scroll", () => { 
  throttle(handleScrollAnimation, 250);
});

//initialize throttleTimer as false
let throttleTimer = false;
 
const throttle = (callback, time) => {
    //don't run the function while throttle timer is true
    if (throttleTimer) return;
     
    //first set throttle timer to true so the function doesn't run
    throttleTimer = true;
     
    setTimeout(() => {
        //call the callback function in the setTimeout and set the throttle timer to false after the indicated time has passed 
        callback();
        throttleTimer = false;
    }, time);
}