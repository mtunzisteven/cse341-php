
$(document).ready(function () {

    $(".removers").click(function (e) { 
        e.preventDefault();       
        remove(this);
    });

    $("#form1").on("submit" ,function(e){
        e.preventDefault();
        send_to_cart(this);
        return false;
    });

    $("#form2").on("submit" ,function(e){
        e.preventDefault();
        send_to_cart(this);
        return false;    });
    
    $("#form3").on("submit" ,function(e){
        e.preventDefault();
        send_to_cart(this);
        return false;    });

    $("#form4").on("submit" ,function(e){
        e.preventDefault();
        send_to_cart(this);
        return false;    });
    
    $("#form5").on("submit" ,function(e){
        e.preventDefault();
        send_to_cart(this);
        return false;    
    });

    $("#form6").on("submit" ,function(e){
        e.preventDefault();
        send_to_cart(this);
        return false;    
    });

    $("#form7").on("submit" ,function(e){
        e.preventDefault();
        send_to_cart(this);
        return false;
    });

    $("#form8").on("submit" ,function(e){
        e.preventDefault();
        send_to_cart(this);
        return false;
    });

    $(".complete").on("submit", function(e){
        e.preventDefault();
        var form = $(".checkout-form").attr("class");
        var formclass = "."+form;
        inputs={};
        inputs = $(formclass).children("checkout-input");
        
        $.each(inputs, function(index, value){
            alert( index + ": " + value );
            confirm(value);
        });

        
        return false;
    });
});

function send_to_cart(form){
    var itemQty, item_name, src_id;
    formid = $(form).attr("id"); //get id
    var properId = "#"+formid;

    if(formid=="form1") {
        
            itemQty = "#watchqty";
            item_name = "#watchdata";
            src_id = "#watchsrc";
    }
    else if(formid=="form2"){
            itemQty = "#saltsqty";
            item_name = "#saltsdata";
            src_id = "#saltssrc";
    }
    else if(formid=="form3"){
            itemQty = "#sandalsqty";
            item_name = "#sandalsdata";
            src_id = "#sandalssrc";

     }
    else if(formid=="form4"){
            itemQty = "#oilsqty";
            item_name = "#oilsdata";
            src_id = "#oilssrc";

     }
    else if(formid=="form5"){
            itemQty = "#maskqty";
            item_name = "#maskdata";
            src_id = "#masksrc";

    }
    else if(formid=="form6"){
            itemQty = "#chanelqty";
            item_name = "#chaneldata";
            src_id = "#chanelsrc";

    }
    else if(formid=="form7"){
            itemQty = "#loaferqty";
            item_name = "#loaferdata";
            src_id = "#loafersrc";

    }
    else if(formid=="form8"){
            itemQty = "#trainerqty";
            item_name = "#trainerdata";
            src_id = "#trainersrc";

    }
    else{alert("Product not added accordingly to cart!")}


    var invisiblevalue = $(itemQty).val(); //Initial qty of product selected
    var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty

    //Setting the new qty to specific items in cart
    $(itemQty).val(newV);

    //Gather form submission data
    var holder = $(properId), //"holder" is just so we don't keep typing "this"
        url = holder.attr("action"),
        method =holder.attr("method"),
        data = {};

        data[$(itemQty).attr('name')] = $(itemQty).val(); //Adding item name to POST data to be sent
        data[$(src_id).attr('name')] = $(src_id).val(); //Adding item name to POST data to be sent
        data[$(item_name).attr('name')] = $(item_name).val(); //Adding item name to POST data to be sent
    
    //The actual ajax data transfer method. Data gathered above will now be used.
    $.ajax({
        type: method, 
        url: url,
        data: data,
        success: function (response) {
            console.log(response);
        }
        
    });
}

function remove(button){
    var buttonid = $(button).attr("id"); //get id
    var properId = "#"+buttonid;
    var containerclass = "."+buttonid;

    data = {};

    data[$(properId).attr("name")] = $(properId).val();

    $.ajax({
        type : "post",
        url : "cart.php",
        data : data,
        success: function (response){
            console.log(response);
        }
    })

    $(containerclass).remove();

    var inputs = $("input").length;

    if(inputs==1){
        $("input").remove(); //checkout button must go

        $(".cart-form").html('<p class="cart-item-title2">Your Cart is empty</p>');
    }
}


function confirm(input){
    data = {};

    data[$(input).attr("name")] = $(input).val();

    $.ajax({
        type : "post",
        url : "confirmation.php",
        data : data,
        success: function (response){
            console.log(response);
        }
    })
}