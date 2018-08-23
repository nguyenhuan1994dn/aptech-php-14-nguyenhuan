$(document).ready(function () {
    $("#congtac").click(function () {
        $("#bongden").attr("src", function (i, val) {
            if (val.includes("off")) {
                return "./pic_bulbon.gif"
            } else {
                return "./pic_bulboff.gif"
            }
        })
    })
})