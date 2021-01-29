
$(document).ready(function () {


    $("form.product-container").on("submit" ,function(){

        var invisiblevalue = $("input.values").val(); //Initial qty of product selected
        var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty
 
        //Setting the new qty to specific items in cart
        $("input.values").val(newV);
        
        //Getting the name of the proxduct from input value
        var input_value = $(".proname").val();

        //Gather form submission data
        var holder = $(this), //"holder" is just so we don't keep typing "this"
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$(".proname").attr('name')] = input_value; //Adding POST data to be sent
        
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
