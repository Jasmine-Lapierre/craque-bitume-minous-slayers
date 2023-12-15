/* Wow, tellement un beau spot pour écrire du JS */


let popup = document.querySelector(".popup");
let closePopup = document.querySelector(".bi-x-lg");
let enleve = localStorage.getItem("AppuieX");
let menu = document.querySelector(".navbar-toggler");

let banniereRajouter = function(){
  if(popup){
  popup.style.display = "flex";}
}

if(!enleve){
  console.log(enleve)
  banniereRajouter();
}




//Fermer popup
if(popup){
    closePopup.addEventListener("click", function(){
    popup.style.display = "none";
    localStorage.setItem("AppuieX", "true");

})
}

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


//Trier et voir plus
const selectType = document.querySelector(".dateFilter");
let body = document.querySelector("body");
let formationCard = document.querySelector(".formation-row");
let voirPlus = document.querySelector("#voirPlus");
let maxCards = 6;
let language = document.querySelector(".formation--titre");

if(voirPlus){voirPlus.addEventListener("click", addCards);}

function addCards(){
  maxCards += 6;
  formationCard.innerHTML = "";
  let value1 = selectType.value;
	let langChange = "";
	if (language == "Hub de formations") {
		langChange = ""
	} else {
		langChange = "en"
	}

  fetch(`/wordpress/index.php/${langChange}/wp-json/wp/v2/formation?orderby=date&order=${value1}&_embed&per_page=100`)
  .then(response => response.json())
  .then((data1) => {
    console.log(maxCards);
    console.log(data1.length);
	  
	if (maxCards >= data1.length){
		voirPlus.style.display="none";
		}
		
    for (let i=0; i<maxCards; i++){
      let url1 = data1[i].link;
      let thumbnail1 = data1[i]._embedded['wp:featuredmedia'][0].source_url;
      let title1 = data1[i].acf.formation_titre;
      let date1 = data1[i].acf.date;    
      
      formationCard.innerHTML += `
    <div class="col-lg-4 col-md-6 col-sm-12 py-3 formation-card">
    <a href="${url1}">
    <div class="card">
        <img src="${thumbnail1}" class="card-img-top">
        <div class="card-body">
            <p>${title1}
                <br> <small> ${date1}</small>
            </p>
        </div>
    </div>
</a>
</div>
`
}})};

if(selectType){selectType.addEventListener("change", cardSort);}

function cardSort(element){
  formationCard.innerHTML = "";

  let selectElement = element.target;
  let value = selectElement.value;
  console.log(selectElement);
  console.log(value);
  console.log("test");
  	let langChange = "";
	if (language == "Hub de formations") {
		langChange = ""
	} else {
		langChange = "en"
	}
  fetch(`/wordpress/index.php/${langChange}/wp-json/wp/v2/formation?orderby=date&order=${value}&_embed&per_page=${maxCards}`)
  .then(response => response.json())
  .then((data) => { console.log(data[0].link);
    console.log(maxCards);
    for (let i=0; i<maxCards; i++){
      let url = data[i].link;
      let thumbnail = data[i]._embedded['wp:featuredmedia'][0].source_url;
      let title = data[i].acf.formation_titre;
      let date = data[i].acf.date;    
      
      formationCard.innerHTML += `
    <div class="col-lg-4 col-md-6 col-sm-12 py-3 formation-card">
    <a href="${url}">
    <div class="card">
        <img src="${thumbnail}" class="card-img-top">
        <div class="card-body">
            <p>${title}
                <br> <small> ${date}</small>
            </p>
        </div>
    </div>
</a>
</div>
`
    }



  });

}




  