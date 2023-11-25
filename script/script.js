

let popup = document.querySelector(".popup");
let closePopup = document.querySelector(".bi-x-lg");
let enleve = localStorage.getItem("AppuieX");
let menu = document.querySelector(".navbar-toggler");


let banniereRajouter = function(){
  popup.style.display = "flex";
}
if(!enleve){
  console.log(enleve)
  banniereRajouter();
}




//Fermer popup
closePopup.addEventListener("click", function(){
    popup.style.display = "none";
    localStorage.setItem("AppuieX", "true");

})
gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(MotionPathPlugin);


//Stocker X cliqué en local storage

//Swiper

const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


//Animation page 404
gsap.registerPlugin(MotionPathPlugin);

gsap.to('.leaf-solo', {
  motionPath: {
    align: '#pathFall',
    path: '#pathFall',
  },
  duration: 10,
  ease: "power1.inOut",
})

gsap.timeline()
  .to(".leaf-solo", { rotate: "-20deg", delay: 0.3, duration: 3.3, ease: "power1.in" })
  .to(".leaf-solo", { rotate: "20deg", delay: 0.3, duration: 1.1, ease: "power1.in" })
  .to(".leaf-solo", { rotate: "-20deg", delay: 0.3, duration: 1.2, ease: "power1.in" })
  .to(".leaf-solo", { rotate: "0deg", delay: 0.3, duration: 2.8, ease: "power1.in" })

gsap.to('.leaf-no2', {
  motionPath: {
    align: '#pathWind',
    path: '#pathWind',
    autoRotate: true,
  },
  duration: 6,
  repeat: -1,
})

gsap.timeline({repeat: -1})
.fromTo(".leaf-no2", {opacity: "0%"}, {opacity: "100%", duration: 3})
.fromTo(".leaf-no2", {opacity: "100%"}, {opacity: "0%", duration: 3})

gsap.to('.leaf-no3', {
  motionPath: {
    align: '#pathWind2',
    path: '#pathWind2',
    autoRotate: true,
  },
  duration: 6,
  repeat: -1,
  delay: 2,
});

gsap.timeline({repeat: -1, delay: 2})
.fromTo(".leaf-no3", {opacity: "0%"}, {opacity: "100%", duration: 3})
.fromTo(".leaf-no3", {opacity: "100%"}, {opacity: "0%", duration: 3})


//Animation bloc dons

gsap.to('.leaf-jar', {
  motionPath: {
    align: '#pathJar',
    path: '#pathJar',
    autoRotate: true,
  },
  duration: 6,
  repeat: -1,
  ease: "power1.inOut",
})

gsap.timeline({repeat: -1})
.fromTo(".leaf-jar", {opacity: "0%"}, {opacity: "100%", duration: 3, })
.fromTo(".leaf-jar", {opacity: "100%"}, {opacity: "0%", duration: 3})

menu.addEventListener("mouseover", function(){
  gsap.fromTo('.navbar-toggler-icon', {scale: 1}, {scale: 1.5, ease: "elastic.out(1,0.3)"})
})

menu.addEventListener("mouseout", function(){
  gsap.fromTo('.navbar-toggler-icon', {scale: 1.5}, {scale: 1})
})
