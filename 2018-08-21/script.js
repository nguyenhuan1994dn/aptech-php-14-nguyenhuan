function battat() {
    var div = document.getElementById("js-div");
    console.log(div.className);
    if (div.className.includes("d-none")) {
        div.classList.add("d-block");
    } else {
        div.className = "d-none";
    }
}