
$(document).ready(function () {

    $("#form1").on("submit" ,function(e){
        e.preventDefault();
        action(this);
        return false;
    });

    $("#form2").on("submit" ,function(e){
        e.preventDefault();
        action(this);
        return false;    });
    
    $("#form3").on("submit" ,function(e){
        e.preventDefault();
        action(this);
        return false;    });

    $("#form4").on("submit" ,function(e){
        e.preventDefault();
        action(this);
        return false;    });
    
    $("#form5").on("submit" ,function(e){
        e.preventDefault();
        action(this);
        return false;    });

    $("#form6").on("submit" ,function(e){
        action(this);
    });

    $("#form7").on("submit" ,function(e){
        e.preventDefault();
        action(this);
        return false;
    });

    $("#form8").on("submit" ,function(e){
        e.preventDefault();
        action(this);
        return false;
    });

    /*

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

        var invisiblevalue = $("#sandalsqty").val(); //Initial qty of product selected
        var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty
 
        //Setting the new qty to specific items in cart
        $("#sandalsqty").val(newV);
        
        //Getting the name of the proxduct from input value
        var item_name = $("#sandalsdata").val();

        //Gather form submission data
        var holder = $(this), //"holder" is just so we don't keep typing "this"
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$("#sandalsdata").attr('name')] = item_name; //Adding item name to POST data to be sent
                   
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
*/
    
});

function action(form){
    var itemQty, item_name, name, src;
    formid = $(form).attr("id"); //get id
    var properId = "#"+formid;
    

    alert(formid);
    alert(properId);

    if(formid=="form1") {
        
            itemQty = "#watchqty";
            item_name = "#watchdata";
            src = "watchsrc";
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
            itemQty = "#soillsqty";
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
    else{alert("Not working accordingly!")}


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