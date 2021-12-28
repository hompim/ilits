$(document).ready(function(){
    $("main, footer").on("click", function() {
        console.log(this);
        if(document.getElementsByClassName("navbar-collapse")[0].classList.contains("show"))
            document.getElementsByClassName("navbar-toggler")[0].click();
    })
});