// ? == Play video as popup
const video = document.querySelector('.video');

const playBtn = document.querySelector('.play-btn a');

const videoContianer = document.querySelector('.video-container');

const closeVbtn = document.querySelector('.close-vbtn');


const showcaseVideo = document.querySelector('#showcase-video');

const playIcon = document.querySelector('.outer-circle');

const bgVideo = document.querySelector('.background-video');

const mainMOHESRcarousel = document.querySelector('#mainMOHESRcarousel');


var myCarousel = document.querySelector('#mainMOHESRcarousel');
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 20000,
  pause: 'hover'
});

let showPopup = false;

playBtn.addEventListener('click', (e) => {
  e.preventDefault();
  if(!showPopup) {
    video.classList.add('show-popup');
    showPopup = true;
    showcaseVideo.setAttribute("controls","");
    showcaseVideo.play();
    bgVideo.pause();
    

    carousel = new bootstrap.Carousel(myCarousel, {
      interval: 50000,
      pause: 'hover'
    });
    
  } else {
    video.classList.remove('show-popup');
    showcaseVideo.pause();
    showPopup = false;
  }
});

closeVbtn.addEventListener('click', () => {
  if(showPopup) {
    video.classList.remove('show-popup');
    showPopup = false;
    showcaseVideo.pause();
    showcaseVideo.removeAttribute("controls","");
    bgVideo.play();
   
    
    carousel = new bootstrap.Carousel(myCarousel, {
      interval: 20000,
      pause: 'hover'
    });
  }
});