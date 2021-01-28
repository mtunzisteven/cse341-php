$(document).ready(function () {

    $("#salts").click( function(){

        var invisiblevalue = $("#saltsvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#saltsvalue").val(newV);
        $(".cart-span").text(total);
    });

    $("#watch").click( function(){

        var invisiblevalue = $("#watchvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#watchvalue").val(newV);
        $(".cart-span").text(total);
    });


    $("#sandals").click( function(){

        var invisiblevalue = $("#sandalsvalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#sandalsvalue").val(newV);
        $(".cart-span").text(newV);
    });  

    $("#oil").click( function(){

        var invisiblevalue = $("#oilvalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#oilvalue").val(newV);
        $(".cart-span").text(newV);
    }); 

    $("#mask").click( function(){

        var invisiblevalue = $("#maskvalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#maskvalue").val(newV);
        $(".cart-span").text(newV);
    }); 

    $("#gabriel").click( function(){

        var invisiblevalue = $("#gabrielvalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#gabrielvalue").val(newV);
        $(".cart-span").text(newV);
    }); 

    $("#loafer").click( function(){

        var invisiblevalue = $("#loafervalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#loafervalue").val(newV);
        $(".cart-span").text(newV);
    }); 

    $("#trainer").click( function(){

        var invisiblevalue = $("#trainervalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#trainervalue").val(newV);
        $(".cart-span").text(newV);
    }); 

});