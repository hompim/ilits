$(document).ready(function(){
    $("main, footer").on("click", function() {
        if(document.getElementsByClassName("navbar-collapse")[0].classList.contains("show"))
            document.getElementsByClassName("navbar-toggler")[0].click();
    })
});