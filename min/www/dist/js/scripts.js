function hamburger() {
    var x = document.getElementById("odkazy");
    if (x.style.display === "flex") {
        x.style.display = "none";
    } else {
        x.style.display = "flex";
    }
}
window.onscroll = function() { onScroll() };

var header = document.getElementById("header");
var article = document.getElementById("odsazeni");
var filtr = document.getElementById("filtr");
var sticky = header.offsetTop;

function onScroll() {
    if (window.pageYOffset >= sticky) {
        header.classList.add("sticky");
        article.classList.add("odsazeni");
        filtr.classList.add("odsazeni-margin");
    } else {
        header.classList.remove("sticky");
        article.classList.remove("odsazeni");
        filtr.classList.remove("odsazeni-margin");

    }
}

$(document).ready(function(){
    var userFeed = new Instafeed({
        get: 'user',
        userId: '16852286202',
        limit :6,
        resolution: 'standard_resolution',
        accessToken: '16852286202.1677ed0.89484018e12d4deb8f22b22e06fe90a5',
        sortBy: 'most-recent',
        template: '<div class="grid-cell"><div class="square"><a href="{{link}}" title = "{{caption}}" target="_blank"><img src="{{image}}" alt{{caption}} /></a></div></div>',
    });
    userFeed.run();
});