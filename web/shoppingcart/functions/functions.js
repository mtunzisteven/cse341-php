
$(document).ready(function () {


    $("#form1").on("submit" ,function(){

        var invisiblevalue = $("#watchqty").val(); //Initial qty of product selected
        var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty
 
        //Setting the new qty to specific items in cart
        $("#watchqty").val(newV);
        
        //Getting the name of the proxduct from input value
        var item_name = $("#watchdata").val();

        //Gather form submission data
        var holder = $(this), //"holder" is just so we don't keep typing "this"
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$("#watchdata").attr('name')] = item_name; //Adding item name to POST data to be sent
        
        //The actual ajax data transfer method. Data gathered above will now be used.
        $.ajax({
            type: method, 
            url: url,
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false; //With this return value, we ensure the form doesn't get submitted and reload the page
    });

    $("#form2").on("submit" ,function(){

        var invisiblevalue = $("#saltsqty").val(); //Initial qty of product selected
        var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty
 
        //Setting the new qty to specific items in cart
        $("#saltsqty").val(newV);
        
        //Getting the name of the proxduct from input value
        var item_name = $("#saltsdata").val();

        //Gather form submission data
        var holder = $(this), //"holder" is just so we don't keep typing "this"
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$("#saltsdata").attr('name')] = item_name; //Adding item name to POST data to be sent
        
        //The actual ajax data transfer method. Data gathered above will now be used.
        $.ajax({
            type: method, 
            url: url,
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false; //With this return value, we ensure the form doesn't get submitted and reload the page
    });

    $("#form3").on("submit" ,function(){

        var invisiblevalue = $("#maskqty").val(); //Initial qty of product selected
        var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty
 
        //Setting the new qty to specific items in cart
        $("#maskqty").val(newV);
        
        //Getting the name of the proxduct from input value
        var item_name = $("#maskdata").val();

        //Gather form submission data
        var holder = $(this), //"holder" is just so we don't keep typing "this"
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$("#maskdata").attr('name')] = item_name; //Adding item name to POST data to be sent
                   
        //The actual ajax data transfer method. Data gathered above will now be used.
        $.ajax({
            type: method, 
            url: url,
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false; //With this return value, we ensure the form doesn't get submitted and reload the page
    });

    $("#form4").on("submit" ,function(){

        var invisiblevalue = $("#oilsqty").val(); //Initial qty of product selected
        var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty
 
        //Setting the new qty to specific items in cart
        $("#oilsqty").val(newV);
        
        //Getting the name of the proxduct from input value
        var item_name = $("#oilsdata").val();


        //Gather form submission data
        var holder = $(this), //"holder" is just so we don't keep typing "this"
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$("#oilsdata").attr('name')] = item_name; //Adding item name to POST data to be sent
    
        //The actual ajax data transfer method. Data gathered above will now be used.
        $.ajax({
            type: method, 
            url: url,
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false; //With this return value, we ensure the form doesn't get submitted and reload the page
    });

    $("#form5").on("submit" ,function(){

        var invisiblevalue = $("#maskqty").val(); //Initial qty of product selected
        var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty
 
        //Setting the new qty to specific items in cart
        $("#maskqty").val(newV);
        
        //Getting the name of the proxduct from input value
        var item_name = $("#maskdata").val();

        //Gather form submission data
        var holder = $(this), //"holder" is just so we don't keep typing "this"
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$("#maskdata").attr('name')] = item_name; //Adding item name to POST data to be sent
        
        //The actual ajax data transfer method. Data gathered above will now be used.
        $.ajax({
            type: method, 
            url: url,
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false; //With this return value, we ensure the form doesn't get submitted and reload the page
    });

    $("#form6").on("submit" ,function(){

        var invisiblevalue = $("#oilsqty").val(); //Initial qty of product selected
        var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty
 
        //Setting the new qty to specific items in cart
        $("#oilsqty").val(newV);
        
        //Getting the name of the proxduct from input value
        var item_name = $("#oilsdata").val();

        //Gather form submission data
        var holder = $(this), //"holder" is just so we don't keep typing "this"
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$("#oilsdata").attr('name')] = item_name; //Adding item name to POST data to be sent
        
        //The actual ajax data transfer method. Data gathered above will now be used.
        $.ajax({
            type: method, 
            url: url,
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false; //With this return value, we ensure the form doesn't get submitted and reload the page
    });

    $("#form7").on("submit" ,function(){

        var invisiblevalue = $("#chanelqty").val(); //Initial qty of product selected
        var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty
 
        //Setting the new qty to specific items in cart
        $("#chanelqty").val(newV);
        
        //Getting the name of the proxduct from input value
        var item_name = $("#chaneldata").val();

        //Gather form submission data
        var holder = $(this), //"holder" is just so we don't keep typing "this"
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$("#chaneldata").attr('name')] = item_name; //Adding item name to POST data to be send
        
        //The actual ajax data transfer method. Data gathered above will now be used.
        $.ajax({
            type: method, 
            url: url,
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false; //With this return value, we ensure the form doesn't get submitted and reload the page
    });

    $("#form8").on("submit" ,function(){

        var invisiblevalue = $("#loaferqty").val(); //Initial qty of product selected
        var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty
 
        //Setting the new qty to specific items in cart
        $("#loaferqty").val(newV);
        
        //Getting the name of the proxduct from input value
        var item_name = $("#loaferdata").val();

        //Gather form submission data
        var holder = $(this), //"holder" is just so we don't keep typing "this"
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$("#loaferdata").attr('name')] = item_name; //Adding item name to POST data to be sent
        
        //The actual ajax data transfer method. Data gathered above will now be used.
        $.ajax({
            type: method, 
            url: url,
            data: data,
            success: function (response) {
                console.log(response);
            }
        });

        return false; //With this return value, we ensure the form doesn't get submitted and reload the page
    });

    
});
