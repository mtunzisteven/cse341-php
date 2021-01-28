
$(document).ready(function () {


    $("form.product-container").on("submit" ,function(){

        var invisiblevalue = $("input.values").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("input.values").val(newV);
        $(".cart-span").text(total);
        
        var input_value = $(".proname").val();

        var holder = $(this),
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$(".proname").attr('name')] = input_value;
        
        $.ajax({
            type: method,
            url: url,
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false;
    });

/*
    $("#salts").click( function(){

        var invisiblevalue = $("#saltsvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        //Add the total quantity
        $("#saltsvalue").val(newV);

        //Add the total number of items in cart
        $(".cart-span").text(total);

        //Get the name of the item
        var input_value = $("#salts-label").text();

        //add it to the value input element using AJAX
        $("#saltsvalue").attr("value", input_value);

    
        // submit the form, to retrieve the del_id value from $_POST
        $("#form2").submit();
        return false;
    });

    $("#sandals").click( function(){

        var invisiblevalue = $("#sandalsvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#sandalsvalue").val(newV);
        $(".cart-span").text(total);

        var input_value = $("#sandals-label").text();
        $("#sandalsvalue").attr("value", input_value);

    
        // submit the form, to retrieve the del_id value from $_POST
        $("#form3").submit();
        return false;
    });  

    $("#oil").click( function(){

        var invisiblevalue = $("#oilvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#oilvalue").val(newV);
        $(".cart-span").text(total);

        var input_value = $("#oil-label").text();
        $("#oilvalue").attr("value", input_value);

    
        // submit the form, to retrieve the del_id value from $_POST
        $("#form4").submit();
        return false;
    }); 

    $("#mask").click( function(){

        var invisiblevalue = $("#maskvalue").val();
        var newV = parseInt(invisiblevalue)+1;
        var cart = parseInt($(".cart-span").text());
        var total = newV+cart;

        $("#maskvalue").val(newV);
        $(".cart-span").text(total);

        var input_value = $("#oil-label").text();
        $("#oilvalue").attr("value", input_value);

    
        // submit the form, to retrieve the del_id value from $_POST
        $("#form4").submit();
        return false;
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
    }); */

});
