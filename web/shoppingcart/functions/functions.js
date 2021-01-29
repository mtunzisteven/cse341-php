
$(document).ready(function () {


    $("form.product-container").on("submit" ,function(){

        var invisiblevalue = $(".qty").val(); //Initial qty of product selected
        var newV = parseInt(invisiblevalue)+1;        //1 added per selection to qty
 
        //Setting the new qty to specific items in cart
        $(".qty").val(newV);
        
        //Getting the name of the proxduct from input value
        var item_name = $(".proname").val();

        var item_src = $(".src").val();

        //Gather form submission data
        var holder = $(this), //"holder" is just so we don't keep typing "this"
            url = holder.attr("action"),
            method =holder.attr("method"),
            data = {};

            data[$(".proname").attr('name')] = item_name; //Adding item name to POST data to be sent
            data[$(".qty").attr('name')] = newV; //Adding item quantity to POST data to be sent
            data[$(".src").attr('name')] = item_src; //Adding item image source to POST data to be sent

        
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
