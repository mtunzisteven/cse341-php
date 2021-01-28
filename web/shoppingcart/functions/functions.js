$(document).ready(function () {
    $("#watch").click( function(){

        var invisiblevalue = $("#watchvalue").val();
        var newV = ParseInt(invisiblevalue)+1;

        $("#watchvalue").val(newV);
        alert("Value of invisible changed to: "+$("#watchvalue").val());
    });
});