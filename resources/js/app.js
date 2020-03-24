require('./bootstrap');
const $ = require("jquery");

$(document).ready(function(){
    $(document).on("click", ".are-you-sure", function(){
        $(".pop-up").css("display", "none");
        var gameId = $(this).attr("data-number");
        console.log(gameId);
        $("body").find(".pop-up").eq(gameId - 1).css("display", "inline-block");        
    });
});
