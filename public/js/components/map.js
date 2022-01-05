function onVirtualExpoPlay() {
    const playLayer = document.getElementsByClassName('layer-play')[0];
    playLayer.style.opacity = 0;
    setTimeout(() => {
        playLayer.classList.add('d-none');
        playLayer.classList.remove('d-flex');
    }, 300)
    window.location.href("https://arek.its.ac.id/virtual-expo/")
}