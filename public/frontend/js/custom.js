(function ($) {
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".plus-icon").forEach(icon => {
        icon.addEventListener("click", function () {
            this.previousElementSibling.classList.toggle("extra-skill");
            this.style.display = "none"; // Hide the plus icon after expanding
        });
    });
});
})(jQuery);
