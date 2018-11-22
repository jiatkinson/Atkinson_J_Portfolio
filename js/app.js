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



document.getElementById ("video1").addEventListener ("click", showLightBox);

function showLightBox() {

    document.getElementById('lightBoxContent').style.display = "block";

}





  //! VARIABLES

    const backgroundVideo = document.querySelector('.bg-video_content');


  //! FUNCTIONS

  // Helper Functions: create <source> video element to load dynamically different video size
  function videoSource(element, src, type) {
    var source = document.createElement('source');

    source.src = src;
    source.type = type;

    element.appendChild(source);
  }

  //! EVENTS
  window.addEventListener('load', () => {

    // create source video element according to screen size
    if (window.matchMedia("(max-width: 700px)").matches) {
      videoSource(backgroundVideo, 'video/bg_videos/mobile.m4v', 'video/mp4');
    } else if (window.matchMedia("(max-width: 999px)").matches) {
      videoSource(backgroundVideo, 'video/bg_videos/tablet.m4v', 'video/mp4');
    } else if (window.matchMedia("(min-width: 1000px)").matches) {
      videoSource(backgroundVideo, 'video/bg_videos/desktop.m4v', 'video/mp4');
    }

  });





})();