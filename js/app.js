(() => {

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




})();