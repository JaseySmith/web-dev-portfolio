// grab all scroll elements from document
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
    if (elementInView(el, 1.25)) {
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