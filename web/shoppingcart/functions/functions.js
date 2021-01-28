$(document).ready(function () {
    $("#watch").click( function(){

        var invisiblevalue = $("#watchvalue").val();
        var newV = invisiblevalue+1;

        $("#watchvalue").val(newV);
        alert("Value of invisible changed to: "+$("#watchvalue").val());
    });
});