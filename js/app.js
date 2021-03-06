(() => {

    console.log("Welcome to my Portfolio");

    $(document).foundation()

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

  //! VARIABLES


    const backgroundVideo = document.querySelector('.bg-video_content');


  //! FUNCTIONS


  function videoSource(element, src, type) {
    var source = document.createElement('source');

    source.src = src;
    source.type = type;

    element.appendChild(source);
  }


  //! EVENTS


    window.addEventListener('load', () => {

    if (window.matchMedia("(max-width: 700px)").matches) {
      videoSource(backgroundVideo, 'video/bg_videos/mobile.mp4', 'video/mp4');
    } else if (window.matchMedia("(max-width: 999px)").matches) {
      videoSource(backgroundVideo, 'video/bg_videos/tablet.mp4', 'video/mp4');
    } else if (window.matchMedia("(min-width: 1000px)").matches) {
      videoSource(backgroundVideo, 'video/bg_videos/desktop.mp4', 'video/mp4');
    }

  });


  var video = document.getElementById("video");
  var exit = document.getElementById("exit");
  exit.addEventListener("click",function(){
    video.pause();
  });
  
  document.documentElement.style.overflow = 'hidden';
  document.body.scroll = "no";

  document.documentElement.style.overflow = 'scroll';
  document.body.scroll = "yes";

})();
