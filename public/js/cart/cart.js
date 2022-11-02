$(document).ready(function(){

    $.ajax({
        url: 'api/carts/'+window.userID,
        type: 'GET',
        dataType: 'json',
        success: function (data){
            let htt = "";
          $.each (data, function (bb) {
              $("#product_name").val(data[bb].productName);
              $("#product_price").val(data[bb].product.price);
              $("#product_quantity").val(data[bb].quantity);
              $("#product_total").val(data[bb].product.price*data[bb].quantity);
          })
        }
    });

    $( "#product_quantity" ).change(function() {
        let pr = parseInt($("#product_price").val());
        let qn = parseInt($("#product_quantity").val());
        $("#product_total").val(pr * qn);
    });
    
});