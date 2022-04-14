// Variables
var nav = document.querySelector('.sub-nav');
var subNav = document.querySelectorAll('.sub-nav a');
var burger = document.querySelector('.burger');
var body = document.querySelector('body');

// Shrink navbar on scroll
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.querySelector('.sub-nav').style.top = "68px";
    document.getElementById("nav").style.paddingTop = "5px";
    document.getElementById("nav").style.paddingBottom = "10px";
    document.getElementById("logo").style.fontSize = "45px";
  } else {
    document.querySelector('.sub-nav').style.top = "97px";
    document.getElementById("nav").style.paddingTop = "10px";
    document.getElementById("nav").style.paddingBottom = "15px";
    document.getElementById("logo").style.fontSize = "60px";
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
        link.style.animation = `navLinkFade 0.6s ease forwards ${index / 7 + 0.35}s`
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