var menu = document.querySelector(".menu");
var navOpen = document.querySelector(".hamburger");
var navClose = document.querySelector(".close");
var productsFilter = document.querySelector('#products-filter');
console.log(productsFilter);

var navOpenH3 = document.querySelector(".nav-footer h3")
navOpenH3.addEventListener("click", () => {
    if (navOpenH3) {
        navOpenH3.click(function(){
        (this).parent(".nav").toggleClass("open"); 
        });
    }
});
var navLeft = menu.getBoundingClientRect().left;
navOpen.addEventListener("click", () => {
  //console.log(123);
  if (navLeft < 0) {
    menu.classList.add("show");
    document.body.classList.add("show");
    navBar.classList.add("show");
  }
});

navClose.addEventListener("click", () => {
  if (navLeft < 0) {
    menu.classList.remove("show");
    document.body.classList.remove("show");
    navBar.classList.remove("show");
  }
});

// Fixed Nav
var navBar = document.querySelector(".nav");
var navHeight = navBar.getBoundingClientRect().height;
window.addEventListener("scroll", () => {
  const scrollHeight = window.pageYOffset;
  if (scrollHeight > navHeight) {
    navBar.classList.add("fix-nav");
  } else {
    navBar.classList.remove("fix-nav");
  }
});

// Scroll To
var links = [...document.querySelectorAll(".scroll-link")];
links.map(link => {
  if (!link) return;
  link.addEventListener("click", e => {
    e.preventDefault();

    const id = e.target.getAttribute("href").slice(1);

    const element = document.getElementById(id);
    const fixNav = navBar.classList.contains("fix-nav");
    let position = element.offsetTop - navHeight;

    window.scrollTo({
      top: position,
      left: 0,
    });

    navBar.classList.remove("show");
    menu.classList.remove("show");
    document.body.classList.remove("show");
  });
});


gsap.from(".logo", { opacity: 0, duration: 1, delay: 0.5, y: -10 });
gsap.from(".hamburger", { opacity: 0, duration: 1, delay: 1, x: 20 });

function filter(e) {
    e.preventDefault();
    console.log(123);
}


productsFilter.addEventListener('click', (event) => {
    event.preventDefault(); 
    var values = $( "#slider-range" ).slider( "option", "values" );
    var values = $( "#" ).slider( "option", "values" );
    var volume_40 = $("#volume_40").is(":checked");
    var getFilterVolume = $(GET_)
    
   console.log(volume_40);
   //console.log(123); 
});




