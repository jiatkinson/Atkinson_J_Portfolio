(() => {

    console.log("Welcome to my Portfolio");

    $(document).foundation()

var animation = bodymovin.loadAnimation({
    container: document.getElementById('first-program'),
    renderer : 'svg',
    loop: false,
    autoplay: true,
    path: './data/first-program.json'
})

var animation = bodymovin.loadAnimation({
    container: document.getElementById('second-program'),
    renderer : 'svg',
    loop: false,
    autoplay: true,
    path: './data/second-program.json'
})

var animation = bodymovin.loadAnimation({
    container: document.getElementById('third-program'),
    renderer : 'svg',
    loop: false,
    autoplay: true,
    path: './data/third-program.json'
})

var animation = bodymovin.loadAnimation({
    container: document.getElementById('animate-plane'),
    renderer : 'svg',
    loop: true,
    autoplay: true,
    path: './data/animate-plane.json'
})

var animation = bodymovin.loadAnimation({
    container: document.getElementById('animate-instagram'),
    renderer : 'svg',
    loop: true,
    autoplay: true,
    path: './data/animate-instagram.json'
})

var animation = bodymovin.loadAnimation({
    container: document.getElementById('animate-soccer'),
    renderer : 'svg',
    loop: true,
    autoplay: true,
    path: './data/animate-soccer.json'
})



var c = new CountUp("counter1",0,15);

c.start();

var c = new CountUp("counter2",0,5000);

c.start();

var c = new CountUp("counter3",0,5);

c.start();





  //! VARIABLES


    const backgroundVideo = document.querySelector('.bg-video_content'),
          clickMe = document.querySelector('.video'),
          lightBox = document.querySelector('.light-box'),
          closeBox = document.querySelector('.exit');


  //! FUNCTIONS


  function videoSource(element, src, type) {
    var source = document.createElement('source');

    source.src = src;
    source.type = type;

    element.appendChild(source);
  }

  function openLightBox(){
    lightBox.classList.add('show-lightbox');
  }
    
  function closeLightBox(){
    lightBox.classList.remove('show-lightbox');
  }



  //! EVENTS


    window.addEventListener('load', () => {

    if (window.matchMedia("(max-width: 700px)").matches) {
      videoSource(backgroundVideo, 'video/bg_videos/mobile.m4v', 'video/mp4');
    } else if (window.matchMedia("(max-width: 999px)").matches) {
      videoSource(backgroundVideo, 'video/bg_videos/tablet.m4v', 'video/mp4');
    } else if (window.matchMedia("(min-width: 1000px)").matches) {
      videoSource(backgroundVideo, 'video/bg_videos/desktop.m4v', 'video/mp4');
    }

  });

    clickMe.addEventListener('click', openLightBox);
    closeBox.addEventListener('click', closeLightBox);


})();