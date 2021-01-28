$(document).ready(function () {
    $("#watch").click( fucntion(){

        var invisiblevalue = $("#watchvalue").val();
        var newV = invisiblevalue+1;

        $("#watchvalue").val(newV);
    });
});