var banners = ["img/lab01.jpg", "img/lab02.jpg", "img/lab03.jpg", "img/lab04.jpg"];
var bannerAtual = 0;

function trocaBanner()
{
    bannerAtual = (bannerAtual + 1) % 4;
    document.querySelector('.lab img').src = banners[bannerAtual];
}

setInterval(trocaBanner, 4000);