var centers = document.getElementsByClassName('box');
var currentIndex = 3;

function loadMore() {
    for (var i = 0; i < 3 && currentIndex < centers.length; i++, currentIndex++) {
        centers[currentIndex].classList.remove('hidden');
    }

    if (currentIndex >= centers.length) {
        document.getElementById('viewmorebtn').style.display = 'none';
    }
}