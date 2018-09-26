function turnOn_Off() {
    var img = document.getElementById('js-bulb');
    console.log(img.src);
    if (img.src.includes("pic_bulboff.gif")) {
        // console.log("dung roi dang tat")
        img.src = "./pic_bulbon.gif";
    } else {
        img.src = "./pic_bulboff.gif";
    }
}

/* //img.src = "http://127.0.0.1:5500/pic_bulboff.gif";
    if (img.src === "http://127.0.0.1:5500/pic_bulboff.gif") {
        // console.log("dung roi dang tat")
        img.src = "http://127.0.0.1:5500/pic_bulbon.gif";
    } else {
        img.src = "http://127.0.0.1:5500/pic_bulboff.gif";
    }
}
*/