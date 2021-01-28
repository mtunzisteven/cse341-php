$(document).ready(function () {

    $("#watch").click( function(){

        var invisiblevalue = $("#watchvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#watchvalue").val(newV);
        $(".cart-span").text(total);
        
        var input_value = $("#watch-label").text();
        $("#watchdata").attr("value", input_value);

    
        // submit the form, to retrieve the del_id value from $_POST
        $("#form1").submit();
        return false;
    });


    $("#salts").click( function(){

        var invisiblevalue = $("#saltsvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#saltsvalue").val(newV);
        $(".cart-span").text(total);
    });

    $("#sandals").click( function(){

        var invisiblevalue = $("#sandalsvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#sandalsvalue").val(newV);
        $(".cart-span").text(total);
    });  

    $("#oil").click( function(){

        var invisiblevalue = $("#oilvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#oilvalue").val(newV);
        $(".cart-span").text(total);
    }); 

    $("#mask").click( function(){

        var invisiblevalue = $("#maskvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#maskvalue").val(newV);
        $(".cart-span").text(total);
    }); 

    $("#gabriel").click( function(){

        var invisiblevalue = $("#gabrielvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#gabrielvalue").val(newV);
        $(".cart-span").text(total);
    }); 

    $("#loafer").click( function(){

        var invisiblevalue = $("#loafervalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#loafervalue").val(newV);
        $(".cart-span").text(total);
    }); 

    $("#trainer").click( function(){

        var invisiblevalue = $("#trainervalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#trainervalue").val(newV);
        $(".cart-span").text(total);
    }); 

});