
$(".dark-logo").fadeOut("slow")
$("#hamburger-btn").click(function () {
    $(".nav-container").css("left","0px")
    setTimeout(() => {
        $(".dark-logo").fadeIn("slow")
    }, 400);
})
$(".nav-close-btn").click(function () {
    $(".nav-container").css("left","100%")
    $(".dark-logo").fadeOut("slow")
})

window.onscroll = function () {
    if (window.scrollY > 50) {
        $(".top-navbar").css("background","black")
        $(".top-navbar-light").css("background","white")
    }
    else{
        $(".top-navbar").css("background","rgba(0, 0, 0, 0.58)")
        $(".top-navbar-light").css("background","rgba(255, 255, 255, 0.58)")
    }
}
$("html").scroll(function () {
})