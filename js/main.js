$(document).ready(function () {
    $(document).on("click", ".square-radio", function () {
        $(this).toggleClass("square-radio--clicked");
    });
});