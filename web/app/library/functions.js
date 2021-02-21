$(document).ready(function () {
    $(".developer-button").on("click", function(){
        $(this).addClass("on");
        $(".customer-form").addClass("hide");
        $(".customer-button").removeClass("on");
        $(".developer-form").removeClass("hide");
    });

    $(".customer-button").on("click", function(){
        $(this).addClass("on");
        $(".developer-form").addClass("hide");
        $(".developer-button").removeClass("on");
        $(".customer-form").removeClass("hide");
    });
});