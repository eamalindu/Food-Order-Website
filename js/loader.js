$(window).on("load", function () {
    setTimeout(removeLoader, 1e3), setInterval(function e() {
        $("#load-text").fadeOut(500).fadeIn(500)
    }, 250)
});

function removeLoader() {
    $(".preloader").fadeOut(500, function () {
        $(".preloader").remove()
    })
}
