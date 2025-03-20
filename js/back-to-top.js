let backToTopButton = document.getElementById("backToTop");

window.onscroll = function () {
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 800) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
};

backToTopButton.onclick = function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
};