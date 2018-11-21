(() => {

var animation = bodymovin.loadAnimation({
    container: document.getElementById('info-plane'),
    renderer : 'svg',
    loop: true,
    autoplay: true,
    path: './data/info-plane.json'
})

var animation = bodymovin.loadAnimation({
    container: document.getElementById('info-instagram'),
    renderer : 'svg',
    loop: true,
    autoplay: true,
    path: './data/info-instagram.json'
})

var animation = bodymovin.loadAnimation({
    container: document.getElementById('info-soccer'),
    renderer : 'svg',
    loop: true,
    autoplay: true,
    path: './data/info-soccer.json'
})


})();