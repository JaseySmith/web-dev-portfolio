// Variables
var nav = document.querySelector('.nav');
var subNav = document.querySelectorAll('.nav a');
var burger = document.querySelector('.burger');
var body = document.querySelector('body');

// Shrink navbar on scroll
function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    document.getElementById("header").style.paddingTop = "0.6em";
    document.getElementById("header").style.paddingBottom = "0.6em";
    document.getElementById("header").style.backgroundColor = "var(--dark-bg)";
    document.getElementById("header").style.borderBottom = "1px solid var(--shade-color)";
    document.getElementById("logo").style.fontSize = "2.75em";
  } else {
    document.getElementById("header").style.paddingTop = "1em";
    document.getElementById("header").style.paddingBottom = "1em";
    document.getElementById("header").style.backgroundColor = "var(--light-bg)";
    document.getElementById("header").style.borderBottom = "none";
    document.getElementById("logo").style.fontSize = "3.5em";
  }
}

window.onscroll = function() {scrollFunction()};

// Burger click/touch event
$(burger).on('click touch', function () {
  openNav();
  animateLinks();
  animateBurger();
  noScroll();
})
  
// Link click event
function linkClick() {
  if (window.innerWidth < 1024) {
    openNav();
    animateLinks();
    animateBurger();
    noScroll();
  }
}
  
// Menu overlay
function openNav() {
  nav.classList.toggle('nav-active');
}

// Nav link animation
function animateLinks() {
  subNav.forEach((link, index) => {
    if (link.style.animation) {
        link.style.animation = '';
    } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.1}s`
    }
  });
}
  
// Burger animation
function animateBurger() {
  burger.classList.toggle('toggle');
}

// No scroll when overlay is active
function noScroll() {
  body.classList.toggle('noscroll');
}