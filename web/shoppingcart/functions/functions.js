$(document).ready(function () {
    var total=0;
    $("#salts").click( function(){

        var invisiblevalue = $("#saltsvalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#saltsvalue").val(newV);
        alert("Value is :"+$("#saltsvalue").val());
        total=total + val(newV);
        $(".cart-span").val(total);
    });

    $("#watch").click( function(){

        var invisiblevalue = $("#watchvalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#watchvalue").val(newV);
        alert("Value is :"+$("#watchvalue").val());
        total+=val(newV);
        $(".cart-span").text(total);
    });


    $("#sandals").click( function(){

        var invisiblevalue = $("#sandalsvalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#sandalsvalue").val(newV);
        alert("Value is :"+$("#sandalsvalue").val());
        total+=val(newV);
        $(".cart-span").text(total);
    });  

    $("#oil").click( function(){

        var invisiblevalue = $("#oilvalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#oilvalue").val(newV);
        alert("Value is :"+$("#oilvalue").val());
        total+=val(newV);
        $(".cart-span").text(total);
    }); 

    $("#mask").click( function(){

        var invisiblevalue = $("#maskvalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#maskvalue").val(newV);
        alert("Value is :"+$("#maskvalue").val());
        total+=val(newV);
        $(".cart-span").text(total);
    }); 

    $("#gabriel").click( function(){

        var invisiblevalue = $("#gabrielvalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#gabrielvalue").val(newV);
        alert("Value is :"+$("#gabrielvalue").val());
        total+=val(newV);
        $(".cart-span").text(total);
    }); 

    $("#loafer").click( function(){

        var invisiblevalue = $("#loafervalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#loafervalue").val(newV);
        alert("Value is :"+$("#loafervalue").val());
        total+=val(newV);
        $(".cart-span").text(total);
    }); 

    $("#trainer").click( function(){

        var invisiblevalue = $("#trainervalue").val();
        var newV = parseInt(invisiblevalue)+1;

        $("#trainervalue").val(newV);
        alert("Value is :"+$("#trainervalue").val());
        total+=val(newV);
        $(".cart-span").text(total);
    }); 

});