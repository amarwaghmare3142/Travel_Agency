// let menu = document.querySelector('#menu-btn');
// let navbar = document.querySelector('.header .navbar');

// menu.onclick = () =>{
//    menu.classList.toggle('fa-times');
//    navbar.classList.toggle('active');
// };

// window.onscroll = () =>{
//    menu.classList.remove('fa-times');
//    navbar.classList.remove('active');
// };

// var swiper = new Swiper(".home-slider",{
//    loop:true,
//    navigation: {
//      nextE1: ".swiper-button-next",
//      prevE1: ".swiper-button-prev",
//   },
// });

// var swiper = new Swiper(".home-slider",{
//    loop: true,
//    spaceBetween: 20,
//    autoHeight:true,
//    grabCursor:true,
//    breakpoints: {
//     640: {
//         slidesPerView: 1,
//       },
//       768: {
//         slidesPerView: 2,  
//       },
//       1024: {
//         slidesPerView: 3,  
//       },
//    },
// });   

// let loadMoreBtn = document.querySelector('.packages .load-more .btn');
// let currentItem= 3;

// loadMoreBtn.onclick = ()=>{
//    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
//    for (var i =currentItem; i < currentItem + 3; i++){
//       boxes[i].style.display = 'inline-block';
//    };   
//    currentItem += 3; 
//    if(currentItem >= boxes.length){
//       loadMoreBtn.style.display ='none';
//     }
// }


const slides = document.querySelectorAll(".slidem");
const nextBtn = document.querySelector(".nextBtn");
const prevBtn = document.querySelector(".prevBtn");
slides.forEach(function (slide, index) {
  slide.style.left = `${index * 100}%`;
});
let counter = 0;
nextBtn.addEventListener("click", function () {
  counter++;
  carousel();
});

prevBtn.addEventListener("click", function () {
  counter--;
  carousel();
});

function carousel() {
  // working with slides
  // if (counter === slides.length) {
  //   counter = 0;
  // }
  // if (counter < 0) {
  //   counter = slides.length - 1;
  // }
  // working with buttons

  if (counter < slides.length - 1) {
    nextBtn.style.display = "block";
  } else {
    nextBtn.style.display = "none";
  }
  if (counter > 0) {
    prevBtn.style.display = "block";
  } else {
    prevBtn.style.display = "none";
  }
  slides.forEach(function (slide) {
    slide.style.transform = `translateX(-${counter * 100}%)`;
  });
}

prevBtn.style.display = "none";